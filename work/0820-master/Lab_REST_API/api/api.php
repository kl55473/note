<?php
// 一個簡單但可以運作的 REST API，

$method = $_SERVER['REQUEST_METHOD'];
//var_dump($method);
$url = explode("/", rtrim($_GET["url"], "/") );

$dbLink = @mysqli_connect("localhost", "root", "root", "apiDB", 8889) or die(mysqli_connect_error());
mysqli_query($dbLink, "set names utf8");
//mysqli_select_db($dbLink, "apiDB");

switch ($method . " " . $url[0]) {
    case "POST products":
        insertProduct();
        break;
    case "GET products":
        if (isset($url[1]))
            getProductById($url[1]);
        else
            getProducts();
        break;
    case "PUT products":
        updateProduct($url[1]);
        break;
    case "DELETE products":
        deleteProduct($url[1]);
        break;
    default:
        echo "Thank you";
}
mysqli_close($dbLink);


function getProductById($id) {
    if (!is_numeric($id))
    	die( "id is not a number." );

    global $dbLink;//看不到外面的全域變數
    $result = mysqli_query($dbLink, 
      "select * from products where productId = " . $id );
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);//把陣列用JSON呈現
}

function getProducts() {
    global $dbLink;
    $result = mysqli_query($dbLink, 
      "select * from products");
    $datalist;
    $cou=0;
    while ($row = mysqli_fetch_assoc($result)) {
        $datalist[$cou++]=$row;
    }
    echo json_encode($datalist);
}

function insertProduct() {
    global $dbLink;
    
    $productName = $_POST["productName"];
    $price       = $_POST["price"];
    $quantity    = $_POST["quantity"];
    $commandText = 
        "insert into products "
      . "set productName = '{$productName}' "
      . "  , price       = '{$price}'"
      . "  , quantity    = '{$quantity}'";
    $result = mysqli_query($dbLink, $commandText); 
    
    echo $result;
}


function updateProduct($id) {
    if (! isset ( $id ))
    	die ( "Parameter id not found." );
    if (! is_numeric ( $id ))
        die ( "id not a number." );

    global $dbLink;
    
    parse_str(file_get_contents('php://input'), $putData);//把  文字(file_get_contents('php://input'))  解讀表單parse_str()  到 陣列$putData
    //php://input的意思通過php輸入流input，而不是$_POST數組
    //echo json_encode($putData);
    //return;
    $productName = $putData["productName"];
    $price       = $putData["price"];
    $quantity    = $putData["quantity"];
    $commandText = 
        "update products "
      . "set productName = '{$productName}' "
      . "  , price       = '{$price}'"
      . "  , quantity    = '{$quantity}'"
      . "  where productId = {$id}";
    mysqli_query($dbLink, $commandText); 
    
    echo "Updated: " . $id;
}


function deleteProduct($id) {
    if (! isset ( $id ))
    	die ( "Parameter id not found." );
    if (! is_numeric ( $id ))
        die ( "id not a number." );

    global $dbLink;
    
    $commandText = 
        "delete from products "
      . "  where productId = {$id}";
    mysqli_query($dbLink, $commandText); 
    
    echo "Deleted: " . $id;
}

?>
