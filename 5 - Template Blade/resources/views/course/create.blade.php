<body bgcolor="grey">
<form action="{{route('course.store')}}" method="post">
    @csrf
    Tên
    <br>
    <input type="text" name="name" value="{{old('name')}}">
    @if ($errors->has('name'))
        <span>
            {{$errors->first()}}
        </span>
    @endif
    <br>
    <button>Thêm</button>
</form>
</body>
