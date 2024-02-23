<script setup>

</script>
<template>
      <main class="backend-main">
        <nav class="sidebar">
          <div><img src="@/assets/image/logo.svg" alt="logo" width="200"></div>
          <ul class="sidebar-btn-container">
            <li><RouterLink to="#"  class="sidebar-btn" href="#"><i class="fa-regular fa-user"></i>會員管理</RouterLink></li>
            <li><RouterLink to="./backendOrder"  class="sidebar-btn" href="#"><i class="fa-regular fa-file-lines"></i>訂單管理</RouterLink></li>
            <li><RouterLink to="./backendProducts"  class="sidebar-btn" href="#"><i class="fa-solid fa-box-archive"></i>商品管理</RouterLink></li>
            <li><RouterLink to="./backendInfo"  class="sidebar-btn" href="#"><i class="fa-regular fa-message"></i>消息管理</RouterLink></li>
            <li><RouterLink to="#"  class="sidebar-btn" href="#"><i class="fa-regular fa-message"></i>消息分類</RouterLink></li>
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
                <th>分類名稱</th>
                <th>編輯</th>
                <th>刪除</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>活動情報</td>
                <td><button @click="editWindowToggle">編輯</button></td>
                <td><button>刪除</button></td>
              </tr>
            </tbody>
            <tbody></tbody>
          </table>
        </div>
              <!-------- 編輯彈窗 -------->
              <div class="edit_window">
          <div class="container">
            <h2>編輯</h2>
            <ul>
              <li><span>分類名稱: </span><input type="text"></li>
              <li><span>敘述: </span><textarea></textarea></li>
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


</style>