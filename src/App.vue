<template>
  <div id="app">
    <Website/>
  </div>
</template>

<script>
import Website from './components/Projects.vue'

export default {
  name: 'App',
  components: {
    Website
  }
}
</script>
<style>
  #app {
      background: rgb(124,162,224);
      background: url("./assets/background.jpg"); 
      background-repeat: no-repeat;
      background-attachment: local;
      background-size: cover;
    }
</style>