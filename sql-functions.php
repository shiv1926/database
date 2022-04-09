<?php include('header.php'); ?>

	
	

SQL GROUP BY and HAVING
Aggregate functions (like SUM) often need an added GROUP BY functionality.
GROUP BY...
GROUP BY... was added to SQL because aggregate functions (like SUM) return the aggregate of all column values every time they are called, and without the GROUP BY function it was impossible to find the sum for each individual group of column values. 
The syntax for the GROUP BY function is:
SELECT column,SUM(column) FROM table GROUP BY column

________________________________________
GROUP BY Example
This "Sales" Table:
Company	Amount
W3Schools	5500
IBM	4500
W3Schools	7100
And This SQL:
SELECT Company, SUM(Amount) FROM Sales
Returns this result:
Company	SUM(Amount)
W3Schools	17100
IBM	17100
W3Schools	17100
The above code is invalid because the column returned is not part of an aggregate. A GROUP BY clause will solve this problem: 
SELECT Company,SUM(Amount) FROM Sales
GROUP BY Company
Returns this result:
Company	SUM(Amount)
W3Schools	12600
IBM	4500

________________________________________
HAVING...
HAVING... was added to SQL because the WHERE keyword could not be used against aggregate functions (like SUM), and without HAVING... it would be impossible to test for result conditions. 
The syntax for the HAVING function is:
SELECT column,SUM(column) FROM table
GROUP BY column
HAVING SUM(column) condition value
This "Sales" Table:
Company	Amount
W3Schools	5500
IBM	4500
W3Schools	7100
This SQL:
SELECT Company,SUM(Amount) FROM Sales
GROUP BY Company
HAVING SUM(Amount)>10000
Returns this result
Company	SUM(Amount)
W3Schools	12600





<?php 
$links = array();
$links[] = 'http://es6-features.org';
echo refrences($links);
include('footer.php'); 
?>