<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $product->name !!}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{!! $product->body !!}</p>
</div>

<!-- Code Field -->
<div class="form-group">
    {!! Form::label('code', 'Code:') !!}
    <p>{!! $product->code !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $product->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $product->updated_at !!}</p>
</div>

