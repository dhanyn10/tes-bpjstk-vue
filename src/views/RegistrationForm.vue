<template>
  <div class="home">
    <b-container fluid>
      <b-row>
        <b-col md="4" offset-md="4">
          <b-card header="Register Form">
            <b-card-text>
              <b-form>
                <b-form-group>
                  <b-form-input
                    type="text"
                    placeholder="nama"
                    required
                  ></b-form-input>
                </b-form-group>
                <b-form-group>
                  <b-form-input
                    type="text"
                    placeholder="jenis kelamin"
                    required
                  ></b-form-input>
                </b-form-group>
                <b-form-group>
                  <b-form-input
                    type="text"
                    placeholder="Tanggal Lahir"
                    required
                  ></b-form-input>            
                </b-form-group>
                <b-form-group label="Individual radios">
                  <b-form-radio v-model="selected" name="some-radios" value="A">Option A</b-form-radio>
                  <b-form-radio v-model="selected" name="some-radios" value="B">Option B</b-form-radio>
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
      selected: ''
    }
  }
}
</script>
