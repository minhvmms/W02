{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layout.master')

{{-- Đặt title cho page --}}
@section('title', 'Trang chủ')

{{-- Đặt file css cho page --}}
@section('file', 'home-page')

{{-- Đặt class cho body --}}
@section('page', 'home-page')

@section('content')
    <main class="main">
        <div>
            <img src="./images/BANNER1366.png" class="w-100"/>
        </div>
        <div class="container">
            <div>
                <h4 class="mt-5">XU HƯỚNG TÌM KIẾM</h4>
                <div class="row">
                    <div class="col-2">
                        <img src="./images/vongco.png"/>
                        <p class="col-sm-6">Vòng cổ</p>
                    </div>
                    <div class="col-2">
                        <img src="./images/khuyentai.png"/>
                        <p class="col-sm-6">Khuyên tai</p>
                    </div>
                    <div class="col-2">
                        <img src="./images/nhan.png"/>
                        <p>Nhẫn</p>
                    </div>
                    <div class="col-2">
                        <img src="./images/vongtay.png"/>
                        <p>Vòng tay</p>
                    </div>
                    <div class="col-2">
                        <img src="./images/trangsuckimcuong.png"/>
                        <p>Trang sức kim cương</p>
                    </div>
                    <div class="col-2">
                        <img src="./images/nhancuoi.png"/>
                        <p>Nhẫn cưới</p>
                    </div>
                </div>
            </div>

            <div>
                <h4>BỘ SƯU TẬP MỚI</h4>
                <div class="row">
                    <div class="col-5" >
                        <img src="./images/Bannerbstm.png"/>
                    </div>
                    <div class="col-7" >
                        <div class="row">
                            <div class="col-4">
                                <img src="./images/bstmnhanvangFW22.png"/>
                                <p>NEW</p>
                                <p>Nhẫn vàng FW22</p>
                                <p>8.090.000đ</p>
                            </div>
                            <div class="col-4">
                                <img src="./images/bstmnhanvanglacay.png"/>
                                <p>NEW</p>
                                <p>Nhẫn vàng lá cây</p>
                                <p>2.100.000đ</p>
                            </div>
                            <div class="col-4">
                                <img src="./images/bstmnhankimcuong.png"/>
                                <p>NEW</p>
                                <p>Nhẫn kim cương G1</p>
                                <p>6.450.000đ</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-dark">XEM THÊM</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <div>
                    <img src="./images/Bannertskc.png"/>
                </div>
                <h4 class="text-center mt-4">TRANG SỨC KIM CƯƠNG</h4>
                <div class="row">
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/tskcnhanladanxen.png"/>
                        <p>Nhẫn lá đan xen nhau</p>
                        <p>3.250.000đ</p>
                    </div>
                    <div class="col">
                        <p>Sale</p>
                        <img src="./images/tskcnhanlakethinh.png"/>
                        <p>Nhẫn lá kết hình</p>
                        <p>750.000đ</p>
                        <span>890.000đ</span>
                    </div>
                    <div class="col">
                        <p>Hot</p>
                        <img src="./images/tskckhuyentaihinhT.png"/>
                        <p>Khuyên tai hình T</p>
                        <p>890.000đ</p>
                    </div>
                    <div class="col">
                        <p>Hết hàng</p>
                        <img src="./images/tskcnhanhinhdaucong.png"/>
                        <p>Nhẫn hình dấu cộng</p>
                        <p>4.210.000đ</p>
                    </div>
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/tskckhuyentaikimcuong.png"/>
                        <p>Khuyên tai kim cương</p>
                        <p>Liên hệ</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-dark">XEM THÊM</button>
                </div>
            </div>

            <div class="mt-5">
                <img src="./images/Bannertscuoi.png"/>
                <h4 class="text-center mt-4">TRANG SỨC CƯỚI</h4>
                <div class="row">
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/muitentrai.svg"/>
                        <img src="./images/tskcnhanladanxen.png"/>
                        <p>Nhẫn lá đan xen nhau</p>
                        <p>3.250.000đ</p>
                    </div>
                    <div class="col">
                        <p>Sale</p>
                        <img src="./images/tskcnhanlakethinh.png"/>
                        <p>Nhẫn lá kết hình</p>
                        <p>750.000đ</p>
                        <p>890.000đ</p>
                    </div>
                    <div class="col">
                        <p>Hot</p>
                        <img src="./images/tskckhuyentaihinhT.png"/>
                        <p>Khuyên tai hình T</p>
                        <p>890.000đ</p>
                    </div>
                    <div class="col">
                        <p>Hết hàng</p>
                        <img src="./images/tskcnhanhinhdaucong.png"/>
                        <p>Nhẫn hình dấu cộng</p>
                        <p>4.210.000đ</p>
                    </div>
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/tskckhuyentaikimcuong.png"/>
                        <p>Khuyên tai kim cương</p>
                        <p>Liên hệ</p>
                        <img src="./images/muitenphai.svg"/>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-dark">XEM THÊM</button>
                </div>
            </div>

            <div class="mt-5">
                <img src="./images/tspt.png"/>
                <h4 class="text-center mt-4">TRANG SỨC PHONG THỦY</h4>
                <div class="row">
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/muitentrai.svg"/>
                        <img src="./images/tskcnhanladanxen.png"/>
                        <p>Nhẫn lá đan xen nhau</p>
                        <p>3.250.000đ</p>
                    </div>
                    <div class="col">
                        <p>Sale</p>
                        <img src="./images/tskcnhanlakethinh.png"/>
                        <p>Nhẫn lá kết hình</p>
                        <span>750.000đ</span>
                        <span>890.000đ</span>
                    </div>
                    <div class="col">
                        <p>Hot</p>
                        <img src="./images/tskckhuyentaihinhT.png"/>
                        <p>Khuyên tai hình T</p>
                        <p>890.000đ</p>
                    </div>
                    <div class="col">
                        <p>Hết hàng</p>
                        <img src="./images/tskcnhanhinhdaucong.png"/>
                        <p>Nhẫn hình dấu cộng</p>
                        <p>4.210.000đ</p>
                    </div>
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/tskckhuyentaikimcuong.png"/>
                        <p>Khuyên tai kim cương</p>
                        <p>Liên hệ</p>
                        <img src="./images/muitenphai.svg"/>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-dark">XEM THÊM</button>
                </div>
            </div>

            <div class="mt-5">
                <img src="./images/bannertspt.png"/>
                <h4 class="text-center mt-4">TRANG SỨC ĐÁ QUÝ</h4>
                <div class="row">
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/muitentrai.svg"/>
                        <img src="./images/tskcnhanladanxen.png"/>
                        <p>Nhẫn lá đan xen nhau</p>
                        <p>3.250.000đ</p>
                    </div>
                    <div class="col">
                        <p>Sale</p>
                        <img src="./images/tskcnhanlakethinh.png"/>
                        <p>Nhẫn lá kết hình</p>
                        <span>750.000đ</span>
                        <span>890.000đ</span>
                    </div>
                    <div class="col">
                        <p>Hot</p>
                        <img src="./images/tskckhuyentaihinhT.png"/>
                        <p>Khuyên tai hình T</p>
                        <p>890.000đ</p>
                    </div>
                    <div class="col">
                        <p>Hết hàng</p>
                        <img src="./images/tskcnhanhinhdaucong.png"/>
                        <p>Nhẫn hình dấu cộng</p>
                        <p>4.210.000đ</p>
                    </div>
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/tskckhuyentaikimcuong.png"/>
                        <p>Khuyên tai kim cương</p>
                        <p>Liên hệ</p>
                        <img src="./images/muitenphai.svg"/>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-dark">XEM THÊM</button>
                </div>
            </div>

            <div class="mt-5">
                <img src="./images/bannertsecz.png"/>
                <h4 class="text-center mt-4">TRANG SỨC ECZ</h4>
                <div class="row">
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/muitentrai.svg"/>
                        <img src="./images/tskcnhanladanxen.png"/>
                        <p>Nhẫn lá đan xen nhau</p>
                        <p>3.250.000đ</p>
                    </div>
                    <div class="col">
                        <p>Sale</p>
                        <img src="./images/tskcnhanlakethinh.png"/>
                        <p>Nhẫn lá kết hình</p>
                        <span>750.000đ</span>
                        <span>890.000đ</span>
                    </div>
                    <div class="col">
                        <p>Hot</p>
                        <img src="./images/tskckhuyentaihinhT.png"/>
                        <p>Khuyên tai hình T</p>
                        <p>890.000đ</p>
                    </div>
                    <div class="col">
                        <p>Hết hàng</p>
                        <img src="./images/tskcnhanhinhdaucong.png"/>
                        <p>Nhẫn hình dấu cộng</p>
                        <p>4.210.000đ</p>
                    </div>
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/tskckhuyentaikimcuong.png"/>
                        <p>Khuyên tai kim cương</p>
                        <p>Liên hệ</p>
                        <img src="./images/muitenphai.svg"/>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-dark">XEM THÊM</button>
                </div>
            </div>

            <div class="mt-5">
                <img src="./images/bannertsvy.png"/>
                <h4 class="text-center mt-4">TRANG SỨC VÀNG Ý</h4>
                <div class="row">
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/muitentrai.svg"/>
                        <img src="./images/tskcnhanladanxen.png"/>
                        <p>Nhẫn lá đan xen nhau</p>
                        <p>3.250.000đ</p>
                    </div>
                    <div class="col">
                        <p>Sale</p>
                        <img src="./images/tskcnhanlakethinh.png"/>
                        <p>Nhẫn lá kết hình</p>
                        <span>750.000đ</span>
                        <span>890.000đ</span>
                    </div>
                    <div class="col">
                        <p>Hot</p>
                        <img src="./images/tskckhuyentaihinhT.png"/>
                        <p>Khuyên tai hình T</p>
                        <p>890.000đ</p>
                    </div>
                    <div class="col">
                        <p>Hết hàng</p>
                        <img src="./images/tskcnhanhinhdaucong.png"/>
                        <p>Nhẫn hình dấu cộng</p>
                        <p>4.210.000đ</p>
                    </div>
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/tskckhuyentaikimcuong.png"/>
                        <p>Khuyên tai kim cương</p>
                        <p>Liên hệ</p>
                        <img src="./images/muitenphai.svg"/>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-dark">XEM THÊM</button>
                </div>
            </div>

            <div class="mt-5">
                <img src="./images/bannertstb.png" />
                <h4 class="text-center mt-4">TRANG SỨC THIÊN BÌNH</h4>
                <div class="row">
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/muitentrai.svg"/>
                        <img src="./images/tskcnhanladanxen.png"/>
                        <p>Nhẫn lá đan xen nhau</p>
                        <p>3.250.000đ</p>
                    </div>
                    <div class="col">
                        <p>Sale</p>
                        <img src="./images/tskcnhanlakethinh.png"/>
                        <p>Nhẫn lá kết hình</p>
                        <span>750.000đ</span>
                        <span>890.000đ</span>
                    </div>
                    <div class="col">
                        <p>Hot</p>
                        <img src="./images/tskckhuyentaihinhT.png"/>
                        <p>Khuyên tai hình T</p>
                        <p>890.000đ</p>
                    </div>
                    <div class="col">
                        <p>Hết hàng</p>
                        <img src="./images/tskcnhanhinhdaucong.png"/>
                        <p>Nhẫn hình dấu cộng</p>
                        <p>4.210.000đ</p>
                    </div>
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/tskckhuyentaikimcuong.png"/>
                        <p>Khuyên tai kim cương</p>
                        <p>Liên hệ</p>
                        <img src="./images/muitenphai.svg" />
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-dark">XEM THÊM</button>
                </div>
            </div>

            <div class="mt-5">
                <img src="./images/bannertsdm.png">
                <h4 class="text-center mt-4">SẢN PHẨM DISNEY</h4>
                <div class="row">
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/muitentrai.svg"/>
                        <img src="./images/tskcnhanladanxen.png"/>
                        <p>Nhẫn lá đan xen nhau</p>
                        <p>3.250.000đ</p>
                    </div>
                    <div class="col">
                        <p>Sale</p>
                        <img src="./images/tskcnhanlakethinh.png"/>
                        <p>Nhẫn lá kết hình</p>
                        <span>750.000đ</span>
                        <span>890.000đ</span>
                    </div>
                    <div class="col">
                        <p>Hot</p>
                        <img src="./images/tskckhuyentaihinhT.png"/>
                        <p>Khuyên tai hình T</p>
                        <p>890.000đ</p>
                    </div>
                    <div class="col">
                        <p>Hết hàng</p>
                        <img src="./images/tskcnhanhinhdaucong.png"/>
                        <p>Nhẫn hình dấu cộng</p>
                        <p>4.210.000đ</p>
                    </div>
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/tskckhuyentaikimcuong.png"/>
                        <p>Khuyên tai kim cương</p>
                        <p>Liên hệ</p>
                        <img src="./images/muitenphai.svg" />
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-dark">XEM THÊM</button>
                </div>

                <h4 class="text-center mt-4">CÓ THỂ BẠN THÍCH</h4>
                <div class="row">
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/muitentrai.svg"/>
                        <img src="./images/tskcnhanladanxen.png"/>
                        <p>Nhẫn lá đan xen nhau</p>
                        <p>3.250.000đ</p>
                    </div>
                    <div class="col">
                        <p>Sale</p>
                        <img src="./images/tskcnhanlakethinh.png"/>
                        <p>Nhẫn lá kết hình</p>
                        <span>750.000đ</span>
                        <span>890.000đ</span>
                    </div>
                    <div class="col">
                        <p>Hot</p>
                        <img src="./images/tskckhuyentaihinhT.png"/>
                        <p>Khuyên tai hình T</p>
                        <p>890.000đ</p>
                    </div>
                    <div class="col">
                        <p>Hết hàng</p>
                        <img src="./images/tskcnhanhinhdaucong.png"/>
                        <p>Nhẫn hình dấu cộng</p>
                        <p>4.210.000đ</p>
                    </div>
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/tskckhuyentaikimcuong.png"/>
                        <p>Khuyên tai kim cương</p>
                        <p>Liên hệ</p>
                        <img src="./images/muitenphai.svg" />
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <img src="./images/bannertspt.png"/>
                <h4 class="text-center mt-4">THIẾT KẾ BỞI VMMS</h4>
                <div class="row">
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/muitentrai.svg"/>
                        <img src="./images/tskcnhanladanxen.png"/>
                        <p>Nhẫn lá đan xen nhau</p>
                        <p>3.250.000đ</p>
                    </div>
                    <div class="col">
                        <p>Sale</p>
                        <img src="./images/tskcnhanlakethinh.png"/>
                        <p>Nhẫn lá kết hình</p>
                        <span>750.000đ</span>
                        <span>890.000đ</span>
                    </div>
                    <div class="col">
                        <p>Hot</p>
                        <img src="./images/tskckhuyentaihinhT.png"/>
                        <p>Khuyên tai hình T</p>
                        <p>890.000đ</p>
                    </div>
                    <div class="col">
                        <p>Hết hàng</p>
                        <img src="./images/tskcnhanhinhdaucong.png"/>
                        <p>Nhẫn hình dấu cộng</p>
                        <p>4.210.000đ</p>
                    </div>
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/tskckhuyentaikimcuong.png"/>
                        <p>Khuyên tai kim cương</p>
                        <p>Liên hệ</p>
                        <img src="./images/muitenphai.svg" />
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-dark">XEM THÊM</button>
                </div>
            </div>

            <div class="mt-5">
                <img src="./images/bannerdh.png"/>
                <h4 class="text-center mt-4">ĐỒNG HỒ</h4>
                <div class="row">
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/muitentrai.svg"/>
                        <img src="./images/tskcnhanladanxen.png"/>
                        <p>Nhẫn lá đan xen nhau</p>
                        <p>3.250.000đ</p>
                    </div>
                    <div class="col">
                        <p>Sale</p>
                        <img src="./images/tskcnhanlakethinh.png"/>
                        <p>Nhẫn lá kết hình</p>
                        <span>750.000đ</span>
                        <span>890.000đ</span>
                    </div>
                    <div class="col">
                        <p>Hot</p>
                        <img src="./images/tskckhuyentaihinhT.png"/>
                        <p>Khuyên tai hình T</p>
                        <p>890.000đ</p>
                    </div>
                    <div class="col">
                        <p>Hết hàng</p>
                        <img src="./images/tskcnhanhinhdaucong.png"/>
                        <p>Nhẫn hình dấu cộng</p>
                        <p>4.210.000đ</p>
                    </div>
                    <div class="col">
                        <p>NEW</p>
                        <img src="./images/tskckhuyentaikimcuong.png"/>
                        <p>Khuyên tai kim cương</p>
                        <p>Liên hệ</p>
                        <img src="./images/muitenphai.svg" />
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-dark">XEM THÊM</button>
                </div>
            </div>
    </main>
@endsection
