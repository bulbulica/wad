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
                <li class="active"><a href="contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login">Login</a></li>
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
        <div class="form-area">
            <form role="form">
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                </div>
                <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
            </form>
        </div>
    </div>
</div>