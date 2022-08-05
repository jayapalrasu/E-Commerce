@php
$totel = 0;
if (Session::has('user')) {
    $totel = App\Http\Controllers\ProductController::cartItem();
}
@endphp
<div>
    <nav class="navbar">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img style="height: 5rem"
                    src="https://images.yourstory.com/cs/wordpress/2016/12/Flipkart-Devaluation-1.png" alt="">
                <a class="navbar-brand" href="/" id="my-nav">E-Comm</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/" class="glyphicon glyphicon-home" id="my-nav">Home</a></li>
                    <li><a href="/myorders" class="glyphicon glyphicon-saved" id="my-nav">Orders</a></li>
                </ul>
                <form action="/search" class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" name="query" class="form-control search-box"
                            placeholder="Search for products, brands and more">
                    </div>
                    <button type="submit" class="btn btn-primary"><span
                            class="glyphicon glyphicon-search">Search</span></button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/cartlist" class="glyphicon glyphicon-shopping-cart"
                            id="my-nav">Cart({{ $totel }})</a></li>
                    @if (Session::has('user'))
                        <li class="dropdown">
                            <a class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown" href="#"
                                id="my-nav">{{ Session::get('user')->name }}
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/logout" class="glyphicon glyphicon-off">Logout</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="/login" id="my-nav">Login</a></li>
                        <li><a href="/register" id="my-nav">Register</a></li>
                    @endif




                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

</div>
