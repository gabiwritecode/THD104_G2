<template>
    <main class="backend-main">
          <nav class="sidebar">
            <div><img src="@/assets/image/logo.svg" alt="logo" width="200"></div>
            <ul class="sidebar-btn-container">
              <li><RouterLink to="#"  class="sidebar-btn" href="#"><i class="fa-regular fa-user"></i>會員管理</RouterLink></li>
              <li><RouterLink to="./backendOrder"  class="sidebar-btn" href="#"><i class="fa-regular fa-file-lines"></i>訂單管理</RouterLink></li>
              <li><RouterLink to="./BackEndProducts"  class="sidebar-btn" href="#"><i class="fa-solid fa-box-archive"></i>商品管理</RouterLink></li>
              <li><RouterLink to="./backendInfo"  class="sidebar-btn" href="#"><i class="fa-regular fa-message"></i>消息管理</RouterLink></li>
              <li><RouterLink to="./backendCategories"  class="sidebar-btn" href="#"><i class="fa-regular fa-message"></i>消息分類</RouterLink></li>
              <li><RouterLink to="./BackEndStore"  class="sidebar-btn" href="#"><i class="fa-solid fa-location-dot"></i>門市管理</RouterLink></li>
            </ul>
            <div class="backend-logout"><p>登出<i class="fa-solid fa-arrow-right-from-bracket"></i></p></div>
          </nav>
          <div class="backend-table-container">
            <h1>會員管理</h1>
            <div class="backend-input-container"><input type="text"><button>搜尋</button></div>
            <table class="backend-info-table">
              <thead>
                <tr>
                  <th>會員編號</th>
                  <th>會員姓名</th>
                  <th>會員帳號</th>
                  <th>會員手機</th>
                  <th>帳號狀態</th>
                  <th>創建時間</th>
                  <th>營業時間</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>A0001</td>
                  <td>王小明</td>
                  <td>123456789@gmail.com</td>
                  <td>0900-000000</td>
                  <td>正常</td>
                  <td>2021-02-09</td>
                  <td>10:00-21:30</td>
                  <td>
                    <button @click="windowToggle">
                    編輯與查看
                    </button>
                  
                  </td>
                </tr>
              </tbody>
              <tbody></tbody>
            </table>
          </div>
      </main>
      <div class="BMember edit_window_member">
        <h1>編輯與查看</h1>
          <div class="BMember1">
            <ul>
              <li>會員帳號:A0001</li>
              <li>王小明</li>
              <li>帳號狀態<select name="" id="">
                <option value="">正常</option>
                <option value="">結束</option>
              </select></li>
            </ul>
            <ul>
              <li>會員帳號:123456789@gmail.com</li>
              <li>會員手機:0900-000000</li>
              <li>創建時間:2021-02-09</li>
            </ul>
        </div>
        
        <button class="buttonq  button_left" @click="windowToggle">關閉</button>
        <button  class="buttonq" @click="windowToggle">儲存</button>
        
        
      </div>
    
     <!-- 灰色背景 -->       
    <div class="edit_window_member_bg" @click="windowToggle"></div>
    </template>
    <script setup>
    import {ref, onMounted} from 'vue';
    const edit_window_member = ref(null);
    const edit_window_member_bg = ref(null);
    onMounted(() => {
    
      edit_window_member.value = document.querySelector('.edit_window_member');
      edit_window_member_bg.value = document.querySelector('.edit_window_member_bg');
    });
    const windowToggle = () => {
      edit_window_member.value.classList.toggle("edit_window_member_on");
      edit_window_member_bg.value.classList.toggle("edit_window_member_on");
    };
    
    </script>
    <style lang="scss" scoped>
    body{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      
    }
    
    
    
    </style>