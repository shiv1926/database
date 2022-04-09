<?php include('header.php'); ?>

Fetching the data from a single table is much easier but all the business even small business required to get the data from multiple table at the same time, for example we have to show all the orders of all customers at the same time, such type of conditions required to work with multiple table, in such conditions we used joints.

Sql joins are used the  fetch the data from multiple tables, based on a join conditions. A join condition is the relationship between the columns from multiple tables, for example each order in order table have a customer id and customer table have a unique customerid for each customer, and the join condition is to fetch all the orders of a customer.

in practical, we know that the data may exist in both the table, or only one table ( either in first table or in second table ), if both the table does not have data, no join will be applicable. There are several situation like:
where we want to fetch only common data from both the tables i.e inner data.
Where we want to fetch all the data from first table and matched records from the second table i.e only outer data.
Where we want to fetch all the data from the second table and matched records from the first table i.e. outer data.

Depending on these conditions, There are 3 basic types of joins.
1. Inner join ( Equi Join or natural join )
2. Outer Join ( full outer join, left outer join, right outer join )
3. Cross join

but there are some more joins, which are produced by basic joins.
4. Self join
5. Natural join
6. join based on operators ( equi join and  theta ( non-equi ) join )

1. Inner Join : inner joins are used the fetch the common records from both  the data, The basic purpose of inner joins is to return matching records. inner keyword is optional. 
Syntax of inner join:
SELECT * from table1 t1
INNER JOIN table2 t2
On t1.column1 = t2.column1
 
2. Outer join : Outer join does not required each record from first table have to matching record from other table. outer keyword is optional, there are 3 type of outer joins.
a. Full outer join : 
b. Left outer join : 
c. Right outer join : 

Left outer join or left join : Left outer join return all the records from left table and matched record from right table.  If there are no matching records in right table, it return null values for them.
Syntax :
SELECT * from table1 t1
LEFT JOIN table2 t2
ON t1.column1  = t2.column1

Right outer join or right join : Right outer join return all the records from right table and matched records from left table, if there is no matching records in the left table, it returns null values for them.
Syntax : 
SELECT * FROM table t1
RIGHT JOIN table t2
ON t1.column1 = t2.column1

Full join or full outer join : full outer join combines the left join and right join,  this join return all the values from both the tables, 
Syntax: 
SELECT * FROM table t1
FULL JOIN table t2
ON t1.column1 = t2.column1

3. Cross join:  Cross join is a Cartesian join means Cartesian product of both the tables. This join does not required any condition to join two tables. This join returns records/rows that are multiplication of record number from both the tables means each row on left table will related to each row of right table. Syntax for right outer Join is as :
Select * from table_1 cross join table_2 
 

4. Self join:  Self join is used to join a database table to itself, particularly when the table has a Foreign key that references its own Primary Key. 

5. Natural join:  It is based on the two conditions :
1.	the JOIN is made on all the columns with the same name for equality.
2.	Removes duplicate columns from the result.
This seems to be more of theoretical in nature and as a result (probably) most DBMS don't even bother supporting. this It is enhanced version of Equi-Join, in which SELECT operation omits duplicate column. For implementation see INNER-JOIN

6. JOINs based on Operators
Depending on the operator used for a JOIN clause, there can be two types of JOINs. They are
1.	Equi JOIN
2.	Theta JOIN

1. Equi JOIN :
For whatever JOIN type (INNER, OUTER, etc), if we use ONLY the equality operator (=), then we say that the JOIN is an EQUI JOIN.

2. Theta JOIN :
This is same as EQUI JOIN but it allows all other operators like >, <, >= etc.

NOTE: Notice that when joining the three tables (ORDERS, PART, and CUSTOMER) that the ORDERS table was used in two joins and the other tables were used only once. Tables that will return the fewest rows with the given conditions are commonly referred to as driving tables, or base tables. Tables other than the base table in a query are usually joined to the base table for more efficient data retrieval. Consequently, the ORDERS table is the base table in this example. In most databases a few base tables join (either directly or indirectly) all the other tables. (See Day 15, "Streamlining SQL Statements for Improved Performance," for more on base tables.)


