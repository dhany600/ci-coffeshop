            <section class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="min-height: 300; max-height: 600;">
                <ul class="uk-slideshow-items">
                    <?php foreach ($slider->result() as $key => $data) {?>
                        <li style="background-color: #000000"><a href="#">
                            <figure class="uk-container uk-height-1-1">
                                <img src="<?= base_url('upload/slider/'.$data->slider_img)?>". alt="New Macbook" width="1200" height="600" uk-cover>
                            </figure>
                        </a></li>
                    <?php } ?>
                </ul><a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slideshow-item="previous" uk-slidenav-previous></a><a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slideshow-item="next" uk-slidenav-next></a>
                <div class="uk-position-bottom-center uk-position-small">
                    <ul class="uk-slideshow-nav uk-dotnav"></ul>
                </div>
            </section>