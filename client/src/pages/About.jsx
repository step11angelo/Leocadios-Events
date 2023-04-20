import React, { useEffect, useState } from "react";
import "../css/about.css";
import { aboutBanner, aboutTeamImg } from "../assets/images";

const About = () => {
    const [questions, setQuestions] = useState([]);
    useEffect(() => {
        fetch("http://localhost:8000/api/questions")
            .then((response) => response.json())
            .then((data) => setQuestions(data));
    }, []);
    return (
        <>
            <section className="banner">
                <img src={aboutBanner} alt="" />
                <div className="cover"></div>
                <h2>About Leocadio's Event</h2>
            </section>

            <article className="article-center">
                <h2 className="section--header">Who we are</h2>

                <p>
                    Leocadio's Event is a wedding planning firm based in Metro
                    Manila, specializing in full service planning and design for
                    modern couples. Started in 2015 by Owner Dia Leocadio,
                    Leocadio's Event has grown to include additional full-time
                    planners and a talented team of wedding coordinators who
                    plan weddings throughout the Metro Manila area and beyond.
                    Meet the Clover team below!
                </p>

                <p>
                    Everything about a wedding is personal. We understand that a
                    wedding is an investment, but more importantly it’s a
                    celebration between people who have found each other and
                    have chosen to share a life together. Because of this, we
                    feel that taking a hands on, holistic, and genuine approach
                    to the wedding planning process is essential. We get to know
                    our clients and treat them like family, so we can truly
                    bring their wedding visions to life.
                </p>
            </article>

            <article className="article-center">
                <h2 className="section--header">What we stand for</h2>

                <p>
                    We, at Leocadio's Event, believes in love in all its forms
                    and stand against discrimination based on race, age, color,
                    ability, ethnicity, religion, sexual orientation, gender
                    identity or gender expression. Whoever you are and whomever
                    you love, we would be honored to help bring your wedding
                    vision to life. We are committed to offering a welcoming and
                    inclusive environment and providing services for all
                    clients. Bottom line, we love love!
                </p>
            </article>

            <article className="article-center">
                <h2 className="section--header">MEET OUR TEAM</h2>

                <p>
                    We have an amazing team of day of coordinators who join us
                    on wedding days. They are our extra sets of hands that allow
                    us to be anywhere and everywhere at your event and help us
                    make sure the day runs smoothly and joyful. Some of these
                    team members have been with us from the very beginning and
                    we ensure anyone who joins our team gives our couples the
                    same level of care and attention that we do.
                </p>
                <div className="team_img--container">
                    <img src={aboutTeamImg} alt="" />
                </div>
            </article>

            <article className="info--container">
                <h3 className="info-header">Dia Leocadio</h3>
                <h5>SHE/HER</h5>
                <h5>OWNER + CREATIVE DIRECTOR</h5>

                <p>
                    Dia was actually Leocadio's first client ever! Luckily for
                    us, shortly after getting married, she joined in Leocadio's
                    team and brought all of her grace, energy, and enthusiasm on
                    board. When you meet Dia, you’ll find yourself smiling
                    almost immediately, feeling like you’ve just reunited with
                    an old friend. We like to give credit this to the fact that
                    Dia grew up in Bicol and truly embodies the Bicolana Way of
                    Life — that coordination of heart and mind deeply rooted in
                    Bicolano culture.
                </p>

                <p>
                    Dia attended Far Eastern University where she played
                    volleyball and graduated as a Political Science & Religious
                    Studies double major with a minor in Accounting. Shortly
                    after graduating (and after a year residency in Manila), she
                    began working in operations for the financial services
                    industry. She spent several years creating, improving and
                    implementing business processes geared toward organizational
                    efficiency, but she found herself craving more personal
                    connection. Fast forward to now, Dia keeps Leocadio
                    organized behind the scenes by managing all day-to-day
                    Operations and our team of assistants. In her role as
                    Creative Director, she is also responsible for the client
                    experience, onboarding each couple and taking them through
                    the entire planning process during their time with Leocadio.
                    Our couples love her easy going personality and ability to
                    manage a timeline down to the minute.
                </p>

                <p>
                    When she isn’t helping our couples tie the knot, you can
                    find Dia with her bestfriend, Daniel, planning a theme
                    party, or curled up with a good book. If you’re trying to
                    win her over, you can’t go wrong with McDonalds, a chicken,
                    or the classic Slurpee pantry staple — spam!
                </p>
            </article>

            <article className="info--container">
                <h3 className="info-header">Tyron Aranez</h3>

                <h5>HE/HIM</h5>
                <h5 className="title">SENIOR PLANNER</h5>

                <p>
                    Tyron joins Leocadio's as a full-time planner after a year
                    of being on our team as a day-of wedding assistant. A very
                    natural organizer, he loves a good checklist and
                    spreadsheet, both of which help him keep our wedding days
                    running seamlessly! He considers himself a hopeless romantic
                    who loves love, so there's no surprise that he found his way
                    to Leocadio's.
                </p>

                <p>
                    Tyron studied Communications at De Lasalle University where
                    he participated in leadership programs and spent time
                    studying abroad. After graduation he gained a wide array of
                    experience in Sales, Event Planning, and Human Resources,
                    until he found his home with Leocadio's. As Senior Planner,
                    Tyron keeps Leocadio organized behind the scenes, supporting
                    our couples through the coordination phase of the planning
                    process, and is onsite on wedding day to manage on the day
                    logistics.
                </p>

                <p>
                    As a Rizal native, he loves exploring different
                    neighborhoods and finding new hidden gems. In his free time
                    you can find his styling his new home in Upper Antipolo,
                    spending time with friends and family, enjoying a mocha
                    latte in a local cafe, or enjoying a nice glass of red wine
                    at one of his favorite Italian spots.
                </p>
            </article>

            <article className="info--container">
                <h3 className="info-header">Angelica Arcena</h3>
                <h5>SHE/HER</h5>
                <h5 className="title">
                    PRINCIPAL PLANNER + DIRECTOR OF OPERATIONS
                </h5>

                <p>
                    Angelica is the fast-talking, tea drinking, always matching
                    soul behind this company. She’s always been a very natural
                    entertainer at heart and even at a young age, knew wedding
                    planning may be in her future.
                </p>

                <p>
                    Angelica graduated with a communications degree from the
                    University of the Philippines, and went on to become a
                    certified Wedding & Event Planner through the Wedding
                    Planning & Consulting Program at University of the
                    Philippines. She led the marketing and events team for the
                    neighborhood of Rizal where she planned large scale
                    festivals and events and oversaw the town’s marketing
                    efforts.
                </p>

                <p>
                    Today, with over ten years of experience in the wedding
                    industry and having planned hundreds of events, Angelica has
                    developed a signature style and approach to weddings that
                    has been regionally and nationally recognized. Most of all,
                    our couples love that her cheerful confidence gives his the
                    ability to turn vision into action without hesitation. In
                    his role as Principal Stylist, Angelica spearheads all
                    design and styling aspects of the wedding planning process,
                    creating a high-end event unique to each couple, full of
                    intimate and thoughtful details.
                </p>
            </article>

            <article className="faq">
                <h2 className="section--header" id="faq-header">
                    Frequently Asked Questions
                </h2>

                {questions.map((item) => {
                    const { id, question, answer } = item;
                    return (
                        <div className="items--container" key={id}>
                            <h2 className="question--num">0{id}</h2>
                            <h5 className="question">{question}</h5>
                            <p className="answer">{answer}</p>
                        </div>
                    );
                })}
            </article>

            <br />
        </>
    );
};

export default About;
