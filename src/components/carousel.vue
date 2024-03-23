<script>
import { ref } from 'vue';
import CarouselCard from "../components/carousel_card.vue";

export default {
  props: {
    articles: Array,
  },
  components: {
    CarouselCard
  },
  setup() {
    const carousel = ref(null);
    let touchStartX = 0;
    let touchEndX = 0;

    const scrollCarousel = (direction) => {
      const scrollAmount = 410;

      if (direction === 'left') {
        carousel.value.scrollLeft -= scrollAmount;
      } else {
        carousel.value.scrollLeft += scrollAmount;
      }
    };

    const handleTouchStart = (event) => {
      touchStartX = event.touches[0].clientX;
    };

    const handleTouchMove = (event) => {
      touchEndX = event.touches[0].clientX;
    };

    const handleTouchEnd = () => {
      const swipeDistance = touchStartX - touchEndX;
      if (swipeDistance > 50) {
        scrollCarousel('right');
      } else if (swipeDistance < -50) {
        scrollCarousel('left');
      }
    };

    return {
      carousel,
      scrollCarousel,
      handleTouchStart,
      handleTouchMove,
      handleTouchEnd,
    };
  },
};
</script>




<template>
  <section class="slider-section">
    <div
    ref="carousel"
    class="carousel"
    @scroll="handleScroll"
    @touchstart="handleTouchStart"
    @touchmove="handleTouchMove"
    @touchend="handleTouchEnd"
    >
    <CarouselCard class="article" v-for="article in articles" :key="article.ID" :article="article"></CarouselCard>
  </div>
  <i @click="scrollCarousel('left')" class="fa-solid fa-angle-left"></i>
    <i @click="scrollCarousel('right')" class="fa-solid fa-angle-right"></i>
  </section>
</template>

