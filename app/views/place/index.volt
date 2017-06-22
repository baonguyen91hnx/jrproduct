{% extends "global/full_layout.volt" %}
{% block title %}Mind Connect - Quản Lý Sản Phẩm{% endblock %}
{% block content %}
<div class="row">
    <div class="page-header">
        <h1>Trang Quản Lý Cơ Sở</h1>
    </div>
    <ol class="breadcrumb">
        <li><a href="#">Trang Chủ</a></li>
        <li class="active">Quản Lý Cơ Sở</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-4 ">
        <a href="{{url('place/add')}}" class="btn btn-primary" />Thêm Cơ Sở Mới</a>
    </div>
    <div class="col-md-4 col-md-offset-4">
        <form class="form-inline" method="post" action="{{url('index/search/place')}}">
            <div class="form-group">
                <input type="text" class="form-control" id="search" placeholder="Tìm Kiếm">
            </div>
            <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
        </form>
    </div>
</div>
<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Cơ Sở</td>
                    <td>Trực Thuộc Đơn Vị</td>
                    <td>Người Tạo</td>
                    <td>Ngày Tạo</td>
                    <td>Ngày Sửa</td>
                    <td>Hành Động</td>
                </tr>
            </thead>
            <tbody>
                {% if places is defined %}
                    {% for place in places %}
                    <tr>
                        <td>{{place.id}}</td>
                        <td>{{place.name}}</td>
                        <td>{{place.customers.display_name}}</td>
                        <td>{{place.users.name}}</td>
                        <td>{{ date('H:i:s d/m/Y',place.created_time)}}</td>
                        <td>{{ date('H:i:s d/m/Y',place.created_time)}}</td>
                        <td>
                            <a href="{{url('place/view/?id='~place.id)}}" class="btn btn-success">Xem</a>
                            <a href="{{url('place/edit/?id='~place.id)}}" class="btn btn-primary">Sửa</a>
                            <a onclick="return confirm('Bạn có chắc chắn khi xóa cơ sở này?');" href="{{url('place/edit/?id='~place.id)}}" href="" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                    {% endfor %}
                {% else %}
                    <p>Không Tìm Thấy Dữ Liệu</p>
                {% endif %}
            </tbody>
        </table>

    </div>

</div>

{% endblock %}
