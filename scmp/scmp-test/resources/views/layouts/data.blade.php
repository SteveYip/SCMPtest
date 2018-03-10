@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <table id="example" class="display have_record " cellspacing="0" width="100%">
                        <thead>
                            <tr id="header">
                                <th>Name</th>
                                <th>Email </th>
                                <th>Phone</th>
                                <th>Type</th>
                            </tr>
                        </thead>



                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->type}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
{{-- {!! $dataTable->scripts() !!} --}}
<script type="text/javascript">
    let table;
    $(document).ready(function() {
         table = $('#example').DataTable({
//            orderCellsTop: true,
            "scrollX": true,
        });
    });

    
</script>
@endpush