@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page_title_box d-flex align-items-center justify-content-between">
            <div class="page_title_left">
                <h3 class="f_s_30 f_w_700 text_white">Dashboard</h3>
                <ol class="breadcrumb page_bradcam mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Salessa </a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Sales</li>
                </ol>
            </div>
            <a href="#" class="white_btn3">Create Report</a>
        </div>
    </div>
</div>
<div class="row ">
    <div class="mt-5 ">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Thống kê</th>
                    <th>Số lượng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <h1>Tổng số lượng danh mục là: </h1>
                        <h1>Tổng số lượng sản phẩm là: </h1>
                        <h1>Tổng số lượng người dùng là: </h1>
                    </td>
                    <td>
                        <h1>{{ $countCa }}</h1>
                        <h1>{{ $countsp }}</h1>
                        <h1>{{ $countuser }}</h1>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection