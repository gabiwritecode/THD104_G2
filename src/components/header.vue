<template>

  <header>
    <nav>
      <!-- 漢堡 -->
      <i class="fa-solid fa-bars" @click="hamburger"></i>
      <RouterLink to="./Homeview"><img class="logo" src="../assets/image/pic/icon/logo.svg" alt=""></RouterLink>
      <ul class="empty"></ul>
      <ul class="menu">
        <button class="close_button" @click="hamburger"><i class="fa-solid fa-xmark"></i></button>
        <li><RouterLink to="./Homeview"   @click="hamburger"><img class="logo_m" src="../assets/image/pic/icon/logo.svg" alt=""></RouterLink></li>
        <li><RouterLink to="./about"      @click="hamburger">關於我們</RouterLink></li>
        <li><RouterLink to="./info"       @click="hamburger">最新消息</RouterLink></li>
        <li><RouterLink to="./products"   @click="hamburger">飲品菜單</RouterLink></li>
        <li><RouterLink to="./customized" @click="hamburger">客製飲品</RouterLink></li>
        <li><RouterLink to="./store_map"  @click="hamburger">門市據點</RouterLink></li>
        <li><p>Copyright© 2024 BOISSON TEA Inc.</p></li>
      </ul>
      <ul class="member_btn">
          <li v-if="isLoggedIn">
            <RouterLink to="./order">
              <i class="fa-solid fa-user"></i>
            </RouterLink>
          </li>
          <li v-else>
            <RouterLink to="./Login_in">
              <i class="fa-solid fa-user"></i>
            </RouterLink>
          </li>
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
        // cart:[]
        headerSize: null,
        hasReducedHeight: false
      }
     },
  mounted() {
    this.headerSize = document.querySelector('header');
    window.addEventListener('scroll', this.headerScroll);
  },
  methods: {

    toggleSlide() {
    
      const slide = document.querySelector('.card_slide');
      slide.classList.toggle("on");
    },
    hamburger(){
      const menu = document.querySelector('.menu');
      const headerMobileBg = document.querySelector('.header_mobile_bg');
      menu.classList.toggle("menu_on");
      headerMobileBg.classList.toggle('header_mobile_bg_on');
      
      // 滾動畫面時也關閉選單
      window.addEventListener('scroll', () => {
        menu.classList.remove("menu_on");
        headerMobileBg.classList.remove('header_mobile_bg_on');
      });

      // 監聽視窗寬度變化事件
      window.addEventListener('resize', () => {
        menu.classList.remove("menu_on");
        headerMobileBg.classList.remove('header_mobile_bg_on');
      });
    },
    
    // header高度變小
    headerScroll() {
      if (window.scrollY > 100 && !this.hasReducedHeight) {
        const currentHeight = parseInt(getComputedStyle(this.headerSize).height.replace('px', ''));
        this.headerSize.style.height = `${currentHeight - 12}px`;
        this.headerSize.style.backgroundColor = 'rgba(120, 190, 200, 0.9)';
        this.hasReducedHeight = true;
      } else if (window.scrollY <= 100 && this.hasReducedHeight) {
        this.headerSize.style.height = '';
        this.headerSize.style.backgroundColor = '';
        this.hasReducedHeight = false;
      }
    }
  },
  computed: {
    isLoggedIn() {
      // 獲得登入狀態
      return localStorage.getItem('isLoggedIn') === 'true';
    },
    userId() {
      // 取得ID
      return localStorage.getItem('userId');
    },
  },
  
 }

</script>

<style lang="scss">
    
  //  @import "../assets/sass/style.scss";
</style>