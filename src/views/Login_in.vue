<template>
    <div class="about_Lo_main">
        <form action="" class="about_Lo_container">
            <h1 class="about_Lo_h1">會員登入</h1>

            <!---------------------------輸入選項-------------------------->
            <h3 class="about_Lo_h3">帳號</h3>
            <input v-model="email" class="about_Lo_input" placeholder="請輸入Email">

            <h3 class="about_Lo_h3 Lo_h3_1">密碼</h3>
            <input :type="showPassword ? 'text' : 'password'" v-model="password" class="about_Lo_input"
                placeholder="請輸入密碼">
            <i @click="togglePassword" :class="['fa-solid', showPassword ? 'fa-eye-slash' : 'fa-eye', 'password']"></i>

            <!---------------------------連結-------------------------->

            <div class="about_Lo_a">
                <router-link to="/member" class="a">立即註冊</router-link>
                <router-link to="/forget" class="a">忘記密碼?</router-link>
            </div>

            <!---------------------------按鈕-------------------------->
            <button class="about_button">登入</button>
            <h5 class="about_h5">或其他方式註冊</h5>
            <!---------------------------google-------------------------->
            <a class="about_button2" href="#">
                <img src="../assets/image/about/google.png" alt="">
                <h3 class="google_h3">以Google帳號註冊</h3>
            </a>
        </form>    
        
        
    </div>

    <MemberBtn></MemberBtn>
</template>
<style lang="scss">
//   @import"../assets/sass/style.scss";
</style>
<script>
import { ref } from 'vue';
import MemberBtn from "../components/member_btn.vue"
export default{
    setup() {
                const email = ref('');
                const password = ref('');
                const showPassword = ref(false);

                const togglePassword = () => {
                    showPassword.value = !showPassword.value;
                };

                return {
                    email,
                    password,
                    showPassword,
                    togglePassword,
                };
            },
    
    components: { MemberBtn }
}






</script>