<div>
    <div class="row"style="background-image:url('{{asset('storage/images/ball.jpg')}}');overflow:hidden;">
    <center style="font-family:elephant;margin-top:20px;"><img src="{{asset('storage/images/kumau.jpeg')}}" 
       style="width:50px; height:50px;border-radius:50%; 
       object-fit:cover;">GarhKumaou <h4>get registered </h4></center>  
         
    <div class="col-sm-6" 
        style="margin-top:50px;margin-bottom:200px;
        margin-left:350px;
        margin-right:200px;background-color:black;color:gold;border-radius:2%;">
       
        <form wire:submit.prevent="register" class="row-reserve text-center">
         <div class="mt-5" >
            <label for="name">Customer's name</label>
            <input  type="text"wire:model="name">
        </div>
        <div class="mt-5">
            <label for="state">State'name</label>
            <input type="text"wire:model="state">
        </div>
        <div class="mt-5">
            <label for="email">Email-id</label>
            <input type="text"wire:model="email">
        </div>
        <div class="mt-5">
            <label for="phone">Phone number</label>
            <input type="number"wire:model="phone">
        </div>
        <div class="mt-5">
            <label for="password">Password</label>
            <input type="text"wire:model="password">
        </div>
        <div class="mt-5">
            <label for="cpassword">Confirm Password</label>
            <input type="text"wire:model="cpassword">
        </div>
        <div class="mt-5">
            <center><input type="submit" value="submit Details"></center>
        </div>
        <div>
            {{$message}}
        </div>
    </form>

        </div>
    </div>

    
</div>
