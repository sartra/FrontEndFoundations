<?php

    $weather = "";
    $error = "";
    
    if (array_key_exists('city', $_GET)) {
        
        $city = str_replace(' ', '', $_GET['city']);
        
        $file_headers = @get_headers("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
        
        
        if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
    
            $error = "That city could not be found.";

        } else {
        
        $forecastPage = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
        
        $pageArray = explode('3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">', $forecastPage);
            
        if (sizeof($pageArray) > 1) {
        
                $secondPageArray = explode('</span></span></span>', $pageArray[1]);
            
                if (sizeof($secondPageArray) > 1) {

                    $weather = $secondPageArray[0];
                    
                } else {
                    
                    $error = "That city could not be found.";
                    
                }
            
            } else {
            
                $error = "That city could not be found.";
            
            }
        
        }
        
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Weather Scraper</title>

  <!-- Bootstrap -->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      
      <style>
        

        
        html {
          background: url('http://static.tumblr.com/m7jbopv/vA7mwwpdq/tumblr_mtag5zve3g1st5lhmo1_1280.jpg') no-repeat center top;
          margin-top: -10px;
          padding-top: 20px;
          text-align: center;
          background-attachment: relative;
          background-position: center center;
          min-height: 750px;
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

        body {
          background:none
        }
        

        .title{
          color: white; 
          margin-top: 200px;
          font-size: 8em;
        }

        h3{
          color:white;
        }
        
        .description{   
          height: auto;
          margin: 0 auto;
          padding: 1em;
/*    color: #468847;
    background-color: #dff0d8;
    border: 1px solid #d6e9c6;
    */
    color:white;
    background: rgb(54, 25, 25); /* Fall-back for browsers that don't                              support rgba */
    background: rgba(54, 25, 25, .6);
    font-size: 14px;
    font-weight: 500;
    line-height: 1.5;
    text-align: center;
    border-radius: 4px;
  } 
  
  #weather{
    width: 30%;
    margin: 0 auto; 
    margin-top: 2em;
  }    
  
  
  #city{
    width:300px;
  }
  
  

</style>


</head>


<body>
  

  
 

 <h1 class="title">Weather Forecast X</h1>
 
 <h3>Enter the name of a city</h3>
 
 
 
  <form class="form-inline">
  <fieldset class="form-group">
    <input type="text" class="form-control" name='city' id="city" placeholder="Eg. London, Tokyo" value = "<?php 
    
     if (array_key_exists('city', $_GET)) {
     
        echo $_GET['city'];
     
     } else {
     
         $error = "Please enter a city.";
     
     }
    
     ?>">
  </fieldset>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>



<div id="weather">
  
 <?php 
 if ($weather) {
   
  echo '<div class="description">'.$weather.'</div> ';
  
 } else if ($error) {
                  
                  echo '<div class="alert alert-danger" role="alert">
  '.$error.'
</div>';
                  
              }

?>

</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>


</body>
</html>