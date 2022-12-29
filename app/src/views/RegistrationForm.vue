<template>
  <div class="home">
    <b-container fluid>
      <b-row>
        <b-col md="4" offset-md="4">
          <b-card header="Register Form">
            <b-card-text>
              <b-form>
                <b-form-group>
                  <b-form-input type="text" placeholder="nama" v-model="nama" required></b-form-input>
                </b-form-group>
                <b-form-group>
                  <b-form-select v-model="jk_selected" :options="jk_options" required></b-form-select>
                </b-form-group>
                <b-form-group>
                  <b-form-input type="date" v-model="tanggalLahir" placeholder="Tanggal Lahir" required></b-form-input>
                </b-form-group>
                <b-form-group label="Freshgraduated?">
                  <b-form-radio v-model="freshgrad" value="1">Yes</b-form-radio>
                  <b-form-radio v-model="freshgrad" value="0">No</b-form-radio>
                </b-form-group>
                <b-form-group>
                  <b-form-input type="text" v-model="username" placeholder="username" required></b-form-input>            
                </b-form-group>
                <b-form-group>
                  <b-form-input type="password" v-model="password" placeholder="password" required></b-form-input>            
                </b-form-group>
                <b-form-group>
                  <b-form-input type="password" v-model="re_password" placeholder="Retype Password" required></b-form-input>            
                </b-form-group>
                <b-form-group>
                  <b-button type="submit" variant="primary" @click="kirim">Register</b-button>
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
import moment from 'moment'

Vue.component('b-container', BContainer)
Vue.use(FormPlugin)

export default {
  name: 'RegistrationForm',
  data() {
    return {
      nama: '',
      jk_selected: null,
      jk_options: [
        {value: null,text: "pilih jenis kelamin"},
        {value: 1,text: "Laki-laki"},
        {value: 0,text: "Perempuan"}
      ],
      tanggalLahir: '',
      freshgrad: 0,
      username: '',
      password: '',
      re_password: ''
    }
  },
  methods: {
    kirim () {
      // validasi nama
      if(this.nama.length < 20) {
        alert('nama terlalu pendek')
      } else if(this.nama.length > 30) {
        alert('nama terlalu panjang')
      }
      // validasi jenis kelamin
      if(this.jk_selected == null) {
        alert('pilih jenis kelamin')
      }
      // validasi umur
      let dateAwal = moment().format('L');
      let dateAkhir = moment(this.tanggalLahir).format('L')
      dateAwal = moment(dateAwal)
      dateAkhir = moment(dateAkhir)
      let selisihTahun = dateAwal.diff(dateAkhir, 'years')
      if(selisihTahun < 20) {
        alert('dibawah umur')
      }
    }
  }
}
</script>
