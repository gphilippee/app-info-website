-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 13 jan. 2020 à 13:19
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `appinfo`
--

-- --------------------------------------------------------

--
-- Structure de la table `alerte`
--

DROP TABLE IF EXISTS `alerte`;
CREATE TABLE IF NOT EXISTS `alerte` (
  `idAlerte` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `instant` datetime NOT NULL,
  `valeur` int(11) NOT NULL,
  `Capteur_Actionneur_idCapteur` int(11) NOT NULL,
  PRIMARY KEY (`idAlerte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `capteur_actionneur`
--

DROP TABLE IF EXISTS `capteur_actionneur`;
CREATE TABLE IF NOT EXISTS `capteur_actionneur` (
  `idCapteur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `typeCapteur` varchar(45) DEFAULT NULL,
  `typeActionneur` varchar(45) DEFAULT NULL,
  `unite` varchar(45) NOT NULL,
  `Carte_idCarte` int(11) NOT NULL DEFAULT '1',
  `valeurUnite` double DEFAULT NULL,
  PRIMARY KEY (`idCapteur`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `capteur_actionneur`
--

INSERT INTO `capteur_actionneur` (`idCapteur`, `typeCapteur`, `typeActionneur`, `unite`, `Carte_idCarte`, `valeurUnite`) VALUES
(1, 'sonore', '', 'Hz', 1, NULL),
(2, 'température', '', '°C', 1, NULL),
(3, 'rythme cardiaque', '', 'battements/min', 1, NULL),
(4, '', 'lumineux', 'nm', 1, 600),
(5, '', 'sonore', 'Hz', 1, 440);

-- --------------------------------------------------------

--
-- Structure de la table `capteur_actionneur_has_test`
--

DROP TABLE IF EXISTS `capteur_actionneur_has_test`;
CREATE TABLE IF NOT EXISTS `capteur_actionneur_has_test` (
  `Capteur_Actionneur_idCapteur` int(11) NOT NULL,
  `Test_idTest` int(11) NOT NULL,
  `date` date NOT NULL,
  `instantDebut` datetime NOT NULL,
  `instantFin` datetime NOT NULL,
  PRIMARY KEY (`Capteur_Actionneur_idCapteur`,`Test_idTest`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

DROP TABLE IF EXISTS `carte`;
CREATE TABLE IF NOT EXISTS `carte` (
  `idCarte` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idCarte`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `carte`
--

INSERT INTO `carte` (`idCarte`) VALUES
(1);

-- --------------------------------------------------------

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
(1, 'Bienvenue sur INFINITE MEASURES\r\n\r\nTout d’abord, merci d’avoir choisi nos services.\r\nLes présentes conditions générales d’utilisations ont pour objet l’encadrement juridique des modalités de mise à disposition des  services et de leurs utilisations par l’Utilisateur.\r\nL’utilisation de nos services implique votre acceptation des présentes conditions générales d’utilisations. Nous vous invitons donc à les lire attentivement.\r\nINFINITE MEASURES ou l’entreprise partenaire se réserve les droits de modifier unilatéralement et à tout moment le contenu des présentes CGU.\r\n\r\nDéfinitions des termes\r\n\r\nLa présente clause a pour objet de définir les différents termes essentiels du contrat : \r\nL’utilisateur représente toute personne qui utilise le site ou l’un des services proposés.\r\nLe contenu utilisateur représente l’ensemble des données transmises par l’utilisateur sur le site\r\nLe membre représente tout utilisateur identifié sur le site\r\nL’identifiant et le mot de passe sont l’ensemble des informations nécessaires à l’identification de l’utilisateur sur le site. L’identifiant et le mot de passe permettent à l’Utilisateur d’accéder à des services réservés aux membres. Le mot de passe est confidentiel.\r\nLe gestionnaire représente tout individu travaillant au sein d’INFINITE MEASURES ou de tout autres entreprises partenaires et ayant un compte gestionnaire ainsi que l’accès aux services réservés aux gestionnaires.\r\nL’administrateur représente tout individu d’INFINITE MEASURES ou de tout autres entreprises partenaires ayant les pleins droits sur le site et ayant accès aux services réservés à l’administrateur.\r\n\r\nUtilisation de nos services\r\n\r\nLe site est disponible gratuitement à tous utilisateurs ayant accès à Internet. Tous frais supportés par l’utilisateur pour avoir accès à Internet sont à sa charge.\r\nL’utilisateur n’a pas accès au contenu de membre s’il ne s’est pas identifiés à l’aide de son mot de passe et de son identifiant.\r\n\r\nN’utilisez seulement nos services à bon escient, ne tentez en aucun cas de corrompre ou d’accéder à nos services en utilisant une méthode autre que l’interface et les méthodes que nous proposons. Vous ne devez utiliser nos Services que dans le respect des lois en vigueur. Nous pouvons suspendre ou cesser la fourniture de nos Services si vous ne respectez pas les conditions ou règlements applicables, ou si nous examinons une suspicion d’utilisation impropre. \r\nTout comportement injurieux ou encore diffamatoire sera immédiatement sanctionné.\r\nTout événement ayant pour cause un dysfonctionnement du réseau ou du serveur n’engage pas la responsabilité d’INFINITE MEASURES ou de tout autres entreprises partenaires.\r\nToute maintenance ou mises à jour du site pourra possiblement empêcher temporairement le fonctionnement du site. L’utilisateur s’engage à ne réclamer aucune indemnisation suite à l’interruption, la suspension ou la modification de certains services.\r\n\r\nPropriété intellectuelle \r\n\r\nLes marques, logos, signes et tout autre contenu présents sur le site dont l’objet d’une protection par le code de la propriété intellectuelle et plus particulièrement par le droit d\'auteur. \r\nL’utilisateur sollicite l’autorisation préalable du site pour toute reproduction, duplication ou copie de son contenu.\r\nL’utilisateur s’engage à une utilisation privée du site, une utilisation des contenus à des fins commerciales est strictement interdite.\r\nTout contenu mis en ligne par l’utilisateur est à sa seule responsabilité. L’utilisateur s’engage à ne pas mettre en ligne de contenus pouvant nuire à autrui. Tout recours en justice engagée par un tiers lésé contre le site sera pris en charge par l’utilisateur concerné.\r\nLe contenu de l’utilisateur peut à tout moment être modifié ou supprimé sans justification ou notification par un administrateur.\r\n\r\nDonnées personnelles\r\n\r\nLes informations demandées lors de l’inscription au site sont nécessaires et obligatoires pour la création du compte. \r\nLe site assure à l’utilisateur une collecte et un traitement d’informations personnelles dans le respect de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relatives à l’informatique, aux fichiers et aux libertés, réécrite par l’ordonnance n°2018-1125 du 12 décembre 2018 applicables au 1er juin 2019, l’utilisateur dispose d’un droit d’accès, de rectification, de suppression et d’opposition de ses données personnelles. L’utilisateur exerce ce droit via son entreprise, son espace personnel, un formulaire de contrat ou encore par mail à l’adresse infinite@measures.fr.\r\n\r\nResponsabilité et force majeure\r\n\r\nLes informations données sur le site sont jugées fiables et à titre purement informatif. L’utilisateur assume seul l’entière responsabilité de l’utilisation de ces informations et du contenu présent sur le site.\r\n\r\nL’utilisateur s’assure de garder son mot de passe secret. Toute divulgation quelle que soit la forme est strictement interdite.\r\n\r\nL’utilisateur assume les risques liés à l’utilisation de son identifiant et mot de passe. Le site décline toute responsabilité.\r\n\r\nUne garantie optimale de la sécurité et de la confidentialité des données n’est pas assurée par le site. Cependant le site s’engage à mettre en oeuvre tous les moyens nécessaires afin de garantir au mieux la sécurité et la confidentialité des données.\r\n\r\nDurée\r\n\r\nLa durée du présent contrat est indéterminée et débute dès lors de l’utilisation du service.\r\n                                   '),
(2, 'Dénomination : INFINITE MEASURES\r\nCapital social : 120 000 Euros\r\nAdresse siège social : 19 rue Louis Guérin, 69100 Villeurbanne France\r\nAdresse électronique : infinite@measures.fr\r\nTéléphone : + 33 (0)1 78 38 99 54\r\nNuméro Siren : 741422399\r\nDirecteur de la publication : Hervé ALLANIC\r\nHébergement : ISEP, 10 rue de Vanves 92170 Issy-les-Moulineaux\r\n                                                  \r\n                                        '),
(3, '+331 78 38 99 54'),
(4, 'infinite@measures.fr'),
(5, 'Contenu qui-sommes nous ?       dz   OK ok                        \r\ndsq                          daz                fze');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `idQA` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `contenuQuestion` text,
  `contenuReponse` text,
  PRIMARY KEY (`idQA`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`idQA`, `contenuQuestion`, `contenuReponse`) VALUES
(1, 'Comment on crée un compte ?', 'Il faut s\'inscrire dans un centre de test psychométrique qui utilise ce logiciel.'),
(2, 'Combien de temps faut-il attendre pour obtenir ses résultats ?', 'Cela dépend de votre centre de test, mais il faut en générale attendre une à deux semaines.');

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `idForum` int(10) NOT NULL AUTO_INCREMENT,
  `nomTopic` varchar(255) NOT NULL,
  PRIMARY KEY (`idForum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mesure`
--

DROP TABLE IF EXISTS `mesure`;
CREATE TABLE IF NOT EXISTS `mesure` (
  `idMesure` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `valeur` int(11) NOT NULL,
  `instant` datetime NOT NULL,
  `Capteur_Actionneur_idCapteur` int(11) NOT NULL,
  `Utilisateur_id` int(11) NOT NULL,
  PRIMARY KEY (`idMesure`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mesure`
--

INSERT INTO `mesure` (`idMesure`, `valeur`, `instant`, `Capteur_Actionneur_idCapteur`, `Utilisateur_id`) VALUES
(1, 200, '2019-11-24 17:28:50', 1, 6),
(2, 150, '2019-11-24 17:29:25', 1, 6),
(3, 148, '2019-11-24 17:30:51', 1, 6),
(4, 165, '2019-11-24 17:31:24', 1, 7),
(5, 37, '2019-11-24 17:32:02', 2, 7),
(6, 36, '2019-11-24 17:32:17', 2, 7),
(7, 37, '2019-11-24 17:33:04', 2, 6);

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

DROP TABLE IF EXISTS `resultat`;
CREATE TABLE IF NOT EXISTS `resultat` (
  `idResultat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `contenu` text,
  `score` int(11) DEFAULT NULL,
  `Utilisateur_id` int(11) NOT NULL,
  PRIMARY KEY (`idResultat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `idTest` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Utilisateur_id` int(11) NOT NULL,
  PRIMARY KEY (`idTest`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

DROP TABLE IF EXISTS `topic`;
CREATE TABLE IF NOT EXISTS `topic` (
  `idMessage` int(10) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `dateMessage` date NOT NULL,
  `idTopic` int(11) NOT NULL,
  PRIMARY KEY (`idMessage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `numero_telephone` varchar(10) NOT NULL,
  `taille` int(11) NOT NULL,
  `poids` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mot_de_passe` varchar(2000) NOT NULL,
  `adresse_mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `date_naissance`, `numero_telephone`, `taille`, `poids`, `type`, `login`, `mot_de_passe`, `adresse_mail`) VALUES
(1, 'philippe', 'guillaume', '1999-07-25', '0619637985', 170, 70, 'admin', 'g.philippe', 'bdfd8f76051980024732fcd7c03c5595aeee6dc566a4061d9312a264430db71560ed14e788313ee2be6d3e4bcbb52043fd366bfc0e19952628fb96e93997d0c862d1ced0f74dbf4b834137fbdb0199693897adb6e1426cec898fe9f1900199652efe8400', ' guillaume.philippe2000@gmail.com'),
(2, 'liu', 'lionel', '1999-01-01', '0606060606', 170, 70, 'admin', 'l.liu', '0b8092816b18c5920220a15411cfa6fce60f1285894840d208ed73576d453be4b0a4d30af41187b5a0875a42d082c5c32f912bc00f74991b0b7ea5d669ecba22f752accd1fb7054e79fe7a8517298dc0ef035f82ef600df6b53e2ef1cb4442651c0b86a5', 'l.lionel0104@gmail.com'),
(3, 'parayre', 'benjamin', '1999-01-01', '0707070707', 170, 70, 'admin', 'b.parayre', '4433e739781aba4d691a4b3635b1dcb676bf3a4a19b00d89c1ae206962344daec1f3b5102be0db2796ced484541847fda7af65ed8b6592852d6a9cfbd2d66ae80c48252d6733e5c1b8b5104c768ca16267be3e758cb1677491583c33bc78b6a286c60b3a', 'parayre.benjamin1@gmail.com'),
(4, 'le garlantezec', 'thomas', '1999-01-01', '0607070707', 170, 70, 'admin', 't.garlantezec', '12c7c1ee73052ed53825adecbcd773ab8bccf42eafd44a2b87835965a26fa7ccd25366a1a87d00907f0ff01cadbeff71343ec3219174ac58788ee62534ae837f4225924ecc51948afe96b67d0e08f8c4847487f702eef1b8a08d1cdb23606f21c033c1dd', 'thomas.legarlantezec@gmail.com'),
(5, 'fournet', 'benjamin', '1999-01-01', '0606070707', 170, 70, 'admin', 'b.fournet', '82f368699df924565799ad232dfb95622949903d6d7ab5f551ba691e69e63bad922a5c45d4860f705fd7be9fa60b74d1ee74a18aabf56f08cbf9256817cbecf5af2803bc32f8922c075cbefac0f8bc551860af0433a63162a9de1ffd0ca9353f6b05199f', 'benjamin.fournet99@gmail.com'),
(6, 'dupont', 'jean', '1990-01-01', '0612345678', 170, 70, 'candidat', 'j.dupont', 'bf08d3d16eeaf787c59e01a5531330efea0e965948e7c016c78ffa2df86dabc95311182abaeb8d67e2564bc9a675bd5780e5043bd325052f6e5041c498f0194e551990d75ea2b92d958be38b2840bbe28ed87efeb658da35cb27d42f13b54a4dadd6e9c7', 'm.dupont@gmail.com'),
(7, 'dupont', 'michel', '1970-01-01', '0619637985', 170, 70, 'candidat', 'm.dupont', 'bf08d3d16eeaf787c59e01a5531330efea0e965948e7c016c78ffa2df86dabc95311182abaeb8d67e2564bc9a675bd5780e5043bd325052f6e5041c498f0194e551990d75ea2b92d958be38b2840bbe28ed87efeb658da35cb27d42f13b54a4dadd6e9c7', 'j.dupont@gmail.com'),
(8, 'auguste', 'louis', '1970-01-01', '0687654312', 170, 70, 'gestionnaire', 'l.auguste', '35e25f405a86d8f9e2853aa5137f4055bf9532334ca254f05070b5adcc5d73e082d33d51118dcc4e67eff7e19d9dbbc7c5431d6250f1ca6a2cce638fc60d5874e2538773a6499d1b40ca0e234d4870cc48e78afc9991409f2c9b8ac19306fb2e1d6b3477', 'l.auguste@gmail.com'),
(9, 'eau', 'pierre', '1970-01-01', '0612345687', 170, 70, 'gestionnaire', 'p.eau', '4060acd11bd99e08c6411f2c7b5cd46b3775d438644177849a1b0b924cac21492f11e9a632e29dfef1cf7902bb299ba59091c647474f0e8e956fd447cc765da72b1f2e697d9251010dbdf1658391642429a473d36b25df95b90c1de77717f7ca0a23f61b', 'pierre.eau@gmail.com'),
(10, 'apple', 'google', '1970-01-01', '0681234567', 170, 70, 'gestionnaire', 'g.apple', '9aaa3ee8870bdc030043ea9bed319f57c1c8427637cfd370e08b6a7fc3dfdad07a9f723a9240b6247be154fcb6160afdb51d62f4cfc31c4f40350b89191e74de62a9ff633571649558a0b4958268608e6889db2e953d6eaa10a3ff0c2608c6cb9a215e88', 'g.apple@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
