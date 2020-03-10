<template>
    <div>
        <div class="header">
            <div class="container d-flex justify-content-between">
                <div class="logo">
                    <h3>Kolsaytur</h3>
                </div>
                <div class="links">
                    <ul class="d-flex list-inline">
                        <li class="active"><a href="#Galery">Галерея</a></li>
                        <li><a href="#Information">Информация</a></li>
                        <li><a href="#Comfort">Удобства</a></li>
                        <li><a href="#Number">Номера</a></li>
                        <li><a href="#Map">Карта</a></li>
                        <li>
                            <img src="../assets/lang--ru.svg" alt="">
                        </li>
                    </ul>
                </div>
                <div class="hamburger-menu">
                    <img src="../assets/hamburger-menu.svg" alt="">
                </div>
            </div>
        </div>
        <div class="landing">
            <div class="container d-flex flex-column">
                <div class="d-flex justify-content-md-between flex-column-reverse flex-md-row form-contact">
                    <div class="mt-auto"><button class="show-photos col-12 col-md-auto">Просмотреть фото</button></div>
                    <div class="mt-auto">
                        <form action="" class="for-form">
                            <h3 class="form-title">Бронируйте жилье</h3>
                            <div class="d-flex">
                                <div class="w-50 mr-2">
                                    <label for="comingDate">Прибытие</label>
                                    <input type="text" id="comingDate" placeholder="дд.мм.гг" name="checkin" v-model="bron.checkin">
                                    <date-picker v-model="bron.checkin" lang="en" id="comingDate" placeholder="дд.мм.гг" name="checkin"  type="date" format="YYYY-MM-dd"></date-picker>
                                </div>
                                <div class="w-50">
                                    <label for="outDate">Выезд</label>
                                    <input type="text" id="outDate" placeholder="дд.мм.гг" name="checout" v-model="bron.checkout">
                                </div>
                            </div>
                            <input type="text" placeholder="Ф.И.О." name="name" v-model="bron.name">
                            <input type="text" placeholder="Электронная почта" name="email" v-model="bron.email">
                            <input type="text" placeholder="Телефон" v-model="bron.phone" name="phone">
                            <label for="count">Количество гостей</label>
                            <input type="text" id="count" value="1" v-model="bron.adults" name="adults">
                            <input type="submit" value="Бронировать" @click.prevent="">

                        </form>
                    </div>
                </div>
            </div>
            <div class="container information" id="Information">
                <h3 class="label">{{blog.name}}</h3>


                <p>{{blog.description}}</p>
            </div>
            <div class="comfort" id="Comfort">
                <div class="container">
                    <h3 class="label">Удобства</h3>
                    <div class="d-flex justify-content-md-between flex-column flex-md-row">
                        <div v-for="comfort in blog.comforts" v-bind:key="comfort.id">
                            <div class="text-center condition d-flex flex-column">
                                <img src="../assets/global.svg" alt="">
                                <p class="mt-auto">{{comfort.name}}</p>
                            </div>
                        </div>
                        <!-- <div class="text-center condition d-flex flex-column">
                            <img src="../assets/tv.svg" alt="">
                            <p class="mt-auto">Телевизор</p>
                        </div>
                        <div class="text-center condition d-flex flex-column">
                            <img src="../assets/coffee.svg" alt="">
                            <p class="mt-auto">Завтрак</p>
                        </div>
                        <div class="text-center condition d-flex flex-column">
                            <img src="../assets/shower.svg" alt="">
                            <p class="mt-auto">Душевая кабинка</p>
                        </div>
                        <div class="text-center condition d-flex flex-column">
                            <img src="../assets/washer.svg" alt="">
                            <p class="mt-auto">Стиральная машина</p>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="rooms" id="Number">
                <div class="container">
                    <h3 class="label">Номера</h3>
                    <div class="prices d-flex justify-content-md-between flex-column flex-md-row">
                        <div v-for="room in blog.rooms" v-bind:key="room.id" class="text-center">
                            <img src="room.icon" alt="">
                            <p class="room-name">{{room.name}}</p>
                            <h1 class="room-price">{{room.price}}</h1>
                            <p class="room-type">{{room.room_type.name}}</p>
                        </div>
                        <!--
                                            <div class="text-center">
                                                <p class="room-name">Трехметный номер</p>
                                                <h1 class="room-price">18.000 тг</h1>
                                                <p class="room-type">Стандартный</p>
                                            </div>
                                            <div class="text-center">
                                                <p class="room-name">Четырехместный номер</p>
                                                <h1 class="room-price">23.500 тг</h1>
                                                <p class="room-type">Стандартный</p>
                                            </div>-->
                    </div>
                </div>
            </div>
            <div class="location" id="Map">
                <div class="container">
                    <h3 class="label">Местоположение</h3>
                    <div>
                        <br>
                        По идее мына жерде карта туруы керек
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {

  name: "landingForHotels",
    data: function () {
      return{
          id: this.$route.params.id,
          blog:[],
          bron: {
              product_id: 1,
              check_in: '',
              check_out: '',
            name: '',
            email: '',
              phone_number: '',
            adults: '',
            room_id: 1,
          },
      }
    },
    mounted() {

        this.$http.get('https://sirius.onmonday.kz/api/getProductByid/'+this.id)
            .then(function (data) {
                console.log(data);
                this.blog = data.body.data;

            })
    },

    methods:{

      post: function () {

        this.$http.post('https://sirius.onmonday.kz/api/addOrder1',{
                product_id: this.bron.product_id,
                  check_in: this.bron.check_in,
                  check_out: this.bron.check_out,
                  name: this.bron.name,
                  email: this.bron.email,
                  phone_number: this.bron.phone_number,
                  adults: this.bron.adults,
                  room_id: this.bron.room_id,

        }).then(function (data) {
              console.log(6846531245);
              console.log(6846531245);
              console.log(6846531245);
    console.log(data);
        }).then(response => {
            console.log(response)
        })
            .catch(error => {
                console.log(error.response)
            });
      },
     },
}
</script>

