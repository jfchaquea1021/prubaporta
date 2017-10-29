
<?php 
  
  if(isset($_POST['email'])){
	  
	$name =$_POST["name"];
	$from =$_POST["email"];
	$interestedin=$_POST["interestedin"];
	$comment=$_POST["comment"];
	
	// Email Receiver Address
	$receiver="jfchaquea1021@gmail.com";
	$subject="Contacto CaroSilva.com";

	$message = "
	<html>
	<head>
	<title>HTML email</title>
	</head>
	<body>
	<table width='50%' border='0' align='center' cellpadding='0' cellspacing='0'>
	<tr>
	<td colspan='2' align='center' valign='top'><img style=' margin-top: 15px; ' src='http://www.yourdomain.com/images/logo-mail.png' ></td>
	</tr>
	<tr>
	<td width='50%' align='right'>&nbsp;</td>
	<td align='left'>&nbsp;</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Name:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$name."</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Email:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$from."</td>
	</tr>
		<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>What are you interested in?:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$interestedin."</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Message:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".nl2br($comment)."</td>
	</tr>
	</table>
	</body>
	</html>
	";
	
	
	/*
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	// More headers
	$headers .= 'From: <'.$from.'>' . "\r\n";
	*/

	$headers= 'MIME-Version: 1.0' . "\r\n";
	$headers.= 'Content-type: text/html; charset=utf-8' . "\r\n";



   //if(mail($receiver,$subject,$message,$headers))  
   if(mail($receiver,$subject,$message,$headers))  
   {
	   //Success Message
   
     
     echo '<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>Juan Felipe Chaquea</title>
        <!-- description -->
        <meta name="description" content="A great collection of creative, responsive, elegant onepage templates for different industries.">
        <!-- keywords -->
        <meta name="keywords" content="creative, css3, html5, onepage, multipurpose, bootstrap, responsive, agency, architecture, resume, blog, photography, restaurant, portfolio, spa, travel, wedding, coming soon">
        <meta charset="utf-8">
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- animation -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="css/owl.transitions.css" />
        <link rel="stylesheet" href="css/owl.carousel.css" />
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <!-- style -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>   
    
    <body>
   	 <img style="width: 100%;" src="../images/messageSent.jpg" alt="Correo enviado" /> <button onclick="location.href =\'http://www.carosilva.com\'" style=" position: absolute;bottom: 5%; left: 8%;" id="volver" class="highlight-button-dark btn btn-medium fadeInLeft animated">Go Back</button>
     </body>
</html>';
     
     
      
   }
   else
   {	
   	 //Fail Message
     echo '<html class="no-js" lang="en">
    <head>
       <!-- title -->
        <title>Juan Felipe Chaquea</title>
        <!-- description -->
        <meta name="description" content="A great collection of creative, responsive, elegant onepage templates for different industries.">
        <!-- keywords -->
        <meta name="keywords" content="creative, css3, html5, onepage, multipurpose, bootstrap, responsive, agency, architecture, resume, blog, photography, restaurant, portfolio, spa, travel, wedding, coming soon">
        <meta charset="utf-8">
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- animation -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="css/owl.transitions.css" />
        <link rel="stylesheet" href="css/owl.carousel.css" />
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <!-- style -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>   
    
    <body>
   	 <img style="width: 100%;" src="../images/messageNot.jpg" alt="Correo enviado" /> <button onclick="location.href =\'http://www.carosilva.com\'" style=" position: absolute;bottom: 5%; left: 8%;" id="volver" class="highlight-button-dark btn btn-medium fadeInLeft animated">Go Back</button>
     </body>
</html>';
   }

}
?>
