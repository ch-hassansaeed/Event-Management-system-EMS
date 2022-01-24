<template>
  <div>
    <form>
      <b-row>
        <b-col cols="6">
          <h2>Sales</h2>
        </b-col>
        <b-col cols="6">
          <h2>Revenue</h2>
        </b-col>
      </b-row>
      <b-row>
        <b-col cols="6">
          <h3>{{ report_data.total_sold }}</h3>
        </b-col>
        <b-col cols="6">
          <h3>${{ report_data.total_revenue }}</h3>
        </b-col>
      </b-row>
      <br />
      <b-row>
        <vs-table striped>
          <template #thead>
            <vs-tr>
              <vs-th>Type</vs-th>
              <vs-th>Normal</vs-th>
              <vs-th>Silver</vs-th>
              <vs-th>Gold</vs-th>
              <vs-th>Platinum</vs-th>
            </vs-tr>
          </template>
          <template #tbody>
            <vs-tr>
              <vs-td>Count</vs-td>
              <vs-td>{{ report_data.n_count }}</vs-td>
              <vs-td>{{ report_data.s_count }}</vs-td>
              <vs-td>{{ report_data.g_count }}</vs-td>
              <vs-td>{{ report_data.p_count }}</vs-td>
            </vs-tr>
            <vs-tr>
              <vs-td>Revenue</vs-td>
              <vs-td>{{ report_data.n_rev }}</vs-td>
              <vs-td>{{ report_data.s_rev }}</vs-td>
              <vs-td>{{ report_data.g_rev }}</vs-td>
              <vs-td>{{ report_data.p_rev }}</vs-td>
            </vs-tr>
          </template>
        </vs-table>
      </b-row>
    </form>
  </div>
</template>

<script>
import axios from '../vuexios';

export default {
  name: 'RevenueReport',
  props: {
    msg: String,
  },
  data() {
    return {
      report_data: [],
    };
  },
  mounted() {
    axios
      .get('/getsalesoverview')
      .then(response => {
        this.report_data = response.data;
      })
      .catch(error => console.log(error.message));
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
form {
  text-align: left;
  max-width: 500px;
  width: 90%;
  background-color: #ffffff;
  padding: 40px;
  border-radius: 10px;
  color: rgb(0, 0, 0);
  box-shadow: 3px 3px 4px rgba(255, 249, 249, 0.2);
}

h3 {
  color: rgb(74, 74, 255);
}
</style>
