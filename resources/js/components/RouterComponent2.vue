
<template>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <router-link to="/page2" class="nav-link" exact>
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
              <router-link to="/page2" class="nav-link" exact>Ana Dizin</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/routerlink1" class="nav-link" exact>?Component=1</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/routerlink2" class="nav-link" exact>?Component=2</router-link>
            </li>
            <li><a class="nav-link admin-laravel-link" href="/">Go To Volkie</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
    <router-view style="background-color: #f3b04d;"></router-view>
</template>

<script></script>
