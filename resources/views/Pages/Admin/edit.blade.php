@extends('layouts.admin')
@section('content')
<div class="box-header with-border">
    <h3 class="box-title"><strong> Pages manage - Edit page</strong></h3>
    <div class="add">
        <a href="/admin/dashboard/pages" class="btn btn-primary btn-sm btn-flat"> <i class="fa fa-backward"></i> Back to list</a>
    </div>

</div>

<div class="box-body">
    <div class="container">
        <div class="col-lg-9 margin-tb">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Menu Item:</strong>
                        <select name="menu__items_id" class="form-control">
                            @foreach ($menuItems as $menuItem)
                            <option value="{{$menuItem->id}}" @if($menuItem->id==$page->menu__items_id)
                                selected
                                @endif> {{$menuItem->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <input type="text" name="title" class="form-control" value="{{$page->title}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Body:</strong>
                        
                        <textarea class="form-control" style="height:50px" name="body" value="" placeholder="Body">{{$page->body}}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Save page</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection