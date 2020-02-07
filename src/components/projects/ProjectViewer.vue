<template>
  <div>
    <v-container v-if="project === null">
      This doesn't exist I'm afraid!
    </v-container>
    <v-container v-else>
      <v-row>
        <v-col sm="12" md="10">
          <v-card color="grey darken-3">
            <v-card-title class="display-2 font-weight-medium primary">
              {{ project.title }}
            </v-card-title>
            <v-card-subtitle class="primary pb-1">
              {{ project.author_name }}
              <span class="float-right">
                {{ humanDate(project.created_at) }}
              </span>
            </v-card-subtitle>
            <v-card-text class="mt-3">
              {{ project.body }}
            </v-card-text>
          </v-card>
        </v-col>

        <v-col sm="12" md="2">
          <v-card color="grey darken-3">
            <v-card-title class="primary pa-2">
              Related Links
            </v-card-title>
            <v-list nav v-for="(obj, index) in related_links" :key="index">
              <v-list-item link :to="obj.path">
                <v-list-item-content>
                  <v-list-item-title>
                    {{ obj.title }}
                  </v-list-item-title>
                  <v-list-item-subtitle>
                    {{ obj.author_name }}
                    <span class="float-right">
                      {{ humanDate(obj.created_at) }}
                    </span>
                  </v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>
            </v-list>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script>
import axios from "axios";
import moment from "moment";

export default {
  name: "project-viewer",
  data() {
    return {
      project: {
        id: 0,
        author_id: 0,
        author_name: "Author",
        title: "",
        body: "",
        created_at: null
      },
      related_links: []
    };
  },
  created() {
    this.fetchProjectData(this.$route.params.id);
    this.fetchRelatedLinks();
  },
  watch: {
    $route(to) {
      this.fetchProjectData(to.params.id);
    }
  },
  methods: {
    humanDate(date) {
      return moment(date).format("Do MMM YYYY");
    },
    fetchProjectData(id) {
      axios
        .get("http://reecetrolley.com/api/project.php", {
          params: {
            id: id
          }
        })
        .then(res => {
          this.project = { ...res.data, author_name: "Author" };
        })
        .catch(err => {
          console.error(err);
        });
    },
    fetchRelatedLinks() {
      this.related_links = [
        {
          title: "Reece's Hub",
          author_name: "Person 1",
          path: "/project/1",
          created_at: "2019/12/01"
        },
        {
          title: "Cookbook.co.uk",
          author_name: "Person 2",
          path: "/project/2",
          created_at: "2020/02/1"
        }
      ];
    }
  }
};
</script>
