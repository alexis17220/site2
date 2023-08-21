import React from "react";
import Card from "react-bootstrap/Card";
import { ImPointRight } from "react-icons/im";

function AboutCard() {
  return (
    <Card className="quote-card-view">
      <Card.Body>
        <blockquote className="blockquote mb-0">
          <p style={{ textAlign: "justify" }}>
            Salut tout le monde, je suis <span className="purple">Meysson Alexis </span>
            de <span className="purple"> Saint Vivien, Charente-Maritime, en France.</span>
            <br />Actuellement, je suis en quête d'une opportunité en contrat à durée indéterminée en tant que Concepteur Développeur d'Applications, dans le but de mettre en application les connaissances et compétences que j'ai acquises au cours de ma formation.
            Mon enthousiasme pour la Conception et le Développement m'anime, et je suis fermement résolu à approfondir mes compétences et à en acquérir de nouvelles au sein de votre entreprise.
            <br />
            De plus, j'éprouve un vif intérêt pour les objets connectés et l'électronique.           
            <br />
            <br />
            Quelques-unes de mes activités de loisirs comprennent
          </p>
          <ul>
            <li className="about-activity">
              <ImPointRight /> Jouer à des jeux
            </li>
            <li className="about-activity">
              <ImPointRight /> Impressions 3D
            </li>
            <li className="about-activity">
              <ImPointRight /> Élaboration d'une configuration de PC adaptée à divers types d'activités.
            </li>
          </ul>

        </blockquote>
      </Card.Body>
    </Card>
  );
}

export default AboutCard;
