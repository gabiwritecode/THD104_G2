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
          <h1>會員管理</h1>
          <div class="backend-input-container"><input type="text" placeholder='請輸入會員編號' id="BsearchInput" v-model="searchInput"><button @click="handleBsearch">搜尋</button></div>
          <table class="backend-info-table">
            <thead>
              <tr>
                <th>會員編號</th>
                <th>會員姓名</th>
                <th>會員帳號</th>
                <th style="display: none;">會員手機</th>
                <th>帳號狀態</th>
                <th style="display: none;">創建時間</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody id="memberTable">
                <tr v-for="member in members" :key="member.ID">
                  <td>{{ member.ID }}</td>
                  <td>{{ member.NAME }}</td>
                  <td>{{ member['E-MAIL'] }}</td>
                  <td style="display: none;">{{ member.PHONE }}</td>
                  <td>{{ getStatusText(member.STATUS) }}</td>
                  <td style="display: none;">{{ member.CREATE_TIME }}</td>
                  
                  <td>
                    <button @click="editMember(member)">編輯與查看</button>
                  </td>
                </tr>
            </tbody>
            <tbody></tbody>
          </table>
        </div>
    </main>
    <div class="BMember edit_window_member">
      <h2>編輯與查看</h2>
        <div class="BMember1">
          <ul>
            <li>會員編號:<input type="text"  v-model="selectedMember.ID"></li>
            <li>會員姓名:<input type="text" v-model="selectedMember.NAME"></li>
            <li>帳號狀態:<select name="" id="" v-model="selectedMember.STATUS">
              <option value="1">正常</option>
              <option value="0">結束</option>
            </select></li>
            <li>會員帳號:<input type="text" v-model="selectedMember['E-MAIL']"></li>
          </ul>
          <ul>
           
            <li style="display: none;">會員手機:<input type="text" v-model="selectedMember.PHONE" ></li>
            <li style="display: none;">創建時間:<input type="text" v-model="selectedMember.CREATE_TIME" ></li>
          </ul>
      </div>
      
      <button class="buttonq  button_left" @click="windowToggle">關閉</button>
      <button  class="buttonq" @click="send_data">儲存</button>
      
      
    </div>
  
   <!-- 灰色背景 -->       
  <div class="edit_window_member_bg" @click="windowToggle"></div>
  </template>
  <script >
  import { ref, onMounted } from 'vue';
  
 export default {
  setup() {
const members = ref([]);
const searchInput =ref('');
const selectedMember = ref({
  ID: '',
  NAME: '',
  'E-MAIL': '',
  PHONE: '',
  STATUS: '',
  CREATE_TIME: ''
});
const send = ref(null);
const edit_window_member = ref(null);
const edit_window_member_bg = ref(null);

const fetchMembers = () => {
  fetch('/php/BmemberAll.php')
    .then((response) => response.json())
    .then((data) => {
      console.log('Fetched data:', data);
      members.value = data;
    })
    .catch((error) => console.error('Fetch error: ', error));
};

// 實現你的 getStatusText 邏輯
const getStatusText = (status) => {
  return status === 1 ? '正常' : '停權';
};

function editMember(member) {
  selectedMember.value = { ...member };
  windowToggle();
  
}
function send_data(){
  saveToBackend();
  windowToggle();
  location.reload();
}


const handleBsearch = () => {
const url = '/php/Bsearch.php';
const params = {
  method: 'POST',
  headers: {
    'Content-Type': 'application/x-www-form-urlencoded'
  },
  body: `memberID=${searchInput.value}`
};

fetch(url, params)
  .then(response => response.json())
  .then(data => {
    // 更新 members 數據，以便在表格中顯示
    members.value = data;
  })
  .catch(error => {
    console.error('發生錯誤：', error);
  });
};
const saveToBackend = () => {
    // 準備發送給後端的數據
    const dataToSend = {
      ID: selectedMember.value.ID,
      NAME: selectedMember.value.NAME,
      STATUS: selectedMember.value.STATUS,
      'E-MAIL': selectedMember.value['E-MAIL'],
      PHONE: selectedMember.value.PHONE,
      CREATE_TIME: selectedMember.value.CREATE_TIME
      
    };

    // 使用fetch發送POST請求到後端PHP
    fetch('/php/Bupdate.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(dataToSend)
    })
    .then(response => response.json())
    .then(data => {
      console.log('Success:', data);
      console.log('111',dataToSend.STATUS);
      // 在這裡處理後端返回的數據
    })
    .catch((error) => {
      console.error('Error:', error);
    });
  };



onMounted(() => {
  edit_window_member.value = document.querySelector('.edit_window_member');
  edit_window_member_bg.value = document.querySelector('.edit_window_member_bg');

  // 調用 fetchMembers 函數以獲取資料
  fetchMembers();
});

const windowToggle = () => {
  edit_window_member.value.classList.toggle("edit_window_member_on");
  edit_window_member_bg.value.classList.toggle("edit_window_member_on");
};

return {
  
  members,
  selectedMember,
  searchInput,
  saveToBackend,
  handleBsearch,
  send_data,
  editMember,
  getStatusText,
  windowToggle
};
}

};
  
  </script>
  <style lang="scss" scoped>
  body{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    
  }
  
  
  
  </style>