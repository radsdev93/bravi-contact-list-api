CREATE DATABASE bravi_contact_list;
USE bravi_contact_list;
CREATE TABLE IF NOT EXISTS Countries (
  country_id INT AUTO_INCREMENT PRIMARY KEY,
  country_code INT(4) NOT NULL,
  country_name VARCHAR(150) NOT NULL
);
INSERT INTO Countries (country_code, country_name) VALUES (0093, "Afeganistão");
INSERT INTO Countries (country_code, country_name) VALUES (0355, "Albânia");
INSERT INTO Countries (country_code, country_name) VALUES (0213, "Algéria");
INSERT INTO Countries (country_code, country_name) VALUES (1684, "Samoa Americana");
INSERT INTO Countries (country_code, country_name) VALUES (0376, "Andorra");
INSERT INTO Countries (country_code, country_name) VALUES (0244, "Angola");
INSERT INTO Countries (country_code, country_name) VALUES (1264, "Anguilla");
INSERT INTO Countries (country_code, country_name) VALUES (0672, "Antártida");
INSERT INTO Countries (country_code, country_name) VALUES (1268, "Antigua e Barbuda");
INSERT INTO Countries (country_code, country_name) VALUES (0054, "Argentina");
INSERT INTO Countries (country_code, country_name) VALUES (0374, "Armênia");
INSERT INTO Countries (country_code, country_name) VALUES (0297, "Aruba");
INSERT INTO Countries (country_code, country_name) VALUES (0061, "Austrália");
INSERT INTO Countries (country_code, country_name) VALUES (0043, "Áustria");
INSERT INTO Countries (country_code, country_name) VALUES (0994, "Azerbaijão");
INSERT INTO Countries (country_code, country_name) VALUES (1242, "Bahamas");
INSERT INTO Countries (country_code, country_name) VALUES (0973, "Bahrein");
INSERT INTO Countries (country_code, country_name) VALUES (0880, "Bangladesh");
INSERT INTO Countries (country_code, country_name) VALUES (0246, "Barbados");
INSERT INTO Countries (country_code, country_name) VALUES (0375, "Bielorrússia");
INSERT INTO Countries (country_code, country_name) VALUES (0032, "Bélgica");
INSERT INTO Countries (country_code, country_name) VALUES (0501, "Belize");
INSERT INTO Countries (country_code, country_name) VALUES (0229, "Benin");
INSERT INTO Countries (country_code, country_name) VALUES (1441, "Bermuda");
INSERT INTO Countries (country_code, country_name) VALUES (0975, "Butão");
INSERT INTO Countries (country_code, country_name) VALUES (0591, "Bolívia");
INSERT INTO Countries (country_code, country_name) VALUES (0387, "Bósnia e Herzegovina");
INSERT INTO Countries (country_code, country_name) VALUES (0267, "Botswana");
INSERT INTO Countries (country_code, country_name) VALUES (0047, "Ilha Bouvet");
INSERT INTO Countries (country_code, country_name) VALUES (0055, "Brasil");
INSERT INTO Countries (country_code, country_name) VALUES (0246, "Território Britânico do Oceano Índico");
INSERT INTO Countries (country_code, country_name) VALUES (0673, "Brunei");
INSERT INTO Countries (country_code, country_name) VALUES (0359, "Bulgária");
INSERT INTO Countries (country_code, country_name) VALUES (0226, "Burkina Faso");
INSERT INTO Countries (country_code, country_name) VALUES (0257, "Burundi");
INSERT INTO Countries (country_code, country_name) VALUES (0855, "Camboja");
INSERT INTO Countries (country_code, country_name) VALUES (0237, "Camarões");
INSERT INTO Countries (country_code, country_name) VALUES (0001, "Canadá");
INSERT INTO Countries (country_code, country_name) VALUES (0238, "Cabo Verde");
INSERT INTO Countries (country_code, country_name) VALUES (1345, "Ilhas Cayman");
INSERT INTO Countries (country_code, country_name) VALUES (0236, "República Centro-Africana");
INSERT INTO Countries (country_code, country_name) VALUES (0235, "Chade");
INSERT INTO Countries (country_code, country_name) VALUES (0056, "Chile");
INSERT INTO Countries (country_code, country_name) VALUES (0086, "China");
INSERT INTO Countries (country_code, country_name) VALUES (0061, "Ilha Christmas");
INSERT INTO Countries (country_code, country_name) VALUES (0672, "Ilhas Cocos (Keeling)");
INSERT INTO Countries (country_code, country_name) VALUES (0057, "Colômbia");
INSERT INTO Countries (country_code, country_name) VALUES (0269, "Comores");
INSERT INTO Countries (country_code, country_name) VALUES (0242, "Congo");
INSERT INTO Countries (country_code, country_name) VALUES (0242, "Congo (DR)");
INSERT INTO Countries (country_code, country_name) VALUES (0682, "Ilhas Cook");
INSERT INTO Countries (country_code, country_name) VALUES (0506, "Costa Rica");
INSERT INTO Countries (country_code, country_name) VALUES (0225, "Costa do Marfim");
INSERT INTO Countries (country_code, country_name) VALUES (0385, "Croácia");
INSERT INTO Countries (country_code, country_name) VALUES (0053, "Cuba");
INSERT INTO Countries (country_code, country_name) VALUES (0357, "Chipre");
INSERT INTO Countries (country_code, country_name) VALUES (0420, "República Tcheca");
INSERT INTO Countries (country_code, country_name) VALUES (0045, "Dinamarca");
INSERT INTO Countries (country_code, country_name) VALUES (0253, "Djibuti");
INSERT INTO Countries (country_code, country_name) VALUES (1767, "Dominica");
INSERT INTO Countries (country_code, country_name) VALUES (1809, "República Dominicana");
INSERT INTO Countries (country_code, country_name) VALUES (0593, "Equador");
INSERT INTO Countries (country_code, country_name) VALUES (0020, "Egito");
INSERT INTO Countries (country_code, country_name) VALUES (0503, "El Salvador");
INSERT INTO Countries (country_code, country_name) VALUES (0240, "Guiné Equatorial");
INSERT INTO Countries (country_code, country_name) VALUES (0291, "Eritreia");
INSERT INTO Countries (country_code, country_name) VALUES (0372, "Estônia");
INSERT INTO Countries (country_code, country_name) VALUES (0251, "Etiópia");
INSERT INTO Countries (country_code, country_name) VALUES (0500, "Ilhas Malvinas");
INSERT INTO Countries (country_code, country_name) VALUES (0298, "Ilhas Faroe");
INSERT INTO Countries (country_code, country_name) VALUES (0679, "Fiji");
INSERT INTO Countries (country_code, country_name) VALUES (0358, "Finlândia");
INSERT INTO Countries (country_code, country_name) VALUES (0033, "França");
INSERT INTO Countries (country_code, country_name) VALUES (0594, "Guiana Francesa");
INSERT INTO Countries (country_code, country_name) VALUES (0689, "Polinésia Francesa");
INSERT INTO Countries (country_code, country_name) VALUES (0033, "Terras Austrais e Antárticas Francesas");
INSERT INTO Countries (country_code, country_name) VALUES (0241, "Gabão");
INSERT INTO Countries (country_code, country_name) VALUES (0220, "Gâmbia");
INSERT INTO Countries (country_code, country_name) VALUES (0995, "Geórgia");
INSERT INTO Countries (country_code, country_name) VALUES (0049, "Alemanha");
INSERT INTO Countries (country_code, country_name) VALUES (0233, "Gana");
INSERT INTO Countries (country_code, country_name) VALUES (0350, "Gibraltar");
INSERT INTO Countries (country_code, country_name) VALUES (0030, "Grécia");
INSERT INTO Countries (country_code, country_name) VALUES (0299, "Groelândia");
INSERT INTO Countries (country_code, country_name) VALUES (1473, "Granada");
INSERT INTO Countries (country_code, country_name) VALUES (0590, "Guadalupe");
INSERT INTO Countries (country_code, country_name) VALUES (1671, "Guão");
INSERT INTO Countries (country_code, country_name) VALUES (0502, "Guatemala");
INSERT INTO Countries (country_code, country_name) VALUES (0224, "Guiné");
INSERT INTO Countries (country_code, country_name) VALUES (0245, "Guiné-Bissau");
INSERT INTO Countries (country_code, country_name) VALUES (0592, "Guiana");
INSERT INTO Countries (country_code, country_name) VALUES (0509, "Haiti");
INSERT INTO Countries (country_code, country_name) VALUES (0672, "Ilhas Heard e McDonald");
INSERT INTO Countries (country_code, country_name) VALUES (0039, "Vaticano");
INSERT INTO Countries (country_code, country_name) VALUES (0504, "Honduras");
INSERT INTO Countries (country_code, country_name) VALUES (0852, "Hong Kong");
INSERT INTO Countries (country_code, country_name) VALUES (0036, "Hungria");
INSERT INTO Countries (country_code, country_name) VALUES (0354, "Islândia");
INSERT INTO Countries (country_code, country_name) VALUES (0091, "Índia");
INSERT INTO Countries (country_code, country_name) VALUES (0062, "Indonésia");
INSERT INTO Countries (country_code, country_name) VALUES (0098, "Iran");
INSERT INTO Countries (country_code, country_name) VALUES (0964, "Iraque");
INSERT INTO Countries (country_code, country_name) VALUES (0353, "Irlanda");
INSERT INTO Countries (country_code, country_name) VALUES (0972, "Israel");
INSERT INTO Countries (country_code, country_name) VALUES (0039, "Italia");
INSERT INTO Countries (country_code, country_name) VALUES (1876, "Jamaica");
INSERT INTO Countries (country_code, country_name) VALUES (0081, "Japão");
INSERT INTO Countries (country_code, country_name) VALUES (0962, "Jornânia");
INSERT INTO Countries (country_code, country_name) VALUES (0007, "Cazaquistão");
INSERT INTO Countries (country_code, country_name) VALUES (0254, "Quênia");
INSERT INTO Countries (country_code, country_name) VALUES (0686, "Kiribati");
INSERT INTO Countries (country_code, country_name) VALUES (0850, "Coreia do Norte");
INSERT INTO Countries (country_code, country_name) VALUES (0082, "Coreia do Sul");
INSERT INTO Countries (country_code, country_name) VALUES (0965, "Kuwait");
INSERT INTO Countries (country_code, country_name) VALUES (0996, "Quirguistão");
INSERT INTO Countries (country_code, country_name) VALUES (0856, "Laos");
INSERT INTO Countries (country_code, country_name) VALUES (0371, "Letônia");
INSERT INTO Countries (country_code, country_name) VALUES (0961, "Líbano");
INSERT INTO Countries (country_code, country_name) VALUES (0266, "Lesoto");
INSERT INTO Countries (country_code, country_name) VALUES (0231, "Libéria");
INSERT INTO Countries (country_code, country_name) VALUES (0218, "Líbia");
INSERT INTO Countries (country_code, country_name) VALUES (0423, "Liechtenstein");
INSERT INTO Countries (country_code, country_name) VALUES (0370, "Lituânia");
INSERT INTO Countries (country_code, country_name) VALUES (0352, "Luxemburgo");
INSERT INTO Countries (country_code, country_name) VALUES (0853, "Macao");
INSERT INTO Countries (country_code, country_name) VALUES (0389, "Macedônia");
INSERT INTO Countries (country_code, country_name) VALUES (0261, "Madagascar");
INSERT INTO Countries (country_code, country_name) VALUES (0265, "Malawi");
INSERT INTO Countries (country_code, country_name) VALUES (0060, "Malásia");
INSERT INTO Countries (country_code, country_name) VALUES (0960, "Maldivas");
INSERT INTO Countries (country_code, country_name) VALUES (0223, "Mali");
INSERT INTO Countries (country_code, country_name) VALUES (0356, "Malta");
INSERT INTO Countries (country_code, country_name) VALUES (0692, "Ilhas Marshall");
INSERT INTO Countries (country_code, country_name) VALUES (0596, "Martinica");
INSERT INTO Countries (country_code, country_name) VALUES (0222, "Mauritânia");
INSERT INTO Countries (country_code, country_name) VALUES (0230, "Maurício");
INSERT INTO Countries (country_code, country_name) VALUES (0269, "Mayotte");
INSERT INTO Countries (country_code, country_name) VALUES (0052, "México");
INSERT INTO Countries (country_code, country_name) VALUES (0691, "Micronésia");
INSERT INTO Countries (country_code, country_name) VALUES (0373, "Moldova");
INSERT INTO Countries (country_code, country_name) VALUES (0377, "Mônaco");
INSERT INTO Countries (country_code, country_name) VALUES (0976, "Mongólia");
INSERT INTO Countries (country_code, country_name) VALUES (1664, "Montserrat");
INSERT INTO Countries (country_code, country_name) VALUES (0212, "Marrocos");
INSERT INTO Countries (country_code, country_name) VALUES (0258, "Moçambique");
INSERT INTO Countries (country_code, country_name) VALUES (0095, "Birmânia");
INSERT INTO Countries (country_code, country_name) VALUES (0264, "Namíbia");
INSERT INTO Countries (country_code, country_name) VALUES (0674, "Nauru");
INSERT INTO Countries (country_code, country_name) VALUES (0977, "Nepal");
INSERT INTO Countries (country_code, country_name) VALUES (0031, "Holanda");
INSERT INTO Countries (country_code, country_name) VALUES (0599, "Antilhas Holandesas");
INSERT INTO Countries (country_code, country_name) VALUES (0687, "Nova Caledônia");
INSERT INTO Countries (country_code, country_name) VALUES (0064, "Nova Zelândia");
INSERT INTO Countries (country_code, country_name) VALUES (0505, "Nicarágua");
INSERT INTO Countries (country_code, country_name) VALUES (0227, "Niger");
INSERT INTO Countries (country_code, country_name) VALUES (0234, "Nigéria");
INSERT INTO Countries (country_code, country_name) VALUES (0683, "Niue");
INSERT INTO Countries (country_code, country_name) VALUES (0672, "Ilha Norfolk");
INSERT INTO Countries (country_code, country_name) VALUES (1670, "Ilhas Marianas do Norte");
INSERT INTO Countries (country_code, country_name) VALUES (0047, "Noruega");
INSERT INTO Countries (country_code, country_name) VALUES (0968, "Omã");
INSERT INTO Countries (country_code, country_name) VALUES (0092, "Paquistão");
INSERT INTO Countries (country_code, country_name) VALUES (0680, "Palau");
INSERT INTO Countries (country_code, country_name) VALUES (0970, "Palestina");
INSERT INTO Countries (country_code, country_name) VALUES (0507, "Panamá");
INSERT INTO Countries (country_code, country_name) VALUES (0675, "Papua-Nova Guiné");
INSERT INTO Countries (country_code, country_name) VALUES (0595, "Paraguai");
INSERT INTO Countries (country_code, country_name) VALUES (0051, "Peru");
INSERT INTO Countries (country_code, country_name) VALUES (0063, "Filipinas");
INSERT INTO Countries (country_code, country_name) VALUES (0672, "Ilhas Picárnia");
INSERT INTO Countries (country_code, country_name) VALUES (0048, "Polônia");
INSERT INTO Countries (country_code, country_name) VALUES (0351, "Portugal");
INSERT INTO Countries (country_code, country_name) VALUES (1787, "Porto Rico");
INSERT INTO Countries (country_code, country_name) VALUES (0974, "Catar");
INSERT INTO Countries (country_code, country_name) VALUES (0262, "Reunião");
INSERT INTO Countries (country_code, country_name) VALUES (0040, "Romênia");
INSERT INTO Countries (country_code, country_name) VALUES (0070, "Rússia");
INSERT INTO Countries (country_code, country_name) VALUES (0250, "Ruanda");
INSERT INTO Countries (country_code, country_name) VALUES (0290, "Santa Helena");
INSERT INTO Countries (country_code, country_name) VALUES (1869, "São Cristóvão");
INSERT INTO Countries (country_code, country_name) VALUES (1758, "Santa Lúcia");
INSERT INTO Countries (country_code, country_name) VALUES (0508, "São Pedro e Miquelon");
INSERT INTO Countries (country_code, country_name) VALUES (1784, "São Vicente e Granadinas");
INSERT INTO Countries (country_code, country_name) VALUES (0684, "Samoa");
INSERT INTO Countries (country_code, country_name) VALUES (0378, "São Marino");
INSERT INTO Countries (country_code, country_name) VALUES (0239, "Sao Tomé e Príncipe");
INSERT INTO Countries (country_code, country_name) VALUES (0966, "Arábia Saudita");
INSERT INTO Countries (country_code, country_name) VALUES (0221, "Senegal");
INSERT INTO Countries (country_code, country_name) VALUES (0381, "Sérvia e Montenegro");
INSERT INTO Countries (country_code, country_name) VALUES (0248, "Seicheles");
INSERT INTO Countries (country_code, country_name) VALUES (0232, "República da Serra Leoa");
INSERT INTO Countries (country_code, country_name) VALUES (0065, "Singapura");
INSERT INTO Countries (country_code, country_name) VALUES (0421, "Eslováquia");
INSERT INTO Countries (country_code, country_name) VALUES (0386, "Eslovênia");
INSERT INTO Countries (country_code, country_name) VALUES (0677, "Ilhas Salomão");
INSERT INTO Countries (country_code, country_name) VALUES (0252, "Somália");
INSERT INTO Countries (country_code, country_name) VALUES (0027, "África do Sul");
INSERT INTO Countries (country_code, country_name) VALUES (0500, "Ilhas Geórgia do Sul e Sandwich do Sul");
INSERT INTO Countries (country_code, country_name) VALUES (0034, "Espanha");
INSERT INTO Countries (country_code, country_name) VALUES (0094, "Sri Lanka");
INSERT INTO Countries (country_code, country_name) VALUES (0249, "Sudão");
INSERT INTO Countries (country_code, country_name) VALUES (0597, "Suriname");
INSERT INTO Countries (country_code, country_name) VALUES (0047, "Esvalbarde");
INSERT INTO Countries (country_code, country_name) VALUES (0268, "Suazilândia");
INSERT INTO Countries (country_code, country_name) VALUES (0046, "Suécia");
INSERT INTO Countries (country_code, country_name) VALUES (0041, "Suiça");
INSERT INTO Countries (country_code, country_name) VALUES (0963, "Síria");
INSERT INTO Countries (country_code, country_name) VALUES (0886, "Taiwan");
INSERT INTO Countries (country_code, country_name) VALUES (0992, "Tajiquistão");
INSERT INTO Countries (country_code, country_name) VALUES (0255, "Tanzânia");
INSERT INTO Countries (country_code, country_name) VALUES (0066, "Tailândia");
INSERT INTO Countries (country_code, country_name) VALUES (0670, "Timor-Leste");
INSERT INTO Countries (country_code, country_name) VALUES (0228, "Togo");
INSERT INTO Countries (country_code, country_name) VALUES (0690, "Toquelau");
INSERT INTO Countries (country_code, country_name) VALUES (0676, "Tonga");
INSERT INTO Countries (country_code, country_name) VALUES (1868, "Trinidad e Tobago");
INSERT INTO Countries (country_code, country_name) VALUES (0216, "Tunísia");
INSERT INTO Countries (country_code, country_name) VALUES (0090, "Turquia");
INSERT INTO Countries (country_code, country_name) VALUES (7370, "Turcomenistão");
INSERT INTO Countries (country_code, country_name) VALUES (1649, "Ilhas Turks e Caicos");
INSERT INTO Countries (country_code, country_name) VALUES (0688, "Tuvalu");
INSERT INTO Countries (country_code, country_name) VALUES (0256, "Uganda");
INSERT INTO Countries (country_code, country_name) VALUES (0380, "Ucrânia");
INSERT INTO Countries (country_code, country_name) VALUES (0971, "Emirados Árabes");
INSERT INTO Countries (country_code, country_name) VALUES (0044, "Reino Unido");
INSERT INTO Countries (country_code, country_name) VALUES (0001, "Estados Unidos");
INSERT INTO Countries (country_code, country_name) VALUES (0001, "Ilhas Menores Distantes dos Estados Unidos");
INSERT INTO Countries (country_code, country_name) VALUES (0598, "Uruguai");
INSERT INTO Countries (country_code, country_name) VALUES (0998, "Uzbequistão");
INSERT INTO Countries (country_code, country_name) VALUES (0678, "Vanuatu");
INSERT INTO Countries (country_code, country_name) VALUES (0058, "Venezuela");
INSERT INTO Countries (country_code, country_name) VALUES (0084, "Vietnam");
INSERT INTO Countries (country_code, country_name) VALUES (1284, "Ilhas Virgens Inglesas");
INSERT INTO Countries (country_code, country_name) VALUES (1340, "Ilhas Virgens (USA)");
INSERT INTO Countries (country_code, country_name) VALUES (0681, "Wallis e Futuna");
INSERT INTO Countries (country_code, country_name) VALUES (0212, "Saara Ocidental");
INSERT INTO Countries (country_code, country_name) VALUES (0967, "Iêmen");
INSERT INTO Countries (country_code, country_name) VALUES (0260, "Zâmbia");
INSERT INTO Countries (country_code, country_name) VALUES (0263, "Zimbábue");
CREATE TABLE IF NOT EXISTS Contacts (
    contact_id INT AUTO_INCREMENT PRIMARY KEY,
    contact_firstname VARCHAR(150) NOT NULL,
    contact_lastname VARCHAR(150),
    contact_birthdate DATE,
    contact_register_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    contact_last_modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL
);
CREATE TABLE IF NOT EXISTS Phones (
    phone_id INT AUTO_INCREMENT PRIMARY KEY,
    phone_label VARCHAR(100) NOT NULL,
    phone_number VARCHAR(25),
    phone_country INT NOT NULL,
    phone_contact INT NOT NULL,
    CONSTRAINT fk_phone_country
    FOREIGN KEY (phone_country)
    REFERENCES Countries(country_id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT,
    CONSTRAINT fk_phone_contact
    FOREIGN KEY (phone_contact)
    REFERENCES Contacts(contact_id)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);
CREATE TABLE IF NOT EXISTS Emails (
    email_id INT AUTO_INCREMENT PRIMARY KEY,
    email_label VARCHAR(100) NOT NULL,
    email_address VARCHAR(250) NOT NULL,
    email_contact INT NOT NULL,
    CONSTRAINT fk_email_contact
    FOREIGN KEY (email_contact)
    REFERENCES Contacts(contact_id)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);
CREATE TABLE IF NOT EXISTS URLs (
    url_id INT AUTO_INCREMENT PRIMARY KEY,
    url_label VARCHAR(100) NOT NULL,
    url_address VARCHAR(500) NOT NULL,
    url_contact INT NOT NULL,
    CONSTRAINT fk_url_contact
    FOREIGN KEY (url_contact)
    REFERENCES Contacts(contact_id)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);