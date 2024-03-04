<div>

    <div class="row"style="background-image:url('{{asset('storage/images/ball.jpg')}}');overflow:hidden;">
    <center style="font-family:elephant;margin-top:20px;"><img src="{{asset('storage/images/kumau.jpeg')}}" 
       style="width:50px; height:50px;border-radius:50%; 
       object-fit:cover;">GarhKumaou <h4>Adding staff </h4></center>  

    <div class="col-sm-6" 
        style="margin-top:50px;margin-bottom:200px;
        margin-left:350px;
        margin-right:200px;background-color:black;color:gold;border-radius:2%;">

    <form wire:submit.prevent="staff" class="text-center">
        <div>
            <label for="name">Full name</label>
            <input type="text"wire:model="name">
        </div>
        <div>
            <label for="phone">Phone number</label>
            <input type="number"wire:model="phone">
        </div>
        <div>
            <label for="aadhar">Aadhar card number</label>
            <input type="number"wire:model="aadhar">
        </div>
        <div>
            <label for="occupation">here assigned as</label>
            <input type="text"wire:model="occupation">
        </div>
        
        <div>
            <label for="salary">Salary</label>
            <input type="salary" wire:model="salary">
        </div>
        <div>
            <label for="sdate">Started from</label>
            <input type="date" wire:model="sdate">
        </div>
        <div>
            <input type="submit" value="submit details">
        </div>
        

    </form>
    </div>

    </div>         
</div>
