<script setup>
  import articles1 from "../data/articles.json"
  import articles2 from "../data/articles2.json"
  import { useRoute } from "vue-router"
  
  const route = useRoute()
  const articleId = parseInt(route.params.id)
  

  const articles = (articleId >= 1 && articleId <= 5) ? articles1 : articles2;
  
  const article = articles.find(a => a.id === articleId)
</script>
<template>
    <div class="article-main">
      <div class="article-img-container">
      <img :src="article.img" alt="article-image">
    </div>
    <div class="article-text-container">
      <h1 class="article-title">{{ article.title }}</h1>
      <h2 class="article-subtitle">{{ article.subtitle }}</h2>
      <h2 class="article-text" v-html="article.text">
      </h2>
    </div>
    </div>
</template>