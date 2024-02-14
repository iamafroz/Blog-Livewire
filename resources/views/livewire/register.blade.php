<div class=" flex items-center border border-[#6875F5]  justify-center w-full h-full py-20 ">
    <form wire:submit="Save" method="post" enctype="multipart/form-data">
        <input type="text" placeholder="Name" class="border border-[#6875F5] " wire:model.live='name'> <br>
        <div>@error('name') {{ $message }} @enderror</div>


        <input type="email" placeholder="Email" class="border border-[#6875F5]  " wire:model.live='email'> <br>
        <div>@error('email') {{ $message }} @enderror</div>


        <input type="password" placeholder="Password" class="border border-[#6875F5]  " wire:model.live='password'> <br>
        <div>@error('password') {{ $message }} @enderror</div>


            <select wire:model.live="selected_role" id="" class=" text-center  w-40 border border-[#6875F5] bg-[#6875F5] ">

                <option value="">Select</option>
                @foreach ($role as $id => $name)

                <option value="{{$name}}">{{$id}} </option>
 
                @endforeach
            </select>

                <div class="flex justify-center">

                    <input type="submit" value="Register" class=" w-40 border border-[#6875F5] bg-[#6875F5] "> <br>
                </div>

    </form>

</div>