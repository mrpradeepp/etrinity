 


<HTML>
<HEAD>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/themes/mytheme.css" /> 
  <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" /> 
  <link rel="stylesheet" href="style.css">
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> 


<!--<link rel="stylesheet" href="css/themes/mytheme.css" />
  <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> 
<link rel="stylesheet" href="style.css">

<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->

</HEAD>
<BODY>
	<DIV data-role="page" id="index" >
		
		<DIV data-role="header">
    <a href="#" data-role="button"  data-rel="back" data-icon="arrow-l">BACK</a>
    <h1>

           <DIV>
                <img align="center"  id="mainimage" src="logo.jpg">
               <p>Call 647-781-9849</p>
              </DIV> 

    </h1>
        <a href="newindex.html" data-role="button" rel="external" data-icon="home">HOME</a>
             
  </DIV>
   <DIV data-role="main" class="ui-content" >
   	
   	

 <?php


 $first = $_POST['fname']; // sender
    $last = $_POST["lname"];
    $from = $_POST["email"];
    $ph=$_POST["phone"];
    $enq=$_POST["enquiry"];
    if($_POST["enquiry"]=='Career_Support' or $_POST["enquiry"]== 'Financial_Aid' or $_POST["enquiry"]== 'Other' )
    {

     $course="Enquiry not related to course";

    }
    else

    {
     $course=$_POST["course"];
    }
    $details="Enqiry received from ,".$first ."&nbsp;&nbsp;".$last."&nbsp;"."PhoneNumber".":".$ph."&nbsp;"."in enquiry Category".$enq."<br>"."The Enquiry message is"."&nbsp;";
    
    $message = $_POST["message"];
    $mailBody="Name: $first\nEmail: $from\nPhone: $ph\nEnquiry in: $enq\n\n$message";
    $cont=$details.$message;
     
     echo "</DIV>";

      mail("mrpradeepp@gmail.com",$enq,$mailBody,"From: $from\n");
      if(mail)
      {

        echo "<h4>"."Your email enquiry was succesffull.We will contact you soon!!"."</h4>";
      }
    ?>
    <DIV data-role="footer"  data-position="fixed" >
            	<DIV data-role="navbar">
            		<UL>
            			<LI><a href="" data-role="button" data-icon="mail" data-iconpos="left" data-inline="true" data-mini="true">CONTACT</a></LI>
                        <LI><a href="" data-role="button" data-icon="camera">GALLERY</a></LI>
                        <LI><a href="nlocation.html" rel="external" data-role="button" data-icon="location">LOCATION</a></LI>
	
                    </UL>
            		
            	</DIV>
