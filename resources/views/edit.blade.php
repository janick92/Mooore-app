<!DOCTYPE html>
<html>
<head>
    <title>Items List</title>
</head>
<body>

    <form action="{{ route('update', ['id' => $item->id]) }}" method="PUT">
        @csrf
        <label>Stock:</label>
        <input type="text" name="stock" value="{{ $item->stock }}"><br>
        <button type="submit">Save Changes</button>
    </form>
</body>
