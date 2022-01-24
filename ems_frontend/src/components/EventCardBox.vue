<template>
  <div>
    <b-row>
      <b-col>
        <vs-card :key="event.event_id">
          <template #title>
            <router-link
              class="routertext"
              :to="{ name: 'Event', params: { id: event.event_id } }"
            >
              <h3>{{ event.e_name }}</h3>
            </router-link>
          </template>
          <template #img>
            <router-link
              class="routertext"
              :to="{ name: 'Event', params: { id: event.event_id } }"
            >
              <img :src="event.e_image_url" alt="" style="min-height:250px" />
            </router-link>
          </template>
          <template #text>
            <p>
              {{ event.e_location }}
            </p>
            <p class="overflow">
              {{ event.e_desc }}
            </p>
          </template>
          <template #interactions>
            <vs-button v-if="event.t_type" warn icon>
              <i class="bx bx-dollar-circle"></i>
              <span class="span">
                {{ event.total_revenue }}
              </span>
            </vs-button>
            <vs-button v-if="!event.t_type" icon>
              <i class="bx bx-dollar-circle"></i>
              <span class="span">
                {{ event.total_revenue }}
              </span>
            </vs-button>
            <vs-button success icon>
              <i class="bx bx-purchase-tag-alt"></i>
              <span class="span">
                {{ event.total_sold }}
              </span>
            </vs-button>
            <vs-button class="btn-chat" shadow primary>
              <box-icon name="calendar"></box-icon>
              <span class="span">
                {{ event.e_date }}
              </span>
            </vs-button>
          </template>
        </vs-card>
      </b-col>
    </b-row>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log(event);
  },
  name: 'EventCardBox',
  props: ['event'],
};
</script>

<style scoped>
.dashboard {
  padding-top: 5rem;
  padding-left: 5rem;
}

.dashboard h2 {
  padding-left: 5rem;
}

.routertext h3 {
  color: rgb(42, 81, 117);
  text-decoration: none;
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
</style>
