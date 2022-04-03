<h1>Thêm sinh viên</h1>

<form action="{{route('store')}}" method="post">
    @csrf
    Tên
    <input type="text" name="first_name">
    <br>
    Họ
    <input type="text" name="last_name">
    <br>
    Giới tính
    <input type="radio" name="gender" value="1">Nam
    <input type="radio" name="gender" value="0">Nữ
    <br>
    Ngày sinh
    <input type="date" name="date_of_birth">
    <br>
    <button>Thêm</button>



</form>
