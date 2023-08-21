import React from "react";
import { Container, Row, Col } from "react-bootstrap";
import myImg from "../../Assets/avatar.svg";
import Tilt from "react-parallax-tilt";
import {
  AiFillGithub,
  AiFillInstagram,
  AiFillAccountBook,
} from "react-icons/ai";
import { FaLinkedinIn } from "react-icons/fa";
import Cv from "../../Assets/Cv Meysson Alexis.pdf";

function Home2() {
  const handleDownload = () => {
    // URL du fichier à télécharger (chemin relatif vers le dossier du fichier)
    const fileUrl = Cv;

    // Nom du fichier à afficher lors du téléchargement
    const fileName = 'Cv Meysson Alexis.pdf';

    // Créer un lien temporaire pour le téléchargement
    const link = document.createElement('a');
    link.href = fileUrl;
    link.download = fileName;

    // Simuler un clic sur le lien pour déclencher le téléchargement
    link.click();

    // Nettoyer le lien temporaire
    URL.revokeObjectURL(link.href);
  };

  return (
    <Container fluid className="home-about-section" id="about">
      <Container>
        <Row>
          <Col md={8} className="home-about-description">
            <h1 style={{ fontSize: "2.6em" }}>
              Laisse moi <span className="purple"> me présenter</span>
            </h1>
            <p className="home-about-body">
              Je suis capable de m'exprimer aisément en utilisant des technologies classiques telles que
              <i>
                <b className="purple"> HTML, CSS et Js. </b>
              </i>
              <p>
              En outre, je possède la capacité d'employer des technologies plus avancées telles que
              <i>
                <b className="purple"> ReactJs, Python, Csharp. </b>
              </i>
              </p>
              <br />
              Mon activité principale consiste davantage à concevoir, déboguer et résoudre des problèmes qu'à simplement coder.
              <br />
              <br />
              <button className="download-button" onClick={handleDownload}>
                Mon CV
              </button>
            </p>
          </Col>
          <Col md={4} className="myAvtar">
            <Tilt>
              <img src={myImg} className="img-fluid" alt="avatar" />
            </Tilt>
          </Col>
        </Row>
        <Row>
          <Col md={12} className="home-about-social">
            <h1>Vous pouvez me retrouver en consultant les informations suivantes.</h1>
            <p>
              N'hésitez aucunement à entrer en <span className="purple">communication </span> avec moi.
            </p>
            <ul className="home-about-social-links">
              <li className="social-icons">
                <a
                  href="https://github.com/alexis17220"
                  target="_blank"
                  rel="noreferrer"
                  className="icon-colour  home-social-icons"
                >
                  <AiFillGithub />
                </a>
              </li>
              <li className="social-icons">
                <a
                  href="https://www.linkedin.com/in/alexis-m-b30896208/"
                  target="_blank"
                  rel="noreferrer"
                  className="icon-colour  home-social-icons"
                >
                  <FaLinkedinIn />
                </a>
              </li>
            </ul>
          </Col>
        </Row>
        <Row>
          <Col md={12} className="home-about-social">

            <ul className="home-about-social-links">
              <li className="social-icons">Mon adresse email :
                <br />
                <a href="mailto:alexis1722086@gmail.com" className="White"><span>alexis1722086@gmail.com</span></a>
              </li>
              <li className="social-icons">
                Mon numéro de téléphone :
                <br />
                <a href="tel:0676428287" className="White"><span>06.76.42.82.87</span></a>

              </li>
            </ul>
          </Col>
        </Row>
      </Container>
    </Container>
  );
}
export default Home2;
