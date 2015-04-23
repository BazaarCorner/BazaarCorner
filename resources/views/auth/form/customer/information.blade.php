<div class="row-fluid">
    {!! Form::open(["method" => "PATCH", "route" => "profile.update"]) !!}
    @if($errors->has())
        <div class="alert alert-warning">
            @foreach($errors->all() as $error)
                <span class="text-danger">* {{$error}}</span><br>
            @endforeach
        </div>
    @endif
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('First Name:')!!}
                    {!! Form::text('first_name', $user->first_name, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Middle Name:')!!}
                    {!! Form::text('middle_name', $user->middle_name, ['class' => 'form-control']) !!}
                </div> 
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Last Name:')!!}
                    {!! Form::text('last_name', $user->last_name, ['class' => 'form-control']) !!}
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Email:')!!}
                    {!! Form::email('email', $user->email, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-4">
                
            </div>
            <div class="clearfix"></div>
        </div>    
<!--        <div class="form-group pull-right">
            <input class="btn btn-danger pull-right" type="submit" value="Update">
        </div>        -->
    {!! Form::close() !!}
</div>