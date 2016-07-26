@extends('layout')

@section('content')
    <h1>Edit the note</h1>
            <form method="POST" action="/note/{{ $note->id }}">
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <textarea name="body" class="form-control">{{ $note->body }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit Note</button>
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                </div>
@stop
