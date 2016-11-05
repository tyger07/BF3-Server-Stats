<?php
// BF3 Stats Page by Ty_ger07
// https://forum.myrcon.com/showthread.php?15754

// make an array of game modes
// left value is name as it will appear on stats page
$mode_array = array(
	'Conquest Large'			=>	'ConquestLarge0',
	'Conquest Assault Large'	=>	'ConquestAssaultLarge0',
	'Conquest Small'			=>	'ConquestSmall0',
	'Conquest Assault Small'	=>	'ConquestAssaultSmall',
	'Conquest Assault Small1'	=>	'ConquestAssaultSmall1',
	'Rush Large'				=>	'RushLarge0',
	'Squad Rush'				=>	'SquadRush0',
	'Squad Deathmatch'			=>	'SquadDeathMatch0',
	'Team Deathmatch'			=>	'TeamDeathMatch0',
	'Team Deathmatch CQC'		=>	'TeamDeathMatchC0',
	'Gun Master'				=>	'GunMaster0',
	'Domination'				=>	'Domination0',
	'Tank Superiority'			=>	'TankSuperiority0',
	'Scavenger'					=>	'Scavenger0',
	'Capture the Flag'			=>	'CaptureTheFlag0',
	'Air Superiority'			=>	'AirSuperiority0'
	// note comma at the end of each line except for the last line
);

// make an array of map names
// left value is name as it will appear on stats page
$map_array = array(
	'Grand Bazaar'				=>	'MP_001',
	'Teheran Highway'			=>	'MP_003',
	'Caspian Border'			=>	'MP_007',
	'Seine Crossing'			=>	'MP_011',
	'Operation Firestrike'		=>	'MP_012',
	'Damavand Peak'				=>	'MP_013',
	'Noshahr Canals'			=>	'MP_017',
	'Kharg Island'				=>	'MP_018',
	'Operation Metro'			=>	'MP_Subway',
	'Strike at Karkand'			=>	'XP1_001',
	'Gulf of Oman'				=>	'XP1_002',
	'Sharqi Peninsula'			=>	'XP1_003',
	'Wake Island'				=>	'XP1_004',
	'Scrapmetal'				=>	'XP2_Factory',
	'Operation 925'				=>	'XP2_Office',
	'Donya Fortress'			=>	'XP2_Palace',
	'Ziba Tower'				=>	'XP2_Skybar',
	'Bandar Desert'				=>	'XP3_Desert',
	'Alborz Mountains'			=>	'XP3_Alborz',
	'Armored Shield'			=>	'XP3_Shield',
	'Death Valley'				=>	'XP3_Valley',
	'Markaz Monolith'			=>	'XP4_FD',
	'Azadi Palace'				=>	'XP4_Parl',
	'Epicenter'					=>	'XP4_Quake',
	'Talah Market'				=>	'XP4_Rubble',
	'Operation Riverside'		=>	'XP5_001',
	'Nebandan Flats'			=>	'XP5_002',
	'Kiasar Railroad'			=>	'XP5_003',
	'Sabalan Pipeline'			=>	'XP5_004'
	// note comma at the end of each line except for the last line
);

