<script setup>
import { ref, onMounted, defineProps, defineEmits } from 'vue';
const props = defineProps(['next-step']);
const emit = defineEmits();

const selectedFruit = ref('');

onMounted(() => {
  // 回復初始值
  selectedFruit.value = localStorage.getItem('selectedFruit') || '';
});

const prevStep = () => {
  // 更新資料
  localStorage.setItem('selectedFruit', selectedFruit.value);
  // 上一步
  emit('prev-step');
};

const nextStep = () => {
  // 更新資料
  localStorage.setItem('selectedFruit', selectedFruit.value);
  // 下一步
  emit('next-step');
};
</script>



<template>
  <div>
    <div class="customized-img-container">
      <!-- <img src="@/assets/image/customized/peach.jpg" alt="img"> -->
      <!-- 步驟動畫 -->
      <section class="animation animate__animated animate__pulse">
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
        <img class="customized_animation bubble1 fruit" src="@/assets/image/customized/fruit.svg" alt="">
        <img class="customized_animation bubble2 fruit" src="@/assets/image/customized/fruit.svg" alt="">
        <img class="customized_animation bubble3 fruit" src="@/assets/image/customized/fruit.svg" alt="">
        <img class="customized_animation cup" src="@/assets/image/customized/cup.svg" alt="">
      </section>
    </div>
    <div class="customized-text-container">
      <h1 class="animate__animated animate__pulse">第三步:加水果</h1>
      <h2>在你的飲料中加入新鮮的水果，給你無法抵抗的酸甜滋味</h2>
    </div>
    <div class="customized-checkbox-container">
      <div class="customized-checkbox-item">
        <input type="radio" name="fruit" class="radio-box" v-model="selectedFruit" value="水蜜桃" id="peach">
        <label for="peach">水蜜桃</label>
      </div>
      <div class="customized-checkbox-item">
        <input type="radio" name="fruit" class="radio-box" v-model="selectedFruit" value="草莓" id="strawberry">
        <label for="strawberry">草莓</label>
      </div>
      <div class="customized-checkbox-item">
        <input type="radio" name="fruit" class="radio-box" v-model="selectedFruit" value="藍莓" id="blueberry">
        <label for="blueberry">藍莓</label>
      </div>
      <div class="customized-checkbox-item">
        <input type="radio" name="fruit" class="radio-box" v-model="selectedFruit" value="香蕉" id="banana">
        <label for="banana">香蕉</label>
      </div>
      <div class="customized-checkbox-item">
        <input type="radio" name="fruit" class="radio-box" v-model="selectedFruit" value="不添加" id="nofruit">
        <label for="nofruit">不添加</label>
      </div>
    </div>
    <br>
    <div class="button-container">
      <button class="customized-button" @click="prevStep">上一步</button>
      <button class="customized-button" @click="nextStep">下一步</button>
    </div>
  </div>
</template>
