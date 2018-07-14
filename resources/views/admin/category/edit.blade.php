<h2>Edit "{{ $category->name }}" Category</h2>

<form action="{{ url('admin/category/add') }}" method="post">
    @csrf
    Name : <input type="text" name="name"/><br/>
    <input type="submit" name="btnSave"/>
</form>