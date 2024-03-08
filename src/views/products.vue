<template>
   <div class="space"></div>
    <main class="products_wrapper">
     <!------------------- banner ------------------->
        <section class="banner">
            <order :appear = 'addToCart'></order>
            <article class="banner_title">
                <!-- <span>BOISSON </span><br><span>MENU</span> -->
                <img class="boisson_menu_text" src="../assets/image/products/BOISSON_MENU.png" alt="">
                <!-- <img src="../assets/image/products/ion_leaf-outline.svg" alt=""> -->
                <p>捌嵩茶飲的經典滋味<img src="../assets/image/products/Line_banner.svg" alt=""></p>
            </article>
            <img class="wave_bgi wave_bgi4" src="@/assets/image/products/wave_bgi-01.png" alt="">
            <img class="wave_bgi wave_bgi3" src="@/assets/image/products/wave_bgi-01.png" alt="">
            <img class="wave_bgi wave_bgi2" src="@/assets/image/products/wave_bgi-01.png" alt="">
            <img class="wave_bgi wave_bgi1" src="@/assets/image/products/wave_bgi-01.png" alt="">
        </section>
        <!---- 圓形動畫、飲料照片 ---->
        <section class="top">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <img src="../assets/image/products/naixi_qubei1.png" alt="">
        </section>
        

        <!---- 背景裝飾曲線 ---->
        <div class="background_img">
            <img class="curve1" src="../assets/image/products/curve_p_1.png" alt="">
            <img class="curve1 curve1m" src="../assets/image/products/curve_p_1m.svg" alt="">
            <!-- <div class="bg_circle1"></div>  -->
            <img class="curve2" src="../assets/image/products/curve_p_2.png" alt="">
           
        </div>
       
        
        <!------------------- products ------------------->

        <!---- 純茶系列 ---->
        <section class="product tea">
            <!---- TAIWAN TEA字 ---->
            <div class="background_text">
                <span>TAIWAN TEA</span>
                <span>捌嵩飲茶，品味悠久的文化底蘊，感受時光與茶的對話。</span>
            </div>

            <ul>
                <li class="product_img">
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
                            <div class="row no1" v-for=" item in drinkList1" :key="item.id"><button class="tag" :class="{'tag_on': item.tagOn}"><i :class="{'fa-solid fa-crown': item.tag === '熱銷', 'fa-solid fa-wine-glass': item.tag === '新品'}"></i> {{ item.tag }}</button><span class="product_name">{{ item.name }}</span> <span class="product_price ">${{ item.mediumPrice }}</span><span class="product_price">${{ item.largePrice }}</span><button class="add_cart" @click="addToCart(item)"><i class="fa-solid fa-cart-shopping"></i></button></div>
                            <!-- <div class="row no2"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>
                            <div class="row no3"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>
                            <div class="row no4"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍茶勒</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>     -->
                        </li>
            
                            <li> 
                                <div class="size"> <span class="product_name"></span> <span class="product_price">M</span><span class="product_price">L</span></div>
                                <div class="row no5" v-for="item in drinkList2" :key="item.id"><button class="tag" :class="{'tag_on': item.tagOn}"><i :class="{'fa-solid fa-crown': item.tag === '熱銷', 'fa-solid fa-wine-glass': item.tag === '新品'}"></i> {{ item.tag }}</button><span class="product_name">{{ item.name }}</span> <span class="product_price ">${{ item.mediumPrice }}</span><span class="product_price">${{ item.largePrice }}</span><button class="add_cart" @click="addToCart(item)"><i class="fa-solid fa-cart-shopping"></i></button></div>
                                <!-- <div class="row no6"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>
                                <div class="row no7"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>
                                <div class="row no8"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍茶勒</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>    -->
                        </li>
                    </ol>
                 
                </li>
            </ul>
        </section>
        
        <!---- 奶茶系列 ---->
        <section class="product milk_tea">
            <ul>
                <li>
                    <div class="introduce"><h1><img src="../assets/image/products/ion_leaf-outline2.svg" alt="">奶茶系列</h1>
                        <p>香滑濃醇，奶香四溢，美味奶茶的經典滋味。</p>
                    </div>
                    <ol>
                        <li class="left_list"> 
                            <div class="size">                                                                 <span class="product_name"></span> <span class="product_price">M</span><span class="product_price">L</span></div>
                            <div class="row no1" v-for="item in drinkList3" :key="item.id"><button class="tag" :class="{'tag_on': item.tagOn}"><i :class="{'fa-solid fa-crown': item.tag === '熱銷', 'fa-solid fa-wine-glass': item.tag === '新品'}"></i> {{ item.tag }}</button><span class="product_name">{{ item.name }}</span> <span class="product_price ">${{ item.mediumPrice }}</span><span class="product_price">${{ item.largePrice }}</span><button class="add_cart" @click="addToCart(item)"><i class="fa-solid fa-cart-shopping"></i></button></div>
                            <!-- <div class="row no2"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>
                            <div class="row no3"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>
                            <div class="row no4"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍茶勒</span> <span class="product_price ">$30</span><span class="product_price">$35</span><button class="add_cart"><i class="fa-solid fa-cart-shopping"></i></button></div>     -->
                        </li>
            
                        <li> 
                             <div class="size">
                                <span class="product_name"></span> <span class="product_price">M</span><span class="product_price">L</span></div>
                            <div class="row no5" v-for="item in drinkList4" :key="item.id"><button class="tag" :class="{'tag_on': item.tagOn}"><i :class="{'fa-solid fa-crown': item.tag === '熱銷', 'fa-solid fa-wine-glass': item.tag === '新品'}"></i> {{ item.tag }}</button><span class="product_name">{{ item.name }}</span> <span class="product_price ">${{ item.mediumPrice }}</span><span class="product_price">${{ item.largePrice }}</span><button class="add_cart" @click="addToCart(item)"><i class="fa-solid fa-cart-shopping"></i></button></div>
                            <!-- <div class="row no6"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span class="product_price">$35</span></div>
                            <div class="row no7"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍</span> <span class="product_price ">$30</span><span class="product_price">$35</span></div>
                            <div class="row no8"><button class="tag"><i class="fa-solid fa-crown"></i>熱銷</button><span class="product_name">高山烏龍茶勒</span> <span class="product_price ">$30</span><span class="product_price">$35</span></div>    -->
                        </li>
                    </ol>
                   </li>
                <li class="product_img">
                    <img src="../assets/image/products/milktea_pic.png" alt="">
                </li>
            </ul>
        </section>
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
            <section class="product juice">
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
                        <div class="row no1" v-for="item in drinkList5" :key="item.id"><button class="tag" :class="{'tag_on': item.tagOn}"><i :class="{'fa-solid fa-crown': item.tag === '熱銷', 'fa-solid fa-wine-glass': item.tag === '新品'}"></i> {{ item.tag }}</button><span
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
            </section>
            
            <!---- 咖啡系列 ---->
            <section class="product coffee">
                
                <div class="coffee_bean">
                    <img class="coffee_bean1" src="../assets/image/products/coffee_beans.svg" alt="">
                    <img class="coffee_bean2" src="../assets/image/products/coffee_beans.svg" alt="">
                    <img class="coffee_bean3" src="../assets/image/products/coffee_beans3.svg" alt="">
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
                        <div class="row no1" v-for="item in drinkList6" :key="item.id"><button class="tag" :class="{'tag_on': item.tagOn}"><i :class="{'fa-solid fa-crown': item.tag === '熱銷', 'fa-solid fa-wine-glass': item.tag === '新品'}"></i> {{ item.tag }}</button><span
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
            </section>
            
            <!---- 冰沙系列 ---->
            <section class="product smoothies">

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
                        <div class="row no1" v-for="item in drinkList7" :key="item.id"><button class="tag" :class="{'tag_on': item.tagOn}"><i :class="{'fa-solid fa-crown': item.tag === '熱銷', 'fa-solid fa-wine-glass': item.tag === '新品'}"></i> {{ item.tag }}</button><span
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
            </section>



     </div>     
    </main>



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
                    <li><img src="../assets/image/pic/icon/cartlist_logo.png" alt="" class="drink_logo"></li>
                    <div class="product_r">
                        <h3>{{item.name}}</h3>
                        <div class="inner">
                            <div class="select">
                                <select name="" id="size" class="size" v-model="item.size" @change="isSelected(item)">
                                    <option value="大小">大小</option>
                                    <option value="中杯">M</option>
                                    <option value="大杯">L</option>
                                </select>
                                <span>*</span>
                                <select name="" id="sweet" class="sweet" v-model="item.sugar" @change="isSelected(item)">
                                    <option value="甜度">甜度</option>
                                    <option value="全糖">全糖</option>
                                    <option value="少糖">少糖</option>
                                    <option value="半糖">半糖</option>
                                    <option value="微糖">微糖</option>
                                    <option value="無糖">無糖</option>
                                </select>
                                <span>*</span> <br>
                                <select name="" id="ice" class="ice" v-model="item.ice" @change="isSelected(item)">
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
<!-- <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script> -->

