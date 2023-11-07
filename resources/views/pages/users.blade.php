@extends('default')
@section('title')
Yvanie website | User list
@endsection
@section('content')
  <h1 class="heading" style="text-align: center">Liste des utilisateurs</h1>

   <div class="table">
    <table width="100%">
        <thead style="background: gainsboro">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Email Verified</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $alldata)
            <tr>
                <td>{{ $alldata->name }}</td>
                <td>{{ $alldata->email }}</td>
                <td>{{ $alldata->email_verified_at }}</td>
                <td>{{ $alldata->password }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
   </div>
@endsection
