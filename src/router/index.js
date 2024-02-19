import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
// import products from '../views/products.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/Entrance',
      name: 'entrance',
      component: () => import('../views/Entrance.vue'),
      meta: {
        title: '入口'
      }
    },
    {
      path: '/HomeView',
      name: 'home',
      component: HomeView
    },
    {
      path:'/',
      redirect:'/HomeView'
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue'),
      meta:{
        title:'關於我們'
      }
    },
    {
      path: '/Login_in',
      name: 'Login_in',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/Login_in.vue'),
      meta: {
        title: '登入會員'
      }
    },
    {
      path: '/member',
      name: 'member',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/member.vue'),
      meta: {
        title: '註冊會員'
      }
    },
    {
      path: '/products',
      name: 'products',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/products.vue'),
      meta: {
        title: '飲品菜單'
      }
    },
    {
      path: '/cart',
      name: 'cart',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/cart.vue'),
      meta: {
        title: '確認訂單'
      }
    },
    {
      path: '/info',
      name: 'info',
      component: () => import('../views/InfoView.vue'),
      meta: {
        title: '最新消息'
      }
    },
    {
      path: '/article/:id',
      name: 'article',
      component: () => import('../views/ArticleView.vue'),
      meta: {
        title: '最新消息'
      }
    },
    {
      path: '/order',
      name: 'order',
      component: () => import('../views/FrontOrderView.vue'),
      meta: {
        title: '訂單明細'
      }
    },
 
  ]
})
const main_title = '捌嵩'

router.beforeEach((to,form,next)=>{
  console.log(to)
  if(to.name === 'home'){
    document.title = main_title + '飲品'
  }else{
    document.title = main_title + ' | ' + (to.meta && to.meta.title)
  }
  next()
})

export default router
