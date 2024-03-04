<div class="reservation"style="background-image:url('{{asset('storage/images/ball.jpg')}}');
    overflow:hidden;width:100%;height:650px;">
    <div class="row" >
        <div>
        <center style="font-family:elephant;margin-top:20px;"><img src="{{asset('storage/images/kumau.jpeg')}}" 
       style="width:50px; height:50px;border-radius:50%; 
       object-fit:cover;">GarhKumaou</center>  
            <!-- <center><h3 class="mt-5">make reservations according to preferences</h3></center> -->
        </div>
    </div>
    <div class="row reserve">
        <div class="col-sm-6 " style="border:solid;background-color:black;">
            <img src="{{asset('storage/images/fooding.jpeg')}}" 
            style="height:400px;width:100%;object-fit:cover;">
        </div>
        <div class="col-sm-6  text-center" style="background-color:black;color:gold;">
           <center> <h4>Make Reservations</h4></center>

            <form wire:submit.prevent="reservation" >
                <div class="mt-4">
                    <label for="fname">First Name</label>
                    <input type="text"wire:model="fname">
                </div>  
                <div class="mt-4">
                    <label for="lname">Last Name</label>
                    <input type="text" wire:model="lname">
                </div>
                <div class="mt-4">
                    <label for="email">Email-id</label>
                    <input type="text" wire:model="email">
                </div>
                <div class="mt-4">
                    <label for="phone">Phone Number</label>
                    <input type="number" wire:model="phone">
                </div>
                <div class="mt-4">
                    <label for="rdate">Reservation Date</label>
                    <input type="date" wire:model="rdate">
                </div>
                <div class="mt-4">
                    <label for="gnum">Number of guests</label>
                    <input type="number" wire:model="gnum">
                </div>
                <div class="mt-4">
                    <label for="timing">Timing for reservation</label>
                    <input type="time"wire:model="timing">
                </div>
                
                <div class="mt-4">
                   <center><input type="submit" value="Submit"></center>

                </div>
            
                <div>{{$message}}</div>

            </form>
        </div>

        
    </div>
</div>
