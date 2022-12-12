<?php

require_once __DIR__ .'/models/Product.php';

    $purinaPro = new Product(1, "Purina Pro Plan Veterinary Diets", 'Purina', 'Alimentazione', '20,75€', true, 'https://www.purinashop.it/media/catalog/product/cache/74c1057f7991b4edb2bc7bdaa94de933/p/u/purina_pro_plan_sterilised_gatto_crocchette_ricco_in_salmone_1_5kg_1_12370357_1.png');


    var_dump($purinaPro);
?>