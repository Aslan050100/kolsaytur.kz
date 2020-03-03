<template>
  <div class="about">
    <h1>This is an about page</h1>
    <Navbar></Navbar>
    <Landing></Landing>
    <Footer></Footer>
  </div>
</template>
<script>
  import Landing from "../components/Landing";
  import Navbar from "../components/Navbar";
  import Footer from "../components/Footer";
  export default {
    name: 'Home',

    components: {
      Navbar,
      Landing,
      Footer
    },

  }
</script>
