<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Cài đặt package:
```
  composer require bensampo/laravel-enum
```

## Tạo Enum và sử dụng
- User có 3 quyền
  - Administrator = 0
  - Moderator = 1
  - Member = 2

- Tạo một Enum tên là UserRole để lưu các quyền của User
  ```
  php artisan make:enum UserRole
  ```
- Class UserRole:
  ```
  <?php
  namespace App\Enums;

  use BenSampo\Enum\Enum;

  final class UserRole extends Enum
  {
      #[Description('Quyền cao cấp nhất')] // Tạo mô tả cho enum
      const Administrator = 1;
      const Moderator = 2;
      const Member = 3;
  }
  ```
- Cách gọi 1 role ra
  ```
  UserRole::Administrator  // return 0
  ```

## Các phương thức hỗ trợ
- `getKeys()`: trả về một mảng chứa các key của Enum
```
UserRole::getKeys()   // return ['Administrator', 'Moderator', 'Member']
```

- `getDescription(string|int $value)` : trả về mô tả của Enum $value (giá trị trả về mặc định là key).
```
UserRole::getDescription(3); // Returns 'Member'
UserRole::getDescription(UserRole::Member); // Returns 'Member'
```

- `getValues()`: trả về một mảng chứa các giá trị của Enum
```
UserRole::getValues()   // return [1, 2, 3]
```

- `getKey(string|int $value)`: trả về key của Enum $value
```
UserRole::getKey(2); // Returns 'Moderator'
UserRole::getKey(UserRole::Moderator); // Returns 'Moderator'
```

- `getValue(string $key)`: trả về giá trị của Enum $key
```
UserRole::getValue('Administrator'); // Returns 1
```

- `toArray()`: Enum được trả về dưới dạng một mảng với key và value tương ứng
```
UserRole::toArray(); // Returns ['Administrator' => 1, 'Moderator' => 2, 'Member' => 3]
```

## Đa ngôn ngữ (Localization)
[https://github.com/BenSampo/laravel-enum](https://github.com/BenSampo/laravel-enum)
