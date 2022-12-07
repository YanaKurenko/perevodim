@extends('layouts.app')

@section('content')
<div>
    @includeif('pages.contacts.googleAutocomplete')
</div>
<div class="container">

</div>
<div>
    @includeif('main.form')
</div>
@endsection