<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col mt-3">
        <div class="card">
          <div class="card-header">Ana Dizin & Vue</div>
          <div class="card-body">
            <li v-for="(item, index) in dersler" :key="index">
              <router-link class="links" :to="item[2]"> {{ item[0] }} / {{ item[1] }}</router-link>
            </li>
            <li>
              <a href="https://github.com/w01ki3/projxBrief/blob/main/resources/js/components/BuyATicket.vue" target="_blank" class="links">Ders -5 / Mysql fetch & crud</a>
            </li>
          </div>
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
      dersler: [
        ["Ders -1", "Döngüler ve basit form elementleri", "lesson-1"],
        ["Ders -2", "Form elementleri  ve özellikleri", "lesson-2"],
        ["Ders -3", "Class & Style işlemleri", "lesson-3"],
        ["Ders -4", "Watch kullanımı | val & oldVal | External component", "lesson-4"],
      ],
    };
  },
};
</script>

<style>
.links{
  text-decoration: none;
  color: black;
}
li {
  list-style-type: none;
}
</style>
