<template>
<div>
  <landingForHotels></landingForHotels>
  <Footer></Footer>
</div>
</template>

<script>
import landingForHotels from '../components/landingForHotels'
import Footer from '../components/Footer'

export default {
  name: 'Hotel1',
  components: {
    landingForHotels,
    Footer
  },
  data: function () {
    return{

    }

  }

}
</script>

<style scoped>

</style>
