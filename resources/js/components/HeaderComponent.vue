<template>
    <div class="container headerBlock" >
       <div class="navItem">NavItem</div>
       <div class="navItem">NavItem</div>
       <div class="navItem">NavItem</div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Header Component mounted.')
        }
    }
</script>

<style scoped>
    .headerBlock{
        padding-left: 20px;
        display: flex;
    }
    .navItem{
        margin-left:10px;
    }

</style>
