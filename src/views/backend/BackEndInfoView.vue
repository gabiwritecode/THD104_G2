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
          <div class="backend-input-container"> <input type="text" v-model.trim="search">
        <button @click="searchTitle">搜尋</button></div>
          <table class="backend-info-table" v-if="informationData.length">
            <thead>
              <tr>
                <th>文章編號</th>
                <th>文章分類</th>
                <th>上下架</th>
                <th>標題</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="info in informationData" :key="info.ID">
                <td>{{ info.ID }}</td>
                <td>{{ info.CATEGORY_NAME }}</td>
                <td>{{ displayStatus(info.STATUS)}}</td>
                <td>{{ info.TITLE }}</td>
                <td><button @click="editWindowToggle(info)">編輯與查看</button></td>
              </tr>
            </tbody>
          </table>
        </div>
          <!-------- 編輯彈窗 -------->
          <div class="edit_window">
          <div class="container">
            <h2>編輯與查看</h2>
            <ul>
              <li><span>文章分類: </span>
                <select v-model="editFormData.category">
                  <option v-for="category in categories" :key ="category.ID" :value="category.ID">{{ category.NAME }}</option>
              </select><div class="select-span"></div> <span>上下架: </span>  
              <select v-model="editFormData.status">
                <option v-for="(option, index) in statusOptions" :key="index" :value="option.value">
                  {{ displayStatus(option.value) }}
                </option>
              </select></li>
              <li></li>
              <li><span>主標題: </span><input type="text" v-model="editFormData.title"></li>
              <li><span>副標題: </span><input type="text" v-model="editFormData.subtitle"></li>
              <li><span>內文: </span><textarea v-model="editFormData.text"></textarea></li>
            </ul>
            
            <ul class="info-img">
              <li>
                <label>上傳圖片:</label>
                <input type="file" id="imageInput" ref="imageInput" @change="handleImageUpload">
              </li>
            </ul>
            <div v-if="editFormData.imagePreview" class="image-preview">
              <label>預覽圖片:</label>
              <img :src="editFormData.imagePreview" alt="Image Preview" width="60">
            </div>
            <ul class="edit_window_btn">
              <li><button @click="editWindowToggle" class="close-btn">關閉</button></li>
              <li><button @click="submitForm">儲存</button></li>
            </ul>
          </div>
        </div>
        <!-- 灰色背景 -->
        <div class="edit_window_bg" @click="editWindowToggle"></div>
    </main>

  
</template>
<script setup>
import {ref, onMounted, computed} from 'vue';
const editWindow = ref(null);
const editWindowBg = ref(null);
const informationData = ref([]);
const categories = ref([]);
const fileInput = ref(null);
const search = ref('');
const editFormData = ref({
  InfoId:'',
  category: '',
  status: '',
  title: '',
  subtitle: '',
  text: '',
  imageFile: null,
  imagePreview: null,
});

onMounted(() => {
  fetchInfoData();
  fetchCategoryData();
  editWindow.value = document.querySelector('.edit_window');
  editWindowBg.value = document.querySelector('.edit_window_bg');
  fileInput.value = document.getElementById('imageInput');
}

);
const fetchCategoryData = async () => {
  try {
    const response = await fetch('php/manage-category.php');
    categories.value = await response.json(); 
  } catch (error) {
    console.error('Error:', error);
  }
};
const fetchInfoData = async()=>{
  try{
    const response = await fetch('php/get-information.php');
    const data = await response.json();
    informationData.value = data;
  } catch (error){
    console.error('Error fetching data:', error)
  }
};
const editWindowToggle = (info) => {
  populateEditForm(info);
  editWindow.value.classList.toggle("edit_window_on");
  editWindowBg.value.classList.toggle("edit_window_on");
  search.value='';
};

const populateEditForm = (info) =>{ if (info) {
  console.log(info); 
  editFormData.value.InfoId = info.ID;
  editFormData.value.category = info.CATEGORY_ID;
  editFormData.value.status = info.STATUS;
  editFormData.value.title = info.TITLE;
  editFormData.value.subtitle = info.SUBTITLE;
  editFormData.value.text = info.TEXT;
}
}
// 預覽圖片
const handleImageUpload = () => {

  if (fileInput.value && fileInput.value.files.length > 0) {
    editFormData.value.imageFile = fileInput.value.files[0];

    if (editFormData.value.imageFile) {
      const reader = new FileReader();
      reader.onload = (e) => {
        editFormData.value.imagePreview = e.target.result;
      };
      reader.readAsDataURL(editFormData.value.imageFile);
    }
  }
};

const submitForm = async () => {
  try {
    const formData = new FormData();
    formData.append('InfoId', editFormData.value.InfoId);
    formData.append('category', editFormData.value.category);
    formData.append('status', editFormData.value.status);
    formData.append('title', editFormData.value.title);
    formData.append('subtitle', editFormData.value.subtitle);
    formData.append('text', editFormData.value.text);
    formData.append('image', editFormData.value.imageFile);

    const response = await fetch('php/update-information.php', {
      method: 'POST',
      body: formData,
    });

    const data = await response.json();
    console.log(data);
    console.log(editFormData.value.status);

    fetchInfoData();
    editWindowToggle();

    editFormData.value.imagePreview = null;
  } catch (error) {
    console.error('Error:', error);
  }
};
const statusOptions = [
  { label: '上架', value: 1 },
  { label: '下架', value: 0 },
];

const displayStatus = computed(() => {
  return (status) => {
    return status == 1 ? '上架' : '下架';
  };
});
const searchTitle = async () => {
  await fetchInfoData();

  if (search.value) {
    informationData.value = informationData.value.filter(info =>
      info.TITLE.toLowerCase().includes(search.value.toLowerCase())
    );
  }
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