import React from "react";
import { Navigate } from "react-router-dom";
import { useStateContext } from "../contexts/ContextProvider";

const Dashboard = () => {
    const { user, token } = useStateContext();

    if (!token) {
        return <Navigate to={"/login"} />;
    }
    return (
        <div>
            //Admin Dashboard //will only appear if succesful admin login on
            Login.jsx //need data from Services.jsx in database //note from mam
            Dia, ung calendar of activities mag sync sya dito rin sa page na to
        </div>
    );
};

export default Dashboard;
