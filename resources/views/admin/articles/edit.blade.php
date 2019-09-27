@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') edit news @endslot
            @slot('parent') home @endslot
            @slot('active') news @endslot
        @endcomponent
        <hr>
        <form method="post" action="{{route('admin.article.update', $article)}}" class="form-horizontal">
            <input type="hidden" name="_method" value="put">
            {{csrf_field()}}
            @include('admin.articles.partials.form')

            <input type="hidden" name="modified_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
