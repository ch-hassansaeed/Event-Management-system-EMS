import axios from 'axios'
import router from './router'

const $axios = axios.create({
  baseURL: 'http://localhost:8000/api/'
})

$axios.CancelToken = axios.CancelToken
$axios.isCancel = axios.isCancel

$axios.interceptors.request.use(
  (config) => {
    const token = axios.defaults.headers.common.Authorization
    if (token) {
      config.headers.Authorization = token
    }

    return config
  },
  (error) => {
    return Promise.reject(error)
  }
)

$axios.interceptors.response.use(
  (response) => {
    return response
  },
  (error) => {
    if (error.response.status === 401) {
      if (
        router.currentRoute.name !== 'Login'
      ) {
        router.push({ name: 'Login' })
      }
    } else {
      return Promise.reject(error)
    }
  }
)

export default $axios
