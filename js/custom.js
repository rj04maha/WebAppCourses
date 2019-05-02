$(function () {
  $('[data-toggle="popover"]').popover()
  
  $(".delete").click(doIt);
  
  $(".delete_user").click(doIt2);
  
  function doIt() {
	  
	  var cid = this.id; // HTML nodes have an id field that we can use to know exactly which delete button was clicked	  
	  //alert("CID: " + cid);
	  
	  var btn = $(this); // btn is now a jquery object constructed from the HTML node
	  //alert("BTN: " + btn.html())  // jquery objects have useful methods like html, which fetches the inner HTML of the tag
	
		// Rather than have the browser hyperlink to the script, we call the script asynchronously using the jQuery ajax method	
		var myurl = "delete_courses.php?cid="+cid;
	  	var alertMes = "You are deleting course " + cid;
        alert(alertMes);
		$.ajax({
				url: myurl, 
				success: function(data){
					btn.parent().parent().remove();
				}
		}); 
  }

  
  
  function doIt2() {
	  
	  var uid = this.id; // HTML nodes have an id field that we can use to know exactly which delete button was clicked	  
	  //alert("CID: " + cid);
	  
	  var btn = $(this); // btn is now a jquery object constructed from the HTML node
	  //alert("BTN: " + btn.html())  // jquery objects have useful methods like html, which fetches the inner HTML of the tag
	
		// Rather than have the browser hyperlink to the script, we call the script asynchronously using the jQuery ajax method	
		var myurl = "delete_users.php?uid="+uid;  
	  	var alertMes = "You are deleting user " + uid;
        alert(alertMes);
		$.ajax({
				url: myurl, 
				success: function(data){
					btn.parent().parent().remove();                    
				}
		}); 
  }
});