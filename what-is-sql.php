<?php include('header.php'); ?>

What is SQL?
Database is a storage area where data is stored in the table format.
SQL is structured query language, SQL is relational database programming language. it is used to create the database, manipulate the database. There are two basic task of SQL, fetching the data from database and inserting the data in the database.
in the relational database data is stored in the tables ( sometime called database objects ) , Therefore SQL is worked on tables. Using SQL we can perform various other functions like, create tables, add data to tables, or modify data, drop the table, set permissions for users.
1.	it is an ANSI/ISO standard. 
2.	SQL is a non-procedural, English-like language.
3.	All the SQL statements start with any of the keywords like SELECT, INSERT, UPDATE, DELETE, ALTER, DROP, CREATE, USE, SHOW and all the statements end with a semicolon (;).
4.	SQL is case insensitive, which means SELECT and select have same meaning in SQL statements, but MySQL makes difference in table names. So if you are working with MySQL, then you need to give table names as they exist in the database.
depending on their functionality SQL commands are grouped into four major categories:
DDL ( Data DefinitionLanguage )
Data Definition Language (DDL) statements are used to define the database structure or schema. These SQL commands are used for creating, modifying, and dropping the structure of database objects.  Some examples:
1.	CREATE - to create objects in the database
2.	ALTER - alters the structure of the database
3.	DROP - delete objects from the database
4.	TRUNCATE - remove all records from a table, including all spaces allocated for the records are removed
5.	COMMENT - add comments to the data dictionary
6.	RENAME - rename an object
DML( Data Manipulation Language )
Data Manipulation Language (DML) statements are used for managing data within schema objects. These SQL commands are used for storing, retrieving, modifying, and deleting data. It never modifies the schema of the database.
1.	SELECT - retrieve data from the a database.
2.	INSERT - insert data into a table
3.	UPDATE - updates existing data within a table
4.	DELETE - deletes all records from a table, the space for the records remain
5.	MERGE - UPSERT operation (insert or update)
6.	CALL - call a PL/SQL or Java subprogram
7.	EXPLAIN PLAN - explain access path to data
8.	LOCK TABLE - control concurrency


DCL ( Data Control Language )
Data Control Language (DCL) statements. These SQL commands are used for providing security to database objects.Data Control Language is used to modify the user rights for the database. 
1.	GRANT - gives user's access privileges to database
2.	REVOKE - withdraw access privileges given with the GRANT command
TCL ( Transaction control Language )
Transaction Control (TCL) statements are used to manage the changes made by DML statements. It allows statements to be grouped together into logical transactions. These SQL commands are These commands are COMMIT, ROLLBACK, and SAVEPOINT.
1.	COMMIT - save work done
2.	SAVEPOINT - identify a point in a transaction to which you can later roll back
3.	ROLLBACK - restore database to original since the last COMMIT
4.	SET TRANSACTION - Change transaction options like isolation level and what rollback segment to use.



<?php 
$links = array();
$links[] = 'http://es6-features.org';
echo refrences($links);
include('footer.php'); 
?>