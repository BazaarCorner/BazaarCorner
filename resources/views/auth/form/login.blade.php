<div class="container-fluid form-holder">
    {!! Form::open(['url' => 'member/login']) !!}
    <div class="row-fluid"><span class="title">Sign As:</span></div>
    <div class="divider"><hr><br></div>
    @if($errors->has())
    <div class="alert alert-warning">
         @foreach($errors->all() as $error)
            <span class="text-danger">* {{$error}}</span><br>
         @endforeach
    </div>
    @endif
    <div class="form-group">
        {!! Form::email(
            'email', // input type
            '', 
            [   // form style
                'class' => 'form-control', 
                'placeholder' => 'email'
            ]
        ) !!}
    </div>
    <div class="form-group">
        {!! Form::input(
            'password', //input type
            'password', 
            '',
            [
                'class' => 'form-control', 
                'placeholder' => 'Password'
            ]
        ) !!}
    </div>
    <div class="row">
        <div class="col-md-8">
            <span class="pull-left text-capitalize"
                  style="font-weight: bold;">
                Forgot your password?
            </span>
            <br>
            <a href="#">Click here to reset your password</a>
        </div>
        <div class="col-md-4">
            <div class="form-group pull-right">
                {!! Form::submit(
                    'Sign In',
                    [
                        'class' => 'btn btn-danger'
                    ]
                ) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>