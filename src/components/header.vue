<template>
  <header>
    <nav>
      <!-- 漢堡 -->
      <i class="fa-solid fa-bars"></i>
      <RouterLink to="./Homeview"><img class="logo" src="../assets/image/pic/icon/logo.svg" alt=""></RouterLink>
      <ul class="empty"></ul>
      <ul class="menu">
        <button class="close_button"><i class="fa-solid fa-xmark"></i></button>
        <li><RouterLink to="./Homeview"><img class="logo_m" src="../assets/image/pic/icon/logo.svg" alt=""></RouterLink></li>
        <li><RouterLink to="./about">關於我們</RouterLink></li>
        <li><RouterLink to="./info">最新消息</RouterLink></li>
        <!-- <RouterLink to="/about">about</RouterLink> -->
        <li><RouterLink to="/products">飲品菜單</RouterLink></li>
        <li><RouterLink to="/store_map">門市據點</RouterLink></li>
      </ul>
      <ul class="member_btn">
          <li><RouterLink to="./Login_in"><i class="fa-solid fa-user"></i></RouterLink></li>
          <li><a href="#" @click.prevent><i class="fa-solid fa-cart-shopping" @click="toggleSlide"></i></a></li>
      </ul>
    </nav>
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
        }
    }
 }

</script>
<script setup>
  // const fabars = document.querySelector('.fa-bars')
  // let menu = document.querySelector('.menu')
  // console.log(fabars);
  // console.log(menu);
  // fabars.addEventListener('click', function () {
    // menu.classList.toggle("-on")
    // console.log("a");
    
  // })
  // document.querySelector('header').addEventListener('click', function () {
  //   ul.classList.remove("-on")
  // })
</script>
<style lang="scss" scoped>
    
//    @import "../assets/sass/style.scss";
</style>