@extends('layouts.admin')
@section('content')
<div class="box-header with-border">
    <h3 class="box-title"><strong> Variables List manage</strong></h3>
    <div class="add">
        <a href="addvariable" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
    </div>
</div>
<div class="box-body">
    @if (count($variables ?? '') > 0)
    <table class="table table-bordered">
        <thead>
            <th width=3%>N/#</th>
            <th width="20%">Key</th>
            <th>Value</th>
            <th>Date Updated</th>
            <th>Tools</th>
        </thead>

        <tbody>
            @foreach($variables as $variable)
            <tr>
                <td>{{ $variable->id }}</td>
                <td>{{ $variable->key }}</td>
                <td>{{ $variable->value }}</td>
                <td>{{ $variable->updated_at->format('d.m.Y H:i:s') }}</td>
                <td>
                    <a href="{{url('admin/dashboard/editvar/' . $variable->id)}}" class='btn btn-success btn-sm edit btn-flat'><i class='fa fa-edit'></i> Edit</a>
                    <a href="{{url('admin/dashboard/deletevar/' . $variable->id)}}" class='btn btn-danger btn-sm delete btn-flat'><i class='fa fa-trash'></i> Delete</a>


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