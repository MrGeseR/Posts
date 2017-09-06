@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2 class="centered">{!! $author->name !!}</h2>

                <div class="image">
                    <img class="show-image" src="/img/authors/{!! $author->image !!}" alt="">
                </div>
                <hr>
                <p>
                    {!! $author->biography !!}
                </p>


                <h2>Author's books</h2>

                <div class="list-group">
                    @foreach($author->books as $book)
                        <a href="{!! route('book.show',['book' => $book->id]) !!}" class="list-group-item authors-book">
                                @for ($i = 1; $i <= 5; $i++)
                                    <?php if ($book->rank() >= $i){
                                        $star = 'fa-star';
                                    } else {
                                        $star = 'fa-star-o';
                                    }?>
                                    <i class="fa {!! $star !!}" aria-hidden="true"></i>
                                @endfor
                             {!! $book->title !!}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

