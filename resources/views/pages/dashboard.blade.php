@extends("main")
@section("content")
<div id="content">
    <div id="total" class="col-md-12">
        <div class="row">
        <div id="order-shipping" class="box-total col-md-3">
            <h1>99</h1>
            <hr>
            <p>Tong so don hang dang van chuyen</p>
        </div>
        <div id="order-in-stock" class="box-total col-md-3">
            <h1>99</h1>
            <hr>
            <p>Tong so don nhap kho</p>
        </div>
        <div id="order-out-stock" class="box-total col-md-3">
            <h1>99</h1>
            <hr>
            <p>Tong so don xuat kho</p>
        </div>
        <div id="order-profit" class="box-total col-md-3">
            <h1>99</h1>
            <hr>
            <p>Ty xuat loi nhuan</p>
        </div>
        </div>
    </div>
    <!--Begin charts-->
    <div id="charts" class="col-md-12">
        <div class="row">
            <div id="areaExportInMonth" class="col-md-8">
                <h4 class="fs-5">Bieu do thong ke don nhap xuat theo thang</h4>
                <div class="col-md-12 d-flex">
                    <input type="datetime-local" id="txtChooseMonthForChart" class="form-control txt-choose-month me-2">
                    <button class="btn btn-primary">Thong ke</button>
                </div>
                <div class="clear-fix"></div>
                <div>
                    <canvas id="chartExportInMonth"></canvas>
                </div>
            </div>
            <div id="areaImportExportRatioMonth" class="col-md-4">
                <h4>Thog ke ti le giua nhap va xuat cua thang.</h4>
                <div class="col-md-12 d-flex">
                    <input type="datetime-local" id="txtChooseMonthForChart2" class="form-control txt-choose-month me-2">
                    <button class="btn btn-primary">Thong ke</button>
                </div>
                <div class="clear-fix"></div>
                <div>
                    <canvas id="chartImportExportRatio"></canvas>
                </div>
            </div>
            <div class="clear-fix"></div>
            <div id="areaChartInterestRate" class="col-md-7">
                <h4>Bieu do the hien lai xuat</h4>
                <div class="col-md-12 d-flex">
                    <input type="datetime-local" id="txtFromDateForChart3" class="form-control">
                    &nbsp;
                    <button class="btn btn-primary">Thong ke</button>
                </div>
                <div class="clearfix"></div>
                <div>
                    <canvas id="chartInterestRate"></canvas>
                </div>
            </div>    
            <div id="areaChartByCategory" class="col-md-5">
                <h4>Thong ke so luong san pham theo danh muc.</h4>
                <div class="clear-fix"></div>
                <div class="clear-fix"></div>
                <div>
                    <canvas id="chartByCategory"></canvas>
                </div>
                <p>- Thống kê theo các mốc thời gian, bạn có thể lựa chọn tùy ý.</p>
                <p>- Đối với biểu đồ thể hiện lãi suất sẽ thống kê theo 1 khoảng thời gian.</p>
                <p>- Đối với biểu đồ tổng số đơn hàng theo danh mục sẽ là tổng thời gian từ đầu đến cuối.</p>
            </div>
        </div>
    </div>
    <!--End charts-->
</div>
@endsection