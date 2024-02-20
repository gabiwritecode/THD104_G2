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
   <div class="customized-img-container">
      <img src="@/assets/image/customized/tea.jpg" alt="img">
    </div>
    <div class="customized-text-container">
      <h1>第一步:選擇茶底</h1>
      <h2>請在下方選項中選擇您喜歡的茶類，做為客製化飲料的基底</h2>
    </div>
    <div class="customized-input-container">
      <span>選擇茶底：</span>
      <select name="teabase" id="teabase">
        <option value="1">高山烏龍</option>
        <option value="2">龍井綠茶</option>
        <option value="3">日月潭紅茶</option>
        <option value="4">茉莉花茶</option>
        <option value="5">日月潭紅茶</option>
      </select>
      <span>冰塊：</span>
      <select name="ice" id="ice">
        <option value="1">去冰</option>
        <option value="2">微冰</option>
        <option value="3">少冰</option>
        <option value="4">正常冰</option>
        <option value="5">熱飲</option>
      </select>
      <span>甜度：</span>
      <select name="sugar" id="sugar">
        <option value="1">無糖</option>
        <option value="2">一分糖</option>
        <option value="3">微糖</option>
        <option value="4">少糖</option>
        <option value="5">正常甜</option>
      </select>
    </div>
    <div class="button-container">
      <button class="customized-button" @click="nextStep">下一步</button>
   </div>
</template>