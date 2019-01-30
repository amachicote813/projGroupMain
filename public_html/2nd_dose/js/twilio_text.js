function delete_row(id) {
	$.ajax ({
	  type: 'POST',
	  url: 'http://sulley.cah.ucf.edu/~dig4503group2/2nd_dose/php/delete_order.php',
	  data: {
	  delete_row: 'delete_row',
	  row_id: id,
  },
  success:function(response) {
	  if(response=="success"){
			// Grab the text values from the table after deleting from the db.
			// Then pass the data to the second ajax call which will send text.
			var contact = document.getElementById("phone"+id).innerHTML;
			var drink = document.getElementById("drink"+id).innerHTML;
			send_text(contact, drink);

			// Visualy delete from the web page.
			var row=document.getElementById("row"+id);
			row.parentNode.removeChild(row);
   	}
  }
 });
}


function send_text(contact, drink) {
	$.ajax ({
	  type: 'POST',
	  url: 'http://sulley.cah.ucf.edu/~dig4503group2/2nd_dose/php/twilio_text.php',
	  data: {
	  contactName: contact,
	  drinkName: drink,
  },

  success:function(response) {
	  if(response=="success"){
			alert("Customer Contacted");
   	}
  }
 });
}
