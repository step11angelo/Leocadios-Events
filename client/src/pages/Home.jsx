import React from "react";
import { Link } from "react-router-dom";
import "../css/index.css";
import Testimonials from "../components/Testimonials";
import {
  firstPhoto,
  secondPhoto,
  thirdPhoto,
  fourthPhoto,
  fifthPhoto,
  sixthPhoto,
  ourApproachImg,
  ourStoryImg,
  eventProductionImg,
  consultingImg,
  stylingImg,
} from "../assets/images";

const Home = () => {
  return (
    <>
      <section className="Hero">
        <div className="cover">
          <h1>Dia Leocadio's Event</h1>
          <h3>your partner in all occasions</h3>
          <Link to={"/connect"} className="btn primary-btn">
            Connect with us
          </Link>
        </div>
      </section>

      <section className="section-center">
        <h2 className="section--header">Everything you can imagine is real</h2>
        <h5 className="section--sub-header">Our Collection</h5>

        <div className="grid-container">
          <div>
            <img src={firstPhoto} alt="" />
          </div>
          <div>
            <img src={secondPhoto} alt="" />
          </div>
          <div>
            <img src={thirdPhoto} alt="" />
          </div>
          <div>
            <img src={fourthPhoto} alt="" />
          </div>
          <div>
            <img src={fifthPhoto} alt="" />
          </div>
          <div>
            <img src={sixthPhoto} alt="" />
          </div>
        </div>

        <Link to={"/gallery"} className="btn secondary-btn">
          View More
        </Link>
      </section>

      <section className="section-two-column">
        <div className="section--text-container">
          <h3 className="header">Our approach</h3>
          <p>
            At Leocadia's Event, we blend creativity with strategy and
            imagination with precision. We create unique and engaging
            experiences on behalf of our clients, yet we do so with a purpose.
          </p>
          <p>
            We offer a full range of strategic planning and event management
            services to corporate and non-profit organizations, helping you to
            build and execute virtual and in-person experiences that are highly
            engaging and impactful to your audience.
          </p>
        </div>

        <div className="section--img-container">
          <img src={ourApproachImg} alt="" />
        </div>
      </section>

      {/*!----note: the classes used is in app.css */}
      <section className="section-two-column dark reverse">
        <div className="section--img-container">
          <img src={ourStoryImg} alt="" />
        </div>

        <div className="section--text-container">
          <h3 className="header accent">Our Story</h3>
          <p className="light">
            At Leocadio's Event, we combine our passion and excitement for
            producing events with our knowledge and expertise in the field.
          </p>
          <p className="light ">
            We are based in Philly, but our work has taken us across the world.
            These experiences aside, our favorite part of the job is getting to
            know our clients.
          </p>

          <Link className="btn primary-btn" to={"/about"}>
            read more
          </Link>
        </div>
      </section>

      <section className="section-center">
        <h2 className="section--header">What we do</h2>
        <h5 className="section--sub-header">Our services</h5>

        <p>
          In a world that is constantly changing, organizations must grow and
          adapt. However, one thing that will always remain is the desire to
          connect with one another through experiences. Whether it be raising
          brand awareness, engaging a new audience or showing appreciation for
          your current one, Leocadio's Event provides creative and strategic
          solutions that will support your business priorities and goals.
        </p>

        <div className="services--flex">
          <div className="services--card">
            <img src={eventProductionImg} alt="" />

            <div className="cover">
              <h3>Event Production</h3>
            </div>
          </div>

          <div className="services--card">
            <img src={consultingImg} alt="" />

            <div className="cover">
              <h3>Consulting</h3>
            </div>
          </div>

          <div className="services--card">
            <img src={stylingImg} alt="" />

            <div className="cover">
              <h3>Styling</h3>
            </div>
          </div>
        </div>
        <Link to={"/services "} className="btn secondary-btn">
          Know More
        </Link>
      </section>

      <Testimonials />
    </>
  );
};

export default Home;
