@extends('layouts.admin')
@section('content')
<div class="box-header with-border">
    <h3 class="box-title"><strong> Menu List manage</strong></h3>
    <div class="add">
        <a href="addmenu" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
    </div>
</div>
<div class="box-body">
    @if (count($menulist ?? '') > 0)
    <table class="table table-bordered">
        <thead>
            <th width=3%>N/#</th>
            <th width=3%>Menu_id</th>
            <th width="20%">Title</th>
            <th>Link</th>
            <th>Date Updated</th>
            <th>Tools</th>
        </thead>

        <tbody>
            @foreach($menulist as $menu)
            <tr>
                <td>{{ $menu->id }}</td>
                <td>{{ $menu->menu_id }}</td>
                <td>{{ $menu->title }}</td>
                <td>{{ $menu->link }}</td>
                <td>{{ $menu->updated_at->format('d.m.Y H:i:s') }}</td>
                <td>
                    <a href="{{url('admin/dashboard/editmenu/' . $menu->id)}}" class='btn btn-success btn-sm edit btn-flat'><i class='fa fa-edit'></i> Edit</a>
                    <a href="{{url('admin/dashboard/deletemenu/' . $menu->id)}}" class='btn btn-danger btn-sm delete btn-flat'><i class='fa fa-trash'></i> Delete</a>


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