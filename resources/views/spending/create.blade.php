@extends('layouts.default')

@section('title')
    <title>Tạo chi tiêu</title>
@endsection

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tạo chi tiêu</h4>
                <p class="card-description"> Tạo một chi tiêu trong ngày </p>
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputName1">Chọn ngày</label>
                        <input type="date" name="date" class="date form-control" id="exampleInputName1"
                            value="{{ date_format(\Carbon\Carbon::now(), 'Y-m-d') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Loại tài khoản</label>
                        <select class="form-control" id="exampleSelectGender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Nhập số tiền</label>
                        <input type="number" name="amount" min="0" value="0" class="form-control" id="exampleInputEmail3"
                            placeholder="Số tiền">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Ghi chú</label>
                        <textarea name="notes" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
