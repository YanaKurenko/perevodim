@extends('layouts.admin')
@section('content')
<div class="box-header with-border">
    <h3 class="box-title"><strong> Variables manage - Edit variable</strong></h3>
    <div class="add">
        <a href="/admin/dashboard/list" class="btn btn-primary btn-sm btn-flat"> <i class="fa fa-backward"></i> Back to list</a>
    </div>

</div>

<div class="box-body">
    <div class="container">
        <div class="col-lg-9 margin-tb">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Key:</strong>
                        <input type="text" name="key" value="{{ $variable -> key }}" class="form-control" placeholder="key">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Value:</strong>
                        <input type="text" name="value" value="{{ $variable -> value }}" class="form-control" placeholder="value">
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