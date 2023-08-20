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
        <div class="card mb-3" style="max-width: 800px;">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="img/products/{$recProduct['image']}" class="card-img" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h6 class="card-title">{$recProduct['name_ru']}</h6>
                        <p class="card-text">{$recProduct['description']}</p>
                        <p class="card-text"><small class="text-body-secondary">Стоимость: {$recProduct['price']} руб.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{include file = "../includes/footer.tpl"}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>