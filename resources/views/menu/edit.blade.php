@extends('layouts.admin')
@section('content')
<div class="box-header with-border">
    <h3 class="box-title"><strong> Menu manage - Edit menu</strong></h3>
    <div class="add">
        <a href="/admin/dashboard/menuitems" class="btn btn-primary btn-sm btn-flat"> <i class="fa fa-backward"></i> Back to list</a>
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
                        <input type="text" name="title" value="{{ $menulist -> title }}" class="form-control" placeholder="title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Menu_id:</strong>
                        <select name="menu_id" class="form-control">
                            @foreach ($menu as $menuvar)
                            <option value="{{ $menuvar->id }}" @if($menuvar->id==$menulist->menu_id)
                                selected
                                @endif> {{$menuvar->id}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Link:</strong>
                        <input type="text" name="link" value="{{ $menulist -> link }}" class="form-control" placeholder="link">
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