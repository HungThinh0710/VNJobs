@extends('dashboard.admin.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản lý tổ chức</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Danh sách các tổ chức tuyển dụng</h5>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a class="dropdown-divider"></a>
                                        <a href="#" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 20px">Org_id</th>
                                    <th>Tên tổ chức</th>
                                    <th>Số tin tuyển dụng đã đăng tải</th>
                                    <th>Trạng thái</th>
                                    <th style="width: 250px">Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orgs as $org)
                                <tr>
                                    <td>{{$org->id}}</td>
                                    <td>{{$org->org_name}}</td>
                                    <td>
                                        @if($org->recruitment_news->count() > 0)
                                        Đã đăng {{$org->recruitment_news->count()}} bài tuyển dụng.
                                        @else
                                        Tổ chức này chưa đăng bài tuyển dụng nào
                                        @endif
                                    </td>
                                    <td>
                                        @if($org->is_verify == 0)
                                            <span class="badge bg-danger">Chưa xác thực - Không thể đăng tin</span>
                                        @else
                                            <span class="badge bg-success">Đã xác thực</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-info">Chi tiết</a>
                                        <a href="#" class="btn btn-warning">Khoá</a>
                                        <a href="#" class="btn btn-danger">Xoá</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pt-3">
                            {{ $orgs->links() }}

                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
