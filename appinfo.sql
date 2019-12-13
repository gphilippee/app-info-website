-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 25 nov. 2019 à 12:24
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `appinfo`
--

-- --------------------------------------------------------

--
-- Structure de la table `alerte`
--

DROP TABLE IF EXISTS `alerte`;
CREATE TABLE IF NOT EXISTS `alerte`
(
    `idAlerte`                     int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `instant`                      datetime         NOT NULL,
    `valeur`                       int(11)          NOT NULL,
    `Capteur_Actionneur_idCapteur` int(11)          NOT NULL,
    PRIMARY KEY (`idAlerte`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--
-- Structure de la table `capteur_actionneur`
--

DROP TABLE IF EXISTS `capteur_actionneur`;
CREATE TABLE IF NOT EXISTS `capteur_actionneur`
(
    `idCapteur`      int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `typeCapteur`    varchar(45)      NOT NULL,
    `typeActionneur` varchar(45)      NOT NULL,
    `unite`          varchar(45)      NOT NULL,
    `Carte_idCarte`  int(11)          NOT NULL,
    PRIMARY KEY (`idCapteur`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 6
  DEFAULT CHARSET = utf8;

--
-- Déchargement des données de la table `capteur_actionneur`
--

INSERT INTO `capteur_actionneur` (`idCapteur`, `typeCapteur`, `typeActionneur`, `unite`, `Carte_idCarte`)
VALUES (1, 'sonore', '', 'Hz', 1),
       (2, 'température', '', '°C', 1),
       (3, 'rythme cardiaque', '', 'battements/min', 1),
       (4, '', 'lumineux', 'nm', 1),
       (5, '', 'sonore', 'Hz', 1);

-- --------------------------------------------------------

--
-- Structure de la table `capteur_actionneur_has_test`
--

DROP TABLE IF EXISTS `capteur_actionneur_has_test`;
CREATE TABLE IF NOT EXISTS `capteur_actionneur_has_test`
(
    `Capteur_Actionneur_idCapteur` int(11)  NOT NULL,
    `Test_idTest`                  int(11)  NOT NULL,
    `date`                         date     NOT NULL,
    `instantDebut`                 datetime NOT NULL,
    `instantFin`                   datetime NOT NULL,
    PRIMARY KEY (`Capteur_Actionneur_idCapteur`, `Test_idTest`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

DROP TABLE IF EXISTS `carte`;
CREATE TABLE IF NOT EXISTS `carte`
(
    `idCarte` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`idCarte`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 2
  DEFAULT CHARSET = utf8;

--
-- Déchargement des données de la table `carte`
--

INSERT INTO `carte` (`idCarte`)
VALUES (1);

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq`
(
    `idQA`            int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `contenuQuestion` text,
    `contenuReponse`  text,
    PRIMARY KEY (`idQA`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 3
  DEFAULT CHARSET = utf8;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`idQA`, `contenuQuestion`, `contenuReponse`)
VALUES (1, 'Comment on crée un compte ?',
        'Il faut s\'inscrire dans un centre de test psychométrique qui utilise ce logiciel.'),
       (2, 'Combien de temps faut-il attendre pour obtenir ses résultats ?',
        'Cela dépend de votre centre de test, mais il faut en générale attendre une à deux semaines.');

-- --------------------------------------------------------

--
-- Structure de la table `mesure`
--

DROP TABLE IF EXISTS `mesure`;
CREATE TABLE IF NOT EXISTS `mesure`
(
    `idMesure`                     int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `valeur`                       int(11)          NOT NULL,
    `instant`                      datetime         NOT NULL,
    `Capteur_Actionneur_idCapteur` int(11)          NOT NULL,
    `Utilisateur_id`               int(11)          NOT NULL,
    PRIMARY KEY (`idMesure`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 8
  DEFAULT CHARSET = utf8;

--
-- Déchargement des données de la table `mesure`
--

INSERT INTO `mesure` (`idMesure`, `valeur`, `instant`, `Capteur_Actionneur_idCapteur`, `Utilisateur_id`)
VALUES (1, 200, '2019-11-24 17:28:50', 1, 6),
       (2, 150, '2019-11-24 17:29:25', 1, 6),
       (3, 148, '2019-11-24 17:30:51', 1, 6),
       (4, 165, '2019-11-24 17:31:24', 1, 7),
       (5, 263, '2019-11-24 17:32:02', 2, 7),
       (6, 253, '2019-11-24 17:32:17', 2, 7),
       (7, 188, '2019-11-24 17:33:04', 2, 6);

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

DROP TABLE IF EXISTS `resultat`;
CREATE TABLE IF NOT EXISTS `resultat`
(
    `idResultat`     int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `contenu`        text,
    `score`          int(11) DEFAULT NULL,
    `Utilisateur_id` int(11)          NOT NULL,
    PRIMARY KEY (`idResultat`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test`
(
    `idTest`         int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `Utilisateur_id` int(11)          NOT NULL,
    PRIMARY KEY (`idTest`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur`
(
    `id`               int(11)       NOT NULL AUTO_INCREMENT,
    `nom`              varchar(255) NOT NULL,
    `prenom`           varchar(255) NOT NULL,
    `date_naissance`   date NOT NULL,
    `numero_telephone` varchar(10) NOT NULL,
    `taille` int(11) NOT NULL,
    `poids` int(11) NOT NULL,
    `type`             varchar(255)  NOT NULL,
    `login`            varchar(255)  NOT NULL,
    `mot_de_passe`     varchar(2000) NOT NULL,
    `adresse_mail`     varchar(255)  NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 11
  DEFAULT CHARSET = utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `date_naissance`, `numero_telephone`, `taille`, `poids`, `type`, `login`, `mot_de_passe`, `adresse_mail`) 

VALUES  (1, 'philippe', 'guillaume', '1999-07-25', '0619637985', 70, 170, 'admin', 'g.philippe', 'bdfd8f76051980024732fcd7c03c5595aeee6dc566a4061d9312a264430db71560ed14e788313ee2be6d3e4bcbb52043fd366bfc0e19952628fb96e93997d0c862d1ced0f74dbf4b834137fbdb0199693897adb6e1426cec898fe9f1900199652efe8400', 'guillaume.philippe2000@gmail.com'),
        (2, 'liu', 'lionel', '1999-01-01', '0606060606', 70, 170, 'admin', 'l.liu', '0b8092816b18c5920220a15411cfa6fce60f1285894840d208ed73576d453be4b0a4d30af41187b5a0875a42d082c5c32f912bc00f74991b0b7ea5d669ecba22f752accd1fb7054e79fe7a8517298dc0ef035f82ef600df6b53e2ef1cb4442651c0b86a5', 'l.lionel0104@gmail.com'),
        (3, 'parayre', 'benjamin', '1999-01-01', '0707070707', 70, 170, 'admin', 'b.parayre', '4433e739781aba4d691a4b3635b1dcb676bf3a4a19b00d89c1ae206962344daec1f3b5102be0db2796ced484541847fda7af65ed8b6592852d6a9cfbd2d66ae80c48252d6733e5c1b8b5104c768ca16267be3e758cb1677491583c33bc78b6a286c60b3a', 'parayre.benjamin1@gmail.com'),
        (4, 'le garlantezec', 'thomas', '1999-01-01', '0607070707', 70, 170, 'admin', 't.garlantezec', '12c7c1ee73052ed53825adecbcd773ab8bccf42eafd44a2b87835965a26fa7ccd25366a1a87d00907f0ff01cadbeff71343ec3219174ac58788ee62534ae837f4225924ecc51948afe96b67d0e08f8c4847487f702eef1b8a08d1cdb23606f21c033c1dd', 'thomas.legarlantezec@gmail.com'),
        (5, 'fournet', 'benjamin', '1999-01-01', '0606070707', 70, 170, 'admin', 'b.fournet', '82f368699df924565799ad232dfb95622949903d6d7ab5f551ba691e69e63bad922a5c45d4860f705fd7be9fa60b74d1ee74a18aabf56f08cbf9256817cbecf5af2803bc32f8922c075cbefac0f8bc551860af0433a63162a9de1ffd0ca9353f6b05199f', 'benjamin.fournet99@gmail.com'),
        (6, 'dupont', 'jean', '1990-01-01', '0612345678', 70, 170, 'candidat', 'j.dupont', 'bf08d3d16eeaf787c59e01a5531330efea0e965948e7c016c78ffa2df86dabc95311182abaeb8d67e2564bc9a675bd5780e5043bd325052f6e5041c498f0194e551990d75ea2b92d958be38b2840bbe28ed87efeb658da35cb27d42f13b54a4dadd6e9c7', 'm.dupont@gmail.com'),
        (7, 'dupont', 'michel', '1970-01-01', '0687654321', 70, 170, 'candidat', 'm.dupont', 'bf08d3d16eeaf787c59e01a5531330efea0e965948e7c016c78ffa2df86dabc95311182abaeb8d67e2564bc9a675bd5780e5043bd325052f6e5041c498f0194e551990d75ea2b92d958be38b2840bbe28ed87efeb658da35cb27d42f13b54a4dadd6e9c7', 'j.dupont@gmail.com'),
        (8, 'auguste', 'louis', '1970-01-01', '0687654312', 70, 170, 'gestionnaire', 'l.auguste', '35e25f405a86d8f9e2853aa5137f4055bf9532334ca254f05070b5adcc5d73e082d33d51118dcc4e67eff7e19d9dbbc7c5431d6250f1ca6a2cce638fc60d5874e2538773a6499d1b40ca0e234d4870cc48e78afc9991409f2c9b8ac19306fb2e1d6b3477', 'l.auguste@gmail.com'),
        (9, 'eau', 'pierre', '1970-01-01', '0612345687', 70, 170, 'gestionnaire', 'p.eau', '4060acd11bd99e08c6411f2c7b5cd46b3775d438644177849a1b0b924cac21492f11e9a632e29dfef1cf7902bb299ba59091c647474f0e8e956fd447cc765da72b1f2e697d9251010dbdf1658391642429a473d36b25df95b90c1de77717f7ca0a23f61b', 'pierre.eau@gmail.com'),
        (10, 'apple', 'google', '1970-01-01', '0681234567', 70, 170, 'gestionnaire', 'g.apple', '9aaa3ee8870bdc030043ea9bed319f57c1c8427637cfd370e08b6a7fc3dfdad07a9f723a9240b6247be154fcb6160afdb51d62f4cfc31c4f40350b89191e74de62a9ff633571649558a0b4958268608e6889db2e953d6eaa10a3ff0c2608c6cb9a215e88', 'g.apple@gmail.com');


--
-- Structure de la table `donneesfixes`
--

DROP TABLE IF EXISTS `donneesfixes`;
CREATE TABLE IF NOT EXISTS `donneesfixes` (
  `idFixe` int(10) NOT NULL AUTO_INCREMENT,
  `donneeFixe` text,
  PRIMARY KEY (`idFixe`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `donneesfixes`
--

INSERT INTO `donneesfixes` (`idFixe`, `donneeFixe`) VALUES
(1, 'Je suis un texte pour la CGU,           eh oui !                                      '),
(2, 'Je suis un texte pour les mentions légales !'),
(3, '01010 10506 2'),
(4, 'fzef@fzfe156.fe'),
(5, 'Contenu qui-sommes nous ?          OK ok  ');
COMMIT;
--
-- Structure de la table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum`
(
    `idForum` int(10) NOT NULL AUTO_INCREMENT,
    `nomTopic` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`idForum`)

) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Structure de la table `topic`
--

DROP TABLE IF EXISTS `topic`;
CREATE TABLE IF NOT EXISTS `topic`
(
    `idMessage` int(10) NOT NULL AUTO_INCREMENT,
    `message` text NOT NULL,
    `dateMessage` date NOT NULL,
    `idTopic` int(11) NOT NULL,
    PRIMARY KEY (`idMessage`)

) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
