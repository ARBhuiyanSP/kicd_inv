-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 07:13 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saif_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `entity_id` int(10) UNSIGNED DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assets` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `type_id`, `user_id`, `entity_id`, `icon`, `class`, `text`, `assets`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 49, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>create-plant-equipment</strong>', NULL, '2019-01-21 10:42:35', '2019-01-21 10:42:35'),
(2, 3, 1, 49, 'save', 'bg-aqua', 'trans(\"history.backend.permissions.updated\") <strong>create-plant-equipment</strong>', NULL, '2019-01-21 10:43:48', '2019-01-21 10:43:48'),
(3, 2, 1, 2, 'save', 'bg-aqua', 'trans(\"history.backend.roles.updated\") <strong>Executive</strong>', NULL, '2019-01-21 10:46:25', '2019-01-21 10:46:25'),
(4, 1, 1, 4, 'plus', 'bg-green', 'trans(\"history.backend.users.created\") <strong>{user}</strong>', '{\"user_link\":[\"admin.access.user.show\",\"Rashed Al Banna\",4]}', '2019-02-03 08:18:51', '2019-02-03 08:18:51'),
(5, 1, 1, 4, 'save', 'bg-aqua', 'trans(\"history.backend.users.updated\") <strong>{user}</strong>', '{\"user_link\":[\"admin.access.user.show\",\"Rashed Al Banna\",4]}', '2019-02-03 08:21:04', '2019-02-03 08:21:04'),
(6, 3, 1, 50, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>edit-plant-equipment</strong>', NULL, '2019-02-09 03:20:08', '2019-02-09 03:20:08'),
(7, 3, 1, 51, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>view-plant-equipment</strong>', NULL, '2019-02-09 03:21:08', '2019-02-09 03:21:08'),
(8, 3, 1, 52, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>delete-plant-equipment</strong>', NULL, '2019-02-09 03:22:25', '2019-02-09 03:22:25'),
(9, 3, 1, 53, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>view-reports</strong>', NULL, '2019-02-09 03:48:43', '2019-02-09 03:48:43'),
(10, 3, 1, 54, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>create-projects</strong>', NULL, '2019-02-09 07:33:20', '2019-02-09 07:33:20'),
(11, 3, 1, 55, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>edit-projects</strong>', NULL, '2019-02-09 07:46:59', '2019-02-09 07:46:59'),
(12, 3, 1, 56, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>view-projects</strong>', NULL, '2019-02-09 08:12:35', '2019-02-09 08:12:35'),
(13, 3, 1, 57, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>delete-projects</strong>', NULL, '2019-02-09 08:13:20', '2019-02-09 08:13:20'),
(14, 1, 1, 4, 'save', 'bg-aqua', 'trans(\"history.backend.users.updated\") <strong>{user}</strong>', '{\"user_link\":[\"admin.access.user.show\",\"Rashed Al Banna\",4]}', '2019-02-11 05:42:08', '2019-02-11 05:42:08'),
(15, 3, 1, 58, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>create-items</strong>', NULL, '2019-02-22 17:14:05', '2019-02-22 17:14:05'),
(16, 3, 1, 59, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>edit-items</strong>', NULL, '2019-02-22 17:15:10', '2019-02-22 17:15:10'),
(17, 3, 1, 60, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>view-items</strong>', NULL, '2019-02-22 17:15:38', '2019-02-22 17:15:38'),
(18, 3, 1, 61, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>delete-items</strong>', NULL, '2019-02-22 17:16:35', '2019-02-22 17:16:35'),
(19, 3, 1, 62, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>view-products</strong>', NULL, '2019-02-22 18:09:38', '2019-02-22 18:09:38'),
(20, 3, 1, 63, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>create-products</strong>', NULL, '2019-02-22 18:10:22', '2019-02-22 18:10:22'),
(21, 3, 1, 64, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>edit-Products</strong>', NULL, '2019-02-22 18:10:55', '2019-02-22 18:10:55'),
(22, 3, 1, 65, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>delete-products</strong>', NULL, '2019-02-22 18:11:18', '2019-02-22 18:11:18'),
(23, 3, 1, 65, 'save', 'bg-aqua', 'trans(\"history.backend.permissions.updated\") <strong>delete-products</strong>', NULL, '2019-02-22 18:11:35', '2019-02-22 18:11:35'),
(24, 3, 1, 64, 'save', 'bg-aqua', 'trans(\"history.backend.permissions.updated\") <strong>edit-products</strong>', NULL, '2019-02-22 18:11:59', '2019-02-22 18:11:59'),
(25, 3, 1, 66, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>create-product-receive</strong>', NULL, '2019-02-22 19:51:48', '2019-02-22 19:51:48'),
(26, 3, 1, 67, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>edit-product-receive</strong>', NULL, '2019-02-22 19:52:36', '2019-02-22 19:52:36'),
(27, 3, 1, 68, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>view-product-receive</strong>', NULL, '2019-02-22 19:53:22', '2019-02-22 19:53:22'),
(28, 3, 1, 69, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>delete-product-receive</strong>', NULL, '2019-02-22 19:54:06', '2019-02-22 19:54:06'),
(29, 3, 1, 70, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>create-project-challan</strong>', NULL, '2019-02-22 21:14:49', '2019-02-22 21:14:49'),
(30, 3, 1, 71, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>edit-project-challan</strong>', NULL, '2019-02-22 21:15:22', '2019-02-22 21:15:22'),
(31, 3, 1, 72, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>view-project-challan</strong>', NULL, '2019-02-22 21:15:58', '2019-02-22 21:15:58'),
(32, 3, 1, 73, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>delete-project-challan</strong>', NULL, '2019-02-22 21:16:33', '2019-02-22 21:16:33'),
(33, 3, 1, 33, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>view-blog-category</strong>', NULL, '2019-02-24 04:34:13', '2019-02-24 04:34:13'),
(34, 3, 1, 34, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>create-blog-category</strong>', NULL, '2019-02-24 04:34:24', '2019-02-24 04:34:24'),
(35, 3, 1, 35, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>edit-blog-category</strong>', NULL, '2019-02-24 04:34:36', '2019-02-24 04:34:36'),
(36, 3, 1, 36, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>delete-blog-category</strong>', NULL, '2019-02-24 04:34:47', '2019-02-24 04:34:47'),
(37, 3, 1, 37, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>view-blog-tag</strong>', NULL, '2019-02-24 04:34:57', '2019-02-24 04:34:57'),
(38, 3, 1, 38, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>create-blog-tag</strong>', NULL, '2019-02-24 04:35:08', '2019-02-24 04:35:08'),
(39, 3, 1, 39, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>edit-blog-tag</strong>', NULL, '2019-02-24 04:35:19', '2019-02-24 04:35:19'),
(40, 3, 1, 40, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>delete-blog-tag</strong>', NULL, '2019-02-24 04:35:29', '2019-02-24 04:35:29'),
(41, 3, 1, 41, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>view-blog</strong>', NULL, '2019-02-24 04:35:52', '2019-02-24 04:35:52'),
(42, 3, 1, 43, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>edit-blog</strong>', NULL, '2019-02-24 04:36:03', '2019-02-24 04:36:03'),
(43, 3, 1, 42, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>create-blog</strong>', NULL, '2019-02-24 04:36:14', '2019-02-24 04:36:14'),
(44, 3, 1, 44, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>delete-blog</strong>', NULL, '2019-02-24 04:37:55', '2019-02-24 04:37:55'),
(45, 3, 1, 45, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>view-faq</strong>', NULL, '2019-02-24 04:38:04', '2019-02-24 04:38:04'),
(46, 3, 1, 46, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>create-faq</strong>', NULL, '2019-02-24 04:38:12', '2019-02-24 04:38:12'),
(47, 3, 1, 47, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>edit-faq</strong>', NULL, '2019-02-24 04:38:21', '2019-02-24 04:38:21'),
(48, 3, 1, 48, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>delete-faq</strong>', NULL, '2019-02-24 04:38:54', '2019-02-24 04:38:54'),
(49, 3, 1, 74, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>view-suppliers</strong>', NULL, '2019-02-24 04:40:07', '2019-02-24 04:40:07'),
(50, 3, 1, 75, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>edit-suppliers</strong>', NULL, '2019-02-24 04:40:39', '2019-02-24 04:40:39'),
(51, 3, 1, 76, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>create-suppliers</strong>', NULL, '2019-02-24 04:41:08', '2019-02-24 04:41:08'),
(52, 3, 1, 77, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>delete-suppliers</strong>', NULL, '2019-02-24 04:41:39', '2019-02-24 04:41:39'),
(53, 1, 1, 5, 'plus', 'bg-green', 'trans(\"history.backend.users.created\") <strong>{user}</strong>', '{\"user_link\":[\"admin.access.user.show\",\"Jalil Nayan\",5]}', '2019-05-10 19:24:40', '2019-05-10 19:24:40'),
(54, 1, 1, 5, 'save', 'bg-aqua', 'trans(\"history.backend.users.updated\") <strong>{user}</strong>', '{\"user_link\":[\"admin.access.user.show\",\"Jalil Nayan\",5]}', '2019-05-11 17:07:42', '2019-05-11 17:07:42'),
(55, 3, 1, 78, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>issue-management</strong>', NULL, '2019-05-12 16:32:51', '2019-05-12 16:32:51'),
(56, 1, 1, 5, 'save', 'bg-aqua', 'trans(\"history.backend.users.updated\") <strong>{user}</strong>', '{\"user_link\":[\"admin.access.user.show\",\"Jalil Nayan\",5]}', '2019-05-12 16:35:26', '2019-05-12 16:35:26'),
(57, 1, 1, 5, 'save', 'bg-aqua', 'trans(\"history.backend.users.updated\") <strong>{user}</strong>', '{\"user_link\":[\"admin.access.user.show\",\"Jalil Nayan\",5]}', '2019-05-12 16:36:57', '2019-05-12 16:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `history_types`
--

CREATE TABLE `history_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_types`
--

INSERT INTO `history_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'User', '2019-01-14 06:17:13', '2019-01-14 06:17:13'),
(2, 'Role', '2019-01-14 06:17:13', '2019-01-14 06:17:13'),
(3, 'Permission', '2019-01-14 06:17:13', '2019-01-14 06:17:13'),
(4, 'Page', '2019-01-14 06:17:13', '2019-01-14 06:17:13'),
(5, 'BlogTag', '2019-01-14 06:17:13', '2019-01-14 06:17:13'),
(6, 'BlogCategory', '2019-01-14 06:17:13', '2019-01-14 06:17:13'),
(7, 'Blog', '2019-01-14 06:17:13', '2019-01-14 06:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `inv_ga_listunit`
--

CREATE TABLE `inv_ga_listunit` (
  `id` int(11) NOT NULL,
  `lunit_id` varchar(10) CHARACTER SET utf8 NOT NULL,
  `lunit_name` varchar(25) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inv_issue`
--

CREATE TABLE `inv_issue` (
  `id` int(11) NOT NULL,
  `issue_id` varchar(25) NOT NULL,
  `issue_date` date NOT NULL,
  `buyer_id` varchar(25) CHARACTER SET utf8 NOT NULL,
  `posted_to_gl` int(11) NOT NULL,
  `remarks` varchar(100) CHARACTER SET utf8 NOT NULL,
  `issue_type` varchar(20) CHARACTER SET utf8 NOT NULL,
  `issue_unit_id` varchar(20) CHARACTER SET utf8 NOT NULL,
  `chk_year_end` int(11) NOT NULL,
  `no_of_material` float NOT NULL,
  `issue_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_issue`
--

INSERT INTO `inv_issue` (`id`, `issue_id`, `issue_date`, `buyer_id`, `posted_to_gl`, `remarks`, `issue_type`, `issue_unit_id`, `chk_year_end`, `no_of_material`, `issue_total`) VALUES
(2, '001', '2019-04-13', '1', 1, 'test', 'Issue', '3', 1, 11, 51),
(3, '002', '2019-05-07', '1', 1, 'test', 'Issue', '3', 1, 5, 45000),
(4, '003', '2019-05-09', '2', 1, 'test', 'Issue', '3', 1, 2, 200),
(5, '004', '2019-06-12', '1', 1, 'test', 'Issue', '1', 1, 20, 200);

-- --------------------------------------------------------

--
-- Table structure for table `inv_issuedetail`
--

CREATE TABLE `inv_issuedetail` (
  `id` int(11) NOT NULL,
  `issue_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `material_id` varchar(9) CHARACTER SET utf8 NOT NULL,
  `expense_acct_id` varchar(9) CHARACTER SET utf8 NOT NULL,
  `cost_center` varchar(9) CHARACTER SET utf8 NOT NULL,
  `issue_qty` float NOT NULL,
  `issue_price` float NOT NULL,
  `sl_no` int(11) NOT NULL,
  `total_issue` float NOT NULL,
  `sales_price` float NOT NULL,
  `total_sales` float NOT NULL,
  `sales_profit` int(11) NOT NULL,
  `sales_margin` float NOT NULL,
  `id_serial_id` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_issuedetail`
--

INSERT INTO `inv_issuedetail` (`id`, `issue_id`, `material_id`, `expense_acct_id`, `cost_center`, `issue_qty`, `issue_price`, `sl_no`, `total_issue`, `sales_price`, `total_sales`, `sales_profit`, `sales_margin`, `id_serial_id`) VALUES
(4, '001', '5', '1', '1', 5, 3, 1, 15, 0, 0, 0, 0, '1'),
(5, '001', '4', '1', '1', 6, 6, 1, 36, 0, 0, 0, 0, '1'),
(6, '002', '6', '1', '1', 5, 9000, 1, 45000, 0, 0, 0, 0, '1'),
(7, '003', '7', '1', '1', 2, 100, 1, 200, 0, 0, 0, 0, '1'),
(8, '004', '7', '1', '1', 20, 10, 1, 200, 0, 0, 0, 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `inv_item_unit`
--

CREATE TABLE `inv_item_unit` (
  `id` int(11) NOT NULL,
  `unit_name` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_item_unit`
--

INSERT INTO `inv_item_unit` (`id`, `unit_name`) VALUES
(1, 'kg'),
(2, 'bag'),
(3, 'pcs');

-- --------------------------------------------------------

--
-- Table structure for table `inv_material`
--

CREATE TABLE `inv_material` (
  `id` int(11) NOT NULL,
  `material_id_code` varchar(10) DEFAULT NULL,
  `material_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `material_sub_id` varchar(25) CHARACTER SET utf8 NOT NULL,
  `material_description` varchar(75) CHARACTER SET utf8 NOT NULL,
  `material_min_stock` int(11) NOT NULL,
  `avg_con_sump` int(11) NOT NULL,
  `lead_time` int(11) NOT NULL,
  `re_order_level` int(11) NOT NULL,
  `qty_unit` varchar(15) CHARACTER SET utf8 NOT NULL,
  `op_balance_qty` int(11) NOT NULL,
  `op_balance_val` int(11) NOT NULL,
  `chk_print` int(11) NOT NULL,
  `cur_qty` int(11) NOT NULL,
  `cur_price` int(11) NOT NULL,
  `cur_value` int(11) NOT NULL,
  `last_issue` date NOT NULL,
  `last_receive` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_material`
--

INSERT INTO `inv_material` (`id`, `material_id_code`, `material_id`, `material_sub_id`, `material_description`, `material_min_stock`, `avg_con_sump`, `lead_time`, `re_order_level`, `qty_unit`, `op_balance_qty`, `op_balance_val`, `chk_print`, `cur_qty`, `cur_price`, `cur_value`, `last_issue`, `last_receive`) VALUES
(4, '001', '21', '3', 'Cement 50 KG', 20, 0, 0, 0, '1', 0, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00'),
(5, '002', '19', '1', 'Acid', 10, 0, 0, 0, '1', 0, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00'),
(6, '003', '21', '3', 'Box Crane 2190', 50, 0, 0, 0, '1', 0, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00'),
(7, '004', '22', '4', 'Tata wheel 1220', 10, 0, 0, 0, '3', 0, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `inv_materialbalance`
--

CREATE TABLE `inv_materialbalance` (
  `id` int(11) NOT NULL,
  `mb_ref_id` varchar(25) CHARACTER SET utf8 NOT NULL,
  `mb_materialid` varchar(25) CHARACTER SET utf8 NOT NULL,
  `mb_date` date NOT NULL,
  `mbin_qty` float NOT NULL,
  `mbin_val` float NOT NULL,
  `mbout_qty` float NOT NULL,
  `mbout_val` float NOT NULL,
  `mbprice` float NOT NULL,
  `mbtype` varchar(30) CHARACTER SET utf8 NOT NULL,
  `mbserial` float NOT NULL,
  `mbserial_id` varchar(10) CHARACTER SET utf8 NOT NULL,
  `mbunit_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `jvno` varchar(25) CHARACTER SET utf8 NOT NULL,
  `part_no` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_materialbalance`
--

INSERT INTO `inv_materialbalance` (`id`, `mb_ref_id`, `mb_materialid`, `mb_date`, `mbin_qty`, `mbin_val`, `mbout_qty`, `mbout_val`, `mbprice`, `mbtype`, `mbserial`, `mbserial_id`, `mbunit_id`, `jvno`, `part_no`) VALUES
(6, '001', '5', '2019-04-13', 50, 150, 0, 0, 3, 'Receive', 1.1, '0', '1', '001', '123456'),
(7, '001', '4', '2019-04-13', 60, 360, 0, 0, 6, 'Receive', 1.1, '0', '1', '001', '123456'),
(8, '001', '5', '2019-04-13', 0, 0, 5, 15, 3, 'Issue', 1.1, '0', '3', '001', NULL),
(9, '001', '4', '2019-04-13', 0, 0, 6, 36, 6, 'Issue', 1.1, '0', '3', '001', NULL),
(10, '002', '4', '2019-04-21', 10, 60, 0, 0, 6, 'Receive', 1.1, '0', '3', '002', '1235567'),
(11, '003', '6', '2019-05-07', 12, 108000, 0, 0, 9000, 'Receive', 1.1, '0', '3', '003', '212134'),
(12, '002', '6', '2019-05-07', 0, 0, 5, 45000, 9000, 'Issue', 1.1, '0', '3', '002', NULL),
(13, '004', '7', '2019-05-09', 2, 200, 0, 0, 100, 'Receive', 1.1, '0', '3', '004', '9090911'),
(14, '003', '7', '2019-05-09', 0, 0, 2, 200, 100, 'Issue', 1.1, '0', '3', '003', NULL),
(15, '005', '7', '2019-06-12', 50, 500, 0, 0, 10, 'Receive', 1.1, '0', '1', '005', '123456'),
(16, '004', '7', '2019-06-12', 0, 0, 20, 200, 10, 'Issue', 1.1, '0', '1', '004', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inv_materialcategory`
--

CREATE TABLE `inv_materialcategory` (
  `id` int(11) NOT NULL,
  `material_sub_id` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `category_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `material_sub_description` varchar(75) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_materialcategory`
--

INSERT INTO `inv_materialcategory` (`id`, `material_sub_id`, `category_id`, `material_sub_description`) VALUES
(1, '001', '19', 'Test 01'),
(2, '002', '19', 'Test 02'),
(3, '003', '21', 'Heavy Device 001'),
(4, '004', '22', 'Tata'),
(5, '005', '22', 'Content');

-- --------------------------------------------------------

--
-- Table structure for table `inv_materialcategorysub`
--

CREATE TABLE `inv_materialcategorysub` (
  `id` int(11) NOT NULL,
  `category_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `category_description` varchar(75) CHARACTER SET utf8 NOT NULL,
  `stock_acct_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `chk_sbalance` int(11) NOT NULL,
  `consumption_ac` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inv_receive`
--

CREATE TABLE `inv_receive` (
  `id` int(11) NOT NULL,
  `mrr_no` varchar(25) CHARACTER SET utf8 NOT NULL,
  `mrr_date` datetime NOT NULL,
  `purchase_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `receive_acct_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `supplier_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `posted_tog` int(11) NOT NULL,
  `remarks` varchar(180) CHARACTER SET utf8 NOT NULL,
  `receive_type` varchar(25) CHARACTER SET utf8 NOT NULL,
  `receive_ware_hosue_id` int(11) NOT NULL,
  `receive_unit_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `chk_year_end` int(11) NOT NULL,
  `receive_total` float NOT NULL,
  `no_of_material` float NOT NULL,
  `jv_no` varchar(25) CHARACTER SET utf8 NOT NULL,
  `part_no` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_receive`
--

INSERT INTO `inv_receive` (`id`, `mrr_no`, `mrr_date`, `purchase_id`, `receive_acct_id`, `supplier_id`, `posted_tog`, `remarks`, `receive_type`, `receive_ware_hosue_id`, `receive_unit_id`, `chk_year_end`, `receive_total`, `no_of_material`, `jv_no`, `part_no`) VALUES
(19, 'RCV001', '2019-07-07 00:00:00', '', '', '', 0, '', '', 0, '', 0, 0, 0, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inv_receivedetail`
--

CREATE TABLE `inv_receivedetail` (
  `id` int(11) NOT NULL,
  `mrr_no` varchar(25) CHARACTER SET utf8 NOT NULL,
  `material_id` varchar(25) CHARACTER SET utf8 NOT NULL,
  `receive_qty` float NOT NULL,
  `unit_price` float NOT NULL,
  `sl_no` int(11) NOT NULL,
  `total_receive` float NOT NULL,
  `rd_serial_id` varchar(20) CHARACTER SET utf8 NOT NULL,
  `part_no` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_receivedetail`
--

INSERT INTO `inv_receivedetail` (`id`, `mrr_no`, `material_id`, `receive_qty`, `unit_price`, `sl_no`, `total_receive`, `rd_serial_id`, `part_no`) VALUES
(42, 'RCV001', '343', 2, 0, 0, 0, '', NULL),
(43, 'RCV001', '234434', 1, 0, 0, 0, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inv_requisition`
--

CREATE TABLE `inv_requisition` (
  `id` int(11) NOT NULL,
  `requisition_id` varchar(25) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `requisition_date` datetime NOT NULL,
  `remarks` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `no_of_material` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_requisition`
--

INSERT INTO `inv_requisition` (`id`, `requisition_id`, `project_id`, `requisition_date`, `remarks`, `no_of_material`) VALUES
(3, 'REQ-001', 1, '2019-06-19 03:16:48', NULL, 5),
(4, 'REQ-004', 3, '2019-06-19 03:37:03', NULL, 5),
(5, 'REQ-005', 1, '2019-06-19 04:22:45', NULL, 5),
(6, 'REQ-10', 9, '2019-06-25 09:39:29', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `inv_requisition_details`
--

CREATE TABLE `inv_requisition_details` (
  `id` int(11) NOT NULL,
  `requisition_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `material_id` varchar(9) CHARACTER SET utf8 NOT NULL,
  `requisition_qty` float NOT NULL,
  `sl_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_requisition_details`
--

INSERT INTO `inv_requisition_details` (`id`, `requisition_id`, `material_id`, `requisition_qty`, `sl_no`) VALUES
(5, 'REQ-001', '4', 1, 1),
(6, 'REQ-001', '7', 5, 1),
(7, 'REQ-004', '5', 1, 1),
(8, 'REQ-005', '5', 6, 1),
(9, 'REQ-005', '4', 2, 1),
(10, 'REQ-10', '7', 30, 1),
(11, 'REQ-10', '6', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `inv_supplier`
--

CREATE TABLE `inv_supplier` (
  `id` int(11) NOT NULL,
  `supplier_id` varchar(20) CHARACTER SET utf8 NOT NULL,
  `supplier_company` varchar(120) CHARACTER SET utf8 NOT NULL,
  `supplier_address` varchar(150) CHARACTER SET utf8 NOT NULL,
  `supplier_city` varchar(50) CHARACTER SET utf8 NOT NULL,
  `supplier_country` varchar(50) CHARACTER SET utf8 NOT NULL,
  `contact_person` varchar(75) CHARACTER SET utf8 NOT NULL,
  `sposition` varchar(75) CHARACTER SET utf8 NOT NULL,
  `supplier_phone` varchar(18) CHARACTER SET utf8 NOT NULL,
  `supplier_op_balance` float NOT NULL,
  `cc` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inv_supplierbalance`
--

CREATE TABLE `inv_supplierbalance` (
  `id` int(11) NOT NULL,
  `sb_ref_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `sb_date` date NOT NULL,
  `sb_supplier_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `sb_dr_amount` float NOT NULL,
  `sb_cr_amount` float NOT NULL,
  `sb_remark` varchar(175) CHARACTER SET utf8 NOT NULL,
  `sb_partac_id` varchar(25) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inv_warehosueinfo`
--

CREATE TABLE `inv_warehosueinfo` (
  `id` int(11) NOT NULL,
  `ware_hosue_id` int(11) NOT NULL,
  `ware_hosue_name` varchar(75) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(400) DEFAULT NULL,
  `code` varchar(4) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `code`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(19, 'Raw Materials', '01', 1, NULL, 2019, '2019-03-29 11:59:40', NULL),
(20, 'Equipment', '02', 1, NULL, 2019, '2019-03-29 11:59:59', NULL),
(21, 'Port Device', '03', 1, NULL, 2019, '2019-04-01 09:26:49', NULL),
(22, 'Wheel', '04', 1, NULL, 2019, '2019-05-08 08:47:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_details`
--

CREATE TABLE `item_details` (
  `id` int(11) NOT NULL,
  `parent_item_id` int(11) NOT NULL,
  `sub_item_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `item_code` varchar(400) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_details`
--

INSERT INTO `item_details` (`id`, `parent_item_id`, `sub_item_id`, `name`, `item_code`, `description`, `user_id`) VALUES
(1, 1, 3, 'Asus Core i 7', 'M0021', 'Test', 1),
(2, 1, 2, 'HP 4k', 'M0022', 'HP 4k details', 1),
(3, 1, 1, 'Lenovo core i 5', 'M0031', 'Details', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` enum('backend','frontend') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` text COLLATE utf8mb4_unicode_ci,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `type`, `name`, `items`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'backend', 'Backend Sidebar Menu', '[{\"view_permission_id\":\"view-access-management\",\"icon\":\"fa-users\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"\",\"name\":\"Access Management\",\"id\":11,\"content\":\"Access Management\",\"children\":[{\"view_permission_id\":\"view-user-management\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.access.user.index\",\"name\":\"User Management\",\"id\":12,\"content\":\"User Management\"},{\"view_permission_id\":\"view-role-management\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.access.role.index\",\"name\":\"Role Management\",\"id\":13,\"content\":\"Role Management\"},{\"view_permission_id\":\"view-permission-management\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.access.permission.index\",\"name\":\"Permission Management\",\"id\":14,\"content\":\"Permission Management\"}]},{\"view_permission_id\":\"view-module\",\"icon\":\"fa-wrench\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.modules.index\",\"name\":\"Module\",\"id\":1,\"content\":\"Module\"},{\"view_permission_id\":\"view-menu\",\"icon\":\"fa-bars\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.menus.index\",\"name\":\"Menus\",\"id\":3,\"content\":\"Menus\"},{\"view_permission_id\":\"edit-settings\",\"icon\":\"fa-gear\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.settings.edit?id=1\",\"name\":\"Settings\",\"id\":9,\"content\":\"Settings\"},{\"view_permission_id\":\"view-projects\",\"icon\":\"fa fa-tasks\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.projects.index\",\"name\":\"Projects\",\"id\":17,\"content\":\"Projects\"},{\"id\":18,\"name\":\"Items\",\"url\":\"admin.items.index\",\"url_type\":\"route\",\"open_in_new_tab\":0,\"icon\":\"fa fa-get-pocket\",\"view_permission_id\":\"view-items\",\"content\":\"Items\"},{\"view_permission_id\":\"view-suppliers\",\"icon\":\"fa fa-user-circle\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.suppliers.index\",\"name\":\"Suppliers\",\"id\":22,\"content\":\"Suppliers\"},{\"id\":30,\"name\":\"Product Requisition\",\"url\":\"\",\"url_type\":\"static\",\"open_in_new_tab\":0,\"icon\":\"fa fa-coffee\",\"view_permission_id\":\"view-reports\",\"content\":\"Product Requisition\",\"children\":[{\"view_permission_id\":\"view-reports\",\"icon\":\"fa fa-truck\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.product_requisition.index\",\"name\":\"Requisition Form\",\"id\":31,\"content\":\"Requisition Form\"}]},{\"id\":19,\"name\":\"Products Receive\",\"url\":\"admin.products.index\",\"url_type\":\"route\",\"open_in_new_tab\":0,\"icon\":\"fa fa-fighter-jet\",\"view_permission_id\":\"view-products\",\"content\":\"Products Receive\",\"children\":[{\"id\":20,\"name\":\"Receive Form\",\"url\":\"admin.product_receive.create\",\"url_type\":\"route\",\"open_in_new_tab\":0,\"icon\":\"fa fa-cube\",\"view_permission_id\":\"create-product-receive\",\"content\":\"Receive Form\"},{\"view_permission_id\":\"view-reports\",\"icon\":\"fa fa-truck\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.product_receive.product_receive_list\",\"name\":\"Receive List\",\"id\":23,\"content\":\"Receive List\"}]},{\"view_permission_id\":\"issue-management\",\"icon\":\"fa fa-suitcase\",\"open_in_new_tab\":0,\"url_type\":\"static\",\"url\":\"\",\"name\":\"Product Issue\",\"id\":25,\"content\":\"Product Issue\",\"children\":[{\"view_permission_id\":\"issue-management\",\"icon\":\"fa fa-truck\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.product_challan.create\",\"name\":\"Issue Form\",\"id\":21,\"content\":\"Issue Form\"},{\"view_permission_id\":\"issue-management\",\"icon\":\"fa fa-truck\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.product_challan.product_issue_list\",\"name\":\"Issue List\",\"id\":26,\"content\":\"Issue List\"}]},{\"view_permission_id\":\"view-reports\",\"icon\":\"fa fa-truck\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.product_return.index\",\"name\":\"Product Return\",\"id\":32,\"content\":\"Product Return\"},{\"view_permission_id\":\"view-reports\",\"icon\":\"fa fa-exchange\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.product_movement.index\",\"name\":\"P2P Transfer\",\"id\":33,\"content\":\"P2P Transfer\"},{\"id\":15,\"name\":\"Plant Equipment\",\"url\":\"admin.plantEquipment.index\",\"url_type\":\"route\",\"open_in_new_tab\":0,\"icon\":\"fa fa-trello\",\"view_permission_id\":\"view-plant-equipment\",\"content\":\"Plant Equipment\"},{\"view_permission_id\":\"view-reports\",\"icon\":\"fa fa-bar-chart\",\"open_in_new_tab\":0,\"url_type\":\"static\",\"url\":\"\",\"name\":\"Reports\",\"id\":16,\"content\":\"Reports\",\"children\":[{\"id\":29,\"name\":\"Plant Equipment\",\"url\":\"admin.reports.get_plant_equipment_reports\",\"url_type\":\"route\",\"open_in_new_tab\":0,\"icon\":\"fa fa-truck\",\"view_permission_id\":\"view-reports\",\"content\":\"Plant Equipment\"},{\"id\":27,\"name\":\"Products\",\"url\":\"admin.reports.index\",\"url_type\":\"route\",\"open_in_new_tab\":0,\"icon\":\"fa fa-bar-chart\",\"view_permission_id\":\"view-reports\",\"content\":\"Products\"},{\"id\":28,\"name\":\"Stock Management\",\"url\":\"admin.reports.stock-management\",\"url_type\":\"route\",\"open_in_new_tab\":0,\"icon\":\"fa fa-bar-chart\",\"view_permission_id\":\"view-reports\",\"content\":\"Stock Management\"}]}]', 1, NULL, '2019-01-14 06:17:14', '2019-06-22 01:10:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_11_02_060149_create_blog_categories_table', 1),
(2, '2017_11_02_060149_create_blog_map_categories_table', 1),
(3, '2017_11_02_060149_create_blog_map_tags_table', 1),
(4, '2017_11_02_060149_create_blog_tags_table', 1),
(5, '2017_11_02_060149_create_blogs_table', 1),
(6, '2017_11_02_060149_create_faqs_table', 1),
(7, '2017_11_02_060149_create_history_table', 1),
(8, '2017_11_02_060149_create_history_types_table', 1),
(9, '2017_11_02_060149_create_modules_table', 1),
(10, '2017_11_02_060149_create_notifications_table', 1),
(11, '2017_11_02_060149_create_pages_table', 1),
(12, '2017_11_02_060149_create_password_resets_table', 1),
(13, '2017_11_02_060149_create_permission_role_table', 1),
(14, '2017_11_02_060149_create_permission_user_table', 1),
(15, '2017_11_02_060149_create_permissions_table', 1),
(16, '2017_11_02_060149_create_role_user_table', 1),
(17, '2017_11_02_060149_create_roles_table', 1),
(18, '2017_11_02_060149_create_sessions_table', 1),
(19, '2017_11_02_060149_create_settings_table', 1),
(20, '2017_11_02_060149_create_social_logins_table', 1),
(21, '2017_11_02_060149_create_users_table', 1),
(22, '2017_11_02_060152_add_foreign_keys_to_history_table', 1),
(23, '2017_11_02_060152_add_foreign_keys_to_notifications_table', 1),
(24, '2017_11_02_060152_add_foreign_keys_to_permission_role_table', 1),
(25, '2017_11_02_060152_add_foreign_keys_to_permission_user_table', 1),
(26, '2017_11_02_060152_add_foreign_keys_to_role_user_table', 1),
(27, '2017_11_02_060152_add_foreign_keys_to_social_logins_table', 1),
(28, '2017_12_10_122555_create_menus_table', 1),
(29, '2017_12_24_042039_add_null_constraint_on_created_by_on_user_table', 2),
(30, '2017_12_28_005822_add_null_constraint_on_created_by_on_role_table', 2),
(31, '2017_12_28_010952_add_null_constraint_on_created_by_on_permission_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `view_permission_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'view_route',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `view_permission_id`, `name`, `url`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'view-access-management', 'Access Management', NULL, 1, NULL, '2019-01-14 06:17:14', NULL),
(2, 'view-user-management', 'User Management', 'admin.access.user.index', 1, NULL, '2019-01-14 06:17:14', NULL),
(3, 'view-role-management', 'Role Management', 'admin.access.role.index', 1, NULL, '2019-01-14 06:17:14', NULL),
(4, 'view-permission-management', 'Permission Management', 'admin.access.permission.index', 1, NULL, '2019-01-14 06:17:14', NULL),
(5, 'view-menu', 'Menus', 'admin.menus.index', 1, NULL, '2019-01-14 06:17:14', NULL),
(6, 'view-module', 'Module', 'admin.modules.index', 1, NULL, '2019-01-14 06:17:14', NULL),
(7, 'view-page', 'Pages', 'admin.pages.index', 1, NULL, '2019-01-14 06:17:14', NULL),
(8, 'edit-settings', 'Settings', 'admin.settings.edit', 1, NULL, '2019-01-14 06:17:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 - Dashboard , 2 - Email , 3 - Both',
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `user_id`, `type`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 03:50:38', '2019-01-21 10:49:53'),
(2, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 03:53:34', '2019-01-21 10:49:51'),
(3, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 04:05:32', '2019-01-21 10:49:51'),
(4, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 05:28:46', '2019-01-21 10:49:51'),
(5, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 05:28:54', '2019-01-21 10:49:51'),
(6, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 06:03:57', '2019-01-21 10:49:51'),
(7, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 06:24:51', '2019-01-21 10:49:47'),
(8, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 06:30:11', '2019-01-21 10:49:47'),
(9, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 08:01:53', '2019-01-21 10:49:47'),
(10, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 08:28:19', '2019-01-21 10:49:47'),
(11, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 08:57:31', '2019-01-21 10:49:47'),
(12, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 10:34:56', '2019-01-21 10:49:41'),
(13, 'User Logged In: Viral', 1, 1, 1, '2019-01-17 01:26:27', '2019-01-21 10:49:41'),
(14, 'User Logged In: Viral', 1, 1, 1, '2019-01-17 01:49:14', '2019-01-21 10:49:41'),
(15, 'User Logged In: Viral', 1, 1, 1, '2019-01-19 04:35:26', '2019-01-21 10:49:41'),
(16, 'User Logged In: Viral', 1, 1, 1, '2019-01-21 02:34:52', '2019-01-21 10:49:41'),
(17, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 02:54:14', '2019-01-21 10:49:29'),
(18, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 04:42:13', '2019-01-21 10:49:29'),
(19, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 04:54:34', '2019-01-21 10:49:29'),
(20, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 06:08:42', '2019-01-21 10:49:29'),
(21, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 06:21:36', '2019-01-21 10:49:29'),
(22, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 09:11:22', '2019-01-21 10:49:56'),
(23, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 10:01:33', '2019-01-21 10:49:56'),
(24, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 10:12:42', '2019-01-21 10:49:56'),
(25, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 10:31:13', '2019-01-21 10:49:56'),
(26, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 10:44:46', '2019-01-21 10:49:56'),
(27, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 01:55:00', '2019-02-01 02:50:54'),
(28, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 02:42:42', '2019-02-01 02:50:54'),
(29, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 03:02:34', '2019-02-01 02:50:54'),
(30, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 03:48:50', '2019-02-01 02:50:54'),
(31, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 06:05:46', '2019-02-01 02:50:52'),
(32, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 07:29:09', '2019-02-01 02:50:52'),
(33, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 07:56:33', '2019-02-01 02:50:52'),
(34, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 09:15:00', '2019-02-01 02:50:52'),
(35, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 09:40:39', '2019-02-01 02:50:52'),
(36, 'User Logged In: Admin', 1, 1, 1, '2019-01-23 02:15:31', '2019-02-01 02:50:50'),
(37, 'User Logged In: Admin', 1, 1, 1, '2019-01-23 02:56:35', '2019-02-01 02:50:50'),
(38, 'User Logged In: Admin', 1, 1, 1, '2019-01-23 03:21:32', '2019-02-01 02:50:50'),
(39, 'User Logged In: Admin', 1, 1, 1, '2019-01-23 03:51:10', '2019-02-01 02:50:50'),
(40, 'User Logged In: Admin', 1, 1, 1, '2019-02-01 02:50:13', '2019-02-01 02:50:54'),
(41, 'User Logged In: Admin', 1, 1, 0, '2019-02-03 02:06:56', NULL),
(42, 'User Logged In: Admin', 1, 1, 0, '2019-02-03 02:27:37', NULL),
(43, 'User Logged In: Admin', 1, 1, 0, '2019-02-03 02:41:48', NULL),
(44, 'User Logged In: Admin', 1, 1, 0, '2019-02-03 03:51:42', NULL),
(45, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 04:26:55', '2019-02-09 02:33:04'),
(46, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 04:31:30', '2019-02-09 02:33:04'),
(47, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 04:56:12', '2019-02-09 02:33:04'),
(48, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 05:32:44', '2019-02-09 02:33:04'),
(49, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 05:43:13', '2019-02-09 02:33:04'),
(50, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 06:03:36', '2019-02-09 02:33:01'),
(51, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 08:13:37', '2019-02-09 02:33:01'),
(52, 'User Logged In: Rashed', 1, 1, 1, '2019-02-03 08:19:32', '2019-02-09 02:33:01'),
(53, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 08:20:42', '2019-02-04 08:14:34'),
(54, 'User Logged In: Rashed', 1, 1, 1, '2019-02-03 08:21:20', '2019-02-04 08:14:34'),
(55, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 08:37:59', '2019-02-04 08:14:34'),
(56, 'User Logged In: Admin', 1, 1, 1, '2019-02-04 07:28:16', '2019-02-04 08:14:34'),
(57, 'User Logged In: Admin', 1, 1, 1, '2019-02-04 08:14:19', '2019-02-04 08:14:34'),
(58, 'User Logged In: Admin', 1, 1, 1, '2019-02-04 08:27:24', '2019-02-09 02:33:01'),
(59, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 02:09:56', '2019-02-09 02:33:01'),
(60, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 03:15:22', NULL),
(61, 'User Logged In: Rashed', 1, 1, 0, '2019-02-09 03:26:39', NULL),
(62, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 03:29:08', NULL),
(63, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 04:14:20', NULL),
(64, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 05:15:05', NULL),
(65, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 05:34:48', NULL),
(66, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 05:49:15', '2019-02-09 10:05:06'),
(67, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 06:10:08', '2019-02-09 10:05:06'),
(68, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 06:32:07', '2019-02-09 10:05:06'),
(69, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 07:31:57', '2019-02-09 10:05:06'),
(70, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 07:44:02', '2019-02-09 10:05:06'),
(71, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 08:05:42', '2019-02-09 10:04:52'),
(72, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 08:29:10', '2019-02-09 10:04:52'),
(73, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 08:43:15', '2019-02-09 10:04:52'),
(74, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 09:22:52', '2019-02-09 10:04:52'),
(75, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 09:52:17', '2019-02-09 10:04:52'),
(76, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 10:37:31', NULL),
(77, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 10:50:24', NULL),
(78, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 13:54:02', NULL),
(79, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 14:25:38', NULL),
(80, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 14:57:31', NULL),
(81, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 15:27:53', NULL),
(82, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 19:58:58', NULL),
(83, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 19:59:05', NULL),
(84, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 20:28:03', NULL),
(85, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 21:17:01', NULL),
(86, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 21:55:44', NULL),
(87, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 22:33:59', NULL),
(88, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 22:54:21', NULL),
(89, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 23:11:04', NULL),
(90, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 23:19:54', NULL),
(91, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 23:23:07', NULL),
(92, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 23:23:29', NULL),
(93, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 02:37:49', NULL),
(94, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 02:38:01', NULL),
(95, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 03:06:30', NULL),
(96, 'User Logged In: Admin', 1, 1, 0, '2019-02-11 05:35:53', NULL),
(97, 'User Logged In: Admin', 1, 1, 0, '2019-02-11 05:36:29', NULL),
(98, 'User Logged In: Rashed', 1, 1, 0, '2019-02-11 05:40:08', NULL),
(99, 'User Logged In: Admin', 1, 1, 0, '2019-02-11 05:40:35', NULL),
(100, 'User Logged In: Rashed', 1, 1, 0, '2019-02-11 05:42:29', NULL),
(101, 'User Logged In: Rashed', 1, 1, 0, '2019-02-22 08:19:36', NULL),
(102, 'User Logged In: Admin', 1, 1, 0, '2019-02-22 08:29:38', NULL),
(103, 'User Logged In: Admin', 1, 1, 0, '2019-02-22 08:54:49', NULL),
(104, 'User Logged In: Admin', 1, 1, 0, '2019-02-22 16:47:39', NULL),
(105, 'User Logged In: Admin', 1, 1, 0, '2019-02-22 17:08:30', NULL),
(106, 'User Logged In: Admin', 1, 1, 0, '2019-02-22 18:08:39', NULL),
(107, 'User Logged In: Admin', 1, 1, 0, '2019-02-22 19:50:52', NULL),
(108, 'User Logged In: Admin', 1, 1, 0, '2019-02-22 20:17:13', NULL),
(109, 'User Logged In: Admin', 1, 1, 0, '2019-02-22 20:31:27', NULL),
(110, 'User Logged In: Admin', 1, 1, 0, '2019-02-23 04:54:42', NULL),
(111, 'User Logged In: Admin', 1, 1, 0, '2019-02-23 05:21:20', NULL),
(112, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 04:02:34', NULL),
(113, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 04:10:57', NULL),
(114, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 04:16:09', NULL),
(115, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 04:19:27', NULL),
(116, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 04:19:42', NULL),
(117, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 04:22:52', NULL),
(118, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 05:17:26', NULL),
(119, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 05:44:58', NULL),
(120, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 06:16:34', NULL),
(121, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 06:36:08', NULL),
(122, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 07:38:19', NULL),
(123, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 08:18:22', NULL),
(124, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 09:51:32', NULL),
(125, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 10:33:07', NULL),
(126, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 13:59:45', NULL),
(127, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 14:14:57', NULL),
(128, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 00:45:32', NULL),
(129, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 03:38:58', NULL),
(130, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 04:13:14', NULL),
(131, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 04:36:39', NULL),
(132, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 05:03:46', NULL),
(133, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 05:27:30', NULL),
(134, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 05:50:56', NULL),
(135, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 07:53:22', NULL),
(136, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 09:28:29', NULL),
(137, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 10:19:55', NULL),
(138, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 10:35:35', NULL),
(139, 'User Logged In: Admin', 1, 1, 0, '2019-02-26 06:11:21', NULL),
(140, 'User Logged In: Admin', 1, 1, 0, '2019-02-26 07:54:46', NULL),
(141, 'User Logged In: Admin', 1, 1, 0, '2019-02-26 07:54:51', NULL),
(142, 'User Logged In: Admin', 1, 1, 0, '2019-03-03 13:55:08', NULL),
(143, 'User Logged In: Admin', 1, 1, 0, '2019-03-03 14:26:35', NULL),
(144, 'User Logged In: Admin', 1, 1, 0, '2019-03-03 17:37:06', NULL),
(145, 'User Logged In: Admin', 1, 1, 0, '2019-03-06 09:34:28', NULL),
(146, 'User Logged In: Admin', 1, 1, 0, '2019-03-08 13:36:57', NULL),
(147, 'User Logged In: Admin', 1, 1, 0, '2019-03-11 07:46:32', NULL),
(148, 'User Logged In: Admin', 1, 1, 0, '2019-03-17 12:07:40', NULL),
(149, 'User Logged In: Admin', 1, 1, 0, '2019-03-17 12:55:31', NULL),
(150, 'User Logged In: Admin', 1, 1, 0, '2019-03-18 07:34:29', NULL),
(151, 'User Logged In: Admin', 1, 1, 0, '2019-03-18 13:44:58', NULL),
(152, 'User Logged In: Admin', 1, 1, 0, '2019-03-19 06:48:25', NULL),
(153, 'User Logged In: Admin', 1, 1, 0, '2019-03-20 08:19:52', NULL),
(154, 'User Logged In: Admin', 1, 1, 0, '2019-03-22 10:12:27', NULL),
(155, 'User Logged In: Admin', 1, 1, 0, '2019-03-24 08:23:42', NULL),
(156, 'User Logged In: Admin', 1, 1, 0, '2019-03-26 09:28:44', NULL),
(157, 'User Logged In: Admin', 1, 1, 0, '2019-03-27 06:36:15', NULL),
(158, 'User Logged In: Admin', 1, 1, 0, '2019-03-27 11:42:10', NULL),
(159, 'User Logged In: Admin', 1, 1, 0, '2019-03-29 08:47:27', NULL),
(160, 'User Logged In: Admin', 1, 1, 0, '2019-03-31 07:18:42', NULL),
(161, 'User Logged In: Admin', 1, 1, 0, '2019-03-31 13:14:19', NULL),
(162, 'User Logged In: Admin', 1, 1, 0, '2019-04-01 08:59:31', NULL),
(163, 'User Logged In: Admin', 1, 1, 0, '2019-04-01 13:16:40', NULL),
(164, 'User Logged In: Admin', 1, 1, 0, '2019-04-02 07:52:00', NULL),
(165, 'User Logged In: Admin', 1, 1, 0, '2019-04-02 13:28:03', NULL),
(166, 'User Logged In: Admin', 1, 1, 0, '2019-04-02 19:35:50', NULL),
(167, 'User Logged In: Admin', 1, 1, 0, '2019-04-03 07:48:55', NULL),
(168, 'User Logged In: Admin', 1, 1, 0, '2019-04-04 07:19:25', NULL),
(169, 'User Logged In: Admin', 1, 1, 0, '2019-04-04 09:32:12', NULL),
(170, 'User Logged In: Admin', 1, 1, 0, '2019-04-04 11:36:28', NULL),
(171, 'User Logged In: Admin', 1, 1, 0, '2019-04-05 08:16:13', NULL),
(172, 'User Logged In: Admin', 1, 1, 0, '2019-04-06 07:43:12', NULL),
(173, 'User Logged In: Admin', 1, 1, 0, '2019-04-07 06:46:00', NULL),
(174, 'User Logged In: Admin', 1, 1, 0, '2019-04-07 13:44:37', NULL),
(175, 'User Logged In: Admin', 1, 1, 0, '2019-04-07 14:07:09', NULL),
(176, 'User Logged In: Admin', 1, 1, 0, '2019-04-08 09:15:59', NULL),
(177, 'User Logged In: Admin', 1, 1, 0, '2019-04-08 12:09:51', NULL),
(178, 'User Logged In: Admin', 1, 1, 0, '2019-04-09 08:37:47', NULL),
(179, 'User Logged In: Admin', 1, 1, 0, '2019-04-09 14:54:52', NULL),
(180, 'User Logged In: Admin', 1, 1, 0, '2019-04-12 10:19:24', NULL),
(181, 'User Logged In: Admin', 1, 1, 0, '2019-04-15 07:44:52', NULL),
(182, 'User Logged In: Admin', 1, 1, 0, '2019-04-15 12:23:59', NULL),
(183, 'User Logged In: Admin', 1, 1, 0, '2019-04-15 15:12:55', NULL),
(184, 'User Logged In: Admin', 1, 1, 0, '2019-04-20 08:13:16', NULL),
(185, 'User Logged In: Admin', 1, 1, 0, '2019-04-22 13:53:48', NULL),
(186, 'User Logged In: Admin', 1, 1, 0, '2019-04-23 09:22:26', NULL),
(187, 'User Logged In: Admin', 1, 1, 0, '2019-04-23 15:24:06', NULL),
(188, 'User Logged In: Admin', 1, 1, 0, '2019-04-24 11:36:08', NULL),
(189, 'User Logged In: Admin', 1, 1, 0, '2019-04-24 15:30:54', NULL),
(190, 'User Logged In: Admin', 1, 1, 0, '2019-04-26 05:06:07', NULL),
(191, 'User Logged In: Admin', 1, 1, 0, '2019-04-26 10:28:53', NULL),
(192, 'User Logged In: Admin', 1, 1, 0, '2019-04-26 12:21:19', NULL),
(193, 'User Logged In: Admin', 1, 1, 0, '2019-04-27 07:49:04', NULL),
(194, 'User Logged In: Admin', 1, 1, 0, '2019-04-27 10:42:50', NULL),
(195, 'User Logged In: Admin', 1, 1, 0, '2019-04-27 12:05:11', NULL),
(196, 'User Logged In: Admin', 1, 1, 0, '2019-05-05 08:03:49', NULL),
(197, 'User Logged In: Admin', 1, 1, 0, '2019-05-05 12:45:29', NULL),
(198, 'User Logged In: Admin', 1, 1, 0, '2019-05-06 08:09:31', NULL),
(199, 'User Logged In: Admin', 1, 1, 0, '2019-05-06 12:26:46', NULL),
(200, 'User Logged In: Admin', 1, 1, 0, '2019-05-07 08:02:50', NULL),
(201, 'User Logged In: Admin', 1, 1, 0, '2019-05-08 08:18:28', NULL),
(202, 'User Logged In: Admin', 1, 1, 0, '2019-05-08 08:40:26', NULL),
(203, 'User Logged In: Admin', 1, 1, 0, '2019-05-08 11:42:40', NULL),
(204, 'User Logged In: Admin', 1, 1, 0, '2019-05-10 09:26:52', NULL),
(205, 'User Logged In: Admin', 1, 1, 0, '2019-05-10 19:14:56', NULL),
(206, 'User Logged In: Jalil', 1, 1, 0, '2019-05-10 19:25:56', NULL),
(207, 'User Logged In: Admin', 1, 1, 0, '2019-05-10 19:26:45', NULL),
(208, 'User Logged In: Jalil', 1, 1, 0, '2019-05-10 19:28:03', NULL),
(209, 'User Logged In: Admin', 1, 1, 0, '2019-05-11 15:07:24', NULL),
(210, 'User Logged In: Admin', 1, 1, 0, '2019-05-11 17:03:49', NULL),
(211, 'User Logged In: Admin', 1, 1, 0, '2019-05-11 17:07:19', NULL),
(212, 'User Logged In: Jalil', 1, 1, 0, '2019-05-11 17:09:09', NULL),
(213, 'User Logged In: Admin', 1, 1, 0, '2019-05-11 18:00:37', NULL),
(214, 'User Logged In: Jalil', 1, 1, 0, '2019-05-11 19:02:13', NULL),
(215, 'User Logged In: Jalil', 1, 1, 0, '2019-05-11 19:07:37', NULL),
(216, 'User Logged In: Admin', 1, 1, 0, '2019-05-11 19:27:23', NULL),
(217, 'User Logged In: Admin', 1, 1, 0, '2019-05-12 14:27:45', NULL),
(218, 'User Logged In: Admin', 1, 1, 0, '2019-05-12 16:26:34', NULL),
(219, 'User Logged In: Jalil', 1, 1, 0, '2019-05-12 16:37:23', NULL),
(220, 'User Logged In: Jalil', 1, 1, 0, '2019-05-12 16:53:37', NULL),
(221, 'User Logged In: Jalil', 1, 1, 0, '2019-05-13 13:07:51', NULL),
(222, 'User Logged In: Jalil', 1, 1, 0, '2019-05-13 13:28:43', NULL),
(223, 'User Logged In: Jalil', 1, 1, 0, '2019-05-13 13:52:21', NULL),
(224, 'User Logged In: Jalil', 1, 1, 0, '2019-05-13 17:16:28', NULL),
(225, 'User Logged In: Admin', 1, 1, 0, '2019-05-13 17:26:22', NULL),
(226, 'User Logged In: Admin', 1, 1, 0, '2019-05-13 17:56:05', NULL),
(227, 'User Logged In: Jalil', 1, 1, 0, '2019-05-13 17:58:41', NULL),
(228, 'User Logged In: Jalil', 1, 1, 0, '2019-05-13 18:00:19', NULL),
(229, 'User Logged In: Jalil', 1, 1, 0, '2019-05-13 18:03:02', NULL),
(230, 'User Logged In: Admin', 1, 1, 0, '2019-05-13 18:15:40', NULL),
(231, 'User Logged In: Jalil', 1, 1, 0, '2019-05-14 00:34:21', NULL),
(232, 'User Logged In: Admin', 1, 1, 0, '2019-05-14 00:35:13', NULL),
(233, 'User Logged In: Jalil', 1, 1, 0, '2019-05-14 00:38:54', NULL),
(234, 'User Logged In: Admin', 1, 1, 0, '2019-05-14 01:02:11', NULL),
(235, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-14 01:30:54', NULL),
(236, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-15 23:14:18', NULL),
(237, 'User Logged In: Admin', 1, 1, 0, '2019-05-18 21:03:06', NULL),
(238, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-18 23:16:15', NULL),
(239, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-18 23:35:11', NULL),
(240, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-20 00:21:13', NULL),
(241, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-20 19:44:28', NULL),
(242, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-20 20:57:04', NULL),
(243, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-20 21:40:30', NULL),
(244, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-20 22:40:16', NULL),
(245, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-20 23:24:39', NULL),
(246, 'User Logged In: Rashed', 1, 1, 0, '2019-05-20 23:34:38', NULL),
(247, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-20 23:36:55', NULL),
(248, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-20 23:41:51', NULL),
(249, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-20 23:46:49', NULL),
(250, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-20 23:48:57', NULL),
(251, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-21 00:40:30', NULL),
(252, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-21 21:36:15', NULL),
(253, 'User Logged In: Admin', 1, 1, 0, '2019-05-22 00:16:05', NULL),
(254, 'User Logged In: Admin', 1, 1, 0, '2019-05-22 03:33:18', NULL),
(255, 'User Logged In: Admin', 1, 1, 0, '2019-05-22 20:43:51', NULL),
(256, 'User Logged In: Admin', 1, 1, 0, '2019-05-22 21:05:30', NULL),
(257, 'User Logged In: Admin', 1, 1, 0, '2019-05-22 21:16:03', NULL),
(258, 'User Logged In: Admin', 1, 1, 0, '2019-05-24 20:38:16', NULL),
(259, 'User Logged In: Admin', 1, 1, 0, '2019-05-24 21:09:51', NULL),
(260, 'User Logged In: Admin', 1, 1, 0, '2019-05-24 22:29:24', NULL),
(261, 'User Logged In: Admin', 1, 1, 0, '2019-05-24 23:20:12', NULL),
(262, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-24 23:31:30', NULL),
(263, 'User Logged In: Admin', 1, 1, 0, '2019-05-25 20:21:19', NULL),
(264, 'User Logged In: Admin', 1, 1, 0, '2019-05-25 21:05:41', NULL),
(265, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-25 22:33:43', NULL),
(266, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-26 22:57:36', NULL),
(267, 'User Logged In: Admin', 1, 1, 0, '2019-05-27 21:57:41', NULL),
(268, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-28 00:15:56', NULL),
(269, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-28 01:16:30', NULL),
(270, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-28 20:13:04', NULL),
(271, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-29 21:53:11', NULL),
(272, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-29 21:56:23', NULL),
(273, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-29 21:57:56', NULL),
(274, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-29 22:06:47', NULL),
(275, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-29 22:34:44', NULL),
(276, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-05-29 22:48:27', NULL),
(277, 'User Logged In: Admin', 1, 1, 0, '2019-05-29 22:54:40', NULL),
(278, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-06-12 01:35:46', NULL),
(279, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-06-14 21:38:04', NULL),
(280, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-06-14 22:09:45', NULL),
(281, 'User Logged In: Admin', 1, 1, 0, '2019-06-16 02:40:57', NULL),
(282, 'User Logged In: Admin', 1, 1, 0, '2019-06-16 07:51:16', NULL),
(283, 'User Logged In: Admin', 1, 1, 0, '2019-06-16 10:32:25', NULL),
(284, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-06-16 19:52:59', NULL),
(285, 'User Logged In: Admin', 1, 1, 0, '2019-06-16 20:07:50', NULL),
(286, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-06-16 20:29:19', NULL),
(287, 'User Logged In: Jalil Khan', 1, 1, 0, '2019-06-16 22:57:48', NULL),
(288, 'User Logged In: Admin', 1, 1, 0, '2019-06-19 00:53:38', NULL),
(289, 'User Logged In: Admin', 1, 1, 0, '2019-06-19 01:14:06', NULL),
(290, 'User Logged In: Admin', 1, 1, 0, '2019-06-19 02:15:57', NULL),
(291, 'User Logged In: Admin', 1, 1, 0, '2019-06-19 02:21:33', NULL),
(292, 'User Logged In: Admin', 1, 1, 0, '2019-06-19 02:44:56', NULL),
(293, 'User Logged In: Admin', 1, 1, 0, '2019-06-19 23:31:20', NULL),
(294, 'User Logged In: Admin', 1, 1, 0, '2019-06-19 23:57:24', NULL),
(295, 'User Logged In: Admin', 1, 1, 0, '2019-06-20 00:09:53', NULL),
(296, 'User Logged In: Admin', 1, 1, 0, '2019-06-21 17:14:36', NULL),
(297, 'User Logged In: Admin', 1, 1, 0, '2019-06-21 23:02:59', NULL),
(298, 'User Logged In: Admin', 1, 1, 0, '2019-06-22 01:08:34', NULL),
(299, 'User Logged In: Admin', 1, 1, 0, '2019-06-23 19:32:31', NULL),
(300, 'User Logged In: Admin', 1, 1, 0, '2019-06-23 19:59:39', NULL),
(301, 'User Logged In: Admin', 1, 1, 0, '2019-06-23 20:00:09', NULL),
(302, 'User Logged In: Admin', 1, 1, 0, '2019-06-23 22:00:12', NULL),
(303, 'User Logged In: Admin', 1, 1, 0, '2019-06-24 19:31:11', NULL),
(304, 'User Logged In: Admin', 1, 1, 0, '2019-06-25 00:45:59', NULL),
(305, 'User Logged In: Admin', 1, 1, 0, '2019-06-25 16:11:00', NULL),
(306, 'User Logged In: Admin', 1, 1, 0, '2019-06-25 17:17:08', NULL),
(307, 'User Logged In: Admin', 1, 1, 0, '2019-06-25 11:33:11', NULL),
(308, 'User Logged In: Admin', 1, 1, 0, '2019-06-25 21:08:01', NULL),
(309, 'User Logged In: Admin', 1, 1, 0, '2019-06-28 17:00:01', NULL),
(310, 'User Logged In: Admin', 1, 1, 0, '2019-06-29 15:58:03', NULL),
(311, 'User Logged In: Admin', 1, 1, 0, '2019-06-30 20:40:58', NULL),
(312, 'User Logged In: Admin', 1, 1, 0, '2019-07-02 19:26:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `cannonical_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `page_slug`, `description`, `cannonical_link`, `seo_title`, `seo_keyword`, `seo_description`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Terms and conditions', 'terms-and-conditions', 'terms and conditions', NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-01-14 06:17:14', '2019-01-14 06:17:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parent_category`
--

CREATE TABLE `parent_category` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `parent_code` varchar(400) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parent_category`
--

INSERT INTO `parent_category` (`id`, `name`, `parent_code`, `description`, `user_id`) VALUES
(1, 'Laptop', 'P001', 'All Types Of Laptop', 1),
(2, 'Monitor', 'P002', 'All Types Of Monitor', 1),
(3, 'Printer', 'P002', 'All Types Of Printer', 1),
(4, 'RAM', 'P009', 'This is test', 1),
(6, 'Scanner', 'P0010', 'Test Scanner Details', 1),
(7, 'Power Supply', 'P0011', 'Details Of Power Supply', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `sort`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'view-backend', 'View Backend', 1, 1, 1, NULL, '2019-01-14 06:17:03', '2019-01-14 06:17:03', NULL),
(2, 'view-frontend', 'View Frontend', 2, 1, 1, NULL, '2019-01-14 06:17:03', '2019-01-14 06:17:03', NULL),
(3, 'view-access-management', 'View Access Management', 3, 1, 1, NULL, '2019-01-14 06:17:03', '2019-01-14 06:17:03', NULL),
(4, 'view-user-management', 'View User Management', 4, 1, 1, NULL, '2019-01-14 06:17:03', '2019-01-14 06:17:03', NULL),
(5, 'view-active-user', 'View Active User', 5, 1, 1, NULL, '2019-01-14 06:17:04', '2019-01-14 06:17:04', NULL),
(6, 'view-deactive-user', 'View Deactive User', 6, 1, 1, NULL, '2019-01-14 06:17:04', '2019-01-14 06:17:04', NULL),
(7, 'view-deleted-user', 'View Deleted User', 7, 1, 1, NULL, '2019-01-14 06:17:04', '2019-01-14 06:17:04', NULL),
(8, 'show-user', 'Show User Details', 8, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(9, 'create-user', 'Create User', 9, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(10, 'edit-user', 'Edit User', 9, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(11, 'delete-user', 'Delete User', 10, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(12, 'activate-user', 'Activate User', 11, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(13, 'deactivate-user', 'Deactivate User', 12, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(14, 'login-as-user', 'Login As User', 13, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(15, 'clear-user-session', 'Clear User Session', 14, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(16, 'view-role-management', 'View Role Management', 15, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(17, 'create-role', 'Create Role', 16, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(18, 'edit-role', 'Edit Role', 17, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(19, 'delete-role', 'Delete Role', 18, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(20, 'view-permission-management', 'View Permission Management', 19, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(21, 'create-permission', 'Create Permission', 20, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(22, 'edit-permission', 'Edit Permission', 21, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(23, 'delete-permission', 'Delete Permission', 22, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(24, 'view-page', 'View Page', 23, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(25, 'create-page', 'Create Page', 24, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(26, 'edit-page', 'Edit Page', 25, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(27, 'delete-page', 'Delete Page', 26, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(28, 'view-email-template', 'View Email Templates', 27, 1, 1, NULL, '2019-01-14 06:17:05', '2019-01-14 06:17:05', NULL),
(29, 'create-email-template', 'Create Email Templates', 28, 1, 1, NULL, '2019-01-14 06:17:06', '2019-01-14 06:17:06', NULL),
(30, 'edit-email-template', 'Edit Email Templates', 29, 1, 1, NULL, '2019-01-14 06:17:06', '2019-01-14 06:17:06', NULL),
(31, 'delete-email-template', 'Delete Email Templates', 30, 1, 1, NULL, '2019-01-14 06:17:06', '2019-01-14 06:17:06', NULL),
(32, 'edit-settings', 'Edit Settings', 31, 1, 1, NULL, '2019-01-14 06:17:06', '2019-01-14 06:17:06', NULL),
(33, 'view-blog-category', 'View Blog Categories Management', 32, 1, 1, NULL, '2019-01-14 06:17:06', '2019-02-24 04:34:13', '2019-02-24 04:34:13'),
(34, 'create-blog-category', 'Create Blog Category', 33, 1, 1, NULL, '2019-01-14 06:17:07', '2019-02-24 04:34:24', '2019-02-24 04:34:24'),
(35, 'edit-blog-category', 'Edit Blog Category', 34, 1, 1, NULL, '2019-01-14 06:17:07', '2019-02-24 04:34:36', '2019-02-24 04:34:36'),
(36, 'delete-blog-category', 'Delete Blog Category', 35, 1, 1, NULL, '2019-01-14 06:17:07', '2019-02-24 04:34:47', '2019-02-24 04:34:47'),
(37, 'view-blog-tag', 'View Blog Tags Management', 36, 1, 1, NULL, '2019-01-14 06:17:07', '2019-02-24 04:34:57', '2019-02-24 04:34:57'),
(38, 'create-blog-tag', 'Create Blog Tag', 37, 1, 1, NULL, '2019-01-14 06:17:07', '2019-02-24 04:35:08', '2019-02-24 04:35:08'),
(39, 'edit-blog-tag', 'Edit Blog Tag', 38, 1, 1, NULL, '2019-01-14 06:17:07', '2019-02-24 04:35:19', '2019-02-24 04:35:19'),
(40, 'delete-blog-tag', 'Delete Blog Tag', 39, 1, 1, NULL, '2019-01-14 06:17:07', '2019-02-24 04:35:29', '2019-02-24 04:35:29'),
(41, 'view-blog', 'View Blogs Management', 40, 1, 1, NULL, '2019-01-14 06:17:07', '2019-02-24 04:35:52', '2019-02-24 04:35:52'),
(42, 'create-blog', 'Create Blog', 41, 1, 1, NULL, '2019-01-14 06:17:07', '2019-02-24 04:36:14', '2019-02-24 04:36:14'),
(43, 'edit-blog', 'Edit Blog', 42, 1, 1, NULL, '2019-01-14 06:17:07', '2019-02-24 04:36:03', '2019-02-24 04:36:03'),
(44, 'delete-blog', 'Delete Blog', 43, 1, 1, NULL, '2019-01-14 06:17:07', '2019-02-24 04:37:55', '2019-02-24 04:37:55'),
(45, 'view-faq', 'View FAQ Management', 44, 1, 1, NULL, '2019-01-14 06:17:07', '2019-02-24 04:38:04', '2019-02-24 04:38:04'),
(46, 'create-faq', 'Create FAQ', 45, 1, 1, NULL, '2019-01-14 06:17:07', '2019-02-24 04:38:12', '2019-02-24 04:38:12'),
(47, 'edit-faq', 'Edit FAQ', 46, 1, 1, NULL, '2019-01-14 06:17:07', '2019-02-24 04:38:21', '2019-02-24 04:38:21'),
(48, 'delete-faq', 'Delete FAQ', 47, 1, 1, NULL, '2019-01-14 06:17:07', '2019-02-24 04:38:54', '2019-02-24 04:38:54'),
(49, 'create-plant-equipment', 'Create Plant Equipment', 31, 1, 1, 1, '2019-01-21 10:42:35', '2019-01-21 10:43:48', NULL),
(50, 'edit-plant-equipment', 'Edit Plant Equipment', 32, 1, 1, NULL, '2019-02-09 03:20:08', '2019-02-09 03:20:08', NULL),
(51, 'view-plant-equipment', 'View Plant Equipment', 33, 1, 1, NULL, '2019-02-09 03:21:08', '2019-02-09 03:21:08', NULL),
(52, 'delete-plant-equipment', 'Delete Plant Equipment', 34, 1, 1, NULL, '2019-02-09 03:22:25', '2019-02-09 03:22:25', NULL),
(53, 'view-reports', 'View Reports', 40, 1, 1, NULL, '2019-02-09 03:48:43', '2019-02-09 03:48:43', NULL),
(54, 'create-projects', 'Create Projects', 41, 1, 1, NULL, '2019-02-09 07:33:20', '2019-02-09 07:33:20', NULL),
(55, 'edit-projects', 'Edit Projects', 33, 1, 1, NULL, '2019-02-09 07:46:59', '2019-02-09 07:46:59', NULL),
(56, 'view-projects', 'View Projects', 34, 1, 1, NULL, '2019-02-09 08:12:35', '2019-02-09 08:12:35', NULL),
(57, 'delete-projects', 'Delete Projects', 38, 1, 1, NULL, '2019-02-09 08:13:20', '2019-02-09 08:13:20', NULL),
(58, 'create-items', 'Create Items', 45, 1, 1, NULL, '2019-02-22 17:14:05', '2019-02-22 17:14:05', NULL),
(59, 'edit-items', 'Edit Items', 46, 1, 1, NULL, '2019-02-22 17:15:10', '2019-02-22 17:15:10', NULL),
(60, 'view-items', 'View Items', 47, 1, 1, NULL, '2019-02-22 17:15:38', '2019-02-22 17:15:38', NULL),
(61, 'delete-items', 'Delete Items', 48, 1, 1, NULL, '2019-02-22 17:16:35', '2019-02-22 17:16:35', NULL),
(62, 'view-products', 'View Products', 48, 1, 1, NULL, '2019-02-22 18:09:38', '2019-02-22 18:09:38', NULL),
(63, 'create-products', 'Create Products', 49, 1, 1, NULL, '2019-02-22 18:10:22', '2019-02-22 18:10:22', NULL),
(64, 'edit-products', 'Edit Products', 49, 1, 1, 1, '2019-02-22 18:10:55', '2019-02-22 18:11:59', NULL),
(65, 'delete-products', 'Delete Products', 50, 1, 1, 1, '2019-02-22 18:11:18', '2019-02-22 18:11:35', NULL),
(66, 'create-product-receive', 'Create Product Receive', 51, 1, 1, NULL, '2019-02-22 19:51:48', '2019-02-22 19:51:48', NULL),
(67, 'edit-product-receive', 'Edit Product Receive', 52, 1, 1, NULL, '2019-02-22 19:52:36', '2019-02-22 19:52:36', NULL),
(68, 'view-product-receive', 'View Product Receive', 53, 1, 1, NULL, '2019-02-22 19:53:22', '2019-02-22 19:53:22', NULL),
(69, 'delete-product-receive', 'Delete Product Receive', 54, 1, 1, NULL, '2019-02-22 19:54:06', '2019-02-22 19:54:06', NULL),
(70, 'create-project-challan', 'Create Project Challan', 61, 1, 1, NULL, '2019-02-22 21:14:49', '2019-02-22 21:14:49', NULL),
(71, 'edit-project-challan', 'Ereate Project Challan', 60, 1, 1, NULL, '2019-02-22 21:15:22', '2019-02-22 21:15:22', NULL),
(72, 'view-project-challan', 'View Project Challan', 62, 1, 1, NULL, '2019-02-22 21:15:58', '2019-02-22 21:15:58', NULL),
(73, 'delete-project-challan', 'Delete Project Challan', 64, 1, 1, NULL, '2019-02-22 21:16:33', '2019-02-22 21:16:33', NULL),
(74, 'view-suppliers', 'View Suppliers', 50, 1, 1, NULL, '2019-02-24 04:40:07', '2019-02-24 04:40:07', NULL),
(75, 'edit-suppliers', 'Edit Suppliers', 51, 1, 1, NULL, '2019-02-24 04:40:39', '2019-02-24 04:40:39', NULL),
(76, 'create-suppliers', 'Create Suppliers', 52, 1, 1, NULL, '2019-02-24 04:41:08', '2019-02-24 04:41:08', NULL),
(77, 'delete-suppliers', 'Delete Suppliers', 54, 1, 1, NULL, '2019-02-24 04:41:39', '2019-02-24 04:41:39', NULL),
(78, 'issue-management', 'Issue Management', 6, 1, 1, NULL, '2019-05-12 16:32:51', '2019-05-12 16:32:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`) VALUES
(34, 2, 3),
(35, 1, 2),
(36, 3, 2),
(37, 4, 2),
(38, 5, 2),
(39, 6, 2),
(40, 7, 2),
(41, 8, 2),
(42, 16, 2),
(43, 20, 2),
(44, 24, 2),
(45, 25, 2),
(46, 26, 2),
(47, 27, 2),
(48, 28, 2),
(49, 29, 2),
(50, 30, 2),
(51, 31, 2),
(52, 33, 2),
(53, 34, 2),
(54, 35, 2),
(55, 36, 2),
(56, 37, 2),
(57, 38, 2),
(58, 39, 2),
(59, 40, 2),
(60, 41, 2),
(61, 42, 2),
(62, 43, 2),
(63, 44, 2),
(64, 45, 2),
(65, 46, 2),
(66, 47, 2),
(67, 48, 2),
(68, 49, 2);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`id`, `permission_id`, `user_id`) VALUES
(1, 42, 2),
(2, 34, 2),
(3, 38, 2),
(4, 29, 2),
(5, 46, 2),
(6, 25, 2),
(7, 44, 2),
(8, 36, 2),
(9, 40, 2),
(10, 31, 2),
(11, 48, 2),
(12, 27, 2),
(13, 43, 2),
(14, 35, 2),
(15, 39, 2),
(16, 30, 2),
(17, 47, 2),
(18, 26, 2),
(19, 8, 2),
(20, 3, 2),
(21, 5, 2),
(22, 1, 2),
(23, 33, 2),
(24, 37, 2),
(25, 41, 2),
(26, 6, 2),
(27, 7, 2),
(28, 28, 2),
(29, 45, 2),
(30, 24, 2),
(31, 20, 2),
(32, 16, 2),
(33, 4, 2),
(34, 2, 3),
(38, 1, 4),
(39, 49, 4),
(40, 50, 4),
(41, 51, 4),
(42, 52, 4),
(170, 1, 5),
(171, 49, 5),
(172, 50, 5),
(173, 51, 5),
(174, 52, 5),
(175, 53, 5),
(176, 54, 5),
(177, 55, 5),
(178, 56, 5),
(179, 57, 5),
(180, 58, 5),
(181, 59, 5),
(182, 60, 5),
(183, 61, 5),
(184, 62, 5),
(185, 63, 5),
(186, 64, 5),
(187, 65, 5),
(188, 66, 5),
(189, 67, 5),
(190, 68, 5),
(191, 69, 5),
(192, 70, 5),
(193, 71, 5),
(194, 72, 5),
(195, 73, 5),
(196, 74, 5),
(197, 75, 5),
(198, 76, 5),
(199, 77, 5),
(200, 78, 5);

-- --------------------------------------------------------

--
-- Table structure for table `plant_and_equipment`
--

CREATE TABLE `plant_and_equipment` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `equipment_type` int(11) DEFAULT NULL,
  `date_form` datetime DEFAULT NULL,
  `date_to` datetime DEFAULT NULL,
  `name` varchar(700) DEFAULT NULL,
  `eel_code` varchar(300) DEFAULT NULL,
  `country_of_origin` varchar(400) DEFAULT NULL,
  `capacity` varchar(300) DEFAULT NULL,
  `make_by` varchar(300) DEFAULT NULL,
  `model` varchar(300) DEFAULT NULL,
  `year_of_manufac` int(11) DEFAULT NULL,
  `present_location` varchar(300) DEFAULT NULL,
  `present_condition` varchar(400) DEFAULT NULL,
  `remarks` text NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plant_and_equipment`
--

INSERT INTO `plant_and_equipment` (`id`, `project_id`, `equipment_type`, `date_form`, `date_to`, `name`, `eel_code`, `country_of_origin`, `capacity`, `make_by`, `model`, `year_of_manufac`, `present_location`, `present_condition`, `remarks`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 3, 1, NULL, NULL, 'Dump Truck', 'DT-01', '44', '10m3', 'SINO', 'ZZ3168G3615', 2018, 'PCT Yard', NULL, 'No Comments', 5, NULL, '2019-05-13 17:18:42', '2019-05-24 23:34:47', NULL),
(10, 4, 1, NULL, NULL, 'Dump Truck', 'DT-02', '44', '10m3', 'SINO', 'ZZ3168G3615', 2018, 'NCT,Ctg', '2', 'No Comments', 5, NULL, '2019-05-13 17:22:15', '2019-05-24 23:35:02', NULL),
(11, 10, 1, NULL, NULL, 'Dump Truck', 'DT-03', '44', '10m3', 'SINO', 'ZZ3168G3615', 2018, 'Raozan Road Project', '2', 'No Comments', 5, NULL, '2019-05-13 17:24:44', '2019-05-24 23:35:20', NULL),
(12, 3, 1, NULL, NULL, 'Dump Truck', 'DT-04', '44', '10m3', 'SINO', 'ZZ3168G3615', 2018, 'PCT Yard', '2', 'No Comments', 5, NULL, '2019-05-13 18:05:17', '2019-05-24 23:35:38', NULL),
(13, 4, 1, NULL, NULL, 'Dump Truck', 'DT-05', '44', '10m3', 'SINO', 'ZZ3168G3615', 2018, 'NCT,Ctg', NULL, 'No Comments', 5, NULL, '2019-05-13 18:08:58', '2019-05-24 23:32:45', NULL),
(14, 10, 1, NULL, NULL, 'Dump Truck', 'DT-06', '44', '10m3', 'SINO', 'ZZ3168G3615', 2018, 'Raozan Road Project', '2', 'No Comments', 5, NULL, '2019-05-13 18:11:01', '2019-05-24 23:32:24', NULL),
(15, 3, 1, NULL, NULL, 'Dump Truck', 'DT-07', '44', '16m3', 'SINO', 'ZZ257N33647', 2018, 'PCT Yard', '2', 'No Comments', 5, NULL, '2019-05-13 18:15:28', '2019-05-24 23:32:07', NULL),
(16, 8, 1, NULL, NULL, 'Dump Truck', 'DT-08', '44', '16m3', 'SINO', 'ZZ257N33647', 2018, 'Water  logging', '2', 'No Comments', 5, NULL, '2019-05-13 18:18:17', '2019-05-24 23:31:47', NULL),
(17, 3, 1, NULL, NULL, 'Prime Mover (Low Bed)', 'LB-01', '44', '80 Ton', 'SINO', 'ZZ4257V3241W TAZ9950TDP', 2018, 'PCT Yard', '2', 'No Comments', 5, NULL, '2019-05-13 18:20:57', '2019-05-24 23:28:13', NULL),
(18, 3, 1, NULL, NULL, 'Prime Mover (Low Bed)', 'LB-02', '44', '80 Ton', 'SINO', 'ZZ4257V3241W TAZ9950TDP', 2018, 'PCT Yard', '2', 'No Comments', 5, NULL, '2019-05-14 00:36:45', '2019-05-24 23:28:33', NULL),
(19, 4, 1, NULL, NULL, 'Excavator (standard)', 'EX-01', '113', '0.70 m3', 'DOOSAN', 'DX225LCA', 2018, 'NCT,Ctg', '2', 'No Comments', 5, NULL, '2019-05-14 01:32:07', '2019-05-24 23:31:31', NULL),
(20, 4, 1, NULL, NULL, 'Excavator (standard)', 'EX-02', '113', '0.70 m3', 'DOOSAN', 'DX225LCA', 2018, 'NCT,Ctg', '2', 'No Comments', 5, NULL, '2019-05-14 01:33:26', '2019-05-24 23:31:14', NULL),
(21, 8, 1, NULL, NULL, 'Excavator(With Breaker)', 'EX-03', '44', '0.90m3', 'ZOOMLION', 'ZE210E', 2018, 'Water  logging', '2', 'No Comments', 5, NULL, '2019-05-14 01:35:25', '2019-05-24 23:26:25', NULL),
(22, 3, 1, NULL, NULL, 'Excavator(With Breaker)', 'EX-04', '44', '0.90m3', 'ZOOMLION', 'ZE210E', 2018, 'PCT Yard', '2', 'No Comments', 5, NULL, '2019-05-14 01:37:35', '2019-05-24 23:26:41', NULL),
(23, 3, 1, NULL, NULL, 'Excavator(Long Boom)', 'EX-05', '44', '0.5m3', 'ZOOMLION', 'ZE360E', 2018, 'PCT Yard', '2', 'No Comments', 5, NULL, '2019-05-14 01:40:49', '2019-05-24 23:30:53', NULL),
(24, 8, 1, NULL, NULL, 'Excavator(Long Boom)', 'Ex-06', '44', '0.5m3', 'ZOOMLION', 'ZE360E', 2018, 'Water  logging', '2', 'No comments', 5, NULL, '2019-05-18 23:19:13', '2019-05-24 23:30:32', NULL),
(25, 3, 1, NULL, NULL, 'Excavator(Pile Driver)', 'Ex-07', '44', '1.60m3', 'XCMG', 'XE370CA', 2018, 'PCT Yard', '2', 'Ready for work', 5, NULL, '2019-05-18 23:39:58', '2019-05-24 23:30:15', NULL),
(26, 3, 1, NULL, NULL, 'Excavator(Pile Driver)', 'Ex-08', '44', '1.60m3', 'XCMG', 'XE370CA', 2018, 'PCT Yard', '2', 'Ready for Work', 5, NULL, '2019-05-18 23:41:39', '2019-05-24 23:29:57', NULL),
(27, 3, 1, NULL, NULL, 'Amphibious Hydraulic Excavator', 'AEX-01', '129', '0.33m3', 'Ultratex', 'TB285CH', 2019, 'PCT Yard', '2', 'No Comments', 5, NULL, '2019-05-18 23:50:33', '2019-05-24 20:44:11', NULL),
(28, 3, 1, NULL, NULL, 'Amphibious Hydraulic Excavator', 'AEX-02', '129', '0.33m3', 'Ultratex', 'TB285CH', 2019, 'PCT Yard', '2', 'No Comments', 5, NULL, '2019-05-20 00:23:41', '2019-05-24 23:40:46', NULL),
(29, 4, 1, NULL, NULL, 'Wheel Loader', 'WL-01', '44', '3 Ton', 'POWER PLUS', 'PP-938-V', 2018, 'NCT,Ctg', '2', 'No Comments', 5, NULL, '2019-05-20 00:26:15', '2019-05-24 22:34:05', NULL),
(30, 8, 1, NULL, NULL, 'Wheel Loader', 'WL-02', '44', '3 Ton', 'POWER PLUS', 'PP-938-V', 2018, 'Water  logging', '2', 'No Comments', 5, NULL, '2019-05-20 00:29:33', '2019-05-20 00:29:33', NULL),
(31, 10, 1, NULL, NULL, 'Wheel Loader', 'WL-03', '44', '3 Ton', 'LONG KING', 'LG833N', 2018, 'Raozan Road Project', '2', 'No Comment', 5, NULL, '2019-05-20 00:32:12', '2019-05-24 22:32:01', NULL),
(32, 3, 1, NULL, NULL, 'Wheel Loader', 'WL-04', '44', '3 Ton', 'LONG KING', 'LG833N', 2018, 'PCT Yard', '2', 'No Comment', 5, NULL, '2019-05-20 00:34:22', '2019-05-24 22:31:17', NULL),
(33, 3, 1, NULL, NULL, 'Wheel Loader', 'WL-05', '44', '5 Ton', 'LONG KING', 'ZL50C', 2018, 'PCT Yard', '2', 'No Comment', 5, NULL, '2019-05-20 00:37:44', '2019-05-24 22:30:42', NULL),
(34, 4, 1, NULL, NULL, 'Wheel Loader', 'WL-06', '44', '5 Ton', 'LONG KING', 'ZL50C', 2018, 'NCT,Ctg', '2', 'No Comment', 5, NULL, '2019-05-20 00:39:09', '2019-05-24 22:30:00', NULL),
(35, 4, 1, NULL, NULL, 'Bull Dozer', 'BD-01', '44', '4.50 m3', 'POWER PLUS', 'D65EX-15', 2018, 'NCT,Ctg', '2', 'No Comment', 5, NULL, '2019-05-20 00:42:41', '2019-05-24 23:39:57', NULL),
(36, 3, 1, NULL, NULL, 'Bull Dozer', 'BD-02', '44', '4.50 m3', 'ZOOMLION', 'ZD160-3', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 00:45:04', '2019-05-24 23:39:41', NULL),
(37, 4, 1, NULL, NULL, 'Motor Grader', 'M Gr-01', '99', 'n/a', 'ACE', 'AG-176', 2018, 'NCT,Ctg', '2', 'N/A', 5, NULL, '2019-05-20 00:48:02', '2019-05-24 23:27:52', NULL),
(38, 4, 1, NULL, NULL, 'Vibratory Roller', 'VR-01', '99', '12 Ton', 'ACE', 'ASD-115', 2018, 'NCT,Ctg', NULL, 'N/A', 5, NULL, '2019-05-20 00:50:55', '2019-05-24 22:42:59', NULL),
(39, 3, 1, NULL, NULL, 'Vibratory Roller', 'VR-02', '99', '12 Ton', 'ACE', 'ASD-115', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 00:53:15', '2019-05-24 22:32:30', NULL),
(40, 3, 1, NULL, NULL, 'Vibratory Roller', 'VR-03', '44', '12 Ton', 'CHANGLING', '8108L', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 00:57:08', '2019-05-24 22:33:04', NULL),
(41, 5, 1, NULL, NULL, 'Vibratory Roller', 'VR-034', '44', '12 Ton', 'CHANGLING', '8108L', 2018, 'Vashanchar', '2', 'N/A', 5, NULL, '2019-05-20 01:10:10', '2019-05-24 22:33:31', NULL),
(42, 10, 1, NULL, NULL, 'Backhoe Loader', 'BL-01', '99', '0.25m3', 'CASE', '770EXMAGNUM', 2018, 'Raozan Road Project', '2', 'N/A', 5, NULL, '2019-05-20 01:17:13', '2019-05-24 23:40:27', NULL),
(43, 10, 1, NULL, NULL, 'Backhoe Loader', 'BL-02', '99', '0.25m3', 'CASE', '770EXMAGNUM', 2018, 'Raozan Road Project', '2', 'N/A', 5, NULL, '2019-05-20 01:19:17', '2019-05-24 23:40:11', NULL),
(44, 3, 1, NULL, NULL, 'Crawler Crane', 'CC-01', '44', '380 Ton', 'ZOOMLION', 'ZCC3800', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 01:30:26', '2019-05-24 23:38:42', NULL),
(45, 3, 1, NULL, NULL, 'Crawler Crane', 'CC-02', '44', '180 Ton', 'ZOOMLION', 'QUY180', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 01:32:32', '2019-05-24 23:35:55', NULL),
(46, 3, 1, NULL, NULL, 'Crawler Crane', 'CC-03', '44', '85 Ton', 'XCMG', 'XCMG-85', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 19:47:31', '2019-05-24 23:36:07', NULL),
(47, 3, 1, NULL, NULL, 'Crawler Crane', 'CC-04', '44', '85 Ton', 'XCMG', 'XCMG-85', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 19:48:45', '2019-05-24 23:36:24', NULL),
(48, 3, 1, NULL, NULL, 'Rough Terran Crane', 'RT-01', '44', '300 Ton', 'ZOOMLION', 'ZRT-300', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 19:52:35', '2019-05-24 23:28:54', NULL),
(49, 3, 1, NULL, NULL, 'Rough Terran Crane', 'RT-02', '44', '75 Ton', 'ZOOMLION', 'RT-75', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 19:53:46', '2019-05-24 23:29:15', NULL),
(50, 3, 1, NULL, NULL, 'Rough Terran Crane', 'RT-03', '44', '35 Ton', 'ZOOMLION', 'RT-35', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 19:55:11', '2019-05-24 23:29:34', NULL),
(51, 3, 1, NULL, NULL, 'Diesel Hammer', 'DH-01', '44', '6.2 Ton', 'Starke', 'D62', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 20:01:09', '2019-05-24 23:34:15', NULL),
(52, 3, 1, NULL, NULL, 'Diesel Hammer', 'DH-02', '44', '6.2 Ton', 'STARKE', 'D62', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 20:03:04', '2019-05-24 23:34:31', NULL),
(53, 3, 1, NULL, NULL, 'Transit Mixer Truck', 'MT-01', '44', '9m3', 'ZOOMLION', '9JBH-R', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 20:07:01', '2019-05-24 23:21:43', NULL),
(54, 3, 1, NULL, NULL, 'Transit Mixer Truck', 'MT-02', '44', '9m3', 'ZOOMLION', '9JBH-R', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 20:08:20', '2019-05-24 23:21:58', NULL),
(55, 3, 1, NULL, NULL, 'Transit Mixer Truck', 'MT-03', '44', '9m3', 'ZOOMLION', '9JBH-R', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 20:09:18', '2019-05-24 22:45:44', NULL),
(56, 3, 1, NULL, NULL, 'Transit Mixer Truck', 'MT-04', '44', '9m3', 'ZOOMLION', '9JBH-R', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 20:10:49', '2019-05-24 22:45:15', NULL),
(57, 3, 1, NULL, NULL, 'Stationary Concrete Pump', 'SCP-01', '44', '78/47 m3/Hr', 'ZOOMLION', 'HBT60.174RSU', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 20:13:15', '2019-05-24 23:22:51', NULL),
(58, 3, 1, NULL, NULL, 'Stationary Concrete Pump', 'SCP-02', '44', '78/47 m3/Hr', 'ZOOMLION', 'HBT60.174RSU', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 20:14:30', '2019-05-24 23:23:06', NULL),
(59, 3, 1, NULL, NULL, 'Truck Mounted Concrete Boom Pump', 'BP-01', '44', '120/170 m3/Hr', 'ZOOMLION', '49X-6RZ', 2018, 'NCT,Ctg', '2', 'N/A', 5, NULL, '2019-05-20 21:02:02', '2019-05-24 22:44:55', NULL),
(60, 9, 1, NULL, NULL, 'Concrete Block Making Machine', 'CBM-01', '44', 'N/A', 'ZENITH', 'QT10', 2019, 'Sirajgonj Project', '2', 'N/A', 5, NULL, '2019-05-20 21:04:44', '2019-05-24 23:38:56', NULL),
(61, 3, 1, NULL, NULL, 'Concrete Batching Plant', 'CBP-01', '44', '30m3/Hr', 'POWER PLUS', 'PBP350S', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 21:09:15', '2019-05-24 23:39:27', NULL),
(62, 3, 1, NULL, NULL, 'Concrete Batching Plant', 'CBP-02', '44', '60 m3/Hr', 'ZOOMLION', 'HZX60', 2018, 'PCT Yard', '2', 'N/A', 5, NULL, '2019-05-20 21:11:06', '2019-05-24 23:39:14', NULL),
(63, 7, 1, NULL, NULL, 'Tractor', 'TT-01', '99', '100 Cft', 'SONALIKA', 'D150RX', 2018, 'Payra  Project', '2', 'N/A', 5, NULL, '2019-05-20 21:45:08', '2019-05-24 23:24:07', NULL),
(64, 7, 1, NULL, NULL, 'Tractor', 'TT-02', '99', '100 Cft', 'SONALIKA', 'D150RX', 2018, 'Payra  Project', '2', 'N/A', 5, NULL, '2019-05-20 21:46:59', '2019-05-24 23:24:26', NULL),
(65, 7, 1, NULL, NULL, 'Tractor', 'TT-03', '99', '100 Cft', 'SONALIKA', 'D150RX', 2018, 'Payra  Project', '2', 'N/A', 5, NULL, '2019-05-20 21:48:34', '2019-05-24 23:24:50', NULL),
(66, 7, 1, NULL, NULL, 'Tractor', 'TT-04', '99', '100 Cft', 'SONALIKA', 'D150RX', 2018, 'Payra  Project', '2', 'n/a', 5, NULL, '2019-05-20 21:49:41', '2019-05-24 23:25:11', NULL),
(67, 5, 1, NULL, NULL, 'Tractor', 'TT-05', '99', '100 Cft', 'SONALIKA', 'D150RX', 2018, 'Vashanchar', '2', 'n/a', 5, NULL, '2019-05-20 21:51:13', '2019-05-24 23:25:30', NULL),
(68, 10, 1, NULL, NULL, 'Tractor', 'TT-06', '99', '100 Cft', 'SONALIKA', 'D150RX', 2018, 'Raozan Road Project', '2', 'n/a', 5, NULL, '2019-05-20 21:54:56', '2019-05-24 23:25:51', NULL),
(69, 10, 1, NULL, NULL, 'Tractor', 'TT-07', '99', '100 Cft', 'SONALIKA', 'D150RX', 2018, 'Raozan Road Project', '2', 'n/a', 5, NULL, '2019-05-20 22:43:58', '2019-05-24 22:35:27', NULL),
(70, 10, 1, NULL, NULL, 'Tractor', 'TT-08', '99', '100 Cft', 'SONALIKA', 'D150RX', 2018, 'Raozan Road Project', '2', 'n/a', 5, NULL, '2019-05-20 22:45:25', '2019-05-24 22:35:52', NULL),
(71, 9, 1, NULL, NULL, 'Tractor', 'TT-09', '99', '100 Cft', 'TAFE', 'TAFE-45DI', 2018, 'Sirajgonj Project', '2', 'n/a', 5, NULL, '2019-05-20 22:47:33', '2019-05-24 23:21:05', NULL),
(72, 9, 1, NULL, NULL, 'Tractor', 'TT-10', '99', '10 Ton', 'TAFE', 'TAFE-45DI', 2018, 'Sirajgonj Project', '2', 'n/a', 5, NULL, '2019-05-20 22:49:37', '2019-05-24 23:21:24', NULL),
(73, 9, 1, NULL, NULL, 'Fork Lift', 'FL-01', '113', '2 Ton', 'DOOSAN', 'D20GP', 2019, 'Sirajgonj Project', '2', 'n/a', 5, NULL, '2019-05-20 22:54:51', '2019-05-24 23:27:20', NULL),
(74, 9, 1, NULL, NULL, 'Fork Lift', 'FL-02', '113', '2 Ton', 'DOOSAN', 'D20GP', 2019, 'Sirajgonj Project', '2', 'n/a', 5, NULL, '2019-05-20 22:59:36', '2019-05-24 23:27:39', NULL),
(75, 4, 1, NULL, NULL, 'Diesel Generator', 'D Gn-01', '113', '27 KVA', 'DAWEOO', 'DAWEOO-PJM22-27 KVA', 2018, 'NCT,Ctg', NULL, 'n/a', 5, NULL, '2019-05-20 23:08:38', '2019-05-24 23:36:44', NULL),
(76, 5, 1, NULL, NULL, 'Diesel Generator', 'D Gn-02', '44', '25 KVA', 'SIFANG', 'SIFANG-1125', 2018, 'Vashanchar', '2', 'n/a', 5, NULL, '2019-05-20 23:12:03', '2019-05-24 23:37:01', NULL),
(77, 5, 1, NULL, NULL, 'Diesel Generator', 'D Gn-03', '44', '25KVA', 'SIFANG', 'SIFANG-1125', 2018, 'Vashanchar', '2', 'n/a', 5, NULL, '2019-05-20 23:14:03', '2019-05-24 23:37:16', NULL),
(78, 5, 1, NULL, NULL, 'Diesel Generator', 'D Gn-04', '44', '15KVA', 'FUJIAN', 'FUJIAN-POWER-12KW', 2018, 'Vashanchar', '2', 'n/a', 5, NULL, '2019-05-20 23:32:04', '2019-05-24 23:37:31', NULL),
(79, 7, 1, NULL, NULL, 'Diesel Generator', 'D Gn-05', '44', '19KVA', 'MINDONG', 'JBT8982011', 2018, 'Payra  Project', '2', 'n/a', 5, NULL, '2019-05-20 23:35:58', '2019-05-24 23:37:49', NULL),
(80, 7, 1, NULL, NULL, 'Diesel Generator', 'D Gn-06', '44', '18 KVA', 'MINDONG', 'JBT8982011', 2018, 'Payra  Project', '2', 'n/a', 5, NULL, '2019-05-20 23:38:40', '2019-05-24 23:38:03', NULL),
(81, 3, 1, NULL, NULL, 'Diesel Generator', 'D Gn-07', '218', '329 KVA', 'TEKSAN', 'TJ329DW5L', 2018, 'PCT Yard', '2', 'n/a', 5, NULL, '2019-05-20 23:51:30', '2019-05-24 23:38:20', NULL),
(82, 3, 1, NULL, NULL, 'Diesel Generator', 'D Gn-08', '218', '329 KVA', 'TEKSAN', 'JBT8982011', 2018, 'PCT Yard', '2', 'n/a', 5, NULL, '2019-05-20 23:53:06', '2019-05-24 23:33:09', NULL),
(83, 3, 1, NULL, NULL, 'Diesel Generator', 'D Gn-09', '218', '180KVA', 'TEKSAN', 'TJ180DW5A', 2018, 'PCT Yard', '2', 'n/a', 5, NULL, '2019-05-20 23:55:28', '2019-05-24 23:33:24', NULL),
(84, 3, 1, NULL, NULL, 'Diesel Generator', 'D Gn-10', '44', '65KVA', 'PRAMAC', 'GSW65', 2017, 'PCT Yard', '2', 'n/a', 5, NULL, '2019-05-20 23:57:56', '2019-05-24 23:33:39', NULL),
(85, 3, 1, NULL, NULL, 'Diesel Generator', 'D Gn-11', '218', '21 KVA', 'TEKSAN', 'TJ21MS5A', 2018, 'PCT Yard', '2', 'n/a', 5, NULL, '2019-05-21 00:00:58', '2019-05-24 23:33:57', NULL),
(86, 8, 1, NULL, NULL, 'Tower Light', 'TL-01', '107', '3.5KVA', 'PRAMAC', 'LPW8T-KUBOTAZ482', 2017, 'Water  logging', '2', 'n/a', 5, NULL, '2019-05-21 00:04:49', '2019-05-24 23:23:23', NULL),
(87, 4, 1, NULL, NULL, 'Tower Light', 'TL-02', '107', '3.5KVA', 'PRAMAC', 'LPW8T-KUBOTAZ482', 2017, 'NCT,Ctg', '2', 'n/a', 5, NULL, '2019-05-21 00:16:23', '2019-05-24 23:23:47', NULL),
(88, 11, 1, NULL, NULL, 'Dump Truck', 'DT-09', '99', '10m3', 'EICHER', 'VE Terra-16XP', 2019, 'mongla', '2', 'no comments', 5, NULL, '2019-05-24 23:41:09', '2019-05-28 01:20:41', NULL),
(89, 11, 1, NULL, NULL, 'Dump Truck', 'DT-10', '99', '10m3', 'EICHER', 'VE Terra-16XP', 2019, 'Mongla Prpject', '2', 'no comments', 5, NULL, '2019-05-28 01:23:35', '2019-05-28 01:23:35', NULL),
(90, 11, 1, NULL, NULL, 'Dump Truck', 'DT-11', '99', '10m3', 'EICHER', 'VE Terra-16XP', 2019, 'Mongla Project', '2', 'no comments', 5, NULL, '2019-05-28 01:25:26', '2019-05-28 01:25:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `present_condition`
--

CREATE TABLE `present_condition` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `present_condition`
--

INSERT INTO `present_condition` (`id`, `name`) VALUES
(1, 'Breakdown'),
(2, 'Running');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `code` varchar(200) DEFAULT NULL,
  `name` varchar(400) DEFAULT NULL,
  `unit_name` varchar(100) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `item_id`, `code`, `name`, `unit_name`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 'product-01', 'product-01', 'kg', 1, NULL, '2019-02-24 06:00:51', '2019-02-24 06:39:28', NULL),
(3, 2, 'product-02', 'Product 02', 'kg', 1, NULL, '2019-02-24 07:54:41', '2019-02-24 07:54:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_movement`
--

CREATE TABLE `product_movement` (
  `id` int(11) NOT NULL,
  `movement_no` varchar(500) DEFAULT NULL,
  `entry_date` datetime NOT NULL,
  `from_date` datetime DEFAULT NULL,
  `to_date` datetime DEFAULT NULL,
  `project_form` int(11) DEFAULT NULL,
  `project_to` int(11) DEFAULT NULL,
  `total_quantity` int(11) NOT NULL,
  `remarks` text,
  `movement_type` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_movement_details`
--

CREATE TABLE `product_movement_details` (
  `id` int(11) NOT NULL,
  `movement_no` varchar(500) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `code` varchar(200) DEFAULT NULL,
  `project_name` varchar(500) NOT NULL,
  `address` text,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `code`, `project_name`, `address`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'P-001', 'E-Engineering', '72, Mohakhali C/A, (8th Floor), Rupayan Center, Dhaka-1212, Bangladesh.\r\nTel. : (88-02) 9825705, 9891562, 9891597, 9856358-9,\r\n9857902, 9852454, 9854423,\r\nFax: (88-02) 9855949, \r\nWeb:www.saifpowertecltd.com', 1, NULL, '2019-02-09 14:09:28', '2019-04-08 09:46:55', NULL),
(3, 'P-003', 'PCT,Ctg', '72, Mohakhali C/A, (8th Floor), Rupayan Center, Dhaka-1212, Bangladesh.\r\nTel. : (88-02) 9825705, 9891562, 9891597, 9856358-9,\r\n9857902, 9852454, 9854423,\r\nFax: (88-02) 9855949, \r\nWeb:www.saifpowertecltd.com', 1, NULL, '2019-02-09 15:05:36', '2019-05-11 19:09:34', NULL),
(4, '04', 'NCT,Ctg', 'test', 5, NULL, '2019-05-11 19:14:45', '2019-05-11 19:14:45', NULL),
(5, '03', 'Vashanchar', ',', 5, NULL, '2019-05-13 13:54:29', '2019-05-13 13:54:29', NULL),
(6, '04', 'Karnophuli', NULL, 5, NULL, '2019-05-13 13:55:39', '2019-05-13 13:55:39', NULL),
(7, '05', 'Payra', NULL, 5, NULL, '2019-05-13 13:56:11', '2019-05-13 13:56:11', NULL),
(8, '06', 'Water Logging', NULL, 5, NULL, '2019-05-13 14:02:16', '2019-05-13 14:02:16', NULL),
(9, '07', 'Shirajgonj', NULL, 5, NULL, '2019-05-13 14:03:14', '2019-05-13 14:03:14', NULL),
(10, '08', 'Raozan Road', NULL, 5, NULL, '2019-05-13 14:05:55', '2019-05-13 14:05:55', NULL),
(11, '10', 'Mongla Poet Project', NULL, 5, NULL, '2019-05-24 23:38:21', '2019-05-24 23:38:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_type`
--

CREATE TABLE `project_type` (
  `id` int(11) NOT NULL,
  `name` varchar(600) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_type`
--

INSERT INTO `project_type` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Owned', 0, 0, '2019-02-09 21:18:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Rented', 0, 0, '2019-02-09 21:18:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `all` tinyint(1) NOT NULL DEFAULT '0',
  `sort` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `all`, `sort`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator', 1, 1, 1, 1, NULL, '2019-01-14 06:17:02', '2019-01-14 06:17:02', NULL),
(2, 'Executive', 0, 2, 0, 1, 1, '2019-01-14 06:17:02', '2019-01-21 10:46:25', NULL),
(3, 'User', 0, 3, 1, 1, NULL, '2019-01-14 06:17:02', '2019-01-14 06:17:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(6, 4, 3),
(10, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` text COLLATE utf8mb4_unicode_ci,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `company_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` text COLLATE utf8mb4_unicode_ci,
  `from_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` text COLLATE utf8mb4_unicode_ci,
  `disclaimer` text COLLATE utf8mb4_unicode_ci,
  `google_analytics` text COLLATE utf8mb4_unicode_ci,
  `home_video1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_video2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_video3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_video4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `explanation1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `explanation2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `explanation3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `explanation4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `values` text COLLATE utf8mb4_unicode_ci,
  `data_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `logo`, `favicon`, `seo_title`, `seo_keyword`, `seo_description`, `company_contact`, `company_address`, `from_name`, `from_email`, `facebook`, `linkedin`, `twitter`, `google`, `copyright_text`, `footer_text`, `terms`, `disclaimer`, `google_analytics`, `home_video1`, `home_video2`, `home_video3`, `home_video4`, `explanation1`, `explanation2`, `explanation3`, `explanation4`, `values`, `data_type`, `post_type`, `created_at`, `updated_at`) VALUES
(1, NULL, '1547629427Saif--Power-tec-Logo-226x48.jpg', '1547632780Saif--Power-tec-Logo-favicon.jpg', 'Saif Inventory Management System', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-15 08:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `social_logins`
--

CREATE TABLE `social_logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `sub_code` varchar(400) NOT NULL,
  `name` varchar(600) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `parent_id`, `sub_code`, `name`, `description`, `user_id`) VALUES
(1, 1, 'SUB001', 'Lennovo', 'Lenevo Details', 1),
(2, 1, 'SUB002', 'HP', 'HP Details', 1),
(3, 1, 'SUB003', 'Assus', 'Assus Description', 1),
(4, 2, 'SUB0002', 'Samsung', 'Samsung details', 1);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `code` varchar(300) NOT NULL,
  `name` varchar(600) NOT NULL,
  `address` text,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `code`, `name`, `address`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'sup-01', 'Apex Production', 'Contact: 017166998877\r\nMohammadpur, Housing LTD\r\nRoad: 03; House: 01\r\nDhaka,1207', 1, 0, 2019, '2019-04-08 09:21:09', '0000-00-00 00:00:00'),
(2, 'tata-012', 'Tata', 'test', 1, 0, 2019, '2019-05-08 08:51:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `temp_product_receive_data`
--

CREATE TABLE `temp_product_receive_data` (
  `id` int(11) NOT NULL,
  `receive_no` varchar(500) NOT NULL,
  `receive_date` datetime NOT NULL,
  `product_id` int(11) NOT NULL,
  `part_no` varchar(500) NOT NULL,
  `supplier_id` varchar(250) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` float NOT NULL DEFAULT '0',
  `project_id` int(11) NOT NULL,
  `project_to_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_product_receive_data`
--

INSERT INTO `temp_product_receive_data` (`id`, `receive_no`, `receive_date`, `product_id`, `part_no`, `supplier_id`, `quantity`, `unit_price`, `project_id`, `project_to_id`) VALUES
(99, 'RCV-001', '2019-04-13 00:00:00', 5, '123456', '1', 50, 3, 1, NULL),
(100, 'RCV-001', '2019-04-13 00:00:00', 4, '123456', '1', 60, 6, 1, NULL),
(101, 'ISS-001', '2019-04-13 00:00:00', 5, '123456', '1', 5, 3, 3, NULL),
(102, 'ISS-001', '2019-04-13 00:00:00', 4, '123456', '1', 6, 6, 3, NULL),
(103, 'RCV-002', '2019-04-21 00:00:00', 4, '1235567', '1', 10, 99.7, 3, NULL),
(104, 'RCV-003', '2019-05-07 00:00:00', 6, '212134', '1', 12, 9000, 3, NULL),
(106, 'ISS-002', '2019-05-07 00:00:00', 6, '212134', '1', 5, 9000, 3, NULL),
(107, 'RCV-004', '2019-05-09 00:00:00', 7, '9090911', '2', 2, 100, 3, NULL),
(108, 'ISS-003', '2019-05-09 00:00:00', 7, '9090911', '2', 2, 100, 3, NULL),
(111, 'RCV-005', '2019-06-12 00:00:00', 7, '123456', '1', 50, 10, 1, NULL),
(112, 'ISS-004', '2019-06-12 00:00:00', 7, '123456', '1', 20, 10, 1, NULL),
(115, 'REQ-001', '2019-06-19 00:00:00', 4, '', NULL, 1, 0, 1, NULL),
(116, 'REQ-001', '2019-06-19 00:00:00', 7, '', NULL, 5, 0, 1, NULL),
(121, 'REQ-004', '2019-06-19 00:00:00', 5, '', NULL, 1, 0, 1, NULL),
(122, 'REQ-005', '2019-06-19 00:00:00', 5, '', NULL, 6, 0, 1, NULL),
(123, 'REQ-005', '2019-06-19 00:00:00', 4, '', NULL, 2, 0, 1, NULL),
(124, 'REQ-10', '2019-06-25 00:00:00', 7, '', NULL, 30, 0, 9, NULL),
(125, 'REQ-10', '2019-06-25 00:00:00', 6, '', NULL, 10, 0, 9, NULL),
(126, 'REQ-007', '2019-06-25 00:00:00', 5, '', NULL, 23, 0, 1, NULL),
(127, 'REQ-007', '2019-06-25 00:00:00', 6, '', NULL, 56, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `confirmation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `is_term_accept` tinyint(1) NOT NULL DEFAULT '0' COMMENT ' 0 = not accepted,1 = accepted',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `status`, `confirmation_code`, `confirmed`, `is_term_accept`, `remember_token`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'Saif', 'admin@admin.com', '$2y$10$yzdRh.HNr8RukRLgiuVfoe37Ckjmr1wFdlQi0XHoTrCSLeBjLLYMS', 1, 'b1970adb3f301c8440c81e45b526060c', 1, 0, 'PCgsDtfHhHDhADntGcj7D97A9e4U0gtx0hlLn2heuaMyQBq5Gaa2sP55BPGr', 1, 1, '2019-01-14 06:17:02', '2019-01-21 02:36:38', NULL),
(2, 'Vipul', 'Basapati', 'executive@executive.com', '$2y$10$Xtds/X9sMuHoguyev.I6JO0g2b1c2eT4UiEuB3L6FUmmQlEI7h4gu', 1, '68c7a7b3a2968803ae6db884ae89f446', 1, 0, NULL, 1, NULL, '2019-01-14 06:17:02', '2019-01-14 06:17:02', NULL),
(3, 'User', 'Test', 'user@user.com', '$2y$10$hK926V1W.U2666U50rhQ7uj0TAMbB0cwa.kivaTzkVpSNVPQ7Re12', 1, 'fe3ae4e0b22211d756922a0bede508cf', 1, 0, NULL, 1, NULL, '2019-01-14 06:17:02', '2019-01-14 06:17:02', NULL),
(4, 'Rashed', 'Al Banna', 'r@gmail.com', '$2y$10$TKxuqIrAdSNAR5cvG0MtAeJrV34bRogqLC9bTmyyhsxZldb6THXtK', 1, 'b9a747f4ee9cab6be9906c6af5b4e04a', 1, 0, '0sC2zHt1RTTq6DhjXygPnrS7bQmLeSKe16Iq1ZzzELszRYcTxrEiU3ACZbiy', 1, NULL, '2019-02-03 08:18:51', '2019-02-03 08:18:51', NULL),
(5, 'Jalil Khan', 'Noyan', 'jalil@user.com', '$2y$10$9lxgfNkvft7KbMDsclTw0.nJ.VSWVVBxCh2PKfd631L3CCC348lC2', 1, '912486b93ae1907a983fd312ad08e270', 1, 0, 'c2nAyCV2lNVA4Mvc0cxWhlYByIDf4oaxntOl8ABW1bTYUWnxtOj9zgjQAV95', 1, 5, '2019-05-10 19:24:40', '2019-05-14 00:44:11', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_type_id_foreign` (`type_id`),
  ADD KEY `history_user_id_foreign` (`user_id`);

--
-- Indexes for table `history_types`
--
ALTER TABLE `history_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_ga_listunit`
--
ALTER TABLE `inv_ga_listunit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_issue`
--
ALTER TABLE `inv_issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_issuedetail`
--
ALTER TABLE `inv_issuedetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_item_unit`
--
ALTER TABLE `inv_item_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_material`
--
ALTER TABLE `inv_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_materialbalance`
--
ALTER TABLE `inv_materialbalance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_materialcategory`
--
ALTER TABLE `inv_materialcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_materialcategorysub`
--
ALTER TABLE `inv_materialcategorysub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_receive`
--
ALTER TABLE `inv_receive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_receivedetail`
--
ALTER TABLE `inv_receivedetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_requisition`
--
ALTER TABLE `inv_requisition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_requisition_details`
--
ALTER TABLE `inv_requisition_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_supplier`
--
ALTER TABLE `inv_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_supplierbalance`
--
ALTER TABLE `inv_supplierbalance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_warehosueinfo`
--
ALTER TABLE `inv_warehosueinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_details`
--
ALTER TABLE `item_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_page_slug_unique` (`page_slug`);

--
-- Indexes for table `parent_category`
--
ALTER TABLE `parent_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `plant_and_equipment`
--
ALTER TABLE `plant_and_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `present_condition`
--
ALTER TABLE `present_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_movement`
--
ALTER TABLE `product_movement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_movement_details`
--
ALTER TABLE `product_movement_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_type`
--
ALTER TABLE `project_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_logins_user_id_foreign` (`user_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_product_receive_data`
--
ALTER TABLE `temp_product_receive_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `history_types`
--
ALTER TABLE `history_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inv_ga_listunit`
--
ALTER TABLE `inv_ga_listunit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inv_issue`
--
ALTER TABLE `inv_issue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inv_issuedetail`
--
ALTER TABLE `inv_issuedetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inv_item_unit`
--
ALTER TABLE `inv_item_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inv_material`
--
ALTER TABLE `inv_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inv_materialbalance`
--
ALTER TABLE `inv_materialbalance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `inv_materialcategory`
--
ALTER TABLE `inv_materialcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inv_materialcategorysub`
--
ALTER TABLE `inv_materialcategorysub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inv_receive`
--
ALTER TABLE `inv_receive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `inv_receivedetail`
--
ALTER TABLE `inv_receivedetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `inv_requisition`
--
ALTER TABLE `inv_requisition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inv_requisition_details`
--
ALTER TABLE `inv_requisition_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `inv_supplier`
--
ALTER TABLE `inv_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inv_supplierbalance`
--
ALTER TABLE `inv_supplierbalance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inv_warehosueinfo`
--
ALTER TABLE `inv_warehosueinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `item_details`
--
ALTER TABLE `item_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parent_category`
--
ALTER TABLE `parent_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `plant_and_equipment`
--
ALTER TABLE `plant_and_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `present_condition`
--
ALTER TABLE `present_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_movement`
--
ALTER TABLE `product_movement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_movement_details`
--
ALTER TABLE `product_movement_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `project_type`
--
ALTER TABLE `project_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_logins`
--
ALTER TABLE `social_logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `temp_product_receive_data`
--
ALTER TABLE `temp_product_receive_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `history_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD CONSTRAINT `social_logins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
