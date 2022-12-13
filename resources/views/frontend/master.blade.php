
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>FoodHut | Free Bootstrap 4.3.x template</title>
   
    <!-- font icons -->
    <link rel="stylesheet" href="{{url('/frontend/assets/vendors/themify-icons/css/themify-icons.css')}}">

    <link rel="stylesheet" href="{{url('/frontend/assets/vendors/animate/animate.css')}}">

    <!-- Bootstrap + FoodHut main styles -->
	<link rel="stylesheet" href="{{url('/frontend/assets/css/foodhut.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    @notifyCss
    @include('notify::components.notify')

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Navbar -->
@include('frontend.fixed.header')

@yield('content')
    <!-- page footer  -->
 
@include('frontend.fixed.footer')

    <!-- end of page footer -->

	<!-- core  -->
    <script src="{{url('/frontend/assets/vendors/jquery/jquery-3.4.1.js')}}"></script>
    <script src="{{url('/frontend/assets/vendors/bootstrap/bootstrap.bundle.js')}}"></script>

    <!-- bootstrap affix -->
    <script src="{{url('/frontend/assets/vendors/bootstrap/bootstrap.affix.js')}}"></script>

    <!-- wow.js -->
    <script src="{{url('/frontend/assets/vendors/wow/wow.js')}}"></script>
    

    <!-- google maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- FoodHut js -->
    <script src="{{url('/frontend/assets/js/foodhut.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@notifyJs
</body>
</html>
