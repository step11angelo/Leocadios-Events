import React, { useEffect, useState } from "react";
import { useLocation } from "react-router-dom";
import "../../src/css/PhotoAlbum.css";

const PostGallery = () => {
    const [album, setAlbum] = useState([]);
    const location = useLocation();
    const pathName = location.pathname.split("/");
    console.log(pathName[2]);

    useEffect(() => {
        const galleryApiUrl = `http://localhost:8000/api/customer/${pathName[2]}`;
        fetch(galleryApiUrl)
            .then((response) => response.json())
            .then((data) => setAlbum(data));
    }, []);

    // const { name, galleries } = album;

    return (
        <>
            <main>
                <h2 className="photo-album--header">{album.name}</h2>
                <div className="photo-album--container">
                    {album?.galleries &&
                        album.galleries.map((photo) => {
                            const { id, image_url, customer_id } = photo;

                            return (
                                <div className="each-photo--container" key={id}>
                                    <img src={image_url} alt="" />
                                </div>
                            );
                        })}
                </div>
            </main>
        </>
    );
};

export default PostGallery;
