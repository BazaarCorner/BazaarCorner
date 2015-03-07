<p>
    <strong>
        Get updates direct to your
        <span class="text-uppercase">email</span>
    </strong>
</p>

{!! Form::open(['url' => '/subscribe']) !!}
    @if($errors->has())
    <div class="alert alert-warning">
         @foreach($errors->all() as $error)
            <span class="text-danger">&nbsp;*&nbsp;{{$error}}</span>                            
         @endforeach
    </div>
    @endif
    
    <div class="form-group">
        <div class="input-group">
            <em>
                {!! Form::email(
                    'email',
                    '',
                    [
                        'class' => 'form-control',
                        'placeholder' => 'email@example.com'
                    ]
                ) !!}
            </em>
            <span class="input-group-btn">
                {!! Form::submit('Submit', ['class' => 'btn btn-default']) !!}
            </span>
        </div>
    </div>
{!! Form::close() !!}