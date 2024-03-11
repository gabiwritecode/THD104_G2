<script setup>
import { ref, onMounted, getCurrentInstance } from 'vue';

const instance = getCurrentInstance();
const emit = instance.emit;

const selectedTopping = ref('');

onMounted(() => {
  // 初始值
  selectedTopping.value = localStorage.getItem('selectedTopping') || '';
});

const prevStep = () => {
  // 更新資料
  localStorage.setItem('selectedTopping', selectedTopping.value);
  // 上一步
  emit('prev-step');
};

const nextStep = () => {
  // 更新資料
  localStorage.setItem('selectedTopping', selectedTopping.value);
  // 下一步
  emit('next-step');
};
</script>

<template>
  <div>
    <div class="customized-img-container">
      <!-- <img src="@/assets/image/customized/tapioka.jpg" alt="img"> -->
      <!-- 步驟動畫 -->
      <section class="animation">
        <img class="customized_animation water2" src="@/assets/image/customized/water2.svg" alt="">
        <div>
        <svg class="waves" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
              <defs><path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" /></defs>
              <g class="parallax"><use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255, 193, 7, 1)" /></g></svg>
        </div>
        <img class="customized_animation bubble1" src="@/assets/image/customized/bubble.svg" alt="">
        <img class="customized_animation bubble2" src="@/assets/image/customized/bubble.svg" alt="">
        <img class="customized_animation bubble3" src="@/assets/image/customized/bubble.svg" alt="">
        <img class="customized_animation cup" src="@/assets/image/customized/cup.svg" alt="">
      </section>
    </div>
    <div class="customized-text-container">
      <h1>第四步:加料</h1>
      <h2>手搖飲怎麼能沒有加料!趕快把喜歡的料加入選項吧</h2>
    </div>
    <div class="customized-checkbox-container">
        <div class="customized-checkbox-item">
          <p>珍珠：</p>
          <input type="radio" name="topping" class="radio-box" v-model="selectedTopping" value="珍珠">
      </div>
      <div class="customized-checkbox-item">
          <p>仙草：</p>
          <input type="radio" name="topping" class="radio-box" v-model="selectedTopping" value="仙草">
        </div>
        <div class="customized-checkbox-item">
          <p>綠茶凍：</p>
          <input type="radio" name="topping" class="radio-box" v-model="selectedTopping" value="綠茶凍">
      </div>
      <div class="customized-checkbox-item">
          <p>布丁：</p>
          <input type="radio" name="topping" class="radio-box" v-model="selectedTopping" value="布丁">
      </div>
      <div class="customized-checkbox-item">
        <p>椰果：</p>
        <input type="radio" name="topping" class="radio-box" v-model="selectedTopping" value="椰果">
      </div>
      <div class="customized-checkbox-item">
        <p>不添加：</p>
        <input type="radio" name="topping" class="radio-box" v-model="selectedTopping" value="不添加">
      </div>
    </div>
    <br>
    <div class="button-container">
      <button class="customized-button" @click="prevStep">上一步</button>
      <button class="customized-button" @click="nextStep">下一步</button>
   </div>
  </div>
</template>
