{!! Form::open(['route' => 'serp', 'method' => 'get', 'name'=> 'search']) !!}
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
                {!! Form::submit("Check Availability", ['class' => 'btn btn-default']) !!}
            </span>
        </div>
    </div>
{!! Form::close() !!}