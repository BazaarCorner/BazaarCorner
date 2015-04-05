<div class="container-fluid form-holder">
    <div class="row-fluid">
    {!! Form::open(['url' => 'member/register']) !!}
        <div class="row-fluid"><span class="title">Register As:</span></div>
            <em class="text-muted" style="font-size: 11px;">
                * All input fields are required
            </em>
        <div class="divider"><hr><br></div>
    @if($errors->has())
        <div class="alert alert-warning">
            @foreach($errors->all() as $error)
                <span class="text-danger">* {{$error}}</span><br>
            @endforeach
        </div>
    @endif
        <div class="form-group">
            {!! Form::text(
                'username', //input type
                '', 
                [
                    'class' => 'form-control', 
                    'placeholder' => 'Username'
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
        <div class="form-group">
            {!! Form::input(
                'password', //input type
                'password_confirmation', 
                '',
                [
                    'class' => 'form-control', 
                    'placeholder' => 'Re-enter to confirm password'
                ]
            ) !!}
        </div>
        <div class="form-group">
            {!! Form::email(
                'email', // input type
                '', 
                [   // form style
                    'class' => 'form-control', 
                    'placeholder' => 'Email'
                ]
            ) !!}
        </div>
        <em class="text-muted" style="font-size: 11px;">
            Kindly ensure your email is up-to-date and accessible to receive
            updates and promotions.
        </em>
        <br><br>
        <div class="row">
            <div class="col-md-8">
                <span class="pull-left" style="font-weight: bold;">
                    Agree with our 
                    <a href="{{route('terms') . '#buyer'}}"
                       class="text-capitalize"
                       target="_blank">
                        Terms
                    </a>?
                </span>
                <br> <!-- <br> required to add separation-->
                <div class="form-group">
                    <input class="checkbox checkbox-inline"
                           type="checkbox"
                           checked="checked"
                           name="agreed">
                    <span>Yes, I agree.</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input class="btn btn-danger pull-right"
                           type="submit"
                           value="Join Bazaar!">
                </div>
            </div>
        </div>
        <em class="text-muted" style="font-size: 11px;">
            ** We value your information. Read more about our
            <a href="{{route('policy') . '#membership'}}"
               class="text-capitalize"
               target="_blank">
                Privacy policy
            </a>
        </em>
    {!! Form::close() !!}
    </div>
</div>