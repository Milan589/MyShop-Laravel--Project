
<div class="form-group">
    {!! Form::label('title','Title: ') !!}
    {!! Form::text('title',null,['class'=> 'form-control', 'placeholder'=>'Enter title']) !!}
    @include('backend.includes.single_field_error',['field'=>'title'])
</div>
<div class="form-group">
    {!! Form::label('description','Description:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control','id'=>'description','placeholder'=>'Enter description','row'=>2]) !!}
    @include('backend.includes.single_field_error',['field'=>'description'])
</div>
<div class="form-group">
    {!! Form::label('rank','Rank:') !!}
    {!! Form::number('rank',null,['class'=>'form-control','id'=>'rank']) !!}
    @include('backend.includes.single_field_error',['field'=>'rank'])
</div>
<div class="form-group">
    {!! Form::label('image','Image:') !!}
    {!! Form::file('image',null,['class'=>'form-control','id'=>'image']) !!}
</div>
<div class="form-group">
    {!! Form::submit($button.' '.$module,['class'=>'btn btn-info']) !!}

</div>