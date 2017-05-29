@extends('adminlte::layouts.app')

@section('contentheader_title')
    Books
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3>Create a new book</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="panel panel-default creation">

                            @if(isset($book))
                                {!! Form::model($book,['files' => true, 'route' => 'books.update']) !!}
                            @else
                                {!! Form::open(['route' => 'books.store',
                                'files' => true]) !!}
                            @endif
                            <div class="panel-body">

                                <div class="input-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                    <span class="input-group-addon" id="title">Title</span>
                                    <input type="text" name="title" class="form-control" placeholder="Title" aria-describedby="title" value="{!! isset($book) ? $book->title : null !!}">
                                </div>
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                                <br>

                                <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                                </div>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif

                                <div class="fileinput fileinput-new {{ $errors->has('image') ? ' has-error' : '' }}" data-provides="fileinput">
                                    <span class="btn btn-default btn-file"><span>Choose cover image</span><input type="file" name="image" accept="image" /></span>
                                    <span class="fileinput-filename"></span><span class="fileinput-new">No file chosen</span>
                                </div>
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                                <br>

                                <div class="input-group {{ $errors->has('date') ? ' has-error' : '' }}">
                                    <span class="input-group-addon" id="date">Date</span>
                                    <input type="text" name="date" class="form-control" placeholder="Date" aria-describedby="date" value="{!! isset($book) ? $book->date : null !!}">
                                </div>
                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                                <br>

                                <div class="input-group {{ $errors->has('price') ? ' has-error' : '' }}">
                                    <span class="input-group-addon" id="price">Price</span>
                                    <input type="text" class="form-control" name="price" placeholder="Price" aria-describedby="price" value="{!! isset($book) ? $book->price : null !!}">
                                </div>
                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                                <br>

                                <div class="fileinput fileinput-new {{ $errors->has('file') ? ' has-error' : '' }}">
                                    <span class="btn btn-default btn-file"><span>Choose file</span><input type="file" name="file" /></span>
                                    <span class="fileinput-filename"></span><span class="fileinput-new">No file chosen</span>
                                </div>
                                @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                                <br>

                            </div>
                            <div class="panel-footer">
                                {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('adminlte::layouts.partials.scripts')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection