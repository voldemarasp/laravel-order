@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <form method="post" action="{{ route('chat.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Topic</label>
                        <input type="text" class="form-control" name="topic" placeholder="Enter topic">
                        @include('chat.partials.error', ['name' => 'topic'])
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" rows="6" type="text" name="message" placeholder="Enter message"></textarea>
                        @include('chat.partials.error', ['name' => 'message'])
                    </div>
                    <button type="submit" class="btn btn-primary">Create topic</button>
                </form>
            </div>
        </div>
    </div>
@endsection