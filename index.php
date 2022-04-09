<?php include('header.php'); ?>
<ul class="index">
	<li>
		<h4>Database</h4>
		<ul>
			<li><a href="<?php echo sql_url('what-is-data.php'); ?>">What is data</a></li>
			<li><a href="<?php echo sql_url('what-is-database.php'); ?>">What is database</a></li>
			<li><a href="<?php echo sql_url('what-is-dmbs.php'); ?>">What is Database management system</a></li>
			<li>
				<a href="<?php echo sql_url('type-of-database.php'); ?>">Types of database managements system</a>
				<h6>Some important database type</h6>
				<ul>
					<li><a href="<?php echo sql_url('rdbms.php'); ?>">Relational Database</a></li>
					<li><a href="<?php echo sql_url('rdbms.php'); ?>">Cloud Database</a></li>
					<li><a href="<?php echo sql_url('rdbms.php'); ?>">Nosql Database</a></li>
				</ul>
			</li>
			<li><a href="<?php echo sql_url('dbms-rdbms.php'); ?>">DBMS vs RDBMS</a></li>
		</ul>
	</li>
	<li>
		<h4>SQL</h4>
		<ul>
			<li><a href="<?php echo sql_url('what-is-sql.php'); ?>">What is sql</a></li>
			<li><a href="<?php echo sql_url('data-types.php'); ?>">Data Types</a></li>
			<li><a href="<?php echo sql_url('modifiers.php'); ?>">Modifiers</a></li>
			<li><a href="<?php echo sql_url('key-types.php'); ?>">Key types</a></li>
			<li><a href="<?php echo sql_url('clauses.php'); ?>">Clauses</a></li>
			<li><a href="<?php echo sql_url('case.php'); ?>">Case</a></li>
			<li><a href="<?php echo sql_url('case.php'); ?>">Case</a></li>
			<li><a href="<?php echo sql_url('case.php'); ?>">Case</a></li>
			<li><a href="<?php echo sql_url('case.php'); ?>">Case</a></li>
			<li><a href="<?php echo sql_url('case.php'); ?>">Case</a></li>
			<li><a href="<?php echo sql_url('case.php'); ?>">Case</a></li>
			<li><a href="<?php echo sql_url('case.php'); ?>">Case</a></li>
		</ul>
	</li>
</ul>
<?php 
$links = array();
$links[] = array('https://www.1keydata.com/sql', 'good');
echo refrences($links);
include('footer.php'); 
?>