INSERT INTO Customer (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) 
    VALUES('1', 'Jaquith', 'Luther', 'jluther0@feedburner.com', md5('Bigender'), 
    '1963-04-15', '05 Weeping Birch Park', 'jluther0'
    );



INSERT INTO Products(name, price) VALUES('Product 1', 1.99);
INSERT INTO Products(name, price) VALUES('Product 2', 24.99);
INSERT INTO Products(name, price) VALUES('Product 3', 19.99);
INSERT INTO Customer(Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES (21, 'test_first', 'test_last', 'testemail@test.com', 'test', '1992-12-12', '12 Test St', 'test_user');

-- Stored procedure for login

DROP PROCEDURE IF EXISTS LoginUser;
DELIMITER //
CREATE PROCEDURE `LoginUser` (uname varchar(255))
BEGIN
    SELECT COUNT(*) INTO @usernameCount
    FROM Customer
    WHERE Username = uname;

    IF @usernameCount > 0 THEN
        SELECT Account_ID as userid, Password FROM Customer WHERE Username = uname;
    ELSE
        SELECT NULL as Account_ID, NULL as Password;
    END IF;
END;
//
DELIMITER ;  

-- new procedure

DROP PROCEDURE IF EXISTS LoginUser;
DELIMITER //
CREATE PROCEDURE `LoginUser` (uname varchar(255))
BEGIN
    SELECT Username FROM Customer
    WHERE uname = username;
    -- SELECT COUNT(*) INTO @usernameCount
    -- FROM Customer
    -- WHERE Email = uname;

    -- IF @usernameCount > 0 THEN
    --     SELECT Account_ID as userid, Password FROM Customer WHERE Email = uname;
    -- ELSE
    --     SELECT NULL as Account_ID, NULL as Password;
    -- END IF;
END;
//
DELIMITER ;  


-- procedure to log in employee
 
DROP PROCEDURE IF EXISTS LoginEmployee;
DELIMITER //
CREATE PROCEDURE `LoginEmployee` (Euname varchar(255))
BEGIN
    SELECT Username FROM Employee
    WHERE Euname = username;
    -- SELECT COUNT(*) INTO @usernameCount
    -- FROM Customer
    -- WHERE Email = uname;

    -- IF @usernameCount > 0 THEN
    --     SELECT Account_ID as userid, Password FROM Customer WHERE Email = uname;
    -- ELSE
    --     SELECT NULL as Account_ID, NULL as Password;
    -- END IF;
END;
//
DELIMITER ;  

--Stored Procedure for Registering users
DROP PROCEDURE IF EXISTS RegisterUser;

DELIMITER //

CREATE PROCEDURE `RegisterUser` (uname varchar(30), passhash text)
BEGIN
    SELECT COUNT(*) INTO @usernameCount
    FROM Customer
    WHERE Username = uname;

    IF @usernameCount > 0 THEN
        SELECT NULL as userid, "Username already exists" AS 'Error';
    ELSE
        INSERT INTO Customer(Username, Password) VALUES (uname, passhash);
        SELECT Account_ID AS userid, NULL as 'Error' FROM Customer WHERE Username = uname;
    END IF;
END;
//
DELIMITER ;

CREATE PROCEDURE customerPurchases (C.Username VARCHAR(25));

DELIMITER // 
BEGIN
    SELECT C.*,V.*, O.Order_ID 
    FROM Customer C      
    JOIN Orders O on C.Account_ID = O.Account_ID     
    JOIN Vehicle V on V.VIN = O.VIN     
    WHERE C.Username = Username ;
END;
//
DELIMITER ;
