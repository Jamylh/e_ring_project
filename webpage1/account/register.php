<?php
include('header.php')
?>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <form action="../include/register.php" method="">
                            <div class="form-group row">
                                <label for="frist_n" class="col-md-4 col-form-label text-md-right">Frist Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="frist_n" class="form-control" name="frist_n" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="last_n" class="col-md-4 col-form-label text-md-right">Last Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="last_n" class="form-control" name="last_n" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="r_password" class="col-md-4 col-form-label text-md-right">Re-Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="r_password" class="form-control" name="r_password" required>
                                </div>
                            </div>

                              <div class="form-group row">
                                <label for="Gender" class="col-md-4 col-form-label text-md-right">Gender</label>
                                <div class="col-md-4">
                                <select class="form-control" id="Gender">
                                  <option>choose gender</option>
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                                </select>                                </div>
                            </div> 
                            <div class="form-group row">
                                <label for="id_student" class="col-md-4 col-form-label text-md-right">ID Student</label>
                                <div class="col-md-4">
                                    <input type="number" id="id_student" class="form-control" name="id_student" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name_unver" class="col-md-4 col-form-label text-md-right">Name Unversity</label>
                                <div class="col-md-6">
                                    <input type="text" id="name_unver" class="form-control" name="name_unver" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="comment">About you:</label>
                                <textarea class="form-control" rows="5" name="about" id="about"></textarea>
                             </div>



                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    Register
                                </button>
  
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
<?php close_db(); ?>





</body>
</html>