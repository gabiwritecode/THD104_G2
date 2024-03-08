<template>
    <div class="about_Lo_main">
      <form @submit.prevent="login" class="about_Lo_container">
        <h1 class="about_Lo_h1">會員登入</h1>
  
        <!-- 輸入選項 -->
        <h3 class="about_Lo_h3" for="email" label="email">帳號</h3>
        <input v-model="email" type="email" class="about_Lo_input" placeholder="請輸入Email">
  
        <h3 class="about_Lo_h3 Lo_h3_1" for="password" label="password">密碼</h3>
        <input :type="showPassword ? 'text' : 'password'" v-model="password" class="about_Lo_input" placeholder="請輸入密碼">
        <i @click="togglePassword" :class="['fa-solid', showPassword ? 'fa-eye-slash' : 'fa-eye', 'password']"></i>
  
        <!-- 連結 -->
        <div class="about_Lo_a">
          <router-link to="/member" class="a" type="submit">立即註冊</router-link>
          <router-link to="/forget" class="a">忘記密碼?</router-link>
        </div>
  
        <!-- 按鈕 -->
        <button class="about_button">登入</button>
        <h5 class="about_h5">或其他方式註冊</h5>
  
        <!-- Google -->
        <a class="about_button2" href="#">
          <img src="../assets/image/about/google.png" alt="">
          <h3 class="google_h3">以Google帳號註冊</h3>
        </a>
      </form>
    </div>
  
    <MemberBtn></MemberBtn>
  </template>
  
  <script>
 import { ref, onMounted} from 'vue';
 import { useRouter } from 'vue-router';
 import MemberBtn from "../components/member_btn.vue";
 
  
  export default {
    components: {
      MemberBtn, 
    },
    setup() {
      const email = ref('');
      const password = ref('');
      const showPassword = ref(false);
      const router = useRouter();
  
      const togglePassword = () => {
        showPassword.value = !showPassword.value;
      };
  
      const login = async () => {
    try {
        const response = await fetch('php/login.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json', 
            },
            body: JSON.stringify({
                email: email.value,
                password: password.value,
            }),
        });

        const data = await response.json();

        if (data.success) {
            localStorage.setItem('isLoggedIn', true);
            localStorage.setItem('userId', data.user_id);
            router.push({ name: 'home' });
            console.log('Login successful');
        } else {
            console.error('Invalid login:', data.message);
        }
    } catch (error) {
        console.error('Login error:', error);
    }
};
    const redirectToCorrectRoute = () => {
      if (localStorage.getItem('isLoggedIn') === 'true') {
        // 重新導向到訂單管理
        router.push({ name: 'order' });
      } 

    };
    onMounted(() => {
          redirectToCorrectRoute();
        });
  
      return {
        email,
        password,
        showPassword,
        togglePassword,
        login,
      };
    },
  };
  </script>