@extends('layouts.admin')
@section('content')
<div class="box-header with-border">
    <h3 class="box-title"><strong> Useful List manage</strong></h3>
    <div class="add">
        <a href="addpage" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
    </div>

    <!--form for filtering-->
    <div class="pull-right">
        <form class="form-inline" action="{{ url('admin/dashboard/pageByItem') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Menu item: </label>
                <select class="form-control input-sm" name="menu__items_id" onChange=submit();>

                    <option value="0">All</option>
                    @foreach ($menuItems as $menuItem)
                    <option value="{{ $menuItem->id}}" @if(isset($selectItem) && $menuItem->id==$selectItem) selected @endif
                        >{{$menuItem->title}}</option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>
</div>
<div class="box-body">
    @if (count($pages ?? '') > 0)
    <table class="table table-bordered">
        <thead>
            <th width=3%>N/#</th>
            <th width="10%">Title</th>
            <th>Description</th>
            <th>Date Updated</th>
            <th width="10%">Tools</th>
        </thead>
        <tbody>
            @foreach($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->title }}</td>
                <td>{{ $page->body }}</td>
                <td>{{ $page->updated_at->format('d.m.Y H:i:s') }}</td>
                <td>
                    <a href="{{url('admin/dashboard/editpage/' . $page->id)}}" class='btn btn-success btn-sm edit btn-flat'><i class='fa fa-edit'></i> Edit</a>
                    <a href="{{url('admin/dashboard/deletepage/' . $page->id)}}" class='btn btn-danger btn-sm delete btn-flat'><i class='fa fa-trash'></i> Delete</a>


                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Data no found</p>
    @endif
</div>
@endsection