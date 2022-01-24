<template>
  <div>
    <b-row>
      <b-col>
        <vs-card-group>
          <EventCardBox
            v-for="event in cards"
            v-bind:event="event"
            v-bind:key="event"
          />
        </vs-card-group>
      </b-col>
    </b-row>
  </div>
</template>

<script>
import axios from '../vuexios';
import EventCardBox from './EventCardBox.vue';

export default {
  components: { EventCardBox },
  data() {
    return {
      cards: [],
    };
  },
  mounted() {
    axios
      .get('/gettrendingevents')
      .then(response => {
        this.cards = response.data;
      })
      .catch(error => console.log(error.message));
  },
};
</script>
