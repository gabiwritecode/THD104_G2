<script>

import MemberBtn from "../components/member_btn.vue"

export default {
  components: { MemberBtn }
}
// import TheWelcome from '../components/TheWelcome.vue'
</script>

<template>
  <!-- <div class="space"></div> -->
  <div class="index_wrapper">

    <!------ banner ------>

    <div class="banner">
      <img class="curve_b1" src="../assets/image/index/curve_i_b1.svg" alt="">
      <img class="curve_b2" src="../assets/image/index/curve_i_b2.svg" alt="">
      <img class="text_move1" src="../assets/image/index/BOISSON.png" alt="">
      <img class="text_move2" src="../assets/image/index/BOISSON2.png" alt="">
      
      <div class="table"></div>
      <img class="arched_door" src="../assets/image/index/arched_door.png" alt="">
      
      <div class="container">
        <!-- <div class="beverage_container"> -->
          <h1>BOISSON</h1>
          <p>捌嵩飲茶，品味悠久的文化底蘊，感受時光與茶的對話。</p>
          <img class="ball1" src="../assets/image/index/ball1.png" alt="">
          <img class="ball2" src="../assets/image/index/ball2.png" alt="">
          <img class="fan" src="../assets/image/index/fan.png" alt="">
          <img class="beverage beverage1" src="../assets/image/index/banner_beverage1.png" alt="">
          <img class="beverage beverage2" src="../assets/image/index/banner_beverage2.png" alt="">
          <img class="beverage beverage3" src="../assets/image/index/banner_beverage3.png" alt="">
          <img class="beverage beverage4" src="../assets/image/index/banner_beverage4.png" alt="">
        <!-- </div> -->
      </div>
    </div>

    <!---- 背景裝飾曲線1 ---->
    <div class="background_img">
        <img class="curve1" src="../assets/image/index/curve_i_1.png" alt="">
        <img class="curve2" src="../assets/image/index/curve_i_2.png" alt="">
        <img class="text_move_t" src="../assets/image/index/TAIWAN TEA.svg" alt="">
        <!-- <h1>TAIWAN TEA</h1> -->
    </div>
    <!------ 介紹 ------>
    <div class="introduce">


      <h1>TAIWAN TEA</h1>

      <ul class="introduce1">
        <li><img src="../assets/image/index/index_pic1.jpg" alt=""></li>
        <li>
          <h2>極致的品質把控</h2>
          <p>精心挑選高品質的原料，配合獨特的製茶技術，確保每一杯茶都保持著最細緻的香氣和口感。</p>
        </li>
      </ul>

      
      <ul class="introduce2">
        <li><img src="../assets/image/index/index_pic2.jpg" alt=""></li>
        <li>
          <h2>獨特的茶味體驗</h2>
          <p>以獨到的創意，為茶飲注入新的活力。不拘泥於傳統，尋求獨特的組合。每一杯都是藝術革命，結合風味新潮與經典滋味。</p>
        </li>
      </ul>
      
      <ul class="introduce3">
        <li><img src="../assets/image/index/index_pic3.jpg" alt=""></li>
        <li>
          <h2>道地製茶的精髓</h2>
          <p>以嚴謹的工藝，捕捉每片茶葉的道地風華。經過悉心挑選和精湛技術，感受最純粹、道地的茶香。</p>
        </li>
      </ul>

    </div>


    <!------ 背景色圓弧 ------>
    <div class="background_color"></div>
    
    <!------ TOP5商品 ------>
      <div class="top_products_all">
        <h1>TOP 5 熱銷飲品</h1>
        <ul>
          <li class="top_products product1">
            <img src="../assets/image/products/naixi_qubei.png" alt="">
            <h2>愛爾蘭巧克力奶昔</h2>
            <p>享受絲滑口感與甜蜜幸福的奢華體驗。</p>
          </li>

          <li class="top_products product2">
            <img src="../assets/image/products/naixi_qubei.png" alt="">
            <h2>愛爾蘭巧克力奶昔</h2>
            <p>享受絲滑口感與甜蜜幸福的奢華體驗。</p>
          </li>

          <li class="top_products product3">
            <img src="../assets/image/products/naixi_qubei.png" alt="">
            <h2>愛爾蘭巧克力奶昔</h2>
            <p>享受絲滑口感與甜蜜幸福的奢華體驗。</p>
          </li>

          <li class="top_products product4">
            <img src="../assets/image/products/naixi_qubei.png" alt="">
            <h2>愛爾蘭巧克力奶昔</h2>
            <p>享受絲滑口感與甜蜜幸福的奢華體驗。</p>
          </li>
          <li class="top_products product5">
            <img src="../assets/image/products/naixi_qubei.png" alt="">
            <h2>愛爾蘭巧克力奶昔</h2>
            <p>享受絲滑口感與甜蜜幸福的奢華體驗。</p>
          </li>
        </ul>
      </div>

    <!---- 背景裝飾曲線2 ---->
    <div class="background_img">
      <img class="curve3" src="../assets/image/index/curve_i_3.png" alt="">
      <!-- <img class="curve4" src="../assets/image/index/curve_i_4.png" alt=""> -->
    </div>
    

    <!------ 最新消息 ------>
      <div class="news">
        <div class="container">
          <h1>最新消息</h1>
          <ul>
            <li>
              <img src="../assets/image/index/news1.jpg" alt="">
              <h2>莓果系列即將發售🎉 </h2>
              <p>捌嵩飲茶，全新推出「莓果繽紛系列」！</p>
            </li>
          
            <li>
              <img src="../assets/image/index/news2.jpg" alt="">
              <h2>莓果系列即將發售🎉 </h2>
              <p>捌嵩飲茶，全新推出「水果氣泡飲系列」！</p>
            </li>

            <li>
              <img src="../assets/image/index/news3.jpg" alt="">
              <h2>莓果系列即將發售🎉 </h2>
              <p>捌嵩飲茶，全新推出「莓果繽紛系列」！</p>
            </li>
          
            <li>
              <img src="../assets/image/index/news4.jpg" alt="">
              <h2>莓果系列即將發售🎉 </h2>
              <p>捌嵩飲茶，全新推出「莓果繽紛系列」！</p>
            </li>
          </ul>
          <RouterLink to="./info"><button>Read more</button></RouterLink>
        </div>
      </div>

      <!---- 背景裝飾曲線3 ---->
      <div class="background_img">
        <img class="curve4" src="../assets/image/index/curve_i_4.png" alt="">
      </div>

    
  </div>

  <MemberBtn></MemberBtn>
</template>

<style lang="scss">
// @import"../assets/sass/style.scss";

</style>