<template>
  <div>
    <v-container>
      <v-parallax
        dark
        src="../assets/homescreen.png"
        height="400"
      >
        <v-row
          align="center"
          justify="center"
        >
          <v-col class="text-center" cols="12">
            <h1 class="display-3 font-weight-medium mb-4">Reece Trolley</h1>
            <h4 class="display-1">Aspiring developer and student.</h4>
          </v-col>
        </v-row>
      </v-parallax>
    </v-container>
    <v-container>
      <v-card 
        dark
        color="primary"
      >
        <v-card-title>
          Recent Projects
        </v-card-title>
        <v-carousel>
          <v-carousel-item
            style="cursor:pointer;"
            v-for="(project, index) in recent_projects"
            :key="index"
            @click="() => $router.push({path: project.url})"
          >
            <v-img
              position="top center"
              :src='`https://picsum.photos/1280/720?random=${index}`'
              height="100%"
            >
              <v-row
                class="fill-height"
                align="center"
                justify="center"
              >
                <div class="display-3 font-weight-medium text-uppercase">{{project.title}}</div>
              </v-row>
            </v-img>
          </v-carousel-item>
        </v-carousel>
      </v-card>
    </v-container>
  </div>
</template>

<script>
export default {
  props: ["recent_projects"],

  data() {
    return {}
  },
}
</script>

<style scoped>
#header-box {
  border-radius: 5px;
  text-align: center
}
</style>
