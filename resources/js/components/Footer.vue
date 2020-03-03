<template>
  <footer>
    <div class="container d-flex justify-content-between">
      <div class="d-flex flex-column col-md-6 p-0">
        <h2 class="logo">GuestHouses</h2>
        <p class="small-text semi-light">Компания Guest Houses – онлайн сервис по
          бронированию отелей, гостевых домов, хостелов и
          апартаментов в Кыргызской Республики. Цель компании
          предоставить гостям широкий спектр услуг по
          проживанию в номерах от эконом до премиум класса на
          озере Иссык Куль и других городах Кыргызстана</p>
        <p class="company-rights mb-0">OO «GuestHouses» 2018. Все права защищены</p>
      </div>
      <div class="contacts">
        <h3>Наши контакты</h3>
        <div class="">
          <img src="../assets/telephone.svg" class="mr-3" alt="">
          <span>+7 727 111 11 11</span>
        </div>
        <div>
          <img src="../assets/phone.svg" class="mr-3" alt="">
          <span>+7 777 111 11 11</span>
        </div>
        <div>
          <img src="../assets/mail.svg" class="mr-3" alt="">
          <span>info.guesthouses.kg</span>
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
    background: url("../assets/footer-background.png");
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
