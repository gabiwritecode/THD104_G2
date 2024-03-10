<template>

    <main class="backend-main">
      <nav class="sidebar">
        <div><img src="@/assets/image/logo.svg" alt="logo" width="200"></div>
        <ul class="sidebar-btn-container">
          <li><RouterLink to="./BackEndMember"  class="sidebar-btn" href="#"><i class="fa-regular fa-user"></i>會員管理</RouterLink></li>
          <li><RouterLink to="./backendOrder"  class="sidebar-btn" href="#"><i class="fa-regular fa-file-lines"></i>訂單管理</RouterLink></li>
          <li><RouterLink to="./BackEndProducts"  class="sidebar-btn" href="#"><i class="fa-solid fa-box-archive"></i>商品管理</RouterLink></li>
          <li><RouterLink to="./backendInfo"  class="sidebar-btn" href="#"><i class="fa-regular fa-message"></i>消息管理</RouterLink></li>
          <li><RouterLink to="./backendCategories"  class="sidebar-btn" href="#"><i class="fa-regular fa-message"></i>消息分類</RouterLink></li>
          <li><RouterLink to="./BackEndStore"  class="sidebar-btn" href="#"><i class="fa-solid fa-location-dot"></i>門市管理</RouterLink></li>
        </ul>
        <div class="backend-logout"><p>登出<i class="fa-solid fa-arrow-right-from-bracket"></i></p></div>
      </nav>
      <div class="backend-table-container">
        <h1>訂單管理</h1>
        <div class="backend-input-container"><input type="text" placeholder="訂單編號查詢"><button>搜尋</button></div>
        <table class="backend-info-table">
          <thead>
            <tr>
              <th>訂單編號</th>
              <th>會員帳號</th>
              <th>付款狀態</th>
              <th>訂購日期</th>
              <th>訂單狀態</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(order,index) in OrderData" :key="order.ORDER_ID">
              <td>{{ index+1 }}</td>
              <td>{{ order['E-MAIL']}}</td>
              <td>已付款</td>
              <td>{{order.ORDER_TIME}}</td>
              <td>已完成</td>
              <td><button @click="editWindowToggle(order)">編輯與查看</button></td>
            </tr>
          </tbody>
          <tbody></tbody>
        </table>
      </div>


      <!-------- 編輯彈窗 -------->
      
        <div class="edit_window">
          <div class="container">
            <h2>編輯與查看</h2>
            <ul>
              <li><h3>訂單編號: {{ OrderInner.orderId }}</h3></li>
              <li><h3 class="account">會員帳號: {{ OrderInner.email }}</h3></li>
            </ul>
            <ul>
              <li><h3>會員姓名: {{ OrderInner.name }}</h3></li>
              <li><h3 class="orderTime">訂購時間: {{ OrderInner.orderTime }}</h3></li>
            </ul>
            <ul>
              <li><h3>訂購地址: {{ OrderInner.address }}</h3></li>
              <li class="icon"><img src="../../assets/image/pic/icon/change.svg" alt="">修改</li>
            </ul>
            <ul class="phone">
              <li><h3>聯絡電話: {{OrderInner.phone}}</h3></li>
              <li class="icon"><img src="../../assets/image/pic/icon/change.svg" alt="">修改</li>
            </ul>
            <ul class="statement">
              <li class="pay_statement"><h3>付款狀態:</h3></li>
              <select name="" id="">
                <option value="">已付款</option>
                <option value="">未付款</option>
              </select>
            </ul>
            
            <div class="order_table">
              <h3>訂單商品明細:</h3>
              <div class="order_list">
                <ul>
                  <li><h3>商品名稱: {{OrderDetail.product_name }}-{{ OrderDetail.size }}</h3></li>
                  <li><h3>數量: {{ OrderDetail.num}}</h3></li>
                </ul>
                <h4>加料: {{ OrderDetail.add }}</h4>
                <h4>甜度: {{ OrderDetail.sugar }}</h4>
                <h4>冰塊: {{ OrderDetail.ice }}</h4>

              </div>
            </div>
            <h4 class="total">金額總計: 60元</h4>


            <ul class="edit_window_btn">
              <li><button @click="editWindowToggle">關閉</button></li>
              <li><button @click="editWindowToggle">儲存</button></li>
            </ul>
          </div>
    </div>
    <!-- 灰色背景 -->
    <div class="edit_window_bg" @click="editWindowToggle"></div>
     
    
  </main>


</template>


<script setup>
  import { ref, onMounted } from 'vue';
  const editWindow = ref(null);
  const editWindowBg = ref(null);


  const OrderData = ref([]);
  const OrderInner = ref({
    orderId: '',
    email: '',
    name: '',
    orderTime: '',
    address: '',
    phone: '',
  });
  const OrderDetail = ref({
    product_name: '',
    size: '',
    num: '',
    add: '',
    sugar: '',
    ice: ''

  })
  onMounted(() => {

    fetchOrderData();
    editWindow.value = document.querySelector('.edit_window');
    editWindowBg.value = document.querySelector('.edit_window_bg');
    // OrderData.find(())

    
  });

  const fetchOrderData = async()=>{
    try{
      const response = await fetch('php/order_info.php');
      const data = await response.json();
      OrderData.value = data;
    } catch (error){
      console.error('Error fetching data:', error)
    }
  };

  const editWindowToggle = (order) => {
    populateEditForm(order);
    detail(order);
    editWindow.value.classList.toggle("edit_window_on");
    editWindowBg.value.classList.toggle("edit_window_on");
  };

  const populateEditForm = (order) =>{ if (order) {
    // console.log(order); 
    OrderInner.value.orderId = order.ORDER_ID;
    OrderInner.value.email = order['E-MAIL'];
    OrderInner.value.name = order.NAME;
    OrderInner.value.orderTime = order.ORDER_TIME;
    OrderInner.value.address = order.ADDRESS;
    OrderInner.value.phone = order.PHONE;
  }
  }
  const detail = (order) =>{ if (order) {
    // console.log(order); 
    OrderDetail.value.product_name = order.PRODUCT_NAME;
    OrderDetail.value.size = order.SIZE;
    OrderDetail.value.num = order.QUANTITY;
    OrderDetail.value.add = order.TOPPINGS;
    OrderDetail.value.sugar = order.SUGAR_LEVEL;
    OrderDetail.value.ice = order.ICE_LEVEL;
  }
}
</script>
<style lang="scss" scoped>

body{
padding: 0;
margin: 0;
box-sizing: border-box;

}


</style>