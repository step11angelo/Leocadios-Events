import { Navigate } from "react-router-dom";
import { useStateContext } from "../contexts/ContextProvider";
import "../css/index.css";
import "../css/Login.css";
import { logo } from "../assets/images";

export default function Login() {
    const onSubmit = (ev) => {
        ev.preventDefault();
    };

    return (
        <>
            <main className="login--background">
                <h1 className="login--heading">
                    For Authorized Personnels Only
                </h1>
                <div className="login-form--container">
                    <form className="login-form" onSubmit={onSubmit}>
                        <div className="center dark logo-container ">
                            <img src={logo} alt="" />
                            <h3>
                                <span>Leocadio's</span>
                            </h3>
                        </div>
                        <input type="text" placeholder="Username" />
                        <input type="password" placeholder="Password" />
                        <button className="btn primary-btn">Submit</button>
                    </form>
                </div>
            </main>
        </>
    );
}
