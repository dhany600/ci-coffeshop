<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500">
    <link rel="stylesheet" href="<?= base_url() ?>assets/template-user/styles/style.css">
    <script src="<?= base_url() ?>assets/template-user/scripts/uikit.js"></script>
    <script src="<?= base_url() ?>assets/template-user/scripts/uikit-icons.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/toastr/toastr.min.css">
</head>

<body>
    <div class="uk-offcanvas-content">
        <header>
    </div>
    <div class="uk-navbar-container tm-navbar-container" uk-sticky="cls-active: tm-navbar-container-fixed">
        <div class="uk-container" uk-navbar>
            <div class="uk-navbar-left">
                <button class="uk-navbar-toggle uk-hidden@m" uk-toggle="target: #nav-offcanvas" uk-navbar-toggle-icon></button><a class="uk-navbar-item uk-logo" href="index.html"><img src="<?= base_url() ?>assets/template-user/images/web-logo.png" width="50" alt="Logo"></a>
                <nav class="uk-visible@m">
                    <ul class="uk-navbar-nav">
                        <li><a href="catalog.html">Catalog<span class="uk-margin-xsmall-left" uk-icon="icon: chevron-down; ratio: .75;"></span></a>
                            <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove-vertical" uk-drop="pos: bottom-justify;delay-show: 125;delay-hide: 50;duration: 75;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
                                <div class="uk-container">
                                    <ul class="uk-navbar-dropdown-grid uk-child-width-1-5" uk-grid>
                                        <li>
                                            <div class="uk-margin-top uk-margin-bottom"><a class="uk-link-reset" href="category.html"><img class="uk-display-block uk-margin-auto uk-margin-bottom" src="<?= base_url() ?>/assets/template-user/images/catalog/computers.svg" alt="Laptops &amp; Tablets" width="80" height="80">
                                                    <div class="uk-text-bolder">Laptops &amp; Tablets</div>
                                                </a>
                                                <ul class="uk-nav uk-nav-default">
                                                    <li><a href="subcategory.html">Laptops</a></li>
                                                    <li><a href="subcategory.html">Tablets</a></li>
                                                    <li><a href="subcategory.html">Peripherals</a></li>
                                                    <li><a href="subcategory.html">Keyboards</a></li>
                                                    <li><a href="subcategory.html">Accessories</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-margin-top uk-margin-bottom"><a class="uk-link-reset" href="category.html"><img class="uk-display-block uk-margin-auto uk-margin-bottom" src="<?= base_url() ?>/assets/template-user/images/catalog/phones.svg" alt="Phones &amp; Gadgets" width="80" height="80">
                                                    <div class="uk-text-bolder">Phones &amp; Gadgets</div>
                                                </a>
                                                <ul class="uk-nav uk-nav-default">
                                                    <li><a href="subcategory.html">Smartphones</a></li>
                                                    <li><a href="subcategory.html">Mobile Phones</a></li>
                                                    <li><a href="subcategory.html">Smart watches</a></li>
                                                    <li><a href="subcategory.html">Charging and batteries</a></li>
                                                    <li><a href="subcategory.html">Accessories</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-margin-top uk-margin-bottom"><a class="uk-link-reset" href="category.html"><img class="uk-display-block uk-margin-auto uk-margin-bottom" src="<?= base_url() ?>/assets/template-user/images/catalog/tv.svg" alt="TV &amp; Video" width="80" height="80">
                                                    <div class="uk-text-bolder">TV &amp; Video</div>
                                                </a>
                                                <ul class="uk-nav uk-nav-default">
                                                    <li><a href="subcategory.html">TV</a></li>
                                                    <li><a href="subcategory.html">Home Cinema</a></li>
                                                    <li><a href="subcategory.html">Satellite &amp; Cable TV</a></li>
                                                    <li><a href="subcategory.html">Projectors</a></li>
                                                    <li><a href="subcategory.html">DVD &amp; Blu-ray</a></li>
                                                    <li><a href="subcategory.html">Accessories</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-margin-top uk-margin-bottom"><a class="uk-link-reset" href="category.html"><img class="uk-display-block uk-margin-auto uk-margin-bottom" src="<?= base_url() ?>/assets/template-user/images/catalog/games.svg" alt="Games &amp; Entertainment" width="80" height="80">
                                                    <div class="uk-text-bolder">Games &amp; Entertainment</div>
                                                </a>
                                                <ul class="uk-nav uk-nav-default">
                                                    <li><a href="subcategory.html">Gaming consoles</a></li>
                                                    <li><a href="subcategory.html">Games</a></li>
                                                    <li><a href="subcategory.html">Software</a></li>
                                                    <li><a href="subcategory.html">Joysticks &amp; gamepads</a></li>
                                                    <li><a href="subcategory.html">Accessories</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-margin-top uk-margin-bottom"><a class="uk-link-reset" href="category.html"><img class="uk-display-block uk-margin-auto uk-margin-bottom" src="<?= base_url() ?>/assets/template-user/images/catalog/photo.svg" alt="Photo" width="80" height="80">
                                                    <div class="uk-text-bolder">Photo</div>
                                                </a>
                                                <ul class="uk-nav uk-nav-default">
                                                    <li><a href="subcategory.html">Cameras</a></li>
                                                    <li><a href="subcategory.html">Lenses</a></li>
                                                    <li><a href="subcategory.html">Accessories</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="brands.html">Brands<span class="uk-margin-xsmall-left" uk-icon="icon: chevron-down; ratio: .75;"></span></a>
                            <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove-vertical" uk-drop="pos: bottom-justify;delay-show: 125;delay-hide: 50;duration: 75;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
                                <div class="uk-container uk-container-small uk-margin-top uk-margin-bottom">
                                    <ul class="uk-grid-small uk-child-width-1-6" uk-grid>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box" href="#" title="Apple">
                                                    <figure class="tm-media-box-wrap"><img src="<?= base_url() ?>assets/template-user/images/brands/apple.svg" alt="Apple"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box" href="#" title="Samsung">
                                                    <figure class="tm-media-box-wrap"><img src="<?= base_url() ?>assets/template-user/images/brands/samsung.svg" alt="Samsung"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box" href="#" title="Sony">
                                                    <figure class="tm-media-box-wrap"><img src="<?= base_url() ?>assets/template-user/images/brands/sony.svg" alt="Sony"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box" href="#" title="Microsoft">
                                                    <figure class="tm-media-box-wrap"><img src="<?= base_url() ?>assets/template-user/images/brands/microsoft.svg" alt="Microsoft"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box" href="#" title="Intel">
                                                    <figure class="tm-media-box-wrap"><img src="<?= base_url() ?>assets/template-user/images/brands/intel.svg" alt="Intel"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box" href="#" title="HP">
                                                    <figure class="tm-media-box-wrap"><img src="<?= base_url() ?>assets/template-user/images/brands/hp.svg" alt="HP"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box" href="#" title="LG">
                                                    <figure class="tm-media-box-wrap"><img src="<?= base_url() ?>assets/template-user/images/brands/lg.svg" alt="LG"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box" href="#" title="Lenovo">
                                                    <figure class="tm-media-box-wrap"><img src="<?= base_url() ?>assets/template-user/images/brands/lenovo.svg" alt="Lenovo"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box" href="#" title="ASUS">
                                                    <figure class="tm-media-box-wrap"><img src="<?= base_url() ?>assets/template-user/images/brands/asus.svg" alt="ASUS"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box" href="#" title="Acer">
                                                    <figure class="tm-media-box-wrap"><img src="<?= base_url() ?>assets/template-user/images/brands/acer.svg" alt="Acer"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box" href="#" title="Dell">
                                                    <figure class="tm-media-box-wrap"><img src="<?= base_url() ?>assets/template-user/images/brands/dell.svg" alt="Dell"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box" href="#" title="Canon">
                                                    <figure class="tm-media-box-wrap"><img src="<?= base_url() ?>assets/template-user/images/brands/canon.svg" alt="Canon"></figure>
                                                </a></div>
                                        </li>
                                    </ul>
                                    <div class="uk-text-center uk-margin"><a class="uk-link-muted uk-text-uppercase tm-link-to-all" href="brands.html"><span>See all brands</span><span uk-icon="icon: chevron-right; ratio: .75;"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Pages<span class="uk-margin-xsmall-left" uk-icon="icon: chevron-down; ratio: .75;"></span></a>
                            <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove-vertical" uk-drop="pos: bottom-justify;delay-show: 125;delay-hide: 50;duration: 75;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
                                <div class="uk-container uk-container-small uk-margin-top uk-margin-bottom">
                                    <ul class="uk-nav uk-nav-default uk-column-1-3">
                                        <li><a href="catalog.html">Catalog</a></li>
                                        <li><a href="category.html">Category</a></li>
                                        <li><a href="subcategory.html">Subcategory</a></li>
                                        <li><a href="product.html">Product</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="brands.html">Brands</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="account.html">Account</a></li>
                                        <li><a href="favorites.html">Favorites</a></li>
                                        <li><a href="personal.html">Personal</a></li>
                                        <li><a href="settings.html">Settings</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="article.html">Article</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="delivery.html">Delivery</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="blog.html">Blog</a>
                        </li>
                        <li><a href="about.html">About</a>
                        </li>
                        <li><a href="contacts.html">Contacts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </header>
    <main>
        