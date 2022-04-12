@extends('layout.master')
@section('content')

<div class="card">

    <div class="card-body">
        <a href="{{route('course.create')}}" class="btn btn-success" >
            Thêm khóa học
        </a>
        <form class="float-right" >
            Search
            <input type="search" name="q" value="{{$search}}">
        </form>
        <table class="table table-striped">

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
                        <a href="{{route('course.edit', $course)}}" class="btn btn-primary">
                            Sửa
                        </a>
                    </td>
                    <td>
                        <form action="{{route('course.destroy', ['course' => $course->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        {{ $courses->links() }}
    </div>


</div>

@endsection()
