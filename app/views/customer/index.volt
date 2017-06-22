{% extends "global/full_layout.volt" %}
{% block title %}Mind Connect - Quản Lý Khách Hàng{% endblock %}
{% block content %}
<div class="row">
    <div class="page-header">
        <h1>Trang Quản Lý Khách Hàng</h1>
    </div>
    <ol class="breadcrumb">
        <li><a href="#">Trang Chủ</a></li>
        <li class="active">Quản Lý Khách Hàng</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-4 ">
        <a href="{{url('customer/add')}}" class="btn btn-primary" />Thêm Khách Hàng Mới</a>
    </div>
    <div class="col-md-4 col-md-offset-4">
        <form class="form-inline" method="post" action="{{url('index/search/customer')}}">
            <div class="form-group">
                <input type="text" class="form-control" id="search" placeholder="Tìm Kiếm">
            </div>
            <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
        </form>
    </div>
</div>
<div class="row">
    <div class="table-responsive">
        {% if customers is defined %}
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Số Thự Tự</td>
                        <td>Khách Hàng</td>
                        <td>Email</td>
                        <td>Phone</td>
                        <td>Người Tạo</td>
                        <td>Ngày Tạo</td>
                        <td>Ngày Sửa</td>
                        <td>Hành Động</td>
                    </tr>
                </thead>
                <tbody>
                    {% for customer in customers %}
                        <tr>
                            <td>{{customer.id}}</td>
                            <td>{{customer.display_name}}</td>
                            <td>{{customer.company_email}}</td>
                            <td>{{customer.company_phone}}</td>
                            <td>{{customer.users.name}}</td>
                            <td>{{date('d/m/Y',customer.created_time)}}</td>
                            <td>{{date('d/m/Y',customer.modified_time)}}</td>
                            <td>
                                <a href="{{url('customer/view/?id='~customer.id)}}" class="btn btn-success">Xem</a>
                                <a href="{{url('customer/edit/?id='~customer.id)}}" class="btn btn-primary">Sửa</a>
                                <a onclick="return confirm('Bạn có chắc chắn khi xóa đối tác này?');" href="{{url('customer/delete/?id='~customer.id)}}" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% else %}
            <p>Không Có dữ liệu</p>
        {% endif %}
    </div>

</div>

{% endblock %}
