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
            </ul>
        <ul class="member_btn">
            <li><RouterLink to="#"><i class="fa-solid fa-user"></i></RouterLink></li>
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
<style lang="scss" scoped>
    
//    @import "../assets/sass/style.scss";
</style>