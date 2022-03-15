import React from "react";
import {
  DiFirebase,
  DiReact,
  DiZend,
  DiGitBranch,
  DiCss3,
} from "react-icons/di";
import {
  Section,
  SectionDivider,
  SectionText,
  SectionTitle,
} from "../../styles/GlobalComponents";
import {
  List,
  ListContainer,
  ListItem,
  ListParagraph,
  ListTitle,
} from "./TechnologiesStyles";

const style = {
  color: "#000",
};

const Technologies = () => (
  <Section id="tech">
    <SectionDivider />
    <br />
    <SectionTitle>Technologies</SectionTitle>
    <SectionText>
      {" "}
      I've worked with a range of technologies in my Web Development Program.
      From Back-end to Front-end design.
    </SectionText>
    <List>
      <ListItem>
        <DiCss3 style={style} size="3rem" />
        <ListContainer>
          <ListTitle>Front-End</ListTitle>
          <ListParagraph>
            Experience with <br />
            HTML5, CSS3(SASS,LESS), JavaScript, PHP and WordPress
          </ListParagraph>
        </ListContainer>
      </ListItem>
      <ListItem>
        <DiFirebase style={style} size="3rem" />
        <ListContainer>
          <ListTitle>Back-End</ListTitle>
          <ListParagraph>
            Experience with <br />
            PHP, MySQL and a bit of Node.js and Java
          </ListParagraph>
        </ListContainer>
      </ListItem>
      <ListItem>
        <DiZend style={style} size="3rem" />
        <ListContainer>
          <ListTitle>UI/UX</ListTitle>
          <ListParagraph>
            Experience with <br />
            Adobe Photoshop and Adobe Dreamweaver
          </ListParagraph>
        </ListContainer>
      </ListItem>

      <ListItem>
        <DiReact style={style} size="3rem" />
        <ListContainer>
          <ListTitle>Libraries and Frameworks</ListTitle>
          <ListParagraph>
            Experience with <br />
            jQuery, React.js, Laravel, Bootstrap and Vue.js
          </ListParagraph>
        </ListContainer>
      </ListItem>

      <ListItem>
        <DiGitBranch style={style} size="3rem" />
        <ListContainer>
          <ListTitle>Version Control and Open-Source</ListTitle>
          <ListParagraph>
            Experience with <br />
            BitBucket, GitHub, Git, GitBash, Linux, Ubuntu, VirtualBox, Docker
            and XAMMP
          </ListParagraph>
        </ListContainer>
      </ListItem>
    </List>
  </Section>
);

export default Technologies;
