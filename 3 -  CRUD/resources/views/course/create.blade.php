<body bgcolor="grey">
<form action="{{route('course.store')}}" method="post">
    @csrf
    Tên
    <br>
    <input type="text" name="name">
    <br>
    <button>Thêm</button>
</form>
</body>
