function myFunction() {
var name = document.getElementById("name").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1=' + name;
if (name == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "ajaxjscari.php",
//async:true,
data: dataString,
dataType:'json',
//cache: false,
success: function(data) {
	var datanya = data[0];
	var datanya2 = data[1];
	//alert(datanya);
	$('#ModalHeader').html(datanya2);
//$('#ModalGue').modal('show');
}
/* error: function() {
	alert('NULL');
} */
});
}
return false;
}
