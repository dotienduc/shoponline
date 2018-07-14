<h2>Color List</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Product_id</th>
    </tr>
    @foreach($list as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->color }}</td>
            <td>{{ $item->product_id }}</td>
        </tr>

    @endforeach
</table>