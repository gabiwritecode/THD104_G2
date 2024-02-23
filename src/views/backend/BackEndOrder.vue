<template>

  <div class="order">
    <main class="backend-main">
      <nav class="sidebar">
        <div><img src="@/assets/image/logo.svg" alt="logo" width="200"></div>
        <ul class="sidebar-btn-container">
          <li><RouterLink to="#"  class="sidebar-btn" href="#"><i class="fa-regular fa-user"></i>會員管理</RouterLink></li>
          <li><RouterLink to="#"  class="sidebar-btn" href="#"><i class="fa-regular fa-file-lines"></i>訂單管理</RouterLink></li>
          <li><RouterLink to="#"  class="sidebar-btn" href="#"><i class="fa-solid fa-box-archive"></i>商品管理</RouterLink></li>
          <li><RouterLink to="#"  class="sidebar-btn" href="#"><i class="fa-regular fa-message"></i>消息管理</RouterLink></li>
          <li><RouterLink to="#"  class="sidebar-btn" href="#"><i class="fa-regular fa-message"></i>消息分類</RouterLink></li>
          <li><RouterLink to="#"  class="sidebar-btn" href="#"><i class="fa-solid fa-location-dot"></i>門市管理</RouterLink></li>
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
            <tr>
              <td>10001</td>
              <td>123456789@gmail.com</td>
              <td>已付款</td>
              <td>2024-01-21 10:30</td>
              <td>已完成</td>
              <td><button>編輯與查看</button></td>
            </tr>
          </tbody>
          <tbody></tbody>
        </table>
      </div>
  </main>

  </div>

</template>
<style lang="scss" scoped>

body{
padding: 0;
margin: 0;
box-sizing: border-box;

}


</style>