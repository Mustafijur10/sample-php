<!DOCTYPE html>

<html>
<head>
    <title>Login Page</title>
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

    <form method="post">
        <fieldset align="Middle" border="5" class="field_set">
            <br><br><br><legend>Login</legend>
            
            <!--
            1. @csrf
            2. {{@csrf_field()}} 
        -->
        <p style="color:red;">It's an official "to-let" site for bachelors</p><br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <a  href="/">Home</a>
        
        <br><br><br>

        Username: <input type="text" name="name" placeholder="Enter your username"><br><br>
        Password : <input type="password" name="pass" placeholder="Enter your password"><br><br><br>
        <input type="checkbox" name="remember">Remember me &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="submit" name="submit" value="Login"><br><br><br><hr><br>
        Not registered?<a href="/registration">&nbsp Create an account</a><br><br>

        </fieldset>
        
    </form>
    <div>{{session('msg')}}</div>
</body>
</html>


<br><br><br><br>


