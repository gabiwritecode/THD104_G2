<script setup>
import { ref } from 'vue';

const customizationData = ref({
  teabase: localStorage.getItem('teabase'),
  ice: localStorage.getItem('ice'),
  sugar: localStorage.getItem('sugar'),
  addMilk: localStorage.getItem('addMilk'), 
  selectedFruit: localStorage.getItem('selectedFruit') , 
  selectedTopping: localStorage.getItem('selectedTopping'), 
});

const addToCart = () => {
  const newItem = {
    id: 29,
    name: '客製飲品',
    mediumPrice: 30,
    largePrice: 35,
    size:['大小','中杯','大杯'],  
    size: '大杯',  
    sugar: customizationData.value.sugar,
    ice: customizationData.value.ice,
    addPrice: 0,
    num: 1,
  };

  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  cart.push(newItem);
  localStorage.setItem('cart', JSON.stringify(cart));
}

</script>

<template>
  <div>
    <div class="customized-img-container">
      <img src="@/assets/image/customized/finish tea.jpg" alt="img">
    </div>
    <div class="customized-text-container">
      <h1>恭喜您! 專屬客製化飲料已製作完成!</h1>
      <h2>趕快把客製化的飲料加入購物車吧!</h2>
      <h2>選擇的茶底: {{ customizationData.teabase }}</h2>
      <h2>選擇的冰塊: {{ customizationData.ice }}</h2>
      <h2>選擇的甜度: {{ customizationData.sugar }}</h2>
      <h2>是否加奶: {{ customizationData.addMilk ? '是' : '否' }}</h2>
      <h2>選擇的水果: {{ customizationData.selectedFruit }}</h2>
      <h2>選擇的加料: {{ customizationData.selectedTopping }}</h2>
    </div>
    <br>
    <div class="button-container">
      <button class="customized-button" @click="addToCart">加入購物車<i class="fas fa-shopping-cart"></i></button>
    </div>
  </div>
</template>
