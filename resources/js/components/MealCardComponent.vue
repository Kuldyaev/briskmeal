<template>
    <div class="mealCArd" >
      <a class="mealCArdLink" href="/meals/1" :style="'background-image:url(http://svoyapi.ru/brisk-meal/300/photo/'+ n +');'">
            card
        </a>
    </div>
</template>

<script>
    export default {
        props: ['n'],
        mounted() {
            console.log('MealCard Component mounted.')
        }
    }
</script>

<style scoped>
    .mealCArd{
        background-color: silver;
        width: 300px;
        height: 300px;
        margin-bottom: 10px;
    }
    .mealCArdLink{
        display:block;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-size: 100% auto;
        background-position: center center;
    }
</style>
