
<template>
  <!-- <div class="space"></div> -->
  <loading-screen v-if="isLoading"></loading-screen>

  <main class="index_wrapper">
    <div v-if="!isLoading">
    <!------ banner ------>

    <section class="banner">
      <img class="curve_b1" src="../assets/image/index/curve_i_b1.svg" alt="">
      <img class="curve_b2" src="../assets/image/index/curve_i_b2.svg" alt="">
      <img class="text_move1" src="../assets/image/index/BOISSON.png" alt="">
      <img class="text_move2" src="../assets/image/index/BOISSON2.png" alt="">
      
      <div class="table"></div>
      <img class="arched_door" src="../assets/image/index/arched_door.png" alt="">
      
      <div class="container">
        <!-- <div class="beverage_container"> -->
          <!-- <h1>BOISSON</h1> -->
          <img class="ball1" src="../assets/image/index/ball1.png" alt="">
          <img class="boisson_gradient" src="../assets/image/index/boisson_gradient.png" alt="">
          <p>捌嵩飲茶，品味悠久的文化底蘊，感受時光與茶的對話。</p>
          <img class="ball2" src="../assets/image/index/ball2.png" alt="">
          <img class="fan" src="../assets/image/index/fan.png" alt="">

          <img class="beverage beverage3" src="../assets/image/index/banner_beverage3.png" alt="">
          <img class="beverage beverage2" src="../assets/image/index/banner_beverage2.png" alt="">
          <img class="beverage beverage1" src="../assets/image/index/banner_beverage1.png" alt="">
          <img class="beverage beverage4" src="../assets/image/index/banner_beverage4.png" alt="">
          <img class="leaf1" src="../assets/image/index/leaf.png" alt="">
          <img class="leaf2" src="../assets/image/index/leaf2.png" alt="">
          <img class="leaf3" src="../assets/image/index/leaf2.png" alt="">
        <!-- </div> -->
      </div>
    </section>

    <!---- 背景裝飾曲線1 ---->
    <section class="background_img">
        <img class="curve1" src="../assets/image/index/curve_i_1.png" alt="">
        <!-- <h1>TAIWAN TEA</h1> -->
    </section>
    <!------ 介紹 ------>
    <section class="introduce">
      <img class="text_move_t" src="../assets/image/index/TAIWAN TEA.svg" alt="">
      <div class="container">
        <h1 
          data-aos="flip-up"
          data-aos-duration="500"
          data-aos-easing="ease-in-out"
           >TAIWAN TEA</h1>
        
        <ul 
          data-aos="fade-up" 
          data-aos-duration="1200"
          data-aos-easing="ease-in-out"
        class="introduce1">
          <li><img src="../assets/image/index/index_pic1.jpg" alt=""></li>
          <li>
            <h2>極致的品質把控</h2>
            <p>精心挑選高品質的原料，配合獨特的製茶技術，確保每一杯茶都保持著最細緻的香氣和口感。</p>
          </li>
        </ul>
        
        <div class="introduce2">
          <ul
            data-aos="fade-up" 
            data-aos-duration="1200"
            data-aos-easing="ease-in-out">
            <li><img src="../assets/image/index/index_pic2.jpg" alt=""></li>
            <li>
              <h2>獨特的茶味體驗</h2>
              <p>以獨到的創意，為茶飲注入新的活力。不拘泥於傳統，尋求獨特的組合。每一杯都是藝術革命，結合風味新潮與經典滋味。</p>
            </li>
          </ul>
          
          <ul
            data-aos="fade-up" 
            data-aos-duration="1200"
            data-aos-easing="ease-in-out">
            <li><img src="../assets/image/index/index_pic3.jpg" alt=""></li>
            <li>
              <h2>道地製茶的精髓</h2>
              <p>以嚴謹的工藝，捕捉每片茶葉的道地風華。經過悉心挑選和精湛技術，感受最純粹、道地的茶香。</p>
            </li>
          </ul>
        </div>
      </div>

      <img class="curve2" src="../assets/image/index/curve_i_2.png" alt="">
    </section>


    <!------ 背景色圓弧 ------>
    <div class="background_color"></div>
    
    <!------ TOP6商品 ------>
    <section class="top_products_all">
      <h1 
        data-aos="flip-up"
        data-aos-duration="500"
        data-aos-easing="ease-in-out"
        data-aos-once="true">TOP 6 熱銷飲品</h1>
      <swiper 
        data-aos="fade-up" 
        data-aos-duration="800"
        data-aos-easing="ease-in-out"
        data-aos-once="true"
        :loop="true"
        :navigation="false"
        :grabCursor="true"
        :centeredSlides="true"
        :slidesPerView="'auto'"
        :pagination="false"
        :slides-per-view="3"
        :breakpoints="{
          900: {
            slidesPerView: 5,
          },
        }"
        :autoplay="{
          delay: 2500,
          disableOnInteraction: false,
        }"
        class="mySwiper">
        <swiper-slide class="top1">
          <img src="../assets/image/index/top5_beverage3.png" />
          <img class="cup_shadow " src="../assets/image/index/top5_shadow-14.png" alt="">
          <article class="top_product_depiction">
            <h2>巧克力奶昔</h2>
            <p>濃郁巧克力，絲滑奶昔，甜蜜的巧思。</p>
          </article>
        </swiper-slide>

        <swiper-slide class="top2">
          <img src="../assets/image/index/top5_beverage4.png" />
          <img class="cup_shadow" src="../assets/image/index/top5_shadow-14.png" alt="">
          <article class="top_product_depiction">
            <h2>楊枝甘露</h2>
            <p>芒果香濃，椰奶綿密，糖漿甜蜜，清新滋味。</p>
          </article>
        </swiper-slide>

        <swiper-slide class="top3">
          <img src="../assets/image/index/top5_beverage5.png" />
          <img class="cup_shadow " src="../assets/image/index/top5_shadow-14.png" alt="">
          <article class="top_product_depiction">
            <h2>柚子氣泡飲</h2>
            <p>綿密氣泡，柔和酸甜，夏日的完美解渴。</p>
          </article>
        </swiper-slide>

        <swiper-slide class="top4">
          <img src="../assets/image/index/top5_beverage1.png" />
          <img class="cup_shadow " src="../assets/image/index/top5_shadow-14.png" alt="">
          <article class="top_product_depiction">
            <h2>奇異果冰沙</h2>
            <p>果香濃郁，冰涼美味，果粒驚喜。</p>
          </article>
        </swiper-slide>

        <swiper-slide class="top5">
          <img src="../assets/image/index/top5_beverage2.png" />
          <img class="cup_shadow " src="../assets/image/index/top5_shadow-14.png" alt="">
          <article class="top_product_depiction">
            <h2>清爽西瓜冰沙</h2>
            <p>西瓜冰沙，清甜多汁，冰爽解渴，夏日的涼爽享受。</p>
          </article>
        </swiper-slide>
      
        <swiper-slide class="top6"><img src="../assets/image/index/top5_beverage6.png" />
          <img class="cup_shadow " src="../assets/image/index/top5_shadow-14.png" alt="">
          <article class="top_product_depiction">
            <h2>檸檬薄荷茶</h2>
            <p>檸檬薄荷茶，清新檸香，薄荷冰涼，口感清爽。</p>
          </article>
        </swiper-slide>
      </swiper>
    </section>

    <!---- 背景裝飾曲線2 ---->
    <div class="background_img">
      <img class="curve3" src="../assets/image/index/curve_i_3.png" alt="">
      <!-- <img class="curve4" src="../assets/image/index/curve_i_4.png" alt=""> -->
    </div>
    

    <!------ 最新消息 ------>
      <section class="news">
        <div class="container">
          <h1
            data-aos="flip-up"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-once="true">最新消息</h1>
          <ul
            data-aos="fade-up" 
            data-aos-duration="1200"
            data-aos-easing="ease-in-out"
            data-aos-once="true">
            <li>
              <RouterLink to="./article_item1"> <div><img src="../assets/image/index/news1.jpg" alt=""></div>
              <h2>莓果系列即將發售 </h2>
              <p>捌嵩飲茶，全新推出「莓果繽紛系列」！</p></RouterLink>
            </li>
          
            <li>
              <RouterLink to="./article_item2"><div><img src="../assets/image/index/news2.jpg" alt=""></div>
              <h2>捌嵩水果氣泡飲重磅上市 </h2>
              <p>捌嵩飲茶，全新推出「水果氣泡飲系列」！</p></RouterLink>
            </li>

            <li>
              <RouterLink to="./article_item7"><div><img src="../assets/image/index/news3.jpg" alt=""></div>
              <h2>南京店盛大開幕! </h2>
              <p>慶祝南京店盛大開幕，全品項買一送一!</p></RouterLink>
            </li>
          
            <li>
              <RouterLink to="./article_item3"><div><img src="../assets/image/index/news4.jpg" alt=""></div>
              <h2>2024年春季新菜單 </h2>
              <p>最好喝的手搖飲料，盡在捌嵩飲茶</p></RouterLink>
            </li>
          </ul>
          <RouterLink to="./info"><button 
            data-aos="flip-up"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-once="true">Read more</button></RouterLink>
        </div>
      </section>

      <!---- 背景裝飾曲線3 ---->
      <div class="background_img">
        <img class="curve4" src="../assets/image/index/curve_i_4.png" alt="">
      </div>
    </div>
      <!-- 回到上面按鈕 -->
      <button @click="scrollToTop" class="back_top" id="back_top">
        <i class="fa-solid fa-chevron-up"></i>
      </button>
    </main>
    
    <MemberBtn></MemberBtn>
