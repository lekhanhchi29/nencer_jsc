@extends('main')
@section('content')
    <div id="content">
        <div class="col-md-12">
            <h3>Quan ly kho: 
                <span class="txt-storage-name">Kho ở Ngọc Trục</span>
            </h3>
            <div class="clear-fix"></div>
            <form action="{{ url('/storages/update/' . $storage->id) }}" method="post" id="storage-form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col-md-3">
                        <label for="storage-name">Ten kho <span class="text-danger">*</span></label>
                        <input type="text" required class="form-control" name="name" value="{{ $storage->name }}">
                    </div>
                    <div class="col-md-3">
                        <label for="storage-name">Phi duy tri<span class="text-danger">*</span></label>
                        <input type="number" required class="form-control" name="cost" value="{{ $storage->cost }}" min="1">
                    </div>
                    <div class="col-md-3">
                        <br>
                        <button class="btn btn-primary">Chinh sua</button>
                    </div>
                </div>                   
            </form>
            <div class="col-md-12">
                <h4>Tong so don hang da xu ly: <strong>{{ $totalReceipted }}</strong></h4>
            </div>
            <div class="clear-fix"></div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <p>Cac don hang trong kho</p>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-4">
                        <form action="{{ url('/receipts/export') }}" method="get">
                            <div class="row">
                                <div class="col-md-7">
                                    <input type="date" required class="form-control" name="date">
                                </div>
                                <div class="col-md-5">
                                    <button class="btn btn-primary">Xuat don hang</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <form action="" method="post">
                                <td>#</td>
                                <td>Ten don hang</td>
                                <td>Danh muc</td>
                                <td>Tong chi phi</td>
                                <td>So san pham</td>
                                <td>Ngay giao</td>
                                <td>Ghi chu</td>
                                <td>Loai</td>
                                <td>Trang thai</td>
                                <td>Thao tac</td>
                            </form>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($receipts) > 0)
                        @foreach ($receipts as $receipt)
                        <tr>
                            <form action="{{ url('/receipts/update/' . $receipt->id ) }}" method="post">
                            <input type = "hidden" name="_token" value="{{ csrf_token() }}">
                            <td>{{ $receipt->id}}</td>
                            <td>{{ $receipt->name}}</td>
                            <td>{{ $receipt->category_name}}</td>
                            <td>{{ number_format($receipt->total_price)}}</td>
                            <td>{{ $receipt->quantity}}</td>
                            <td>{{ $receipt->delivery_date}}</td>
                            <td>{{ $receipt->note}}</td>
                            <td>{{ $receipt->type_txt}}</td>
                            <td>
                                <select name="status" class="form-control" id="">
                                    <option @if($receipt->status == 0) selected @endif value="0">Chưa xử lý</option>
                                    <option @if($receipt->status == 1) selected @endif value="1">Đã xử lý</option>
                                </select>
                            </td>
                            <td>
                                <button class="btn btn-primary">Cap nhat</button>
                            </td>
                            </form>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection