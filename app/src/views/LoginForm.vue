<template>
  <div class="home">
    <b-container fluid>
      <b-row>
        <b-col md="4" offset-md="4">
          <b-card header="Register Form">
            <b-card-text>
              <b-form @submit="kirim">
                <b-form-group>
                  <b-form-input type="text" v-model="username" placeholder="username" required></b-form-input>            
                </b-form-group>
                <b-form-group>
                  <b-form-input type="password" v-model="password" placeholder="password" required></b-form-input>            
                </b-form-group>
                <b-form-group>
                  <b-button type="submit" variant="primary">Login</b-button>
                </b-form-group>
              </b-form>
            </b-card-text>
          </b-card>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
import Vue from 'vue';
import { BContainer, FormPlugin } from 'bootstrap-vue';
import axios from 'axios'

Vue.component('b-container', BContainer)
Vue.use(FormPlugin)

export default {
  name: 'LoginForm',
  data() {
    return {
      username: '',
      password: '',
    }
  },
  methods: {
    kirim (e) {
      e.preventDefault()
      let sendForm = true
      // validasi username
      if(this.username.length == 0) {
        alert("username tidak boleh kosong")
        sendForm = false
      }
      // validasi password
      if(this.password.length == 0) {
        alert('password tidak boleh kosong')
        sendForm = false
      }
      if(sendForm) {
        axios.post("http://localhost:8000/login", {
            username: this.username,
            password: this.password
          }
        ).then(response => {
          let data = response.data
          let message = data.message
          if(message == "logged in") {
            this.$session.start()
            this.$session.set('username', this.username)
            this.$router.push('/home')
          }
          else {
            alert(message)
          }
        })
      }
    }
  }
}
</script>
