@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="jumbotron">
                    <p><span class="btn btn-primary disabled">Категорий 0</span></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jumbotron">
                    <p><span class="btn btn-primary disabled">Материалов 0</span></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jumbotron">
                    <p><span class="btn btn-primary disabled">Посетителей 0</span></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jumbotron">
                    <p><span class="btn btn-primary disabled">Сегодня 0</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-block btn-outline-secondary">Создать категорию</a>
                {{--<a href="#" class="list-group-item list-group-item-action">--}}
                <h4 class="list-group-item list-group-item-action">Категория первая</h4>
                <p class="list-group-item list-group-item-action"> Колечество материалов</p>
                {{--</a>--}}
            </div>
            <div class="col-md-6">
                <a href="#" class="btn btn-block btn-outline-secondary">Создать материал</a>
                {{--<a href="#" class="list-group-item list-group-item-action">--}}
                <h4 class="list-group-item list-group-item-action">Материал первый</h4>
                <p class="list-group-item list-group-item-action">Категория</p>
                {{--</a>--}}
            </div>
        </div>
    </div>

@endsection