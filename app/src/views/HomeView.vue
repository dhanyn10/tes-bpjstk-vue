<template>
  <div>
    <p>Welcome Home <strong>{{ username }} !</strong></p>
    <b-button variant="outline-danger" @click="logout">Logout</b-button>
  </div>
</template>
<script>
import Vue from 'vue';
import VueSession from 'vue-session'

Vue.use(VueSession)
export default {
  name: "HomeView",
  data () {
    return {
      username: null
    }
  },
  methods: {
    loaduser () {
      if(this.$session.exists()) {
        let username = this.$session.get('username')
        this.username = username
      } else {
        this.$router.push('/login')
      }
    },
    logout () {
      this.$session.destroy()
      this.$router.push('/login')
    }
  },
  mounted () {
    this.loaduser()
  }
}
</script>