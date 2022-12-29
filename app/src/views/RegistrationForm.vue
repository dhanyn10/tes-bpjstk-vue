<template>
  <div class="home">
    <b-container fluid>
      <b-row>
        <b-col md="4" offset-md="4">
          <b-card header="Register Form">
            <b-card-text>
              <b-form method="post">
                <b-form-group>
                  <b-form-input
                    type="text"
                    placeholder="nama"
                    v-model="nama"
                    required
                  ></b-form-input>
                </b-form-group>
                <b-form-group>
                  <b-form-input
                    type="text"
                    v-model="jk"
                    placeholder="jenis kelamin"
                    required
                  ></b-form-input>
                </b-form-group>
                <b-form-group>
                  <b-form-input
                    type="text"
                    v-model="tanggalLahir"
                    placeholder="Tanggal Lahir"
                    required
                  ></b-form-input>
                </b-form-group>
                <b-form-group label="Freshgraduated?">
                  <b-form-radio v-model="freshgrad" name="some-radios" value="A">Yes</b-form-radio>
                  <b-form-radio v-model="freshgrad" name="some-radios" value="B">No</b-form-radio>
                </b-form-group>
                <b-form-group>
                  <b-form-input
                    type="text"
                    v-model="username"
                    placeholder="username"
                    required
                  ></b-form-input>            
                </b-form-group>
                <b-form-group>
                  <b-form-input
                    type="password"
                    v-model="password"
                    placeholder="password"
                    required
                  ></b-form-input>            
                </b-form-group>
                <b-form-group>
                  <b-form-input
                    type="password"
                    v-model="re_password"
                    placeholder="Retype Password"
                    required
                  ></b-form-input>            
                </b-form-group>
                <b-form-group>
                  <b-button variant="primary">Register</b-button>
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

Vue.component('b-container', BContainer)
Vue.use(FormPlugin)

export default {
  name: 'RegistrationForm',
  data() {
    return {
      nama: '',
      jk: '',
      tanggalLahir: '',
      freshgrad: '',
      username: '',
      password: '',
      re_password: ''
    }
  },
  methods: {}
}
</script>
