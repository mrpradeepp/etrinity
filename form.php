<!DOCTYPE html> 
<HTML>
<HEAD>
<meta name="viewport" content="width=device-width, initial-scale=1">
   


   <link rel="stylesheet" href="css/themes/mytheme.css" /> 
  <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" /> 
  
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("select.enquiry").change(function(){
        var enq = $(".enquiry option:selected").val();
        //alert("You have selected the country - " + enq);
        
        if(enq=="Course")
        {
          //alert("Another option is needed");
          $("#coursed").show();
        }
         if(enq=="Other"|| enq=="Financial_Aid" || enq=="Career_Support")
         {
          $("#coursed").hide();

         }

    });
});
</script>




</HEAD>
<BODY>
<DIV data-role="page" id="about" >
	<DIV data-role="header">
		<a href="#" data-role="button"  data-rel="back" data-icon="arrow-l">BACK</a>
		<h1>

           <DIV>
                <img align="center"  id="mainimage" src="logo.jpg">
               <p>Call 647-781-9849</p>
              </DIV> 

		</h1>
				<a href="index.html" data-role="button" rel="external" data-icon="home">HOME</a>
             
	</DIV>
	<DIV data-role="main" class="ui-content" id="para" data-theme="a">
		<H3 align="center"> CONTACT US </H2>
			<form id="myform" method="POST" action="mail.php" data-ajax="false" >
		
				<div class="ui-field-contain">
    <label for="fname">First name:</label>
    <input type="text" name="fname" id="fname" required>
    <br>
    <label for="lname">Last name:</label>
    <input type="text" name="lname" id="lname" required>
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" placeholder="Your email.." required>
    <label for="phone">Phone Num:</label>
    <input type="tel" name="phone" pattern="^\d{3}-\d{3}-\d{4}$" placeholder="(---)-(---)-(----)">

    <label for="enquiry">Enquiry Type</label>
    <select name="enquiry" class="enquiry" id="cou">
      <option value="Course">Course</option>
      <option value="Career_Support">Career Support</option>
      <option value="Financial_Aid">Financial AID</option>
       <option value="Other">Other</option>
    </select>

    <div id="coursed"  hidden>
      
  <label for="course">Select Course</label>
    <select name="course" class="course" >
      <option value="Finance">Finance</option>
        <option value="Management">Management</option>
        <option value="IT">IT</option>
        <option value="Certificate">Certificate</option>
    </select>
 
</div>
<label for="message">Message</label>
<textarea rows="10" cols="40" name="message"></textarea>
    


    <span>
      <input type="submit" value="SUBMIT">

  </div>
</form>

	</div>

	<DIV data-role="footer"  data-position="fixed" >
<DIV data-role="navbar">
            		<UL>
            			<LI><a href="form.php" data-role="button" data-icon="mail" data-iconpos="left" data-inline="true" data-mini="true">CONTACT</a></LI>
                        <LI><a href="" data-role="button" data-icon="camera">GALLERY</a></LI>
                        <LI><a href="nlocation.html" data-role="button" data-icon="location">LOCATION</a></LI>
	
                    </UL>
            		
            	</DIV>
		
	</DIV>	
</BODY>
</HTML>