<style scoped>
    a{
        color: white;
        text-decoration: none;
    }
    a:hover {
        color: white;
    }

    .landing {
        color: #4A4A4A;
        background: url("../assets/bacgroundForHotel.png") no-repeat top;
    }
    .form-contact {
        height: 827px;
        width: 100%;
    }
    .for-form {
        background: white;
        border-radius: 10px;
        padding: 40px;
        width: 500px;
    }
    .for-form .form-title {
        font-weight: normal;
        text-align: center;
        width: 100%;
        margin-bottom: 40px;
        text-transform: uppercase;
    }
    .for-form input {
        font-size: 22px;
        line-height: 29px;
        border-radius: 5px;
        padding: 10px 20px;
        border: 1px solid #CCCCCC;
        margin-bottom: 20px;
    }
    .for-form label {
        font-size: 24px;
        line-height: 32px;
    }
    .for-form input {
        width: 100%;
    }
    .for-form input::placeholder {
        color: #999999;
    }
    input[type=submit] {
        width: 100%;
        color: white;
        padding: 11px;
        background: #E73E4B;
        border-radius: 10px;
        cursor: pointer;
        border: none;
    }
    .show-photos {
        background: white;
        border: none;
        border-radius: 5px;
        padding: 11px 44px;
        font-weight: 600;
        font-size: 22px;
        line-height: 29px;
        letter-spacing: 0.05em;
    }
    .information {
        margin-top: 180px;
        padding-bottom: 100px;
        font-style: normal;
        font-weight: normal;
        font-size: 30px;
        line-height: 40px;
        letter-spacing: 0.05em;
    }
    .label {
        font-size: 32px;
        font-weight: 600;
        margin-bottom: 50px;
        text-transform: uppercase;
    }
    .information p {
        font-size: 30px;
        line-height: 40px;
    }
    .comfort {
        background: #F9FAFB;
        padding: 40px 0;
    }
    .comfort .condition {
        font-size: 28px;
        line-height: 33px;
        font-weight: 300;
        white-space: nowrap;
        min-height: 160px;
    }
    .comfort .condition img {
        margin: auto;
    }
    .rooms {
        padding-top: 100px;
    }
    .rooms .prices div {
        height: 420px;
        width: 32.5%;
        padding-top: 60px;
        border: 1px solid #999999;
        border-radius: 10px;
    }
    .rooms .room-name {
        font-size: 29px;
        line-height: 39px;
        margin-bottom: 50px;
    }
    .rooms .room-price {
        font-size: 68px;
        line-height: 90px;
        font-weight: 600;
        letter-spacing: 0.05em;
        margin-bottom: 30px;
    }
    .rooms .room-type {
        font-weight: 400;
        font-size: 27px;
        line-height: 36px;
        letter-spacing: 0.05em;
    }
    .location {
        padding-top: 100px;
    }
    @media screen and (max-width: 576px) {
        .rooms .prices div {
            width: 100%;
            margin-bottom: 20px;
        }
        .for-form {
            width: 100%;
            padding: 20px 25px;
        }
    }
    .header {
        width: 100%;
        position: absolute;
        color: white;
    }
    .logo {
        margin-top: 30px;
    }
    .links {
        margin-top: 15px;
    }
    .links li {
        margin-left: 50px;
        padding-top: 20px;
        font-size: 22px;
        line-height: 29px;
    }
    .active {
        padding-top: 16px !important;
        border-top: white solid 4px;
    }
    .hamburger-menu {
        display: none;
    }
    @media screen and (max-width: 576px) {
        .links {
            display: none;
        }

        .hamburger-menu {
            display: block;
            padding-bottom: 10px;
        }

        .logo {
            font-size: 26px;
            line-height: 35px;
        }
    }
    </style>
