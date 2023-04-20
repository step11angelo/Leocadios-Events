import React, { useState, useEffect } from "react";
import "../css/Testimonials.css";
import ClientData from "../data/ClientData";

const Testimonials = () => {
  const [people, setPeople] = useState(ClientData);
  const [index, setIndex] = useState(0);

  return (
    <section>
      <h2 className="section--header">What our clients say</h2>
      <h5 className="section--sub-header">Testimonials</h5>

      <div className="testimonials--container">
        {people.map((person, personIndex) => {
          const { id, image, name, title, quote } = person;

          let position = "nextSlide";
          if (personIndex === index) {
            position = "activeSlide";
          }
          if (
            personIndex === index - 1 ||
            (index === 0 && personIndex === people.length - 1)
          ) {
            position = "lastSlide";
          }

          useEffect(() => {
            const lastIndex = people.length - 1;
            if (index < 0) {
              setIndex(lastIndex);
            }
            if (index > people.length - 1) {
              setIndex(0);
            }
          }, [index, people]);

          useEffect(() => {
            let slider = setInterval(() => {
              setIndex(index + 1);
            }, 3000);
            return () => clearInterval(slider);
          }, [index]);
          return (
            <article id="testimonial-card" className={position} key={id}>
              <div className="client-pic-container">
                <img src={image} alt={name} />
              </div>
              <h3>{name}</h3>
              <h5>{title}</h5>

              <div className="testimonials--content">
                <i className="fa-sharp fa-solid fa-quote-right"></i>
                <p>{quote}</p>
              </div>
            </article>
          );
        })}
        <button className="prev" onClick={() => setIndex(index - 1)}>
          <i className="fa-sharp fa-solid fa-chevron-left"></i>
        </button>
        <button className="next" onClick={() => setIndex(index + 1)}>
          <i className="fa-sharp fa-solid fa-chevron-right"></i>
        </button>
      </div>
    </section>
  );
};

export default Testimonials;
