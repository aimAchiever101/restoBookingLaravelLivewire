<div>
<table class="table" border="1">
    <thead>
        <tr>
            <th>seats booked</th>
            <th>date of reservation </th>
            <th>time of reservation</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($reserveds as $reserved)
        <tr>
            <td>{{ $reserved['gnum']}}</td>
            <td>{{ $reserved['rdate']}}</td>
            <td>{{ $reserved['timing']}}</td>
            <td>
                <a href="{{url('edit_user/'.$reserveds['id'])}}" class="btn btn-primary">Edit</a>

                <button wire:click="delete({{$reserved['id']}})" type="button" class=" btn btn-danger">Delete

                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
   
</table>
</div>
