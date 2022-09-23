<div id="fr-service-menu" class="fr-accordion  ">
    <div class="content">

        @foreach($itemsList as $item)

            <div class="card">
                <div class="card-header"
                     id="brand_{{ $item->id }}">
                    <a data-toggle="collapse"
                       data-target="#collapse-fr-service-menu2_{{ $item->id }}"
                       aria-expanded="false"
                       aria-controls="collapse-2">
                        {{ $item->name }}
                        <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                </div>
                @if($item->categories->count() > 0)
                    <div id="collapse-fr-service-menu2_{{ $item->id }}"
                         class="collapse"
                         aria-labelledby="heading-2"
                         data-parent="#fr-service-menu">
                        <div class="card-body">
                            <ul class="ul-categories" {{--id="list_{{ $item->id }}"--}}>
                                @foreach($item->categories as $cat)
                                    <li class="categories">
                                                                                <span class="caret">
                                                                                    <a href="/prc/brand/{{$item->alias}}/{{$cat->alias}}">
                                                                                        {{$cat->description->title}}
                                                                                    </a>
                                                                                </span>
                                        @if($cat->products->count() > 0)
                                            <ul class="nested">
                                                @foreach($cat->products as $product)
                                                    <li class="product">
                                                        <a href="/prc/product/{{$product->alias}}">
                                                            <span>{{$product->descriptions->first()->name}}</span></a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        @endif
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach


    </div>
</div>