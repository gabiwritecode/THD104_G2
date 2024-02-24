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
        <h1>門市管理</h1>
        <div class="backend-input-container"><input type="text"><button>搜尋</button></div>
        <table class="backend-info-table">
          <thead>
            <tr>
              <th>營業</th>
              <th>縣市</th>
              <th>鄉鎮市區</th>
              <th>店名</th>
              <th>電話</th>
              <th>地址</th>
              <th>營業時間</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>正常</td>
              <td>台北</td>
              <td>南港</td>
              <td>玉成店</td>
              <td>0912456789</td>
              <td>台北市南港區玉成街166巷</td>
              <td>10:00-21:30</td>
              <td><button @click="WindowToggle">編輯與查看</button></td>
            </tr>
          </tbody>
          <tbody></tbody>
        </table>
      </div>        
  </main>
  <div>
          <div class="block2 edit_window_store" >
                        <div class="left">
                            <form action="" class="left_form">
                            <h1 >編輯與查看</h1>
                                <label for="">店名: <input type="text" class="input"></label>
                                <br>
                                <label for="">電話:</label>
                                <input type="text" class="input">
                                <br>
                                <label for="">地址:</label>
                                <input type="text" class="input"><br>
                                <label for="">營業:</label>
                                <select name="" id="">
                                    <option value="正常">正常</option>
                                    <option value="正常">結束</option>
                                </select>
                            </form>
                        </div>
                        
                        <!-- <div class="right">
                            <form action="" class="right_form">
                                <h3>圖片上傳:</h3>
                                <div></div>
                                
                                <label for="image" class="input_image">
                                    <i class="fas fa-upload"></i> 選擇圖片
                                </label>
                                
                                <input type="file" id="image">
                            </form>
                        </div> -->
                        <div class="buttonQQ">
                        <button class="buttonqq" @click="WindowToggle">關閉</button>
                        <button class="buttonqq" @click="WindowToggle">儲存</button>
                        
                    </div> 
           
          </div>
                    
                    
    </div>
     <!-- 灰色背景 -->       
    <div class="edit_window_store_bg" @click="editWindowToggle" ></div>
</template>

<script setup>
import {ref, onMounted} from 'vue';
const editWindowStore = ref(null);
const editWindowStoreBg = ref(null);
onMounted(() => {

  editWindowStore.value = document.querySelector('.edit_window_store');
  editWindowStoreBg.value = document.querySelector('.edit_window_store_bg');
});
const WindowToggle = () => {
  editWindowStore.value.classList.toggle("edit_window_store_on");
  editWindowStoreBg.value.classList.toggle("edit_window_store_on");
};

</script>
<style lang="scss" scoped>
body{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  
}



</style>