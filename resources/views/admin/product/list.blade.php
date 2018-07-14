<h2>Product list</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Category_id</th>
        <th>Brand_id</th>
        <th>Inventory Number</th>
    </tr>
    @foreach($list as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->category_id }}</td>
            <td>{{ $item->brand_id }}</td>
            <td>{{ $item->InventoryNumber }}</td>
        </tr>

    @endforeach
</table>
