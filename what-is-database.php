<?php include('header.php'); ?>
<h4>What is database</h4>
<ul>
    <li>A database is a collection of data organised and classified according to some criteria.</li>
    <li>A database is an organized collection of data, so that it can be easily accessed and managed.</li>
    <li>You can organize data into tables, rows, columns, and index it to make it easier to find relevant information.</li>
    <li>The main purpose of the database is to operate a large amount of information by storing, retrieving, and managing data.</li>
    <li>Modern databases are managed by the database management system (DBMS).</li>
    <li>A database is an organized collection of structured information, or data.</li>
    <li>A database is usually controlled by a database management system (DBMS). </li>
    <li>Data within the most common types of databases in operation today is typically modeled in rows and columns in a series of tables to make processing and data querying efficient. The data can then be easily accessed, managed, modified, updated, controlled, and organized. Most databases use structured query language (SQL) for writing and querying data.</li>
</ul>

<h4>Evolution of the database</h4>
<ul>
    <li>Databases have evolved dramatically since their inception in the early 1960s. Navigational databases such as the hierarchical database (which relied on a tree-like model and allowed only a one-to-many relationship), and the network database (a more flexible model that allowed multiple relationships), were the original systems used to store and manipulate data. Although simple, these early systems were inflexible. In the 1980s, relational databases became popular, followed by object-oriented databases in the 1990s. More recently, NoSQL databases came about as a response to the growth of the internet and the need for faster speed and processing of unstructured data. Today, cloud databases and self-driving databases are breaking new ground when it comes to how data is collected, stored, managed, and utilized.</li>
</ul>

<?php 
$links = array();
$links[] = array('https://www.javatpoint.com/what-is-database');
echo refrences($links);
include('footer.php'); 
?>