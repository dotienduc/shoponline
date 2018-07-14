<h2>Image list</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Product_id</th>
        <th>Slide_id</th>
    </tr>
    @foreach($list as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->product_id }}</td>
            <td>{{ $item->slide_id }}</td>
        </tr>
        @endforeach
</table>