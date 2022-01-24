<template>
  <div class="login-form">
        <form @submit.prevent="login">
            <h2>Login</h2>
            <div class="form-group">
              <vs-input block
              primary class="form-control"
              v-model="email"
              placeholder="Email">
              <template v-if="email.indexOf('@')<1 && email.indexOf('.')<1 && email.length > 0" #message-danger>
                  Invalid email ID
              </template>
              </vs-input>
            </div>
            <div class="form-group">
              <vs-input block type = password
                primary class="form-control"
                v-model="password"
                placeholder="Password"/>
            </div>
            <div class="form-group">
              <vs-button color="primary" block type="submit" animation-type="vertical">
                Login
                <template #animate >
                  Let's go!
                </template>
              </vs-button>
            </div>
          </form>
        <template>
          <div class="center">
            <vs-dialog blur v-model="active_dialogue">
              <template #header>
                <h4 class="not-margin">
                  Successfully<b>logged in!</b>
                </h4>
              </template>
              <div>
                  <img class="popup" src="https://cdn.dribbble.com/users/39201/screenshots/3694057/nutmeg.gif" alt="">
              </div>
            </vs-dialog>
          </div>
        </template>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  computed: {
    ...mapGetters([
      'isLogged'
    ])
  },
  data () {
    return {
      active_dialogue: false,
      email: '',
      password: ''
    }
  },

  methods: {
    login () {
      this.$store
        .dispatch('login', {
          email: this.email,
          password: this.password
        })
        .then(() => {
          if (this.isLogged) {
            this.active_dialogue = true
            setTimeout(() => { this.$router.push({ name: 'Dashboard' }) }, 2000)
          } else {
            alert('Invalid login credentials')
          }
        })
        .catch(err => {
          console.log(err)
        })
    }
  }
}
</script>

<style scopped>

.login-form {
  overflow-y: hidden;
  background: linear-gradient(-45deg, #00e1ff, #1100ff, #23a6d5, #00ffc3) no-repeat center center fixed;
  min-height: 100%;
  width: 100%;
  height: auto;
  position: fixed;
  top: 0;
  left: 0;
}

.popup{
  max-height: 17em;
  /* max-width: 400px; */
}

.login-form form {
  text-align: center;
  max-width:320px;
  width:90%;
  background-color:#ffffff;
  padding:40px;
  border-radius:4px;
  transform:translate(-50%, -50%);
  position:absolute;
  top:50%;
  left:50%;
  color:rgb(0, 0, 0);
  box-shadow:3px 3px 4px rgba(255, 249, 249, 0.2);
}

.login-form form .form-control {
  background:none;
  border:none;
  border-radius:0;
  box-shadow:none;
  outline:none;
  color:inherit;
}

</style>
