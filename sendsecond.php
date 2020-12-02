<?php

        //Variable
        $Name= $_REQUEST['name'];
        $Email= $_REQUEST['email'];
        $Subject =$_REQUEST['subject'];
		$Message = $_REQUEST['message'];
       

        //Check input field
        if(empty($Name) || empty($Email) || empty($Subject) || empty($Message) )
        {
            echo "please fill all the fileds";
        }else{
            // mail("taxhintpriya@gmail.com","Nidhi_Registration", "From: 
            mail("sk31817@gmail.com","Nidhi_Registration", "From: 
                name = $Name 
                email = $Email 
                subject = $Subject 
				message	= $Message "
				);
				
            // echo "Send SUccesfully";
             
             echo '<script>window.location="index.php"</script>';
            // <script>alert("test succes")</script>
            
            // mail("Sk31817@gmail.com","AdarshBio.com","From:  $Name  <$Email>  <$Mobile> " );
            // echo "Send Succssfully";
            //     window.history.log(-1);
            
        }


?>