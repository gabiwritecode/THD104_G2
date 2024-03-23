<script setup>
import { ref, onMounted, defineProps, defineEmits } from 'vue';
const props = defineProps(['next-step']);
const emit = defineEmits();

const addMilkCheckbox = ref(false);

onMounted(() => {
  // 回復初始值
  addMilkCheckbox.value = localStorage.getItem('addMilk') === 'true' || false;
});

const prevStep = () => {
  // 儲存資料
  localStorage.setItem('addMilk', addMilkCheckbox.value.toString());
  // 觸發上一步
  emit('prev-step');
};

const nextStep = () => {
  // 儲存資料
  localStorage.setItem('addMilk', addMilkCheckbox.value.toString());
  // 觸發下一步
  emit('next-step');
};
</script>


<template>
  <div>
    <div class="customized-img-container">
      <!-- <img src="@/assets/image/customized/milk.jpg" alt="img"> -->
      <!-- 步驟動畫 -->
      <section class="animation">
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
        <img class="customized_animation water_drop1" src="@/assets/image/customized/water_drop.svg" alt="">
        <img class="customized_animation water_drop2" src="@/assets/image/customized/water_drop.svg" alt="">
        <img class="customized_animation water_drop3" src="@/assets/image/customized/water_drop.svg" alt="">
        <img class="customized_animation cup" src="@/assets/image/customized/cup.svg" alt="">
      </section>
    </div>
    <div class="customized-text-container">
      <h1>第二步:加牛奶</h1>
      <h2>想要把茶飲變成香醇的拿鐵嗎? 那就點擊下方的選項吧<br>
        (若無，請按下一步)</h2>
    </div>
    <div class="customized-milk-container">
      <input type="checkbox" class="checkbox" id="add_milk" v-model="addMilkCheckbox">
      <label for="add_milk">加奶</label>
    </div>
    <br>
    <div class="button-container">
      <button class="customized-button" @click="prevStep">上一步</button>
      <button class="customized-button" @click="nextStep">下一步</button>
    </div>
  </div>
</template>
