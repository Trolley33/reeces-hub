<template>
  <div>
    <v-container
      v-if="project === null"
    >
      This doesn't exist I'm afraid!
    </v-container>
    <v-container
      v-else
    >
      {{ project }}
    </v-container>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: "project-viewer",
  data() {
    return {
      project: {
        id: 0
      }
    }
  },
  created() {
    this.fetchProjectData(this.$route.params.id);
  },
  watch: {
    $route(to) {
      this.fetchProjectData(to.params.id);
    }
  },
  methods: {
    fetchProjectData(id) {
      axios.get('http://reecetrolley.com/api/project.php', {
        params: {
          id: id
        }
      })
      .then(res => {
        this.project = res.data;
      })
      .catch(err => {
        console.error(err);
      });
    }
  }
}
</script>