
DROP TABLE IF EXISTS Employee;
CREATE TABLE Employee
(
    E_ID TINYINT(4) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    F_name VARCHAR(255) NOT NULL,
    L_name VARCHAR(255) NOT NULL,
    Birthdate DATE NOT NULL,
    SSN VARCHAR(9) NOT NULL UNIQUE,
    W_ID TINYINT(4) NOT NULL REFERENCES Warehouse(W_ID),  
    Hire_Date DATE NOT NULL,
    Username VARCHAR(255) NOT NULL UNIQUE
);
        
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (1, "Judith", "Pringley", "1995-07-27", "329-97-9604", 1, "2019-01-22", "JP1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (2, "Liane", "Keppie", "1995-08-20", "246-98-5968", 2, "2019-02-26", "LK1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (3, "Zerk", "Yakovl", "1985-05-07", "747-05-0160", 3, "2019-03-09", "ZY1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (4, "Brian", "Badsworth", "1985-11-22", "332-49-4438", 1, "2019-04-06", "BB1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (5, "Dani", "Sarney", "1986-08-04", "619-90-6992", 2, "2019-04-28", "DS1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (6, "Launce", "Laroze", "1999-10-13", "875-56-6534", 3, "2019-05-25", "LL1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (7, "Deerdre", "Dabes", "1985-12-09", "253-78-3792", 1, "2019-07-18", "DD1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (8, "Brett", "Pleat", "1993-06-08", "201-48-9403", 1, "2019-07-22", "BP1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (9, "Bernelle", "Aitcheson", "1985-08-28", "879-74-8410", 3, "2019-08-17", "BA1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (10, "Ailene", "Duckerin", "1988-03-18", "410-81-7497", 2, "2020-02-08", "AD1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (11, "Carmine", "Heskin", "1998-07-25", "335-38-5954", 1, "2020-03-11", "CH1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (12, "Bartram", "Rabier", "1989-12-06", "286-50-6306", 3, "2020-03-17", "BR1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (13, "Gunilla", "Jozaitis", "1992-05-18", "352-82-5744", 2, "2020-06-09", "GJ1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (14, "Avril", "Vasquez", "1994-05-16", "317-88-3026", 3, "2020-07-29", "AV1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (15, "Tamar", "Smithyman", "1987-08-10", "759-55-5710", 2, "2020-09-20", "TS1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (16, "Saloma", "Thompson", "1998-11-22", "286-63-2198", 1, "2021-01-18", "ST1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (17, "Tremaine", "Menhenitt", "1997-07-30", "321-19-3996", 3, "2021-01-21", "TM1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (18, "Analiese", "Rasmus", "1986-11-15", "305-01-9565", 3, "2021-02-14", "AR1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (19, "Blisse", "Brotherick", "1991-03-31", "520-99-3478", 2, "2021-02-24", "BB2");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (20, "Allayne", "Hattoe", "1988-05-22", "897-08-9809", 1, "2021-04-02", "AH1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (21, "Zak", "Scholefield", "1989-04-20", "666-83-1989", 1, "2021-01-22", "ZS1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (22, "Preston", "Hildebrandt", "1999-04-20", "646-83-9823", 2, "2021-01-22", "PH1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (23, "Edgar", "Bacallo", "1995-04-20", "726-03-1969", 1, "2021-01-22", "EB1");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date, Username) VALUES (24, "Carter", "Womack", "2000-04-20", "919-81-4889", 3, "2021-01-22", "CW1");
