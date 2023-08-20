<!DOCTYPE html>
<html lang="en">
<head>
    {include file = "../includes/head.tpl"}
</head>
<body>
    {include file = "../includes/header.tpl"}
    <div class="wrapper">
        {include file = "../includes/sidebarMenu.tpl"}
        <div id="content">
        <h5>Товары категории {$recCategory['name_ru']}</h5>
            {foreach $recProducts as $prod}
                <div class="card" style="width: 12rem;">
                    <img src="img/products/{$prod['image']}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h8 class="card-title">{$prod['name_ru']}</h8>
                        <p class="card-text">{$prod['description']}</p>
                        <a href="/?controller=product&id={$prod['id']}/" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
    {include file = "../includes/footer.tpl"}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>