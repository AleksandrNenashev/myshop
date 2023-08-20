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