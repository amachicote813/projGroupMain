function delete_row(id) {
	$.ajax ({
	  type: 'POST',
	  url: 'delete.php',
	  data: {
	  delete_row: 'delete_row',
	  row_id: id,
  },
  success:function(response) {
	   if(response=="success"){
	   var contact = document.getElementById("phone"+id).innerHTML;
 alert(contact);
		var row=document.getElementById("row"+id);
		row.parentNode.removeChild(row);
   }
  }
 });
}