<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D3-T6</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-dark mt-5 pt-5">  
    <!-- startint form  -->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <form class="was-validated text-light">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationServer01">Full Name</label>
                                <input type="text" class="form-control is-valid" id="validationServer01" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Please Enter Your Full Name.
                                  </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationServer02">Email</label>
                                <input type="email" class="form-control is-valid" id="validationServer02"  required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Please Enter Your Email.
                                  </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationServer03">Age</label>
                                <input type="number" class="form-control is-valid" id="validationServer03"  required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Please Enter Your Age.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationServer04">Degree</label>
                                <input type="number" class="form-control is-valid" min="0" max="100" id="validationServer04"  required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Please Enter a Degree from 0 to 100.
                                  </div>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="col-md-12 mb-3 mt-4">
                            <select class="custom-select" required>
                              <option value="">Choose...</option>
                              <option value="m">Male</option>
                              <option value="f">Female</option>
                            </select>
                            <div class="invalid-feedback">Choose Your Gender</div>
                          </div>
                        </div>
                        <div class="mb-3">
                            <label for="validationTextarea">message</label>
                            <textarea class="form-control is-invalid" id="validationTextarea"  required></textarea>
                            <div class="invalid-feedback">
                              Please enter a message.
                            </div>
                          </div>
                       <div class="form-row d-flex justify-content-center">
                        <button class="btn btn-success mx-2" type="submit">Submit Data</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Show Data
                          </button>
                       </div>
                    </form>
                </div>            
            </div>
        </div>
    <!-- ending form  -->
     <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Student list</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <!-- tabel    -->
                <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">name</th>
                        <th scope="col">degree</th>
                        <th scope="col">rating</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Ahmed</td>
                        <td>90</td>
                        <td>excellent</td>
                      </tr>
                      <tr>
                        <td>Ali</td>
                        <td>72</td>
                        <td>good</td>
                      </tr>
                      <tr>
                        <td>fatma</td>
                        <td>45</td>
                        <td>fail</td>
                      </tr>
                    </tbody>
                  </table>
                <!-- tabel    -->
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>





    <script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.slim.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>