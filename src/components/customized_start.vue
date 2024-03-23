<script>
export default {
  emits: ['prev-step', 'next-step'], 
  setup(props, { emit }) {
    const nextStep = () => {
      emit('next-step');
    };

    return {
      nextStep,
    };
  },
};
</script>
<template>
  <div class="customized-img-container">
    <!-- <img src="@/assets/image/customized/personalized.jpg" alt="img"> -->
    <!-- 步驟動畫 -->
    <section class="animation animate__animated animate__bounce">
      <img class="customized_animation water2" src="@/assets/image/customized/water2.svg" alt="">
      <div>
        <svg class="waves" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255, 193, 7, 1)" />
          </g>
        </svg>
      </div>
      <img class="customized_animation straw_stop" src="@/assets/image/customized/straw.svg" alt="">
      <img class="customized_animation cup" src="@/assets/image/customized/cup.svg" alt="">
      <img class="customized_animation cover" src="@/assets/image/customized/cover.svg" alt="">
    </section>
  </div>
  <div class="customized-text-container">
    <h1 class="animate__animated animate__fadeInUp">找不到想喝的飲料? 別怕，捌嵩飲茶罩你!</h1>
    <h2 class="animate__animated animate__fadeInUp">
      在菜單上找不到喜歡的品項嗎?別擔心，捌嵩飲茶特別推出飲料客製化的功能，只要按照自己的喜好選擇配方，就能品嘗到專屬於自己的獨家口味!<br>

      請點擊下方的按鈕並按照指示選擇內容，捌嵩飲茶會按照您的選擇調製最美味的獨家飲品</h2>
  </div>
  <br><br>
  <div class="button-container">
    <button class="customized-button animate__animated animate__headShake animate__delay-1s"
      @click="nextStep">點我進行客製化</button>
  </div>
</template>