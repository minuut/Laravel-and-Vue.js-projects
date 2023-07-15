import HomePage from "../pages/HomePage.vue";
import TasksPage from "../pages/TasksPage.vue";
import LoginPage from "../pages/LoginPage.vue";
import RegisterPage from "../pages/RegisterPage.vue";
import SummaryPage from "../pages/SummaryPage.vue";
import NotFound from "../pages/errors/NotFound.vue";


const routes = [
    {
        path: "/",
        component: HomePage,
        name: "home",
    },
    {
        path: "/tasks",
        component: TasksPage,
        name: "tasks",
        // meta: {
        //     auth: true,
        // }
    },
    {
        path: "/login",
        component: LoginPage,
        name: "login",
    },
    {
        path: "/register",
        component: RegisterPage,
        name: "register",
    },
    {
        path: "/summary",
        component: SummaryPage,
        name: "summary",
         // meta: {
        //     auth: true,
        // }
    },
    {
        path: "/:notFound(.*)",
        component: NotFound,
        name: "404",
    }
];

export default routes;