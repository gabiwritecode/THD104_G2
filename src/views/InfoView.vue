<script setup>
  import Carousel from "../components/carousel.vue"
  import a from "../data/articles.json"
  import a2 from "../data/articles2.json"
  import {ref} from "vue"
  const articles = ref(a)
  const articles2 = ref(a2)
  

</script>
<template>
  <div class="info-body">
    <h1 class="info-title">最新消息</h1>
    <h2 class="info-subtitle">商品資訊</h2>
      <Carousel :articles="articles"/>
    <h2 class="info-subtitle info-spacing">門市消息</h2>
      <Carousel :articles="articles2"/>
  </div>
</template>