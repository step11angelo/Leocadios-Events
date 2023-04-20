import React, { useEffect, useState } from "react";

import { Link } from "react-router-dom";
import "../css/Gallery.css";
import { galleryBanner } from "../assets/images";
import postGallery from "./PostGallery";

const Gallery = () => {
    const [customers, setCustomers] = useState([]);
    useEffect(() => {
        fetch("http://localhost:8000/api/customer")
            .then((response) => response.json())
            .then((data) => setCustomers(data));
    }, []);
    return (
        <>
            <section className="banner">
                <img src={galleryBanner} alt="" />
                <div className="cover"></div>
                <h2>Galleries</h2>
            </section>

            <div className="section-center">
                <h3 className="gallery--heading">Leocadio's Event Weddings</h3>
                <p>
                    Here at Leocadio's, we’ve had the privilege of styling,
                    planning, and coordinating over 80 weddings. We spend time
                    with every one of our couples in the months leading up to
                    their weddings — getting to know the things that make them
                    smile, laugh, and even cry. When the day finally arrives,
                    we’ve grown to care about them as if they were members of
                    our own families and we love reliving wedding days just as
                    much our couples do. We love working with couples that offer
                    a unique, authentic, genuine, and diverse perspective on the
                    celebration of marriage and invite you to take a closer look
                    at some of our most recent weddings below!
                </p>
            </div>

            <div className="albums--container">
                {customers.map((album) => {
                    const { id, name, location, planner, thumbnail } = album;

                    return (
                        <article className="album--card" key={id}>
                            <div className="img--container">
                                <img src={thumbnail} alt="" />
                            </div>
                            <div className="card--info-container">
                                <h4 className="album--title">{name}</h4>

                                <p className="event-location">{location}</p>

                                <p>
                                    Event Planner:{" "}
                                    <span className="event-planner">
                                        {planner}
                                    </span>
                                </p>
                            </div>

                            <Link
                                to={`/gallery/${id}`}
                                className="btn secondary-btn"
                            >
                                View Gallery
                            </Link>
                        </article>
                    );
                })}
            </div>
        </>
    );
};

export default Gallery;
