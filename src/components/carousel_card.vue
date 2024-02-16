<script setup>
    import { defineProps } from 'vue';
    import{useRouter} from "vue-router"

const router = useRouter()
const {article} = defineProps(['article'])
const navigateToArticle = () => {
    router.push(`/article/${article.id}`)
  }
</script>
<template>
  <div>
     <div class="info-article-wrapper" @click="navigateToArticle">
              <figure>
                <img :src="article.img"/>
              </figure>
              <div class="info-article-tag">{{article.tag}}</div>
              <div class="info-article-body">
                <h2>{{article.title}}</h2>
                <p>
                  {{article.subtitle}}
                </p>
              </div>
              <div class="more-info">Read More</div>
      </div>
    </div>
</template>