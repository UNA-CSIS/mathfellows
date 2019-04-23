-- Abdullah M & Holleigh 

CREATE DATABASE MathFellows;

USE MathFellows;

CREATE TABLE customers (
  id int auto_increment NOT NULL PRIMARY KEY,
  firstName varchar(50) NOT NULL,
  lastName varchar(50) NOT NULL,
  phone varchar(10),
  email varchar(50),
  username varchar(50) NOT NULL,
  password varchar(50) NOT NULL,
  date_created date
);


CREATE TABLE tutors (
  id int primary key auto_increment NOT NULL, 
  firstName varchar(50) NOT NULL, 
  lastName varchar(50) NOT NULL,
  phone int,
  email varchar(50),
  username varchar(50) NOT NULL,
  password varchar(50) NOT NULL, 
  approved tinyint(1) NOT NULL,
  active tinyint(1) NOT NULL,
  date_created date
);


CREATE TABLE admins (
  id int primary key auto_increment NOT NULL,
  username varchar(50) NOT NULL,
  password varchar(50) NOT NULL,
  rootAdmin tinyint(1) NOT NULL
);

CREATE TABLE grades (
	id int primary key auto_increment NOT NULL,
	grade varchar(50)
);

CREATE TABLE subjects (
	id int primary key auto_increment NOT NULL,
	subject varchar(50)
);

CREATE TABLE tutorGradeBridge (
	id int primary key auto_increment NOT NULL,
	tutorId int,
	gradeId int,
	FOREIGN KEY (tutorId) REFERENCES tutors(id),
	FOREIGN KEY (gradeId) REFERENCES grades(id)
);

CREATE TABLE tutorSubjectBridge (
	id int primary key auto_increment NOT NULL,
	tutorId int,
	subjectId int,
	FOREIGN KEY (tutorId) REFERENCES tutors(id),
	FOREIGN KEY (subjectId) REFERENCES subjects(id)
);

INSERT INTO customers (firstName, lastName, phone, email, username, password, date_created) VALUES ('John', 'Doe', '123456789', 'john@example.com', 'johnny22', '23kr2323', '2019-01-01');
INSERT INTO customers (firstName, lastName, phone, email, username, password, date_created) VALUES ('Alex', 'Halsey', '123456729', 'alex@example.com', 'alex91', '23ee323', '2019-01-01');
INSERT INTO customers (firstName, lastName, phone, email, username, password, date_created) VALUES ('Emily', 'Clark', '123456729', 'emily@example.com', 'emily455', '34ww4423', '2019-01-01');
INSERT INTO tutors (firstName, lastName, phone, email, username, password, approved, active, date_created) VALUES ('Nancy', 'James', '1234567891', 'nancy@example.com', 'nancyj', '3ww2345', '1', '1', '2019-01-01');
INSERT INTO tutors (firstName, lastName, phone, email, username, password, approved, active, date_created) VALUES ('Richard', 'Troy', '1234167891', 'richard@example.com', 'richardt', '4fw234t5', '1', '0', '2019-01-01'); 
INSERT INTO tutors (firstName, lastName, phone, email, username, password, approved, active, date_created) VALUES ('Fred', 'Sharp', '1234333891', 'fred@example.com', 'freds', '5f6w3234t5', '0', '0', '2019-01-01'); 
INSERT INTO admins (username, password, rootAdmin) VALUES ('masterAdmin', 'mathfellows', '1');
INSERT INTO admins (username, password, rootAdmin) VALUES ('josh87', '289ehndjw2ein', '0');
INSERT INTO admins (username, password, rootAdmin) VALUES ('anthony83', '44lknswlkn3n', '0');
INSERT INTO grades (grade) VALUES ('7th');
INSERT INTO grades (grade) VALUES ('8th');
INSERT INTO grades (grade) VALUES ('9th');
INSERT INTO grades (grade) VALUES ('10th');
INSERT INTO grades (grade) VALUES ('11th');
INSERT INTO grades (grade) VALUES ('12th');
INSERT INTO subjects (subject) VALUES ('pre-algebra');
INSERT INTO subjects (subject) VALUES ('algebra (1 or 2)');
INSERT INTO subjects (subject) VALUES ('geometry');
INSERT INTO subjects (subject) VALUES ('trigonometry');
INSERT INTO subjects (subject) VALUES ('pre-calculus');
INSERT INTO subjects (subject) VALUES ('calculus');
INSERT INTO tutorGradeBridge (tutorId, gradeId) VALUES (1, 1);
INSERT INTO tutorGradeBridge (tutorId, gradeId) VALUES (1, 2);
INSERT INTO tutorGradeBridge (tutorId, gradeId) VALUES (2, 3);
INSERT INTO tutorGradeBridge (tutorId, gradeId) VALUES (2, 4);
INSERT INTO tutorSubjectBridge (tutorId, subjectId) VALUES (1, 1);
INSERT INTO tutorSubjectBridge (tutorId, subjectId) VALUES (1, 3);
INSERT INTO tutorSubjectBridge (tutorId, subjectId) VALUES (2, 4);
INSERT INTO tutorSubjectBridge (tutorId, subjectId) VALUES (2, 5);

