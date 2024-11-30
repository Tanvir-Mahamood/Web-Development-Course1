/*CREATE DATABASE temp1;
create database temp2;
CREATE DATABASE college;
DROP DATABASE temp1;
DROP DATABASE temp2;*/
CREATE DATABASE college;
CREATE DATABASE IF NOT EXISTS college;
DROP DATABASE IF EXISTS company;

USE college;

CREATE TABLE student(
	id INT PRIMARY KEY,
    name VARCHAR(50),
    age INT NOT NULL
);

INSERT INTO student VALUES(1, "Tanvir", 21);
INSERT INTO student VALUES(2, "Foyez", 22);

SELECT * FROM student;

SHOW DATABASES;

USE college;
SHOW TABLES;

DROP TABLE student;	
CREATE TABLE student(
	rollno INT PRIMARY KEY,
    name VARCHAR(50)
);

SELECT * FROM student;
INSERT INTO student  -- multiple value insert
(rollno, name)
VALUES
(101, 'Karan'),
(102, 'Arjun'),
(103, 'Ram');

INSERT INTO student VALUES(104, 'Shyam'); -- single value insert

CREATE DATABASE xyz_company;
USE xyz_company;
CREATE TABLE employee(
	id INT PRIMARY KEY,
    name VARCHAR(100),
    salary INT
);
INSERT INTO employee
(id, name, salary)
VALUES
(1, 'adam', 25000),
(2, 'bob', 30000),
(3, 'casey', 40000);
SELECT * FROM employee;
INSERT INTO employee VALUES(4, 'Shyam'); -- absent salary, error

CREATE TABLE student(
	rollno INT PRIMARY KEY,
	name VARCHAR(50),
    marks INT NOT NULL,
    grade VARCHAR(1) DEFAULT 'X',
    city VARCHAR(20)
);

CREATE TABLE dept(
	id INT PRIMARY KEY,
	name VARCHAR(50)
);

INSERT INTO dept 
VALUES
(101, 'english'),
(102, 'IT');
SELECT * FROM dept;

