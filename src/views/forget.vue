<template>
    <div class="forget">
        <div class="forget_content">
            <form action="">
                <h1>忘記密碼</h1>
                <label>請輸入您的註冊信箱以重置密碼：</label>
                <input type="text" placeholder="輸入電子信箱">
                <button>送出</button>
            </form>
            

        </div>

    </div>
    <MemberBtn></MemberBtn>
</template>

<script>
    import MemberBtn from "../components/member_btn.vue";
    
    export default {
        components: {
            MemberBtn, 
        }
    }
</script>

<style lang="scss" scoped>
//  @import"../assets/sass/style.scss";
</style>