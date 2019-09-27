@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') create category @endslot
            @slot('parent') home @endslot
            @slot('active') categories @endslot
        @endcomponent
        <hr>
            <form method="post" action="{{route('admin.category.store')}}" class="form-horizontal">
            {{csrf_field()}}
            @include('admin.categories.partials.form')
        </form>
    </div>
@endsection
