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
        $schema = $data['schema'];
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
                            Tên
                        </th>
                        <th>
                            Bài Viết
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($schema as $key => $item)
                        <tr>
                            <td> {{ ($key + 1) }} </td>
                            <td>
                                    <a href="{{ route('schema_post.edit',$item->id) }}"> {{ $item->headline }} </a>
                            </td>
                            <td>
                                <select class="form-control">
                                    @foreach($data['list_post'] as $key => $post)
                                        <option value="{{ $post->id }}" @if($item->id_post == $post->id) selected @endif> {{ $post->title }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{ route('schema_post.edit',$item->id) }}">
                                    <i class="fas fa-pencil-alt"></i> Sửa
                                </a>
                                <button type="button" class="btn btn-danger btn-sm deleteItemModal" data-toggle="modal" data-target="#modal-danger-delete" data-id="{{ $item->id }}" data-url="admin/schema_post/{{ $item->id }}">
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
                        {{ $schema->appends( request()->query() )->links() }}
                    </ul>
                </nav>
            </div>
            <!-- /.card-footer -->

        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
