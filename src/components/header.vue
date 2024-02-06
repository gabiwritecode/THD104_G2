<template>
      <header>
        <nav>
            <a href="./index.html"><img src="./image/pic/icon/logo.svg" alt=""></a>
            <ul class="empty"></ul>
            <ul class="menu">
                <li><a href="./about.html">關於我們</a></li>
                
                <li><a href="./info.html">最新消息</a></li>
                <RouterLink to="/about">about</RouterLink>
                <li><RouterLink to="/products">飲品菜單</RouterLink></li>
                <li><a href="#">門市據點</a></li>
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