<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminus</title>
    <link rel="stylesheet" href="{{asset('')}}/static/home.css">
    <link rel="icon" href="{{asset('')}}/static/favicon.png" type="image/png">
</head>
<body>
    <div class="terminusTopBanner"> <!-- All the elements for the top banner of the page, it's set to sticky for now. Does need optimisation to ensure everything is centred-->
        <div class="menuOption">☰</div>
        <div class="bannerFormat">
            
            <div class="LBannerLinks">
                <a href="about.html">About</a>
                <a href="keyboards.html">Keyboards</a> <!-- We probably need a better name, I'm thinking Products, but I will keep it as this just for now.-->
            </div>

            <a href="index.html"> <!-- Link for the logo -->
                <img src="{{asset('')}}/static/TerminusLogo.png" alt="Terminus Logo" class="logo">
            </a>

            <div class="RBannerLinks">
                <a href="misc.html">Misc.</a> <!-- placeholder-->
                <a href="contact.html">Contact</a>
            </div>

        </div>
        <div class = "right-logos">
            <div class="userIcon">
                <a href="{{url('userlogin')}}">
                    <img src="{{asset('')}}/static/userIcon.png" alt="User Icon">
                </a>
            </div>
            <div class="userBasket">🛒</div> <!-- This will be changed in future to have the green colour implemented-->
        </div>
    </div>
    
    
    <div class= "logInPage_body">
        <div class = "logIncontainer" id="main">
       

            <div class ="log-in">
                <form method="post"  action="{{url('dologin3')}}">
                    <h1> Forget Password</h1>
                     {{csrf_field()}}
                    <input type="text" name="username" placeholder="User Name" required="">
                    <input type="text" name="email" placeholder="Email" required="">
                    <input type="password" name="password" placeholder="New Password" required="">
                    <div class="passColour">
                        <a href="{{url('userlogin')}}">Login</a>
                    </div>
                    <button>Submit</button>
                </form>
            </div>

            <div class="overlay-container">
                <div class="overlay-effect">
                    <div class="overlay-left">
                        
                    </div>
                    <div class="overlay-right">
                        <h1>Welcome to Terminus!</h1>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="terminusFooter">
        <p><b>I want a footer here! &gt;:(</b></p>
    </div>

    <script src="{{asset('')}}/static/app.js"></script>

</body></html>

<form class="form-horizontal" role="form" style="margin-left:150px;border:1px solid rgb(230,230,230);width:800px;padding:60px;background:rgb(240,240,240,0.8);border-radius:20px;color:black" method="post"  action="{{url('dologin2')}}"> 
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label" style="">用户名</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="firstname" name="username" placeholder="用户名" >
    </div>
  </div><br>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">密码</label>
    <div class="col-sm-12">
      <input type="password" class="form-control" id="lastname" name="password" placeholder="密码">
    </div>
  </div>
  {{csrf_field()}}
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">登录</button>
    </div>
  </div>
</form>  