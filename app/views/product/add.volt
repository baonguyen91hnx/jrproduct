{% extends "global/full_layout.volt" %}
{% block title %}Mind Connect - Thêm Sản Phẩm Mới{% endblock %}
{% block content %}
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">Trang Chủ</a></li>
        <li class="active">Thêm Sản Phẩm Mới</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-offset-4 col-md-8">
        <h3>Tạo Mới Sản Phẩm</h3>
        <span>Vui Lòng Điền Đầy Đủ Thông Tin Bên Dưới</span>
    </div>
</div>
<div class="row">
    <form method="post" action="{{url('product/add')}}" enctype=”multipart/form-data”>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label>Tên Sản Phẩm</label>
                <input type="text" class="form-control" name="name" placeholder="Tên Sản Phẩm" />
            </div>
            <div class="form-group">
                <label>Giá</label>
                <input type="text" class="form-control" name="price" placeholder="Giá" />
            </div>
            <div class="form-group">
                <label>Giá</label>
                <input type="text" class="form-control" name="point" placeholder="Giá" />
            </div>
            <div class="form-group">
                <label>Trực Thuộc Cơ Sở</label>
                <select class="form-control" name="place_id">
                    {% for place in places %}
                        <option value="{{place.id}}">{{place.name}}</option>
                    {% endfor %}
                </select>
            </div>
            <div class="form-group">
                <label>Ảnh Đại Diện</label>
                <input type="file" name="feature_image"  />
            </div>
            <div class="form-group">
                <label>Ảnh Chi Tiết</label>
                <input type="file" name="galleries_image[]"  multiple/>
            </div>
        </div>
        <div class="col-md-12 col-md-offset-4">
            <button type="submit" class="btn btn-primary">Tạo Mới</button>
            <a href="{{url('place/index')}}" class="btn btn-default">Quay Lại</a>
        </div>

    </form>
</div>


{% endblock %}
