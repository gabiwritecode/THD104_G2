<template>
      <header>
        <nav>
            <a href="./index.html"><img src="../assets/image/pic/icon/logo.svg" alt=""></a>
            <ul class="empty"></ul>
            <ul class="menu">
                <li><RouterLink to="./about">關於我們</RouterLink></li>
                <li><RouterLink to="./info">最新消息</RouterLink></li>
                <!-- <RouterLink to="/about">about</RouterLink> -->
                <li><RouterLink to="/products">飲品菜單</RouterLink></li>
                <li><RouterLink to="#">門市據點</RouterLink></li>
            </ul>
        <ul class="member_btn">
            <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
            <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
        </ul>
    </nav>
</header>
</template>
<script></script>
<style lang="scss">
  @import"../assets/sass/style.scss";
</style>