<template>
  <header>
    <div class="container d-flex justify-content-between">
      <router-link to="/">
      <div class="logo">
        Kolsaytur
      </div>
      </router-link>
      <div>
        <ul class="list-unstyled links d-flex">
          <li class="active"> <router-link :to="{ name: 'landing' }">Главная</router-link></li>
          <li><router-link to="/" style="color: white">О нас</router-link>
            </li>
          <li><router-link to="/" style="color: white">Kонтакты</router-link></li>
          <li><img src="../assets/RU.svg" alt=""></li>
        </ul>
          <div class="hamburger-menu">
              <img src="../assets/hamburger-menu.svg" alt="">

          </div>
      </div>
    </div>
  </header>
</template>

<script>export default { name: 'Navbar' }
</script>

<style scoped>
  header {
    font-size: 22px;
    line-height: 29px;
    color: white;
    padding-top: 15px;
    background-color: transparent;
    position: absolute;
    width: 100%;
  }
  .logo {
      color: white;
  }
  a{
      color:white;
  }
  header .links li {
    margin-left: 50px;
    padding-top: 20px;
  }
  header .links .active {
    padding-top: 16px;
    border-top: 4px solid white;
  }
  .logo {
    font-weight: 600;
    font-size: 36px;
    line-height: 48px;
  }
    .hamburger-menu {
        display: none;
    }
  @media screen and (max-width: 576px) {
      .links {
          display: none!important;
      }
      .hamburger-menu {
          display: block!important;;
      }
      .logo {
          font-size: 26px!important;;
          line-height: 35px!important;;
      }
      .menu li {
          display: block!important;;
          border-bottom: 1px solid black!important;;

      }
  }

</style>
