@extends($data->layout)

@section('title')
  {{ $data->title }}
@endsection

@section($data->content)
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ $data->title }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Trang Quản Trị</a></li>
              <li class="breadcrumb-item active">{{ $data->title }}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @php
      $popups = $data['popups'];
    @endphp

    <!-- Main content -->
    <section class="content">

      @include('backend.includes.search-form')

	  <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{ $data->title }}</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                        STT
                      </th>
                      <th>
                        Hình Đại Diện
                      </th>
                      <th>
                        Tên Đối Tác
                      </th>
                      <th>
                        Đường Dẫn
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($popups as $key => $popup)
                    @php
                      $images = $popup->images ?? asset('assets/admin/dist/img/no_image.png');
                    @endphp
                    <tr>
                      <td> {{ ($key + 1) }} </td>
                      <td> <img style="width:85px; margin: 0 auto" src="{{ $images }}"> </td>
                      <td>
                        <a href="{{ route('popup.edit',$popup->id) }}"> {{ $popup->name }} </a>
                      </td>
                      <td>
                        {{ $popup->link }}
                      </td>
                      <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm hide" href="{{ route('popup.show',$popup->id) }}">
                          <i class="fas fa-folder"></i> Xem
                        </a>
                        <a class="btn btn-info btn-sm" href="{{ route('popup.edit',$popup->id) }}">
                          <i class="fas fa-pencil-alt"></i> Sửa
                        </a>
                        <button type="button" class="btn btn-danger btn-sm deleteItemModal" data-toggle="modal" data-target="#modal-danger-delete" data-id="{{ $popup->id }}" data-url="admin/popup/{{ $popup->id }}">
                          <i class="fas fa-trash"></i> Xóa
                        </button>
                    </td>
                    </tr>
                  @endforeach

              </tbody>
          </table>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              {{ $popups->appends( request()->query() )->links() }}
            </ul>
          </nav>
        </div>
        <!-- /.card-footer -->

      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
