<template>
<div class="cart">
  
  <main>
      <div id="app" class="info">
        <div class="confirm_info">
          <h2>訂單資料</h2>
          <div class="cart_list_banner" v-for="(item,index) in cart" :key="index">
            <div class="order_list">
              <ul>
                <li><img src="../assets/image/pic/icon/cartlist_logo.png" alt=""></li>
                <div class="order_list_text">
                  <span>{{ item.name }} - {{ item.size }}</span>
                  <p>{{item.sugar}}/{{ item.ice }}<span class="add" v-if="item.add !=='加料' ">/加{{item.add}}</span></p>
                  <div class="button">
                    <button class="minus" @click="subNum(item)">-</button>
                    <span>{{item.num}}</span>
                    <button class="plus" @click="addNum(item)">+</button>
                  </div>
                </div>
              </ul>
            </div>
            <div class="order_list_r">
              <img src="../assets/image/pic/icon/Garbage.svg" alt="" @click="del(index)">
              <div v-if="item.size=='中杯'">NT${{ (item.mediumPrice + item.addPrice) * item.num }}</div>
              <div v-else-if="item.size=='大杯'">NT${{ (item.largePrice + item.addPrice) * item.num }}</div>
            </div>
  
        </div>

        <div class="lightbox" v-if="writtenLightbox">
          <div class="lightbox_inner">
            <img src="../assets/image/pic/icon/order_complete.svg" alt="">
            <h3>您的訂單已完成</h3>
            <button @click="goToHomePage">返回首頁</button>

          </div>
        </div>
        <!-- <div class="cart_list_banner">
          <div class="order_list">
            <ul>
              <li><img src="../assets/image/pic/icon/cartlist_logo.png" alt=""></li>
              <div class="order_list_text">
                <span>武夷岩茶 - 大杯</span>
                <p>無糖/去冰/加愛玉</p>
                <div class="button">
                  <button class="minus" @click="minus()">-</button>
                  <span>{{counter}}</span>
                  <button class="plus" @click="counter++">+</button>
                </div>
              </div>
            </ul>
          </div>
          <div class="order_list_r">
            <img src="../assets/image/pic/icon/Garbage.svg" alt="">
            <div>NT$60</div>
          </div>
  
        </div>
        <div class="cart_list_banner">
          <div class="order_list">
            <ul>
              <li><img src="../assets/image/pic/icon/cartlist_logo.png" alt=""></li>
              <div class="order_list_text">
                <span>經典拿鐵 - 大杯</span>
                <p>少糖/少冰</p>
                <div class="button">
                  <button class="minus" @click="minus()">-</button>
                  <span>{{counter}}</span>
                  <button class="plus" @click="counter++">+</button>
                </div>
              </div>
            </ul>
          </div>
          <div class="order_list_r">
            <img src="../assets/image/pic/icon/Garbage.svg" alt="">
            <div>NT$60</div>
          </div>
        </div> -->
        <div class="count">
          <button class="add_cart" @click="keepBuy">繼續加購</button>
          <div class="add_cart_text">
            <span class="amount">總計{{ cup }}杯</span>
            <span>NT${{ total }}元</span>
          </div>
        </div>
      </div>
      <div class="write_info">
        <h2>確認完請填寫以下資訊</h2>
        <form>
          <label class="lable_name">
            <h2>姓名:</h2>
            <input type="text" placeholder="請輸入您的姓名" name="name" value="">
          </label>
          <label class="lable_name">
            <h2>手機:</h2>
            <input type="text" placeholder="請輸入您的手機號碼" name="phone" value="">
          </label>
          <label class="lable_name">
            <h2>地址:</h2>
            <input type="text" placeholder="請輸入您的地址" name="address" value="">
          </label>
          <label for="creditCard" class="lable_name">
            <h2>付款方式:</h2>
              <input type="radio" class="radio" name="payment" value="creditCard" id="creditCard">
              <h2>信用卡</h2>
            <label for="linePay" class="lable_name">
              <input type="radio" class="radio" name="payment" value="linePay" id="linePay">
              <h2>Line Pay</h2>
            </label>
          </label>
          <div class="creditcard">
            <div class="creditcard_1">
              <div class="creditnum">信用卡號碼</div>
              <div class="creditcard_text">
                <input type="text" placeholder="1234" value="" maxlength="4">
                <input type="text" placeholder="1234" value="" maxlength="4">
                <input type="text" placeholder="1234" value="" maxlength="4">
                <input type="text" placeholder="1234" value="" maxlength="4">
              </div>
            </div>
            <div class="creditcard_1">
              <div class="creditnum">有效期限</div>
              <div class="creditcard_text">
                <input type="text" placeholder="MM/YY" class="date" value="">
              </div>
            </div>
            <div class="creditcard_1">
              <div class="creditnum">背面後三碼</div>
              <div class="creditcard_text">
                <input type="text" placeholder="CVC/CVV" value="" maxlength="3">
              </div>
            </div>
          </div>
        </form>
        <button @click="checkInp()" :disabled="cart.length <= 0" :class="{'no_item' : cart.length <= 0}">結帳</button>
      </div>
    </div>
  </main>

</div>

<!-- <MemberBtn></MemberBtn> -->
</template>

<script>
import MemberBtn from "../components/member_btn.vue"



export default{
  components: { MemberBtn },
 
      data() {
        return {
          cart: JSON.parse(localStorage.getItem('cart')),
          writtenLightbox: false
          
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
       
         },

         cup(){
          return this.cart.reduce((sum, item) => {
            return sum + item.num
          }, 0)
         }
      },
      methods: {
        subNum(item){
        item.num--
        if(item.num < 1){
            item.num = 1
        }
        localStorage.setItem("cart", JSON.stringify(this.cart));
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
        keepBuy() {
          location.href = "/thd104/g2/products";
        },
        checkInp(){
          let inputs = document.querySelectorAll('.write_info input')
          
          let written = true
          for(let i = 0; i < inputs.length; i++){
            if(inputs[i].value == ''){
              written = false
            }
            
          }
          if(written){
            this.writtenLightbox = true
          }else{
            alert('還有資料未填寫')
          }
        },
        close(){
          this.writtenLightbox = false
        },
        goToHomePage(){
          location.href = '/HomeView'
        }
  
      }
    };
   


</script>



<style lang="scss" scoped>
  @import"../assets/sass/style.scss";
</style>


