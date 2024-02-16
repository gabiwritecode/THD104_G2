<template>
    <div class="space"></div>
    <div class="entrance_wrapper">
        <ul>
            <li class="btn">
                <RouterLink to="./Homeview">前台
                    <img class="cup" src="../assets/image/Entrance/cup.svg" alt="">
                </RouterLink>
            </li>
            <li><img class="logo" src="../assets/image/Entrance/logo_Entrance.png" alt=""></li>
            <li class="btn">
                <RouterLink to="./Homeview">後台
                    <img class="cup" src="../assets/image/Entrance/cup.svg" alt="">
                </RouterLink>
            </li>
        </ul>
        <!-- 右下杯子 -->
        <img class="drink_icon" src="../assets/image/Entrance/drink.svg" alt="">
    </div>
</template>

<style lang="scss" scoped>
    .entrance_wrapper{
        background-image: url(../assets/image/Entrance/wave.png);
        background-repeat: no-repeat;
        background-size: contain;
        background-position: 0 100%;
        // .btn a{
            // background-image: url(../assets/image/Entrance/cup.png);
            // background-repeat: no-repeat;
            // background-size: contain;
            // animation: oringe 6s linear backwards infinite;
        // }
    } // entrance_wrapper
</style>

<!-- <style scoped>
    header{
        display: none;
    }
    .footer{
        display: none;
    }
</style> -->