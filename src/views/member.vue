<template>
    <div class="member_container">

        <form @submit.prevent="signup" id="signup" class="member_form">

            <h1>註冊</h1>
            
        <!---------------------------輸入選項-------------------------->  
            
            <h3>姓名</h3>
            <input v-model="formData.name" type="text" id="name" name="name" placeholder="請輸入姓名">
            <h3>信箱</h3>
            <input v-model="formData.email" type="email" id="email" name="email" placeholder="請輸入Email">
            <h3>密碼</h3>
            <input v-model="formData.password" type="password" id="password" name="password" placeholder="請輸入密碼" >
            <h3 class="check_password">確認密碼</h3>
            <input v-model="formData.password_confirmation" type="password" id="password_confirmation" name="password_confirmation" placeholder="請再輸入一次密碼">
        
        <!---------------------------按鈕-------------------------->
        <button>立即加入</button>
        <h5 >或其他方式註冊</h5>
        <a class="about_button2" href="#">
            <img src="../assets/image/about/google.png" alt="">
            <h3 class="google">以Google帳號註冊</h3>
        </a>
            
        </form>
</div>

<MemberBtn></MemberBtn>
</template>

<script>
import {ref } from 'vue';
import {useRouter} from 'vue-router';
import MemberBtn from "../components/member_btn.vue";

export default {
  components: { MemberBtn },
  setup() {
    const router = useRouter();
    const formData = ref({
      name: '',
      email: '',
      password: '',
      password_confirmation: ''
    });

    const signup = async () => {
      try {
        const response = await fetch('php/process-signup.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(formData.value),
        });

        if (response.ok) {
          const data = await response.json();

          if (data.success) {
            router.push({name:'Login_in'});
          } else {
            console.error(data.error);
          }
        } else {
          console.error('網路回應錯誤');
        }
      } catch (error) {
        console.error('送出表單時發生錯誤:', error);
      }
    };

    return {
      formData,
      signup
    };
  }
};
</script>

<style lang="scss">
  @import"../assets/sass/style.scss";
</style>