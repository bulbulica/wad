<body>

<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="packages">Packages</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="account">Account</a></li>
                <li><a href="logout">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
        <h1>Real Estate shop</h1>
    </div>
    <div class="col-md-3">
    </div>
    <div class="col-md-2">
        <a class="btn btn-primary" href="cart" role="button">Cart - 0 products</a>
    </div>
    <div class="col-md-1">
    </div>
</div>
<div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="col-md-3">
        <ul class="list-group">
            <a href="#" class="list-group-item">Big houses</a>
            <a href="#" class="list-group-item">Small houses</a>
            <a href="#" class="list-group-item">Apartments with 3 rooms</a>
            <a href="#" class="list-group-item">Apartments with 2 rooms</a>
            <a href="#" class="list-group-item">Studios</a>
        </ul>
    </div>
    <div class="col-md-9">
        <div id="acc"></div>
        <button type="button" class="btn btn-primary" onclick="window.location.href='account_orders'">Orders</button>
        <button type="button" class="btn btn-primary" onclick="window.location.href='account_offers'">Offers</button>
        <button type="button" class="btn btn-primary" onclick="window.location.href='account_information'">Account Information</button>
    </div>
</div>
<script>
    $.getJSON( "http://localhost/web/public/users/<?php echo $_SESSION['user'];?>", function(json){
        var user = $("<h2>Welcome " + json.username + "</h2>");
        $('#acc').append(user);
    });
</script>