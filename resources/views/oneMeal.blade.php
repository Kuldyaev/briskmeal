@extends('layouts.app')

@section('header')
@include('header')
@endsection

@section('content')
<div class="container" style="display:flex; flex-direction:column;">
    <div class="filtersBlock" style="width:100%;">

    </div>
    <div class="mealsDesk" style="display:flex; width:100%; background-color:yellow; flex-wrap: wrap; justify-content:space-between; min-height: min(88vh, calc(100vh - 140px));">
    <h2>Страничка с описанием одного варианта обеда</h2>
    </div>
</div>
@endsection

@section('footer')
@include('footer')
@endsection
