@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавление пользователя</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Пользователи</a></li>
              <li class="breadcrumb-item active">Добавление пользователя</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <form class="w-25" action="{{ route('admin.user.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Имя пользователя">
                        @error('name')
                            <div class="text-danger">Это поле обязательно для заполнения</div>
                        @enderror
                    </div>
                    <input class="btn btn-block btn-primary w-50" type="submit" value="Добавить">
                </form>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
