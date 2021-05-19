-- Stored procedure for login
------------------------------

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
----------------

DROP PROCEDURE IF EXISTS LoginUser;
DELIMITER //
CREATE PROCEDURE `LoginUser` (uname varchar(255))
BEGIN
    SELECT Username FROM Customer
    WHERE uname = username;

END;
//
DELIMITER ;  


-- procedure to log in employee
-------------------------------- 
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
----------------------------------------
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

--procedure for joining a customer with their order details
-----------------------------------------------------------
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


--procedure seems redundant, but it was meant to show up only
--if the managers were logged in. However, I couldn't figure out
--how to keep this procedure from affecting the prior query on the 
--page. So, I used logic in the employeeNav to only show the managers
--all employees' info.
------------------------------------------------------------------
DROP PROCEDURE IF EXISTS masterView;

DELIMITER //
CREATE PROCEDURE masterView(Euname VARCHAR(30))
BEGIN    
    IF Euname = "ZS1" 
    OR Euname = "EB1" 
    OR Euname = "PH1" 
    OR Euname = "CW1" THEN 
        SELECT * FROM Employee;  
    END IF;
END;
//
DELIMITER ;