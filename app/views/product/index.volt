{% extends "global/full_layout.volt" %}
{% block title %}Mind Connect - Quản Lý Sản Phẩm{% endblock %}
{% block content %}
<div class="row">
    <div class="page-header">
        <h1>Trang Quản Lý Sản Phẩm </h1>
    </div>
    <ol class="breadcrumb">
        <li><a href="#">Trang Chủ</a></li>
        <li class="active">Quản Lý Sản Phẩm</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-4 ">
        <a href="{{url('product/add')}}" class="btn btn-primary" />Thêm Sản Phẩm Mới</a>
    </div>
    <div class="col-md-4 col-md-offset-4">
        <form class="form-inline" method="post" action="{{url('index/search/product')}}">
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
                    <td>Số Thự Tự</td>
                    <td>Sản Phẩm</td>
                    <td>Giá</td>
                    <td>Người Tạo</td>
                    <td>Cơ Sở</td>
                    <td>Ngày Tạo</td>
                    <td>Ngày Sửa</td>
                    <td>Hành Động</td>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>

    </div>

</div>

{% endblock %}
