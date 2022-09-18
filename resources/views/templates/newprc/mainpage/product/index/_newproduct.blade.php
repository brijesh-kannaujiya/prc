
                    <div class="layout card-margin brand-height center-center">
                        <a title="{{ $product->name }}" class="jss147 flwidth flheight cursor card-shadow pad16"
                            href="{{ route('product.product', [$product->alias]) }}">
                            <div class="">
                                 <span class="jss148">
                                <img class="img-resp flwidth" width="100px" height="100px"
                                    src="{{ $product->image }}"
                                alt="{{ $product->name }}" />
                                </span>
                                
                            </div>
                            <span class="font12-10 text-center tc-primary flex-1 line-clamp-3 layout horizontal center-center jss109">{{ $product->name }}</span>
                        </a>
                        </div>