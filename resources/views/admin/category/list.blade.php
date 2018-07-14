<h2>Category List</h2>
<p>
    <a href="{{ url('admin/category/add') }}">Create Category</a>
</p>


<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach($list as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>
                <a href="{{ url('') }}"
            </td>
        </tr>

    @endforeach
</table>
