<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		 {{Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}
     {{ Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}
     {{ Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}
        <!-- Custom styles for this template -->
	 {{ Html::style('web_page/cover.css') }}	
   {{ Html::style('web_page/jquery.datetimepicker.css') }}   <!-- Pour le calendrier-->
   <!--agenda-->
   {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}
   {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js') }}
   {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js') }}
   {{ Html::style('//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css') }}
  
    <title>e-connexion</title>

	<link rel="stylesheet" href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css">
    
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Interface e-connexion</h3>
              <nav>
                @yield('button')
                <!--button type="button" class="btn btn-primary">Connexion</button-->
              </nav>
            </div>
            <br>
          
          @yield('content')
          </div>
          <!--div class="inner cover">
            <!--h1 class="cover-heading">Cover your page.</h1>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class="lead">
			  <form class="navbar-form navbar-left" role="search">
				<div class="form-group">
				  <label><span class="glyphicon glyphicon-user"></span></label>
				  <input type="text" class="form-control" placeholder="email">
				  <input type="text" class="form-control" placeholder="Mot de passe">
				  <!--button type="submit" style="background-image:url('connecter.jpg')" width="48" height="48"></button-->
				  <!--button type="button" class="btn btn-default">Connecter</button>
				</div>
			  </form>
			 
            </p-->
             
          <!--/div-->
         
          <div class="mastfoot">
            <div class="inner">
             
            </div>
          </div>
        </div>

      </div>

    </div>

     </body>
</html>