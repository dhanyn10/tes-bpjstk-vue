import Vue from 'vue'
import VueRouter from 'vue-router'
import RegistrationForm from '../views/RegistrationForm.vue'
import HomeView from '../views/HomeView'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'registration',
    component: RegistrationForm
  },
  {
    path: '/login',
    name: 'login',
    component: () => import('../views/LoginForm.vue')
  },
  {
    path: '/home',
    name: 'home',
    component: HomeView
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
