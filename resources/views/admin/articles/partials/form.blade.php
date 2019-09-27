<label for="">status</label>
<select name="published" id="" class="form-control">
    @if(isset($article->id))
        <option value="0" @if($article->published == 0) selected="" @endif>not published</option>
        <option value="1" @if($article->published == 1) selected="" @endif>published</option>
    @else
        <option value="0">not published</option>
        <option value="1">published</option>
    @endif
</select>

<label for="">name</label>
<input type="text" class="form-control" name="title" placeholder="article name" value="{{$article->title ?? ''}}" required>

<label for="">slug</label>
<input type="text" class="form-control" name="slug" placeholder="auto" value="{{$article->slug ?? ''}}" readonly>

<label for="">parent article</label>
<select name="categories[]" class="form-control" multiple="">
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">description short</label>
<textarea name="description_short" id="description_short" class="form-control">{{$article->description_short ?? ''}}</textarea>

<label for="">description</label>
<textarea name="description" id="description" class="form-control">{{$article->description ?? ''}}</textarea>

<hr>

<label for="">meta title</label>
<input type="text" class="form-control" name="meta_title" placeholder="meta title" value="{{$article->meta_title ?? ''}}">

<label for="">meta description</label>
<input type="text" class="form-control" name="meta_description" placeholder="meta description" value="{{$article->meta_description ?? ''}}">

<label for="">meta_keyword</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="meta keyword" value="{{$article->meta_keyword ?? ''}}">

<hr>

<input type="submit" class="btn btn-primary" value="save">
