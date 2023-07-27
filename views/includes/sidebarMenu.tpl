<div class="flex-shrink-0 p-3" style="width: 280px;">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
      <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-5 fw-semibold">Collapsible</span>
    </a>
    <ul class="list-unstyled ps-0">
    {foreach $allCategories as $item}
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#{$item['name_en']}-collapse" aria-expanded="false">
          {$item['name_ru']}
        </button>
        {if isset($item['children'])}
        <div class="collapse" id="{$item['name_en']}-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            {foreach $item['children'] as $itemChild}
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">{$itemChild['name_ru']}</a></li>
            {/foreach}
          </ul>
        </div>
        {/if}
      </li>
      {/foreach}
    </ul>
  </div>