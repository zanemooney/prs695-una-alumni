CREATE DATABASE crud;

USE crud;
CREATE TABLE person
(
  id bigint auto_increment PRIMARY KEY,
  name varchar(50),
  email varchar(50),
  section varchar(50),
  dob date
);

INSERT INTO person (name,email,section,dob) VALUES(
'Brandon','bcoplen','CIS-476-01','2000-01-01');
INSERT INTO person (name,email,section,dob) VALUES(
'Zachary','zcutshall','CIS-476-01','2000-01-01');
INSERT INTO person (name,email,section,dob) VALUES(
'Morgan','mduncan4','CIS-476-01','2000-01-01');
INSERT INTO person (name,email,section,dob) VALUES(
'Jarrod','jhumphrey2','CIS-476-01','2000-01-01');
INSERT INTO person (name,email,section,dob) VALUES(
'Mark','mjohnson32','CIS-476-01','2000-01-01');
INSERT INTO person (name,email,section,dob) VALUES(
'Macey','mjones44','CIS-476-01','2000-01-01');
INSERT INTO person (name,email,section,dob) VALUES(
'Noah','nkerstiens1','CIS-476-01','2000-01-01');
INSERT INTO person (name,email,section,dob) VALUES(
'Jake','jking18','CIS-476-01','2000-01-01');
INSERT INTO person (name,email,section,dob) VALUES(
'Uriel','ukodia','CIS-476-01','2000-01-01');
INSERT INTO person (name,email,section,dob) VALUES(
'Jerry','jlwamba','CIS-476-01','2000-01-01');
INSERT INTO person (name,email,section,dob) VALUES(
'Zane','zblankenship','CIS-476-01','2000-01-01');
INSERT INTO person (name,email,section,dob) VALUES(
'Taylor','tmoss','CIS-476-01','2000-01-01');
INSERT INTO person (name,email,section,dob) VALUES(
'Melody','mnolte1','CIS-476-01','2000-01-01');
INSERT INTO person (name,email,section,dob) VALUES(
'Van','vpham','CIS-476-01','2000-01-01');
INSERT INTO person (name,email,section,dob) VALUES(
'Nikki','nstewart2','CIS-476-01','2000-01-01');
INSERT INTO person (name,email,section,dob) VALUES(
'Katrina','kstoll','CIS-476-01','2000-01-01');

CREATE TABLE users
(
    id int primary key auto_increment,
    username varchar(255),
    password varchar(255)
);

-- insert a row into the users table:
-- username = foo
-- password = bar
INSERT INTO users (username, password) VALUES ('foo', '$2y$10$IWDcVmWIHlx5nI5A.18gNOUDoJZgdfWJwFMamea9JaUK9M.iTx8g.');

