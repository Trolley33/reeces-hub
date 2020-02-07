import Homepage from "../components/Homepage";
import ProjectViewer from "../components/projects/ProjectViewer";

import Error404 from "../components/errors/404.vue";

export default [
  { path: "/", name: "home", component: Homepage },
  { path: "/project/:id", name: "project-viewer", component: ProjectViewer },

  { path: "*", component: Error404 }
];
