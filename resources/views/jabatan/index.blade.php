<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-image: url('https://wallpapertag.com/wallpaper/full/d/9/c/955184-download-free-spider-web-background-1920x1080-for-hd-1080p.jpg');
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
    <li><a href="{{ url('/jabatan') }}"><font color=white>Jabatan</color></a></li>
    <li><a href="{{ url('/job_desk') }}">Job Desk</a></li>
</ul>
<table>
  <tr>
    <th>Kode Jabatan</th>
    <th>Nama Jabatan</th>
    <th>Deskripsi</th>
  </tr>
  @foreach($jabatan as $value)
    <tr>
         <td>{{ $value->KodeJabatan }}</td>
        <td>{{ $value->NamaJabatan }}</td>
        <td>{{ $value->Deskripsi }}</td>
     <tr>
@endforeach
</table>
