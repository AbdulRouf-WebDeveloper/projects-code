import React from "react";

import {
  Section,
  SectionDivider,
  SectionText,
  SectionTitle,
} from "../../styles/GlobalComponents";

const style = {
  width: "600px",
  height: "auto",
};
const Acomplishments = () => (
  <Section>
    <SectionTitle>My Acomplishment</SectionTitle>
    <SectionText>
      After completing my Web Development Program i soon joined the internship
      opportunity that i was given to work as a Web Developer for Timhortons
      JurFamilyGroup to rebrand thier old website to a new website. since they
      wanted me to make a website that they can update on their own.
      <br />
      <br /> I designed and built a custom theme in wordpress for them. since
      wordpress is very easy to update. i used various plugins and made inbuilt
      template for them to use. Which allowed them to add custom videos,
      gallery, images, team member profiles, etc.
      <br />
      <br />I belive that this was my first step as a Web Developer and my first
      Acomplishment, creating a project from start to finish with a customer and
      changing things to suit their interest along the process. Im proud that i
      was able to make a site that the jurfamilygroup owners were happy with.
    </SectionText>
    <a href="https://jurfamilygroup.com/" target="_blank">
      <img style={style} src="./images/intern_site.jpg" />
    </a>{" "}
    <br />
  </Section>
);

export default Acomplishments;
