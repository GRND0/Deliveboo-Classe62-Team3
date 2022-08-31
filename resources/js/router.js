import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from "./pages/Home.vue";
import Blog from "./pages/Blog.vue";
import SinglePost from "./pages/SinglePost.vue"; // ricorda di riavviare npm run watch se non vedi niente
import About from "./pages/About.vue";
import NotFound from "./pages/NotFound.vue";
 
const router = new VueRouter({
  mode: "history",
  routes: [
    {
      path: "/",
      name: "home",
      component: Home
    },
    {
      path: "/blog",
      name: "blog",
      component: Blog
    },
    {
      path: "/blog/:slug",
      name: "single-post",
      component: SinglePost
    },
    {
      path: "/about",
      name: "about",
      component: About
    },
    {
      path: "/*",
      name: "not-found",
      component: NotFound
    }
  ]
});
 
export default router;