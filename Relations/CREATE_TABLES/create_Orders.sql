
DROP TABLE IF EXISTS Orders;
CREATE TABLE Orders
(
    Order_ID TINYINT(4) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Order_Date DATE NOT NULL,
    Account_ID INT NOT NULL REFERENCES Customer(Account_ID),
    C_Address VARCHAR(255) NOT NULL REFERENCES Customer(Address),
    VIN VARCHAR(255) NOT NULL REFERENCES Vehicle(VIN)
);
        
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (1, "2017-12-29", 1, "05 Weeping Birch Park", "4T1BK1EB6FU752527" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (2, "2020-08-24", 2, "4776 Vera Alley", "19UUA56642A233157" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (3, "2015-12-26", 3, "95 Bluejay Hill", "3C63D3KL9CG622193" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (4, "2018-04-01", 4, "6 Scofield Trail", "4USBU33576L116903" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (5, "2020-06-28", 5, "98 Bowman Alley", "WAUVFAFH9BN864684" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (6, "2017-01-30", 6, "48 Bartillon Junction", "4T1BK3DB0BU135535" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (7, "2016-09-04", 7, "1867 Summerview Lane", "1GYEK63N85R655109" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (8, "2019-11-16", 8, "500 Derek Circle", "JTHFE2C29E2056503" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (9, "2015-01-04", 9, "5 Merry Lane", "1GD312CG5EF086369" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (10, "2015-10-08", 10, "6 Carioca Plaza", "WDDLJ7DB5CA308462" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (11, "2019-08-02", 11, "65474 David Place", "2T1BU4EEXBC031824" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (12, "2020-05-30", 12, "2 Menomonie Junction", "1G6KE57Y33U544933" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (13, "2015-07-05", 13, "78 Fair Oaks Center", "19UUA56731A099829" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (14, "2017-06-29", 14, "44 Atwood Junction", "WAUDT48H96K468796" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (15, "2018-12-07", 15, "0 Westridge Drive", "KNADH4A36B6353074" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (16, "2018-09-06", 16, "216 Rutledge Pass", "WA1AV94L87D107258" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (17, "2020-05-13", 17, "898 Fairview Court", "1GTN1TEH1EZ047219" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (18, "2019-10-23", 18, "7019 Veith Point", "YV1952AS5E1470301" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (19, "2019-01-08", 19, "7 Fairfield Place", "WBA3A5G57CN709795" );
INSERT INTO Orders (Order_ID, Order_Date, Account_ID, C_Address, VIN) VALUES (20, "2020-04-30", 20, "04629 Kropf Point", "5NPDH4AE6FH449495" );
