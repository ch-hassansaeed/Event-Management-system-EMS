<template>
  <div class="home">
    <b-row>
      <b-col cols="12">
        <div class="new-event">
          <form class="outer-form">
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
              <b-col cols="7">
                <h2>{{ event_data.e_name }}</h2>
                <p>{{ event_data.e_location }}</p>
                <p>{{ event_data.e_date }}</p>
                <p>{{ event_data.e_organizer }}</p>
                <br />
                <p>{{ event_data.e_desc }}</p>
                <b-row>
                  <b-col cols="2">
                    <template>
                      <div>
                        <router-link
                          :to="{ name: 'EditEvent', params: { id: event_id } }"
                        >
                          <vs-button flat block :active="active == 1">
                            Edit event
                          </vs-button>
                        </router-link>
                      </div>
                    </template>
                  </b-col>
                  <b-col cols="2">
                    <template>
                      <div>
                        <vs-button
                          border
                          danger
                          block
                          type="button"
                          @click="delete_confirm = true"
                        >
                          Delete event
                        </vs-button>
                      </div>
                    </template>
                  </b-col>
                </b-row>
              </b-col>
              <b-col cols="5">
                <form class="purchase-form" @submit.prevent="pushOrderData">
                  <b-row>
                    <b-col>
                      <h3>Buy tickets</h3>
                    </b-col>
                  </b-row>
                  <b-row>
                    <b-col>
                      <vs-input
                        block
                        primary
                        class="form-control"
                        v-model="c_name"
                        placeholder="Name"
                      >
                        <template
                          v-if="c_name.length < 3 && c_name.length > 0"
                          #message-danger
                        >
                          Valid Name Required
                        </template>
                      </vs-input>
                    </b-col>
                  </b-row>
                  <b-row>
                    <b-col>
                      <vs-input
                        block
                        primary
                        class="form-control"
                        v-model="c_email"
                        placeholder="Email"
                      >
                        <template
                          v-if="c_email.indexOf('@') < 1 && c_email.length > 0"
                          #message-danger
                        >
                          Valid Email Required
                        </template>
                      </vs-input>
                    </b-col>
                  </b-row>
                  <b-row>
                    <b-col>
                      <vs-input
                        block
                        primary
                        class="form-control"
                        v-model="c_phone"
                        type="number"
                        placeholder="Phone"
                      >
                        <template
                          v-if="c_phone < 1000000 && c_phone != ''"
                          #message-danger
                        >
                          Valid Phone number required
                        </template>
                      </vs-input>
                    </b-col>
                  </b-row>
                  <b-row>
                    <b-col>
                      <vs-input
                        block
                        primary
                        class="form-control"
                        v-model="c_t_no"
                        type="number"
                        placeholder="Number of tickets"
                      />
                    </b-col>
                  </b-row>
                  <br />
                  <b-row v-if="event_data.t_type">
                    <b-col>
                      <vs-radio warn v-model="t_select_type" val="1">
                        Silver
                      </vs-radio>
                    </b-col>
                    <b-col>
                      <vs-radio warn v-model="t_select_type" val="2">
                        Gold
                      </vs-radio>
                    </b-col>
                    <b-col>
                      <vs-radio warn v-model="t_select_type" val="3">
                        Platinum
                      </vs-radio>
                    </b-col>
                  </b-row>
                  <br />
                  <b-row>
                    <b-col>
                      <h4>Total cost: {{ total_cost }}</h4>
                    </b-col>
                  </b-row>
                  <b-row>
                    <b-col>
                      <vs-button block type="submit" animation-type="vertical">
                        Place order
                        <template #animate>
                          Let's go!
                        </template>
                      </vs-button>
                    </b-col>
                  </b-row>
                </form>
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
            <h4 class="not-margin">Order placed<b> successfully!</b></h4>
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

    <template>
      <div class="center">
        <vs-dialog width="300px" not-center v-model="delete_confirm">
          <template #header>
            <h5 class="not-margin">
              <b>Delete event</b>
            </h5>
          </template>

          <img
            class="delete_popup"
            src="https://cdn.dribbble.com/users/295355/screenshots/3550054/junkloader.gif"
            alt=""
          />
          <h4>Are you sure you want to delete this event?</h4>

          <template #footer>
            <div class="con-footer">
              <vs-button
                type="button"
                @click="deleteEvent()"
                danger
                transparent
              >
                Delete
              </vs-button>
              <vs-button
                type="button"
                @click="delete_confirm = false"
                dark
                transparent
              >
                Cancel
              </vs-button>
            </div>
          </template>
        </vs-dialog>
      </div>
    </template>

    <template>
      <div class="center">
        <vs-dialog blur v-model="delete_dialogue">
          <template #header>
            <h4 class="not-margin">Event deleted<b> successfully!</b></h4>
          </template>
          <div>
            <img
              class="popup"
              src="https://cdn.dribbble.com/users/592004/screenshots/2953817/___.gif"
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
      delete_dialogue: false,
      delete_confirm: false,
      event_id: null,
      event_data: [],
      c_name: '',
      c_email: '',
      c_phone: '',
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
    deleteEvent() {
      axios.delete('/deleteevent/' + this.event_id).catch(err => {
        alert('Oops..Something went wrong');
        console.log(err);
      });
      this.delete_confirm = false;
      this.delete_dialogue = true;
      setTimeout(() => {
        this.$router.push({ name: 'Dashboard' });
      }, 3500);
    },

    pushOrderData() {
      const content = {
        c_name: this.c_name,
        c_email: this.c_email,
        c_phone: this.c_phone,
        event_id: this.event_id,
        t_type: parseInt(this.t_select_type),
        no_of_tickets: this.c_t_no,
        total_cost: this.total_cost,
      };

      axios
        .post('/createnewticket', content)
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
  /* max-width: 400px; */
}

.delete_popup {
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
