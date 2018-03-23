CREATE DATABASE SeneheNiwasa_php;
USE SeneheNiwasa_php;

CREATE TABLE users(Username VARCHAR(100) NOT NULL,
				   Password VARCHAR(100) NOT NULL,
				   PRIMARY KEY(Username,Password)
				   );
				   
CREATE TABLE Rooms(RoomID VARCHAR (5),
				   RoomName VARCHAR(100),
				   RoomPrice DECIMAL(20,2),
				   PRIMARY KEY(RoomID)
				   );				 

CREATE TABLE Customer(CustID INT NOT NULL AUTO_INCREMENT,
					  name VARCHAR(100),
					  email VARCHAR(200),
					  tel VARCHAR(10),
					  PRIMARY KEY(CustID)
					  );				

CREATE TABLE Reservation(ResID INT NOT NULL AUTO_INCREMENT,
						 RoomID VARCHAR(5),
						 CustID INT,
						 checkIn VARCHAR(10),
						 checkOut VARCHAR(10),
						 total DECIMAL(20,2),
						 PRIMARY KEY(ResID),
						 CONSTRAINT FOREIGN KEY(RoomID) REFERENCES Rooms(RoomID)
						 ON DELETE CASCADE ON UPDATE CASCADE,
						 CONSTRAINT FOREIGN KEY(CustID) REFERENCES Customer(CustID)
						 ON DELETE CASCADE ON UPDATE CASCADE
						 );	

INSERT INTO Rooms VALUES('R001','Superior Double Suit',8000.00);
INSERT INTO Rooms VALUES('R002','Standard Double Suit',7000.00);
INSERT INTO Rooms VALUES('R003','Basic Double Suit',6000.00);
INSERT INTO Rooms VALUES('R004','Whole Villa',25000.00);

select * 
	from reservation 
	where
	( date('2017-12-10') between checkin and checkout)
		or
	( date('2017-12-20') between checkin and checkout) ;
	
	
create table userprofile(
     userID int not null auto_increment,
     dob varchar(225),
     create table userprofile(
     userID int not null auto_increment,
     DOB varchar(225),
     Email varchar(225),
     Name  varchar(225),
     Tel varchar(225),
     Username varchar(225) not null,
	 primary key(userID),
     constraint foreign key(username) references userlogin(username)
     on delete cascade on update cascade
	 );