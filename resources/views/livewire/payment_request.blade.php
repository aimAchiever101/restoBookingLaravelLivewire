<div>
<div class="row"style="background-image:url('{{asset('storage/images/ball.jpg')}}');overflow:hidden;">
    <center style="font-family:elephant;margin-top:20px;"><img src="{{asset('storage/images/kumau.jpeg')}}" 
       style="width:50px; height:50px;border-radius:50%; 
       object-fit:cover;">GarhKumaou <h4>proceed to pay advance booking amount </h4></center>

<div class="col-sm-6" 
        style="margin-top:50px;margin-bottom:200px;
        margin-left:350px;
        margin-right:200px;background-color:black;color:gold;border-radius:2%;">
    <form wire:submit.prevent="payment_request" class="row-reserve text-center">
        <div class="mt-5">
            <label for="fname">Customer's name</label>
            <input type="text"wire:model="fname">
        </div>
        <div  class="mt-5">
            <label for="phone">Phone number</label>
            <input type="number"wire:model="phone">
        </div>
        <div  class="mt-5">
            <label for="amount">Amount for reservation</label>
            <select wire:model="amount">
                <option value="">Choose from below</option>
                <option value="500">500Rs</option>
                <option value="750">750Rs</option>
                <option value="1200">1200Rs</option>
            </select>
        </div>
        <div  class="mt-5">
            <input type="submit" name="pay" value="pay">
        </div>
    </form>
</div>
</div>

</div>
