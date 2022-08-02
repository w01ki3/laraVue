
<template>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <router-link to="/" class="nav-link" exact>
          <img src="@/../img/vkIcon.png" height="50" alt="logo" />
        </router-link>
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
            <li><a class="nav-link admin-laravel-link" href="/page2">Go to NAD</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
    <router-view></router-view>
</template>

<script></script>
