<template>

  <div class="order_success">
   
      <h3 @appear = appear>成功加入購物車</h3>
  </div>
</template>

<script>
export default {
props:['appear'],

methods:{
  appear(){
    let appear = document.querySelector('order_success h3')
    appear.style.opacity = 1
  }
}
}
</script>

<style>

</style>