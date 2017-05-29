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
                <li><a href="contact">Contact</a></li>
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
            <a href="studios" class="active list-group-item">Studios</a>
        </ul>
    </div>
    <div id="divcol1" class="col-md-3">

    </div>
    <div id="divcol2" class="col-md-3">

    </div>
    <div id="divcol3" class="col-md-3">

    </div>
</div></div></body>
<script>
    $.getJSON( "http://localhost/web/public/products/studios", function(json){
            for (var i = 0, len = json.length; i < len; i+=3) {
                var text = $("<p>" + json[i].product_name + "</p><img src=\"../view/images/" + json[i].img + "\" class=\"img-responsive\"><p>" + json[i].descr + "</p><p>Published by : " + json[i].person + "</p><p>Price : " + json[i].price + "</p><p>Max quantity : " + json[i].quant + "<form method=\"post\" action=\"cart/add\"><input type=\"hidden\" name=\"product\" value=\"" + json[i].id + "\"><input type=\"text\" name=\"quantity\" value=\"1\" size=\"2\" /><input type=\"submit\" value=\"Add to cart\" class=\"btnAddAction\" /></form><br><hr>");
                $('#divcol1').append(text);
            }
            for (var i = 1, len = json.length; i < len; i+=3) {
                var text2 = $("<p>" + json[i].product_name + "</p><img src=\"../view/images/" + json[i].img + "\" class=\"img-responsive\"><p>" + json[i].descr + "</p><p>Published by : " + json[i].person + "</p><p>Price : " + json[i].price + "</p><p>Max quantity : " + json[i].quant + "<form method=\"post\" action=\"cart/add\"><input type=\"hidden\" name=\"product\" value=\"" + json[i].id + "\"><input type=\"text\" name=\"quantity\" value=\"1\" size=\"2\" /><input type=\"submit\" value=\"Add to cart\" class=\"btnAddAction\" /></form><br><hr>");
                $('#divcol2').append(text2);
            }
            for (var i = 2, len = json.length; i < len; i+=3) {
                var text3 = $("<p>" + json[i].product_name + "</p><img src=\"../view/images/" + json[i].img + "\" class=\"img-responsive\"><p>" + json[i].descr + "</p><p>Published by : " + json[i].person + "</p><p>Price : " + json[i].price + "</p><p>Max quantity : " + json[i].quant + "<form method=\"post\" action=\"cart/add\"><input type=\"hidden\" name=\"product\" value=\"" + json[i].id + "\"><input type=\"text\" name=\"quantity\" value=\"1\" size=\"2\" /><input type=\"submit\" value=\"Add to cart\" class=\"btnAddAction\" /></form><br><hr>");
                $('#divcol3').append(text3);
            }
        }
    );
</script>