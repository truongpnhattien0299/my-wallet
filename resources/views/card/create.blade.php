@extends('layouts.default')

@section('title')
    <title>Tạo mới thẻ</title>
@endsection

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tạo thẻ</h4>
                <p class="card-description"> Tạo một thẻ </p>
                <form method="POST" action="{{ route('cards.store') }}" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Nhập số tiền</label>
                        <input type="number" name="amount" min="0" value="0" class="form-control" id="exampleInputEmail3"
                            placeholder="Số tiền">
                    </div>
                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" name="img" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer_script')
    <script src="{{ url('/assets/js/file-upload.js') }}"></script>
@endsection
