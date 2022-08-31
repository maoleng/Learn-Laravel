<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## View share
- Nghĩa là chia sẻ dữ liệu cho mọi view trả về của class nào đó
```
public function __construct()
{
  return View::share('title', 'Tiêu đề');
}
```

## Append Model
- Thêm thuộc tính vào model khi trả về
- Có 2 cách:
  - Thêm thuộc tính vào mọi lúc trả về
  ```
  protected $appends = ['links'];
  public function getLinksAttribute() { ... }
  ```
  - Thêm thuộc tính khi cần
  ```
  protected $appends = ['links'];
  $model->setAppends(['links']);
  ```
