<footer class="bg-warning text-center">
    <div class="container-sm w-25 py-4">
        <ul class="list-group list-group-flush">
            <?php foreach($all_products as $value): ?>
            <li class="list-group-item"><a href="#" class="nav-link"><?php echo $value ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>
</footer>
</html>