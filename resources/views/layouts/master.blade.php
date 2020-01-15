<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title","BikeShop | จำหน่ายอะไหล่จักรยานออนไลน์")</title>
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
</head>
<body>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">BikeShop</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ URL::to('product') }}">หน้าแรก</a></li>
                        <li><a href="{{ URL::to('product') }}">ข้อมูลสินค้า</a></li>
                        <li><a href="#">รายงาน</a></li>
                    </ul>
                </div>
            </div>
        </nav>@yield("content")

        <!-- js -->

        @if(session('msg'))
            @if(session('ok'))
            <script>toastr.success("{{session('msg')}}")</script>
            @endif
        @endif
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">
                    <strong>หัวข้อ</strong>
                </div>
            </div>
            <div class="panel-body">
            <table class="table table-bordered table-striped table-hover" >
            <thead>
                <tr>
                    <th>รหัสสินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <th>ราคาขาย</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>P001</td>
                    <td>ชุดจักรยาน ขนาด XL</td>
                    <td>2500.00</td>
                </tr>
                <tr>
                    <td>P002</td>
                    <td>หมวกกันน็อก รุ่น DL330</td>
                    <td>1500.00</td>
                </tr>
                <tr>
                    <td>P003</td>
                    <td>ชุดเกียร์ shimano รุ่น SH-001</td>
                    <td>4500.00</td>
                </tr>
                <tr>
                    <td>P0988793057</td>
                    <td>ชุดเกียร์ shimana มาแล้วนะจีะมาสิจ๊ะ จุ๊บๆ</td>
                    <td>1500.00 พี่ว่าไง</td>
                </tr>
            </tbody>
            </table>
            </div>
        </div>
        <div class="form-inline">
            <input type="text" class="form-control" placeholder="ชื่อผู้ใช้">   
            <input type="password" class="form-control" placeholder="รหัสผ่าน">
            <button class="btn btn-primary">เข้าระบบ</button>
        </div>
        
        <a href="#" class="btn btn-default"><i class="fa fa-home"></i> หน้าหลัก </a>
        <a href="#" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก </a>
        <a href="#" class="btn btn-info"><i class="fa fa-edit"></i> แก้ไข </a>
        <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> ลบ </a>
       
        </div>
 -->

</body>
</html>