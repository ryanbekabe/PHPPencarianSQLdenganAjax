<?php
//https://www.formget.com/form-submission-using-ajax-php-and-javascript/
// Fetching Values From URL
mysql_connect("localhost","root","");
mysql_select_db("ajax01");
/* $connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("ajax01", $connection); // Selecting Database
 */
$name2 = $_POST['name1'];
if (isset($_POST['name1'])) {
	$data = array();
$foc=mysql_query("select * from form_element where student_name like '%$name2%'");
//while($fc=mysql_fetch_array($foc))
while($fc=mysql_fetch_row($foc))
{
//echo "Form Submitted succesfully <br/>";
//echo $fc['student_password'].'<br/>';
 $data[] = $fc;
//mysql_query("select * form_element where student_name like '%$name2%')"); //Insert Query
//$query = mysql_query("insert into form_element(student_id, student_name, student_email, student_password, student_contact) values ('NULL', '$name2', '$email2', '$password2','$contact2')"); //Insert Query
//echo $name2.$email2.$password2.$contact2;
}
 echo json_encode($data);

}
//mysql_close($connection); // Connection Closed

/* CREATE TABLE `form_element` (
  `student_id` int(10) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `form_element` (`student_id`, `student_name`, `student_email`, `student_password`, `student_contact`) VALUES
(1, 'Ryan', 'bekabeipa@gmail.com', '1234', '628124'),
(2, 'Ryan', 'bekabeipa@gmail.com', '1234', '62123456');
 */
?>
