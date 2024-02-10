<div class=" flex items-center border border-[#6875F5]  justify-center w-full h-full py-20 ">
    <form wire:submit="login" method="post" enctype="multipart/form-data">
        

        <input type="email" placeholder="Email" class="border border-[#6875F5]  " wire:model.live='email'> <br>
        <div>@error('email') {{ $message }} @enderror</div>


        <input type="password" placeholder="Password" class="border border-[#6875F5]  " wire:model.live='password'> <br>
        <div>@error('password') {{ $message }} @enderror</div>


                <div class="flex justify-center">

                    <input type="submit" value="Login" class=" w-40 border border-[#6875F5] bg-[#6875F5] "> <br>
                </div>

                {{  $session }}
    </form>

</div>