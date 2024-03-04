<div  style="color:gold;" class="picture1">
  <h1 style="background-color:black;"class ="text-center">welcome to user dashboard</h1>
  <div class="row">
    <div class="col-sm-8">
        <form wire:submit.prevent="user_info" class="text-center"style="background-color:black;
        margin-left:450px;font-size:25px;">
            <div >
                <label for="name">User name:</label>
                <input type="text"wire:model="name">
            </div>
            <div>
                <label for="state">Came from:</label>
                <input type="text"wire:model="state">
            </div>
            <div class="mb-2">
                <label for="email">Email id:</label>
                <input type="text"wire:model="email">
            </div>
            <div>
                <a href="/reservation" style="color:silver">click here for reservations</a>
            </div>
        </form>

    </div>
  </div>
  <!--  -->
    <h2  style="background-color:black;"
        class ="text-center mt-5">Reservation Details</h2>
    <div class="row">
                <div class="col-sm-12 text-center" style="background-color:black;">
                @php 
                use App\Models\Reserved;
                $records=Reserved::where("user_id",Auth::user()->id)
                ->get();
                @endphp

                <table border="1" class="text-center"style="margin-left:450px;font-size:20px;">
                    <thead>
                        <tr>
                            <th>Contact Information </th>
                            <th>Date of Reservation</th>
                            <th>Number of Guest</th>
                            <th>Arrival Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($records as $reserved)
                        <tr>
                            <td>{{$reserved['phone']}}</td>
                            <td>{{$reserved['rdate']}}</td>
                            <td>{{$reserved['gnum']}}</td>
                            <td>{{$reserved['timing']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
</div>
    <div class="col-sm-12">
<div class="row mt-5"style="background-color:black;">
        <a href="/payment_request"style="color:silver ;margin-left:550px; font-size:30px;">Proceed to pay advance amount</a>
    </div>
</div >
        <!-- return redirect()->route("payment_request"); -->

</div>