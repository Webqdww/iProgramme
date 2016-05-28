// JavaScript Document
function openme(){
        document.getElementById('login').style.display='block';
        }
        function closeme(){
        document.getElementById('login').style.display='none';
		document.getElementById("no_name").style.display="none";
		document.getElementById("no_pas").style.display="none";
        }
        function logo_in(){
        //验证
        //转向...
        //myform.action=""
        //myform.submit()
		var user=document.getElementById("name").value;
		var pass=document.getElementById("password").value;
		if(user&&pass)
		{
			if(user!="Admin")
			{
				document.getElementById("name").value="";
				document.getElementById("password").value="";
				document.getElementById("no_name").style.display="";
			}
			else
				if(pass!="12345")
				{
					document.getElementById("no_name").style.display="none";
					document.getElementById("no_pas").style.display="";
					document.getElementById("password").value="";
				}
				else
				{
					document.getElementById("no_name").style.display="none";
					document.getElementById("no_pas").style.display="none";
			   	    alert("登陆成功！");
					closeme();
				}
		
		}
        }

        function opensign(){
        document.getElementById('sign').style.display='block';
        }
         function closesign(){
        document.getElementById('sign').style.display='none';
		document.getElementById("new_name").style.display="none";
		document.getElementById("new_password").style.display="none";
		document.getElementById("newname").value="";
		document.getElementById("password1").value="";
		document.getElementById("password2").value="";
        }
        function sign_up(){
  		var user=document.getElementById("newname").value;
		var pas1=document.getElementById("password1").value;
		var pas2=document.getElementById("password2").value;
		
		
			if(user=="Admin")
			{
				document.getElementById("new_name").style.display="";
				document.getElementById("new_password").style.display="none";
				document.getElementById("newname").value="";
				document.getElementById("password1").value="";
				document.getElementById("password2").value="";
			}
			else
			if(pas1!=pas2)
			{
				document.getElementById("new_name").style.display="none";
				document.getElementById("new_password").style.display="";
				document.getElementById("password1").value="";
				document.getElementById("password2").value="";
			}
			else
			if(pas1!="")
			{
				document.getElementById("new_name").style.display="none";
				document.getElementById("new_password").style.display="none";
				alert("sign up Success!");
				document.getElementById("newname").value="";
				document.getElementById("password1").value="";
				document.getElementById("password2").value="";
				closesign();
			}
        }