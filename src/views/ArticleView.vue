<script setup>
import memberBtn from "../components/member_btn.vue"
import { ref, onBeforeMount } from "vue"
import { useRoute } from "vue-router"

const route = useRoute()
const articleId = parseInt(route.params.id)

const articles = ref([]);
const article = ref(null);

onBeforeMount(async () => {
  try {
    let response;

    if (articleId >= 1 && articleId <= 5) {
      response = await fetch('php/info_a1.php');
    } else if (articleId >= 6 && articleId <= 10) {
      response = await fetch('php/info_a2.php');
    } else {
      console.error('Invalid article ID:', articleId);
      return;
    }

    if (response.ok) {
      const data = await response.json();
      console.log('Data from server:', data);

      articles.value = data;

     
      console.log('Article IDs in data:', articles.value.map(a => a.ID));

      //article.value = articles.value.find(a => a.ID === articleId);
      article.value = articles.value.find(a => a.ID === articleId.toString());

      if (!article.value) {
        console.error('Article not found for ID:', articleId);
      
        return;
      }

      console.log('Selected article:', article.value);
    } else {
      console.error('Failed to fetch data');
    }
  } catch (error) {
    console.error('Error fetching or processing data:', error);
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
      <h2 class="article-text" v-html="article.TEXT"></h2>
    </div>
  </div>
  <memberBtn></memberBtn>
</template>
