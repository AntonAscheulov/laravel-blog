@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить категорию
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Меняем категорию</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <form method="POST" action="{{route('admin.categories.update', $category->slug)}}">
                        @csrf
                        @method("PUT")
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название категории</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title" value="{{$category->title}}">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{route('admin.categories.index')}} " class="btn btn-default">Назад</a>
                    <button class="btn btn-warning pull-right">Изменить</button>
                </div>
                </form>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@endsection
