import { createRouter, createWebHashHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
// import products from '../views/products.vue'

const router = createRouter({
  history: createWebHashHistory(import.meta.env.BASE_URL),
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
      path: '/',
      redirect: '/entrance'
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
      path: '/store_map',
      name: 'store_map',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/store_map.vue')
    },
    {
      path: '/forget',
      name: 'forget',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/forget.vue')
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
      path: '/article_item:id',
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
    {
      path: '/customized',
      name: 'customized',
      component: () => import('../views/CustomizedView.vue'),
      meta: {
        title: '客製化飲料'
      }
    },
    {
      path: '/backendLogin',
      name: 'backendLogin',
      component: () => import('../views/backend/BackEndLogin.vue'),
      meta: {
        title: '後台登入'
      }
    },
    {
      path: '/backendProducts',
      name: 'backendProducts',
      component: () => import('../views/backend/BackendProducts.vue'),
      meta: {
        title: '商品管理'
      }
    },
    {
      path: '/backendInfo',
      name: 'backendInfo',
      component: () => import('../views/backend/BackEndInfoView.vue'),
      meta: {
        title: '入口'
      }
    },
    {
      path: '/backendOrder',
      name: 'backendOrder',
      component: () => import('../views/backend/BackEndOrder.vue'),
      meta: {
        title: '訂單管理'
      }
    },
    {
      path: '/BackEndStore',
      name: 'BackEndStore',
      component: () => import('../views/backend/BackEndStore.vue'),
      meta: {
        title: '門市管理'
      }
    },
    {
      path: '/Store_settings',
      name: 'Store_settings',
      component: () => import('../views/backend/Store_settings.vue'),
      meta: {
        title: '門市管理'
      }
    },
    {
      path: '/backendCategories',
      name: 'backendCategories',
      component: () => import('../views/backend/BackEndCategories.vue'),
      meta: {
        title: '消息分類'
      }
    }
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
