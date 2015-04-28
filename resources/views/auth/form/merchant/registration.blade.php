<div class="container-fluid form-holder">
    <div class="row-fluid">
    {!! Form::open(['url' => 'member/register']) !!}
        <div class="row-fluid">
            <span class="title">
                Merchant/Re-seller Membership Form:
            </span>
        </div>
            <em class="text-muted" style="font-size: 11px;">
                * All input fields are required
            </em>
        <div class="divider"><hr><br></div>
        
        <div class="row">        
            <div class="col-md-6">
            <fieldset>
                <legend>Personal Information: </legend>
                <div class="form-group">
                    {!! Form::text(
                        'first_name', //input type
                        '',                
                        [
                            'class' => 'form-control', 
                            'placeholder' => 'First Name'
                        ]
                    ) !!}
                </div>  
                <div class="form-group">
                    {!! Form::text(
                        'last_name', //input type
                        '',                
                        [
                            'class' => 'form-control', 
                            'placeholder' => 'Last Name'
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
                <div class="form-group">
                    {!! Form::input(
                        'password', //input type
                        'password', 
                        '',
                        [
                            'class' => 'form-control', 
                            'placeholder' => 'Password (passphrase recommended)'
                        ]
                    ) !!}
                </div>
                </fieldset>
            </div>
            <div class="col-md-6">
                <fieldset>
                <legend>Business Information:</legend>
                <div class="form-group">
                    {!! Form::text(
                        'username', //input type
                        '', 
                        [
                            'class' => 'form-control', 
                            'placeholder' => 'Business Name (as Username)'
                        ]
                    ) !!}
                </div> 
                <div class="form-group">
                    {!! Form::hidden('is_merchant', true) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::text(
                        'address', //input type
                        '', 
                        [
                            'class' => 'form-control', 
                            'placeholder' => 'Address'
                        ]
                    ) !!}
                </div>
                <div class="form-group">
                    {!! Form::text(
                        'address', //input type
                        '', 
                        [
                            'class' => 'form-control', 
                            'placeholder' => 'City'
                        ]
                    ) !!}
                </div>
                <div class="form-group">
                    {!! Form::text(
                        'address', //input type
                        '', 
                        [
                            'class' => 'form-control', 
                            'placeholder' => 'Country'
                        ]
                    ) !!}
                </div>
                </fieldset>  
            </div>            
        </div>
    <br><br>
    <div class="row-fluid pull-right">        
        <div class="form-group">
            <input class="btn btn-danger pull-right"
                   type="submit"
                   value="Register">
        </div>
    </div>
    
    {!! Form::close() !!}
    </div>
</div>