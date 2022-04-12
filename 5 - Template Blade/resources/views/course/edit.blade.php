<body bgcolor="grey">
<form action="{{route('course.update', ['course' => $course->id])}}" method="post">
    @csrf
    @method('PUT')
    Tên
    <br>
    <input type="text" name="name" value="{{$course->name}}">
    @if ($errors->has('name'))
    <div>
        <span>
            {{$errors->first()}}
        </span>
    </div>
    @endif
    <br>
    <button>Sửa</button>
</form>
</body>
