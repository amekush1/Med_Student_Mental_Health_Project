#!/usr/bin/env python3

# Name:  Amber Mekush-Harter
# EMAIL: amber.mekush@unmc.edu
# Class: BMI 8540, Spring 2023
# Assignment #: 12
#
# Honor Pledge: On my honor as a student of the University of Nebraska at
# Omaha, I have neither given nor received unauthorized help on
# this programming assignment.
#
# Partners: None
#
# Sources: https://stackoverflow.com/questions/60039138/sql-in-python-how-to-debug-print-for-an-sql-query-with-variables-s
# https://dev.mysql.com/doc/connector-python/en/connector-python-api-mysqlcursor-fetchone.html
# https://stackoverflow.com/questions/5736820/sql-how-to-select-earliest-row

# Import the API
import MySQLdb

# The function below imports the file and the protein style number chosen
import sys

# The function below prints a message if no options are given
if(len(sys.argv) == 1):
	print('Error: No options given. See choices provided above.')
	sys.exit()

# The function below assigns labels for the arguments provided by the user
year = sys.argv[1]

# Create a database connection using the connect() method.
# The conn object is a connection to the database.
conn = MySQLdb.connect(db="amekush-harter")

# Create a cursor, an object that allows you to interact with the database
cursor = conn.cursor()

# Send a SQL command to the database using the execute() method
cursor.execute ("SELECT AVG(health), AVG(jspe), AVG(qcae_cog), AVG(qcae_aff), AVG(amsp), AVG(erec_mean), AVG(cesd), AVG(stai_t), AVG(mbi_ex), AVG(mbi_cy), AVG(mbi_ea) FROM medstu_hlth WHERE year = '%s';" % year)

# Store row in a variable
row = cursor.fetchone()

# Provide different statements depending on the results
if row[0] is not None:
	print("Year %s Average Results:\nStudent Satisfaction of Health: %s\nJSPE-S Score: %s" % (year, row[0], row[1]))
else:
	print("Year %s is not an option. See choices provided above.")
	row = cursor.fetchone()

# Close the cursor
cursor.close()

# Close the database connection
conn.close()
