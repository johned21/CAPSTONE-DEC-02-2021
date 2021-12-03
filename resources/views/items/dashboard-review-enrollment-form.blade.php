
<div class="card" id="user-card">

    <div class="card-body" id="user-card-body">
        <div class="card-header" id="enrollment-header">
            <h1>Enrollment Details</h1>
        </div>
        <div class="info mt-4">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 mt-4">
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
                    <hr>
                    <div class="row mt-5">
                        <h2>Subjects Taken:</h2>
                        <table class="table table-success table-striped table-hover"> 
                            <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Time</th>
                                </tr>
                              </thead>
                            <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Math</td>
                                  <td>8:00 - 9:00AM</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>English</td>
                                  <td>9:00 - 10:00AM</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Science</td>
                                  <td>11:00 - 12:00AM</td>
                                </tr>
                              </tbody>
                        </table>
                    </div>

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
        </div>
    </div>
</div>
