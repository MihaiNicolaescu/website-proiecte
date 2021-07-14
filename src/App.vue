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
background: linear-gradient(41deg, rgba(124,162,224,1) 0%, rgba(115,170,255,1) 43%, rgba(191,208,226,1) 60%, rgba(191,212,222,1) 81%); 
    background-repeat: no-repeat;
    background-attachment: local;
    background-size: cover;
  }
</style>