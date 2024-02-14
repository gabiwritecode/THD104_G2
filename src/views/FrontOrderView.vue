
<template>
  <div class="order-main">
    <div class="order-title-container">
        <h1 class="order-title">訂單明細</h1>
      </div>
      <div class="button-container">
        <button onclick="sortNewest()">新到舊</button>
        <button onclick="sortOldest()">舊到新</button>
        <button onclick="sortHighest()">價格高到低</button>
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
            <tr>
              <td>1</td>
              <td>2024-01-15 10:30</td>
              <td><a href="#" onclick="openLightbox()">展開</a></td>
              <td>65元</td>
              <td>完成</td>
              <td><i class="fas fa-shopping-cart"></i><a href="#">再點一次</a></td>
            </tr>
            <tr>
              <td>2</td>
              <td>2024-01-14 11:30</td>
              <td><a href="#"  onclick="openLightbox()">展開</a></td>
              <td>300元</td>
              <td>完成</td>
              <td><i class="fas fa-shopping-cart"></i><a href="#">再點一次</a></td>
            </tr>
            <tr>
              <td>3</td>
              <td>2024-01-12 12:00</td>
              <td><a href="#"  onclick="openLightbox()">展開</a></td>
              <td>240元</td>
              <td>完成</td>
              <td><i class="fas fa-shopping-cart"></i><a href="#">再點一次</a></td>
            </tr>
            <tr>
              <td>4</td>
              <td>2023-12-15 18:45</td>
              <td><a href="#"  onclick="openLightbox()">展開</a></td>
              <td>85元</td>
              <td>完成</td>
              <td><i class="fas fa-shopping-cart"></i><a href="#">再點一次</a></td>
            </tr>
            <tr>
              <td>5</td>
              <td>2023-08-16 17:10</td>
              <td><a href="#"  onclick="openLightbox()">展開</a></td>
              <td>125元</td>
              <td>完成</td>
              <td><i class="fas fa-shopping-cart"></i><a href="#">再點一次</a></td>
            </tr>
          </tbody>
      </table>
    </div>
      
      <!-- 黑色背景 -->
      <div class="order-overlay" id="overlay">
        <!-- 燈箱 -->
        <div class="lightbox-content">
          <span class="close-btn" onclick="closeLightbox()">×</span>
          <!-- 訂單明細內容 -->
            <div class="order-item-title">
              <p>訂單商品明細：</p>
            </div>
            <div class="order-name-quantity">
              <p>商品名稱：紅茶拿鐵</p>
              <p>數量：1</p>
            </div>
            <div class="order-details">
              <p>加料：無</p>
              <p>甜度：微糖</p>
              <p>冰塊：去冰</p>
            </div>
            <div class="order-price">
              <p>金額總計：60元</p>
            </div>
        </div>
      </div>
  </div>
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