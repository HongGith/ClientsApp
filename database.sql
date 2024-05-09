DROP TABLE Donors;
DROP TABLE Foods;
DROP TABLE ReceiveRecords;
DROP TABLE DonateRecords;
DROP TABLE Students;


CREATE TABLE Students (
studentNo VARCHAR(4),
name VARCHAR(30),
sex VARCHAR(10),
age INTEGER,
email VARCHAR(50),
PRIMARY KEY (studentNo));

CREATE TABLE Owners (
ownerNo VARCHAR(4),
name VARCHAR(50),
address VARCHAR(50),
city VARCHAR(30),
email VARCHAR(50),
PRIMARY KEY (ownerNo));

CREATE TABLE Houses (
houseNo VARCHAR(4),
street VARCHAR(50),
city VARCHAR(30),
room INTEGER,
ownerNo VARCHAR(4),
PRIMARY KEY (houseNo),
FOREIGN KEY (ownerNo) REFERENCES Owners(ownerNo) ON DELETE NO ACTION
ON UPDATE CASCADE
);

CREATE TABLE HouseForRent (
studentNo VARCHAR(4),
houseNo VARCHAR(4),
startDate VARCHAR(10),
finishDate VARCHAR(10),
PRIMARY KEY (studentNo, houseNo, startDate),
FOREIGN KEY (studentNo) REFERENCES Students(studentNo) ON DELETE NO ACTION
ON UPDATE CASCADE,
FOREIGN KEY (houseNo) REFERENCES Houses(houseNo) ON DELETE NO ACTION
ON UPDATE CASCADE
);


INSERT INTO Owners VALUES('D100','New York Public Company','476 Fifth Ave','New York',NULL);
INSERT INTO Owners VALUES('D200','St Agnes Company','444 Amsterdam Ave','New York',NULL);
INSERT INTO Owners VALUES('D300','Boston Public Company','700 Boylston St','Boston',NULL);
INSERT INTO Owners VALUES('D400','West End Company','151 Cambridge St','Boston',NULL);
INSERT INTO Owners VALUES('D500','South End Company','685 Tremont St','Boston',NULL);
INSERT INTO Owners VALUES('D600','Company of Congress','101 Independence Ave','Washington',NULL);


INSERT INTO Students VALUES('S201','Kewon Song','Male','36','ksong@gmail.com');
INSERT INTO Students VALUES('S202','Frank Mancione','Male','14','fmancione@hotmail.com');
INSERT INTO Students VALUES('S203','Angela Peterkin','Female','66','angela@gmail.com');
INSERT INTO Students VALUES('S204','Stephanie Johnson','Female','16','sjohnson@gmail.com');
INSERT INTO Students VALUES('S205','Rafael Bah','Male','17','rbah@yahoo.com');
INSERT INTO Students VALUES('S206','Leisa Aras','Female','49','laras@yahoo.com');
INSERT INTO Students VALUES('S207','Robert Salsberry','Male','55','rsalsberry@hotmail.com');
INSERT INTO Students VALUES('S208','Alfina Chanti','Female','24','achanti@hotmail.com');
INSERT INTO Students VALUES('S209','Connie Profaci','Female','32','cprofaci@yahoo.com');
INSERT INTO Students VALUES('S210','Steven Plac','Male','17','steven@yahoo.com');
INSERT INTO Students VALUES('S211','Cindy Lyon','Female','20','cindy.lyon@hotmail.com');
INSERT INTO Students VALUES('S212','Nicole Gary','Female','26','ngary@gmail.com');


INSERT INTO Houses VALUES('H101','street1','New York', 1, 'D100');
INSERT INTO Houses VALUES('H102','street2','New York', 1, 'D200');
INSERT INTO Houses VALUES('H103','street3','New York', 1, 'D100');
INSERT INTO Houses VALUES('H104','street4','New York', 1, 'D300');
INSERT INTO Houses VALUES('H105','street5','New York', 1, 'D400');
INSERT INTO Houses VALUES('H106','street6','New York', 1, 'D600');


INSERT INTO HouseForRent VALUES('S201','H102','10/24/2021','11/07/2021');
INSERT INTO HouseForRent VALUES('S205','H106','10/25/2021','11/08/2021');
INSERT INTO HouseForRent VALUES('S210','H103','10/15/2021','10/29/2021');