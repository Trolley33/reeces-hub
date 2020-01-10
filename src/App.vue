<template>
  <v-app>
    <v-app-bar
      app
      color="primary"
      dark
      clipped-right
    >
      <router-link
        :to="{path: '/'}"
        tag="div"
        class="d-flex align-center main-logo pa-1"
      >
        <v-img
          alt="Main Logo"
          class="shrink mr-2"
          contain
          src="./assets/logo.png"
          transition="scale-transition"
          width="40"
        />

        <span class="headline mr-2 white--text" >Reece's Hub</span>
      </router-link>

      <v-spacer></v-spacer>
      <v-menu offset-y
        v-for="(menuitem, index) in menus"
        :key="index"
      >
        <template v-slot:activator="{ on }">
          <v-btn text v-on="on">
            {{ menuitem.text }}
          </v-btn>
        </template>

        <v-list>
          <v-list-item
            v-for="(subitem, subitem_index) in menuitem.subitems"
            :key="subitem_index"
            @click="$router.push({path: subitem.url})"
          >
            <v-list-item-title>{{ subitem.text }}</v-list-item-title>
          </v-list-item>
        </v-list>
      </v-menu>
    </v-app-bar>

    <v-content>
      <router-view></router-view>
    </v-content>
  </v-app>
</template>

<script>
export default {
  name: 'App',

  data: () => ({
    menus: [
      {
        text: "Projects",
        subitems: [
          {text: "Reece's Hub", url: "/project/1"},
          {text: "Cook-book.co.uk", url: "/project/2"},
        ]
      },
      {

      }
    ]
  }),

  methods: {
  }
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

router-link {
  cursor: pointer;
}

</style>