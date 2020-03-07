<template>
    <footer>
        <div class="container d-md-flex justify-content-md-between">
            <div class="col-md-6 p-0">
                <div class="d-flex flex-column">
                    <h2 class="logo">Туры на Кольсай - Кайынды </h2>
                    <p class="small-text semi-light">Турагент Кольсай Тур – онлайн сервис по
                        бронированию отелей, гостевых домов, хостелов и
                        апартаментов в Казахстане. Цель компании
                        предоставить гостям широкий спектр услуг по
                        проживанию в номерах от эконом до премиум класса на
                        озере Кольсай и других городах Казахстана</p>
                    <p class="company-rights mb-0">«Kolsaytour» 2020. Все права защищены по законам РК</p>
                </div>
            </div>
            <div class="contacts">
                <h3>Наши контакты</h3>
                <div class="">
                    <img src="../assets/telephone.svg" class="mr-3" alt="">
                    <span>+7 705 700 70 79</span>
                </div>
                <div>
                    <img src="../assets/mail.svg" class="mr-3" alt="">
                    <span>info@kolsaytur.kz</span>
                </div>
                <h3 class="social-nets">Мы в сети</h3>
                <img src="../assets/skype.svg" class="mr-3 pr-1" alt="">
                <img src="../assets/facebook.svg" class="mr-3 pr-1" alt="">
                <img src="../assets/youtube.svg" alt="">
            </div>
        </div>
    </footer>
</template>

<script>export default { name: 'Footer' }
</script>

<style scoped>
    footer {
        padding: 50px 0 35px 0;
        background-image: url("../assets/footer-background.png");
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        color: #FFFFFF;
    }
    .logo {
        font-weight: 600;
        font-size: 36px;
        line-height: 48px;
    }
    .company-rights {
        margin-top: 77px;
    }
    .contacts {
        height: 100%;
    }
    .contacts h3 {
        font-weight: normal;
        font-size: 32px;
        line-height: 43px;
        margin-bottom: 20px;
    }
    .contacts span {
        font-size: 24px;
        line-height: 32px;
    }
    .contacts div {
        margin-bottom: 16px;
        display: flex;
    }
    .social-nets {
        margin-top: 40px;
    }

</style>
