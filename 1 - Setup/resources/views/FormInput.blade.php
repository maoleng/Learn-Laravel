<form action="postData" method="post">
    @csrf
    Nhập vào nội dung
    <br>
    <input type="text" name="something" value="{{$default}}">
    <br>
    <button>Nhập</button>
</form>
