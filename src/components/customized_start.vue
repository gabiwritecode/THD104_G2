<script>
export default {
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
  <div class="customized-image-container">
      <img src="@/assets/image/customized/personalized.jpg" alt="img">
    </div>
    <div class="customized-text-container">
      <h1>找不到想喝的飲料? 別怕，捌嵩飲茶罩你!</h1>
      <h2>在菜單上找不到喜歡的品項嗎?別擔心，捌嵩飲茶特別推出飲料客製化的功能，只要按照自己的喜好選擇配方，就能品嘗到專屬於自己的獨家口味!<br>

        請點擊下方的按鈕並按照指示選擇內容，捌嵩飲茶會按照您的選擇調製最美味的獨家飲品</h2>
    </div>
    <br><br>
    <div class="button-container">
      <button class="customized-button" @click="nextStep">點我進行客製化</button>
   </div>
</template>