<script setup>
import { ref, computed} from 'vue';
import { useRouter } from 'vue-router';
const router = useRouter()
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
    const headerMobileBg = document.querySelector('.cart_slide_bg');
    headerMobileBg.classList.remove('cart_slide_bg_on');
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
    size: '大小',
    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
    sugar:'甜度',
    ice:['冰塊','正常','少冰','微冰','去冰'],
    ice: '冰塊',
    add:['加料','仙草','愛玉','珍珠','椰果'],
    add: '加料',
    addPrice: 0,
    num: 1,
  };
  

  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  cart.push(newItem);
  localStorage.setItem('cart', JSON.stringify(cart));
  location.reload()
  
}


</script>

<template>
  <div>
    <div class="customized-img-container">
      <!-- <img src="@/assets/image/customized/finish tea.jpg" alt="img"> -->
      <!-- 步驟動畫 -->
      <section class="animation cup_shake">
        <img class="customized_animation water2" src="@/assets/image/customized/water2.svg" alt="">
        <div>
          <svg class="waves" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
              <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
              <!-- <use xlink:href="#gentle-wave" x="48" y="2" fill="rgba(255, 193, 7,0.5)" /> -->
              <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255, 193, 7, 1)" />
            </g>
          </svg>
        </div>
        <img class="customized_animation straw" src="@/assets/image/customized/straw.svg" alt="">
        <img class="customized_animation cup" src="@/assets/image/customized/cup.svg" alt="">
        <img class="customized_animation cover2" src="@/assets/image/customized/cover.svg" alt="">

      </section>
    </div>
    <div class="customized-text-container customized_result">
      <h1 class="animate__animated animate__headShake">恭喜您! 專屬客製化飲料已製作完成!</h1>
      <h2>趕快把客製化的飲料加入購物車吧!</h2>
      <h3>選擇的茶底: <span>{{ customizationData.teabase }}</span></h3>
      <h3>選擇的冰塊: <span>{{ customizationData.ice }}</span></h3>
      <h3>選擇的甜度: <span>{{ customizationData.sugar }}</span></h3>
      <h3>是否加牛奶: <span>{{ customizationData.addMilk ? '是' : '否' }}</span></h3>
      <h3>選擇的水果: <span>{{ customizationData.selectedFruit }}</span></h3>
      <h3>選擇的加料: <span>{{ customizationData.selectedTopping }}</span></h3>
    </div>
    <br>
    <div class="button-container">
      <button class="customized-button customized-button animate__animated animate__headShake animate__delay-2s"
        @click="addToCart">加入購物車<i class="fas fa-shopping-cart"></i></button>
    </div>
  </div>
</template>
