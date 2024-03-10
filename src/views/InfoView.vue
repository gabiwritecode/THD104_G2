<script setup>
  import Carousel from "../components/carousel.vue"
  import memberBtn from "../components/member_btn.vue"
  import { ref, onMounted } from "vue"

  const articles = ref([]);
  const articles2 = ref([]);


  onMounted(async () => {
    try {
      const responseA = await fetch('php/info_a1.php');
      const responseA2 = await fetch('php/info_a2.php');
      
      if (responseA.ok && responseA2.ok) {
        articles.value = await responseA.json();
        articles2.value = await responseA2.json();
      } else {
        console.error('Failed to fetch data');
      }
    } catch (error) {
      console.error('Error fetching data:', error);
    }
  });
</script>
<template>
  <div class="info-body">
    <h1 class="info-title">最新消息</h1>
    <h2 class="info-subtitle">商品資訊</h2>
      <Carousel :articles="articles"/>
    <h2 class="info-subtitle info-spacing">門市消息</h2>
      <Carousel :articles="articles2"/>
  </div>
  <memberBtn></memberBtn>
</template>
<style scoped>

  @media screen and (max-width:1000px){
    header nav{
      width: 1000px;
    }
  }

</style>