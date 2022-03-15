import Link from "next/link";
import React from "react";
import {
  AiFillGithub,
  AiFillInstagram,
  AiFillLinkedin,
  AiFillTwitterCircle,
} from "react-icons/ai";
import { GiPortal } from "react-icons/gi";

import {
  Container,
  Div1,
  Div2,
  Div3,
  NavLink,
  SocialIcons,
  Span,
} from "./HeaderStyles";

const style = {
  color: "#000",
};

const Header = () => (
  <Container>
    <Div1>
      <Link href="/">
        <a
          style={{
            display: "flex",
            alignItems: "center",
            color: "white",
            marginBottom: "20px;",
          }}
        >
          <GiPortal style={style} size="3rem" /> <Span>Abdul</Span>
        </a>
      </Link>
    </Div1>

    <Div2>
      <li>
        <Link href="#projects">
          <NavLink>Projects</NavLink>
        </Link>
      </li>

      <li>
        <Link href="#tech">
          <NavLink>Technologies</NavLink>
        </Link>
      </li>

      <li>
        <Link href="#about">
          <NavLink>About</NavLink>
        </Link>
      </li>
    </Div2>

    <Div3>
      <SocialIcons
        href="https://github.com/AbdulRouf-WebDeveloper"
        target="_blank"
      >
        <AiFillGithub size="3rem" />
      </SocialIcons>

      <SocialIcons
        href="https://www.linkedin.com/in/abdul-rouf-bab535205/"
        target="_blank"
      >
        <AiFillLinkedin size="3rem" />
      </SocialIcons>

      <SocialIcons href="https://twitter.com/roufwebcipher" target="_blank">
        <AiFillTwitterCircle size="3rem" />
      </SocialIcons>
    </Div3>
  </Container>
);

export default Header;
