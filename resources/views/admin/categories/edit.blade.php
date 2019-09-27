@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') edit category @endslot
            @slot('parent') home @endslot
            @slot('active') categories @endslot
        @endcomponent
        <hr>
        <form method="post" action="{{route('admin.category.update', $category)}}" class="form-horizontal">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">

            @include('admin.categories.partials.form')
        </form>
    </div>
@endsection
