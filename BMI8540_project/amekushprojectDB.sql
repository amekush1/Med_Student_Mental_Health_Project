-- Name: Amber Mekush-Harter 
-- EMAIL: amber.mekush@unmc.edu
-- Class: BMI 8540, Spring 2023
-- Assignment #: Project
-- 
-- Honor Pledge: On my honor as a student of the University of Nebraska at 
-- Omaha, I have neither given nor received unauthorized help on 
-- this programming assignment.
-- 
-- Partners: NONE
-- 
-- Sources: 

CREATE TABLE medstu_hlth(
	id VARCHAR(3) NOT NULL,
	age INT(2) NOT NULL,
	year INT(1) NOT NULL,
	sex INT(1) NOT NULL,
	glang INT(3) NOT NULL,
	part BOOLEAN NOT NULL,
	job BOOLEAN NOT NULL,
	stud_h INT(2) NOT NULL,
	health INT(1) NOT NULL,
	psyt BOOLEAN NOT NULL,
	jspe INT(3) NOT NULL,
	qcae_cog INT(2) NOT NULL,
	qcae_aff INT(2) NOT NULL,
	amsp INT(2) NOT NULL,
	erec_mean DECIMAL(10,10) NOT NULL,
	cesd INT(2) NOT NULL,
	stai_t INT(2) NOT NULL,
	mbi_ex INT(2) NOT NULL,
	mbi_cy INT(2) NOT NULL,
	mbi_ea INT(2) NOT NULL,
	PRIMARY KEY (id)
);

LOAD DATA LOCAL INFILE 'Data Carrard et al. 2022 MedTeach.csv' INTO TABLE medstu_hlth
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES
(id, age, year, sex, glang, part, job, stud_h, health, psyt, jspe, qcae_cog, qcae_aff, amsp, erec_mean, cesd, stai_t, mbi_ex, mbi_cy, mbi_ea);