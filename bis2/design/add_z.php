<form action="function/do_add_z.php" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="name">Product Name :</label>
    <input type="text" class="form-control" name="name">
</div>
<div class="form-group">
    <label for="count">Count :</label>
    <input type="text" class="form-control" name="count">
</div>
<div class="form-group">
    <label for="img">Image :</label>
    <input type="file" class="form-control-file" name="img">
</div>
<div class="form-group">
    <label for="price">Price :</label>
    <input type="text" class="form-control" name="price">
</div>

<div class="form-group">
    <label for="category">Category :</label>
    <select name="category" class="form-control">
        <?php
        $select_cat="SELECT * FROM cat";
        $result_cat=$conn->query($select_cat);
        while($row_cat=$result_cat->fetch_assoc()){
            ?>
            <option value="<?php echo $row_cat["id"] ?>"><?php echo $row_cat["name"] ?></option>
            <?php
        }
        ?>
    </select>
</div>

<div class="form-group">
    <label for="dsc">Description :</label>
    <input type="text" class="form-control" name="dsc">
</div>
<button type="submit" class="btn btn-success form-control">Add Product</button>
</form>