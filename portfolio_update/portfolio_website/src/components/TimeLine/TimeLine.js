import React, { useState, useRef, useEffect } from "react";

import {
  Section,
  SectionDivider,
  SectionText,
  SectionTitle,
} from "../../styles/GlobalComponents";

const style = {
  width: "300px",
  height: "auto",
};
const Timeline = () => {
  return (
    <Section id="about">
      <SectionDivider /> <br />
      <SectionTitle>About Me</SectionTitle>
      <img style={style} src="./images/rouf.jpg" /> <br />
      <SectionText>
        I am very fond of coding and i enjoy it very much not only that but the
        fact that we have such a awesome community. Communities like Stack
        Overflow, GitHub and Google Developers, to only name a few, are
        incredibly valuable.
        <br />
        <br /> The internet is a wonderful place for developers. You can google
        answers to “how to shave your beard,” or you get help on all topics that
        have to do with developing in forums of the communities mentioned above.
        Tools, collaborations, the sweets of developer’s Disneyland.
        <br />
        <br />
        After doing a team project in my web development program i was so
        surprised as to how efficent and fun it was along with the difficulty of
        pushing work together. but being able to cooperate with a team again
        would be so much fun and rewarding, i just cant wait!.
      </SectionText>
    </Section>
  );
};

export default Timeline;
