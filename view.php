<?php include('header.php'); ?>

	
SQL CREATE VIEW Statement
A view is a virtual table based on the result-set of a SELECT statement.
What is a View?
In SQL, a VIEW is a virtual table based on the result-set of a SELECT statement.
A view contains rows and columns, just like a real table. The fields in a view are fields from one or more real tables in the database. You can add SQL functions, WHERE, and JOIN statements to a view and present the data as if the data were coming from a single table.
Note: The database design and structure will NOT be affected by the functions, where, or join statements in a view.
Syntax
CREATE VIEW view_name AS
SELECT column_name(s)
FROM table_name
WHERE condition
Note: The database does not store the view data! The database engine recreates the data, using the view's SELECT statement, every time a user queries a view. 
________________________________________
Using Views
A view could be used from inside a query, a stored procedure, or from inside another view. By adding functions, joins, etc., to a view, it allows you to present exactly the data you want to the user.
The sample database Northwind has some views installed by default. The view "Current Product List" lists all active products (products that are not discontinued) from the Products table. The view is created with the following SQL:
CREATE VIEW [Current Product List] AS
SELECT ProductID,ProductName
FROM Products
WHERE Discontinued=No
We can query the view above as follows:
SELECT * FROM [Current Product List]
Another view from the Northwind sample database selects every product in the Products table that has a unit price that is higher than the average unit price:
CREATE VIEW [Products Above Average Price] AS
SELECT ProductName,UnitPrice
FROM Products
WHERE UnitPrice>(SELECT AVG(UnitPrice) FROM Products)
We can query the view above as follows:
SELECT * FROM [Products Above Average Price]
Another example view from the Northwind database calculates the total sale for each category in 1997. Note that this view selects its data from another view called "Product Sales for 1997":
CREATE VIEW [Category Sales For 1997] AS
SELECT DISTINCT CategoryName,Sum(ProductSales) AS CategorySales
FROM [Product Sales for 1997]
GROUP BY CategoryName
We can query the view above as follows:
SELECT * FROM [Category Sales For 1997]
We can also add a condition to the query. Now we want to see the total sale only for the category "Beverages":
SELECT * FROM [Category Sales For 1997]
WHERE CategoryName='Beverages'

________________________________________
  
________________________________________
Your browser does not support inline frames or is currently configured not to display inline frames. 
________________________________________







<?php 
$links = array();
$links[] = 'http://es6-features.org';
echo refrences($links);
include('footer.php'); 
?>