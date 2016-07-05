function login(){
    document.getElementById("email").value = document.getElementById("email").value.trim();
    document.getElementById("pwd").value = document.getElementById("pwd").value.trim();
    var user = document.getElementById("email").value;
    var pwd = document.getElementById("pwd").value;
    var xmlhttp;
	if (window.XMLHttpRequest)
		  {
           // code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		 
		  }
	else
		 {
          // code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  
		  }
		  xmlhttp.onreadystatechange = function () {
		      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

		          //response from the server

		          var response = xmlhttp.responseText;
		          alert(response);
		          if (response.trim() == "success") {
		              //alert("successfull login");
		              window.location.href = "admin/index.php";


		          }
		          else {
		              alert("Invalid login details");
		          }

		          // document.getElementById("login").submit();





		      }
		      else if (xmlhttp.readyState == 4 && xmlhttp.status != 200) {
		          // code here to do something when the script fails
		          alert("Invalid login details");
		      }
		  }
    xmlhttp.open("POST","aunthenticate.php?validate=true&username="+user+"&password="+pwd,true);
	xmlhttp.send();
	

    
}




