
DROP TABLE IF EXISTS Customer;
CREATE TABLE Customer
(
    Account_ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	F_name VARCHAR(255) NOT NULL,
    L_name VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL UNIQUE,
	Password VARCHAR(255) NOT NULL,
    Birthdate DATE NOT NULL,
    Address VARCHAR(255) NOT NULL,
    Username VARCHAR(255) NOT NULL UNIQUE
);
        

INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (1, "Jaquith", "Luther", "jluther0@feedburner.com", md5("Big3242"), '2001-12-28', "05 Weeping Birch Park", "jluther0");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (2, "Maible", "Murkin", "mmurkin1@dyndns.org", md5("dfafavsdai83"), '1997-03-27', "4776 Vera Alley", "mmurkin1");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (3, "Ambur", "McNevin", "amcnevin2@smh.com.au", md5("124dfaq35"), '2005-06-20', "95 Bluejay Hill", "amcnevin2");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (4, "Loren", "Spinnace", "lspinnace3@deviantart.com", md5("583F23!36"), '2006-02-09', "6 Scofield Trail", "lspinnace3");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (5, "Melony", "Mufford", "mmufford4@hubpages.com", md5("54185F5y66d"),'1985-09-05', "98 Bowman Alley", "mmufford4");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (6, "Nathanael", "Redmain", "nredmain5@mail.ru", md5("5djmreF5"), '2003-10-11', "48 Bartillon Junction", "nredmain5");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (7, "Jessie", "Cawkill", "jcawkill6@webnode.com", md5("586992fggbmij"), '1998-08-07', "1867 Summerview Lane", "jcawkill6");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (8, "Kitty", "McKelloch", "kmckelloch7@state.tx.us", md5("5215fdsfhmc"), '2001-05-23', "500 Derek Circle", "kmckelloch7");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (9, "Woody", "Jobb", "wjobb8@artisteer.com", md5("58wsdfd46t39"), '2002-04-04', "5 Merry Lane", "wjobb8");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (10, "Charmian", "Trevers", "ctrevers9@disqus.com", md5("affs6z34&&2"), '2000-09-05', "6 Carioca Plaza", "ctrevers9");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (11, "Hallsy", "Comino", "hcominoa@rediff.com", md5("251#$1263fsg"), '1989-01-23', "65474 David Place", "hcominoa");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (12, "Gweneth", "Philipeau", "gphilipeaub@dailymotion.com", md5("f##2232f4sjsa"), '1997-01-25', "2 Menomonie Junction", "gphilipeaub");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (13, "Eli", "Rasp", "traspc@360.cn", md5("aadgF3546KK2"), '1969-06-05', "78 Fair Oaks Center", "traspc");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (14, "Humbert", "Hartles", "hhartlesd@vimeo.com", md5("4hskdghjGS86"), '2001-07-07', "44 Atwood Junction", "hhartlesd");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (15, "Palm", "Fawley", "pfawleye@twitter.com", md5("43f2ZZAdw51"), '1972-03-13', "0 Westridge Drive", "pfawleye");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (16, "Leonard", "Wyant", "lwyantf@xinhuanet.com", md5("a65FSA%9f"), '2004-11-12', "216 Rutledge Pass", "lwyantf");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (17, "Carce", "O'Sculley", "cosculleyg@sbwire.com", md5("Fksa!#342fd"), '1987-12-03', "898 Fairview Court", "cosculleyg");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (18, "Lem", "Drought", "ldroughth@webs.com", md5("FFDSFDGSG65"), '1995-06-12', "7019 Veith Point", "ldroughth");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (19, "Abelard", "Maddy", "amaddyi@friendfeed.com", md5("Yewaif42415&"), '2001-02-26', "7 Fairfield Place", "amaddyi");
INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (20, "Pinchas", "Storr", "pstorrj@sbwire.com", md5("FK2345*fsf"), '2000-10-04', "04629 Kropf Point", "pstorrj");
