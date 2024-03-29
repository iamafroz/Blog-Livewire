<div class=" flex items-center border border-[#6875F5]  justify-center w-full h-full py-20 ">

    <form wire:submit="file_upload" method="post" enctype="multipart/form-data">


        <input type="text" placeholder="title" class="border border-[#6875F5] " wire:model.live='title'> <br>
        <div>@error('title') {{ $message }} @enderror</div>


        <input type="text" placeholder="description" class="border border-[#6875F5]  " wire:model.live='description'> <br>
        <div>@error('description') {{ $message }} @enderror</div>

      
<!-- livewire/user-post.blade.php -->
<div>
    @if($categories)
        <select wire:model="category" id="" class="text-center w-40 border border-[#6875F5] bg-[#6875F5]">
            <option value="">Select</option>
            @foreach($categories as $cat)
                <option value="{{$cat['id']}}">{{$cat['category_name']}}</option>
            @endforeach
        </select>
    @else
        <!-- Handle the case where $category is null -->
        <p>No categories found.</p>
    @endif
</div>

        <input type="file" placeholder="image" class="border border-[#6875F5]  " wire:model.live='image'> <br>
        <div>@error('image') {{ $message }} @enderror</div>

                <div class="flex justify-center">
                    <input type="submit" value="Post" class=" w-40 border border-[#6875F5] bg-[#6875F5] "> <br>
                </div>

    </form>

</div>