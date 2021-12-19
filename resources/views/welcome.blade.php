<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {font-family: "Lato", sans-serif}
    .mySlides {display: none}
</style>
<body>
<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
    <!-- The Band Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
        <h2 class="w3-wide">{{$my_band->title}}</h2>
        <p class="w3-opacity"><i>{{$my_band->subtitle}}</i></p>
        <p class="w3-justify">{{$my_band->content}}</p>
        <div class="w3-row w3-padding-32">
            <div class="w3-third">
                <p>{{$my_band->name}}</p>
                <img src="{{$my_band->url}}" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
            </div>
            <div class="w3-third">
                <p>{{$my_band->name}}</p>
                <img src="{{$my_band->url}}" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
            </div>
            <div class="w3-third">
                <p>{{$my_band->name}}</p>
                <img src="{{$my_band->url}}" class="w3-round" alt="Random Name" style="width:60%">
            </div>
        </div>
    </div>


</div>

</body>
</html>
