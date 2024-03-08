
<script setup>
  import {ref} from "vue";
  import { useRouter } from "vue-router";
  import memberBtn from "../components/member_btn.vue";
   const overlayVisible = ref(false);
   const selectedOrder = ref(null);
    const orders = ref([
      { id: 1, time: '2024-01-15 10:30', details: '展開', price: '125元', status: '完成', orderDetails: { name: '紅茶拿鐵', quantity: 1, extras: '無', sweetness: '微糖', ice: '去冰', total: '60元' } },
      { id: 2, time: '2024-02-16 09:00', details: '展開', price: '65元', status: '完成', orderDetails: { name: '高山烏龍', quantity: 1, extras: '珍珠', sweetness: '無糖', ice: '少冰', total: '60元' }  },
      { id: 3, time: '2024-03-17 11:42', details: '展開', price: '75元', status: '完成', orderDetails: { name: '龍井綠茶', quantity: 1, extras: '椰果', sweetness: '正常糖', ice: '微冰', total: '60元' }  },
      { id: 4, time: '2024-04-18 05:47', details: '展開', price: '70元', status: '完成', orderDetails: { name: '黑糖奶茶', quantity: 1, extras: '仙草', sweetness: '少糖', ice: '微冰', total: '60元' }  },
      { id: 5, time: '2024-05-19 18:30', details: '展開', price: '60元', status: '完成',  orderDetails: { name: '西瓜蜜桃茶', quantity: 1, extras: '無', sweetness: '無糖', ice: '去冰', total: '60元' } },
  
    ]);

    const router = useRouter();
    const logout = async () => {
      try {
        const response = await fetch('php/logout.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
        });

        const data = await response.json();

        if (data.success) {
          localStorage.removeItem('isLoggedIn');
          localStorage.removeItem('userId');
          router.push({ name: 'Login_in' }); 
        } else {
          console.error('Logout failed:', data.message);
        }
      } catch (error) {
        console.error('Logout error:', error);
      }
    };



    const openLightbox = (order) => {
      selectedOrder.value = order;
      overlayVisible.value = true;
    };

    const closeLightbox = () => {
      selectedOrder.value = null;
      overlayVisible.value = false;
    };

    const sortNewest = () => {
      orders.value.sort((a, b) => new Date(b.time) - new Date(a.time));
    };

    const sortOldest = () => {
      orders.value.sort((a, b) => new Date(a.time) - new Date(b.time));
    };

    const sortHighest = () => {
      orders.value.sort((a, b) => parseFloat(b.price.replace('元', '')) - parseFloat(a.price.replace('元', '')));
    };

</script>
<template>
  <div class="order-main">
    <div class="order-title-container">
        <h1 class="order-title">訂單明細</h1>
      </div>
      <div class="order-button-container">
        <button @click="sortNewest">新到舊</button>
        <button @click="sortOldest">舊到新</button>
        <button @click="sortHighest">價格高到低</button>
      </div>
      <div class="table-container" style="overflow-x: auto;">
      <table class="order-table">
          <thead>
            <tr>
              <th>編號</th>
              <th>購買時間</th>
              <th>購買明細</th>
              <th>價格</th>
              <th>狀態</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="order in orders" :key="order.id">
              <td>{{ order.id }}</td>
              <td>{{ order.time }}</td>
              <td><a href="#" @click="() => openLightbox(order)">{{ order.details }}</a></td>
              <td>{{ order.price }}</td>
              <td>{{ order.status }}</td>
              <td><i class="fas fa-shopping-cart"></i><a href="#">再點一次</a></td>
            </tr>
          </tbody>
        </table>
        <!----- 登出按鈕 ----->
      <div class="logout_container">
        <div class="frontend_logout" @click="logout">登出<i class="fa-solid fa-arrow-right-from-bracket"></i></div>
      </div>
    </div>
      
     <div class="order-overlay" v-show="overlayVisible">
        <div class="lightbox-content">
          <span class="close-btn" @click="closeLightbox">×</span>
          <div class="order-item-title">
            <p>訂單商品明細：</p>
          </div>
          <div class="order-name-quantity" v-if="selectedOrder">
            <p>商品名稱：{{ selectedOrder.orderDetails.name }}</p>
            <p>數量：{{ selectedOrder.orderDetails.quantity }}</p>
          </div>
          <br>
          <div class="order-details" v-if="selectedOrder">
            <p>加料：{{ selectedOrder.orderDetails.extras }}</p>
            <p>甜度：{{ selectedOrder.orderDetails.sweetness }}</p>
            <p>冰塊：{{ selectedOrder.orderDetails.ice }}</p>
          </div>
          <br>
          <div class="order-price" v-if="selectedOrder">
            <p>金額總計：{{ selectedOrder.orderDetails.total }}</p>
          </div>
        </div>
      </div>
    </div>
    <memberBtn></memberBtn>
</template>
<style scoped>
html,body {
  width: 100%;
  height: 100%;
  margin: 0px;
  padding: 0px;
  overflow-x: hidden;
}
</style>