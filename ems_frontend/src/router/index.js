import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Dashboard',
    meta: {
      auth: true
    },
    component: () => import('../views/Dashboard.vue')
  },
  {
    path: '/login',
    name: 'Login',
    meta: {
      auth: false
    },
    component: () => import('../views/Login.vue')
  },
  {
    path: '/newevent',
    name: 'NewEvent',
    meta: {
      auth: true
    },
    component: () => import('../views/NewEvent.vue')
  },
  {
    path: '/editevent/:id',
    name: 'EditEvent',
    meta: {
      auth: true
    },
    component: () => import('../views/EditEvent.vue')
  },
  {
    path: '/event/:id',
    name: 'Event',
    meta: {
      auth: true
    },
    component: () => import('../views/Event.vue')
  },
  {
    path: '/reports',
    name: 'Reports',
    meta: {
      auth: true
    },
    component: () => import('../views/Reports.vue')
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

router.beforeEach((to, from, next) => {
  const loggedIn = localStorage.getItem('user')
  if (to.name === 'Login' && loggedIn) {
    next({ name: 'Dashboard' })
    return
  }

  if (to.matched.some(record => record.meta.auth) && !loggedIn) {
    next('/login')
    return
  }
  next()
})

export default router
