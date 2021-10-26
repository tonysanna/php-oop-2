<?php
    require_once 'user.php';
    require_once 'premiumUser.php';

    $User1 = new User ('antonio', 'sanna', 'tony.sanna@gmail.com', 24);
    var_dump($user1);

    $PremiumUser1 = new User('antonio', 'sanna', 'tony.sanna@gmail.com', 24, 'premium',50);
    var_dump($PremiumUser1);
?>