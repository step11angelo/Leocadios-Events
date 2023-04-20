import React from "react";
import { Outlet, Navigate } from "react-router-dom";
import { useStateContext } from "../contexts/ContextProvider";

const GuestLayout = () => {
    const { user, token } = useStateContext();

    if (token) {
        return <Navigate to={"/dashboard"} />;
    }
    return <Outlet />;
};

export default GuestLayout;
