<div class="row">
	<div class="col-12">
	  <div class="card card-primary">
		<div class="card-header">
		  <h3 class="card-title">Section Giới Thiệu Doanh Nghiệp</h3>
		  <div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
			  <i class="fas fa-minus"></i></button>
		  </div>
		</div>
		<!-- /.card-header -->
		<div class="card-body">

		  <div class="form-group">
			<label for="title_about">Tiêu Đề</label>
			<div class="input-group">
			  <div class="input-group-prepend">
				<span class="input-group-text">@</span>
			  </div>
			  <input type="text" id="title_about" name="title_about" value="{{ $home_default->title_about ?? old('title_about') }}" class="form-control" placeholder="Tiêu Đề">
			</div>
		  </div>
		  
		  {{-- <div class="form-group">
			<label for="content_about">Embed Video <span class="color-red">( Nhập video sẽ hiển thị video không hiển thị hành ảnh )</span></label>
			<textarea id="video_about" name="video_about" class="form-control" rows="4">{!! $home_default->video_about ?? old('video_about') !!}</textarea>
		  </div> --}}

			<div class="form-group">
				<label for="title_image_about">Mô Tả Nội Dung</label>
				<input type="text" id="title_image_about" name="title_image_about" placeholder="Nhập mô tả nội dung" class="form-control" value="{{ $home_default->title_image_about ?? old('title_image_about') }}">
			</div>
		  <div class="form-group">
			<label for="content_about">Nội Dung</label>
			<select class="form-control mb-2" name="position_about" id="">
				<option value="0" {{ $home_default->position_about == 0 ? 'selected' : '' }}>Nội dung nằm bên trái</option>
				<option value="1" {{ $home_default->position_about == 1 ? 'selected' : '' }}>Nội dung nằm bên phải</option>
			</select>
			<textarea id="content_about" name="content_about" class="form-control ckeditor-lfm" rows="4">{!! $home_default->content_about ?? old('content_about') !!}</textarea>
		  </div>
		  <div class="form-group">
			<label for="content_about">Mã Nhúng Video Youtube</label>
			<textarea id="content_about" name="video_embed_about" class="form-control" rows="3">{!! $home_default->video_embed_about ?? old('video_embed_about') !!}</textarea>
		  </div>

		  <div id="holder-about" class="thumbnail holder-thumbnail text-center">
			@if( !empty( $home_default->images_about ) )
			  <img src="{{ $home_default->images_about }}" style="height: 5rem;">
			@endif
		  </div>
		  <div class="input-group">
			<span class="input-group-btn">
			  <a data-input="thumbnail-about" data-preview="holder-about" class="lfm-mul btn btn-primary">
				<i class="fa fa-picture-o"></i> Hình Ảnh
			  </a>
			</span>
			<input id="thumbnail-about" class="form-control" type="text" name="images_about" value="{{ $home_default->images_about }}">
		  </div>

		  <div class="row mt-3">
			<div class="col-md-12">
			  <div class="form-group">
				<label for="alt_image_about">Mô Tả Hình Ảnh</label>
				<input type="text" id="alt_image_about" name="alt_image_about" placeholder="Nhập mô tả hình ảnh" class="form-control" value="{{ $home_default->alt_image_about ?? old('alt_image_about') }}">
			  </div>
			</div>
		  </div>

		  {{-- <div class="row mt-3">
			<div class="col-md-6">
			  <div class="form-group">
				<label for="title_button_about">Button Tiêu Đề</label>
				<input type="text" id="title_button_about" name="title_button_about" placeholder="Nhập button tiêu đề" class="form-control" value="{{ $home_default->title_button_about ?? old('title_button_about') }}">
			  </div>
			</div>

			<div class="col-md-6">
			  <div class="form-group">
				<label for="button_link_about">Button Đường Dẫn</label>
				<input type="text" id="button_link_about" name="button_link_about" placeholder="Nhập button đường dẫn" class="form-control" value="{{ $home_default->button_link_about ?? old('button_link_about') }}">
			  </div>
			</div>
		  </div> --}}

		</div>
		<!-- /.card-body -->
	  </div>
	  <!-- /.card -->
	</div>
	<!-- /.col -->
</div>
<!-- /.row -->