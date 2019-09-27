@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') create news @endslot
            @slot('parent') home @endslot
            @slot('active') news @endslot
        @endcomponent
        <hr>
        <form method="post" action="{{route('admin.article.store')}}" class="form-horizontal">
            {{csrf_field()}}
            @include('admin.articles.partials.form')

            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
