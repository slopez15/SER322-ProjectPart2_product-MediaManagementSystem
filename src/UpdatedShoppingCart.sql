SHOW ENGINE INNODB STATUS;
Drop DATABASE IF EXISTS shoppingcart12; 
CREATE DATABASE shoppingcart12;
USE shoppingcart12;
-- custuomer info
CREATE TABLE Customer(
	CID INT NOT NULL auto_increment, 
	Email VARCHAR(45) NOT NULL UNIQUE, 
	PhoneNumber VARCHAR(45), 
	FirstName VARCHAR(45), 
	Middlename VARCHAR(45), 
	LastName VARCHAR(45), 
	Address VARCHAR(45), 
	PRIMARY KEY(CID));
-- each order is connected with one person and date; same person buys different days, same day different people buy
CREATE TABLE Orders(
	OrderID INT NOT NULL auto_increment, 
	Date DATE, 
	CID INT NOT NULL,
	FOREIGN KEY(CID) REFERENCES Customer(CID),
	PRIMARY KEY(OrderID)
	);

-- each product is unique, but may be a copy of isbn with info and a price tag for that media;
CREATE TABLE Digitallibrary(
	UFC INT NOT NULL, 
	ISBN INT NOT NULL REFERENCES MediaDescription(ISBN),
	-- FOREIGN KEY(ISBN) REFERENCES MediaDescription(ISBN), 
	PRIMARY KEY(UFC)
	);

-- each title is unique and may have same info, but each title has it's own values and cost
CREATE TABLE MediaDescription(
	ISBN INT NOT NULL, -- needed to be in seperate table so items don't 'plagerize' and say thy are diff copy
	Title VARCHAR(45) NOT NULL, 
	Type VARCHAR(45), 
	Category VARCHAR(45),
	Year INT, 
	Author VARCHAR(45), 
	Cost DECIMAL(6,2),
	PRIMARY KEY(ISBN)
	);

CREATE table Favorites(
	FavID INT NOT NULL,
    ISBN INT NOT NULL, -- makes more sense than isbn since it's not the copy, but the item, due to price, that they may favor
    CID INT NOT NULL,
	foreign key(ISBN) REFERENCES MediaDescription(ISBN),
	foreign key (CID) REFERENCES Customer(CID),
	PRIMARY KEY(FavID)
	);



# Create data
INSERT INTO `customer` (`CID`, `Email`, `PhoneNumber`, `FirstName`, `Middlename`, `LastName`, `Address`) VALUES
(1, 'billyjoe123@mail.com', '123456789', 'Billy', 'M', 'Joe', '100 n northland'),
(12, 'bob@msn.com', '480-798-9009', 'Bob', 'Jim', 'Smith', '200 s southland'),
(123, 'ChelseaY@gmail.com', '480-098-9100', 'Chelsea', '', 'Rogers', '300 e eastland'),
(1234, 'Eric@hotmail.com', '480-098-9101', 'Cheesey', 'D', 'Rogers', '400 w westland');


INSERT INTO Orders (`OrderID`, `Date`, `CID`) VALUES
(1, '2016-12-01', 1),
(2, '2016-02-12', 12),
(3, '2016-03-04', 123),
(4, '2016-09-08', 1234),
(5, '2016-09-08', 1234);
-- INSERT INTO Orders Values (6, '2016-09-08', 56);

INSERT INTO DigitalLibrary (`UFC`, `ISBN`) VALUES
(1, 0),
(2, 01),
(3, 012),
(4, 0123),
(5, 0123),
(8, 01234);


INSERT INTO MediaDescription (`ISBN`, `Title`, `Type`, `Category`, `Year`, `Author`, `Cost`) VALUES
(0, 'Terminator 2','Video','Action','1992','James Cameroon', 9.99),
(01, 'Hangar 18', 'Music','Metal','1992','Megadeth', 0.99),
(012, 'Intro to Database Management','eBook','Computer Science','2004','Michael Douglas', 19.99),
(0123, 'Advanced Data Strcutures','eBook','Computer Science','1999','Sarah Dean', 29.99),
(01234, 'Terminator 2','Video','Action','1992','James Cameroon', 9.99),
(012345, 'Terminator 3','Video','Action','2000','James Cameroon', 9.99);

INSERT INTO Favorites Values 
(1,01,1);
