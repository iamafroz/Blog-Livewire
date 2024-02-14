{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>

<body>

    <form wire:submit.prevent="titleSearch">
        <input type="text" wire:model.live='search_title' placeholder="Search">
        <input type="submit">
            </form>
    <table>
        <thead>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>User</th>
            <th>Category</th>
        </thead>
        <tbody>
            @foreach ($search_result as $result)

            <tr>
                <td> {{ $result['title']}} </td>
                <td> {{ $result['description']}} </td>
                <td> {{ $result['image']}} </td>
                <td> {{ $result['user_id']}} </td>
                <td> {{ $result['category_id']}} </td>
            </tr>

            @endforeach

        </tbody>
    </table>
</body>

</html> --}}