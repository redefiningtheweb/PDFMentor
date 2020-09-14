<?php
settings_fields('rtw_pgaepb_css_setting');
$rtw_wprh_get_setting = get_option('rtw_pgaepb_css_setting_opt');
$pdf_page_size = array (
			'A0 (841x1189 mm ; 33.11x46.81 in)' => serialize(array(841,1189)),
			'A1 (594x841 mm ; 23.39x33.11 in)' => serialize(array(594,841)),
			'A2 (420x594 mm ; 16.54x23.39 in)' => serialize(array(420,594)),
			'A3 (297x420 mm ; 11.69x16.54 in)' => serialize(array(297,420)),
			'A4 (210x297 mm ; 8.27x11.69 in)' => serialize(array(210,297)),
			'A5 (148x210 mm ; 5.83x8.27 in)' => serialize(array(148,210)),
			'A6 (105x148 mm ; 4.13x5.83 in)' => serialize(array(105,148)),
			'A7 (74x105 mm ; 2.91x4.13 in)' => serialize(array(74,105)),
			'A8 (52x74 mm ; 2.05x2.91 in)' => serialize(array(52,74)),
			'A9 (37x52 mm ; 1.46x2.05 in)' => serialize(array(37,52)),
			'A10 (26x37 mm ; 1.02x1.46 in)' => serialize(array(26,37)),
			'A11 (18x26 mm ; 0.71x1.02 in)' => serialize(array(18,26)),
			'A12 (13x18 mm ; 0.51x0.71 in)' => serialize(array(13,18)),
			'ISO 216 B Series + 2 SIS 014711 extensions (default: B4)' => serialize(array(841,1189)),
			'B0 (1000x1414 mm ; 39.37x55.67 in)' => serialize(array(1000,1414)),
			'B1 (707x1000 mm ; 27.83x39.37 in)' => serialize(array(707,1000)),
			'B2 (500x707 mm ; 19.69x27.83 in)' => serialize(array(500,707)),
			'B3 (353x500 mm ; 13.90x19.69 in)' => serialize(array(353,500)),
			'B4 (250x353 mm ; 9.84x13.90 in)' => serialize(array(250,353)),
			'B5 (176x250 mm ; 6.93x9.84 in)' => serialize(array(176,250)),
			'B6 (125x176 mm ; 4.92x6.93 in)' => serialize(array(125,176)),
			'B7 (88x125 mm ; 3.46x4.92 in)' => serialize(array(88,125)),
			'B8 (62x88 mm ; 2.44x3.46 in)' => serialize(array(62,88)),
			'B9 (44x62 mm ; 1.73x2.44 in)' => serialize(array(44,62)),
			'B10 (31x44 mm ; 1.22x1.73 in)' => serialize(array(31,44)),
			'B11 (22x31 mm ; 0.87x1.22 in)' => serialize(array(22,31)),
			'B12 (15x22 mm ; 0.59x0.87 in)' => serialize(array(15,22)),
			'ISO 216 C Series + 2 SIS 014711 extensions + 2 EXTENSION (default: C4)' => serialize(array(841,1189)),
			'C0 (917x1297 mm ; 36.10x51.06 in)' =>serialize(array(917,1297)),
			'C1 (648x917 mm ; 25.51x36.10 in)' => serialize(array(648,917)),
			'C2 (458x648 mm ; 18.03x25.51 in)' => serialize(array(458,648)),
			'C3 (324x458 mm ; 12.76x18.03 in)' => serialize(array(324,458)),
			'C4 (229x324 mm ; 9.02x12.76 in)' => serialize(array(229,324)),
			'C5 (162x229 mm ; 6.38x9.02 in)' => serialize(array(162,229)),
			'C6 (114x162 mm ; 4.49x6.38 in)' => serialize(array(114,162)),
			'C7 (81x114 mm ; 3.19x4.49 in)' => serialize(array(81,114)),
			'C8 (57x81 mm ; 2.24x3.19 in)' => serialize(array(57,81)),
			'C9 (40x57 mm ; 1.57x2.24 in)' => serialize(array(40,57)),
			'C10 (28x40 mm ; 1.10x1.57 in)' => serialize(array(28,40)),
			'C11 (20x28 mm ; 0.79x1.10 in)' => serialize(array(20,28)),
			'C12 (14x20 mm ; 0.55x0.79 in)' =>serialize(array(14,20)),
			'C76 (81x162 mm ; 3.19x6.38 in)' => serialize(array(81,162)),
			'DL (110x220 mm ; 4.33x8.66 in)' => serialize(array(110,220)),
			'SIS 014711 E Series (default: E4)' => serialize(array(841,1189)),
			'E0 (879x1241 mm ; 34.61x48.86 in)' => serialize(array(879,1241)),
			'E1 (620x879 mm ; 24.41x34.61 in)' =>serialize(array(620,879)),
			'E2 (440x620 mm ; 17.32x24.41 in)' => serialize(array(440,620)),
			'E3 (310x440 mm ; 12.20x17.32 in)' => serialize(array(310,440)),
			'E4 (220x310 mm ; 8.66x12.20 in)' => serialize(array(220,310)),
			'E5 (155x220 mm ; 6.10x8.66 in)' => serialize(array(155,220)),
			'E6 (110x155 mm ; 4.33x6.10 in)' => serialize(array(110,155)),
			'E7 (78x110 mm ; 3.07x4.33 in)' => serialize(array(78,110)),
			'E8 (55x78 mm ; 2.17x3.07 in)' => serialize(array(55,78)),
			'E9 (39x55 mm ; 1.54x2.17 in)' => serialize(array(39,55)),
			'E10 (27x39 mm ; 1.06x1.54 in)' => serialize(array(27,39)),
			'E11 (19x27 mm ; 0.75x1.06 in)' => serialize(array(19,27)),
			'E12 (13x19 mm ; 0.51x0.75 in)' => serialize(array(13,19)),
			'SIS 014711 G Series (default: G4)' => serialize(array(841,1189)),
			'G0 (958x1354 mm ; 37.72x53.31 in)' => serialize(array(958,1354)),
			'G1 (677x958 mm ; 26.65x37.72 in)' => serialize(array(677,958)),
			'G2 (479x677 mm ; 18.86x26.65 in)' => serialize(array(479,677)),
			'G3 (338x479 mm ; 13.31x18.86 in)' => serialize(array(338,479)),
			'G4 (239x338 mm ; 9.41x13.31 in)' => serialize(array(239,338)),
			'G5 (169x239 mm ; 6.65x9.41 in)' => serialize(array(169,239)),
			'G6 (119x169 mm ; 4.69x6.65 in)' => serialize(array(119,169)),
			'G7 (84x119 mm ; 3.31x4.69 in)' => serialize(array(84,119)),
			'G8 (59x84 mm ; 2.32x3.31 in)' => serialize(array(59,84)),
			'G9 (42x59 mm ; 1.65x2.32 in)' => serialize(array(42,59)),
			'G10 (29x42 mm ; 1.14x1.65 in)' => serialize(array(29,42)),
			'G11 (21x29 mm ; 0.83x1.14 in)' => serialize(array(21,29)),
			'G12 (14x21 mm ; 0.55x0.83 in)' => serialize(array(14,21)),
			'ISO Press (default: RA4)' => serialize(array(841,1189)),
			'RA0 (860x1220 mm ; 33.86x48.03 in)' => serialize(array(860,1220)),
			'RA1 (610x860 mm ; 24.02x33.86 in)' => serialize(array(610,860)),
			'RA2 (430x610 mm ; 16.93x24.02 in)' => serialize(array(430,610)),
			'RA3 (305x430 mm ; 12.01x16.93 in)' => serialize(array(305,430)),
			'RA4 (215x305 mm ; 8.46x12.01 in)' => serialize(array(215,305)),
			'SRA0 (900x1280 mm ; 35.43x50.39 in)' => serialize(array(900,1280)),
			'SRA1 (640x900 mm ; 25.20x35.43 in)' => serialize(array(640,900)),
			'SRA2 (450x640 mm ; 17.72x25.20 in)' => serialize(array(450,640)),
			'SRA3 (320x450 mm ; 12.60x17.72 in)' => serialize(array(320,450)),
			'SRA4 (225x320 mm ; 8.86x12.60 in)' => serialize(array(225,320)),
			'German DIN 476 (default: 4A0)' => serialize(array(841,1189)),
			'4A0 (1682x2378 mm ; 66.22x93.62 in)' => serialize(array(1682,2378)),
			'2A0 (1189x1682 mm ; 46.81x66.22 in)' => serialize(array(1189,1682)),
			'Variations on the ISO Standard (default: A4_EXTRA)' => serialize(array(841,1189)),
			'A2_EXTRA (445x619 mm ; 17.52x24.37 in)' => serialize(array(445,619)),
			'A3+ (329x483 mm ; 12.95x19.02 in)' => serialize(array(329,483)),
			'A3_EXTRA (322x445 mm ; 12.68x17.52 in)' => serialize(array(322,445)),
			'A3_SUPER (305x508 mm ; 12.01x20.00 in)' => serialize(array(305,508)),
			'SUPER_A3 (305x487 mm ; 12.01x19.17 in)' => serialize(array(305,487)),
			'A4_EXTRA (235x322 mm ; 9.25x12.68 in)' => serialize(array(235,322)),
			'A4_SUPER (229x322 mm ; 9.02x12.68 in)' => serialize(array(229,322)),
			'SUPER_A4 (227x356 mm ; 8.94x14.02 in)' => serialize(array(227,356)),
			'A4_LONG (210x348 mm ; 8.27x13.70 in)' => serialize(array(210,348)),
			'F4 (210x330 mm ; 8.27x12.99 in)' => serialize(array(210,330)),
			'SO_B5_EXTRA (202x276 mm ; 7.95x10.87 in)' => serialize(array(202,276)),
			'A5_EXTRA (173x235 mm ; 6.81x9.25 in)' => serialize(array(173,235)),
			'ANSI Series (default: ANSI_A)' => serialize(array(841,1189)),
			'ANSI_E (864x1118 mm ; 34.00x44.00 in)' => serialize(array(864,1118)),
			'ANSI_D (559x864 mm ; 22.00x34.00 in)' => serialize(array(559,864)),
			'ANSI_C (432x559 mm ; 17.00x22.00 in)' => serialize(array(432,559)),
			'ANSI_B (279x432 mm ; 11.00x17.00 in)' => serialize(array(279,432)),
			'ANSI_A (216x279 mm ; 8.50x11.00 in)' => serialize(array(216,279)),
			'Traditional \'Loose\' North American Paper Sizes (default: LETTER)' => serialize(array(841,1189)),
			'LEDGER, USLEDGER (432x279 mm ; 17.00x11.00 in)' => serialize(array(432,279)),
			'TABLOID, USTABLOID, BIBLE, ORGANIZERK (279x432 mm ; 11.00x17.00 in)' => serialize(array(279,432)),
			'LETTER, USLETTER, ORGANIZERM (216x279 mm ; 8.50x11.00 in)' => serialize(array(216,279)),
			'LEGAL, USLEGAL (216x356 mm ; 8.50x14.00 in)' => serialize(array(216,356)),
			'GLETTER, GOVERNMENTLETTER (203x267 mm ; 8.00x10.50 in)' => serialize(array(203,267)),
			'JLEGAL, JUNIORLEGAL (203x127 mm ; 8.00x5.00 in)' => serialize(array(203,127)),
			'Other North American Paper Sizes (default: FOLIO)' => serialize(array(841,1189)),
			'QUADDEMY (889x1143 mm ; 35.00x45.00 in)' => serialize(array(889,1143)),
			'SUPER_B (330x483 mm ; 13.00x19.00 in)' => serialize(array(330,483)),
			'QUARTO (229x279 mm ; 9.00x11.00 in)' => serialize(array(229,279)),
			'FOLIO, GOVERNMENTLEGAL (216x330 mm ; 8.50x13.00 in)' => serialize(array(216,330)),
			'EXECUTIVE, MONARCH (184x267 mm ; 7.25x10.50 in)' => serialize(array(184,267)),
			'MEMO, STATEMENT, ORGANIZERL (140x216 mm ; 5.50x8.50 in)' => serialize(array(140,216)),
			'FOOLSCAP (210x330 mm ; 8.27x13.00 in)' => serialize(array(210,330)),
			'COMPACT (108x171 mm ; 4.25x6.75 in)' => serialize(array(108,171)),
			'ORGANIZERJ (70x127 mm ; 2.75x5.00 in)' => serialize(array(70,127)),
			'Canadian standard CAN 2-9.60M (default: P4)' => serialize(array(841,1189)),
			'P1 (560x860 mm ; 22.05x33.86 in)' => serialize(array(560,860)),
			'P2 (430x560 mm ; 16.93x22.05 in)' => serialize(array(430,560)),
			'P3 (280x430 mm ; 11.02x16.93 in)' => serialize(array(280,430)),
			'P4 (215x280 mm ; 8.46x11.02 in)' => serialize(array(215,280)),
			'P5 (140x215 mm ; 5.51x8.46 in)' => serialize(array(140,215)),
			'P6 (107x140 mm ; 4.21x5.51 in)' => serialize(array(107,140)),
			'North American Architectural Sizes (default: ARCH_A)' => serialize(array(841,1189)),
			'ARCH_E (914x1219 mm ; 36.00x48.00 in)' => serialize(array(914,1219)),
			'ARCH_E1 (762x1067 mm ; 30.00x42.00 in)' => serialize(array(762,1067)),
			'ARCH_D (610x914 mm ; 24.00x36.00 in)' => serialize(array(610,914)),
			'ARCH_C, BROADSHEET (457x610 mm ; 18.00x24.00 in)' => serialize(array(457,610)),
			'ARCH_B (305x457 mm ; 12.00x18.00 in)' => serialize(array(305,457)),
			'ARCH_A (229x305 mm ; 9.00x12.00 in)' => serialize(array(229,305)),
			'Announcement Envelopes (default: ANNENV_A2)' => serialize(array(841,1189)),
			'ANNENV_A2 (111x146 mm ; 4.37x5.75 in)' => serialize(array(111,146)),
			'ANNENV_A6 (121x165 mm ; 4.75x6.50 in)' => serialize(array(121,165)),
			'ANNENV_A7 (133x184 mm ; 5.25x7.25 in)' => serialize(array(133,184)),
			'ANNENV_A8 (140x206 mm ; 5.50x8.12 in)' => serialize(array(140,206)),
			'ANNENV_A10 (159x244 mm ; 6.25x9.62 in)' => serialize(array(159,244)),
			'ANNENV_SLIM (98x225 mm ; 3.87x8.87 in)' => serialize(array(98,225)),
			'Commercial Envelopes (default: COMMENV_N10)' => serialize(array(841,1189)),
			'COMMENV_N6_1/4 (89x152 mm ; 3.50x6.00 in)' => serialize(array(89,152)),
			'COMMENV_N6_3/4 (92x165 mm ; 3.62x6.50 in)' => serialize(array(92,165)),
			'COMMENV_N8 (98x191 mm ; 3.87x7.50 in)' => serialize(array(98,191)),
			'COMMENV_N9 (98x225 mm ; 3.87x8.87 in)' => serialize(array(98,225)),
			'COMMENV_N10 (105x241 mm ; 4.12x9.50 in)' => serialize(array(105,241)),
			'COMMENV_N11 (114x263 mm ; 4.50x10.37 in)' => serialize(array(114,263)),
			'COMMENV_N12 (121x279 mm ; 4.75x11.00 in)' => serialize(array(121,279)),
			'COMMENV_N14 (127x292 mm ; 5.00x11.50 in)' => serialize(array(127,292)),
			'Catalogue Envelopes (default: CATENV_N10_1/2)' => serialize(array(841,1189)),
			'CATENV_N1 (152x229 mm ; 6.00x9.00 in)' => serialize(array(152,229)),
			'CATENV_N1_3/4 (165x241 mm ; 6.50x9.50 in)' => serialize(array(165,241)),
			'CATENV_N2 (165x254 mm ; 6.50x10.00 in)' => serialize(array(165,254)),
			'CATENV_N3 (178x254 mm ; 7.00x10.00 in)' => serialize(array(178,254)),
			'CATENV_N6 (191x267 mm ; 7.50x10.50 in)' => serialize(array(191,267)),
			'CATENV_N7 (203x279 mm ; 8.00x11.00 in)' => serialize(array(203,279)),
			'CATENV_N8 (210x286 mm ; 8.25x11.25 in)' => serialize(array(210,286)),
			'CATENV_N9_1/2 (216x267 mm ; 8.50x10.50 in)' => serialize(array(216,267)),
			'CATENV_N9_3/4 (222x286 mm ; 8.75x11.25 in)' => serialize(array(222,286)),
			'CATENV_N10_1/2 (229x305 mm ; 9.00x12.00 in)' => serialize(array(229,305)),
			'CATENV_N12_1/2 (241x318 mm ; 9.50x12.50 in)' => serialize(array(241,318)),
			'CATENV_N13_1/2 (254x330 mm ; 10.00x13.00 in)' => serialize(array(254,330)),
			'CATENV_N14_1/4 (286x311 mm ; 11.25x12.25 in)' => serialize(array(286,311)),
			'CATENV_N14_1/2 (292x368 mm ; 11.50x14.50 in)' => serialize(array(292,368)),
			'Japanese (JIS P 0138-61) Standard B-Series (default: JIS_B5)' => serialize(array(841,1189)),
			'JIS_B0 (1030x1456 mm ; 40.55x57.32 in)' => serialize(array(1030,1456)),
			'JIS_B1 (728x1030 mm ; 28.66x40.55 in)' => serialize(array(728,1030)),
			'JIS_B2 (515x728 mm ; 20.28x28.66 in)' => serialize(array(515,728)),
			'JIS_B3 (364x515 mm ; 14.33x20.28 in)' => serialize(array(364,515)),
			'JIS_B4 (257x364 mm ; 10.12x14.33 in)' => serialize(array(257,364)),
			'JIS_B5 (182x257 mm ; 7.17x10.12 in)' => serialize(array(182,257)),
			'JIS_B6 (128x182 mm ; 5.04x7.17 in)' => serialize(array(128,182)),
			'JIS_B7 (91x128 mm ; 3.58x5.04 in)' => serialize(array(91,128)),
			'JIS_B8 (64x91 mm ; 2.52x3.58 in)' => serialize(array(64,91)),
			'JIS_B9 (45x64 mm ; 1.77x2.52 in)' => serialize(array(45,64)),
			'JIS_B10 (32x45 mm ; 1.26x1.77 in)' => serialize(array(32,45)),
			'JIS_B11 (22x32 mm ; 0.87x1.26 in)' => serialize(array(22,32)),
			'JIS_B12 (16x22 mm ; 0.63x0.87 in)' => serialize(array(16,22)),
			'PA Series (default: PA4)' => serialize(array(841,1189)),
			'PA0 (840x1120 mm ; 33.07x44.09 in)' => serialize(array(840,1120)),
			'PA1 (560x840 mm ; 22.05x33.07 in)' => serialize(array(560,840)),
			'PA2 (420x560 mm ; 16.54x22.05 in)' => serialize(array(420,560)),
			'PA3 (280x420 mm ; 11.02x16.54 in)' => serialize(array(280,420)),
			'PA4 (210x280 mm ; 8.27x11.02 in)' => serialize(array(210,280)),
			'PA5 (140x210 mm ; 5.51x8.27 in)' => serialize(array(140,210)),
			'PA6 (105x140 mm ; 4.13x5.51 in)' => serialize(array(105,140)),
			'PA7 (70x105 mm ; 2.76x4.13 in)' => serialize(array(70,105)),
			'PA8 (52x70 mm ; 2.05x2.76 in)' => serialize(array(52,70)),
			'PA9 (35x52 mm ; 1.38x2.05 in)' => serialize(array(35,52)),
			'PA10 (26x35 mm ; 1.02x1.38 in)' => serialize(array(26,35)),
			'Standard Photographic Print Sizes (default: 8R, 6P)' => serialize(array(841,1189)),
			'PASSPORT_PHOTO (35x45 mm ; 1.38x1.77 in)' => serialize(array(35,45)),
			'E (82x120 mm ; 3.25x4.72 in)' => serialize(array(82,120)),
			'3R, L (89x127 mm ; 3.50x5.00 in)' => serialize(array(89,127)),
			'4R, KG (102x152 mm ; 4.02x5.98 in)' => serialize(array(102,152)),
			'4D (120x152 mm ; 4.72x5.98 in)' => serialize(array(120,152)),
			'5R, 2L (127x178 mm ; 5.00x7.01 in)' => serialize(array(127,178)),
			'6R, 8P (152x203 mm ; 5.98x7.99 in)' => serialize(array(152,203)),
			'8R, 6P (203x254 mm ; 7.99x10.00 in)' => serialize(array(203,254)),
			'S8R, 6PW (203x305 mm ; 7.99x12.01 in)' => serialize(array(203,305)),
			'10R, 4P (254x305 mm ; 10.00x12.01 in)' => serialize(array(254,305)),
			'S10R, 4PW (254x381 mm ; 10.00x15.00 in)' => serialize(array(254,381)),
			'11R (279x356 mm ; 10.98x14.02 in)' => serialize(array(279,356)),
			'S11R (279x432 mm ; 10.98x17.01 in)' => serialize(array(279,432)),
			'12R (305x381 mm ; 12.01x15.00 in)' => serialize(array(305,381)),
			'S12R (305x456 mm ; 12.01x17.95 in)' => serialize(array(305,456)),
			'Common Newspaper Sizes (default: NEWSPAPER_TABLOID)' => serialize(array(841,1189)),
			'NEWSPAPER_BROADSHEET (750x600 mm ; 29.53x23.62 in)' => serialize(array(750,600)),
			'NEWSPAPER_BERLINER (470x315 mm ; 18.50x12.40 in)' => serialize(array(470,315)),
			'NEWSPAPER_COMPACT, NEWSPAPER_TABLOID (430x280 mm ; 16.93x11.02 in)' => serialize(array(430,280)),
			'Business Cards (default: BUSINESS_CARD)' => serialize(array(841,1189)),
			'CREDIT_CARD, BUSINESS_CARD, BUSINESS_CARD_ISO7810 (54x86 mm ; 2.13x3.37 in)' => serialize(array(54,86)),
			'BUSINESS_CARD_ISO216 (52x74 mm ; 2.05x2.91 in)' => serialize(array(52,74)),
			'BUSINESS_CARD_IT, UK, FR, DE, ES (55x85 mm ; 2.17x3.35 in)' => serialize(array(55,85)),
			'BUSINESS_CARD_US, CA (51x89 mm ; 2.01x3.50 in)' => serialize(array(51,89)),
			'BUSINESS_CARD_JP (55x91 mm ; 2.17x3.58 in)' => serialize(array(55,91)),
			'BUSINESS_CARD_HK (54x90 mm ; 2.13x3.54 in)' => serialize(array(54,90)),
			'BUSINESS_CARD_AU, DK, SE (55x90 mm ; 2.17x3.54 in)' => serialize(array(55,90)),
			'BUSINESS_CARD_RU, CZ, FI, HU, IL (50x90 mm ; 1.97x3.54 in)' =>serialize(array(50,90)),
			'Billboards (default: 4SHEET)' => serialize(array(841,1189)),
			'4SHEET (1016x1524 mm ; 40.00x60.00 in)' => serialize(array(1016,1524)),
			'6SHEET (1200x1800 mm ; 47.24x70.87 in)' => serialize(array(1200,1800)),
			'12SHEET (3048x1524 mm ; 120.00x60.00 in)' => serialize(array(3048,1524)),
			'16SHEET (2032x3048 mm ; 80.00x120.00 in)' => serialize(array(2032,3048)),
			'32SHEET (4064x3048 mm ; 160.00x120.00 in)' => serialize(array(4064,3048)),
			'48SHEET (6096x3048 mm ; 240.00x120.00 in)' => serialize(array(6096,3048)),
			'64SHEET (8128x3048 mm ; 320.00x120.00 in)' => serialize(array(8128,3048)),
			'96SHEET (12192x3048 mm ; 480.00x120.00 in)' => serialize(array(12192,3048)),
			'Old Imperial English (default: EN_ATLAS)' => serialize(array(841,1189)),
			'EN_EMPEROR (1219x1829 mm ; 48.00x72.00 in)' => serialize(array(1219,1829)),
			'EN_ANTIQUARIAN (787x1346 mm ; 31.00x53.00 in)' => serialize(array(787,1346)),
			'EN_GRAND_EAGLE (730x1067 mm ; 28.75x42.00 in)' => serialize(array(730,1067)),
			'EN_DOUBLE_ELEPHANT (679x1016 mm ; 26.75x40.00 in)' => serialize(array(679,1016)),
			'EN_ATLAS (660x864 mm ; 26.00x34.00 in)' => serialize(array(660,864)),
			'EN_COLOMBIER (597x876 mm ; 23.50x34.50 in)' => serialize(array(597,876)),
			'EN_ELEPHANT (584x711 mm ; 23.00x28.00 in)' => serialize(array(584,711)),
			'EN_DOUBLE_DEMY (572x902 mm ; 22.50x35.50 in)' => serialize(array(572,902)),
			'EN_IMPERIAL (559x762 mm ; 22.00x30.00 in)' => serialize(array(559,762)),
			'EN_PRINCESS (546x711 mm ; 21.50x28.00 in)' => serialize(array(546,711)),
			'EN_CARTRIDGE (533x660 mm ; 21.00x26.00 in)' => serialize(array(533,660)),
			'EN_DOUBLE_LARGE_POST (533x838 mm ; 21.00x33.00 in)' => serialize(array(533,838)),
			'EN_ROYAL (508x635 mm ; 20.00x25.00 in)' => serialize(array(508,635)),
			'EN_SHEET, EN_HALF_POST (495x597 mm ; 19.50x23.50 in)' => serialize(array(495,597)),
			'EN_SUPER_ROYAL (483x686 mm ; 19.00x27.00 in)' => serialize(array(483,686)),
			'EN_DOUBLE_POST (483x775 mm ; 19.00x30.50 in)' => serialize(array(483,775)),
			'EN_MEDIUM (445x584 mm ; 17.50x23.00 in)' => serialize(array(445,584)),
			'EN_DEMY (445x572 mm ; 17.50x22.50 in)' => serialize(array(445,572)),
			'EN_LARGE_POST (419x533 mm ; 16.50x21.00 in)' => serialize(array(419,533)),
			'EN_COPY_DRAUGHT (406x508 mm ; 16.00x20.00 in)' => serialize(array(406,508)),
			'EN_POST (394x489 mm ; 15.50x19.25 in)' => serialize(array(394,489)),
			'EN_CROWN (381x508 mm ; 15.00x20.00 in)' => serialize(array(381,508)),
			'EN_PINCHED_POST (375x470 mm ; 14.75x18.50 in)' => serialize(array(375,470)),
			'EN_BRIEF (343x406 mm ; 13.50x16.00 in)' => serialize(array(343,406)),
			'EN_FOOLSCAP (343x432 mm ; 13.50x17.00 in)' => serialize(array(343,432)),
			'EN_SMALL_FOOLSCAP (337x419 mm ; 13.25x16.50 in)' => serialize(array(337,419)),
			'EN_POTT (318x381 mm ; 12.50x15.00 in)' => serialize(array(318,381)),
			'Old Imperial Belgian (default: BE_ELEPHANT)' => serialize(array(841,1189)),
			'BE_GRAND_AIGLE (700x1040 mm ; 27.56x40.94 in)' => serialize(array(700,1040)),
			'BE_COLOMBIER (620x850 mm ; 24.41x33.46 in)' => serialize(array(620,850)),
			'BE_DOUBLE_CARRE (620x920 mm ; 24.41x36.22 in)' => serialize(array(620,920)),
			'BE_ELEPHANT (616x770 mm ; 24.25x30.31 in)' => serialize(array(616,770)),
			'BE_PETIT_AIGLE (600x840 mm ; 23.62x33.07 in)' => serialize(array(600,840)),
			'BE_GRAND_JESUS (550x730 mm ; 21.65x28.74 in)' => serialize(array(550,730)),
			'BE_JESUS (540x730 mm ; 21.26x28.74 in)' => serialize(array(540,730)),
			'BE_RAISIN (500x650 mm ; 19.69x25.59 in)' => serialize(array(500,650)),
			'BE_GRAND_MEDIAN (460x605 mm ; 18.11x23.82 in)' => serialize(array(460,605)),
			'BE_DOUBLE_POSTE (435x565 mm ; 17.13x22.24 in)' => serialize(array(435,565)),
			'BE_COQUILLE (430x560 mm ; 16.93x22.05 in)' => serialize(array(430,560)),
			'BE_PETIT_MEDIAN (415x530 mm ; 16.34x20.87 in)' =>serialize(array(415,530)),
			'BE_RUCHE (360x460 mm ; 14.17x18.11 in)' => serialize(array(360,460)),
			'BE_PROPATRIA (345x430 mm ; 13.58x16.93 in)' => serialize(array(345,430)),
			'BE_LYS (317x397 mm ; 12.48x15.63 in)' => serialize(array(317,397)),
			'BE_POT (307x384 mm ; 12.09x15.12 in)' => serialize(array(307,384)),
			'BE_ROSETTE (270x347 mm ; 10.63x13.66 in)' => serialize(array(270,347)),
			'Old Imperial French (default: FR_PETIT_AIGLE)' => serialize(array(841,1189)),
			'FR_UNIVERS (1000x1300 mm ; 39.37x51.18 in)' => serialize(array(1000,1300)),
			'FR_DOUBLE_COLOMBIER (900x1260 mm ; 35.43x49.61 in)' => serialize(array(900,1260)),
			'FR_GRANDE_MONDE (900x1260 mm ; 35.43x49.61 in)' => serialize(array(900,1260)),
			'FR_DOUBLE_SOLEIL (800x1200 mm ; 31.50x47.24 in)' => serialize(array(800,1200)),
			'FR_DOUBLE_JESUS (760x1120 mm ; 29.92x44.09 in)' => serialize(array(760,1120)),
			'FR_GRAND_AIGLE (750x1060 mm ; 29.53x41.73 in)' => serialize(array(750,1060)),
			'FR_PETIT_AIGLE (700x940 mm ; 27.56x37.01 in)' => serialize(array(700,940)),
			'FR_DOUBLE_RAISIN (650x1000 mm ; 25.59x39.37 in)' => serialize(array(650,1000)),
			'FR_JOURNAL (650x940 mm ; 25.59x37.01 in)' => serialize(array(650,940)),
			'FR_COLOMBIER_AFFICHE (630x900 mm ; 24.80x35.43 in)' => serialize(array(630,900)),
			'FR_DOUBLE_CAVALIER (620x920 mm ; 24.41x36.22 in)' => serialize(array(620,920)),
			'FR_CLOCHE (600x800 mm ; 23.62x31.50 in)' => serialize(array(600,800)),
			'FR_SOLEIL (600x800 mm ; 23.62x31.50 in)' => serialize(array(600,800)),
			'FR_DOUBLE_CARRE (560x900 mm ; 22.05x35.43 in)' => serialize(array(560,900)),
			'FR_DOUBLE_COQUILLE (560x880 mm ; 22.05x34.65 in)' => serialize(array(560,880)),
			'FR_JESUS (560x760 mm ; 22.05x29.92 in)' => serialize(array(560,760)),
			'FR_RAISIN (500x650 mm ; 19.69x25.59 in)' => serialize(array(500,650)),
			'FR_CAVALIER (460x620 mm ; 18.11x24.41 in)' => serialize(array(460,620)),
			'FR_DOUBLE_COURONNE (460x720 mm ; 18.11x28.35 in)' => serialize(array(460,720)),
			'FR_CARRE (450x560 mm ; 17.72x22.05 in)' => serialize(array(450,560)),
			'FR_COQUILLE (440x560 mm ; 17.32x22.05 in)' => serialize(array(440,560)),
			'FR_DOUBLE_TELLIERE (440x680 mm ; 17.32x26.77 in)' => serialize(array(440,680)),
			'FR_DOUBLE_CLOCHE (400x600 mm ; 15.75x23.62 in)' => serialize(array(400,600)),
			'FR_DOUBLE_POT (400x620 mm ; 15.75x24.41 in)' => serialize(array(400,620)),
			'FR_ECU (400x520 mm ; 15.75x20.47 in)' => serialize(array(400,520)),
			'FR_COURONNE (360x460 mm ; 14.17x18.11 in)' => serialize(array(360,460)),
			'FR_TELLIERE (340x440 mm ; 13.39x17.32 in)' => serialize(array(340,440)),
			'FR_POT (310x400 mm ; 12.20x15.75 in)' => serialize(array(310,400)) 
	);
