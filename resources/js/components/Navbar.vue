<template>
  <header>
    <div class="container d-flex justify-content-between">
      <router-link to="/">
      <div class="logo">
        GuestHouses
      </div>
      </router-link>
      <div>
        <ul class="list-unstyled links d-flex">
          <li class="active"> <router-link :to="{ name: 'landing' }">Главная</router-link></li>
          <li><router-link to="/about" style="color: white">О нас</router-link>
            </li>
          <li><router-link to="/contacts" style="color: white">Kонтакты</router-link></li>
          <li><img src="../assets/RU.svg" alt=""></li>
        </ul>
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

</style>
