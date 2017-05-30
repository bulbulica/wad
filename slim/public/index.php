<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\PhpRenderer;

require '../vendor/autoload.php';
require 'connection/dbconnection.php';

$app = new \Slim\App;
$container = $app->getContainer();
$container['renderer'] = new PhpRenderer("../view");

session_start();

$app->get('/', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/index.php");
        $this->renderer->render($response, "/html/footer.php");
    }
    else
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/index2.php");
        $this->renderer->render($response, "/html/footer.php");
    }
});

$app->get('/index', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/index.php");
        $this->renderer->render($response, "/html/footer.php");
    }
    else
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/index2.php");
        $this->renderer->render($response, "/html/footer.php");
    }
});

$app->get('/about', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/about.php");
        $this->renderer->render($response, "/html/footer.php");
    }
    else
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/about2.php");
        $this->renderer->render($response, "/html/footer.php");
    }
});

$app->get('/cart', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/cart.php");
        $this->renderer->render($response, "/html/footer.php");
    }
    else
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/cart2.php");
        $this->renderer->render($response, "/html/footer.php");
    }
});

$app->get('/contact', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/contact.php");
        $this->renderer->render($response, "/html/footer.php");
    }
    else
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/contact2.php");
        $this->renderer->render($response, "/html/footer.php");
    }
});

$app->get('/packages', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/index.php");
        $this->renderer->render($response, "/html/footer.php");
    }
    else
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/packages.php");
        $this->renderer->render($response, "/html/footer.php");
    }
});

$app->get('/bighouses', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/bighouses.php");
        $this->renderer->render($response, "/html/footer.php");
    }
    else
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/bighouses2.php");
        $this->renderer->render($response, "/html/footer.php");
    }
});

$app->get('/smallhouses', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/smallhouses.php");
        $this->renderer->render($response, "/html/footer.php");
    }
    else
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/smallhouses2.php");
        $this->renderer->render($response, "/html/footer.php");
    }
});

$app->get('/threerooms', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/threerooms.php");
        $this->renderer->render($response, "/html/footer.php");
    }
    else
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/threerooms2.php");
        $this->renderer->render($response, "/html/footer.php");
    }
});

$app->get('/tworooms', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/tworooms.php");
        $this->renderer->render($response, "/html/footer.php");
    }
    else
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/tworooms2.php");
        $this->renderer->render($response, "/html/footer.php");
    }
});

$app->get('/studios', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/studios.php");
        $this->renderer->render($response, "/html/footer.php");
    }
    else
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/studios2.php");
        $this->renderer->render($response, "/html/footer.php");
    }
});

$app->get('/login', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    $this->renderer->render($response, "/html/header.php");
    $this->renderer->render($response, "/html/login.php");
    $this->renderer->render($response, "/html/footer.php");
});

$app->get('/logout', function (Request $request, Response $response)
{
    $this->renderer->render($response, "/html/header.php");
    $this->renderer->render($response, "/html/logout.php");
    $this->renderer->render($response, "/html/footer.php");
    session_unset();
});

$app->get('/account', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    $this->renderer->render($response, "/html/header.php");
    $this->renderer->render($response, "/html/account.php");
    $this->renderer->render($response, "/html/footer.php");
});

$app->get('/checkout', function (Request $request, Response $response) use ($mysqli)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    foreach ($_SESSION["cart"] as $result)
    {
        list($product_id, $quantity) = explode("+",$result);
        $username = "outside";
        if (isset($_SESSION["user"]))
        {
            $username = $_SESSION["user"];
        }
        $price = 0;
        $status = "paid";
        $query2 = "select * from products where id='$product_id'";
        $result = $mysqli -> query($query2);
        while($row = $result -> fetch_assoc())
        {
            $price = $row['price'];
        }
        $price *= $quantity;

        $query = "insert into orders (person, price, status) values ('$username', '$price', '$status')";

        $mysqli->query($query);
    }
    $_SESSION['allProductsInCart'] = 0;
    $_SESSION["cart"] = null;
    if(!isset($_SESSION['user']))
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/checkout.php");
        $this->renderer->render($response, "/html/footer.php");
    }
    else
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/checkout2.php");
        $this->renderer->render($response, "/html/footer.php");
    }
});

$app->get('/account_information', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    $this->renderer->render($response, "/html/header.php");
    $this->renderer->render($response, "/html/account_information.php");
    $this->renderer->render($response, "/html/footer.php");
});

$app->get('/account_orders', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    $this->renderer->render($response, "/html/header.php");
    $this->renderer->render($response, "/html/account_orders.php");
    $this->renderer->render($response, "/html/footer.php");
});

$app->get('/admin', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    if(!isset($_SESSION['admin']))
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/admin_login.php");
        $this->renderer->render($response, "/html/footer.php");
    }
    else
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/admin.php");
        $this->renderer->render($response, "/html/footer.php");
    }
});

$app->get('/alluserinformation', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    if(isset($_SESSION['admin']))
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/alluserinformation.php");
        $this->renderer->render($response, "/html/footer.php");
    }
});

