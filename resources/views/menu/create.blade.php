@extends('layouts.admin')
@section('content')
<div class="box-header with-border">
    <h3 class="box-title"><strong> Menu manage - Add menu</strong></h3>
    <div class="add">
        <a href="menuitems" class="btn btn-primary btn-sm btn-flat"> <i class="fa fa-backward"></i> Back to list</a>
    </div>

</div>

<div class="box-body">
    <div class="container">
        <div class="col-lg-9 margin-tb">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <input type="text" name="title" class="form-control" placeholder="title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Menu_Id:</strong>
                        <select name="menu_id" class="form-control">
                            @foreach ($menu as $menuId)
                            <option value="{{$menuId->id}}">{{$menuId->id}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Link:</strong>
                        <textarea class="form-control" style="height:50px" name="link" placeholder="link"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Save variable</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection