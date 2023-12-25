<?php

include("includes/navbare.php");

$select="SELECT * FROM products order by price DESC limit 3";
$result=$conn->query($select);
?>


    
    <section>
        
    <div class="header">
        <img class="" src="imges/Bicycle.jpg" alt="">
        <span>WILFA</span>
    </div>


    <a href="bicycle.php">
    <div class="bicycle">
        <a id="bicycle" href="bicycle.php"><span>Bicycles</span></a>
    </div>
    </a>

    <?php
    $select="SELECT * FROM products order by price DESC limit 8";
    $result=$conn->query($select);

    while($row=$result->fetch_assoc()){
        ?>
    
    <div class="selles">
        <img src="bis2/img/<?= $row['img']?>">
        <span class="a">
        <?=
        $category_id= $row["category"];
        $select_category="SELECT * FROM cat where id='$category_id'";
        $result_category=$conn->query($select_category);
        $row_category=$result_category->fetch_assoc();
        echo $row_category["name"];
        ?>
        </span>

        <span class="b"><?= $row['name']?></span>
        <span class="c">$<?= $row['price']?></span>
        <button class="b1">Purchase</button>
    </div>
    <?php
    }
    ?>


    <!-- <div class="selles">
        <img src="imges/mauntain9.jpg">
        <span class="a">Mountain bike</span>
        <span class="b">This 27.5" mountain bike is easy-to-handle, making it the perfect choice for getting started with MTB touring</span>
        <span class="c">$2400</span>
        <button class="b1">Purchase</button>
    </div> -->

    <div class="error"></div>

    <div class="eccessories">
        <a id="eccessories" href=""><span>Eccessories & Clothes</span></a>
    </div>
    <br> 


    <div class="selles2">
        <img src="imges/h3.jpg">
        <span class="a">Cycling Helmets</span>
        <span class="b">Best bicycle helmet.</span>
        <span class="c">$84.99</span>
        <button class="b1">Purchase</button>
    </div>
    <div class="selles2">
        <img src="imges/ecc2.jpg">
        <span class="a">Cycling Gloves</span>
        <span class="b">Comfortable and thin gloves.</span>
        <span class="c">$24</span>
        <button class="b1">Purchase</button>
    </div>
    <div class="selles2">
        <img src="imges/c4.jpg">
        <span class="a">Cycling Clothes</span>
        <span class="b">Complete outfit for cycling.</span>
        <span class="c">$64.99</span>
        <button class="b1">Purchase</button>
    </div>
    <div class="selles2">
        <img src="imges/h4.jpg">
        <span class="a">Cycling Helmets</span>
        <span class="b">Regular helmet design.</span>
        <span class="c">$29.99</span>
        <button class="b1">Purchase</button>
    </div>
    <div class="selles2">
        <img src="imges/c6.jpg">
        <span class="a">Cycling Clothes</span>
        <span class="b">A short sleeve cycling  jersy.</span>
        <span class="c">$23</span>
        <button class="b1">Purchase</button>
    </div>
    <div class="selles2">
        <img src="imges/c5.jpg">
        <span class="a">Cycling Clothes</span>
        <span class="b">A nice outfit for cycling.</span>
        <span class="c">$49.55</span>
        <button class="b1">Purchase</button>
    </div>
    <div class="selles2">
        <img src="imges/ecc1.jpg">
        <span class="a">A backpack</span>
        <span class="b"> It is light, practical and comfortable backpack</span>
        <span class="c">$34.99</span>
        <button class="b1">Purchase</button>
    </div>
    <div class="selles2">
        <img src="imges/h7.jpg">
        <span class="a">Cycling Helmets</span>
        <span class="b">Great helmet design</span>
        <span class="c">$64.99</span>
        <button class="b1">Purchase</button>
    </div> 
    
    </section>

    <div class="error2"></div>
    <hr>

    <div id="about" class="about"><b>About</b></div>
    <div class="about_p">
        <b>WILFA</b> website is a specialized website for selling bicycles of various types,
        and this distinguishes us from other websites because we specialize only in regular and mountain bikes,
        and we also sell bicycle accessories and also clothing used in cycling.
        It also provides all these products at reasonable prices with excellent manufacturing from
        the largest international companies
    </div>


    <footer id="down">
        Mahmoud Ahmed
    </footer>

    <!-- JS file -->
    <link rel="stylesheet" href="project22.js">

</body>
</html>