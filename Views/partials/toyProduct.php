<?php
// var_dump($toys);
?>


<body>

    <div class="container-sm">
        <h2 class="py-3 border-bottom">Giochi</h2>
        <div class="row py-3">

            <?php foreach($toys as $toy): ?>
                <div class="col-12 col-md-6 mb-4">

                    <div class="card  w-75">
                        <img src="<?php echo $toy->image ?>" class="card-img-top w-50 align-self-center my-1" alt="<?php echo $toy->brand ?>">
                        <div class="card-body h-50">
                            <h3 class="card-title"><?php echo $toy->name ?></h3>
                            <h5 class="card-title"><?php echo $toy->brand ?></h5>
                            <div class="details">
                                <h6>€<?php echo $toy->price ?></h6>
                                <h6><?php echo $toy->features ?></h6>
                                <h6>Taglia: <?php echo $toy->size ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </div>
</body>

