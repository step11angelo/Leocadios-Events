import React from "react";
import { servicesBanner } from "../assets/images";
import "../css/services.css";
import "../css/index.css";
import { useState, useEffect } from "react";

const Services = () => {
    const [packages, setPackages] = useState([]);
    useEffect(() => {
        fetch("http://localhost:8000/api/package")
            .then((response) => response.json())
            .then((data) => setPackages(data));
    }, []);

    return (
        <>
            <section className="banner">
                <img src={servicesBanner} alt="" />
                <div className="cover"></div>
                <h2>Our Services</h2>
            </section>

            <article className="article-center">
                <h2 className="section--header">What We Offer</h2>

                <p>
                    Leocadio's Event offers planning, styling, coordination and
                    stationary design services for couples who value curated
                    experiences and genuine moments. We work with our clients
                    very closely throughout the planning process. so, it is
                    important for us to work with clients that reverberate with
                    our design aesthetic, our approach to planning, and share
                    our core beliefs on diversity and inclusion. Our ideal
                    clients value having a team of professionals on board to
                    make their wedding planning process smooth and trust our
                    guidance to bring their wedding vision to life.
                </p>
            </article>

            <article className="info--container light-info">
                <h3 className="info-header">Planning</h3>

                <p>
                    Wedding to-do lists can quickly become a mile long. Whether
                    you are someone who loves to tackle a long list of tasks or
                    you prefer to leave that business to the professionals and
                    just show up at your own party, we get it and we’re here for
                    you. And because everyone is different, we approach this
                    process holistically — taking time to get to know who you
                    are, so we truly understand your wedding day vision and can
                    advocate for you effectively. We’ll scout your perfect
                    venue, curate & manage your vendor team, oversee your
                    budget, create a flowing timeline for your full wedding
                    weekend and even mediate when necessary. We are there to
                    advise you through every step of the process and keep you on
                    track, making planning your wedding approachable and
                    enjoyable.
                </p>
            </article>

            <article className="info--container light-info">
                <h3 className="info-header">Styling</h3>

                <p>
                    We know first hand that the world of Instagram can be pretty
                    overwhelming, and how difficult it can be to navigate what
                    you see on blogs and Instagram in search of your own wedding
                    vision. When you do manage to find things that resonate, it
                    can be a struggle to make those styles feel like your own.
                    To make sure we can design a wedding that feels
                    authentically you, we dive in deep and get to know you and
                    your partner on a personal level. We start by creating a
                    custom style guide for your wedding and then pull from our
                    own curated inventory of styling pieces, source additional
                    props & décor, and collaborate with your vendors to bring
                    this style guide to life. The love you share with each other
                    is beautiful, genuine, and yours. We design a wedding to
                    reflect that.
                </p>
            </article>

            <article className="info--container light-info">
                <h3 className="info-header">Coordination</h3>

                <p>
                    You deserve to be present and enjoying yourself to the
                    fullest on your very special wedding day. Through our
                    hands-on approach, we walk through every element of your
                    wedding — reviewing your vendor contracts and cross checking
                    your planning along the way. We act as a guide and advisor
                    throughout the planning process and then three months before
                    your wedding, we begin gathering every last detail you’ve
                    planned and tie up all the loose ends before the big day. We
                    develop an organic timeline, confirm your vendors, attend
                    your final venue walk thru and then orchestrate these
                    details day of, so the wedding can run smoothly for you,
                    your family and your guests. If any problems arise, we
                    approach things proactively. We’re on it before you even
                    know it and we’re always right behind you when you need us
                    most.
                </p>
            </article>

            <h2 className="section--header packages-category">OUR PACKAGES</h2>

            <div className="packages--container">
                {packages.map((item) => {
                    const {
                        id,
                        packageName,
                        paxOption1,
                        paxOption2,
                        courses,
                        styling1,
                        styling2,
                        styling3,
                        styling4,
                        styling5,
                        freebies1,
                        freebies2,
                        freebies3,
                    } = item;

                    return (
                        <article className="package-card" key={id}>
                            <h4 className="package-name">{packageName}</h4>
                            <h3 className="pax-count">{paxOption1}</h3>
                            <h3 className="pax-count">{paxOption2}</h3>

                            <ul>
                                <h4 className="items-header">Catering:</h4>
                                <li className="package-item">
                                    {courses} Courses
                                </li>
                            </ul>

                            <ul>
                                <h4 className="items-header">Styling:</h4>
                                <li className="package-item">{styling1}</li>
                                <li className="package-item">{styling2}</li>
                                <li className="package-item">{styling3}</li>
                                <li className="package-item">{styling4}</li>
                                <li className="package-item">{styling5}</li>
                            </ul>

                            <ul>
                                <h4 className="items-header">Freebies:</h4>
                                <li className="package-item">{freebies1}</li>
                                <li className="package-item">{freebies2}</li>
                                <li className="package-item">{freebies3}</li>
                            </ul>
                        </article>
                    );
                })}
            </div>
        </>
    );
};

export default Services;
