<label for="">status</label>
<select name="published" id="" class="form-control">
    @if(isset($category->id))
        <option value="0" @if($category->published == 0) selected="" @endif>not published</option>
        <option value="1" @if($category->published == 1) selected="" @endif>published</option>
    @else
        <option value="0">not published</option>
        <option value="1">published</option>
    @endif
</select>

<label for="">name</label>
<input type="text" class="form-control" name="title" placeholder="category name" value="{{$category->title ?? ''}}" required>

<label for="">slug</label>
<input type="text" class="form-control" name="slug" placeholder="auto" value="{{$category->slug ?? ''}}" readonly>

<label for="">parent category</label>
<select name="parent_id" id="" class="form-control">
    <option value="0">-- no parent --</option>
    @include('admin.categories.partials.categories', ['categories' => $categories])
</select>
<input type="submit" class="btn btn-primary" value="save">
