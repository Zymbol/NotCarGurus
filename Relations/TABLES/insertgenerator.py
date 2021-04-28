import csv

tableName = "Works_At"

with open('Works_At.csv', 'r') as csvinput:
    reader = csv.reader(csvinput)
    firstLine = True
    with open('create_{0}.sql'.format(tableName), 'w') as sqloutput:
        createCommand = """
DROP TABLE IF EXISTS {0};
CREATE TABLE {0}
(
    E_ID TINYINT(4) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    F_name VARCHAR(255) NOT NULL,
    L_name VARCHAR(255) NOT NULL,
    Birthdate DATE NOT NULL,
    SSN VARCHAR(9) NOT NULL UNIQUE,
    W_ID TINYINT(4) NOT NULL REFERENCES Warehouse(W_ID),  
    Hire_Date DATE NOT NULL
);
        """.format(tableName)

        sqloutput.write(createCommand + "\n")

        for row in reader:
            if (firstLine):
                firstLine = False
                continue
            sqloutput.write('INSERT INTO {0} (E_ID, F_Name, L_name, Birthdate, SSN, W_ID, Hire_Date) VALUES ({1}, "{2}", "{3}", "{4}", "{5}", {6}, "{7}");\n'.format(tableName, row[0], row[1], row[2], row[3], row[4], row[5], row[6]))

print("Done")