<script>
import { ref, defineProps } from 'vue';
import{useRouter} from "vue-router";
import CarouselCard from "../components/carousel_card.vue"

export default {
  
  props: {
    articles: Array,
  },
  components: {
    CarouselCard
  },
  setup() {
     
    const carousel = ref(null);

    const scrollCarousel = (direction) => {
      const scrollAmount = 400; 

      if (direction === 'left') {
        carousel.value.scrollLeft -= scrollAmount;
      } else {
        carousel.value.scrollLeft += scrollAmount;
      }
    };



    return {
      carousel,
      scrollCarousel,
    };
  },
};
</script>


<template>
  <section class="slider-section">
      <i  @click="scrollCarousel('left')" class="fa-solid fa-angle-left"></i>
        <div  ref="carousel" class="carousel"  @scroll="handleScroll">
          <CarouselCard class="article" v-for="article in articles" :key="article.id" :article="article">
           
          </CarouselCard>
  
        </div>
      <i @click="scrollCarousel('right')"  class="fa-solid fa-angle-right"></i>
    </section>
</template>

