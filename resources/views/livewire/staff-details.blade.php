<div>
<div class="row">
    <div class="col-sm-12">
        <h1> Staff details</h1>
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>name</th>
                    <th>phone</th>
                    <th>aadhar card number</th>
                    <th>occupation</th>
                    <th>salary</th>
                    <th>working started from</th>
                </tr>
            </thead>
            <tbody>
                @foreach($staffs as $staff)
                <tr>
                    <td>{{$staff['name']}}</td>
                    <td>{{$staff['phone']}}</td>
                    <td>{{$staff['aadhar']}}</td>
                    <td>{{$staff['occupation']}}</td>
                    <td>{{$staff['salary']}}</td>
                    <td>{{$staff['sdate']}}</td>
                    <td>
                        <button wire:click="delete({{$staff['id']}})"
                        type="button" class="btn btn-danger">
                            Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
