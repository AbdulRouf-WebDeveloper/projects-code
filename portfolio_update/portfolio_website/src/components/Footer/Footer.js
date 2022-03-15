import React from 'react';
import {
  AiFillGithub,
  AiFillInstagram,
  AiFillLinkedin,
  AiFillTwitterCircle,
} from 'react-icons/ai';

import { SocialIcons } from '../Header/HeaderStyles';
import {
  CompanyContainer,
  FooterWrapper,
  LinkColumn,
  LinkItem,
  LinkList,
  LinkTitle,
  Slogan,
  SocialContainer,
  SocialIconsContainer,
} from './FooterStyles';

const Footer = () => {
  return (
    <FooterWrapper>
      <LinkList>
        <LinkColumn>
          <LinkTitle>Call</LinkTitle>
          <LinkItem href="tel:204-915-6533">204-915-6533</LinkItem>
        </LinkColumn>

        <LinkColumn>
          <LinkTitle>Email</LinkTitle>
          <LinkItem href="mailto:roufabdul044@gmail.com">
            roufabdul044@gmail.com
          </LinkItem>
        </LinkColumn>
      </LinkList>

      <SocialIconsContainer>
        <CompanyContainer>
          <Slogan>Be The Best Version of You!</Slogan>
        </CompanyContainer>
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
      </SocialIconsContainer>
    </FooterWrapper>
  );
};

export default Footer;
