<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Client HelpDesk</title>
    
<link rel="stylesheet" href="css/project_style.css" type="text/css" />
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
	
	 <script src="http://code.jquery.com/jquery-latest.js"></script> 
	 
    <script type="text/javascript">
 
        var name = prompt("Please enter your name:", "client");
        
    	if (!name || name === ' ') {
    	   name = "client";	
    	}
    	
    	name = name.replace(/(<([^>]+)>)/ig,"");
    	
    	$("#name_container").html("You are: <span>" + name + "</span>");
    	
    	
        var chat =  new Chat();
    	$(function() {
    	
    		 chat.getState(); 
    		 
    		
             $("#client_send").keydown(function(event) {  
             
                 var key = event.which;  
           
              
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
              
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
    		 																																																});
    		
    		 $('#client_send').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    				
    			  }
             });
            
    	});
    </script>
	
	
	    <script> 
        $(document).ready(function() { 
        $('#btn_click').on('click', function() { 
            var url = 'index.php';  
            $('#div1-wrapper').load(url + ' #div1'); 
         }); 
        }); 
    </script> 

</head>

<body onload="setInterval('chat.update()', 1000)">
 <div id="mainarea">                
<div id ="header">
<h3> 203 701 1XYZ<br/>
  (1999)</h3>
</div>

<div id="breadnav">

<a href="info_entry.php">Our Representatives</a>&nbsp; | &nbsp;
<a href="#">Testimonials</a>&nbsp; | &nbsp;
</div>



<div id="sitenav">
<ul id ="nav">
<li><a href="index.php">HOME</a></li>
<li><a href="#">ABOUT XYZ</a></li>
<li><a href="#">PICK A CAR</a></li>
<li><a href= "support.php">SUPPORT </a></li>
</ul>
</div>

    <div id="page-wrap">
    
        <h2>Support Chat window</h2>
        
        <p id="name_container"></p>
        
        <div id="chatbox"><div id="chat_container"></div></div>
        
        <form id="message_container">
            <p><br>Support Question: </br></p>
            <textarea id="client_send" maxlength = '100' ></textarea>
        </form>
	
    </div>
	



</body>

</html>