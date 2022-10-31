--
-- Database: `sweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `departements`
--

CREATE TABLE IF NOT EXISTS `departements` (
  `no` char(3) NOT NULL,
  `nom` varchar(43) NOT NULL,
  PRIMARY KEY (`no`)
) ;

--
-- Dumping data for table `departements`
--

INSERT INTO `departements` (`no`, `nom`) VALUES
('01', 'Ain'),
('02', 'Aisne'),
('03', 'Allier'),
('04', 'Alpes-de-Haute-Provence'),
('05', 'Hautes-Alpes'),
('06', 'Alpes-Maritimes'),
('07', 'Ardèche'),
('08', 'Ardennes'),
('09', 'Ariège'),
('10', 'Aube'),
('11', 'Aude'),
('12', 'Aveyron'),
('13', 'Bouches-du-Rhône'),
('14', 'Calvados'),
('15', 'Cantal'),
('16', 'Charente'),
('17', 'Charente-Maritime'),
('18', 'Cher'),
('19', 'Corrèze'),
('21', 'Côte-d''Or'),
('22', 'Côtes d''Armor'),
('23', 'Creuse'),
('24', 'Dordogne'),
('25', 'Doubs'),
('26', 'Drôme'),
('27', 'Eure'),
('28', 'Eure-et-Loir'),
('29', 'Finistère'),
('2A', 'Corse-du-Sud'),
('2B', 'Haute-Corse'),
('30', 'Gard'),
('31', 'Haute-Garonne'),
('32', 'Gers'),
('33', 'Gironde'),
('34', 'Hérault'),
('35', 'Ille-et-Vilaine'),
('36', 'Indre'),
('37', 'Indre-et-Loire'),
('38', 'Isère'),
('39', 'Jura'),
('40', 'Landes'),
('41', 'Loir-et-Cher'),
('42', 'Loire'),
('43', 'Haute-Loire'),
('44', 'Loire-Atlantique'),
('45', 'Loiret'),
('46', 'Lot'),
('47', 'Lot-et-Garonne'),
('48', 'Lozère'),
('49', 'Maine-et-Loire'),
('50', 'Manche'),
('51', 'Marne'),
('52', 'Haute-Marne'),
('53', 'Mayenne'),
('54', 'Meurthe-et-Moselle'),
('55', 'Meuse'),
('56', 'Morbihan'),
('57', 'Moselle'),
('58', 'Nièvre'),
('59', 'Nord'),
('60', 'Oise'),
('61', 'Orne'),
('62', 'Pas-de-Calais'),
('63', 'Puy-de-Dôme'),
('64', 'Pyrénées-Atlantiques'),
('65', 'Hautes-Pyrénées'),
('66', 'Pyrénées-Orientales'),
('67', 'Bas-Rhin'),
('68', 'Haut-Rhin'),
('69', 'Rhône'),
('70', 'Haute-Saône'),
('71', 'Saône-et-Loire'),
('72', 'Sarthe'),
('73', 'Savoie'),
('74', 'Haute-Savoie'),
('75', 'Paris'),
('76', 'Seine-Maritime'),
('77', 'Seine-et-Marne'),
('78', 'Yvelines'),
('79', 'Deux-Sèvres'),
('80', 'Somme'),
('81', 'Tarn'),
('82', 'Tarn-et-Garonne'),
('83', 'Var'),
('84', 'Vaucluse'),
('85', 'Vendée'),
('86', 'Vienne'),
('87', 'Haute-Vienne'),
('88', 'Vosges'),
('89', 'Yonne'),
('90', 'Terr. de Belfort'),
('91', 'Essonne'),
('92', 'Hauts-de-Seine'),
('93', 'Seine-St-Denis'),
('94', 'Val-de-Marne'),
('95', 'Val-D''Oise'),
('971', 'Guadeloupe'),
('972', 'Martinique'),
('973', 'Guyane'),
('974', 'Réunion'),
('975', 'Saint-Pierre-et-Miquelon'),
('984', 'Terres australes et antarctiques françaises'),
('985', 'Mayotte'),
('986', 'Wallis-et-Futuna'),
('987', 'Polynésie française'),
('988', 'Nouvelle-Calédonie');

-- --------------------------------------------------------

--
-- Table structure for table `noms`
--

CREATE TABLE IF NOT EXISTS `noms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `age` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=13 ;

--
-- Dumping data for table `noms`
--

INSERT INTO `noms` (`id`, `nom`, `prenom`, `age`) VALUES
(1, 'Dupont', 'Jean', 36),
(2, 'Petit', 'Nicolas', 19),
(3, 'David', 'Michel', 20),
(4, 'Dubois', 'Anne-Sophie', 19),
(5, 'Lilian', 'Thuram', 25),
(6, 'Vieira', 'Patrick', 28),
(7, 'Henry', 'Thierry', 29),
(8, 'Trezeguet ', 'David', 28),
(9, 'Bartez', 'Fabien', 32),
(10, 'Fabien', 'Lara', 35);

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(15) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=16 ;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `prix`) VALUES
(1, 'Milk', 10),
(2, 'Bread', 6),
(5, 'Butter', 14),
(6, 'Apple', 3),
(7, 'potato', 2),
(8, 'mais', 3),
(9, 'bananas', 3),
(10, 'tomato', 7),
(11, 'Meat', 20),
(12, 'fish', 16),
(13, 'Sugar', 12),
(14, 'Salt', 5);


