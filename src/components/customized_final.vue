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
      <img src="@/assets/image/customized/finish tea.jpg" alt="img">
    </div>
    <div class="customized-text-container">
      <h1>恭喜您! 專屬客製化飲料已製作完成!</h1>
      <h2>趕快把客製化的飲料加入購物車吧!</h2>
    </div>
    <br>
    <div class="button-container">
      <button class="customized-button">加入購物車<i class="fas fa-shopping-cart"></i></button>
   </div>
  </div>
</template>