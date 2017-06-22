{% extends "global/full_layout.volt" %}
{% block title %}Mind Connect - Thêm Chức Vụ Mới{% endblock %}
{% block content %}
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">Trang Chủ</a></li>
        <li class="active">Thêm Chức Vụ Mới</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-offset-4 col-md-8">
        <h3>Tạo Mới Thành Viên</h3>
        <span>Những Trường Đánh Dấu * là Bắt Buộc Phải Nhập</span>
    </div>
</div>
<div class="row">
    <div class="col-md-offset-2 col-md-8 ">
        <form method="post" action="{{url('role/add')}}" >
            <div class="form-group">
                <label>Tên Chức Vụ <span class="text-danger">*</span></label>
                <input type="text" name="name" placeholder="Tên Chức Vụ" class="form-control" />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Tạo Mới</button>
                <a href="{{url('role/index')}}" class="btn btn-default">Quay Lại</a>
            </div>
        </form>
    </div>
</div>


{% endblock %}
