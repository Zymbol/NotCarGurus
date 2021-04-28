
CREATE TABLE Ships_To 
(     
    Order_ID TINYINT(4) UNSIGNED NOT NULL REFERENCES Orders(Order_ID),           
    W_ID TINYINT(4) NOT NULL REFERENCES Warehouse(W_ID),     
    C_Address VARCHAR(255) NOT NULL REFERENCES Customer(Address) 
);
        
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (1, 1, "05 Weeping Birch Park");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (2, 2, "4776 Vera Alley");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (3, 3, "95 Bluejay Hill");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (4, 3, "6 Scofield Trail");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (5, 2, "98 Bowman Alley");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (6, 1, "48 Bartillon Junction");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (7, 1, "1867 Summerview Lane");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (8, 2, "500 Derek Circle");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (9, 2, "5 Merry Lane");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (10, 1, "6 Carioca Plaza");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (11, 3, "65474 David Place");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (12, 2, "2 Menomonie Junction");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (13, 1, "78 Fair Oaks Center");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (14, 3, "44 Atwood Junction");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (15, 3, "0 Westridge Drive");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (16, 2, "216 Rutledge Pass");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (17, 1, "898 Fairview Court");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (18, 2, "7019 Veith Point");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (19, 1, "7 Fairfield Place");
INSERT INTO Ships_To (Order_ID, W_ID, C_Address) VALUES (20, 3, "04629 Kropf Point");
