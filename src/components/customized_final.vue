<script setup>
import { ref, computed } from 'vue';
const cart = ref([]);
const lightbox = ref(false);
const toggleSlide = () => {
  const slide = document.querySelector('.card_slide');
  slide.classList.toggle("on");
};

const addNum = (item) => {
  item.num++;
  localStorage.setItem("cart", JSON.stringify(cart.value));
};

const subNum = (item) => {
  item.num--;
  if (item.num < 1) {
    item.num = 1;
  }
  localStorage.setItem("cart", JSON.stringify(cart.value));
};

const del = (index) => {
  cart.value.splice(index, 1);
  localStorage.setItem("cart", JSON.stringify(cart.value));
};

const checkAdd = (item) => {
  if (item.add == '加料') {
    item.addPrice = 0;
  } else {
    item.addPrice = 10;
  }
  localStorage.setItem("cart", JSON.stringify(cart.value));
};

const clearAll = () => {
  cart.value = [];
  localStorage.setItem("cart", JSON.stringify(cart.value));
};

const isSelected = (item) => {
  if (item.size !== '大小' && item.sugar !== '甜度' && item.ice !== '冰塊') {
    item.isSelected = true;
  } else {
    item.isSelected = false;
  }
  localStorage.setItem("cart", JSON.stringify(cart.value));
};

const total = computed(() => {
  return cart.value.reduce((sum, item) => {
    if (item.size == '大杯') {
      return sum + item.num * (item.largePrice + item.addPrice);
    } else {
      return sum + item.num * (item.mediumPrice + item.addPrice);
    }
  }, 0);
});

const goToPay = () => {
  let isSelectAll = true;
  for (let i = 0; i < cart.value.length; i++) {
    if (!cart.value[i].isSelected) {
      isSelectAll = false;
    }
  }

  if (isSelectAll) {
    location.href = '#/cart';
  } else {
    lightbox.value = true;
  }
};

const closeLightBox = () => {
  lightbox.value = false;
};

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
