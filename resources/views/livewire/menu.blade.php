<div>
   <div class="row mt-3">
    <div class="col-sm-6 mx-auto" style="margin-left:300px;">
      <input wire:model="search"
      type="search"class="form-control"
      placeholder="search by the name of specific dishes.">
    </div>
   </div>
<div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
    @foreach($records as $record)
    <div class="col">
    <div class="card">
     <center> <img src="{{asset('storage/'.$record->image)}}" class="card-img-top" alt=""
      style="width:300px;height:200px;text-align:center; object-fit:cover;"></center>
      <div class="card-body">
      <center><h5 class="card-title">{{$record->dish}}</h5></center>
      <center><p class="card-text">Price: {{$record->price}}</p></center>
      </div>
    </div>
  </div>
    @endforeach
</div>
</div>
