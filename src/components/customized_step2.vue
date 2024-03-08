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
      <img src="@/assets/image/customized/milk.jpg" alt="img">
    </div>
    <div class="customized-text-container">
      <h1>第二步:加牛奶</h1>
      <h2>想要把茶飲變成香醇的拿鐵嗎? 那就點擊下方的選項吧<br>
        (若無，請按下一步)</h2>
    </div>
    <div class="customized-milk-container">
      <p>加奶：</p>
      <input type="checkbox" class="checkbox" v-model="addMilkCheckbox">
    </div>
    <br>
    <div class="button-container">
      <button class="customized-button" @click="prevStep">上一步</button>
      <button class="customized-button" @click="nextStep">下一步</button>
   </div>
  </div>
</template>
