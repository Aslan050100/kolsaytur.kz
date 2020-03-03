<template>
  <div>
  <Navbar></Navbar>
  <Landing></Landing>
  <Footer></Footer>
  </div>
</template>

<script>
// @ is an alias to /src
import Navbar from '../components/Navbar'
import Landing from '../components/Landing'
import Footer from '../components/Footer'

export default {
  name: 'Home',

  components: {
    Navbar,
    Landing,
    Footer
  },

}
</script>
<style >

</style>
