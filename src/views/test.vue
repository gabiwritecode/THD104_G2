<template>
   <div class="space"></div>
    <div class="products_wrapper">
     <!------------------- banner ------------------->
        <div class="banner">
            <div class="container">
                <span>BOISSON </span><br><span>MENU</span>
                <img src="../assets/image/products/ion_leaf-outline.svg" alt="">
                <p>捌嵩茶飲的經典滋味<img src="../assets/image/products/Line_banner.svg" alt=""></p>
            </div>
        </div>
        <!---- 圓形動畫、飲料照片 ---->
        <div class="top">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <img src="../assets/image/products/naixi_qubei.png" alt="">
        </div>
        
        <!---- TAIWAN TEA字 ---->
        <div class="background_text">
            <span>TAIWAN TEA</span>
            <span>捌嵩飲茶，品味悠久的文化底蘊，感受時光與茶的對話。</span>
        </div>

        <!---- 背景裝飾曲線 ---->
        <div class="background_img">
            <img class="curve1" src="../assets/image/products/curve_p_1.png" alt="">
            <img class="curve1 curve1m" src="../assets/image/products/curve_p_1m.svg" alt="">
            <div class="bg_circle1"></div> 
            <img class="curve2" src="../assets/image/products/curve_p_2.png" alt="">
           
        </div>
       
        
        <!------------------- products ------------------->

        <!---- 純茶系列 ---->
        <div class="product tea">
            <ul>
                <li>
                    <img src="../assets/image/products/tea_pic.png" alt="">
                </li>
                
                <li>
                    <div class="introduce"> 
                    <h1>
                    <img src="../assets/image/products/ion_leaf-outline2.svg" alt="">純茶系列</h1>
                    <p>清香悠遠，口感純淨，純茶，自然的悠然饗宴。</p></div>
                
                    <ol>
                        <li class="left_list"> 
                            <div class="size"> 
                                <span class="product_name"></span> <span class="product_price">M</span><span class="product_price">L</span></div>
                            <div class="row no1" v-for=" item in drinkList1" :key="item.id"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">{{ item.name }}</span> <span class="product_price ">${{ item.mediumPrice }}</span><span class="product_price">${{ item.largePrice }}</span><button class="add_cart" @click="addToCart(item)"><i class="fa-solid fa-cart-shopping"></i></button></div>
                            <!-- <div class="row no2"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>
                            <div class="row no3"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>
                            <div class="row no4"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍茶勒</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>     -->
                        </li>
            
                            <li> 
                                <div class="size"> <span class="product_name"></span> <span class="product_price">M</span><span class="product_price">L</span></div>
                                <div class="row no5" v-for="item in drinkList2" :key="item.id"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">{{ item.name }}</span> <span class="product_price ">${{ item.mediumPrice }}</span><span class="product_price">${{ item.largePrice }}</span><button class="add_cart" @click="addToCart(item)"><i class="fa-solid fa-cart-shopping"></i></button></div>
                                <!-- <div class="row no6"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>
                                <div class="row no7"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>
                                <div class="row no8"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍茶勒</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>    -->
                        </li>
                    </ol>
                 
                </li>
            </ul>
        </div>
        
        <!---- 奶茶系列 ---->
        <div class="product milk_tea">
            <ul>
                <li>
                    <div class="introduce"><h1><img src="../assets/image/products/ion_leaf-outline2.svg" alt="">奶茶系列</h1>
                        <p>香滑濃醇，奶香四溢，美味奶茶的經典滋味。</p>
                    </div>
                    <ol>
                        <li class="left_list"> 
                            <div class="size">                                                                 <span class="product_name"></span> <span class="product_price">M</span><span class="product_price">L</span></div>
                            <div class="row no1" v-for="item in drinkList3" :key="item.id"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">{{ item.name }}</span> <span class="product_price ">${{ item.mediumPrice }}</span><span class="product_price">${{ item.largePrice }}</span><button class="add_cart" @click="addToCart(item)"><i class="fa-solid fa-cart-shopping"></i></button></div>
                            <!-- <div class="row no2"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>
                            <div class="row no3"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>
                            <div class="row no4"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍茶勒</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>     -->
                        </li>
            
                        <li> 
                             <div class="size">
                                <span class="product_name"></span> <span class="product_price">M</span><span class="product_price">L</span></div>
                            <div class="row no5" v-for="item in drinkList4" :key="item.id"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">{{ item.name }}</span> <span class="product_price ">${{ item.mediumPrice }}</span><span class="product_price">${{ item.largePrice }}</span><button class="add_cart" @click="addToCart(item)"><i class="fa-solid fa-cart-shopping"></i></button></div>
                            <!-- <div class="row no6"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span class="product_price">$35</span></div>
                            <div class="row no7"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span class="product_price">$35</span></div>
                            <div class="row no8"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍茶勒</span> <span class="product_price ">$30</span><span class="product_price">$35</span></div>    -->
                        </li>
                    </ol>
                   </li>
                <li>
                    <img src="../assets/image/products/milktea_pic.png" alt="">
                </li>
            </ul>
        </div>
        <!------------------- 商品下半部 ------------------->
        <div class="area2">

            <!---- 背景裝飾曲線 ---->
            <img class="curve3" src="../assets/image/products/curve_p_3.png" alt="">
            <img class="curve4" src="../assets/image/products/curve_p_4.png" alt="">
            <!---- 大標題 ---->
            <div class="title">
                <h1>FRUIT & COFFEE</h1>
                <p>清新解渴，每口都是生活的美好。</p>
            </div>
            
            <!---- 水果茶系列 ---->
            <div class="product juice">
                <div class="rotate_oringe">
                    <img src="../assets/image/products/oringe_bgi.png" alt="">
                </div>

                <div class="introduce">
                    <h1><img src="../assets/image/products/ion_leaf-outline3.svg" alt="">水果茶系列</h1>
                    <p>果香十足，清新解渴，水果茶，夏日的綠意悠然。</p>
                </div>

                <div class="product_img">
                    <img src="../assets/image/products/juice.png" alt="">
                </div>

                <ul>
                    <li class="left_list2">
                    </li>
            
                    <li> 
                        <div class="size"> <span class="product_name"></span> <span class="product_price">M</span><span
                                class="product_price">L</span></div>
                        <div class="row no1" v-for="item in drinkList5" :key="item.id"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span
                                class="product_name">{{ item.name }}</span> <span class="product_price ">${{ item.mediumPrice }}</span><span
                                class="product_price">${{ item.largePrice }}</span><button class="add_cart" @click="addToCart(item)"><i
                                    class="fa-solid fa-cart-shopping"></i></button></div>
                        <!-- <div class="row no2"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span
                                class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span
                                class="product_price">$35</span><button class="add_cart"><i
                                    class="fa-solid fa-cart-shopping"></i></button></div>
                        <div class="row no3"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span
                                class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span
                                class="product_price">$35</span><button class="add_cart"><i
                                    class="fa-solid fa-cart-shopping"></i></button></div>
                        <div class="row no4"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span
                                class="product_name">高山烏龍茶勒</span> <span class="product_price ">$30</span><span
                                class="product_price">$35</span><button class="add_cart"><i
                                    class="fa-solid fa-cart-shopping"></i></button></div> -->
                    </li>
                </ul>
            </div>
            
            <!---- 咖啡系列 ---->
            <div class="product coffee">
                
                <div class="coffee_bean">
                    <img class="coffee_bean1" src="../assets/image/products/coffee_beans.svg" alt="">
                    <img class="coffee_bean2" src="../assets/image/products/coffee_beans.svg" alt="">
                    <img class="coffee_bean3" src="../assets/image/products/coffee_beans.svg" alt="">
                </div>

                <div class="introduce">
                    <h1><img src="../assets/image/products/ion_leaf-outline3.svg" alt="">咖啡系列</h1>
                    <p>香濃咖啡，醒神提神，每杯都是品味的享受。</p>
                </div>

                <div class="product_img">
                    <img src="../assets/image/products/coffee.png" alt="">
                </div>
                
                <ul>
                    <li> 
                        <div class="size"> <span class="product_name"></span> <span class="product_price">M</span><span
                                class="product_price">L</span></div>
                        <div class="row no1" v-for="item in drinkList6" :key="item.id"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span
                                class="product_name">{{ item.name }}</span> <span class="product_price ">${{ item.mediumPrice }}</span><span
                                class="product_price">${{ item.largePrice }}</span><button class="add_cart" @click="addToCart(item)"><i
                                    class="fa-solid fa-cart-shopping"></i></button></div>
                        <!-- <div class="row no2"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span
                                class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span
                                class="product_price">$35</span><button class="add_cart"><i
                                    class="fa-solid fa-cart-shopping"></i></button></div>
                        <div class="row no3"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span
                                class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span
                                class="product_price">$35</span><button class="add_cart"><i
                                    class="fa-solid fa-cart-shopping"></i></button></div>
                        <div class="row no4"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span
                                class="product_name">高山烏龍茶勒</span> <span class="product_price ">$30</span><span
                                class="product_price">$35</span><button class="add_cart"><i
                                    class="fa-solid fa-cart-shopping"></i></button></div> -->
                    </li>

                    <li class="left_list2">
                    </li>
                </ul>
            </div>
            
            <!---- 冰沙系列 ---->
            <div class="product smoothies">

                <div class="ice">
                    <img src="../assets/image/products/ice.svg" alt="">
                </div>

                <div class="introduce">
                    <h1><img src="../assets/image/products/ion_leaf-outline3.svg" alt="">冰沙系列</h1>
                    <p>多種水果結合，口感豐富，每一口都是夏日的清涼享受。</p>
                </div>

                <div class="product_img">
                    <img src="../assets/image/products/Smoothies.png" alt="">
                </div>

                <ul>
                    <li class="left_list2">
                    </li>
            
                    <li>
                        <div class="size"> <span class="product_name"></span> <span class="product_price">M</span><span
                                class="product_price">L</span></div>
                        <div class="row no1" v-for="item in drinkList7" :key="item.id"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span
                                class="product_name">{{ item.name }}</span> <span class="product_price ">${{ item.mediumPrice }}</span><span
                                class="product_price">${{ item.largePrice }}</span><button class="add_cart" @click="addToCart(item)"><i
                                    class="fa-solid fa-cart-shopping"></i></button></div>
                        <!-- <div class="row no2"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span
                                class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span
                                class="product_price">$35</span><button class="add_cart"><i
                                    class="fa-solid fa-cart-shopping"></i></button></div>
                        <div class="row no3"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span
                                class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span
                                class="product_price">$35</span><button class="add_cart"><i
                                    class="fa-solid fa-cart-shopping"></i></button></div>
                        <div class="row no4"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span
                                class="product_name">高山烏龍茶勒</span> <span class="product_price ">$30</span><span
                                class="product_price">$35</span><button class="add_cart"><i
                                    class="fa-solid fa-cart-shopping"></i></button></div> -->
                    </li>
                </ul>
            </div>



     </div>     
    </div>