// make an array of weapon names
// the left value is the name which will be displayed on the stats page
// the image filename in /images/weapons/ must match the right value for each weapon (otherwise the image will appear broken)
$weapon_array = array(
	'870 MCS'			=>	'870MCS',
	'DAO-12'			=>	'DAO-12',
	'MK3A1 Jackhammer'	=>	'jackhammer',
	'M1014'				=>	'M1014',
	'M26 MASS'			=>	'M26Mass',
	'Saiga20k'			=>	'Siaga20k',
	'SPAS-12'			=>	'SPAS-12',
	'USAS-12'			=>	'USAS-12',
	'AEK-971'			=>	'AEK-971',
	'AN-94 Abakan'		=>	'AN-94_Abakan',
	'AS Val'			=>	'AS_Val',
	'F2000'				=>	'F2000',
	'FAMAS'				=>	'FAMAS',
	'HK53'				=>	'HK53',
	'M416'				=>	'M416',
	'M16A4'				=>	'M16A4',
	'QBZ-95'			=>	'QBZ-95',
	'SCAR-L'			=>	'SCAR-L',
	'Steyr AUG'			=>	'Steyr_AUG',
	'AK74M'				=>	'AK74M',
	'G3A3'				=>	'G3A3',
	'KH2002'			=>	'KH2002',
	'L85A2'				=>	'L85A2',
	'ACR'				=>	'ACR',
	'MTAR-21'			=>	'MTAR',
	'AKS-74u'			=>	'AKS-74u',
	'M4A1'				=>	'M4A1',
	'MP7'				=>	'MP7',
	'PP-2000'			=>	'PP-2000',
	'SG 553 LB'			=>	'SG_553_LB',
	'A91'				=>	'A91',
	'G36C'				=>	'G36C',
	'MagpulPDR'			=>	'MagpulPDR',
	'P90'				=>	'P90',
	'SCAR-H'			=>	'SCAR-H',
	'UMP45'				=>	'UMP45',
	'MP5K'				=>	'MP5K',
	'FGM-148'			=>	'FGM-148',
	'FIM-92'			=>	'FIM92',
	'M320'				=>	'M320',
	'RPG-7'				=>	'RPG-7',
	'SMAW'				=>	'SMAW',
	'SA-18 Igla'		=>	'Sa18IGLA',
	'Glock18'			=>	'Glock18',
	'M1911'				=>	'M1911',
	'M9'				=>	'M9',
	'M93R'				=>	'M93R',
	'Taurus .44'		=>	'Taurus_44',
	'MP-412 REX'		=>	'MP412Rex',
	'MP443'				=>	'MP443',
	'JNG90'				=>	'JNG90',
	'L96'				=>	'L96',
	'M417'				=>	'M417',
	'M39'				=>	'M39',
	'M40A5'				=>	'M40A5',
	'MK11'				=>	'Mk11',
	'Model 98B'			=>	'Model98B',
	'QBU-88'			=>	'QBU-88',
	'SKS'				=>	'SKS',
	'SV98'				=>	'SV98',
	'SVD'				=>	'SVD',
	'LSAT'				=>	'LSAT',
	'M240'				=>	'M240',
	'M249'				=>	'M249',
	'M27 IAR'			=>	'M27IAR',
	'M60'				=>	'M60',
	'MG36'				=>	'MG36',
	'Pecheneg'			=>	'Pecheneg',
	'PP-19'				=>	'PP-19',
	'QBB-95'			=>	'QBB-95',
	'RPK-74M'			=>	'RPK-74M',
	'Type 88'			=>	'Type88',
	'L86'				=>	'L86',
	'M15 AT Mine'		=>	'M15_AT_Mine',
	'M67'				=>	'M67',
	'C4'				=>	'C4',
	'Claymore'			=>	'Claymore',
	'Medkit'			=>	'Medkit',
	'Roadkill'			=>	'RoadKill',
	'Crossbow'			=>	'CrossBow',
	'Defibrillator'		=>	'Defib',
	'Razorblade'		=>	'Knife_RazorBlade',
	'Melee'				=>	'Melee',
	'Repair Tool'		=>	'Repair_Tool',
	'Knife'				=>	'Knife',
	'Missing'			=>	'missing',
	'Machinery'			=>	'Death'
	// note comma at the end of each line except for the last line
);

// make an array of weapon categories
// left value is the name as it will appear on the stats page
$cat_array = array(
	'Assault'		=>	'assaultrifle',
	'LMG'			=>	'lmg',
	'Shotgun'		=>	'shotgun',
	'SMG'			=>	'smg',
	'Sniper'		=>	'sniperrifle',
	'Handgun'		=>	'handgun',
	'Projectile'	=>	'projectileexplosive',
	'Explosive'		=>	'explosive',
	'Melee'			=>	'melee',
	'No Class'		=>	'none',
	// VehicleCustom is my own array of vehicles which is filtered out separately in 'StatsOut' function
	'Vehicle'		=> 	'VehicleCustom'
	// note comma at the end of each line except for the last line
);

// set min and max ranks available
// this will determine whether the image is available in /images/ranks (so if a player's rank is higher than an available image, it doesn't try to load an unavailable image)
$rank_min = 1;
$rank_max =	145;

