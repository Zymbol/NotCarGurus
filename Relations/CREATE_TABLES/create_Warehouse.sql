
DROP TABLE IF EXISTS Warehouse;
CREATE TABLE Warehouse
(
    
    W_ID TINYINT(4) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    W_Address VARCHAR(255) NOT NULL
);
        
INSERT INTO Warehouse (W_ID, W_Address) VALUES (1, "6924 Spaight Circle");
INSERT INTO Warehouse (W_ID, W_Address) VALUES (2, "84295 5th Point");
INSERT INTO Warehouse (W_ID, W_Address) VALUES (3, "51600 Hooker Alley");

