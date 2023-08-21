import React from "react";
import { Container, Row, Col } from "react-bootstrap";
import Projet_v1 from "../../Assets/imgPort/site_1.PNG";
import Projet_v2 from "../../Assets/imgPort/site_2.png";
import ECF from "../../Assets/imgPort/ECF.png";
import monSite from "../../Assets/imgPort/MonSite.png";
import site_v1 from "../../Assets/imgPort/site_v1.jpg";
import Tilt from "react-parallax-tilt";

function PortfolioCard() {
  return (
    <Container fluid className="home-about-section" id="about">
      <Container>
        <h1>Mes Réalisations</h1>
        <Row >
          <Col>
            <Row>


              <Col xs={4} md={5} className="portfolio">
                <Tilt>
                  <img src={Projet_v1} alt="Projet_v1" className="img-fluid rounded-circle larger-img" />
                </Tilt>
                <div className="button">
                  <a
                    href="https://ameysson.fr/Projet_v1/accueil.html"
                    target="_blank"
                    rel="noreferrer"
                  >
                    Projet_v1
                  </a>
                </div>

              </Col>
              <Col xs={4} md={5} className="portfolio">
                <Tilt>
                  <img src={Projet_v2} alt="Projet_v2" className="img-fluid rounded-circle larger-img" />
                </Tilt>
                <div className="button">
                  <a
                    href="https://ameysson.fr/Projet_v2/accueil.php"
                    target="_blank"
                    rel="noreferrer"
                  >
                    Projet_v2
                  </a>
                </div>
              </Col>
              <Col xs={4} md={5} className="portfolio">
                <Tilt>
                  <img src={ECF} alt="ECF" className="img-fluid rounded-circle larger-img" />
                </Tilt>
                <div className="button">
                  <a
                    href="https://ameysson.fr/ECF/ECF.html"
                    target="_blank"
                    rel="noreferrer"
                  >
                    Site ECF
                  </a>
                </div>
              </Col>
              <Col xs={4} md={5} className="portfolio">
                <Tilt>
                  <img src={monSite} alt="monSite" className="img-fluid rounded-circle larger-img" />
                </Tilt>
                <div className="button">
                  <a
                    href="https://ameysson.fr/monSite/"
                    target="_blank"
                    rel="noreferrer"
                  >
                    Clone Site V1
                  </a>
                </div>
              </Col>
              <Col xs={4} md={5} className="portfolio">
                <Tilt>
                  <img src={site_v1} alt="site_v1" className="img-fluid rounded-circle larger-img" />
                </Tilt>
                <div className="button">
                  <a
                    href="https://ameysson.fr/site_v1"
                    target="_blank"
                    rel="noreferrer"
                  >
                    Site V1
                  </a>
                </div>
              </Col>
            </Row>
          </Col>
        </Row>

      </Container>
    </Container>
  );
}

export default PortfolioCard;
