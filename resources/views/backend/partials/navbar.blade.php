<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if(auth()->user()->role == 'admin')

        <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}" aria-expanded="false" aria-controls="vendors">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('shop')}}" aria-expanded="false" aria-controls="vendors">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Shop</span>
            </a>

        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="{{route('category.list')}}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Category</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('orders.list')}}" aria-expanded="false" aria-controls="orders">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Order</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('customer')}}" aria-expanded="false" aria-controls="error">
                <i class="icon-ban menu-icon"></i>
                <span class="menu-title">Customer</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('product.list')}}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Product</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('delivery_man.list')}}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Delivery man</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('payment.list')}}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Payment</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('order_delivery_man.list')}}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Order_delivery man</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Tracking</span>
            </a>
        </li>
        @endif
        @if(auth()->user()->role == 'shop')
  

        
        <li class="nav-item">
            <a class="nav-link" href="{{route('orders.list')}}" aria-expanded="false" aria-controls="orders">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Order</span>

            </a>
        </li>
        @endif
    </ul>
</nav>