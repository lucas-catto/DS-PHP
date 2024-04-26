
DROP   DATABASE School;
CREATE DATABASE School;
USE             School;

CREATE TABLE Students (
    StudentId       INT PRIMARY KEY AUTO_INCREMENT,
    StudentName     VARCHAR(100) NOT NULL,
    StudentRegister VARCHAR(10)  NOT NULL
);

SELECT * FROM Students;

CREATE TABLE Teachers (
    TeacherId       INT PRIMARY KEY AUTO_INCREMENT,
    TeacherName     VARCHAR(100) NOT NULL,
    TeacherClass    VARCHAR(100) NOT NULL
);

SELECT * FROM Teachers;
