import React, { useState } from "react";
import { Link, NavLink } from "react-router-dom";
import "../css/Header.css";
import { FaBars } from "react-icons/fa";
import { logo } from "../assets/images";
import Sidebar from "./Sidebar";

const Header = () => {
  const [isSidebarOpen, setIsSidebarOpen] = useState(false);

  const handleSidebarToggle = () => {
    setIsSidebarOpen(!isSidebarOpen);
  };

  const handlePageClick = () => {
    if (isSidebarOpen) {
      setIsSidebarOpen(false);
    }
  };

  return (
    <header onClick={handlePageClick}>
      <Link to={"/"}>
        <div className="logo-container">
          <img src={logo} alt="" />
          <h3>
            <span>Leocadio's</span> <br></br> Event
          </h3>
        </div>
      </Link>
      <button className="nav-toggle" onClick={handleSidebarToggle}>
        <FaBars id="menu-icon" />
      </button>

      <Sidebar open={isSidebarOpen} />
      
      <nav className="links-container">
        <ul className="links">
          <li>
            <NavLink to={"/"}>Home</NavLink>
          </li>
          <li>
            <Link to={"/about"}>About</Link>
          </li>
          <li>
            <Link to={"/gallery"}>Gallery</Link>
          </li>
          <li>
            <Link to={"/services"}>Services</Link>
          </li>
          <li>
            <Link to={"/connect"}>Connect</Link>
          </li>
        </ul>
      </nav>
    </header>
  );
};

export default Header;
