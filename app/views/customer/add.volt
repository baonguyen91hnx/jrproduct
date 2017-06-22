{% extends "global/full_layout.volt" %}
{% block title %}Mind Connect - Thêm Khách Hàng Mới{% endblock %}
{% block content %}
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">Trang Chủ</a></li>
        <li class="active">Thêm Khách Hàng Mới</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-offset-4 col-md-8">
        <h3>Tạo Mới Khách Hàng</h3>
        <span>Vui Lòng Điền Đầy Đủ Thông Tin Bên Dưới</span>
    </div>
</div>
<div class="row">
    <form method="post" action="{{url('customer/add')}}">
        <div class="col-md-5 ">
            <h4>Thông Tin Chủ Thể</h4>
            <div class="form-group">
                <label>Tên Công Ty - Cá Nhân</label>
                <input class="form-control" type="text" name="display_name" placeholder="Tên Công Ty" />
            </div>
            <div class="form-group">
                <label>Địa Chỉ</label>
                <input class="form-control" type="text" name="address" placeholder="Địa Chỉ" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="email" name="company_email" placeholder="Email" />
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input class="form-control" type="text" name="company_phone" placeholder="Số Điện Thoại" />
            </div>
        </div>
        <div class="col-md-offset-1 col-md-5">
            <h4>Thông Tin Người Quản Trị</h4>
            <div class="form-group">
                <label>Tên Người Quản Trị</label>
                <input class="form-control" type="text" name="manager_name" placeholder="Tên Người Quản Trị" />
            </div>
            <div class="form-group">
                <label>Email Người Quản Trị</label>
                <input class="form-control" type="text" name="manager_email" placeholder="Tên Người Quản Trị" />
            </div>
            <div class="form-group">
                <label>Số Điện Thoại Người Quản Trị</label>
                <input class="form-control" type="text" name="manager_phone" placeholder="Tên Người Quản Trị" />
            </div>
            <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control" name="status">
                    <option value="0">Chưa Kích Hoạt</option>
                    <option value="1">Đã Kích Hoạt</option>
                    <option value="2">Tạm Ngưng</option>
                </select>
            </div>
        </div>
        <div class="col-md-12 col-md-offset-4">
            <button type="submit" class="btn btn-primary">Tạo Mới</button>
            <a href="{{url('role/index')}}" class="btn btn-default">Quay Lại</a>
        </div>

    </form>
</div>


{% endblock %}
