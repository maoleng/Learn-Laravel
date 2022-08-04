<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


# Ốp giao diện:

## Chuẩn bị layout
- Xóa phần content của giao diện đi
- Copy phần còn lại cho vào file `resources/views/layout/master.blade.php`
- Lưu các file `css` và `js` vào `public/css` và `public/js`, nhúng ở file view bằng `asset('css/style.css')`
- Copy file font cùng thư mục với `css`, `js`
- Chia làm các phần như `sidebar`, `header`, `footer` nằm trong cùng thư mục với file `master`, file `master` `@include('tên file')` vào

## Sử dụng layout
- Ở file layout, tạo tên ở chỗ muốn nhúng vào: `@yield('tengido')`
- Ở file view khác, để sử dụng layout đó
	- Kế thừa layout đó: `@extends('layout.master')`
	- Nhúng từ đâu tới đâu: `@section('tengido')`  ...  `@endsection`

## Phân trang sử dụng boostrap
- Kích hoạt sử dụng boostrap, sau khi kích hoạt, có thể sử dụng các class của boostrap
`Search doc: pagination, mục Using boostrap`
