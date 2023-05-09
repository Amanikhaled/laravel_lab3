@extends('layouts.app')


@section('content')
{!! Form::open(['url' => 'posts','method'=>'post']) !!}
<div class="mb-3">
<label for="name" class="form-label">IDno</label>
{!! Form::number('IDno', null, ['class' =>"form-control"] )!!}
</div>
  <div class="mb-3">
<label for="name" class="form-label">name</label>
{!! Form::text('name',null, ['class' =>"form-control"] )!!}
</div>

<div class="mb-3">
<label for="Age" class="form-label">Age</label>
{!! Form::number('Age', null, ['class' =>"form-control"] )!!}
</div>
  {!! Form::submit('add',['class'=>'btn btn-success btn-block']) !!}


{!! Form::close() !!}
@endsection
