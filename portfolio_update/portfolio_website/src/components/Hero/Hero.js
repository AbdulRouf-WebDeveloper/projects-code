import React from "react";

import {
  Section,
  SectionText,
  SectionTitle,
} from "../../styles/GlobalComponents";
import Button from "../../styles/GlobalComponents/Button";
import { LeftSection } from "./HeroStyles";

const Hero = (props) => (
  <Section row nopadding>
    <LeftSection>
      <SectionTitle main center>
        Hi! <br />
        I'm Abdul Rouf
      </SectionTitle>
      <SectionText>
        I am a recent graduate from the University Of Winnipeg PACE Web
        Development Program. <br />
        <br />
        I'm looking forward to joining a passionate team full of Developers!
      </SectionText>
    </LeftSection>
  </Section>
);

export default Hero;