CREATE TABLE teacher(
	id INT PRIMARY KEY,
	name VARCHAR(50),
    dept_id INT,
    FOREIGN KEY(dept_id) REFERENCES dept(id)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

INSERT INTO teacher
VALUES
(101, 'man1', 101),
(102, 'man2', 102),
(103, 'man3', 102);
SELECT * FROM teacher;
UPDATE dept SET name = "CSE" WHERE id = 102;
UPDATE dept SET id = 103 WHERE id = 102;

INSERT INTO student
(rollno, name, marks, grade, city)
VALUES
(101, 'anil', 78, 'C', 'Pune'),
(102, 'bhumika', 893, 'A', 'Mumbai'),
(103, 'chetan', 85, 'B', 'Mumbai'),
(104, 'dhruv', 96, 'A', 'Delhi'),
(105, 'emanue', 12, 'F', 'Delhi'),
(106, 'farah', 82, 'B', 'Delhi');

SELECT 	name, marks FROM student;
SELECT DISTINCT city FROM student;
SELECT * FROM student WHERE marks > 80;
SELECT rollno FROM student WHERE city = 'Mumbai';
SELECT rollno FROM student WHERE marks > 90 AND city = 'Mumbai';
SELECT rollno, name FROM student WHERE rollno%2=0;

SELECT * FROM student WHERE marks BETWEEN 70 and 80;
select * from student WHERE city IN ('Delhi', 'Mumbai', 'Agra');
select * from student WHERE city NOT IN ('Delhi', 'Mumbai', 'Agra');
SELECT * FROM student LIMIT 3;

SELECT * FROM student ORDER BY city ASC;
SELECT * FROM student ORDER BY marks DESC LIMIT 3;

SELECT MAX(marks) FROM student;
SELECT MIN(marks) FROM student;
SELECT AVG(marks) FROM student;
SELECT COUNT(marks) FROM student;

SELECT rollno FROM student;
SELECT COUNT(rollno) FROM student;
SELECT COUNT(rollno) FROM student GROUP BY city;
SELECT city, COUNT(rollno) FROM student GROUP BY city;

SELECT grade, COUNT(rollno) FROM student GROUP BY grade ORDER BY grade;

SELECT city,name, COUNT(rollno) FROM student GROUP BY city,name;
SELECT city, AVG(marks) FROM student GROUP BY city;
SELECT city, AVG(marks) FROM student GROUP BY city ORDER BY AVG(marks) DESC;

SELECT city, COUNT(rollno) FROM student GROUP BY city HAVING MAX(marks) > 90;
SELECT city FROM student WHERE grade = 'A' GROUP BY city HAVING MAX(marks) > 90;


UPDATE student SET marks = 93 WHERE rollno = 102;

-- if safe update is on, huge updated of database is stopped. Thats why, we've off this service.
SET SQL_SAFE_UPDATES = 0; 
UPDATE student SET grade = 'O' WHERE grade = 'A';
UPDATE student SET marks = marks + 1;
SELECT * FROM student;
DELETE FROM student WHERE marks <= 33;


SELECT * FROM student;
ALTER TABLE student ADD column AGE INT;
ALTER TABLE student CHANGE COLUMN AGE age INT;
ALTER TABLE student DROP COLUMN age;
ALTER TABLE student ADD column age INT NOT NULL DEFAULT 19;


-- Practice Ques
CREATE TABLE payment(
	cust_id INT PRIMARY KEY,
	cust_name VARCHAR(50),
    cust_mode VARCHAR(20),
    city VARCHAR(20)
);
INSERT INTO payment
(cust_id, cust_name, cust_mode, city)
VALUES
(101, 'Olivia', 'NetBanking', 'Portland'),
(102, 'Ethan', 'Credit Card', 'Miami'),
(103, 'Maya', 'Credit Card', 'Seattle'),
(104, 'Liam', 'NetBanking', 'Denver'),
(105, 'Sophia', 'Credit Card', 'New Orieans'),
(106, 'Caleb', 'Debit Card', 'Minneapolis'),
(107, 'Ava', 'Debit Card', 'Phoenix'),
(108, 'Lucas', 'NetBanking', 'Boston'),
(109, 'Isabella', 'NetBanking', 'Nashville'),
(110, 'Jackson', 'Credit card', 'Boston');

SELECT cust_id FROM payment;
SELECT COUNT(cust_id) FROM payment;
SELECT cust_mode, COUNT(cust_id) FROM payment GROUP BY cust_mode;
SELECT cust_mode, COUNT(cust_id) FROM payment GROUP BY cust_mode ORDER BY cust_mode;

SELECT * FROM student;
TRUNCATE TABLE student;

/*
change the name of column 'name' to 'full_name';
delete all the students who scored marks less than 80
delete the column for grade
*/
ALTER TABLE student CHANGE COLUMN name full_name VARCHAR(50);
DELETE FROM student WHERE marks < 80;
ALTER TABLE student DROP COLUMN grade;


--  join ------------------------
CREATE DATABASE college2;
USE college2;

CREATE TABLE student(
	id INT PRIMARY KEY,
    name VARCHAR(50)
);
INSERT INTO student(id, name)
VALUES
(101, 'adam'),
(102, 'bob'),
(103, 'casey');

CREATE TABLE course(
	id INT PRIMARY KEY,
    course VARCHAR(50)
);
INSERT INTO course(id, course)
VALUES
(102, 'english'),
(105, 'math'),
(103, 'science'),
(107, 'cse');

SELECT * FROM student;
SELECT * FROM course;

SELECT * FROM student INNER JOIN course ON student.id = course.id;
SELECT * FROM student LEFT JOIN course ON student.id = course.id;
SELECT * FROM student RIGHT JOIN course ON student.id = course.id;
-- SELECT * FROM student FULL JOIN course ON student.id = course.id;
SELECT * FROM student LEFT JOIN course ON student.id = course.id UNION SELECT * FROM student RIGHT JOIN course ON student.id = course.id;
-- LEFT EXCLUSIVE DATA AND RIGHT EXCLUSIVE DATA
SELECT * FROM student LEFT JOIN course ON student.id = course.id WHERE course.id IS NULL;
SELECT * FROM student RIGHT JOIN course ON student.id = course.id WHERE student.id IS NULL;
SELECT * FROM student LEFT JOIN course ON student.id = course.id WHERE course.id IS NULL UNION SELECT * FROM student RIGHT JOIN course ON student.id = course.id WHERE student.id IS NULL;

-- self join
-- example manager heriracy
CREATE TABLE employee(
	id INT PRIMARY KEY,
    name VARCHAR(50),
    manager_id INT
);
INSERT INTO employee(id, name, manager_id)
VALUES
(101, 'adam', 103),
(102, 'bob', 104),
(103, 'casey', NULL),
(104, 'donald', 103);
SELECT * FROM employee;
SELECT * FROM employee as a JOIN employee as b ON a.id = b.manager_id;
SELECT a.name, b.name FROM employee as a JOIN employee as b ON a.id = b.manager_id;
SELECT a.name as manager_name, b.name FROM employee as a JOIN employee as b ON a.id = b.manager_id;

-- UNION --
SELECT name FROM employee; 
SELECT name FROM employee UNION SELECT name FROM employee;
SELECT name FROM employee UNION ALL SELECT name FROM employee;

USE college2;

CREATE TABLE student2(
	rollno INT PRIMARY KEY,
    name VARCHAR(50),
    marks INT NOT NULL,
    grade VARCHAR(1),
    city VARCHAR(20)
);

INSERT INTO student2
(rollno, name, marks, grade, city)
VALUES
(101, 'anil', 78, 'C', 'Pune'),
(102, 'bhumika', 93, 'A', 'Mumbai'),
(103, 'chetan', 85, 'B', 'Mumbai'),
(104, 'dhruv', 96, 'A', 'Delhi'),
(105, 'emanue', 92, 'F', 'Delhi'),
(106, 'farah', 82, 'B', 'Delhi');

-- subqueries
SELECT * FROM student2;
SELECT AVG(marks) FROM student2;
SELECT name FROM student2 WHERE marks > 87.6667;
SELECT name FROM student2 WHERE marks > (SELECT AVG(marks) FROM student2);
SELECT rollno, name FROM student2 where rollno % 2 = 0;

SELECT name FROM student2 where rollno IN (102, 104, 106);
SELECT name FROM student2 where rollno IN (SELECT rollno FROM student2 WHERE rollno % 2 = 0);

SELECT MAX(marks), city FROM student2 WHERE city = 'Delhi';
SELECT MAX(marks) FROM (SELECT * FROM student2 WHERE city = 'Delhi') AS temp; -- alies must

SELECT (SELECT MAX(marks) FROM student2), name FROM student2;

CREATE VIEW view1 AS SELECT rollno, marks, name FROM student2;
SELECT * FROM view1 WHERE marks > 90;
SELECT * FROM view1;
DROP VIEW view1;