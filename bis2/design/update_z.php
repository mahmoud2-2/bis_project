<?php

$id=$_GET["id"];
    $select="SELECT * FROM products where id='$id'";
    $result=$conn->query($select);
    $row=$result->fetch_assoc();

?>

<form action="function/do_update_z.php?id=<?=$id?>" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="name">Product Name :</label>
    <input type="text" class="form-control" name="name" value="<?= $row["name"] ?>">
</div>
<div class="form-group">
    <label for="count">Count :</label>
    <input type="text" class="form-control" name="count" value="<?= $row["count"] ?>">
</div>
<div class="form-group">
    <label for="img">Image :</label>
    <input type="file" class="form-control-file" name="img" value="<?= $row["img"] ?>">
</div>
<div class="form-group">
    <label for="price">Price :</label>
    <input type="text" class="form-control" name="price" value="<?= $row["price"] ?>">
</div>

<div class="form-group">
    <label for="category">Category :</label>
    <select class="form-control" name="category" id="">
        <?php
        $select_cat="SELECT * FROM cat";
        $result_cat=$conn->query($select_cat);
        while($row_cat=$result_cat->fetch_assoc()){
            ?>
            <option value="<?php echo $row_cat["id"] ?>"
            <?php
            if($row_cat["id"]==$row["category"]){
                echo "selected";
            }
            ?>
            ><?php echo $row_cat["name"] ?></option>
            <?php
        }
        ?>
    </select>
</div>

<div class="form-group">
    <label for="dsc">Description :</label>
    <input type="text" class="form-control" name="dsc" value="<?= $row["dsc"] ?>">
</div>
<button type="submit"  style="height: 45px;px" class="btn btn-primary form-control" >Update Product</button>
</form>
<div style="height:100px"></div>