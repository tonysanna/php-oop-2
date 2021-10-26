<?php

    require_once 'user.php';
    require_once 'premiumUser.php';

    class PremiumUser extends User {
        public $plan;
        public $sale;

        function __construct($_name, $_lastname, $_email, $_eta, $_plan, $_sale)
        {
            $this->name = $_name;
            $this->lastname = $_lastname;
            $this->email = $_email;
            $this->eta = $_eta;
            $this->plan = $_plan;
            $this->sale = $_sale;
        }
    }

?>