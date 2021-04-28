
DROP TABLE IF EXISTS Employee;
CREATE TABLE Employee
(
    E_ID TINYINT(4) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    F_name VARCHAR(255) NOT NULL,
    L_name VARCHAR(255) NOT NULL,
    Birthdate DATE NOT NULL,
    SSN VARCHAR(9) NOT NULL UNIQUE,
    W_ID TINYINT(4) NOT NULL REFERENCES Warehouse(W_ID),  
    Hire_Date DATE NOT NULL
);
        
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (1, "Judith", "Pringley", "1995-07-27", "329-97-9604", 1, "2019-01-22");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (2, "Liane", "Keppie", "1995-08-20", "246-98-5968", 2, "2019-02-26");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (3, "Zerk", "Yakovl", "1985-05-07", "747-05-0160", 3, "2019-03-09");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (4, "Brian", "Badsworth", "1985-11-22", "332-49-4438", 1, "2019-04-06");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (5, "Dani", "Sarney", "1986-08-04", "619-90-6992", 2, "2019-04-28");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (6, "Launce", "Laroze", "1999-10-13", "875-56-6534", 3, "2019-05-25");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (7, "Deerdre", "Dabes", "1985-12-09", "253-78-3792", 1, "2019-07-18");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (8, "Brett", "Pleat", "1993-06-08", "201-48-9403", 1, "2019-07-22");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (9, "Bernelle", "Aitcheson", "1985-08-28", "879-74-8410", 3, "2019-08-17");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (10, "Ailene", "Duckerin", "1988-03-18", "410-81-7497", 2, "2020-02-08");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (11, "Carmine", "Heskin", "1998-07-25", "335-38-5954", 1, "2020-03-11");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (12, "Bartram", "Rabier", "1989-12-06", "286-50-6306", 3, "2020-03-17");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (13, "Gunilla", "Jozaitis", "1992-05-18", "352-82-5744", 2, "2020-06-09");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (14, "Avril", "Vasquez", "1994-05-16", "317-88-3026", 3, "2020-07-29");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (15, "Tamar", "Smithyman", "1987-08-10", "759-55-5710", 2, "2020-09-20");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (16, "Saloma", "Thompson", "1998-11-22", "286-63-2198", 1, "2021-01-18");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (17, "Tremaine", "Menhenitt", "1997-07-30", "321-19-3996", 3, "2021-01-21");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (18, "Analiese", "Rasmus", "1986-11-15", "305-01-9565", 3, "2021-02-14");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (19, "Blisse", "Brotherick", "1991-03-31", "520-99-3478", 2, "2021-02-24");
INSERT INTO Employee (E_ID, F_name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES (20, "Allayne", "Hattoe", "1988-05-22", "897-08-9809", 1, "2021-04-02");
