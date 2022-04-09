<?php include('header.php'); ?>

There are two forms of the CASE statements: simple and searched CASE statements.

select 
case 4
    when 1 then "this is one"
    when 2 then "this is two"
    when 3 then "this is three"
    when 4 then "this is four"
else
   "there is no case"
end as "case listing";



<?php 
$links = array();
$links[] = 'http://es6-features.org';
echo refrences($links);
include('footer.php'); 
?>