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



<?php 
$links = array();
$links[] = 'http://es6-features.org';
echo refrences($links);
include('footer.php'); 
?>