$app->get('/addnewhouse', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    if(isset($_SESSION['user']))
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/addnewhouse.php");
        $this->renderer->render($response, "/html/footer.php");
    }
});

$app->get('/allorders', function (Request $request, Response $response)
{
    if (!isset($_SESSION['allProductsInCart']))
    {
        $_SESSION['allProductsInCart'] = 0;
    }
    if(isset($_SESSION['admin']))
    {
        $this->renderer->render($response, "/html/header.php");
        $this->renderer->render($response, "/html/allorders.php");
        $this->renderer->render($response, "/html/footer.php");
    }
});

$app->get('/admin_logout', function (Request $request, Response $response)
{
    $this->renderer->render($response, "/html/header.php");
    $this->renderer->render($response, "/html/logout.php");
    $this->renderer->render($response, "/html/footer.php");
    session_unset();
});

$app->post('/admin_login', function (Request $request, Response $response) use ($mysqli)
{
    $submit = $request->getParsedBody()['submit'];
    $user = $request->getParsedBody()['username'];
    $pass = $request->getParsedBody()['password'];
    if(isset($submit))
    {
        $user = mysqli_real_escape_string($mysqli,$user);
        $pass = mysqli_real_escape_string($mysqli,$pass);

        $sel_user = "select * from admin where username='$user' AND password='$pass'";
        $run_user = mysqli_query($mysqli, $sel_user);
        $check_user = mysqli_num_rows($run_user);

        if($check_user>0)
        {
            $_SESSION["admin"] = "$user";
            header("Location: admin");
            die();
        }
        else
        {
            $this->renderer->render($response, "/html/header.php");
            $this->renderer->render($response, "/html/loginerror.php");
            $this->renderer->render($response, "/html/footer.php");
        }
    }
});

$app->get('/users', function (Request $request, Response $response) use ($mysqli)
{
    $query = "select * from users order by id";
    $result = $mysqli -> query($query);
    $data = array();

    while($row = $result -> fetch_assoc())
    {
        $data[] = $row;
    }
    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->get('/users/{username}', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getAttribute('username');

    $query = "select * from users where username = '$username'";
    $result = $mysqli->query($query);

    $data = $result -> fetch_assoc();

    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->post('/users', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getParsedBody()['username'];
    $password = $request->getParsedBody()['password'];
    $name = $request->getParsedBody()['name'];
    $surname = $request->getParsedBody()['surname'];
    $adress = $request->getParsedBody()['adress'];
    $account_type = $request->getParsedBody()['account_type'];

    $query = "insert into users (username, password, name, surname, adress, account_type) values ('$username', '$password', '$name', '$surname', '$adress', '$account_type')";

    $mysqli->query($query);
});

$app->put('/users/all', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getParsedBody()['username'];
    $password = $request->getParsedBody()['password'];
    $email = $request->getParsedBody()['email'];
    $name = $request->getParsedBody()['name'];
    $surname = $request->getParsedBody()['surname'];
    $adress = $request->getParsedBody()['adress'];

    $query = "update users set password = '$password', email='$email', name='$name', surname='$surname', adress='$adress' WHERE username = '$username'";

    $mysqli->query($query);
});

$app->put('/users/password', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getParsedBody()['username'];
    $password = $request->getParsedBody()['password'];

    $query = "update users set password = '$password' WHERE username like '$username'";

    $mysqli->query($query);
});

$app->put('/users/email', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getParsedBody()['username'];
    $email = $request->getParsedBody()['email'];

    $query = "update users set email = '$email' WHERE username = '$username'";

    $mysqli->query($query);
});

$app->put('/users/name', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getParsedBody()['username'];
    $name = $request->getParsedBody()['name'];

    $query = "update users set name = '$name' WHERE username = '$username'";

    $mysqli->query($query);
});

$app->put('/users/surname', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getParsedBody()['username'];
    $surname = $request->getParsedBody()['surname'];

    $query = "update users set surname = '$surname' WHERE username = '$username'";

    $mysqli->query($query);
});

$app->put('/users/adress', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getParsedBody()['username'];
    $adress = $request->getParsedBody()['adress'];

    $query = "update users set adress = '$adress' WHERE username = '$username'";

    $mysqli->query($query);
});

$app->put('/users/account_type', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getParsedBody()['username'];
    $account_type = $request->getParsedBody()['account_type'];

    $query = "update users set account_type = '$account_type' WHERE username = '$username'";

    $mysqli->query($query);
});

$app->delete('/users/{username}', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getAttribute('username');

    $query = "delete from users where username = '$username'";

    $mysqli->query($query);
});

$app->post('/login', function (Request $request, Response $response) use ($mysqli)
{
    $submit = $request->getParsedBody()['submit'];
    $user = $request->getParsedBody()['username'];
    $pass = $request->getParsedBody()['password'];
    if(isset($submit))
    {
        $user = mysqli_real_escape_string($mysqli,$user);
        $pass = mysqli_real_escape_string($mysqli,$pass);

        $sel_user = "select * from users where username='$user' AND password='$pass'";
        $run_user = mysqli_query($mysqli, $sel_user);
        $check_user = mysqli_num_rows($run_user);

        if($check_user>0)
        {
            $_SESSION["user"] = "$user";
            return $response->withStatus(302)->withHeader('Location', 'account');
        }
        else
        {
            $this->renderer->render($response, "/html/header.php");
            $this->renderer->render($response, "/html/loginerror.php");
            $this->renderer->render($response, "/html/footer.php");
        }
    }
});

