<template>
  <v-container>
    <v-form @submit.prevent="login">
      <v-text-field label="Email" v-model="form.email" type="email" required></v-text-field>

      <v-text-field label="Password" v-model="form.password" type="password" required></v-text-field>

      <v-btn type="submit" color="green">Login</v-btn>
    </v-form>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      form: {
        email: null,
        password: null
      }
    };
  },
  methods: {
    login() {
      axios
        .post("/api/auth/login", this.form)
        .then(res => console.log(res.data))
        .catch(error => console.log(error.response.data));
    }
  }
};
</script>

<style>
</style>