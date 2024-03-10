<template>
    <main class="backend-main storemap" >
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
        <div class="backend-input-container">
          <input v-model="searchInput" type="text" id="searchInput"  placeholder="縣市查詢"/>
        <button @click="search">Search</button>
      </div>
        <table id="dataTable" class="backendinfo-table">
            <thead class="thead" >
                <tr>
                    
                    <th>縣市</th>
                    <th>鄉鎮市區</th>
                    <th>店名</th>
                    <th>電話</th>
                    <th>地址</th>
                    <th>營業時間</th>
                    <th></th>
                </tr>
            </thead>
            <tbody >
                <tr v-for="row in filteredData" :key="row.store_id" class="tr" >
                    
                    <td>{{ row.NAME }}</td>
                    <td>{{ row.district_name }}</td>
                    <td>{{ row.store_name }}</td>
                    <td>{{ row.phone_number }}</td>
                    <td>{{ row.address }}</td>
                    <td>{{ row.business_hours }}</td>
                    <td>
                        <button @click="watch_data(row.store_id)" class="button">編輯與查看</button>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>        
  </main>
  <div>
    <div id="myModal" class="modal block2 edit_window_store">
            <div class="modal-content">
               

                <form @submit.prevent="saveForm" >
                    <h2>編輯與查看</h2>
                    <div style="display: flex;" class="form">
                        <label for="cityFilter">縣市:</label>
                        <select v-model="selectedCity" @change="filterByCity">
                            <option value="">All Cities</option>
                            <option v-for="city in uniqueCities" :key="city" :value="city">{{ city }}</option>
                        </select>

                        <label for="districtFilter">鄉鎮市區:</label>
                        <select v-model="selectedDistrict" @change="filterByDistrict">
                            <option value="">All Districts</option>
                            <option v-for="district in uniqueDistricts" :key="district" :value="district">{{ district }}
                            </option>
                        </select>

                        <label for="businessHoursFilter">營業時間:</label>
                        <select v-model="selectedBusinessHours" @change="filterByBusinessHours">
                            <option value="">All Business Hours</option>
                            <option v-for="hours in uniqueBusinessHours" :key="hours" :value="hours">{{ hours }}
                            </option>
                        </select>
                    </div>
                    <br />
                   
                        <div class="left_form">
                            <div class="input_box">
                                <label for="store_name">店名:</label>
                                <input type="text" class="input" v-model="formData.store_name" />
                                <br>
                                <label for="phone_number">電話:</label>
                                <input type="text" class="input" v-model="formData.phone_number" />
                                <br>
                                <label for="address">地址:</label>
                                <input type="text" class="input" v-model="formData.address" />
                                <label for="store_id" style="display: none;">店名編號</label>
                                <input type="text" v-model="formData.store_id" style="display: none;" />

                            </div>    
                            <div class="buttonQQ">
                                <button class="buttonqq" @click="WindowToggle">關閉</button>
                                <button class="buttonqq" type="submit" @click="saveForm">儲存</button>
                            </div>
                        </div>
                </form>

            </div>
                        
                        
                    </div> 
           
          </div>
                    
                    
    
     <!-- 灰色背景 -->       
    <div class="edit_window_store_bg" @click="WindowToggle" ></div>
</template>

