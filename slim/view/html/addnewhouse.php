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
        <button type="button" class="btn btn-primary" onclick="window.location.href='account_orders'">Orders</button>
        <button type="button" class="btn btn-primary active" onclick="window.location.href='addnewhouse'">Add new house offer</button>
        <button type="button" class="btn btn-primary" onclick="window.location.href='account_information'">Account Information</button>
        <br><br>
        <form>
            <div class="form-group">
                <label for="product_name">Product name</label>
                <input type="text" name="product_name" class="form-control" id="product_name" aria-describedby="emailHelp" placeholder="Enter product name">
            </div>
            <div class="form-group">
                <label for="quant">Quantity</label>
                <input type="text" name="quant" class="form-control" id="quant" placeholder="Enter quantity">
            </div>
            <div class="form-group">
                <label for="descr">Description</label>
                <textarea name="descr" class="form-control" id="descr" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" class="form-control" id="category">
                    <option>bighouses</option>
                    <option>smallhouses</option>
                    <option>tworooms</option>
                    <option>threerooms</option>
                    <option>studios</option>
                </select>
            </div>
            <div class="form-group">
                <label for="price">Quantity</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">
            </div>
            <div class="form-group">
                <label for="img">Add image</label>
                <input type="file" name="img" class="form-control-file" id="img" aria-describedby="img">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>