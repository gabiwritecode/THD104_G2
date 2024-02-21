<script>
export default {
  emits: ['prev-step', 'next-step'], 
  setup(props, { emit }) {
    const prevStep = () => {
      emit('prev-step');
    };

    const nextStep = () => {
      emit('next-step');
    };

    return {
      prevStep,
      nextStep,
    };
  },
};
</script>
<template>
  <div>
    <div class="customized-img-container">
      <img src="@/assets/image/customized/peach.jpg" alt="img">
    </div>
    <div class="customized-text-container">
      <h1>第三步:加水果</h1>
      <h2>在你的飲料中加入新鮮的水果，給你無法抵抗的酸甜滋味</h2>
    </div>
    <div class="customized-checkbox-container">
        <div class="customized-checkbox-item">
          <p>水蜜桃：</p>
          <input type="radio" name="fruit" class="radio-box">
      </div>
      <div class="customized-checkbox-item">
          <p>草莓：</p>
          <input type="radio" name="fruit" class="radio-box">
        </div>
        <div class="customized-checkbox-item">
          <p>藍莓：</p>
          <input type="radio" name="fruit" class="radio-box">
      </div>
      <div class="customized-checkbox-item">
          <p>香蕉：</p>
          <input type="radio" name="fruit" class="radio-box">
      </div>
      <div class="customized-checkbox-item">
        <p>不添加：</p>
        <input type="radio" name="fruit" class="radio-box">
      </div>
    </div>
    <br>
    <div class="button-container">
      <button class="customized-button" @click="prevStep">上一步</button>
      <button class="customized-button" @click="nextStep">下一步</button>
   </div>
  </div>
</template>