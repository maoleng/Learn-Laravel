<body bgcolor="grey">

<a href="{{route('course.create')}}">
    Thêm khóa học
</a>

<table border="1px solid black" width="100%">
    <caption>
        Search
        <form>
            <input type="search" name="q" value="{{$search}}">
        </form>
    </caption>
    <tr>
        <th>#</th>
        <th>Tên</th>
        <th>Ngày được tạo ra</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    @foreach ($courses as $course)
        <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->name}}</td>
            <td>{{$course->YearCreated}}</td>
            <td>
                <a href="{{route('course.edit', $course)}}">
                    Sửa
                </a>
            </td>
            <td>
                <form action="{{route('course.destroy', ['course' => $course->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button>Xóa</button>
                </form>
            </td>
        </tr>
    @endforeach

</table>
{{ $courses->links() }}

</body>
