
<table class="table table-bordered">
<thead>
<tr>
    <th scope="col">id </th>
    <th scope="col">name</th>
    <th scope="col">count</th>
    <th scope="col">img</th>
    <th scope="col">price</th>
    <th scope="col">category</th>
    <th scope="col">description</th>
    <th scope="col">controls</th>
</tr>
    </thead>
    <tbody>
    <?php 
    $select="SELECT * FROM products";
    $result=$conn->query($select);
    while($row=$result->fetch_assoc())
    {
    ?>
        <tr>
        <td><?php echo $row["id"] ?></td>
        <td><?php echo $row["name"] ?></td>
        <td><?php echo $row["count"] ?></td>
        <td><img src="img/<?php echo $row["img"] ?>" style="width:50px ; height:50px"></td>
        <td><?php echo $row["price"] ?></td>

        <td>
        <?php 
        $category_id= $row["category"];
        $select_category="SELECT * FROM cat where id='$category_id'";
        $result_category=$conn->query($select_category);
        $row_category=$result_category->fetch_assoc();
        echo $row_category["name"];
        ?>      
        </td>

        <td><?php echo $row["dsc"] ?></td>
        <td>
        <a href="function/do_delete_z.php?num=<?=$row['id']?>"><button class="btn btn-danger">delete</button></a>
        <a href="?num=update&id=<?=$row['id']?>"><button class="btn btn-primary">update</button></a>
        </td>
        </tr>
        <?php
        }
        ?>      
    </tbody>
</table>
<a href="?num=add"><button style="height:45px" class="btn btn-success form-control">add product</button></a>

<div class="a" style="height:50px"></div>
