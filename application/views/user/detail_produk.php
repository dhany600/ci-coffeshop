<section>
<div class="uk-container mt-5">
    <div class="row">
        <div class="col-6">
            <?php if (!$row->product_img): ?>
                <img src="<?= base_url('upload/product/default.png')?>" alt="" class="product-detail-image-content" style="
                border: 1px solid black;">
            <?php else: ?>
                <img src="<?= base_url('upload/product/'.$row->product_img)?>" alt="" class="product-detail-image-content" style="
                border: 1px solid black;">
            <?php endif ?>
        </div>
            <div class="col-6">
                <h2 style="font-weight: bold;">
                    <?= $row->product_name;?>
                </h2>
                <h3>
                    Size : <?= $row->product_size;?>
                </h3>
                <h3>
                    Rp <?= $row->product_price;?>
                </h3>
                <div class=" my-4" style="
                    width: 100%;
                    height: 1px;
                    border: 1px solid black;">
                </div>
                <p style="
                    font-size: 20px;">
                    Deskripsi : </br>
                    <?= $row->product_deskripsi?>
                </p>
                <div class=" my-4" style="
                    width: 100%;
                    height: 1px;
                    border: 1px solid black;">
                </div>
                <div class="breadcrumb-item"><a href="<?= $wa->whatsapp_link?>" class="btn btn-sm btn-success" style="font-size: 35px;">
                        <i class="icon fas fa-phone"></i> Whatsapps</a>
                </div>
            </div>
    </div>
</div>
</section>

<section class="uk-section uk-section-small mt-5">
    <div class="uk-container">
        <h2 class="uk-text-center">Produk Lainnya</h2>
        <div class="uk-card uk-card-default tm-ignore-container">
            <div class="uk-grid-collapse uk-child-width-1-3 uk-child-width-1-4@m tm-products-grid" uk-grid>

                <!-- Produk -->
                <?php
                foreach ($list_product->result() as $key => $data) { ?>

                    <article class="tm-product-card">
                        <div class="tm-product-card-media">
                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="<?= base_url('page_user/detail/'.$data->product_id) ?>">
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
                                <h3 class="tm-product-card-title"><a class="uk-link-heading" href="product.html"><?= $data->product_name ?></a></h3>
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
                <?php } ?>
                <!-- End Produk -->
            </div>
        </div>
        <div class="uk-margin uk-text-center"><a class="uk-link-muted uk-text-uppercase tm-link-to-all" href="subcategory.html"><span>shop all</span><span uk-icon="icon: chevron-right; ratio: .75;"></span></a>
        </div>
    </div>
</section>