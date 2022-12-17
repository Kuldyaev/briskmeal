<template>
    <div class="container mainLogoBlock" :style="'background-image:url(http://svoyapi.ru/brisk-meal/photo/logo);'">
        <a class="navbar-brand" href="/">
            MainLogo
        </a>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('MainLogo Component mounted.')
        }
    }
</script>

<style scoped>
    .mainLogoBlock{
        background-color: red;
        width: 20vw;
        background-repeat: no-repeat;
        background-size: auto 100% ;
        background-position: center center;
    }
</style>
