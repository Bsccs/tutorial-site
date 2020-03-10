<?php
// include database and object files
include_once 'config/database.php';
include_once 'objects/product.php';
include_once 'objects/category.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// pass connection to objects
$product = new Product($db);
$category = new Category($db);

$page_title = "Create Product";
include_once "layout_header.php";
 
echo "<div class='right-button-margin'>";
    echo "<a href='index.php' class='btn btn-default pull-right'>Read Products</a>";
echo "</div>";
// display the products if there are any
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";
        echo "<tr>";
            echo "<th>Product</th>";
            echo "<th>Price</th>";
            echo "<th>Description</th>";
            echo "<th>Category</th>";
            echo "<th>Actions</th>";
        echo "</tr>";
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 
            extract($row);
 
            echo "<tr>";
                echo "<td>{$name}</td>";
                echo "<td>{$price}</td>";
                echo "<td>{$description}</td>";
                echo "<td>";
                    $category->id = $category_id;
                    $category->readName();
                    echo $category->name;
                echo "</td>";
 
                echo "<td>";
                    // read, edit and delete buttons
echo "<a href='read_one.php?id={$id}' class='btn btn-primary left-margin'>
    <span class='glyphicon glyphicon-list'></span> Read
</a>
 
<a href='update_product.php?id={$id}' class='btn btn-info left-margin'>
    <span class='glyphicon glyphicon-edit'></span> Edit
</a>
 
<a delete-id='{$id}' class='btn btn-danger delete-object'>
    <span class='glyphicon glyphicon-remove'></span> Delete
</a>";
                echo "</td>";
 
            echo "</tr>";
 
        }
 
    echo "</table>";
 // the page where this paging is used
$page_url = "index.php?";
 
// count all products in the database to calculate total pages
$total_rows = $product->countAll();
 
// paging buttons here
include_once 'paging.php';
    // paging buttons will be here
}
 
// tell the user there are no products
else{
    echo "<div class='alert alert-info'>No products found.</div>";
}
 
?>

<?php 
// if the form was submitted - PHP OOP CRUD Tutorial
if($_POST){
 
    // set product property values
    $product->name = $_POST['name'];
    $product->price = $_POST['price'];
    $product->description = $_POST['description'];
    $product->category_id = $_POST['category_id'];
    $image=!empty($_FILES["image"]["name"])
        ? sha1_file($_FILES['image']['tmp_name']) . "-" . basename($_FILES["image"]["name"]) : "";
$product->image = $image;
 
    // create the product
    if($product->create()){
        echo "<div class='alert alert-success'>Product was created.</div>";
        // try to upload the submitted file
// uploadPhoto() method will return an error message, if any.
echo $product->uploadPhoto();
    }
 
    // if unable to create the product, tell the user
    else{
        echo "<div class='alert alert-danger'>Unable to create product.</div>";
    }
}
?>
 
<!-- HTML form for creating a product -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
 
    <table class='table table-hover table-responsive table-bordered'>
 
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Price</td>
            <td><input type='text' name='price' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Description</td>
            <td><textarea name='description' class='form-control'></textarea></td>
        </tr>
 
        <tr>
            <td>Category</td>
            <td>
            <?php
// read the product categories from the database
$stmt = $category->read();
 
// put them in a select drop-down
echo "<select class='form-control' name='category_id'>";
    echo "<option>Select category...</option>";
 
    while ($row_category = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row_category);
        echo "<option value='{$id}'>{$name}</option>";
    }
 
echo "</select>";
?>
            </td>
        </tr>
        <tr>
    <td>Photo</td>
    <td><input type="file" name="image" /></td>
</tr>
 
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Create</button>
            </td>
        </tr>
 
    </table>
</form>
<?php
 
// footer
include_once "layout_footer.php";
?>