<nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#gallary">Gallary</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#gallary">Reviews</a>
            </li>

        </ul>

        @if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif

        <a class="navbar-brand m-auto" href="#">
            <img src="assets/imgs/logo.svg" class="brand-img" alt="">
            <span class="brand-txt">Food Hut</span>
        </a>

        @auth
        <ul class="navbar-nav">
             <li class="nav-item dropdown-trigger">
             <a class="nav-link" href="{{route('user.profile')}}">{{auth()->user()->name}}'s Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('user.logout')}}">Logout</a>
            </li>

        </ul>
        @else
        <ul class="navbar-nav">
       
            
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}" >Login</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="#testmonial" data-toggle="modal" data-target="#register">Registration</a>
            </li>
            <li class="nav-item">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#shopModal">
               Shop Registration
                </button>
            </li>

        </ul>
        @endauth






        <!-- Button trigger modal -->

    </div>
</nav>


{{-- Modal login --}}
<div class="modal" id="login" tabindex="9999" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login please</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{route('user.login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter your email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter your Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Login </button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal registration -->
<div class="modal" id="register" tabindex="9999" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter your name</label>
                        <input name="name" type="text" class="form-control" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter phone number</label>
                        <input name="number" type="text" class="form-control" placeholder="Enter number">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- shop registration modal  -->
<!-- Modal -->
<div class="modal fade" id="shopModal" tabindex="-1" role="dialog" aria-labelledby="shopModalModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login please</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="{{route('shop.registration')}}" method="post">
                @csrf


            
  <div class="form-group">
    <label for="exampleInputEmail1">Enter your name</label>
    <input name="name" type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter your email</label>
    <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name ="password"type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter phone number</label>
    <input name ="number"type="number" class="form-control" id="exampleInputPassword1" placeholder="number">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


        
      </div>

    </div>
  </div>
</div>