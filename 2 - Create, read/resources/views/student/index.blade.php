<h1>Quản lí sinh viên</h1>
<a href="{{route('create')}}">
    Thêm
</a>

<br>
{{route('create')}}


<table border="1px solid black" width="100%">
    <tr>
        <th>#</th>
        <th>Tên sinh viên</th>
        <th>Giới tính</th>
        <th>Tuổi</th>
    </tr>

    @foreach($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->fullName}}</td>
        <td>{{$student->genderString}}</td>
        <td>{{$student->age}}</td>
    </tr>

    @endforeach


</table>
