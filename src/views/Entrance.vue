<template>
    <main class="entrance_wrapper">
        <div class="container">
            <ul>
                <li class="btn">
                    <RouterLink to="./Homeview">
                    <img class="cup" src="../assets/image/Entrance/cup.svg" alt="">
                    <span>前台</span>
                    </RouterLink>
                </li>
                <li><img class="logo" src="../assets/image/Entrance/logo_Entrance.svg" alt=""></li>
                <li class="btn">
                    <RouterLink to="./backendLogin">
                    <img class="cup" src="../assets/image/Entrance/cup.svg" alt="">
                    <span>    後台</span>
                </RouterLink>
                </li>
            </ul>
        </div>
        <!-- 右下杯子 -->
        <img class="drink_icon" src="../assets/image/Entrance/drink.svg" alt="">

         <!-- wave -->
        <div>
            <svg class="waves" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(120, 190, 200,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255, 193, 7,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(120, 190, 200,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="rgb(120, 190, 200)" />
                </g>
            </svg>
        </div>
    </main>
</template>

<style lang="scss" scoped>
    // @import"../assets/sass/style.scss";
</style>