<template>
  <div>
    <v-toolbar>
      <v-toolbar-title>AwiForum</v-toolbar-title>

      <v-spacer></v-spacer>

      <div class="hidden-sm-and-down">
        <router-link to="/forum">
          <v-btn text>Forum</v-btn>
        </router-link>

        <router-link to="/ask_question">
          <v-btn text>Ask Question</v-btn>
        </router-link>

        <router-link to="category">
          <v-btn text>Category</v-btn>
        </router-link>

        <router-link to="/login">
          <v-btn text>Login</v-btn>
        </router-link>
      </div>

      <template v-if="$vuetify.breakpoint.smAndUp">
        <v-btn icon>
          <v-icon>mdi-export-variant</v-icon>
        </v-btn>
        <v-btn icon>
          <v-icon>mdi-delete-circle</v-icon>
        </v-btn>
        <v-btn icon>
          <v-icon>mdi-plus-circle</v-icon>
        </v-btn>
      </template>
    </v-toolbar>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>