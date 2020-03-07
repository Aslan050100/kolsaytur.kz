<template>
  <div class="header">
    <div class="container d-flex justify-content-between">
      <div class="logo">
        <h3>GuestHouses</h3>
      </div>
      <div class="">
        <ul class="d-flex list-inline links">
          <li class="active">Галерея</li>
          <li>Информация</li>
          <li>Удобства</li>
          <li>Номера</li>
          <li>Карта</li>
          <li>
            <img src="../assets/lang--ru.svg" alt="">
          </li>
        </ul>
      </div>
        <div class="hamburger-menu">
            <img src="../assets/mail.svg" alt="">
        </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "navbarForHotels"
  }
</script>

<style scoped>
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
  @media screen and (max-width: 576px){
      .links {
          display: none;
      }
      .hamburger-menu {
          display: block;
      }
      .logo{
          font-size: 26px;
          line-height: 35px;
      }
  }

</style>
