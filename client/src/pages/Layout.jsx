import React, { useState, useEffect } from "react";
import { useLocation, Outlet } from "react-router-dom";
import Footer from "../components/Footer";
import Header from "../components/Header";
import Sidebar from "../components/Sidebar";

const Layout = () => {
    const [open, setOpen] = useState(false);
    const { pathname } = useLocation();

    useEffect(() => {
        window.scrollTo(0, 0);
    }, [pathname]);

    const handleClick = () => {
        setOpen(!open);
    };
    return (
        <>
            <Header click={handleClick} />
            <Sidebar open={open} id="Sidebar" />
            <Outlet />
            <Footer />
        </>
    );
};

export default Layout;
