<template>
  <div class="row justify-content-center">
    <div class="col-md-8 mt-3">
      <div class="card">
        <div class="card-header">Ana Dizin & Vue</div>
        <div class="card-body">
          <li v-for="(item, index) in dersler" :key="index">
            <a :href="item[2]"> {{ item[0] }} / {{ item[1] }} </a>
          </li>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {
      dersler: [
        ["Ders -1", "Döngüler ve basit form elementleri", "lesson-1"],
        ["Ders -2", "Form elementleri  ve özellikleri", "lesson-2"],
        ["Ders -3", "Class & Style işlemleri", "lesson-3"],
        ["Ders -4", "Watch kullanımı | val & oldVal | External component", "lesson-4"],
        ["Ders -5", "Mysql fetch & crud", "lesson-5"],
      ],
    };
  },
};
</script>
