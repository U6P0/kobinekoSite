<!-- index.balde.php -->

@extends('layouts.app')
@section('content')
    
<div class="container">
  <div class="row">
    <div class="col">
            
<table class="table table-bordered" id="mountain-table">
    <tbody>
        <td>番号</td>
        <td>名前</td>
        <td>読み方</td>
        <td>標高</td>
        <td>山域</td>
        <td>体力度</td>
        <td>技術度</td>
        <td>標準ルート</td>
        <td>登った人の数</td>
    @foreach($mountains as $mountain)
        <tr>
            <td>{{ $mountain->number }}</td>
            <td><a href="{{ $mountain->detailedUrl }}">{{ $mountain->name }}</a></td>
            <td>{{ $mountain->kana }}</td>
            <td>{{ $mountain->elevation }} m</td>
            <td>{{ $mountain->category }}</td>
            <td>{{ $mountain->stamina }}</td>
            <td>{{ $mountain->technic }}</td>
            <td>{{ $mountain->route }}</td>
            <td>{{ $mountain->climbedNumber }}</td>
            
        </tr>
    @endforeach
</tbody>
</table>

</div>   
</div>
</div>

@endsection