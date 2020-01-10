<template>
  <v-app>
    <v-app-bar
      app
      color="primary"
      dark
      clipped-right
    >
      <div class="d-flex align-center main-logo pa-1">
        <v-img
          alt="Main Logo"
          class="shrink mr-2"
          contain
          src="./assets/logo.png"
          transition="scale-transition"
          width="40"
        />

        <span class="headline mr-2 white--text" >Reece's Hub</span>
      </div>

      <v-spacer></v-spacer>
      <v-menu offset-y>
        <template v-slot:activator="{ on }">
          <v-btn text v-on="on">
            Projects
          </v-btn>
        </template>

        <v-list>
          <v-list-item
            v-for="(item, index) in ['Reece\'s Hub', 'Cook-book.co.uk']"
            :key="index"
            @click="console.log('clicked' + item)"
          >
            <v-list-item-title>{{ item }}</v-list-item-title>
          </v-list-item>
        </v-list>
      </v-menu>
    </v-app-bar>

    <v-content>
      <Homepage/>
    </v-content>
  </v-app>
</template>

<script>
import Homepage from './components/Homepage';

export default {
  name: 'App',

  components: {
    Homepage,
  },

  data: () => ({
    drawer: false
  }),
};
</script>

<style scoped>
.main-logo {
  cursor: pointer;
  border-radius: 5px;
}

.main-logo:hover {
  background-color: rgba(255, 255, 255, 0.2);
  
}

</style>