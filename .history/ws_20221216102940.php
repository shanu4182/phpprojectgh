<?php
$weather = "";
$error = "";

if(array_key_exists('city', $_GET)){
    $city = str_replace(' ','',$_GET[$city]);

    $file_headers = @get_headers("https://www.weather-forecast.com/locations/.
   $city . London/forecasts/latest")
}
else{
    $error = "that city could not be found.";
}//end of array key exists test

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Scraper</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
              rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
              crossorigin="anonymous">
  <style type="text/css">
    html{
       background: url('pictur.jpg') no-repeat center center fixed;
    }
    body{
        background: none;
    }
    .container{
         text-align: center;
         margin-top: 100px;
         width: 450px;
    }
    input{
         margin: 20px 0;
    }
    #weather{
          margin-top: 15px;
    }
    .head{
        color: white;
    }
    </style>
</head>
<body>
    <div class="container">
 <h1 class="head">What's the Weather</h1>
 <form>
    <fieldset class="form-group">
        <label form="city">Enter name of city.</label>
        <input type="text" class="form-control"
        name="city" id="city" placeholder="E.g., London.Tokyo">
    </fieldset>
    <button type="submit" class="btn btn-primary">submit</button>
    </form>
    <div id="weather"></div>
    </div> <!--  end of clss container -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
                crossorigin="anonymous">
                </script>
                
</body>
</html>