<template>
    <div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                      <li v-for="(navItem, index) in navItems" :key="index" class="nav-item">
                          <router-link :to="{name: navItem.routeName}" class="nav-link active">{{ navItem.label }}</router-link>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
    </div>
  </template>

  <script>
  export default {
      name: 'NavBar',
      data() {
          return {
              navItems: [
                  {
                      label: 'Home',
                      routeName: 'home'
                  },

              ]
          }
      }
  }
  </script>

  <style lang="scss" scoped>
  </style>
