
                    <div class="layout card-margin brand-height center-center">
                        <a title="{{ $product->name }}" class="jss147 flwidth flheight cursor card-shadow pad16"
                            href="{{ route('product.product', [$product->alias]) }}">
                            <div style="height: 80%;width: 80%">
                                 <span class="jss148">
                                <img class="img-resp flwidth"
                                    src="{{ $product->image }}"
                                alt="{{ $product->name }}" />
                                </span>
                                
                            </div>
                            <span class="font12-10 text-center tc-primary flex-1 line-clamp-3 layout horizontal center-center jss109" style="color: grey">{{ $product->name }}</span>
                        </a>
                        </div>