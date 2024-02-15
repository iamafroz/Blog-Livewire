<div>
    {{-- <form wire:submit.prevent=""> --}}
        <input type="text" wire:model.live='search_title' placeholder="Search">
         {{-- <input type="submit"> --}}
        <div>@error('search_title') {{ $message }} @enderror</div>

            {{-- </form>  --}}
    <table class="border ">
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
                <td><img src="{{ asset('../storage/upload/'. $result['image']) }} "  class="w-10 h-10" alt=""> </td>
                <td> {{ $result['user_id']}} </td>
                <td> {{ $result['category_id']}} </td>
            </tr>

            @endforeach

        </tbody>
    </table>
</div>
