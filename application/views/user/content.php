            <section class="uk-section uk-section-small">
                <div class="uk-container">
                    <h2 class="uk-text-center">Trending Items</h2>
                    <div class="uk-card uk-card-default tm-ignore-container">
                        <div class="uk-grid-collapse uk-child-width-1-3 uk-child-width-1-4@m tm-products-grid" uk-grid>

                            <!-- Produk -->
                            <?php 
                            foreach ($row->result() as $key => $data) {?>

                            <article class="tm-product-card">
                                <div class="tm-product-card-media">
                                    <div class="tm-ratio tm-ratio-4-3">
                                        <a class="tm-media-box" href="<?= base_url('page_user/detail/'.$data->product_id)?>">
                                            <div class="tm-product-card-labels"><span class="uk-label uk-label-success">new</span>
                                            </div>
                                            <figure class="tm-media-box-wrap">
                                                <?php if (!$data->product_img): ?>
                                                <img src="<?= base_url('upload/product/default.png') ?>" alt="Lenovo Yoga 720-13IKB 80X60059RK (Silver)" />
                                                <?php else: ?>
                                                <img src="<?= base_url('upload/product/' . $data->product_img) ?>" alt="Lenovo Yoga 720-13IKB 80X60059RK (Silver)" />
                                                <?php endif ?>
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="tm-product-card-body">
                                    <div class="tm-product-card-info">
                                        <h3 class="tm-product-card-title"><a class="uk-link-heading" href="product.html"><?= $data->product_name?></a></h3>
                                        <ul class="uk-list uk-text-small tm-product-card-properties">
                                            <li><span class="uk-text-muted">Diagonal display: </span><span>13.3"</span></li>
                                            <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™ i5-7200U</span></li>
                                            <li><span class="uk-text-muted">RAM: </span><span>8&nbsp;GB</span></li>
                                            <li><span class="uk-text-muted">Video Card: </span><span>Intel® HD Graphics 620</span></li>
                                        </ul>
                                    </div>
                                    <div class="tm-product-card-shop">
                                        <div class="tm-product-card-prices">
                                            <div class="tm-product-card-price">$1099.00</div>
                                        </div>
                                        <div class="tm-product-card-add">
                                            <div class="uk-text-meta tm-product-card-actions"><a class="tm-product-card-action js-add-to js-add-to-favorites" title="Add to favorites"><span uk-icon="icon: heart; ratio: .75;"></span><span class="tm-product-card-action-text">Add to favorites</span></a><a class="tm-product-card-action js-add-to js-add-to-compare" title="Add to compare"><span uk-icon="icon: copy; ratio: .75;"></span><span class="tm-product-card-action-text">Add to compare</span></a></div>
                                            <button class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span class="tm-product-card-add-button-icon" uk-icon="cart"></span><span class="tm-product-card-add-button-text">add to cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php }?>
                            <!-- End Produk -->
                        </div>
                    </div>
                    <div class="uk-margin uk-text-center"><a class="uk-link-muted uk-text-uppercase tm-link-to-all" href="subcategory.html"><span>shop all</span><span uk-icon="icon: chevron-right; ratio: .75;"></span></a>
                    </div>
                </div>
            </section>
            </main>