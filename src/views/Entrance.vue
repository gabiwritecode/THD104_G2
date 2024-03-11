<template>
    <main class="entrance_wrapper">
        <div class="container">
            <ul>
                <li class="btn">
                    <RouterLink to="./Homeview">
                    <!-- <img class="cup" src="../assets/image/Entrance/cup.svg" alt=""> -->
                    <xml version="1.0" encoding="utf-8"/>
                    <svg version="1.1" class="cup" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 68 68" style="enable-background:new 0 0 68 68;" xml:space="preserve">
                    <path class="st0" d="M64.9,14c2.9-2.9,2.9-7.7,0-10.6s-7.7-2.9-10.6,0l-4,4C45.6,4.5,40,2.8,34,2.8C16.8,2.8,2.8,16.8,2.8,34
                        c0,17.2,14,31.2,31.2,31.2c17.2,0,31.2-14,31.2-31.2c0-5.8-1.6-11.3-4.4-15.9L64.9,14z"/>
                    </svg>
                    <span>前台</span>
                    </RouterLink>
                </li>
                <li><img class="logo" src="../assets/image/Entrance/logo_Entrance.svg" alt=""></li>
                <li class="btn">
                    <RouterLink to="./backendLogin">
                    <!-- <img class="cup" src="../assets/image/Entrance/cup.svg" alt=""> -->
                    <xml version="1.0" encoding="utf-8"/>
                    <svg version="1.1" class="cup cup2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 68 68" style="enable-background:new 0 0 68 68;" xml:space="preserve">
                    <path class="st0" d="M64.9,14c2.9-2.9,2.9-7.7,0-10.6s-7.7-2.9-10.6,0l-4,4C45.6,4.5,40,2.8,34,2.8C16.8,2.8,2.8,16.8,2.8,34
                        c0,17.2,14,31.2,31.2,31.2c17.2,0,31.2-14,31.2-31.2c0-5.8-1.6-11.3-4.4-15.9L64.9,14z"/>
                    </svg>
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
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(120, 190, 200,0.5" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255, 193, 7,0.5)" />
                    <!-- <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(120, 190, 200,0.3)" /> -->
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="rgb(120, 190, 200)" />
                </g>
            </svg>
        </div>
    </main>
</template>

<style lang="scss" scoped>
    // @import"../assets/sass/style.scss";

</style>
