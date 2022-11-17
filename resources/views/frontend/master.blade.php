
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>FoodHut | Free Bootstrap 4.3.x template</title>
   
    <!-- font icons -->
    <link rel="stylesheet" href="{{url('/frontend/assets/vendors/themify-icons/css/themify-icons.css')}}">

    <link rel="stylesheet" href="{{url('/frontend/assets/vendors/animate/animate.css')}}">

    <!-- Bootstrap + FoodHut main styles -->
	<link rel="stylesheet" href="{{url('/frontend/assets/css/foodhut.css')}}">
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

</body>
</html>
