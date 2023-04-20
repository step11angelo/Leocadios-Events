import React, { useEffect, useRef, useState } from "react";
// import { useState } from "react";
import { Link } from "react-router-dom";

import "../css/Sidebar.css";
import {
  FaTimes,
  FaHome,
  FaExclamationCircle,
  FaImage,
  FaBars,
  FaBuffer,
  FaLink,
  FaFacebookSquare,
  FaInstagram,
  FaTiktok,
  FaTwitter,
  FaYoutube,
} from "react-icons/fa";

const Sidebar = ({ open, setOpen }) => {
  const [isOn, setIsOn] = useState(false);
  const sidebarRef = useRef(null);

  useEffect(() => {
    setIsOn(open);
  }, [open]);

  useEffect(() => {
    const handleClick = (e) => {
      if (isOn && !sidebarRef.current.contains(e.target)) {
        setIsOn(false);
        setOpen(false);
      }
    };
    document.addEventListener("click", handleClick);
    return () => {
      document.removeEventListener("click", handleClick);
    };
  }, [isOn, setOpen]);

  const handleClickLink = () => {
    setIsOn(false);
    setOpen(false);
  };

  return (
    <nav ref={sidebarRef} className={isOn ? "sidebar show-sidebar" : "sidebar"}>
      <ul className="links">
        <li>
          <Link to={"/"} onClick={handleClickLink}>
            <FaHome className="icon" />
            Home
          </Link>
        </li>
        <li>
          <Link to={"/about"} onClick={handleClickLink}>
            <FaExclamationCircle className="icon" />
            About
          </Link>
        </li>
        <li>
          <Link to={"/gallery"} onClick={handleClickLink}>
            <FaImage className="icon" />
            Gallery
          </Link>
        </li>
        <li>
          <Link to={"/services"} onClick={handleClickLink}>
            <FaBuffer className="icon" />
            Services
          </Link>
        </li>
        <li>
          <Link to={"/connect"} onClick={handleClickLink}>
            <FaLink className="icon" />
            Connect
          </Link>
        </li>
      </ul>
      <div className="socials">
        <p>Visit Us:</p>
        <div className="socials-container">
          <a target="_blank" href="https://www.facebook.com/">
            <FaFacebookSquare className="icon" />
          </a>
          <a target="_blank" href="https://www.instagram.com/">
            <FaInstagram className="icon" />
          </a>
          <a target="_blank" href="https://www.tiktok.com/">
            <FaTiktok className="icon" />
          </a>
          <a target="_blank" href="https://twitter.com/">
            <FaTwitter className="icon" />
          </a>
          <a target="_blank" href="https://www.youtube.com/">
            <FaYoutube className="icon" />
          </a>
        </div>
      </div>
      <button className="exit-btn" onClick={() => setOpen(false)}>
        <FaTimes className="exit sidebar-icons" />
      </button>
    </nav>
  );
};

export default Sidebar;
