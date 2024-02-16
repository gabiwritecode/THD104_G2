<template>
    <div class="about_Lo_main">
        <form action="" class="about_Lo_container">
            <h1 class="about_Lo_h1">會員登入</h1>

            <!---------------------------輸入選項-------------------------->
            <h3 class="about_Lo_h3">帳號</h3>
            <input type="text" class="about_Lo_input" placeholder="請輸入Email">

            <h3 class="about_Lo_h3 Lo_h3_1">密碼</h3>
            <input type="password" class="about_Lo_input  " id="password" placeholder="請輸入密碼" >
            <i class="fa-solid fa-eye password"  id="eye" ></i>
            <!---------------------------連結-------------------------->

            <div class="about_Lo_a">
                <a href="#">立即註冊</a>
                <a href="#">忘記密碼?</a>
            </div>

            <!---------------------------按鈕-------------------------->
            <button class="about_button">登入</button>
            <h5 class="about_h5">或其他方式註冊</h5>
            <!---------------------------google-------------------------->
            <a class="about_button2" href="#">
                <img src="../assets/image/about/google.png" alt="">
                <h3>以Google帳號註冊</h3>
            </a>
        </form>    
        
        
    </div>

    <MemberBtn></MemberBtn>
</template>
<style lang="scss">
  @import"../assets/sass/style.scss";
</style>
<script>
import MemberBtn from "../components/member_btn.vue"
export default{
    components: { MemberBtn }
}






</script>