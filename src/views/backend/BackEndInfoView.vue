<template>
      <main class="backend-main">
        <nav class="sidebar">
          <div><img src="@/assets/image/logo.svg" alt="logo" width="200"></div>
          <ul class="sidebar-btn-container">
            <li><RouterLink to="./BackEndMember"  class="sidebar-btn" href="#"><i class="fa-regular fa-user"></i>會員管理</RouterLink></li>
            <li><RouterLink to="./backendOrder"  class="sidebar-btn" href="#"><i class="fa-regular fa-file-lines"></i>訂單管理</RouterLink></li>
            <li><RouterLink to="./backendProducts"  class="sidebar-btn" href="#"><i class="fa-solid fa-box-archive"></i>商品管理</RouterLink></li>
            <li><RouterLink to="./backendInfo"  class="sidebar-btn" href="#"><i class="fa-regular fa-message"></i>消息管理</RouterLink></li>
            <li><RouterLink to="./backendCategories"  class="sidebar-btn" href="#"><i class="fa-regular fa-message"></i>消息分類</RouterLink></li>
            <li><RouterLink to="./BackEndStore"  class="sidebar-btn" href="#"><i class="fa-solid fa-location-dot"></i>門市管理</RouterLink></li>
          </ul>
          <div class="backend-logout"><p>登出<i class="fa-solid fa-arrow-right-from-bracket"></i></p></div>
        </nav>
        <div class="backend-table-container">
          <h1>消息管理</h1>
          <div class="backend-input-container"><input type="text"><button>搜尋</button></div>
          <table class="backend-info-table">
            <thead>
              <tr>
                <th>文章編號</th>
                <th>上架日期</th>
                <th>文章分類</th>
                <th>上下架</th>
                <th>標題</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>2024-02-01</td>
                <td>商品資訊</td>
                <td>上架</td>
                <td>冰沙系列即將上市</td>
                <td><button @click="editWindowToggle">編輯與查看</button></td>
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
              <li><span>文章分類: </span>
                <select>
                  <option>最新商品</option>
                  <option>一般商品</option>
                  <option>海外門市</option>
                  <option>本土門市</option>
              </select><div class="select-span"></div> <span>上下架: </span>  
                <select>
                  <option>上架</option>
                  <option>下架</option>
              </select></li>
              <li></li>
              <li><span>主標題: </span><input type="text"></li>
              <li><span>副標題: </span><input type="text"></li>
              <li><span>內文: </span><textarea></textarea></li>
            </ul>
            
            <ul class="info-img">
              <li><button class="img-button">上傳圖片: </button></li>
            </ul>

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
import {ref, onMounted} from 'vue';
const editWindow = ref(null);
const editWindowBg = ref(null);
onMounted(() => {

  editWindow.value = document.querySelector('.edit_window');
  editWindowBg.value = document.querySelector('.edit_window_bg');
});
const editWindowToggle = () => {
  editWindow.value.classList.toggle("edit_window_on");
  editWindowBg.value.classList.toggle("edit_window_on");
};

</script>
<style lang="scss" scoped>

  body{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    
  }
  .edit_window{
    height: 680px;
  }
  .edit_window select{
    width: 100px;
  }
  .edit_window .select-span{
    width: 85px;
  }
  .edit_window .container li:first-child{
    margin-bottom: 10px;
  }
</style>