<template>
    <div id="navigation-mobile">
        <ul>
            <li class="active">Галерея</li>
            <li>Информация</li>
            <li>Удобства</li>
            <li>Номера</li>
            <li>Карта</li>
        </ul>
        <div class="social-media">
            <i class="fab fa-skype"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-youtube"></i>
        </div>
    </div>
</template>

<script>
    export default {
        name: "NavbarMobile"
    }
</script>

<style scoped>
    #navigation-mobile {
        padding: 20px 0 0 0; }

    #navigation-mobile ul {
        list-style: none;
        width: 200px;
        padding-left: 40px;}

    #navigation-mobile li {
        color: black;
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
        cursor: pointer;}




    #navigation-mobile .social-media {
        position: absolute;
        left: 40px;
        bottom: 20px;}

    #navigation-mobile .social-media  i {
        margin: 0 20px 0 0;
        color: black;
        font-size: 2rem;
    }

</style>