</template>

<style lang="scss">
@import"../assets/sass/style.scss";

</style>

<script>
import MemberBtn from "../components/member_btn.vue"
import LoadingScreen from '@/components/Loading.vue';
import { ref, onMounted, onUnmounted } from 'vue';

// Swiper Vue.js
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/effect-coverflow';
import 'swiper/css/pagination';
import { register } from 'swiper/element/bundle';
register();
// import { Navigation } from 'swiper/modules';

export default {
  components: {
    MemberBtn, 
    Swiper,
    SwiperSlide,
    LoadingScreen
  },
  // 首頁header背景色 滾動透明
  setup(){
    const headerBgc = ref(null);

    const handleScroll = () => {
      if (window.scrollY > 120) {
        headerBgc.value.classList.add('header_bgc');
      } else {
        headerBgc.value.classList.remove('header_bgc');
      }
    };

    onMounted(() => {
      headerBgc.value = document.querySelector('.page-home header');
      window.addEventListener('scroll', handleScroll);
    });

    // onUnmounted(() => {
    //   window.removeEventListener('scroll', handleScroll);
    // });


    // 回到上面按鈕
    const showBackToTopButton = ref(null);

    const handleScrollTop = () => {

      // 轉成百分比
      const scrollPercentage = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;

      if (scrollPercentage > 30) {
        showBackToTopButton.value.classList.add('back_top_on')
        showBackToTopButton.value.classList.remove('back_top_hide')
      } else {
         showBackToTopButton.value.classList.add('back_top_hide')
      }
    };

    const scrollToTop = () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth',
      });
    };

    onMounted(() => {
      showBackToTopButton.value = document.querySelector('#back_top');
      window.addEventListener('scroll', handleScrollTop);
      
    });

    onUnmounted(() => {
      window.removeEventListener('scroll', handleScrollTop);
    });

     // Loading
    const isLoading = ref(true);
    const footer = ref(null);

    onMounted(()=>{
       footer.value = document.querySelector('.page-home footer');
      if(isLoading){
        footer.value.classList.add('footer_off')
        setTimeout(() => {
          isLoading.value = false;
          footer.value.classList.remove('footer_off')
        },3650);
      }else{
        isLoading.value = false;
      }
    });
    // onMounted(()=>{
    //   if(isLoading.value=false){
    //     footer.value.classList.remove('footer_off')
  
    //   }
      
    // })

    //  onMounted(() => {
    //   if (!localStorage.getItem('loadingAnimationShown')) {
    //     setTimeout(() => {
    //       isLoading.value = false;
    //       localStorage.setItem('loadingAnimationShown', 'true');
    //     }, 3750);
    //   } else {
    //     isLoading.value = false;
    //     localStorage.removeItem('loadingAnimationShown');
    //   }
    // });

   return {
      // modules: [ Navigation],
      showBackToTopButton,
      scrollToTop,
      isLoading
    };
  }
  
}


  
</script>