<!------ 購物車------>
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
<!-- <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script> -->
<script>
export default {
    
    data (){
        return{
            drinkList1: [
                {
                    id: 1,
                    name: '高山烏龍',
                    num: 1,
                    mediumPrice: 30,
                    largePrice: 35
                },
                {
                    id: 2,
                    name: '龍井綠茶',
                    num: 1,
                    mediumPrice: 30,
                    largePrice: 35
                },
                {
                    id: 3,
                    name: '武夷岩茶',
                    num: 1,
                    mediumPrice: 30,
                    largePrice: 35
                },
                {
                    id: 4,
                    name: '茉莉花茶',
                    num: 1,
                    mediumPrice: 30,
                    largePrice: 35
                }
            ],
            drinkList2: [
                {
                    id: 5,
                    name: '日月潭紅茶',
                    num: 1,
                    mediumPrice: 30,
                    largePrice: 35
                },
                {
                    id: 6,
                    name: '特級鐵觀音',
                    num: 1,
                    mediumPrice: 30,
                    largePrice: 35
                },
                {
                    id: 7,
                    name: '金萱烏龍茶',
                    num: 1,
                    mediumPrice: 30,
                    largePrice: 35
                },
                {
                    id: 8,
                    name: '白牡丹白茶',
                    num: 1,
                    mediumPrice: 30,
                    largePrice: 35
                }
            ],
            drinkList3: [
                {
                    id: 9,
                    name: '珍珠奶茶',
                    num: 1,
                    mediumPrice: 50,
                    largePrice: 55
                },
                {
                    id: 10,
                    name: '香濃奶茶',
                    num: 1,
                    mediumPrice: 50,
                    largePrice: 55
                },
                {
                    id: 11,
                    name: '抹茶拿鐵',
                    num: 1,
                    mediumPrice: 50,
                    largePrice: 55
                },
                {
                    id: 12,
                    name: '黑糖奶茶',
                    num: 1,
                    mediumPrice: 50,
                    largePrice: 55
                },
                
            ],
            drinkList4: [
                {
                    id: 13,
                    name: '烘烏龍奶茶',
                    num: 1,
                    mediumPrice: 55,
                    largePrice: 60
                },
                {
                    id: 14,
                    name: '輕烏龍鮮奶',
                    num: 1,
                    mediumPrice: 55,
                    largePrice: 60
                },
                {
                    id: 15,
                    name: '雙Q鮮奶茶',
                    num: 1,
                    mediumPrice: 60,
                    largePrice: 65
                },
                {
                    id: 16,
                    name: '巧克力奶昔',
                    num: 1,
                    mediumPrice: 60,
                    largePrice: 65
                },
                
            ],
            drinkList5: [
                {
                    id: 17,
                    name: '橙香柚子茶',
                    num: 1,
                    mediumPrice: 60,
                    largePrice: 65
                },
                {
                    id: 18,
                    name: '楊枝甘露',
                    num: 1,
                    mediumPrice: 60,
                    largePrice: 65
                },
                {
                    id: 19,
                    name: '西瓜蜜桃茶',
                    num: 1,
                    mediumPrice: 65,
                    largePrice: 70
                },
                {
                    id: 20,
                    name: '荔枝莓果茶',
                    num: 1,
                    mediumPrice: 65,
                    largePrice: 70
                },
                
            ],
            drinkList6: [
                {
                    id: 21,
                    name: '原豆美式',
                    num: 1,
                    mediumPrice: 60,
                    largePrice: 65
                },
                {
                    id: 22,
                    name: '經典拿鐵',
                    num: 1,
                    mediumPrice: 60,
                    largePrice: 65
                },
                {
                    id: 23,
                    name: '卡布奇諾',
                    num: 1,
                    mediumPrice: 65,
                    largePrice: 70
                },
                {
                    id: 24,
                    name: '巧克力摩卡',
                    num: 1,
                    mediumPrice: 65,
                    largePrice: 70
                },
                
            ],
            drinkList7: [
                {
                    id: 25,
                    name: '鳳梨冰沙',
                    num: 1,
                    mediumPrice: 70,
                    largePrice: 75
                },
                {
                    id: 26,
                    name: '奇異果冰沙',
                    num: 1,
                    mediumPrice: 70,
                    largePrice: 75
                },
                {
                    id: 27,
                    name: '檸檬蜜桃冰沙',
                    num: 1,
                    mediumPrice: 70,
                    largePrice: 75
                },
                {
                    id: 28,
                    name: '青蘋薄荷冰沙',
                    num: 1,
                    mediumPrice: 70,
                    largePrice: 75
                },
                
            ],
            cart: []
        }
    },
   
    beforeMount(){
        let cart = JSON.parse(localStorage.getItem("cart"))
        if(cart){
            this.cart = cart
        }
    },
    methods:{
        toggleSlide() {
        
        const slide = document.querySelector('.card_slide');
        slide.classList.toggle("on");
        const headerMobileBg = document.querySelector('.cart_slide_bg');
        headerMobileBg.classList.toggle('cart_slide_bg_on');
      },
        addToCart(item) {
        // console.log(item);
        let item2 = JSON.parse(JSON.stringify(item));
        item2.key_id = Date.now();
        this.cart.push(item2);

        localStorage.setItem("cart", JSON.stringify(this.cart));
      },
        del(index) {
          this.cart.splice(index, 1)
          localStorage.setItem("cart", JSON.stringify(this.cart));
        },
        clearAll(){
          this.cart = []
          localStorage.setItem("cart", JSON.stringify(this.cart));
        },
        goToPay(){
          location.href = "/cart";
            const headerMobileBg = document.querySelector('.cart_slide_bg');
            headerMobileBg.classList.remove('cart_slide_bg_on');
        }
    }
}
</script>
<style lang="scss" scoped>
//   @import"../assets/sass/style.scss";
</style>