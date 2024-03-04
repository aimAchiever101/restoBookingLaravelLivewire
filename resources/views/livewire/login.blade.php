<div>
<div class="row"style="background-image:url('{{asset('storage/images/ball.jpg')}}');overflow:hidden; height:800px">
    <div class="col-sm-6 mx-auto mt-5" >
       <center style="font-family:elephant; margin-bottom:0px;"><img src="{{asset('storage/images/kumau.jpeg')}}" 
       style="width:50px; height:50px;border-radius:50%; 
       object-fit:cover;">GarhKumaou <h4>login page</h4>  </center> 
        <form wire:submit.prevent="login" class="text-center mt-0" style="border-radius:2%;background-color:black;color:gold">
            <p class="mt-5">
                <label for="email" class="mt-5">Email-id</label>
                <input type="text"wire:model="email">
            </p>
            <p class="mt-5">
                <label for="password">Password</label>
                <input type="text"wire:model="password">
            </p>
            <p class="mt-5 mb-5">
                <input type="submit" value="submit">
            </p>
        </form>
    </div>
</div>

</div>
