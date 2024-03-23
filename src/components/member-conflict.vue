<template>

  <!------ 購物車------>
  <div class="cart">
  
  <div class="card_slide">
      <div class="lightbox" v-if="lightbox">
          <div class="alertText">
              <h4 class="text_1">還有飲料未選擇</h4>
              <h4>大小/甜度/冰塊</h4>
              <button @click="closeLightBox">確認</button>
          </div>
  
      </div>
      <button class="close_slide" @click="toggleSlide"><i class="fa-solid fa-xmark"></i></button>
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
                              <select name="" id="" class="size" v-model="item.size" @change="isSelected(item)">
                                  <option value="大小">大小</option>
                                  <option value="中杯">M</option>
                                  <option value="大杯">L</option>
                              </select>
                              <span>*</span>
                              <select name="" id="" class="sweet" v-model="item.sugar" @change="isSelected(item)">
                                  <option value="甜度">甜度</option>
                                  <option value="全糖">全糖</option>
                                  <option value="少糖">少糖</option>
                                  <option value="半糖">半糖</option>
                                  <option value="微糖">微糖</option>
                                  <option value="無糖">無糖</option>
                              </select>
                              <span>*</span> <br>
                              <select name="" id="" class="ice" v-model="item.ice" @change="isSelected(item)">
                                  <option value="冰塊">冰塊</option>
                                  <option value="正常">正常</option>
                                  <option value="少冰">少冰</option>
                                  <option value="微冰">微冰</option>
                                  <option value="去冰">去冰</option>
                              </select>
                              <span>*</span>
                              <select name="" id="" class="add" v-model="item.add" @change="checkAdd(item)">
                                  <option value="加料">加料</option>
                                  <option value="仙草">仙草</option>
                                  <option value="愛玉">愛玉</option>
                                  <option value="珍珠">珍珠</option>
                                  <option value="椰果">椰果</option>
                              </select>
                          </div>
                          <div class="button">
                              <button class="minus" @click="subNum(item)">-</button>
                              <span class="num">{{item.num}}</span>
                              <button class="plus" @click="addNum(item)">+</button>
                              <div class="button_2">
                                  <h2 class="dollor" v-if="item.size=='大小'" >NT$<span>{{ (item.mediumPrice + item.addPrice) * item.num }}</span></h2>
                                  <h2 class="dollor" v-else-if="item.size=='中杯'" >NT$<span>{{ (item.mediumPrice + item.addPrice) * item.num }}</span></h2>
                                  <h2 class="dollor" v-else-if="item.size=='大杯'">NT$<span>{{(item.largePrice + item.addPrice) * item.num }}</span></h2>
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
          <h4>NT${{ total }}元</h4>
      </div>
      <button class="pay" @click="goToPay" :disabled="cart.length <= 0" :class="{'disabled' : cart.length <= 0}">前往結帳</button>
  
  </div>
  </div>
  
  
  </template>
  
  <script>
  export default {
    data() {
        return {
          lightbox: false,
          cart:[]
        }
  
       },
  
       beforeMount() {
    let cart = JSON.parse(localStorage.getItem("cart"));
    if (cart) {
      this.cart = cart;
  
      // Set default values for each item in the cart
      this.cart.forEach((item) => {
        this.isSelected(item);
      });
    }
  },
    computed:{
      
      total(){
        
         return this.cart.reduce((sum, item) => {
            if(item.size == '大杯'){
                return sum + item.num * (item.largePrice + item.addPrice)
            }else{
                return sum + item.num * (item.mediumPrice + item.addPrice)
            }
         }, 0)
        
          }
          
    },
    methods:{
      toggleSlide() {
  
      const slide = document.querySelector('.card_slide');
      slide.classList.toggle("on");
        const headerMobileBg = document.querySelector('.cart_slide_bg');
        headerMobileBg.classList.toggle('cart_slide_bg_on');
      },
      addNum(item){
        item.num++
        localStorage.setItem("cart", JSON.stringify(this.cart));
        },
      subNum(item){
        item.num--
        if(item.num < 1){
            item.num = 1
        }
          localStorage.setItem("cart", JSON.stringify(this.cart));
        },
        del(index) {
        this.cart.splice(index, 1)
        localStorage.setItem("cart", JSON.stringify(this.cart));
  },
        checkAdd(item){
          if(item.add == '加料'){
              item.addPrice = 0
              // console.log('a');
          }else{
              item.addPrice = 10
          }
  
          localStorage.setItem("cart", JSON.stringify(this.cart));
             
          },
          clearAll(){
          this.cart = []
          localStorage.setItem("cart", JSON.stringify(this.cart));
        },
        isSelected(item) {
    if (item.size !== '大小' && item.sugar !== '甜度' && item.ice !== '冰塊') {
      item.isSelected = true;
    } else {
      item.isSelected = false;
    }
  
    // Set default values for custom drinks
    if (item.name == '客製飲品') {
      // Retrieve values from local storage
      item.sugar = localStorage.getItem('sugar') || '甜度';
      item.ice = localStorage.getItem('ice') || '冰塊';
  
      // Set default size to '大杯'
      item.size = '大杯';
      // Set isSelected to true for items with default values
      item.isSelected = true;
    }
  
    localStorage.setItem("cart", JSON.stringify(this.cart));
  },
  goToPay() {
    let isSelectAll = this.cart.every((item) => item.isSelected);
  
    if (isSelectAll) {
      location.href = '#/cart';
    } else {
      this.lightbox = true;
    }
  },
          closeLightBox(){
              this.lightbox = false
          }
  }
  }  
       
      
      
      
      
  </script>
  
  <style lang="scss">
  //   @import"../assets/sass/style.scss";
  </style>