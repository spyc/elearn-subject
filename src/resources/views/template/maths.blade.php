@extends('layouts.app')

@section('navbar')
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('subject.maths.index') }}">Maths</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('subject.maths.about') }}">About Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('auth.logout') }}">
                                        <i class="fa fa-fw fa-sign-out"></i>
                                        {{ trans('navbar.logout') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('auth.login') }}">
                                <i class="fa fa-sign-in fa-fw"></i>
                                {{ trans('navbar.login') }}
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@stop