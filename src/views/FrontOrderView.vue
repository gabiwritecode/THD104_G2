
<script setup>
import { ref, onMounted } from "vue";
import { useRouter } from "vue-router";
import memberBtn from "../components/member_btn.vue";

const overlayVisible = ref(false);
const selectedOrder = ref(null);
const orders = ref([]);
const cart = ref([]);
const drinklist = ref([
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
    },
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
  },
  {id: 9,
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

    const reorder = (order) => {
      const drinkToReorder = drinklist.value.find((drink) => drink.name === order.PRODUCT_NAME);

      if (drinkToReorder) {
        const duplicatedDrink = JSON.parse(JSON.stringify(drinkToReorder));
        duplicatedDrink.num = 1;
        cart.value.push(duplicatedDrink);
        localStorage.setItem('cart', JSON.stringify(cart.value));
      }
      location.reload();
};


    const openLightbox = (order) => {
      selectedOrder.value = order;
      overlayVisible.value = true;
    };

    const closeLightbox = () => {
      selectedOrder.value = null;
      overlayVisible.value = false;
    };
    const getSizeBasedPrice = (order) => {
        const size = order.SIZE;


        if (size === 'M') {
          return order.MEDIUM_PRICE;
        } else if (size === 'L') {
          return order.LARGE_PRICE;
        } else {
          return 'Unknown Size'; 
        }
      };
      const calculateTotal = (order) => {
      return (parseFloat(getSizeBasedPrice(order)) * order.QUANTITY) + '元';
};
const sortOrders = (criteria) => {
  switch (criteria) {
    case 'newest':
      orders.value.sort((a, b) => new Date(b.ORDER_TIME) - new Date(a.ORDER_TIME));
      break;
    case 'oldest':
      orders.value.sort((a, b) => new Date(a.ORDER_TIME) - new Date(b.ORDER_TIME));
      break;
    case 'highest':
      orders.value.sort((a, b) => {
        const priceA = parseFloat(getSizeBasedPrice(a));
        const priceB = parseFloat(getSizeBasedPrice(b));
        return priceB - priceA;
      });
      break;
    default:
      break;
  }
};

    onMounted(async () => {
  try {
    const userId = localStorage.getItem('userId');
    const response = await fetch('php/orders.php');
    const data = await response.json();
    orders.value = data.filter(order => order.MEMBER_ID == userId);
  } catch (error) {
    console.error('Error fetching orders:', error);
  }
});
</script>
<template>
  <div class="order-main">
    <div class="order-title-container">
        <h1 class="order-title">訂單明細</h1>
      </div>
      <div class="order-button-container">
        <button @click="() => sortOrders('newest')">新到舊</button>
        <button @click="() => sortOrders('oldest')">舊到新</button>
        <button @click="() => sortOrders('highest')">價格高到低</button>
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
            <tr v-for="order in orders" :key="order.ID">
              <td>{{ order.ID }}</td>
              <td>{{ order.ORDER_TIME }}</td>
              <td @click="() => openLightbox(order)" class="order-detail-toggle">{{ order.PRODUCT_NAME }}</td>
              <td>{{ calculateTotal(order) }}</td>
              <td>完成</td>
              <td @click="() => reorder(order)" class="order-detail-toggle"><i class="fas fa-shopping-cart"></i>再點一次</td>
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
            <p>商品名稱：{{ selectedOrder.PRODUCT_NAME }}</p>
            <p>數量：{{ selectedOrder.QUANTITY }}</p>
          </div>
          <br>
          <div class="order-details" v-if="selectedOrder">
            <p>加料：{{ selectedOrder.TOPPINGS }}</p>
            <p>甜度：{{ selectedOrder.SUGAR_LEVEL }}</p>
            <p>冰塊：{{ selectedOrder.ICE_LEVEL }}</p>
          </div>
          <br>
          <div class="order-price" v-if="selectedOrder">
            <p>金額總計：{{  calculateTotal(selectedOrder)}}</p>
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