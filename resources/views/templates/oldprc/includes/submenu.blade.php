<ul class="sub-menu">
@foreach($taxons as $taxon)

            <li id="menu-item-2527"
                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2527"><a
                href="{{ route('product.category', [$taxon->taxonomy->slug, $taxon]) }}">{{ $taxon->name }}</a></li>
          
           @endforeach
           </ul>