<?php
// var_dump($accessories);
?>


<body>

    <div class="container-sm">
        <h2 class="py-3 border-bottom">Accessori</h2>
        <div class="row py-3">

            <?php foreach($accesories as $accessory): ?>
                <div class="col-12 col-md-6 mb-4">

                    <div class="card  w-75">
                        <img src="<?php echo $accessory->image ?>" class="card-img-top w-50 align-self-center my-1" alt="<?php echo $accessory->brand ?>">
                        <div class="card-body h-50">
                            <h3 class="card-title"><?php echo $accessory->name ?></h3>
                            <h5 class="card-title"><?php echo $accessory->brand ?></h5>
                            <div class="details">
                                <h6>€<?php echo $accessory->price ?></h6>
                                <h6>Misure: <?php echo $accessory->size ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </div>
</body>

