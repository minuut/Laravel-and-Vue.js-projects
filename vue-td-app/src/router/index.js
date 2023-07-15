import { createRouter, createWebHistory } from "vue-router";
import routes from "./routes";

const router = createRouter({
  routes: routes,
  history: createWebHistory(),
});

router.beforeEach((to, from) => {

    // auth handler

    
//   if (to.path === "/tasks") {
//     return {
//       name: "login",
//       query: {
//         redirect: to.fullPath,
//       },
//     };
//   }
});

export default router;
