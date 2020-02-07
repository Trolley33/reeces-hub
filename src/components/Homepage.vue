<template>
  <div>
    <v-container>
      <v-parallax dark src="../assets/homescreen.png" height="400">
        <v-row align="center" justify="center">
          <v-col class="text-center" cols="12">
            <h1 class="display-3 font-weight-medium mb-4">Reece Trolley</h1>
            <h4 class="display-1">Aspiring developer and student.</h4>
          </v-col>
        </v-row>
      </v-parallax>
    </v-container>
    <v-container>
      <v-card dark color="primary">
        <v-card-title>
          Recent Projects
        </v-card-title>
        <v-carousel show-arrows show-arrows-on-hover>
          <v-carousel-item
            style="cursor:pointer;"
            v-for="(project, index) in recent_projects"
            :key="index"
            @click="() => $router.push({ path: project.url })"
          >
            <v-img
              position="top center"
              :src="`https://picsum.photos/1280/720?random=${index}`"
              height="100%"
            >
              <v-row class="fill-height" align="center" justify="center">
                <v-col
                  cols="12"
                  class="display-2 font-weight-medium text-uppercase text-center"
                >
                  {{ project.title }}
                </v-col>
              </v-row>
            </v-img>
          </v-carousel-item>
        </v-carousel>
      </v-card>
    </v-container>

    <v-container>
      <v-card dark color="grey darken-4">
        <v-card-title class="pink">
          Education
        </v-card-title>
        <v-row class="fill-height ma-1">
          <v-col
            :cols="12"
            :sm="12"
            :md="6"
            :xl="4"
            v-for="(card, index) in education"
            :key="index"
          >
            <v-hover v-slot:default="{ hover }">
              <v-card
                height="100%"
                elevation="3"
                dark
                :class="[
                  { 'grey darken-3': !hover },
                  { 'grey darken-2': hover }
                ]"
              >
                <v-card-title>
                  {{ card.title }}
                </v-card-title>
                <v-card-subtitle>
                  {{ card.subtitle }}
                </v-card-subtitle>
                <v-card-text>
                  <p>
                    {{ card.body }}
                  </p>
                </v-card-text>
              </v-card>
            </v-hover>
          </v-col>
        </v-row>
      </v-card>
    </v-container>
  </div>
</template>

<script>
export default {
  props: ["recent_projects"],

  data() {
    return {
      education: [
        {
          title: "Loughborough University - Bsci Computer Science",
          subtitle: "2017 - Present",
          body:
            "Studying at Loughborough University was a very enjoyable experience. It allowed me to further develop my programming skills by undertaking coursework and team projects, as well as learn the more theoretical side of Computer Science."
        },
        {
          title: "Outwood Post 16 Centre - A Levels",
          subtitle: "2015 - 2017",
          body: "Example text"
        },
        {
          title: "Example 3",
          subtitle: "Example",
          body: "Example text"
        },
        {
          title: "Example 4",
          subtitle: "Example",
          body: "Example text"
        }
      ]
    };
  }
};
</script>

<style scoped>
#header-box {
  border-radius: 5px;
  text-align: center;
}
</style>
