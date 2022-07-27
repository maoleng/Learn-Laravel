<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


# Run Laravel code from internet, debugbar, migration & eloquent, name route

## Chạy code Laravel trên mạng kéo về:

- Copy file `.env.example` thành file `.env`
- `composer update`
- `php artisan key:generate`
- `php artisan cache:clear`
- `php artisan config:clear`

**Cài laravel debug bar**
- `composer require barryvdh/laravel-debugbar --dev`

**Không tạo db bằng phần mêm quản lí db -> Tạo db bằng code**
- Tạo migration: `php artisan make:migration create_flights_table`
- Tạo db bằng code: `php artisan migrate`

**Tạo Eloquent, Controller**
- Tạo model: `php artisan make:model Student`
- Tạo controller: `php artisan make:controller StudentController`
- `Hàm index` trong file Controller
```
    #gọi tới đối tượng student đã được nhúng và dùng hàm all để lấy ra toàn bộ sinh viên
    #mỗi sinh viên là 1 đối tượng
$students = Student::all()
    #Trả về view để hiển thị ra
return view(student.index)
```
<br>

## Tạo thuộc tính cho model Student
- Search doc: eloquent mutator (Tạo các thuộc tính như lấy tuổi, giới tính, họ tên; Sau đó gọi ra ở file view index)

## Hàm route()
- Hàm route('name') với tham số là tên của route, tên này lấy từ file route
- Hàm này trả về URL tới route đó