References: 
http://www.dotnet-tricks.com/Tutorial/sqlserver/W1aI140312-Different-Types-of-SQL-Joins.html
http://www.w3schools.com/sql/trysql.asp?filename=trysql_select_join_inner
http://stackoverflow.com/questions/448023/what-is-the-difference-between-left-right-outer-and-inner-joins



Joins and Keys 
Sometimes we have to select data from two or more tables to make our result complete. We have to perform a join. 
Tables in a database can be related to each other with keys. A primary key is a column with a unique value for each row. Each primary key value must be unique within the table. The purpose is to bind data together, across tables, without repeating all of the data in every table. 
In the "Employees" table below, the "Employee_ID" column is the primary key, meaning that no two rows can have the same Employee_ID. The Employee_ID distinguishes two persons even if they have the same name. 
When you look at the example tables below, notice that:  
•	The "Employee_ID" column is the primary key of the "Employees" table
•	The "Prod_ID" column is the primary key of the "Orders" table
•	The "Employee_ID" column in the "Orders" table is used to refer to the persons in the "Employees" table without using their names
Employees:
Employee_ID	Name
01	Hansen, Ola
02	Svendson, Tove
03	Svendson, Stephen
04	Pettersen, Kari
Orders:
Prod_ID	Product	Employee_ID
234	Printer	01
657	Table	03
865	Chair	03


Referring to Two Tables
We can select data from two tables by referring to two tables, like this:
Example
Who has ordered a product, and what did they order?
SELECT Employees.Name, Orders.Product
FROM Employees, Orders
WHERE Employees.Employee_ID=Orders.Employee_ID
Result
Name	Product
Hansen, Ola	Printer
Svendson, Stephen	Table
Svendson, Stephen	Chair
Example
Who ordered a printer?
SELECT Employees.Name
FROM Employees, Orders
WHERE Employees.Employee_ID=Orders.Employee_ID
AND Orders.Product='Printer'
Result
Name
Hansen, Ola

________________________________________
Using Joins
OR we can select data from two tables with the JOIN keyword, like this:
Example INNER JOIN
Syntax
SELECT field1, field2, field3
FROM first_table
INNER JOIN second_table
ON first_table.keyfield = second_table.foreign_keyfield
Who has ordered a product, and what did they order?
SELECT Employees.Name, Orders.Product
FROM Employees
INNER JOIN Orders
ON Employees.Employee_ID=Orders.Employee_ID
The INNER JOIN returns all rows from both tables where there is a match. If there are rows in Employees that do not have matches in Orders, those rows will not be listed.
Result
Name	Product
Hansen, Ola	Printer
Svendson, Stephen	Table
Svendson, Stephen	Chair
Example LEFT JOIN
Syntax
SELECT field1, field2, field3
FROM first_table
LEFT JOIN second_table
ON first_table.keyfield = second_table.foreign_keyfield
List all employees, and their orders - if any.
SELECT Employees.Name, Orders.Product
FROM Employees
LEFT JOIN Orders
ON Employees.Employee_ID=Orders.Employee_ID
The LEFT JOIN returns all the rows from the first table (Employees), even if there are no matches in the second table (Orders). If there are rows in Employees that do not have matches in Orders, those rows also will be listed.
Result
Name	Product
Hansen, Ola	Printer
Svendson, Tove	 
Svendson, Stephen	Table
Svendson, Stephen	Chair
Pettersen, Kari	 
Example RIGHT JOIN
Syntax
SELECT field1, field2, field3
FROM first_table
RIGHT JOIN second_table
ON first_table.keyfield = second_table.foreign_keyfield
List all orders, and who has ordered - if any.
SELECT Employees.Name, Orders.Product
FROM Employees
RIGHT JOIN Orders
ON Employees.Employee_ID=Orders.Employee_ID
The RIGHT JOIN returns all the rows from the second table (Orders), even if there are no matches in the first table (Employees). If there had been any rows in Orders that did not have matches in Employees, those rows also would have been listed.
Result
Name	Product
Hansen, Ola	Printer
Svendson, Stephen	Table
Svendson, Stephen	Chair
Example
Who ordered a printer?
Result
Name
Hansen, Ola





<?php 
$links = array();
$links[] = 'http://es6-features.org';
echo refrences($links);
include('footer.php'); 
?>