<ul class="sub-menu">
    @foreach($taxonomies as $taxonomy)
    <li id="menu-item-2190"
        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-2190"><a
        href="{{ route('product.cat', $taxonomy) }}">{{ $taxonomy->name }}</a>
        @include('includes.submenu',['taxons' => $taxonomy->rootLevelTaxons()])
           
        </li>
        @endforeach
</ul> 
