<template>
<div class="cart">
  
  <main>
      <div id="app" class="info">
        <div class="confirm_info">
          <h2>訂單資料</h2>
          <div class="cart_list_banner">
            <div class="order_list">
              <ul>
                <li><img src="../assets/image/pic/icon/cartlist_logo.png" alt=""></li>
                <div class="order_list_text">
                  <span>檸檬蜜桃冰沙 - 中杯</span>
                  <p>微糖/加珍珠</p>
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
        </div>
        <div class="count">
          <button class="add_cart" @click="keepBuy">繼續加購</button>
          <div class="add_cart_text">
            <span class="amount">總計3杯</span>
            <span>NT$180元</span>
          </div>
        </div>
      </div>
      <div class="write_info">
        <h2>確認完請填寫以下資訊</h2>
        <form>
          <label class="lable_name">
            <h2>姓名:</h2>
            <input type="text" placeholder="請輸入您的姓名" name="name">
          </label>
          <label class="lable_name">
            <h2>手機:</h2>
            <input type="text" placeholder="請輸入您的手機號碼" name="phone">
          </label>
          <label class="lable_name">
            <h2>地址:</h2>
            <input type="text" placeholder="請輸入您的地址" name="address">
          </label>
          <label for="creditCard" class="lable_name">
            <h2>付款方式:</h2>
            <input type="radio" class="radio" name="payment" value="creditCard" id="creditCard">信用卡
            <label for="linePay" class="lable_name">
              <input type="radio" class="radio" name="payment" value="linePay" id="linePay">Line Pay
            </label>
          </label>
          <div class="creditcard">
            <div class="creditcard_1">
              <div class="creditnum">信用卡號碼</div>
              <div class="creditcard_text">
                <input type="text" placeholder="1234">
                <input type="text" placeholder="1234">
                <input type="text" placeholder="1234">
                <input type="text" placeholder="1234">
              </div>
            </div>
            <div class="creditcard_1">
              <div class="creditnum">有效期限</div>
              <div class="creditcard_text">
                <input type="text" placeholder="MM/YY" class="date">
              </div>
            </div>
            <div class="creditcard_1">
              <div class="creditnum">背面後三碼</div>
              <div class="creditcard_text">
                <input type="text" placeholder="CVC/CVV">
              </div>
            </div>
          </div>
        </form>
        <button>結帳</button>
      </div>
    </div>
  </main>

</div>

<MemberBtn></MemberBtn>
</template>

<script>
import MemberBtn from "../components/member_btn.vue"



export default{
  components: { MemberBtn },
 
      data() {
        return {
          counter: 1
        }
      },
      methods: {
        minus() {
          this.counter--;
          if (this.counter < 1) {
            this.counter = 1;
          }
  
        },
        keepBuy() {
          location.href = "/products";
        }
  
      }
    };
   


</script>



<style lang="scss">
  @import"../assets/sass/style.scss";
</style>