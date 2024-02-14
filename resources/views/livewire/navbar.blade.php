{{-- <div class="Container">
    <nav>
        <ul class="flex justify-center item-center w-100 py-3">
            <li class="text-[#6875F5] mx-3 py-3 border-b border-[#6875F5]"><a href="{{ route('welcome')}}">Home</a></li>
            <li class="text-[#6875F5] mx-3 py-3  border-b border-[#6875F5]"><a  wire:click="Users">Users</a></li>
            <li class="text-[#6875F5] mx-3 py-3 border-b border-[#6875F5]"><a href="">Category</a></li>
            <li class="text-[#6875F5] mx-3 py-3 border-b border-[#6875F5]">
                <form wire:submit.prevent="titleSearch">
            <input type="text" wire:model.live='search_title' placeholder="Search">
            <input type="submit">
                </form>
            </li>
        </ul>
        @if($search_result) 
            {{ $search_result }}
        @else
   <p> Not found </p>
@endif

    </nav>
</div> --}}