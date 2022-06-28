 <?php 
    require_once __DIR__ . '/classes/product.php';
    require_once __DIR__ . '/classes/food.php';
    require_once __DIR__ . '/classes/toy.php';
    
    $food = [
        new Food('Monge Adult', 23 , 12, 'Cane','Crochette','10/12/23'),
        new Food('Royal Canin Maxi', 12, 5 , 'Cane', 'Crochette', '23/02/24')
    ];

    $toy = [
        new Toy('Osso per cani', 5, 3, 'Cane', 'Gioco e igene dentale', 'Taglia S'),
        new Toy('Tiragraffi', 21, 5, 'Gatto', 'Gioco e cura delle unghie', 'Taglia L')
    ];

    $product = [$food, $toy];
    