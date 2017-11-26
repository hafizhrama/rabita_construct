<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="fintech, IoT & BigData Development">
        <meta name="author" content="http://bootstraptaste.com">
        <link rel="shortcut icon" href="hexaproject-icon.png">

        <title>RABITA</title>

        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/bootstrap-theme.css" rel="stylesheet">

        <!-- siimple style -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style>
            /* ==== Google font ==== */
@import url('http://fonts.googleapis.com/css?family=Lato:400,300,700,900');

body {
	background: #394864;
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    font-size: 16px;
    color: #555;
    line-height: 1.6em;
    -webkit-font-smoothing: antialiased;
    -webkit-overflow-scrolling: touch;
}

h1, h2, h3, h4, h5, h6 {
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    color: #444;
}

h1 {
	font-size: 40px;
}

h3 {
	font-weight: 400;
}

h4 {
	font-weight: 400;
	font-size: 20px;
}

p {
    margin-bottom: 20px;
    font-size: 16px;
}


a {
    color: #ACBAC1;
    word-wrap: break-word;
    -webkit-transition: color 0.1s ease-in, background 0.1s ease-in;
    -moz-transition: color 0.1s ease-in, background 0.1s ease-in;
    -ms-transition: color 0.1s ease-in, background 0.1s ease-in;
    -o-transition: color 0.1s ease-in, background 0.1s ease-in;
    transition: color 0.1s ease-in, background 0.1s ease-in;
}

a:hover,
a:focus {
    color: #4F92AF;
    text-decoration: none;
    outline: 0;
}

a:before,
a:after {
    -webkit-transition: color 0.1s ease-in, background 0.1s ease-in;
    -moz-transition: color 0.1s ease-in, background 0.1s ease-in;
    -ms-transition: color 0.1s ease-in, background 0.1s ease-in;
    -o-transition: color 0.1s ease-in, background 0.1s ease-in;
    transition: color 0.1s ease-in, background 0.1s ease-in;
}

.alignleft {
    text-align: left;
}
.alignright {
    text-align: right;
}

.aligncenter {
    text-align: center;
}

.btn {
  display: inline-block;
  padding: 10px 20px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.428571429;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
       -o-user-select: none;
          user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 0;
}

.btn-theme  {
  color: #fff;
  background-color: #4F92AF;
  border-color: #4F92AF;
}
.btn-theme:hover  {
  color: #fff;
  background-color: #444;
  border-color: #444;
}
form.signup input  {
	height: 42px;
	width: 200px;
	border-radius: 0;
	border: none;
}
form.signup button.btn {
	font-weight: 700;
}
form.signup input.form-control:focus {
	border-color: #fd680e;
}


/* wrapper */

#wrapper {
	text-align: center;
	padding: 50px 0;
	background: url(../img/main-bg.jpg) no-repeat center top;
	background-attachment: relative;
	background-position: center center;
	min-height: 700px;
	width: 100%;	
    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    -o-background-size: 100%;
    background-size: 100%;

    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}



#wrapper h1 {
	margin-top: 60px;
	margin-bottom: 40px;
	color: #fff;
	font-size: 45px;
	font-weight: 900;
	letter-spacing: -1px;
}

h2.subtitle {
	color: #fff;
	font-size: 24px;
}

/* countdown */
#countdown {
	font-size: 48px;
	color: #fff;
	line-height: 1.1em;
	margin: 40px 0 60px;
}


/* footer */
p.copyright {
	margin-top: 50px;
	color: #fff;
	text-align: center;
}	
        </style>
    </head>

    <body>

        <div id="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h1><img src="hexaproject.png"/></h1>
                        <h2 class="subtitle">We're working hard to improve our website and we'll ready to launch after</h2>
                        <div id="countdown"></div>
                        <!--<form class="form-inline signup" role="form">
                          <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">
                          </div>
                          <button type="submit" class="btn btn-theme">Get notified!</button>
                        </form>		-->

                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <p class="copyright">Copyright &copy; 2017 - <a href="#">rabita.co.id</a></p>
                    </div>
                </div>		
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script type="text/javascript">
            $('#countdown').countdown('2017/12/09', function (event) {
                $(this).html(event.strftime('%w weeks %d days <br /> %H:%M:%S'));
            });
        </script>
    </body>
</html>
