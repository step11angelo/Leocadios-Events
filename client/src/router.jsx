import { createBrowserRouter } from "react-router-dom";
import Layout from "../src/pages/Layout";
import Home from "../src/pages/Home";
import About from "../src/pages/About";
import Gallery from "../src/pages/Gallery";
import Services from "../src/pages/Services";
import Connect from "../src/pages/Connect";
import PostGallery from "../../client/src/pages/PostGallery";
import Login from "../src/pages/Login";
import NotFound from "./pages/NotFound";
import Dashboard from "./pages/Dashboard";
import GuestLayout from "./pages/GuestLayout";

const router = createBrowserRouter([
    {
        path: "/",
        element: <Layout />,
        children: [
            {
                path: "/",
                element: <Home />,
            },
            {
                path: "/about",
                element: <About />,
            },
            {
                path: "/gallery",
                element: <Gallery />,
            },
            {
                path: `/gallery/:id`,
                element: <PostGallery />,
            },
            {
                path: "/services",
                element: <Services />,
            },
            {
                path: "/connect",
                element: <Connect />,
            },
            {
                path: "*",
                element: <NotFound />,
            },
        ],
    },
    {
        path: "/dashboard",
        element: <Dashboard />,
    },
    {
        path: "/login",
        element: <GuestLayout />,
        children: [
            {
                path: "/login",
                element: <Login />,
            },
        ],
    },
]);

export default router;