?>
<table class="wp-list-table form-table">
	<tbody>
		<tr>
			<th><?php _e('PDF Page Size', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2">
				<select name="rtw_pgaepb_css_setting_opt[pdf_page_size]">
				<option>Select</option>
				<?php
					foreach ($pdf_page_size as $key => $value) 
					{
						?>
							<option value="<?php echo $value;?>" <?php echo isset( $rtw_wprh_get_setting['pdf_page_size'] ) && $rtw_wprh_get_setting['pdf_page_size'] == $value ? 'selected="selected"' : '';?>><?php echo $key;?></option>
						<?php
					}
				?>
				</select>
				<div class="descr"><?php _e('Choose the size of Pdf page.', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php _e('Pdf Page Orientation', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2">
				<p>
					<input name="rtw_pgaepb_css_setting_opt[page_orien]" value="P" <?= ( isset( $rtw_wprh_get_setting['page_orien'] ) && $rtw_wprh_get_setting['page_orien'] == 'P'  ? 'checked="checked"' : ''); ?> type="radio"/>
					<?php _e('Portrait', 'pdf-generator-addon-for-elementor-page-builder');?>
				</p>
				<p>
					<input name="rtw_pgaepb_css_setting_opt[page_orien]" value="L" <?= ( isset( $rtw_wprh_get_setting['page_orien'] ) && $rtw_wprh_get_setting['page_orien'] == 'L'  ? 'checked="checked"' : ''); ?> type="radio"/>
					<?php _e('Landscape', 'pdf-generator-addon-for-elementor-page-builder');?>
				</p>
				<div class="descr"><?php _e('Choose your required page Orientation of Pdf.', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php _e('Body Top Margin', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2"><input type="number" min="0" name="rtw_pgaepb_css_setting_opt[body_top_margin]" value="<?php echo isset( $rtw_wprh_get_setting['body_top_margin'] ) ? $rtw_wprh_get_setting['body_top_margin'] : '37'; ?>" />
				<div class="descr"><?php _e('Enter your required top margin for main pdf body (By default 37). Minimum 37 required otherwise will not work.', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php _e('Body Left Margin', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2"><input type="number" min="0" name="rtw_pgaepb_css_setting_opt[body_left_margin]" value="<?php echo isset( $rtw_wprh_get_setting['body_left_margin'] ) ? $rtw_wprh_get_setting['body_left_margin'] : '15'; ?>" />
				<div class="descr"><?php _e('Enter your required left margin for main pdf body (By default 15)', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php _e('Body Right Margin', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2"><input type="number" min="0" name="rtw_pgaepb_css_setting_opt[body_right_margin]" value="<?php echo isset( $rtw_wprh_get_setting['body_right_margin'] ) ? $rtw_wprh_get_setting['body_right_margin'] : '15'; ?>" />
				<div class="descr"><?php _e('Enter your required right margin for main pdf body (By default 15)', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php _e('Body Font Family', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2">
				<select name="rtw_pgaepb_css_setting_opt[body_font_family]">
				<?php 
					foreach ( $rtw_fonts as $key => $value ) 
					{ 
						?>
							<option value="<?php echo $value;?>" <?php echo isset( $rtw_wprh_get_setting['body_font_family'] ) && $rtw_wprh_get_setting['body_font_family'] == $value ? 'selected="selected"' : '';?>><?php echo $key;?></option>
						<?php
				 	}
				?>
				</select>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php _e('Body Font Size', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2"><input type="number" min="0" name="rtw_pgaepb_css_setting_opt[body_font_size]"
				value="<?php echo isset( $rtw_wprh_get_setting['body_font_size'] ) ? $rtw_wprh_get_setting['body_font_size'] : '15'; ?>" />
			<div class="descr"><?php _e('Enter your required font size for Body of the Pdf(By default 15)', 'pdf-generator-addon-for-elementor-page-builder');?></div>

			</td>
		</tr>
		<tr>
			<th class="tr1"><?php _e('Pdf Custom CSS', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2">
				<textarea name="rtw_pgaepb_css_setting_opt[rtw_pdf_css]" rows="8" cols="50"><?php echo isset( $rtw_wprh_get_setting['rtw_pdf_css'] ) ? $rtw_wprh_get_setting['rtw_pdf_css'] : ''; ?></textarea>
			<div class="descr"><?php _e('Enter your required custom css for pdf', 'pdf-generator-addon-for-elementor-page-builder');?></div>

			</td>
		</tr>
	</tbody>	
</table>