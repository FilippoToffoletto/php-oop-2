<?php
// var_dump($foods);
?>


<body>

    <div class="container-sm">
        <h2 class="py-3 border-bottom" >Crocchette</h2>
        <div class="row py-3">

            <?php foreach($foods as $food): ?>
                <div class="col-12 col-md-6 mb-4">

                    <div class="card  w-75">
                        <img src="<?php echo $food->image ?>" class="card-img-top w-50 align-self-center my-1" alt="<?php echo $food->brand ?>">
                        <div class="card-body h-50">
                            <h3 class="card-title"><?php echo $food->name ?></h3>
                            <h5 class="card-title"><?php echo $food->brand ?></h5>
                            <div class="details">
                                <h6>€<?php echo $food->price ?></h6>
                                <h6><?php echo $food->weight ?></h6>
                                <h6>Ingredienti: <?php echo $food->ingredients ?></h6>
                                <h6>Taglia: <?php echo $food->size ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </div>
</body>

