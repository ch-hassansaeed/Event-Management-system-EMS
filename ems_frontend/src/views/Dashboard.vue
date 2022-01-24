<template>
  <div class="content">
    <b-row>
      <b-col cols="8">
        <h2>Trending Events</h2>
      </b-col>
      <b-col cols="4">
        <h3>Total Revenue</h3>
      </b-col>
    </b-row>
    <b-row>
      <b-col cols="8">
        <Trending />
      </b-col>
      <b-col cols="4">
        <br />
        <RevenueReport />
      </b-col>
    </b-row>
    <b-row>
      <b-col cols="12">
        <h2>Sports</h2>
      </b-col>
    </b-row>
    <b-row>
      <b-col cols="12">
        <SportsCards />
      </b-col>
    </b-row>
    <b-row>
      <b-col cols="12">
        <h2>Fun / Entertainment</h2>
      </b-col>
    </b-row>
    <b-row>
      <b-col cols="12">
        <FunCards />
      </b-col>
    </b-row>
  </div>
</template>

<script>
import Trending from '@/components/Trending.vue';
import RevenueReport from '@/components/RevenueReport.vue';
import SportsCards from '@/components/SportsCards.vue';
import FunCards from '@/components/FunCards.vue';

export default {
  components: {
    Trending,
    RevenueReport,
    SportsCards,
    FunCards,
  },
};
</script>
