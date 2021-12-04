
<div class="card" id="user-card">

    <div class="card-body" id="user-card-body">
        <div class="card-header" id="enrollment-header">
            <h1>Program</h1>
        </div>
        <div class="info mt-4">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <div class="mb-1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="form-label"><strong> Student Name:</strong> <span style="color: green">John Ed Paul B. Nunez</span></label>
                                        <div class="col form-group" id="info">
                                            <label for="level" class="form-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-1">
                                <div class="row">
                                    <div class="col-md-7">
                                        <label for="" class="form-label">Level: <span style="color: green">Grade 7</span></label>
                                        <div class="col form-group" id="info">
                                            <label for="level" class="form-label"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="" class="form-label">Student Type: <span style="color: green">Regular Student</span></label>
                                        <div class="col form-group" id="info">
                                            <label for="student_type" class="form-label"></label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="row">
                                    <div class="col-md-7">
                                        <label for="" class="form-label">Track: <span style="color: green">Academics</span></label>
                                        <div class="col form-group" id="info">
                                            <label for="track" class="form-label"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="" class="form-label">Strand: <span style="color: green">GAS </span></label>
                                        <div class="col form-group" id="info">
                                            <label for="strand" class="form-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  

                </div>
            </div>
        </div>

        <div class="card-header" id="enrollment-header">
            <h1>Documents</h1>
        </div>
        <div class="info mt-4">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 mt-2">

                            <div class="mb-1">
                                <div class="row">
                                    <div class="col-md-7">
                                        <label for="" class="form-label">Title: <span style="color: green">asdasdasdsad</span></label>
                                        <div class="col form-group" id="info">
                                            <label for="level" class="form-label"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="" class="form-label">Remarks: <span style="color: green">Regular Student</span></label>
                                        <div class="col form-group" id="info">
                                            <label for="student_type" class="form-label"></label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="row">
                                    <div class="col-md-7">
                                        <label for="" class="form-label">Submitted Requirements :</label>
                                        <div class="col form-group mt-2" id="info">
                                            <img src="{{asset('img/file-img.png')}}" alt="" style="width: 100px; height:120px;">
                                            <img src="{{asset('img/file-img.png')}}" alt="" style="width: 100px; height:120px;">
                                            <img src="{{asset('img/file-img.png')}}" alt="" style="width: 100px; height:120px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>

        <div class="card-header" id="enrollment-header">
            <h1>Payments</h1>
        </div>
        <div class="info mt-4">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 mt-2">

                            <div class="mb-1">
                                <div class="row">
                                    <div class="col-md-7">
                                        <label for="" class="form-label">Payment Channel: <span style="color: green">Palawan Pawnshop</span></label>
                                        <div class="col form-group" id="info">
                                            <label for="level" class="form-label"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="" class="form-label">Amount Paid: <span style="color: green">Php5,000</span></label>
                                        <div class="col form-group" id="info">
                                            <label for="student_type" class="form-label"></label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="row">
                                    <div class="col-md-7">
                                        <label for="" class="form-label">Submitted Payments:</label>
                                        <div class="col form-group mt-2" id="info">
                                            <img src="{{asset('img/file-img.png')}}" alt="" style="width: 100px; height:120px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>

        <hr>

        <div class="form-group justify-content-between"> 
            <div class="col-md-2 float-end mt-1">
                <button class="btn btn-primary form-control"><i class="fas fa-check"></i> Finish</button> 
            </div>   
            <div class="col-md-2 float-start mt-1">
                <a href="{{ route('user.enrollment') }}" class="btn btn-danger form-control"><i class="fas fa-arrow-left"></i> Back to Payments</a>
            </div>
        </div>
    </div>
</div>
