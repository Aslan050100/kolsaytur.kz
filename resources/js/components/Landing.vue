<template>
  <div>
  <div class="main">
    <div class="container d-flex align-items-center h-100">
      <div class="text-md-center w-100">
        <h1 class="heading-1">Бронируйте лучшее жилье у нас</h1>
        <p class="text">Отдых – это уникальные инвестиции для вашего здоровья</p>
        <button class="button">Найти жилье</button>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="d-flex justify-content-center mt-5 pt-4">
      <div class="filter">
        <h2 class="heading-2 text-center">НАЙДИТЕ ЖИЛЬЕ В КАРАКОЛЕ ВМЕСТЕ С GUESTHOUSES</h2>
        <p>Цена</p>
        <div class="d-flex">
          <input type="text" placeholder="от (тг)" class="input" v-model="blog.first_price">
          <div class="px-3 d-flex">
            <img src="" alt="">
          </div>
          <input type="text" placeholder="до (тг)" class="input" v-model="blog.second_price">
          <div class="">
            <button class="button ml-4" v-on:click="post">Найти жилье</button>
          </div>
        </div>
      </div>
    </div>
    <div class="hotels-preview">
      <div class="d-flex flex-md-row flex-column justify-content-between semi-bold px-md-3 px-0 mb-5 pb-3">
        <div  @click="statusHotel=0"  v-bind:class="{'active': statusHotel == 0}" > <a >Последние добавленные</a></div >
        <div  @click="statusHotel=1" v-bind:class="{'active': statusHotel == 1}"><a>Популярные</a></div>
        <div  @click="statusHotel =2" v-bind:class="{'active': statusHotel == 2}"><a>Часто посещаемые</a></div>
      </div>
      <div>
        <p class="subtext mb-4">Последние добавленные</p>
        <div class="hotels row">
          <div class="hotel-container" v-for="hotel in hotels" v-bind:key="hotel.id">
              <router-link :to="{ name: 'detail' }">
<!--              <router-link v-bind:to="'/hotel/' + hotel.id">-->
            <div class="hotel" v-bind:style="{ backgroundImage: 'url('+'https://sirius.onmonday.kz/assets/images/20200226123752.PNG'+')' }">
              <div class="hotel-info">
                <h3 class="subtext semi-bold mb-3">{{hotel.name}}</h3>
                <p class="small-text">от {{hotel.min_price}} тг - до {{hotel.max_price}} тг</p>
                <img src="../assets/active-star.png" v-for="index in hotel.rating / 2"  :key="index" alt="">
                <img src="../assets/disabled-star.png" v-for="index in (10 - hotel.rating) / 2"  :key="index" alt="">
                {{hotel.rating}}

              </div>
            </div>
            </router-link>
          </div>
        </div>
      </div>
      <transition name="fade" class="fade fade-enter fade-enter-active fade-leave-active fade-leave-active fade-leave-to">
        <div v-if="show">
          <p>wsfjdvcmx,iwjsklmfdvcwislkdm</p>
        </div>
      </transition>
      <div class="d-flex justify-content-center p-5">
        <button @click="show = !show" class="button" >Посмотреть еще</button>
      </div>

      </div>
    </div>
  </div>
</template>

<script>
  export default {
  name: 'Landing',
    data:function() {
        return {
          show: false,
          activeStatus: true,
          forLastHotels:true,
          forFamousHotels:false,
          forLotMeetHotels: false,
          statusHotel: 0,
          hotels: [],
          blog: {
            first_price: '',
            second_price: ''
          }

        }
    },
    created() {
      this.$http.get('https://sirius.onmonday.kz/api/getProducts')
              .then(function (data) {
                this.hotels = data.body.data;
                console.log(this.hotels);
              })
    },
    methods: {
    post: function () {
    this.$http.post('https://sirius.onmonday.kz/api/searchProducts',{
     first_price: this.blog.first_price,
      second_price: this.blog.second_price
}).then(function (data) {
      console.log(84645312.0);
      console.log(data);})
    },
    }
  }

</script>

<style scoped>
  .main {
    background: url("../assets/landing-background.png") top;
    height: 800px;
    color: white;
    font-family: Segoe UI;
    font-style: normal;
    font-weight: normal;
  }
  .button {
    background: linear-gradient(0deg, #E73E4B, #E73E4B);
    border-radius: 10px;
    color: white;
    border:none;
    padding: 16px 131px;

  }
  .main button {
    margin-top: 60px;
    padding: 16px 131px;
    background: linear-gradient(0deg, #E73E4B, #E73E4B);
    border-radius: 10px;
    color: white;
    border:none;
  }
  .input {
    background: #FFFFFF;
    border-radius: 10px;
    padding-bottom:16px;
    padding-top: 16px;
    padding-left: 30px;
    border: 1px solid black;
  }
  .filter {
    color: #4A4A4A;
    margin-bottom: 80px;
  }
  .filter h2 {
    font-weight: normal;
    font-size: 28px;
    line-height: 38px;
  }
  .hotels-preview {
    font-size: 24px;
    line-height: 32px;
    color: #4A4A4A;
  }
  .hotels-preview .active {
    padding-bottom: 10px;
    border-bottom: 2px solid #B7B7B7;
  }
  .hotels {
    margin-left: -10px;
    margin-right: -10px;
  }
  .hotel-container {
    width: 33.3%;
    padding: 0 10px;
    margin-bottom: 20px;
  }
  .hotel {
    height: 420px;
    position: relative;
    background: url("../assets/landing-kalinka.png") no-repeat top;
    border-radius: 5px 5px 0 0;
  }
  .hotel-info {
    width: 100%;
    background: #FFFFFF;
    border: 1px solid #4A4A4A;
    border-top: 0;
    border-radius: 0 0 5px 5px;
    position: absolute;
    bottom: 0;
    padding: 20px 40px;
  }

  .fade-enter-active, .fade-leave-active {
    transition: opacity .5s;
  }
  .fade-enter, .fade-leave-to /* .fade-leave-active до версии 2.1.8 */ {
    opacity: 0;
  }
  @media screen and (max-width: 576px) {
    .hotel-container {
      width: 100%;
    }
  }

</style>
