import { useState } from "react";
import router from "./router";
import { RouterProvider } from "react-router-dom";
import "./css/App.css";
import { ContextProvider } from "./contexts/ContextProvider";

function App() {
    return (
        <ContextProvider>
            <RouterProvider router={router} />
        </ContextProvider>
    );
}

export default App;
