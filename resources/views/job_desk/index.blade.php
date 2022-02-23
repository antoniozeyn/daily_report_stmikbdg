<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-image: url('https://images.freecreatives.com/wp-content/uploads/2016/04/World-Wide-Web-Background.jpg');
}
</style>
</head>
</html>

<style>
table, th, td {
  border:1px solid black;
}
</style>
<ul>
    <li><a href="{{ url('/') }}">Beranda</a></li>
    <li><a href="{{ url('/jabatan') }}">Jabatan</a></li>
    <li><a href="{{ url('/job_desk') }}"><font color=white>Job Desk</color></a></li>
</ul>
<table>
  <tr>
    <th>Kode Jobdesk</th>
    <th>Nama Jobdesk</th>
  </tr>
  @foreach($jobdesk as $value)
    <tr>
         <td>{{ $value->KodeJobdesk }}</td>
        <td>{{ $value->NamaJobdesk }}</td>
     <tr>
@endforeach
</table>