<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Section Lý Do</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="form-group">
                    <label for="title_why">Tiêu Đề</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" id="title_why" name="title_why" value="{{ old('title_why') }}" class="form-control" placeholder="Tiêu Đề">
                    </div>
                </div>

                <div id="holder-why" class="thumbnail holder-thumbnail text-center">
                </div>
                <div class="input-group">
			<span class="input-group-btn">
			  <a data-input="thumbnail-why" data-preview="holder-why" class="lfm-mul btn btn-primary">
				<i class="fa fa-picture-o"></i> Ảnh Nền
			  </a>
			</span>
                    <input id="thumbnail-why" class="form-control" type="text" name="images_why" value="">
                </div>

                <div class="form-group mt-3">
                    <label for="content_why">Nội Dung</label>
                    <textarea id="content_why" name="content_why" class="form-control ckeditor-lfm" rows="4"></textarea>
                </div>

                <!-- Default box -->
                <div class="card card-solid mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Lý Do</h3>
                    </div>
                    <div class="card-body pb-0">
                        <div class="row d-flex align-items-stretch increment-why">
                            <div class="col-12 col-sm-4 col-md-3 d-flex align-items-stretch">
                                <div class="card bg-light">
                                    <div class="card-header text-muted border-bottom-0">
                                        Lý Do
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="form-group">
                                            <label for="why_title">Giá Trị</label>
                                            <input type="text" id="why_title" name="why_title[]" placeholder="Nhập tiêu đề" class="form-control" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="why_icon">Icon</label>
                                            <input type="text" id="why_icon" name="why_icon[]" placeholder="Nhập icon" class="form-control" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="why_description">Mô Tả</label>
                                            <textarea id="why_description" name="why_description[]" class="form-control" rows="4" placeholder="Nhập mô tả"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn-clone-why btn btn-info" type="button"><i class="fas fa-plus"></i> Thêm Lý Do</button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
