<template>

   <li><RouterLink to="#" @click="toggleSlide"><img src="../assets/image/pic/icon/cart.svg" alt="" style="width: 28px;"></RouterLink></li>


<div class="cart">

  <div class="card_slide">
    <button class="close_slide" @click="toggleSlide">X</button>
    <h2 class="cart">購物車</h2>
      
  <div class="container">
    <div class="empty" v-if="cart.length <= 0">
      <div class="empty_cart">
        <img src="../assets/image/pic/icon/add_again.svg" alt="">
        <h4>您的購物車是空的</h4>
        <h4>快去買杯飲料吧~</h4>

      </div>
    </div>

    <ul v-for="(item, index) in cart" :key="item.key_id">
      <li><img src="../assets/image/pic/icon/cartlist_logo.png" alt="" ></li>
      <div class="product_r">
        <h3>{{item.name}}</h3>
        <div class="inner">
          <div class="select">
            <select name="" id="" class="size">
              <option value="">大小</option>
              <option value="">M</option>
              <option value="">L</option>
            </select>
            <span>*</span>
            <select name="" id="" class="sweet">
              <option value="">甜度</option>
              <option value="">正常</option>
              <option value="">少糖</option>
              <option value="">半糖</option>
              <option value="">微糖</option>
              <option value="">無糖</option>
            </select>
            <span>*</span> <br>
            <select name="" id="" class="ice">
              <option value="">冰塊</option>
              <option value="">正常</option>
              <option value="">少冰</option>
              <option value="">微冰</option>
              <option value="">去冰</option>
            </select>
            <span>*</span>
            <select name="" id="" class="add">
              <option value="">加料</option>
              <option value="">仙草</option>
              <option value="">愛玉</option>
              <option value="">珍珠</option>
              <option value="">椰果</option>
            </select>
          </div>
          <div class="button">
            <button class="minus">-</button>
            <span class="num">{{item.num}}</span>
            <button class="plus">+</button>
            <div class="button_2">
              <h2 class="dollor">NT${{item.mediumPrice}}</h2>
              <img src="../assets/image/pic/icon/Garbage.svg" alt="" @click="del(index)">
            </div>
          </div>
        </div>
      </div>
    </ul>
  </div>

  <div class="line"></div>
  <div class="clearall">
    <button class="clear_cart" @click="clearAll">清空購物車</button>
    <h4>目前已添加 {{cart.length}} 項商品</h4>
  </div>
  <div class="total">
    <h4>合計</h4>
    <h4>NT$180元</h4>
  </div>
  <button class="pay" @click="goToPay" :disabled="cart.length <= 0" :class="{'disabled' : cart.length <= 0}">前往結帳</button>

  </div>
</div>
</template>

<script>
export default {
  data() {
      return {
        // cart: localStorage.getItem("cart") || []
        cart:[]
      }
     },

    //  watch: {
    //   cart: function(){
    //     console.log("change");
    //   }
    //  },
      mounted(){
      // console.log("tt");
      let cart = JSON.parse(localStorage.getItem("cart"));
      // console.log(tasks); // null
      if(cart){
        this.cart = cart;
      }
    },
    
    
    
      methods: {
        selectedItem(product) {
  
        },
        toggleSlide() {
          const slide = document.querySelector('.card_slide');
          slide.classList.toggle("on");
        },
        addToCart(item) {
          //console.log(item);
          let item2 = JSON.parse(JSON.stringify(item));
          item2.key_id = Date.now();
          this.cart.push(item2);
        },
        del(index) {
          this.cart.splice(index, 1)
        },
        clearAll(){
          this.cart = []
        },
        goToPay(){
          location.href = "cart.html";
        }
      }
    }  
</script>

<style lang="scss" scoped>
  @import"../assets/sass/style.scss";
</style>