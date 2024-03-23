<template>
    <div class="space"></div>
    <main class="backend_login">
        <div class="container">
            <img src="@/assets/image/pic/icon/logo.svg" alt="">
            <h1>捌嵩飲茶後台管理</h1>

            <h2>登入後台</h2>
            <div>
                <p>帳號</p>
                <input v-model.trim="username" type="text" placeholder="請輸入Email">
            </div>
            <div>
                <p>密碼</p>
                <input  v-model.trim="password" type="password" placeholder="請輸入密碼">
            </div>
            <button @click="login">登入後台</button>
        </div>
    </main>
    
</template>
<script setup>
import { ref } from 'vue';
import { useRouter } from 'vue-router';

const username = ref('tibame123@gmail.com'); 
const password = ref('123456'); 
const router = useRouter();

const login = () => {

  if (username.value === 'tibame123@gmail.com' && password.value === '123456') {

    router.push('/BackEndOrder');
  } else {

    alert('帳號或密碼不正確');
  
    username.value = '';
    password.value = '';
  }
};
</script>


<style lang="scss" scoped>

</style>