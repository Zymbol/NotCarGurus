
DROP TABLE IF EXISTS Warehouse;
CREATE TABLE Warehouse
(
    
    W_ID TINYINT(4) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    W_Address VARCHAR(255) NOT NULL,
    W_Image VARCHAR(255)
);
        
INSERT INTO Warehouse (W_ID, W_Address, W_Image) VALUES (1, "6924 Stockdale Hwy", "./images/warehouse1.jpg");
INSERT INTO Warehouse (W_ID, W_Address, W_Image) VALUES (2, "84295 Gosford Rd", "./images/warehouse2.jpg");
INSERT INTO Warehouse (W_ID, W_Address, W_Image) VALUES (3, "51600 Martin Luther King Blvd", "./images/warehouse3.jpg");

