<template>

  <header>
    <nav>
      <!-- 漢堡 -->
      <i class="fa-solid fa-bars" @click="hamburger"></i>
      <RouterLink to="./Homeview"><img class="logo" src="../assets/image/pic/icon/logo.svg" alt=""></RouterLink>
      <ul class="empty"></ul>
      <ul class="menu">
        <button class="close_button" @click="hamburger"><i class="fa-solid fa-xmark"></i></button>
        <li><RouterLink to="./Homeview"><img class="logo_m" src="../assets/image/pic/icon/logo.svg" alt=""></RouterLink></li>
        <li><RouterLink to="./about">關於我們</RouterLink></li>
        <li><RouterLink to="./info">最新消息</RouterLink></li>
        <!-- <RouterLink to="/about">about</RouterLink> -->
        <li><RouterLink to="/products">飲品菜單</RouterLink></li>
        <li><RouterLink to="/store_map">門市據點</RouterLink></li>
        <li><p>Copyright© 2024 BOISSON TEA Inc.</p></li>
      </ul>
      <ul class="member_btn">
          <li><RouterLink to="./Login_in"><i class="fa-solid fa-user"></i></RouterLink></li>
          <li><a href="#" @click.prevent><i class="fa-solid fa-cart-shopping" @click="toggleSlide"></i></a></li>
      </ul>
    </nav>
    <!-- 手機版 打開漢堡灰色背景 -->
    <div class="header_mobile_bg" @click="hamburger"></div>
  </header>

</template>

<script>
 export default {
  data() {
      return {
        cart:[]
      }
     },
      methods: {
    
        toggleSlide() {
        
          const slide = document.querySelector('.card_slide');
          slide.classList.toggle("on");
        },
        hamburger(){
          // const hamburger = document.querySelector('.fa-bars');
          const menu = document.querySelector('.menu');
          menu.classList.toggle("menu_on");
          const header_mobile_bg = document.querySelector('.header_mobile_bg');
          header_mobile_bg.classList.toggle('header_mobile_bg_on');
        }
    }
 }

</script>

<style lang="scss" scoped>
    
//    @import "../assets/sass/style.scss";
</style>