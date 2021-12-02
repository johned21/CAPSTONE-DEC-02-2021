<div class="card mb-3 mt-3" >
    <div class="card-header" id="enrollment-header">
        <h1>Payments</h1>
    </div>
    <div class="card-body">
        <div class="mb-1 mt-1">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="mb-3"><strong>Submit Proof of Payment</strong></h2>
                    <div class="row">
                        <div class="mb-3 form-group @error('payment') has-error @enderror">
                            {!! Form::label('payment','Payment Channel',[],false) !!}
                            {{Form::select('payment', [
                                'Palawan Pawnshop' => 'Palawan Pawnshop',
                                'First Consolidated Bank' => 'First Consolidated Bank',
                            ], null, ['class'=>'form-control form-select', 'id'=>'modal-input-payment'])}}
                            <span class="errspan" id="errspan">{{ $errors->first('payment') }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 form-group @error('amount') has-error @enderror">
                            {!! Form::label('amount', 'Amount Paid',[],false) !!}
                            {!! Form::number('amount', null, ['class'=>'form-control','required' => '', 'id'=>'modal-input-contact']) !!}
                            <span class="errspan" id="errspan">{{ $errors->first('amount') }}</span>  
                        </div>
                    </div>
                    <div class="uploadPhoto">
                        {{-- <div class="input-group control-group increment mt-2" >
                            <input type="file" name="requiredFile[]" value="" multiple class="form-control" accept="image/png, image/svg, image/jpeg, image/jpg">
                        </div>
                        <span class="errspan errimgfie" id="errspan">{{ $errors->first('requiredFile') }}</span>
                        <span class="errspan errimgfie" id="errspan">{{ $errors->first('requiredFile.*') }}</span> --}}
                        <input type="file" name="file_img" id="fileupload" class="form-control">
                    </div>
                    <div class="submitted-docu mt-4">
                        <h5>Payment Submitted:</h5>
                        <div class="img-holder"></div>
                    </div>
                </div>

                <div class="col-md-7">
                    <h4>Available Payment Channel</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <img src="{{asset('img/palawan.png')}}" class="card-img-top" style="height:230px;">
                                <div class="card-body">
                                    <h3 class="card-title"><strong>Palawan Express Padala</strong></h3>
                                    <h5 class="recipient"><strong>Recipient Name:</strong></h5>
                                    <p class="card-name">JOHN ED PAUL NUÑEZ</p>

                                    <h5 class="recipient"><strong>Phone Number:</strong></h5>
                                    <p class="card-name">09324113225</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="{{asset('img/fcb.png')}}" class="card-img-top" style="height:230px;">
                                <div class="card-body">
                                    <h3 class="card-title"><strong>First Consolidated Bank</strong></h3>
                                    <h5 class="recipient"><strong>Recipient Name:</strong></h5>
                                    <p class="card-name">JOHN ED PAUL NUÑEZ</p>

                                    <h5 class="recipient"><strong>Phone Number:</strong></h5>
                                    <p class="card-name">09324113225</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="form-group justify-content-between"> 
            <div class="col-md-2 float-end mt-1">
                <button class="btn btn-primary form-control"><i class="fas fa-check"></i> Finish</button> 
            </div>   
            <div class="col-md-2 float-start mt-1">
                <a href="{{ route('user.enrollment') }}" class="btn btn-danger form-control"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>
        
    </div>
    
</div>
