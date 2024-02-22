<template>
      <main class="backend-main">
        <nav class="sidebar">
          <div><img src="@/assets/image/logo.svg" alt="logo" width="200"></div>
          <ul class="sidebar-btn-container">
            <li><RouterLink to="#"  class="sidebar-btn" href="#"><i class="fa-regular fa-user"></i>會員管理</RouterLink></li>
            <li><RouterLink to="#"  class="sidebar-btn" href="#"><i class="fa-regular fa-file-lines"></i>訂單管理</RouterLink></li>
            <li><RouterLink to="./BackEndProducts"  class="sidebar-btn" href="#"><i class="fa-solid fa-box-archive"></i>商品管理</RouterLink></li>
            <li><RouterLink to="./backendInfo"  class="sidebar-btn" href="#"><i class="fa-regular fa-message"></i>消息管理</RouterLink></li>
            <li><RouterLink to="#"  class="sidebar-btn" href="#"><i class="fa-regular fa-message"></i>消息分類</RouterLink></li>
            <li><RouterLink to="#"  class="sidebar-btn" href="#"><i class="fa-solid fa-location-dot"></i>門市管理</RouterLink></li>
          </ul>
          <div class="backend-logout"><p>登出<i class="fa-solid fa-arrow-right-from-bracket"></i></p></div>
        </nav>
        <div class="backend-table-container">
          <h1>商品管理</h1>
          <div class="backend-input-container"><input type="text"><button>搜尋</button></div>
          <table class="backend-info-table">
            <thead>
              <tr>
                <th>商品編號</th>
                <th>商品類別 </th>
                <th>商品名稱</th>
                <th>售價</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>茶類</td>
                <td>珍珠奶茶</td>
                <td>50元</td>
                <td><button class="bs_btn" @click="editWindow">編輯與查看</button></td>
              </tr>
            </tbody>
            <tbody></tbody>
          </table>
        </div>
        <!-------- 編輯彈窗 -------->
        <div class="edit_window">
          <div class="container">
            <h2>編輯與查看</h2>
            <div>商品編號: <input type="text"></div>
            <div>商品類別: <input type="text"></div>
            <div>商品名稱: <input type="text"></div>
            <div>商品售價: <input type="text"></div>
            
            <ul class="radio_product">
              商品標籤: 
              <li><input type="radio" id="none" name="tag_product"><label for="none">無</label></li>
              <li><input type="radio" id="new_product" name="tag_product"><label for="new_product">新品上市</label></li>
              <li><input type="radio" id="hot_product" name="tag_product"><label for="hot_product">熱銷商品</label></li>
            </ul>

            <ul class="edit_window_btn">
              <li><button @click="editWindow">關閉</button></li>
              <li><button @click="editWindow">儲存</button></li>
            </ul>
          </div>
        </div>
        <!-- 灰色背景 -->
        <div class="edit_window_bg" @click="editWindow"></div>
    </main>
  
</template>
<script>
  export default{
    data(){
      return {
      }
    },
    methods:{
      editWindow(){
        const editWindow = document.querySelector('.edit_window');
        const editWindowBg = document.querySelector('.edit_window_bg');
        editWindow.classList.toggle("edit_window_on");
        editWindowBg.classList.toggle("edit_window_on");
      }
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

<!-- <style>
 .page-backendProducts header, .page-backendProducts footer{
    display: none;
  }
</style> -->