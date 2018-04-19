@extends("layouts.app")
@section("content")

<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Media Manager
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-cog"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">

                <ul id="filters" class="media-filter">
                    <li><a href="#" data-filter="*"> All</a></li>
                    <li><a href="#" data-filter=".images">Images</a></li>
                    <li><a href="#" data-filter=".audio">Audio</a></li>
                    <li><a href="#" data-filter=".video">Video</a></li>
                    <li><a href="#" data-filter=".documents">Documents</a></li>
                </ul>

                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-white btn-sm"><i class="fa fa-check-square-o"></i> Select all</button>
                    <button type="button" class="btn btn-white btn-sm"><i class="fa fa-folder-open"></i> Add New</button>
                    <button type="button" class="btn btn-white btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                </div>
                <a href="#" type="button" class="btn pull-right btn-sm"><i class="fa fa-upload"></i> Upload New File</a>



                <div id="gallery" class="media-gal isotope" style="position: relative; overflow: hidden; height: 791.391px;">
                    <div class="images item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                        <a href="#myModal" data-toggle="modal">
                            <img src="<?php echo url('/'); ?>/images/gallery/image1.jpg" alt="">
                        </a>
                        <p>img01.jpg </p>
                    </div>

                    <div class="audio item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(247px, 0px, 0px);">
                        <a href="#myModal" data-toggle="modal">
                            <img src="<?php echo url('/'); ?>/images/gallery/image2.jpg" alt="">
                        </a>
                        <p>img02.jpg </p>
                    </div>

                    <div class="video item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(494px, 0px, 0px);">
                        <a href="#myModal" data-toggle="modal">
                            <img src="<?php echo url('/'); ?>/images/gallery/image3.jpg" alt="">
                        </a>
                        <p>img03.jpg </p>
                    </div>

                    <div class="images audio item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(740px, 0px, 0px);">
                        <a href="#myModal" data-toggle="modal">
                            <img src="<?php echo url('/'); ?>/images/gallery/image4.jpg" alt="">
                        </a>
                        <p>img04.jpg </p>
                    </div>

                    <div class="images documents item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(987px, 0px, 0px);">
                        <a href="#myModal" data-toggle="modal">
                            <img src="<?php echo url('/'); ?>/images/gallery/image5.jpg" alt="">
                        </a>
                        <p>img05.jpg </p>
                    </div>

                    <div class="audio item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 264px, 0px);">
                        <a href="#myModal" data-toggle="modal">
                            <img src="<?php echo url('/'); ?>/images/gallery/image1.jpg" alt="">
                        </a>
                        <p>img01.jpg </p>
                    </div>

                    <div class="documents item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(247px, 264px, 0px);">
                        <a href="#myModal" data-toggle="modal">
                            <img src="<?php echo url('/'); ?>/images/gallery/image2.jpg" alt="">
                        </a>
                        <p>img02.jpg </p>
                    </div>
                    <div class="video item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(494px, 264px, 0px);">
                        <a href="#myModal" data-toggle="modal">
                            <img src="<?php echo url('/'); ?>/images/gallery/image3.jpg" alt="">
                        </a>
                        <p>img03.jpg </p>
                    </div>

                    <div class="images item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(740px, 264px, 0px);">
                        <a href="#myModal" data-toggle="modal">
                            <img src="<?php echo url('/'); ?>/images/gallery/image4.jpg" alt="">
                        </a>
                        <p>img04.jpg </p>
                    </div>

                    <div class="documents item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(987px, 264px, 0px);">
                        <a href="#myModal" data-toggle="modal">
                            <img src="<?php echo url('/'); ?>/images/gallery/image5.jpg" alt="">
                        </a>
                        <p>img05.jpg </p>
                    </div>

                    <div class="video item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 528px, 0px);">
                        <a href="#myModal" data-toggle="modal">
                            <img src="<?php echo url('/'); ?>/images/gallery/image1.jpg" alt="">
                        </a>
                        <p>img01.jpg </p>
                    </div>

                    <div class="audio images item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(247px, 528px, 0px);">
                        <a href="#myModal" data-toggle="modal">
                            <img src="<?php echo url('/'); ?>/images/gallery/image2.jpg" alt="">
                        </a>
                        <p>img02.jpg </p>
                    </div>

                </div>

                <div class="col-md-12 text-center clearfix">
                    <ul class="pagination">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Edit Media Gallery</h4>
                            </div>

                            <div class="modal-body row">

                                <div class="col-md-5 img-modal">
                                    <img src="<?php echo url('/'); ?>/images/gallery/image1.jpg" alt="">
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit Image</a>
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-eye"></i> View Full Size</a>

                                    <p class="mtop10"><strong>File Name:</strong> img01.jpg</p>
                                    <p><strong>File Type:</strong> jpg</p>
                                    <p><strong>Resolution:</strong> 300x200</p>
                                    <p><strong>Uploaded By:</strong> <a href="#">ThemeBucket</a></p>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label> Name</label>
                                        <input id="name" value="img01.jpg" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label> Tittle Text</label>
                                        <input id="title" value="awesome image" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label> Description</label>
                                        <textarea rows="2" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label> Link URL</label>
                                        <input id="link" value="images/gallery/img01.jpg" class="form-control">
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-danger" type="button">Delete</button>
                                        <button class="btn btn-primary" type="button">Save changes</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- modal -->

            </div>
        </section>
    </div>
</div>

@stop