<script setup>
    import { defineProps } from 'vue';
    import{useRouter} from "vue-router"

const router = useRouter()
const {article} = defineProps(['article'])
const navigateToArticle = () => {
    router.push(`/article_item${article.ID}`)
  }
</script>
<template>
  <div>
     <div class="info-article-wrapper" @click="navigateToArticle">
              <figure>
                <img :src="article.IMG"/>
              </figure>
              <div class="info-article-tag">{{article.CATEGORY_NAME}}</div>
              <div class="info-article-body">
                <h2>{{article.TITLE}}</h2>
                <p>
                  {{article.SUBTITLE}}
                </p>
              </div>
              <div class="more-info">Read More</div>
      </div>
    </div>
</template>