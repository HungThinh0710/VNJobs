@extends('dashboard.org.master')

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
                                        <th style="width: 20px">News_id</th>
                                        <th>Tên tổ chức</th>
                                        <th>Tiêu đề</th>
                                        <th>Loại hình</th>
                                        <th>Thời gian tuyển</th>
                                        <th>Thới gian kết thúc</th>
                                        <th>Thành phố</th>
                                        <th style="width: 350px">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($recruitments as $recruitment)
                                        <tr>
                                            <td>{{$recruitment->id}}</td>
                                            <td>{{$recruitment->title}}</td>
                                            <td>{{$recruitment->org->org_name}}</td>
                                            <td>{{$recruitment->work_type}}</td>
                                            <td>{{$recruitment->start_time}}</td>
                                            <td>{{$recruitment->end_time}}</td>
                                            <td>{{$recruitment->city}}</td>
                                            <td>
                                                <a href="#" class="btn btn-info">Chi tiết</a>
                                                <a href="{{route('org_show_jobseekers', $recruitment->id)}}" class="btn btn-primary">Danh sách ứng tuyến</a>
                                                <a href="#" class="btn btn-danger">Xoá</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="pt-3">
                                    {{ $recruitments->links() }}

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
