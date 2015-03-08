<section class="searchbar">
    {!! Form::open(['url' => '/item/search', 'method' => 'get', 'name'=> 'search']) !!}
        @if($errors->getBag('search')->has())
        <div class="alert alert-warning">
             @foreach($errors->getBag('search')->all() as $error)
                <span class="text-danger">&nbsp;*&nbsp;{{$error}}</span>                            
             @endforeach
        </div>
        @endif
        <div class="form-group">
            <div class="input-group">
                <em>
                    {!! Form::text(
                        'q',
                        '',
                        [
                            'class' => 'form-control',
                            'placeholder' => 'What product you have in mind?'
                        ]
                    ) !!}
                </em>
                <span class="input-group-btn">
                    {!! Form::submit('Check if available!', ['class' => 'btn btn-default']) !!}
                </span>
            </div>
        </div>
    {!! Form::close() !!}
</section>