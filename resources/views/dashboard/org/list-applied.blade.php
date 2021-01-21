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
                                        <th style="width: 20px">User_id</th>
                                        <th>Họ và Tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>CV</th>
                                        <th>Kinh nghiệm</th>
                                        <th>Trạng thái</th>
                                        <th style="width: 280px">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jobSeekers as $jobSeeker)
                                        <tr>
                                            <td>{{$jobSeeker->id}}</td>
                                            <td>{{$jobSeeker->first_name}} {{$jobSeeker->last_name}}</td>
                                            <td>{{$jobSeeker->dob}}</td>
                                            <td>{{$jobSeeker->phone}}</td>
                                            <td>{{$jobSeeker->email}}</td>
                                            <td>
                                                @if($jobSeeker->pivot->cv_path != '')
                                                    <span class="badge bg-success">{{$jobSeeker->pivot->cv_path}}</span>
                                                @else
                                                    <span class="badge bg-danger">Người dùng không gửi CV</span>
                                                @endif
                                            </td>
                                            <td>{{$jobSeeker->pivot->exp_years}} năm</td>
{{--                                            <td>{{$jobSeeker->pivot->is_elect}}</td>--}}
                                            <td>
                                                @if($jobSeeker->pivot->is_elect)
                                                    <span class="badge bg-success">Đã được chấp nhận</span>
                                                @else
                                                    <span class="badge bg-warning">Đang chờ</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-success">Đậu</a>
                                                <a href="#" class="btn btn-primary">Rớt</a>
                                                <a href="#" class="btn btn-info">Chi tiết</a>
                                                <a href="#" class="btn btn-danger">Xoá</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="pt-3">
{{--                                    {{ $jobSeekers->links() }}--}}

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
