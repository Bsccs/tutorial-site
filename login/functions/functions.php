<?php

function clean($string) /*to clear strings- unneccery inputs which are not required*/
{
	return htmlentities($string); 

}

function redirect($location)
{
	return header("location:{$location}");
}

function set_message($message)  /*set messages in session */
{
	if(!empty($message)){
		$_SESSION['message']=$message;
	}
	else {
		$message="";
	}

}   

function display_message() /*to display message*/
{
	if(isset($_SESSION['message']))
	{
		echo $_SESSION['message'];
		unset($_SESSION['message']);  /*message will not stay in it if unset is used*/
	}

} 
 
function token_generator()   /* to make form more secure*/
{
	$token=$_SESSION['token']=md5(uniqid(mt_rand(),true));
	return $token;

}      

?>

<script type="text/javascript">
	
	function valid()
	{
		var name=document.getElementById('firstname').value;

		var email=document.getElementById('email').value;

		var add= document.getElementById('txtaddress').value;

		var Phone=document.getElementById('phone').value;
	
		var Gender=document.getElementsByName('gender');
		
		var Qualification=document.getElementsByName('Qualification[]');
		
		var photo=document.getElementById('photo').value;
		
		var district=document.getElementById('select').value;
		
		var Username=document.getElementById('usename').value;
		
		var Password=document.getElementById('password').value;
		
		

		if(name=="")
		{
			document.getElementById('sp1').innerHTML="------>name required";
			//alert('name required');
			return false;
		}

		if(email==""|| email.indexOf('@')==-1 || email.indexOf('.')==-1)
		{
			document.getElementById('sp2').innerHTML="----->email required";
			//alert('email required');
			return false;
		}

		if(add=="")
		{
			document.getElementById('sp3').innerHTML="----->address required";
			//alert('name required');
			return false;
		}
		


		if(Phone=="" || isNaN(Phone) || Phone.length>10)
		{
			document.getElementById('sp4').innerHTML="----->mobile number required";
			//alert('mobile number required');
			return false;
		}
		
		
		flag=0;
		for(i=0;i<Gender.length;i++)
		{
			if(Gender[i].checked==true)
			{
				flag=1;
				break;
			}
		}
		if(flag==0)
		{
			document.getElementById('sp5').innerHTML="------>select a gender ";

			return false;

		}

		flagb=0;
		for(i=0;i<Qualification.length;i++)
		{
			if(Qualification[i].checked==true)
			{
				flagb=1;
				break;
			}
		}
			if(flagb==0)
		{
			document.getElementById('sp6').innerHTML="---->select Qualification";

			return false;

		}

		if(photo=="")
		{
			document.getElementById('sp7').innerHTML="------>photo required";
			//alert('name required');
			return false;
		}
		if(district=="")
		{
			document.getElementById('sp8').innerHTML="------>district required";
			//alert('name required');
			return false;
		}
		if(Username=="")
		{
			document.getElementById('sp9').innerHTML="------>username required";
			//alert('name required');
			return false;
		}
		if(Password=="")
		{
			document.getElementById('sp10').innerHTML="------>password required";
			//alert('name required');
			return false;
		}


	}

</script>
