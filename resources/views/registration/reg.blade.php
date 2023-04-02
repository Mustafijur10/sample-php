<!DOCTYPE html>

<html>
<head>
    <title>Registration</title>
</head>
<STYLE>
    A {text-decoration: none;} 
    .field_set{
 border-color:#F00;
 border-style: solid;
}

hr{ 
  height: 1px;
  color: red;
  background-color: red;
  border: none;
}

</STYLE>
<body>

    <form method="post" align="left" action="insert">
        <fieldset align="middle" class="field_set">
        	<legend>Registration</legend>
            
            <!--
            1. @csrf
            2. {{@csrf_field()}} 
        -->
        <br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Username &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :

        <input type="text" name="name" placeholder="Enter your name"><br><br>

        Password 	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:

        <input type="password" name="password" placeholder="Enter a password"><br><br>

        Confirm Password :
        <input type="password" name="cpassword" placeholder="Confirm password"><br><br>

        Email 			 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:

        <input type="text" name="email" placeholder="Enter a mail address"><br><br>


        Address 		 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:

        <input type="text" name="address" placeholder="Enter Your address"><br><br>

        Select Type &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     <select name="type">

                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>

                     </select><br><br>

         Gender &nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp 

          		 <input type="radio" name="gender" value="male">Male &nbsp &nbsp
        		 <input type="radio" name="gender" value="female">Female &nbsp &nbsp 
        		 <input type="radio" name="gender" value="other">Other <br><br>

        		 
        
        <input type="submit" name="submit" align="left" value="Register"><br><br> Already have an account?<a href="login">    Login</a>
        <hr>
        <a href="/">Home</a>

        
        </fieldset>
        
    </form>
</body>
</html>