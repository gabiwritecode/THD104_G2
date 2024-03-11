<script setup>

</script>
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
          <div class="backend-input-container"><input type="text" v-model.trim="search"><button @click="searchCategories">搜尋</button></div>
          <table class="backend-info-table">
            <thead>
              <tr>
                <th>分類名稱</th>
                <th>編輯</th>
                <th>刪除</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="category in categories" :key="category.ID">
                <td>{{ category.NAME }}</td>
                <td><button @click="editWindowToggle(category)">編輯</button></td>
                <td><button @click="deleteCategory(category.ID)">刪除</button></td>
              </tr>
            </tbody>
          </table>
        </div>
              <!-------- 編輯彈窗 -------->
              <div class="edit_window">
          <div class="container">
            <h2>編輯</h2>
            <ul>
              <li><span>分類名稱: </span><input v-model="editedCategory.name" type="text"></li>
              <li><span>敘述: </span><textarea v-model="editedCategory.description"></textarea></li>
            </ul>
            

            <ul class="edit_window_btn">
              <li><button @click="editWindowToggle">關閉</button></li>
              <li><button @click="saveCategory">儲存</button></li>
            </ul>
          </div>
        </div>
        <!-- 灰色背景 -->
        <div class="edit_window_bg" @click="editWindowToggle"></div>
    </main>
  
</template>
<script setup>
import { ref, onMounted } from 'vue';

const editWindow = ref(null);
const editWindowBg = ref(null);
const categories = ref([]);

const editedCategory = ref({
  ID: '',
  name: '',
  description: '',
});

const search = ref('');

onMounted(() => {
  fetchData();
  editWindow.value = document.querySelector('.edit_window');
  editWindowBg.value = document.querySelector('.edit_window_bg');
});

const fetchData = async () => {
  try {
    const response = await fetch('php/manage-category.php');
    categories.value = await response.json();
    console.log(categories.value);
  } catch (error) {
    console.error('Error:', error);
  }
};

const editWindowToggle = (category) => {
  if (category) {
    editedCategory.value = {
      ID: category.ID,
      name: category.NAME,
      description: category.DESCRIPTION,
    };
  }

  editWindow.value.classList.toggle('edit_window_on');
  editWindowBg.value.classList.toggle('edit_window_on');
};

const saveCategory = async () => {
  try {
    const response = await fetch('php/update-category.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: new URLSearchParams({
        categoryId: editedCategory.value.ID,
        categoryName: editedCategory.value.name,
        categoryDescription: editedCategory.value.description,
      }),
    });

    const data = await response.json();
    console.log(data);

    fetchData();
    editWindowToggle();
  } catch (error) {
    console.error('Error:', error);
  }
};

const deleteCategory = async (categoryId) => {
  if (confirm('確定要刪除這個分類嗎？')) {
    try {
      const response = await fetch('php/delete-category.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ categoryId }),
      });

      const data = await response.json();
      console.log(data);

      fetchData();
    } catch (error) {
      console.error('Error:', error);
    }
  }
};

const searchCategories = async () => {
  await fetchData();

  if (search.value) {
    categories.value = categories.value.filter(category =>
      category.NAME.toLowerCase().includes(search.value.toLowerCase())
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


</style>