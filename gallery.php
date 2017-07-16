<?php $page = "gallery"; include('includes/header.php'); ?>

        <section id="main">
            <div class="gallery-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="title">HCAN PHOTO GALLERY</h2>
                        </div>
                    </div>
                </div>
                <div class="container">
                        <div class="row grid-tab">
                            <div class="col-md-6 col-md-offset-3 col-sm-12">                                
                                <div class="btn-group btn-group-justified" role="group">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-primary" data-filter="*">All</button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default" title="World Cancer Day, FMC, Abeokuta" data-filter=".filter-w-c-d-f-a">World Cancer Day, FMC, Abeokuta</button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default" title="2017, World Cancer Day" data-filter=".filter-w-c-d">2017, World Cancer Day</button>
                                    </div>
                                </div>                                                                
                            </div>
                        </div>                                                
                        
                        <div class="row grid" style="position: relative; height: 764px;">
                            <div class="col-md-3 col-ms-4 grid-element filter-w-c-d" style="position: absolute; left: 0%; top: 0px;">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="assets/images/large/w-c-d-1.jpg" data-preview-size="modal-lg">
                                        <img src="assets/images/preview/w-c-d-1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-w-c-d" style="position: absolute; left: 50%; top: 0px;">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="assets/images/large/w-c-d-2.jpg" data-preview-size="modal-lg">
                                        <img src="assets/images/preview/w-c-d-2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-w-c-d" style="position: absolute; left: 0%; top: 268px;">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="assets/images/large/w-c-d-3.jpg" data-preview-size="modal-lg">
                                        <img src="assets/images/preview/w-c-d-3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-w-c-d" style="position: absolute; left: 0%; top: 268px;">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="assets/images/large/w-c-d-4.jpg" data-preview-size="modal-lg">
                                        <img src="assets/images/preview/w-c-d-4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-w-c-d-f-a" style="position: absolute; left: 25%; top: 0px;">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="assets/images/large/w-c-d-f-a-1.jpg" data-preview-size="modal-lg">
                                        <img src="assets/images/preview/w-c-d-f-a-1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-w-c-d-f-a" style="position: absolute; left: 75%; top: 0px;">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="assets/images/large/w-c-d-f-a-2.jpg" data-preview-size="modal-lg">
                                        <img src="assets/images/preview/w-c-d-f-a-2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-w-c-d-f-a" style="position: absolute; left: 25%; top: 268px;">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="assets/images/large/w-c-d-f-a-3.jpg" data-preview-size="modal-lg">
                                        <img src="assets/images/preview/w-c-d-f-a-3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-w-c-d-f-a" style="position: absolute; left: 50%; top: 516px;">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="assets/images/large/w-c-d-f-a-4.jpg" data-preview-size="modal-lg">
                                        <img src="assets/images/preview/w-c-d-f-a-4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
            </div>
        </section>

<!-- MODAL PREVIEW -->
<div class="modal fade" id="preview" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>

        <div class="modal-content">
            <div class="modal-body padding-5"></div>
        </div>
    </div>            
</div>
<!-- END MODAL PREVIEW -->


<?php include('includes/footer.php') ?>