<script>
import order from "../components/order_success.vue"
export default {
  components:{order},
    data (){
        return{
        
            lightbox: false,
            drinkList1: [
                {
                    id: 1,
                    name: '高山烏龍',
                    num: 1,
                    mediumPrice: 30,
                    largePrice: 35,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: true,
                    
                },
                {
                    id: 2,
                    name: '龍井綠茶',
                    num: 1,
                    mediumPrice: 30,
                    largePrice: 35,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                    
                },
                {
                    id: 3,
                    name: '武夷岩茶',
                    num: 1,
                    mediumPrice: 30,
                    largePrice: 35,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                },
                {
                    id: 4,
                    name: '茉莉花茶',
                    num: 1,
                    mediumPrice: 30,
                    largePrice: 35,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                }

            ],
            drinkList2: [
                {
                    id: 5,
                    name: '日月潭紅茶',
                    num: 1,
                    mediumPrice: 30,
                    largePrice: 35,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                },
                {
                    id: 6,
                    name: '特級鐵觀音',
                    num: 1,
                    mediumPrice: 30,
                    largePrice: 35,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '新品',
                    tagOn: true,
                },
                {
                    id: 7,
                    name: '金萱烏龍茶',
                    num: 1,
                    mediumPrice: 30,
                    largePrice: 35,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                },
                {
                    id: 8,
                    name: '白牡丹白茶',
                    num: 1,
                    mediumPrice: 30,
                    largePrice: 35,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                }
            ],
            drinkList3: [
                {
                    id: 9,
                    name: '珍珠奶茶',
                    num: 1,
                    mediumPrice: 50,
                    largePrice: 55,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: true,
                },
                {
                    id: 10,
                    name: '香濃奶茶',
                    num: 1,
                    mediumPrice: 50,
                    largePrice: 55,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                },
                {
                    id: 11,
                    name: '抹茶拿鐵',
                    num: 1,
                    mediumPrice: 50,
                    largePrice: 55,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                },
                {
                    id: 12,
                    name: '黑糖奶茶',
                    num: 1,
                    mediumPrice: 50,
                    largePrice: 55,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                },
                
            ],
            drinkList4: [
                {
                    id: 13,
                    name: '烘烏龍奶茶',
                    num: 1,
                    mediumPrice: 55,
                    largePrice: 60,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                },
                {
                    id: 14,
                    name: '輕烏龍鮮奶',
                    num: 1,
                    mediumPrice: 55,
                    largePrice: 60,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                },
                {
                    id: 15,
                    name: '雙Q鮮奶茶',
                    num: 1,
                    mediumPrice: 60,
                    largePrice: 65,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                },
                {
                    id: 16,
                    name: '巧克力奶昔',
                    num: 1,
                    mediumPrice: 60,
                    largePrice: 65,
                    size:'大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: true,
                },
                
            ],
            drinkList5: [
                {
                    id: 17,
                    name: '橙香柚子茶',
                    num: 1,
                    mediumPrice: 60,
                    largePrice: 65,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: true,
                },
                {
                    id: 18,
                    name: '楊枝甘露',
                    num: 1,
                    mediumPrice: 60,
                    largePrice: 65,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: true,
                },
                {
                    id: 19,
                    name: '西瓜蜜桃茶',
                    num: 1,
                    mediumPrice: 65,
                    largePrice: 70,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                },
                {
                    id: 20,
                    name: '荔枝莓果茶',
                    num: 1,
                    mediumPrice: 65,
                    largePrice: 70,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                },
                
            ],
            drinkList6: [
                {
                    id: 21,
                    name: '原豆美式',
                    num: 1,
                    mediumPrice: 60,
                    largePrice: 65,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                },
                {
                    id: 22,
                    name: '經典拿鐵',
                    num: 1,
                    mediumPrice: 60,
                    largePrice: 65,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                },
                {
                    id: 23,
                    name: '卡布奇諾',
                    num: 1,
                    mediumPrice: 65,
                    largePrice: 70,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                },
                {
                    id: 24,
                    name: '巧克力摩卡',
                    num: 1,
                    mediumPrice: 65,
                    largePrice: 70,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '新品',
                    tagOn: true,
                },
                
            ],
            drinkList7: [
                {
                    id: 25,
                    name: '鳳梨冰沙',
                    num: 1,
                    mediumPrice: 70,
                    largePrice: 75,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '新品',
                    tagOn: true,
                },
                {
                    id: 26,
                    name: '奇異果冰沙',
                    num: 1,
                    mediumPrice: 70,
                    largePrice: 75,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: true,
                },
                {
                    id: 27,
                    name: '檸檬蜜桃冰沙',
                    num: 1,
                    mediumPrice: 70,
                    largePrice: 75,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
                },
                {
                    id: 28,
                    name: '青蘋薄荷冰沙',
                    num: 1,
                    mediumPrice: 70,
                    largePrice: 75,
                    size:['大小','中杯','大杯'],  
                    size: '大小',
                    sugar:['甜度','全糖','少糖','半糖','微糖','無糖'],
                    sugar:'甜度',
                    ice:['冰塊','正常','少冰','微冰','去冰'],
                    ice: '冰塊',
                    add:['加料','仙草','愛玉','珍珠','椰果'],
                    add: '加料',
                    addPrice: 0,
                    isSelected: false,
                    tag: '熱銷',
                    tagOn: false,
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
        isSelected(item){
            if(item.size !== '大小' && item.sugar !== '甜度' && item.ice !== '冰塊'){
                item.isSelected = true
            }else{
                item.isSelected = false
            }


            localStorage.setItem("cart", JSON.stringify(this.cart));
        },
        
        goToPay(){
            
            let isSelectAll = true
            let size = document.querySelectorAll('#size')
            let sweet = document.querySelectorAll('#sweet')
            let ice = document.querySelectorAll('#ice')
            for(let i = 0; i < this.cart.length; i++){
                if(!this.cart[i].isSelected){
                    isSelectAll = false
                }
           }

           if(isSelectAll){
                location.href = '#/cart'
           }else{
                this.lightbox = true
                // console.log(size);
                for(let s = 0; s < size.length; s++){
                        if(this.cart[s].size == '大小'){
                            
                            size[s].style.borderColor = 'red'
                        }else{
                            size[s].style.borderColor = '#6996A0'
                        }
                };

                // console.log(sweet);
                for(let w = 0; w < sweet.length; w++){
                    if(this.cart[w].sugar == '甜度'){
                        sweet[w].style.borderColor = 'red'
                    }else{
                        sweet[w].style.borderColor = '#6996A0'
                    }
                }

                for(let i = 0; i < ice.length; i++){
                    if(this.cart[i].ice == '冰塊'){
                        ice[i].style.borderColor = 'red'
                    }else{
                        ice[i].style.borderColor = '#6996A0'
                    }
                }


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