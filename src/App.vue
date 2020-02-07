<template>
  <v-app>
    <v-app-bar app color="primary" dark clipped-right>
      <router-link
        :to="{ path: '/' }"
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

        <span class="headline mr-2 white--text">Reece's Hub</span>
      </router-link>

      <v-spacer></v-spacer>
      <v-menu offset-y>
        <template v-slot:activator="{ on }">
          <v-btn text v-on="on">
            Recent
          </v-btn>
        </template>

        <v-list>
          <v-list-item
            v-for="(subitem, subitem_index) in recent_projects"
            :key="subitem_index"
            @click="$router.push({ path: subitem.url })"
          >
            <v-list-item-title>{{ subitem.title }}</v-list-item-title>
          </v-list-item>
        </v-list>
      </v-menu>

      <router-link :to="{ path: '/projects' }" tag="div">
        <v-btn text>
          All
        </v-btn>
      </router-link>
    </v-app-bar>

    <v-content>
      <router-view v-bind="current_props"></router-view>
    </v-content>
  </v-app>
</template>

<script>
import axios from "axios";

export default {
  name: "App",

  data: () => ({
    recent_projects: []
  }),
  created() {
    this.fetchProjectsData();
  },
  computed: {
    current_props() {
      if (this.$route.name === "home")
        return { recent_projects: this.recent_projects };

      return {};
    }
  },
  methods: {
    fetchProjectsData() {
      axios
        .get("http://reecetrolley.com/api/project.php")
        .then(res => {
          const menu_items = res.data.map(project => {
            return {
              ...project,
              url: `/project/${project.id}`
            };
          });
          menu_items.sort((a, b) => {
            const d1 = new Date(a.created_at);
            const d2 = new Date(b.created_at);
            return d2.getTime() - d1.getTime();
          });

          if (menu_items.length > 5) menu_items.length = 5;

          this.recent_projects = menu_items;
        })
        .catch(err => {
          console.error(err);
        });
    }
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
