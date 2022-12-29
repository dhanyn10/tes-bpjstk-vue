import Vue from 'vue'
import VueRouter from 'vue-router'
import RegistrationForm from '../views/RegistrationForm.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'registration',
    component: RegistrationForm
  },
  {
    path: '/about',
    name: 'about',
    component: () => import('../views/AboutView.vue')
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
