
<?php 
    // require_once('db.php');
    include 'db.php';
    
    function display()
    {
        $con = getConnection();
        $sql = "select * from products";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function set($name,$buyingPrice,$sellingPrice)
    {       
        $con = getConnection();
        $sql = "INSERT INTO products(name, buyingPrice, sellingPrice) VALUES ('{$name}','{$buyingPrice}','{$sellingPrice}')";
        echo $sql;
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function edit($name,$buyingPrice,$sellingPrice,$pname,$pbuyingPrice,$psellingPrice)
    {
        $con = getConnection();
        $sql = 'UPDATE products SET name={$name},buyingPrice={$buyingPrice},sellingPrice={$sellingPrice} WHERE name={$pname} and buyingPrice={$pbuyingPrice} and sellingPrice={$psellingPrice}';
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function delete($pname,$pbuyingPrice,$psellingPrice)
    {
        $con = getConnection();
        $sql = 'DELETE from products WHERE name={$pname} and buyingPrice={$pbuyingPrice} and sellingPrice={$psellingPrice}';
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function search($str)
    {
        $con = getConnection();
        $sql = "SELECT * FROM products WHERE name LIKE '$str%'";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    
?>