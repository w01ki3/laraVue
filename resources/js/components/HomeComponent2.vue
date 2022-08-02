<template>
  <div class="row justify-content-center">
    <div class="col-md-8 mt-3">
      <div class="card my-4">
        <div class="card-header">Ana Dizin & Vue</div>
        <div class="card-body">
          <li v-for="(item, index) in komponentler" :key="index">
            <router-link :to="item[1]"> {{ item[0] }}</router-link>
          </li>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Home Component mounted.");
  },
  data() {
    return {
      komponentler: [
        ["----C1----", "routerlink1"],
        ["----C2----", "routerlink2"],
      ],
    };
  },
};
</script>
