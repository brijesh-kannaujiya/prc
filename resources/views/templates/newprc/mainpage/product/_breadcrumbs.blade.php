<?php
    $stack = [];
    $stack[] = [
        'url'   => route('product.category', [$taxon->taxonomy->slug, $taxon]),
        'label' => $taxon->name
    ];

    $parent = $taxon;
    while ($parent = $parent->parent) {
        $stack[] = [
            'url'   => route('product.category', [$parent->taxonomy->slug, $parent]),
            'label' => $parent->name
        ];
    }
    $stack[] = [
        'url'   => route('product.cat', [$taxon->taxonomy->id]),
        'label' => $taxon->taxonomy->name
    ]
?>
@foreach(array_reverse($stack) as $item)
   >  <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
@endforeach
