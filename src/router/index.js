import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import products from '../views/products.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
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
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/Login_in',
      name: 'Login_in',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/Login_in.vue')
    },
   
    {
      path: '/member',
      name: 'member',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/member.vue')
    },
    {
      path: '/products',
      name: 'products',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/products.vue')
    },
    {
      path: '/cart',
      name: 'cart',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/cart.vue')
    },
    {
      path: '/info',
      name: 'info',
      component: () => import('../views/InfoView.vue')
    },
    {
      path: '/article/:id',
      name: 'article',
      component: () => import('../views/ArticleView.vue')
    },
    {
      path: '/order',
      name: 'order',
      component: () => import('../views/FrontOrderView.vue')
    },
 
  ]
})

export default router
