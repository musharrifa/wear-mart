<?php

function component(){
    $element="
    <div class="icons">
        <form action="mainpage.php" method="post">
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-search"></a>
        <a href="#" class="fas fa-eye"></a>
    </div>
    <div class="image">
        <img src="image/product_img1.jpg" alt="img1">
    </div>
    <div class="content">
        <h3>product name</h3>
        <div class="price">
            <div class="amount">Rs.2000.00</div>
            <div class="cut">Rs.2500.00</div>
            <div class="offer">20% off</div>
        </div>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <span>(50)</span>
        </div>
    </div>
</div>
</form>
    ";
    echo $element
}