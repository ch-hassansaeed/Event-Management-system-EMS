<template>
  <div class="home">
    <b-row>
      <b-col cols="12">
        <div class="new-event">
          <form class="outer-form" @submit.prevent="pushEditData">
            <b-row>
              <b-col>
                <div
                  v-if="event_data.e_image_url != null"
                  class="imagePreviewWrapper"
                  :style="{
                    'background-image': `url(${event_data.e_image_url})`,
                  }"
                ></div>
              </b-col>
            </b-row>
            <b-row>
              <b-col cols="12">
                <h2>{{ event_data.e_name }}</h2>
                <p>Edit the details of this event</p>
              </b-col>
            </b-row>

            <b-row>
              <b-col cols="4">
                <p class="field-name">Organizer</p>
              </b-col>
              <b-col cols="8">
                <div class="form-group">
                  <vs-input
                    block
                    primary
                    class="form-control"
                    v-model="event_data.e_organizer"
                  />
                </div>
              </b-col>
            </b-row>

            <b-row>
              <b-col cols="4">
                <p class="field-name">Date</p>
              </b-col>
              <b-col cols="3">
                <div class="form-group">
                  <vs-input
                    block
                    type="date"
                    primary
                    class="form-control"
                    v-model="event_data.e_date"
                  />
                </div>
              </b-col>
              <b-col cols="2">
                <p class="field-name">Duration(days)</p>
              </b-col>
              <b-col cols="3">
                <div class="form-group">
                  <vs-input
                    block
                    type="number"
                    primary
                    class="form-control"
                    v-model="event_data.e_duration"
                    placeholder="Days"
                  />
                </div>
              </b-col>
            </b-row>

            <b-row>
              <b-col cols="4">
                <p class="field-name">Location</p>
              </b-col>
              <b-col cols="8">
                <div class="form-group">
                  <vs-input
                    block
                    primary
                    class="form-control"
                    v-model="event_data.e_location"
                  />
                </div>
              </b-col>
            </b-row>

            <b-row>
              <b-col cols="4">
                <p class="field-name">Cover Image URL</p>
              </b-col>
              <b-col cols="8">
                <div class="form-group">
                  <vs-input
                    block
                    primary
                    class="form-control"
                    v-model="event_data.e_image_url"
                  />
                </div>
              </b-col>
            </b-row>

            <b-row>
              <b-col cols="4">
                <p class="field-name">More details</p>
              </b-col>
              <b-col cols="8">
                <div class="form-group">
                  <b-form-textarea
                    id="textarea"
                    v-model="event_data.e_desc"
                    placeholder="Description about the event..."
                    rows="3"
                    max-rows="6"
                  ></b-form-textarea>
                </div>
              </b-col>
            </b-row>
            <b-row>
              <b-col>
                <vs-button block type="submit" :active="active == 1">
                  Edit event
                </vs-button>
              </b-col>
            </b-row>
          </form>
        </div>
      </b-col>
    </b-row>
    <template>
      <div class="center">
        <vs-dialog blur v-model="active_dialogue">
          <template #header>
            <h4 class="not-margin">Event edited<b> successfully!</b></h4>
          </template>
          <div>
            <img
              class="popup"
              src="https://cdn.dribbble.com/users/2173054/screenshots/8143107/media/d5e2d1d137f0e7c374d66dd339d9b184.gif"
              alt=""
            />
          </div>
        </vs-dialog>
      </div>
    </template>
  </div>
</template>

<script>
import axios from '../vuexios';

export default {
  props: {},
  data() {
    return {
      active: 1,
      active_dialogue: false,
      event_id: null,
      event_data: [],
      c_name: '',
      c_email: '',
      c_phone: '',
      // e_duration: 5,
      t_select_type: '0',
      c_t_no: 1,
      n: 0,
      s: 0,
      g: 0,
      p: 0,
      total_cost: 0,
    };
  },
  created() {
    this.event_id = this.$route.params.id;
  },
  beforeUpdate() {
    this.calculateCost(this.event_data);
  },
  mounted() {
    axios
      .get('/geteventdata/' + this.event_id)
      .then(response => {
        this.event_data = response.data;
      })
      // .then(calculateCost(this.event_data))
      .catch(error => console.log(error.message));
    this.assignValues(this.event_data);
  },

  methods: {
    pushEditData() {
      const content = {
        id: this.event_id,
        e_desc: this.event_data.e_desc,
        e_organizer: this.event_data.e_organizer,
        e_location: this.event_data.e_location,
        e_duration: this.event_data.e_duration,
        e_date: this.event_data.e_date,
        e_image_url: this.event_data.e_image_url,
      };
      axios
        .post('/editeventalt', content)
        .then(response => {
          this.message = response.data.message;
        })
        .then(() => {
          this.active_dialogue = true;
          setTimeout(() => {
            this.$router.push({ name: 'Dashboard' });
          }, 2000);
        })
        .catch(err => {
          alert('All fields are required!');
          console.log(err);
        });
    },

    assignValues(data) {
      this.n = data.n_val;
      this.s = data.s_val;
      this.g = data.g_val;
      this.p = data.p_val;
    },
    calculateCost(eData) {
      if (eData.t_type === 0) {
        this.total_cost = this.c_t_no * eData.n_val;
      } else {
        if (this.t_select_type === null) {
          this.total_cost = 0;
        } else if (this.t_select_type === '1') {
          this.total_cost = this.c_t_no * eData.s_val;
        } else if (this.t_select_type === '2') {
          this.total_cost = this.c_t_no * eData.g_val;
        } else if (this.t_select_type === '3') {
          this.total_cost = this.c_t_no * eData.p_val;
        }
      }
    },
  },
};
</script>

<style scoped>
.new-event {
  height: 1000px;
  background-size: cover;
  position: relative;
}

label {
  cursor: pointer;
  color: blue;
  font-size: 10px;
  margin-left: 10px;
}

.popup {
  max-height: 17em;
}

.t-type {
  padding-bottom: 5px;
}

.t-sub {
  font-size: 10px;
  float: left;
  padding-top: 5px;
}

#upload-photo {
  opacity: 0;
  position: absolute;
  z-index: -1;
}

.overflow {
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  line-height: 16px;
  max-height: 32px;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}

.imagePreviewWrapper {
  width: 100%;
  height: 250px;
  display: block;
  cursor: pointer;
  margin: 0 auto 30px;
  object-fit: contain;
  background-size: cover;
  background-position: center center;
  border-radius: 10px;
}

.event-card {
  padding-top: 15rem;
}

.outer-form {
  text-align: center;
  max-width: 1400px;
  width: 100%;
  background-color: #ffffff;
  padding: 40px;
  border-radius: 4px;
  transform: translate(-50%, -50%);
  position: absolute;
  top: 45%;
  left: 50%;
  color: rgb(0, 0, 0);
  box-shadow: 3px 3px 4px rgba(255, 249, 249, 0.2);
}

.purchase-form {
  text-align: center;
  max-width: 500px;
  width: 100%;
  background-color: #ffffff;
  padding: 40px;
  border-radius: 4px;
  color: rgb(0, 0, 0);
  box-shadow: 3px 3px 4px rgba(255, 249, 249, 0.411);
}

.field-name {
  padding-top: 15px;
}

.new-event form .form-control {
  background: none;
  border: none;
  border-radius: 0;
  box-shadow: none;
  outline: none;
  color: inherit;
}
</style>
