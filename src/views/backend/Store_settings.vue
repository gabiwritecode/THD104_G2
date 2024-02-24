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
            <li><RouterLink to="./BackEndStore"  class="sidebar-btn" href="#"><i class="fa-solid fa-location-dot"></i>門市管理</RouterLink></li>
          </ul>
          <div class="backend-logout"><p>登出<i class="fa-solid fa-arrow-right-from-bracket"></i></p></div>
        </nav>
    

    <div class="Store_settings">
        <h1>編輯與查看</h1>

        <!-- -------------------------下拉選單------- --------------->
        <div>
            <form action="">
               <!-- -------選單一------- -->
                <label for="" class="city">縣市:</label>
                <select name="" class="city_s">
                    <option value="台北">台北</option>
                    <option value="新北">新北</option>
                    <option value="桃園">桃園</option>
                    <option value="台中">台中</option>
                </select>

                <!-- -------選單二------- -->
                <label for="" class="Township">鄉鎮:</label>
                <select name="" class="Township_s">
                    <option value="台北">南港</option>
                    <option value="新北">內湖</option>
                    <option value="桃園">信義</option>
                    <option value="台中">松山</option>
                </select>       
                <!-- -------選單三------- -->
                <label for="" class="Time">營業時間:</label>
                <select name="" id="" class="Time_s">
                    <option value="時間">08:00-17:00</option>
                    <option value="時間">10:00-21:00</option>
                
                </select>
            </form>
            <!-- ----------------------區塊二------- ---------------->
            <!-- -----------------輸入框和圖片上傳------------------->
            <div class="block2">
                <div class="left">
                    <form action="" class="left_form">
                        <label for="">店名: <input type="text" class="input"></label>
                        
                        <label for="">電話:</label>
                        <input type="text" class="input">
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
            </div>
            
            <div class="button">
                <button>關閉</button>
                <button>儲存</button>
            </div>
            

        </div>
    </div>

</main>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>
//  @import"../../assets/sass/style.scss";
</style>