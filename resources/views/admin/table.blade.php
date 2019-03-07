@extends('templates.admin.layout')

@section('custom-css')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="row" style="margin-top: 50px;">
  <div class='col-md-12 col-lg-11'>
    <table id="myTable" class="display" style="width:100%">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Message</th>
                  <th>Sent</th>
              </tr>
          </thead>
          <tbody>
            @if(count($contacts) > 0)
              @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->comment}}</td>
                    <td>{{$contact->created_at}}</td>
                </tr>
              @endforeach
            @endif
            </tbody>
      </table>
    </div>
</div>

@endsection

@section('custom-js')

<script  type="text/javascript" charset="utf-8" src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script  type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
      $('#myTable').DataTable( {
          columnDefs: [ {
              targets: [ 0 ],
              orderData: [ 0, 1 ]
          }, {
              targets: [ 1 ],
              orderData: [ 1, 0 ]
          }, {
              targets: [ 4 ],
              orderData: [ 4, 0 ]
          } ]
      } );
    } );
</script>

@endsection
