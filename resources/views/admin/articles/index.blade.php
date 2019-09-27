@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') news list @endslot
            @slot('parent') Home @endslot
            @slot('active') news @endslot
        @endcomponent
        <hr>
        <a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right">
            <i class="fa fa-plus-square-o"></i> Create news
        </a>
        <table class="table table-striped">
            <thead>
            <th>name</th>
            <th>publication</th>
            <th class="text-right">action</th>
            </thead>
            <tbody>
            @forelse($articles as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td>{{$article->published}}</td>
                    <td class="text-right">
                        <form action="{{route('admin.article.destroy', $article)}}" method="post"
                              onsubmit="if (confirm('delete?')){return true}else{return false}">
                            {{csrf_field()}}
                            @method('DELETE')

                            <a href="{{route('admin.article.edit', $article)}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>empty</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pul-right">
                        {{$articles->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection
