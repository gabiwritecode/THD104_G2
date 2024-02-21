<script>
export default {
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
      <img src="@/assets/image/customized/milk.jpg" alt="img">
    </div>
    <div class="customized-text-container">
      <h1>第二步:加牛奶</h1>
      <h2>想要把茶飲變成香醇的拿鐵嗎? 那就點擊下方的選項吧<br>
        (若無，請按下一步)</h2>
    </div>
    <div class="customized-milk-container">
      <p>加奶：</p>
      <input type="checkbox" class="checkbox">
    </div>
    <br>
    <div class="button-container">
      <button class="customized-button" @click="prevStep">上一步</button>
      <button class="customized-button" @click="nextStep">下一步</button>
   </div>
  </div>
</template>