<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


# Search, Paginate, Validation

## Search:
- Tạo 1 form search ở view.index, name=q
- Ở controller.index:
    1. Hàm index sẽ có tham số là `Request $request`
    2. Câu query lấy ra toàn bộ Course lúc này sẽ `where like $search` lấy từ `$request`
    3. Để không biến mất nội dung trên thanh search khi search: 
    `truyền search vào view và đổ ra ở input trong view.index`

## Paginate
- Tra docs: `database paginate`
- Ở controller.index:
    1. Câu query: `...->where(...)->paginate({số trang})`
    2. Để truyền theo request tìm kiếm khi chuyển trang:
    `$courses->appends(['q' => $search])`
	3. Ở view.index, để hiển thị ra nút chuyển trang:
    `{{$courses->links()}}`
    
## Validation
- Tra docs: database paginate
- Tạo file request để bắt lỗi validate form 
    `php artisan make:request Course/StoreRequest`
    1. File StoreRequest.php:
	    + Hàm authorize dùng để check login, tạm thời return true
	    + Hàm rules, là những luật của từng input trong form:
		```
        return [
            'name' => [
			   'bail', #Để chỉ hiển thị ra lỗi đầu tiên mắc phải
                'string',
                'required',
                'unique:App\Models\Course,name'
            ],
            'name2' => [
                'string',
                'required',
                'unique:App\Models\Course,name'
            ],
        ];
        ```
    2. Để hiển thị ra lỗi, copy trên docs paste ở file view.create
    3. Để chạy validate, ở hàm store, tham số truyền vào là StoreRequest
    4. Để đổi message báo lỗi, tạo hàm messages() ở StoreRequest.php
	```
    public function messages()
    {
        return [
            'required' => ':attribute bắt buộc điền' #attribute sẽ được hiểu là name của input
        ];
    }
    ```
    5. Để đổi attribute lúc hiển thị ra lỗi, tạo hàm attributes()
    ```
    public function attributes()
    {
        return [
           return ['name' => "tên"]
        ];
    }
    ```
    6. Hiển thị lại value của input vừa điền: 
    Đặt value của input là `old({tên input})`
    7. Phương thức của Request: `validated()`
    Hàm validated trả về 1 array là cặp key value trong form đã validate (validate ở hàm rule trong class StoreRequest)

## Bổ sung
- prepare for validation
- pass parameter to rule
