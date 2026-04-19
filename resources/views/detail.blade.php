<form action="{{ url('/category/update/' . $category->id) }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="name">Name </label>
    <input type="text" name="name" value="{{ $category->name}}">
    <br>
    <label for="name">Created at: {{ $category->created_at }}</label>
    <br>
    <label for="name">Updated at: {{ $category->updated_at }}</label>
    <br>
    <input type="submit" value="Cập nhật">
</form>
<br>
<a href="{{ url('/category/destroy/' . $category->id) }}">Xoá danh mục</a>