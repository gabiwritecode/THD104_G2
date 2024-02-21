<template>
  <footer>
    <!-- <ul class="empty"></ul> -->
    <div class="footer">
        <ul class="menu">
            <li><RouterLink to="./about">關於我們</RouterLink></li>
            <li><RouterLink to="./info">最新消息</RouterLink></li>
            <li class="logo"><img src="../assets/image/pic/icon/logo2.svg" alt=""></li>
            <li><RouterLink to="/products">飲品菜單</RouterLink></li>
            <li><RouterLink to="#">門市據點</RouterLink></li>
        </ul>
        <p class="tibaMe">本網站為緯育TibaMe【第89期】前端工程師專業技術養成班學員作品,僅供學習、展示之用途。</p>
        <p class="copyright">Copyright© 2024 BOISSON TEA Inc.</p>
    </div>
    <ul class="btn">
        <!-- fontawesome -->
        <li><RouterLink to="#"><i class="fa-brands fa-line"></i></RouterLink></li>
        <li><RouterLink to="#"><i class="fa-brands fa-square-facebook"></i></RouterLink></li>
        <li><RouterLink to="#"><i class="fa-brands fa-instagram"></i></RouterLink></li>
    </ul>
</footer>
</template>
<script></script>
<style lang="scss" scoped>
//   @import"../assets/sass/style.scss";
</style>