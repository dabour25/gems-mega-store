@extends('user/master')
@section('content')
    <div class="intro-index">
        <div class="container-fluid menu">
            <div class="row">
                <div class="col-sm-3">
                    <input type="text" name="search" id="search-field" class="search-input">
                    <img src="{{asset('/imgs/icons/search.png')}}" width="28px" style="cursor: pointer">
                </div>
                <div class="col-sm-7">
                    <nav style="text-align: center">
                        <a href="/">Home |</a>
                        <a href="#"> Products |</a>
                        <a href="#"> photo |</a>
                        <a href="#"> branches |</a>
                        <a href="#"> about us |</a>
                        <a href="#"> contact us</a>
                    </nav>
                </div>
                <div class="col-sm-2 login-nav">
                    <a href="#">login /</a>
                    <a href="#"> signup</a>
                </div>
            </div>
        </div>
        <img class="intro-logo" src="{{asset('/imgs/big-logo.png')}}">
    </div>
    <div class="mid-menu">

    </div>
@stop