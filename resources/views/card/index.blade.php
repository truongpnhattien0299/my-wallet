@extends('layouts.default')
@section('title')
    <title>Loại thẻ</title>
@endsection

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Loại thẻ</h4>
                <span class="card-description"> Danh sách các loại thẻ</span>
                <a href="{{ route('cards.create') }}" class="btn btn-gradient-info" style="float: right">New</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Name </th>
                            <th> Amount </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($card as $item)
                            <tr>
                                <td class="py-1">
                                    <img src="{{ $item->logo }}" alt="Logo {{ $item->name }}" />
                                </td>
                                <td> {{ $item->name }} </td>
                                <td> {{ number_format($item->amount) }} VNĐ </td>
                                <td> {{ $item->updated_at }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
