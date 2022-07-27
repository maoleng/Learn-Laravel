<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


# Route, Controller, View, 1 số Plugin của PHPStorm

## Route

- Tham số đầu tiên là `URL`
- Tham số thứ hai là `function`

**Có thể truyền tham số vào `URL` và nhận ở hàm**

```
Route::get('app/student/{id}', function($id) {
    echo $id;
});
```

**Tham số có thể có hoặc không**

```
Route::get('print/name/{name?}', function($name) {
    echo $name;
});
```
<br>

## Tạo `controller` bằng dòng lệnh

```
php artisan make:controller TestController
```
<br>

### Truyền tham số vào `URL`, và hiện ra ở File `view`
- Tham số hàm là tham số của tham số thứ 2 trong `Route::`
- Nội dung hàm là nội dung của hàm: tham số thứ 2 trong `Route::`
- Ở hàm route: đổi tham số thứ 2 là gọi tới hàm `func_hello` trong class `TestController`
- Thay vì ghi đường dẫn của class dài như này
```
[\App\Http\Controllers\TestController::class, 'func_hello']
```
- import ở đầu file
```
  use App\Http\Controllers\HelloController;
  [HomeController::class, 'func_hello']
```

- Tạo file view `Hello.php` nằm trong `resources/views/`
- Ở function `func_hello` trong class `TestController` trả về view `return view('Hello')`
- Tuy nhiên, ở laravel khác so với mvc oop thuần, biến trong controller sẽ không gọi được qua file view
- Vì vậy, phải truyền biến vào khi gọi file view
```
return view('Hello'. ['
    'tengido' => $ten,
    'tuoigido' => $tuoi
']);
```
- Để in ra ở file view: 
```
Hello {{$tengido}}, you are {{$tuoigido}}
```

## Truyền gì đó vào input, và hiện ra ở File view
- Ở file Route:
- URL ở trang chủ -> Gọi đến hàm `formInput` ở class `HelloController`
- FormInput: trả về view là 1 cái form
- `FormInput.blade.php`: (.blade giúp viết code php nhanh và gọn hơn)
- Để có thể truyền form dưới method `post` thì phải truyền kèm 1 đoạn token `csrf`
```
@csrf
//hoặc
<input type="text" value="<?php echo csrf_token() ?>" name="_token">
```
- Action nhảy tới url /postData
- Ở file route thêm 1 route khi url là `/postData`: nhảy tới hàm `postData` ở class `HelloController`
Lưu ý: Vì dữ liệu truyền lên ở phương thức `post` -> `Route::post`
Hàm `postData` ở file `HelloController`:
Tham số của hàm là 1 request: 
```
public function postData ( Request $request )
```
Lấy ra nội dung của dữ liệu đã truyền lên: 
```
$content = $request->get('keycuarequest')
```
Trả về 1 cái view hiển thị lên nội dung đó
Show.blade.php: ``{{$content}}``


# Plugin PHPStorm
- HighlightBracketPair
- Laravel
- Laravel Query
- Material Theme UI
- MultiHighlight
- Php inspections
- Tabnine
- Carbon now sh