<script >
import {ref, onMounted,watch} from 'vue';
export default{
  setup(){
    
                const editWindowStore = ref(null);
                const editWindowStoreBg = ref(null);
                const data = ref([]);
                const filteredData = ref([]);
                const uniqueCities = ref([]);
                const uniqueDistricts = ref([]);
                const uniqueBusinessHours = ref([]);
                const selectedCity = ref('');
                const selectedDistrict = ref('');
                const selectedBusinessHours = ref('');
                const formData = ref({
                    store_name: '',
                    phone_number: '',
                    address: '',
                    store_id: '',
                });
                const fetchData = () => {
                    
                    fetch('http://localhost/THD104G2/public/php/all.php')
                        .then(response => response.json())
                        .then(responseData => {
                            data.value = responseData;
                            generateTableRows();
                            populateDropdowns();
                        })
                        .catch(error => console.error('Error:', error));
                };

                const generateTableRows = () => {
                    filteredData.value = [];
                    const uniqueStoreNames = new Set();

                    data.value.forEach(row => {
                        if (!uniqueStoreNames.has(row.store_name)) {
                            filteredData.value.push(row);
                            uniqueStoreNames.add(row.store_name);
                        }
                    });
                };

                const populateDropdowns = () => {
                    uniqueCities.value = [...new Set(data.value.map(row => row.NAME))];
                    uniqueDistricts.value = [...new Set(data.value.map(row => row.district_name))];
                    uniqueBusinessHours.value = [...new Set(data.value.map(row => row.business_hours))];
                };

                const watch_data = storeId => {
                    const storeData = data.value.find(row => row.store_id === storeId);

                    selectedCity.value = storeData.NAME;
                    selectedDistrict.value = storeData.district_name;
                    selectedBusinessHours.value = storeData.business_hours;

                    formData.value.store_name = storeData.store_name;
                    formData.value.phone_number = storeData.phone_number;
                    formData.value.address = storeData.address;
                    formData.value.store_id = storeData.store_id;

                    openModalForm();
                    WindowToggle();
                };

                const filterByCity = () => {
                    // Implement filtering logic based on selectedCity.value
                };

                const filterByDistrict = () => {
                    // Implement filtering logic based on selectedDistrict.value
                };

                const filterByBusinessHours = () => {
                    // Implement filtering logic based on selectedBusinessHours.value
                };

                const openModalForm = () => {
                    const modal = document.getElementById('myModal');
                    modal.style.display = 'block';
                };

                const closeModalForm = () => {
                    const modal = document.getElementById('myModal');
                    modal.style.display = 'none';
                };
                const WindowToggle = () => {
                    editWindowStore.value.classList.toggle("edit_window_store_on");
                    editWindowStoreBg.value.classList.toggle("edit_window_store_on");
                };

                const saveForm = () => {
                    const formDataValue = {
                        store_name: formData.value.store_name,
                        phone_number: formData.value.phone_number,
                        address: formData.value.address,
                        store_id: formData.value.store_id,
                        
                    };
                    
                    
                    fetch('http://localhost/THD104G2/public/php/update.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        
                        body: JSON.stringify(formDataValue),
                    })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.text();
                        })
                        .then(data => {
                            console.log('Success:', data);
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            if (error instanceof SyntaxError) {
                                console.error('JSON Parsing Error:', error.message);
                            }
                        });

                    closeModalForm();
                    location.reload();
                };
                const searchInput = ref('');
                const uniqueStoreNames = new Set();

                const search = () => {
                    //http://localhost/THD104G2/public/php/search.php
                    fetch('/php/search.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: 'cityName=' + encodeURIComponent(searchInput.value),
                    })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(responseData => {
                            data.value = responseData;
                        })
                        .catch(error => {
                            console.error('Error:', error.message);
                            // 在控制台記錄錯誤，或者進行其他錯誤處理
                        });
                };

                // 添加對 data 變化的 watch
                watch(data, () => {
                    uniqueStoreNames.clear();
                    filteredData.value = data.value.filter(row => {
                        if (!uniqueStoreNames.has(row.store_name)) {
                            uniqueStoreNames.add(row.store_name);
                            return true;
                        }
                        return false;
                    });
                });
                onMounted(() => {
                    fetchData();
                    editWindowStore.value = document.querySelector('.edit_window_store');
                    editWindowStoreBg.value = document.querySelector('.edit_window_store_bg');
                });
                
                return {
                    editWindowStore,
                    editWindowStoreBg,
                    filteredData,
                    uniqueCities,
                    uniqueDistricts,
                    uniqueBusinessHours,
                    selectedCity,
                    selectedDistrict,
                    selectedBusinessHours,
                    formData,
                    searchInput,
                    search,
                    watch_data,
                    WindowToggle,
                    filterByCity,
                    filterByDistrict,
                    filterByBusinessHours,
                    openModalForm,
                    closeModalForm,
                    saveForm,

                };

  }
}
// const editWindowStore = ref(null);
// const editWindowStoreBg = ref(null);
// onMounted(() => {

//   editWindowStore.value = document.querySelector('.edit_window_store');
//   editWindowStoreBg.value = document.querySelector('.edit_window_store_bg');



</script>
<style lang="scss" scoped>
body{
  padding: 0;
  margin: 0;
  box-sizing: border-box; 
}





</style>