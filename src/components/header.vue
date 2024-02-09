<template>
      <header>
        <nav>
            <RouterLink to="./Homeview"><img src="../assets/image/pic/icon/logo.svg" alt="" class="logo"></RouterLink>
            <ul class="empty"></ul>
            <ul class="menu">
                <li><RouterLink to="./about">關於我們</RouterLink></li>
                <li><RouterLink to="./info">最新消息</RouterLink></li>
                <!-- <RouterLink to="/about">about</RouterLink> -->
                <li><RouterLink to="/products">飲品菜單</RouterLink></li>
                <li><RouterLink to="#">門市據點</RouterLink></li>
                <li><router-link to="/cart">訂單確認</router-link></li>
            </ul>
        <ul class="member_btn">
            <li><RouterLink to="#"><i class="fa-solid fa-user"></i></RouterLink></li>
            <CartSlide></CartSlide>
            <!-- <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li> -->
        </ul>
    </nav>
</header>
</template>
<script setup>
 import CartSlide from "./member_btn.vue"
</script>
<style lang="scss" scoped>
    
//   @import"../assets/sass/style.scss";
</style>