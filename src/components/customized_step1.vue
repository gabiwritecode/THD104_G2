<script setup>
import { ref, onMounted, defineProps, defineEmits } from 'vue';

const props = defineProps(['next-step']);
const emit = defineEmits();

const teabaseSelect = ref('');
const iceSelect = ref('');
const sugarSelect = ref('');

onMounted(() => {
  // 初始值
  teabaseSelect.value = localStorage.getItem('teabase') || '';
  iceSelect.value = localStorage.getItem('ice') || '';
  sugarSelect.value = localStorage.getItem('sugar') || '';
});

const nextStep = () => {
  // 使用 localStorage 儲存選擇的值（可選）
  localStorage.setItem('teabase', teabaseSelect.value);
  localStorage.setItem('ice', iceSelect.value);
  localStorage.setItem('sugar', sugarSelect.value);

  // 下一頁
  emit('next-step');
};
</script>

<template>
   <div class="customized-img-container">
      <!-- <img src="@/assets/image/customized/tea.jpg" alt="img"> -->
      <!-- 步驟動畫 -->
      <section class="animation">
        <img class="customized_animation water" src="@/assets/image/customized/water.svg" alt="">
        <img class="customized_animation nowater" src="@/assets/image/customized/nowater.svg" alt="">
        <img class="customized_animation cup" src="@/assets/image/customized/cup.svg" alt="">
      </section>
      
  </div>
    <div class="customized-text-container">
      <h1>第一步:選擇茶底</h1>
      <h2>請在下方選項中選擇您喜歡的茶類，做為客製化飲料的基底</h2>
    </div>
    <div class="customized-input-container">
      <span>選擇茶底：</span>
      <select  name="teabase" id="teabase" v-model="teabaseSelect">
        <option value="高山烏龍">高山烏龍</option>
        <option value="龍井綠茶">龍井綠茶</option>
        <option value="日月潭紅茶">日月潭紅茶</option>
        <option value="茉莉花茶">茉莉花茶</option>
        <option value="日月潭紅茶">日月潭紅茶</option>
      </select>
      <span>冰塊：</span>
      <select  name="ice" id="ice" v-model="iceSelect">
        <option value="去冰">去冰</option>
        <option value="微冰">微冰</option>
        <option value="少冰">少冰</option>
        <option value="正常">正常</option>
      </select>
      <span>甜度：</span>
      <select  name="sugar" id="sugar" v-model="sugarSelect">
        <option value="無糖">無糖</option>
        <option value="微糖">無糖</option>
        <option value="半糖">微糖</option>
        <option value="少糖">少糖</option>
        <option value="全糖">全糖</option>
      </select>
    </div>
    <div class="button-container">
      <button class="customized-button" @click="nextStep">下一步</button>
   </div>
</template>