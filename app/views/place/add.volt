{% extends "global/full_layout.volt" %}
{% block title %}Mind Connect - Thêm Cơ Sở Mới{% endblock %}
{% block content %}
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">Trang Chủ</a></li>
        <li class="active">Thêm Cơ Sở Mới</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-offset-4 col-md-8">
        <h3>Tạo Mới Cơ Sở</h3>
        <span>Vui Lòng Điền Đầy Đủ Thông Tin Bên Dưới</span>
    </div>
</div>
<div class="row">
    <form method="post" action="{{url('place/add')}}">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label>Tên Cơ Sở</label>
                <input type="text" class="form-control" name="name" placeholder="Tên Cơ Sở" />
            </div>
            <div class="form-group">
                <label>Địa Chỉ</label>
                <input type="text" class="form-control" name="address" placeholder="Địa Chỉ" />
            </div>
            <div class="form-group">
                <label>Trực Thuộc Đơn Vị</label>
                <select class="form-control" name="slam_id">
                    {% for slam in slams %}
                        <option value="{{slam.id}}">{{slam.display_name}}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <div class="col-md-12 col-md-offset-4">
            <button type="submit" class="btn btn-primary">Tạo Mới</button>
            <a href="{{url('place/index')}}" class="btn btn-default">Quay Lại</a>
        </div>

    </form>
</div>


{% endblock %}
