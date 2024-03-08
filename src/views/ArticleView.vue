<script setup>
  import memberBtn from "../components/member_btn.vue"
  import { ref, onMounted } from "vue"
  import { useRoute } from "vue-router"

  const route = useRoute()
  const articleId = parseInt(route.params.id)

  const articles = ref([]);
  const article = ref(null);

  onMounted(async () => {
    try {
      let response;

      // 根據ID獲取資料
      if (articleId >= 1 && articleId <= 5) {
        response = await fetch('php/info_a1.php');
      } else if (articleId >= 6 && articleId <= 10) {
        response = await fetch('php/info_a2.php');
      } else {
        console.error('錯誤的文章ID');
        return;
      }

      if (response.ok) {
        const data = await response.json();
        articles.value = data;

        article.value = articles.value.find(a => a.ID === articleId);
      } else {
        console.error('Failed to fetch data');
      }
    } catch (error) {
      console.error('Error fetching data:', error);
    }
  });
</script>
<template>
    <div class="article-main">
      <div class="article-img-container">
      <img :src="article.IMG" alt="article-image">
    </div>
    <div class="article-text-container">
      <h1 class="article-title">{{ article.TITLE }}</h1>
      <h2 class="article-subtitle">{{ article.SUBTITLE }}</h2>
      <h2 class="article-text" v-html="article.TEXT">
      </h2>
    </div>
    </div>
  <memberBtn></memberBtn>
</template>