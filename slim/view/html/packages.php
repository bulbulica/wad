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
                <li class="active"><a href="packages">Packages</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="account">Account</a></li>
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
        <a class="btn btn-primary" href="cart" role="button">Cart - <?php echo $_SESSION['allProductsInCart'];?> products</a>
    </div>
    <div class="col-md-1">
    </div>
</div>
<div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="col-md-3">
        <ul class="list-group">
            <a href="bighouses" class="list-group-item">Big houses</a>
            <a href="smallhouses" class="list-group-item">Small houses</a>
            <a href="threerooms" class="list-group-item">Apartments with 3 rooms</a>
            <a href="tworooms" class="list-group-item">Apartments with 2 rooms</a>
            <a href="studios" class="list-group-item">Studios</a>
        </ul>
    </div>
    <div class="col-md-9">
        <p>With a logged in account you can buy the following packages :</p>
        <form method="post">
            <input type="hidden" name="package" value="2"/>
            <input type="hidden" name="id" value="<?php echo $_SESSION["user"]; ?>"/>
            <button type="submit" class="btn btn-primary" formaction="addpackages">5 offers for 5$</button>
        </form>
        <br>
        <form method="post">
            <input type="hidden" name="package" value="3"/>
            <input type="hidden" name="id" value="<?php echo $_SESSION["user"]; ?>"/>
            <button type="submit" class="btn btn-primary" formaction="addpackages">20 offers for 25$</button>
        </form>
        <br>
        <form method="post">
            <input type="hidden" name="package" value="4"/>
            <input type="hidden" name="id" value="<?php echo $_SESSION["user"]; ?>"/>
            <button type="submit" class="btn btn-primary" formaction="addpackages">50 offers for 40$</button>
        </form>
    </div>
</div>