$app->get('/products/bighouses', function (Request $request, Response $response) use ($mysqli)
{
    $query = "select * from products where category='bighouses'";
    $result = $mysqli -> query($query);
    $data = array();

    while($row = $result -> fetch_assoc())
    {
        $data[] = $row;
    }
    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->get('/products/smallhouses', function (Request $request, Response $response) use ($mysqli)
{
    $query = "select * from products where category='smallhouses'";
    $result = $mysqli -> query($query);
    $data = array();

    while($row = $result -> fetch_assoc())
    {
        $data[] = $row;
    }
    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->get('/products/tworooms', function (Request $request, Response $response) use ($mysqli)
{
    $query = "select * from products where category='tworooms'";
    $result = $mysqli -> query($query);
    $data = array();

    while($row = $result -> fetch_assoc())
    {
        $data[] = $row;
    }
    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->get('/products/threerooms', function (Request $request, Response $response) use ($mysqli)
{
    $query = "select * from products where category='threerooms'";
    $result = $mysqli -> query($query);
    $data = array();

    while($row = $result -> fetch_assoc())
    {
        $data[] = $row;
    }
    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->get('/products/studios', function (Request $request, Response $response) use ($mysqli)
{
    $query = "select * from products where category='studios'";
    $result = $mysqli -> query($query);
    $data = array();

    while($row = $result -> fetch_assoc())
    {
        $data[] = $row;
    }
    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->get('/cart/allproducts', function (Request $request, Response $response) use ($mysqli)
{
    $new_data = array();
    header('Content-Type: application/json');
    echo "[{}";

    foreach ($_SESSION["cart"] as $result)
    {
        list($product_id, $quantity) = explode("+",$result);
        $query = "select * from products where id='$product_id'";
        $result = $mysqli -> query($query);
        $data = array();

        while($row = $result -> fetch_assoc())
        {
            echo ",";
            $data[] = $row;
            $new_data['product_name'] = $row['product_name'];
            $new_data['quant'] = $quantity;
            $new_data['price'] = $row['price'];
            echo json_encode($new_data);
        }
    }
    echo "]";
});

$app->get('/getallorders', function (Request $request, Response $response) use ($mysqli)
{
    $query = "select * from orders";
    $result = $mysqli -> query($query);
    $data = array();

    while($row = $result -> fetch_assoc())
    {
        $data[] = $row;
    }
    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->get('/getscpecificorder/{username}', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getAttribute('username');

    $query = "select * from orders where person = '$username'";
    $result = $mysqli->query($query);

    $data = array();

    while($row = $result -> fetch_assoc())
    {
        $data[] = $row;
    }
    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->post('/cart/add', function (Request $request, Response $response) use ($mysqli)
{
    if (!isset($_SESSION["cart"]))
    {
        $_SESSION['cart'] = array();
        $_SESSION['allProductsInCart'] = 0;
    }
    $product = $request->getParsedBody()['product'];
    $quantity = $request->getParsedBody()['quantity'];
    $combined = $product . "+" . $quantity;
    array_push($_SESSION["cart"], $combined);
    $_SESSION['allProductsInCart']++;
    if (!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header2.php");
        $this->renderer->render($response, "/html/addcart.php");
        $this->renderer->render($response, "/html/footer2.php");
    }
    else
    {
        $this->renderer->render($response, "/html/header2.php");
        $this->renderer->render($response, "/html/addcart2.php");
        $this->renderer->render($response, "/html/footer2.php");
    }
});

$app->post('/addpackages', function (Request $request, Response $response) use ($mysqli)
{
    $package = $request->getParsedBody()['package'];
    $id = $request->getParsedBody()['id'];

    $query = "UPDATE users SET account_type = '$package' where username = '$id'";
    $mysqli -> query($query);

    $this->renderer->render($response, "/html/header.php");
    $this->renderer->render($response, "/html/addpackage.php");
    $this->renderer->render($response, "/html/footer.php");
});

$app->post('/addhouse', function (Request $request, Response $response) use ($mysqli)
{
    $product_name = $request->getParsedBody()['product_name'];
    $quant = $request->getParsedBody()['quant'];
    $descr = $request->getParsedBody()['descr'];
    $category = $request->getParsedBody()['category'];
    $price = $request->getParsedBody()['price'];
    $img = $request->getParsedBody()['img'];
    $user = $_SESSION['user'];
    $target_dir = "../view/images";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    getimagesize($_FILES["img"]["tmp_name"]);

    $query = "insert into products (product_name, descr, quant, img, category, price, person) values ('$product_name', '$descr', '$quant', 'none', '$category', '$price', '$user')";
    $mysqli -> query($query);

    $this->renderer->render($response, "/html/header.php");
    $this->renderer->render($response, "/html/addhouse.php");
    $this->renderer->render($response, "/html/footer.php");
});

$app->run();