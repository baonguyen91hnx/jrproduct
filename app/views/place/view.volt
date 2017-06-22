{% extends "global/full_layout.volt" %}
{% block title %}Mind Connect -  Cơ Sở - {{place.name}}{% endblock %}
{% block content %}
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">Trang Chủ</a></li>
        <li class="active">Cơ Sở - {{place.name}}</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-offset-4 col-md-8">
        <h3>Thông Tin Cơ Sở - {{place.name}}</h3>

    </div>
</div>

<div class="row">
    <div class="col-md-7 ">
        <div class="panel panel-danger">
            <div class="panel-heading"><h4>Thông Tin Cơ Sở</h4></div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Tên Cơ Sở</td>
                                <td>{{place.name}}</td>
                            </tr>
                            <tr>
                                <td>Dịa Chỉ</td>
                                <td>{{place.address}}</td>
                            </tr>
                            <tr>
                                <td>Thuộc Đơn Vị</td>
                                <td>{{place.customers.display_name}}</td>
                            </tr>
                            <tr>
                                <td>Người Tạo</td>
                                <td>{{place.users.name}}</td>
                            </tr>
                            <tr>
                                <td>Ngày Tạo</td>
                                <td>{{date('H:i:s d/m/Y',place.created_time)}}</td>
                            </tr>
                            <tr>
                                <td>Ngày Sửa</td>
                                <td>{{date('H:i:s d/m/Y',place.modified_time)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button class="btn btn-default">Quay Lại</button>
                <button class="btn btn-primary" href="{{url('place/edit/?id='~place.id)}}">Chỉnh Sửa</button>
            </div>
        </div>



    </div>
    <div class="col-md-3 col-md-offset-1  ">
        <div class="panel panel-success">
            <div class="panel-heading"><h4>Tác Vụ Cơ Sở</h4></div>
            <div class="panel-body">
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        Lấy Thống Kê Doanh Số
                    </a>
                    <a href="#" class="list-group-item">Lấy Thống Kê Khách Hàng</a>
                    <a href="#" class="list-group-item">Lấy Thống Kê Theo Mặt Hàng</a>
                    <a href="#" class="list-group-item">Lịch Sử Giao Dịch</a>
                </div>
            </div>
        </div>
    </div>

</div>




{% endblock %}
