<?php

require_once __DIR__ .'/../models/Category.php';
require_once __DIR__ .'/../models/Product.php';
require_once __DIR__ .'/../models/Food.php';
require_once __DIR__ .'/../models/Accessory.php';
require_once __DIR__ .'/../models/Toy.php';


$dog = new Category(
    'Cani',
    'https://cdn.icon-icons.com/icons2/2070/PNG/512/dog_icon_125586.png'
);
$cat = new Category(
    'Gatto',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Cat_silhouette.svg/808px-Cat_silhouette.svg.png'
);

$foods = [
    new Food(
        42143,
        'Crocchette',
        'Purina',
        $cat,
        7.5,
        'https://shop-cdn-m.mediazs.com/bilder/purina/pro/plan/veterinary/diets/feline/ha/stox/hypoallergenic/7/400/236498_pla_nestle_purina_pro_plan_veterinary_diets_feline_ha_stox_hypoallergenic_7.jpg',
        '325g',
        'Suino e Pesce',
        'S'
    ),
    new Food(
        42155,
        'Crocchette',
        'Royal Canin',
        $cat,
        7,
        'https://arcaplanet.vtexassets.com/arquivos/ids/239984/royal-canin-hairball-care-gatto.jpg',
        '400g',
        'Manzo',
        'S'
    ),
    new Food(
        42083,
        'Crocchette',
        'N&D Ocean Adult Medium Maxi',
        $dog,
        60,
        'https://arcaplanet.vtexassets.com/arquivos/ids/245008/n-d-low-grain-cane-adult-med-max-merluzzo-e-arancia.jpg',
        '12kg',
        'Merluzzo e Arancia',
        'XL'
    ),
    new Food(
        42151,
        'Crocchette',
        'Monge Adult',
        $dog,
        15,
        'https://arcaplanet.vtexassets.com/arquivos/ids/270786/Monge-Extra-Small-Adult-con-Salmone.jpg',
        '2.5Kg',
        'Salmone',
        'M'
    )
];

$toys = [
    new Toy(
        21034,
        'Gioco da leccare',
        'Adakel',
        $cat,
        8,
        'https://m.media-amazon.com/images/I/61YU0dmM5XL._AC_SL1500_.jpg',
        'Gioco profumato',
        'M'
    ),
    new Toy(
        21044,
        'Gioco da masticare',
        'Yuning',
        $dog,
        12,
        'https://m.media-amazon.com/images/I/818iAhDT0JL._AC_SL1500_.jpg',
        'Pulizia denti e resistente',
        'Qualsiasi'
    )
];

$accesories = [
    new Accessory(
        34054,
        'Cuscino',
        'Aoresac',
        $cat,
        20,
        'https://m.media-amazon.com/images/I/71x6bZylQoL._AC_SL1500_.jpg',
        'Morbido felpato',
        'Diametro 50cm'
    ),
    new Accessory(
        34064,
        'Cuccia',
        'Feandrea',
        $dog,
        39,
        'https://m.media-amazon.com/images/I/81XSYh-JpLL._AC_SL1500_.jpg',
        'Sfoderabile e lavabile',
        '70x55x21cm'
    ),
];

$all_products = [ $foods ,$toys ,$accesories];

var_dump($all_products);
?>