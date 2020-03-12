<template>
    <div id="app">
        <NavbarMobile></NavbarMobile>
        <div class="content" :class="{'open' : showNav}">
            <div class="top-bar ">
                <div id="navigation-icon" v-if="mobileView" @click="showNav = !showNav" >
                    <i class="fas fa-bars"></i>
                </div>
                <Navbar v-if="!mobileView"></Navbar>
            </div>
            <Landing></Landing>
            <Footer></Footer>
        </div>
    </div>
</template>

<script>
    // @ is an alias to /src
    import Navbar from '../components/Navbar'
    import Landing from '../components/Landing'
    import Footer from '../components/Footer'
    import NavbarMobile from '../components/NavbarMobile'

    export default {
        name: 'Home',
        components: {
            Navbar,
            Landing,
            Footer,
            NavbarMobile
        },
        data: function () {
            return{
                mobileView: true,
                showNav: false,
            }
        },
        methods: {
            handleView(){
                this.mobileView = window.innerWidth <= 990;
            }
        },
        created(){
            this.handleView();
        }

    }
</script>
<style>
    @import url("https://use.fontawesome.com/releases/v5.9.0/css/all.css");
    #app {
        margin-top: -20px;
    }

    * {
        font-size: 1rem;
    }

    body {
        width: 100%;
        height: auto;
        margin: 0;
        padding: 0;
        font-family: "Segoe UI", Tahoma;
    }

    #app {
        position: relative;
        width: 100%;
        height: 100vh;
    }

    .top-bar {
        display: flex;
        width: 100%;
        position: absolute;
    }

    .content {
        position: absolute;
        top: 10px;
        width: 100%;
        background-color: #fff;
        transition: 1s transform cubic-bezier(0,.12,.14,1);
    }

    .open {
        transform: translateX(300px);
    }

    #navigation-icon {
        padding: 10px 10px 20px;
        margin-right: 10px;
        cursor: pointer;
    }
    #navigation-icon i {
        font-size: 2rem;
    }
</style>