// make an array of squad names
// this is just the phonetic alphabet
$squad_array = array(
	'None'						=>	'0',
	'Alpha'						=>	'1',
	'Bravo'						=>	'2',
	'Charlie'					=>	'3',
	'Delta'						=>	'4',
	'Echo'						=>	'5',
	'Foxtrot'					=>	'6',
	'Golf'						=>	'7',
	'Hotel'						=>	'8',
	'India'						=>	'9',
	'Juliet'					=>	'10',
	'Kilo'						=>	'11',
	'Lima'						=>	'12',
	'Mike'						=>	'13',
	'November'					=>	'14',
	'Oscar'						=>	'15',
	'Papa'						=>	'16',
	'Quebec'					=>	'17',
	'Romeo'						=>	'18',
	'Sierra'					=>	'19',
	'Tango'						=>	'20',
	'Uniform'					=>	'21',
	'Victor'					=>	'22',
	'Whiskey'					=>	'23',
	'X-Ray'						=>	'24',
	'Yankee'					=>	'25',
	'Zulu'						=>	'26'
	// note comma at the end of each line except for the last line
);

// make an array of country names
// I am not going to separate these into separate lines since these shouldn't change and don't need to be legible
// this is just a (long!) list of country codes
// this took a long time to type out!
$country_array = array(
	'Null'=>'','Unknown'=>'--','Afghanistan'=>'AF','Albania'=>'AL','Algeria'=>'DZ','American Samoa'=>'AS','Andorra'=>'AD','Angola'=>'AO','Anguilla'=>'AI','Antarctica'=>'AQ','Antigua'=>'AG','Argentina'=>'AR','Armenia'=>'AM',
	'Aruba'=>'AW','Australia'=>'AU','Austria'=>'AT','Azerbaijan'=>'AZ','Bahamas'=>'BS','Bahrain'=>'BH','Bangladesh'=>'BD','Barbados'=>'BB','Belarus'=>'BY','Belgium'=>'BE','Belize'=>'BZ','Benin'=>'BJ','Bermuda'=>'BM',
	'Bhutan'=>'BT','Bolivia'=>'BO','Bosnia'=>'BA','Botswana'=>'BW','Bouvet Island'=>'BV','Brazil'=>'BR','Indian Ocean'=>'IO','Brunei Darussalum'=>'BN','Bulgaria'=>'BG','Burkina Faso'=>'BF','Burundi'=>'BI','Cambodia'=>'KH',
	'Cameroon'=>'CM','Canada'=>'CA','Cape Verde'=>'CV','Cayman Islands'=>'KY','Central Africa'=>'CF','Chad'=>'TD','Chile'=>'CL','China'=>'CN','Christmas Island'=>'CX','Cocos Islands'=>'CC','Columbia'=>'CO','Comoros'=>'KM',
	'Congo'=>'CG','Republic of Congo'=>'CD','Cook Islands'=>'CK','Costa Rica'=>'CR','Ivory Coast'=>'CI','Croatia'=>'HR','Cuba'=>'CU','Cyprus'=>'CY','Czech Repuplic'=>'CZ','Denmark'=>'DK','Djibouti'=>'DJ','Dominica'=>'DM',
	'Dominican Republic'=>'DO','East Timor'=>'TP','Ecuador'=>'EC','Egypt'=>'EG','El Salvador'=>'SV','Equatorial Guinea'=>'GQ','Eritrea'=>'ER','Estonia'=>'EE','Ethiopia'=>'ET','Falkland Islands'=>'FK','Faroe Islands'=>'FO',
	'Fiji'=>'FJ','Finland'=>'FI','France'=>'FR','Metropolitan France'=>'FX','French Guiana'=>'GF','French Polynesia'=>'PF','French Territories'=>'TF','Gabon'=>'GA','Gambia'=>'GM','Georgia'=>'GE','Germany'=>'DE','Ghana'=>'GH',
	'Gibraltar'=>'GI','Greece'=>'GR','Greenland'=>'GL','Grenada'=>'GD','Guadeloupe'=>'GP','Guam'=>'GU','Guatemala'=>'GT','Guernsey'=>'GG','Guinea'=>'GN','Guinea-Bissau'=>'GW','Guyana'=>'GY','Haiti'=>'HT','McDonald Islands'=>'HM',
	'Vatican City'=>'VA','Honduras'=>'HN','Hong Kong'=>'HK','Hungary'=>'HU','Iceland'=>'IS','India'=>'IN','Indonesia'=>'ID','Iran'=>'IR','Iraq'=>'IQ','Ireland'=>'IE','Israel'=>'IL','Italy'=>'IT','Jamaica'=>'JM','Japan'=>'JP',
	'Jordan'=>'JO','Kazakstan'=>'KZ','Kenya'=>'KE','Kiribati'=>'KI','North Korea'=>'KP','South Korea'=>'KR','Kuwait'=>'KW','Kyrgyzstan'=>'KG','Lao'=>'LA','Latvia'=>'LV','Lebanon'=>'LB','Lesotho'=>'LS','Liberia'=>'LR',
	'Libya'=>'LY','Liechtenstein'=>'LI','Lithuania'=>'LT','Luxembourg'=>'LU','Macau'=>'MO','Macedonia'=>'MK','Madagascar'=>'MG','Malawi'=>'MW','Malaysia'=>'MY','Maldives'=>'MV','Mali'=>'ML','Malta'=>'MT','Marshall Islands'=>'MH',
	'Martinique'=>'MQ','Mauritania'=>'MR','Mauritius'=>'MU','Mayotte'=>'YT','Mexico'=>'MX','Micronesia'=>'FM','Moldova'=>'MD','Monaco'=>'MC','Mongolia'=>'MN','Montenegro'=>'ME','Montserrat'=>'MS','Morocco'=>'MA','Mozambique'=>'MZ','Myanmar'=>'MM',
	'Namibia'=>'NA','Nauru'=>'NR','Nepal'=>'NP','Netherlands'=>'NL','Netherlands Antilles'=>'AN','New Caledonia'=>'NC','New Zealand'=>'NZ','Nicaragua'=>'NI','Niger'=>'NE','Nigeria'=>'NG','Niue'=>'NU','Norfolk Island'=>'NF',
	'Mariana Islands'=>'MP','Norway'=>'NO','Oman'=>'OM','Pakistan'=>'PK','Palau'=>'PW','Palestine'=>'PS','Panama'=>'PA','Papua New Guinea'=>'PG','Paraguay'=>'PY','Peru'=>'PE','Philippines'=>'PH','Pitcairn'=>'PN','Poland'=>'PL',
	'Portugal'=>'PT','Puerto Rico'=>'PR','Qatar'=>'QA','Reunion'=>'RE','Romania'=>'RO','Russia'=>'RU','Rwanda'=>'RW','Saint Helena'=>'SH','Saint Kitts'=>'KN','Saint Lucia'=>'LC','Saint Pierre'=>'PM','Saint Vincent'=>'VC',
	'Samoa'=>'WS','San Marino'=>'SM','Sao Tome'=>'ST','Saudi Arabia'=>'SA','Senegal'=>'SN','Serbia'=>'RS','Seychelles'=>'SC','Sierra Leone'=>'SL','Singapore'=>'SG','Slovakia'=>'SK','Slovenia'=>'SI','Solomon Islands'=>'SB','Somalia'=>'SO',
	'South Africa'=>'ZA','Sandwich Islands'=>'GS','Spain'=>'ES','Sri Lanka'=>'LK','Sudan'=>'SD','Suriname'=>'SR','Svalbard'=>'SJ','Swaziland'=>'SZ','Sweden'=>'SE','Switzerland'=>'CH','Syria'=>'SY','Taiwan'=>'TW',
	'Tajikistan'=>'TJ','Tanzania'=>'TZ','Thailand'=>'TH','Togo'=>'TG','Tokelau'=>'TK','Tonga'=>'TO','Trinidad'=>'TT','Tunisia'=>'TN','Turkey'=>'TR','Turkmenistan'=>'TM','Turks Islands'=>'TC','Tuvalu'=>'TV','Uganda'=>'UG',
	'Ukraine'=>'UA','United Arab Emirates'=>'AE','United Kingdom'=>'GB','United States'=>'US','US Minor Outlying Islands'=>'UM','Uruguay'=>'UY','Uzbekistan'=>'UZ','Vanuatu'=>'VU','Venezuela'=>'VE','Vietnam'=>'VN',
	'Virgin Islands (British)'=>'VG','Virgin Islands (US)'=>'VI','Wallis and Futuna'=>'WF','Western Sahara'=>'EH','Yemen'=>'YE','Yugoslavia'=>'YU','Zambia'=>'ZM','Zimbabwe'=>'ZW'
);
?>