<template>
    <div>
    <landing></landing>
    </div>

</template>

<script>

import Landing from "./components/Landing";
import LandingForHotels from "./components/landingForHotels";

export default {
    name: 'App',
    components: {LandingForHotels, Landing},
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
    a {
        text-decoration: none;
    }
</style>
