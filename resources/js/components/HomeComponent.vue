<template>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="@/../img/vkIcon.png" height="50" alt="logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <router-link to="/" class="nav-link" exact>Ana Dizin</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/link1" class="nav-link" exact>Link - 1</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/link2" class="nav-link" exact>Link - 2</router-link>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dersler
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <router-link to="/lesson-1" class="dropdown-item" exact
                    >Ders - 1</router-link
                  >
                </li>
                <li>
                  <router-link to="/lesson-2" class="dropdown-item" exact
                    >Ders - 2</router-link
                  >
                </li>
                <li>
                  <router-link to="/lesson-3" class="dropdown-item" exact
                    >Ders - 3</router-link
                  >
                </li>
                <li>
                  <router-link to="/lesson-4" class="dropdown-item" exact
                    >Ders - 4</router-link
                  >
                </li>
                <li>
                  <router-link to="/lesson-5" class="dropdown-item" exact
                    >Ders - 5</router-link
                  >
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <router-view></router-view>
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
