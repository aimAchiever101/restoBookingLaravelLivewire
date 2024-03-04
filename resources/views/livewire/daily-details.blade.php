<div>
<div class="row">
    <div class="col-sm-12">
        <h1>Everyday details</h1>
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>date</th>
                    <th>present staff</th>
                    <th>absentees name</th>
                    <th>total sale</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $data)
                <tr>
                    <td>{{$data['cdate']}}</td>
                    <td>{{$data['present']}}</td>
                    <td>{{$data['absent']}}</td>
                    <td>{{$data['sale']}}</td>
                    <td>
                        <button wire:click="delete({{$data['id']}})"
                        type="button" class="btn btn-danger">Delete

                        </button>
                    </td>
                 </tr>
                 @endforeach
            </tbody>

        </table>
    </div>
</div>
</div>
