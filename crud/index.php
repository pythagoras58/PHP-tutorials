<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css"
        integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.10/sweetalert2.css"
        integrity="sha512-otyZKuy0m2Vb2a/PvF29koS+TY1OB06a7YrE0Fvajv3L2crkLNNoxviT294+22mjLhWZ3z/Yb+vIy3ohjYP7Rg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.css" integrity="sha512-p++g4gkFY8DBqLItjIfuKJPFvTPqcg2FzOns2BNaltwoCOrXMqRIOqgWqWEvuqsj/3aVdgoEo2Y7X6SomTfUPA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
</head>

<body>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#"><i class="fab fa-wolf-pack-battalion"></i> Pythagorasweb</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Service</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-1">
                <h4 class="text-center text-primary">MINI MANAGER</h4>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6">
                <h4 class="text text-primary">All Data In DB!</h4>
            </div>
            <div class="col-lg-6">
                <button type="button" class="btn btn-outline-primary m-1 float-right" id="newUser"><i
                        class="fas fa-user-plus fa-lg"></i>&nbsp;&nbsp; Add User</button>
                <a href="#" class="btn btn-outline-success m-1 float-right"><i
                        class="fas fa-table fa-lg"></i>&nbsp;&nbsp; Export to Excel</a>
            </div>
        </div>

        <hr class="my-1">

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive" id="showUser">
                   
                        
                        
                </div>
            </div>
        </div>
    </div>


    <!-- The Add New User Modal -->
    <div class="modal fade" id="newUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text text-primary" style="margin-left:32%">Add New User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body px-4">
                    <form action="" method="post" id="form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fName"  placeholder="FIRST NAME"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="lName"  placeholder="LAST NAME"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email"  placeholder="EMAIL"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="PHONE"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-outline-primary btn-block" name="insert" id="insert" value="Add User">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!---END MODAL-->


     <!-- The Edit User Modal -->
     <div class="modal fade" id="editUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text text-primary" style="margin-left:37%">Edit User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body px-4">
                    <form action="" method="post" id="edit-form-data">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fName" id="e_fName" 
                                required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="lName" id="e_lName" 
                                required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="e_email" 
                                required>
                        </div>

                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" id="e_phone" 
                                required>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-outline-primary btn-block" name="update" id="update" value="Edit User">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!---END MODAL-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
        integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.10/sweetalert2.all.min.js"
        integrity="sha512-hqj3uRcg6pYUd2hJHI1k1qKyf8PA/YMWcEV9hTlD+mpnUKe2mpzS7Epp8FCQrGG632TEp2Bn194SN69Auykcdg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $(document).ready(function () {
           

            showUsers();
            function showUsers() {
                $.ajax({
                    url:"action.php",
                    type: "POST",
                    data: {action:"view"},
                    success: function(res){
                        // console.log(res);
                        $('#showUser').html(res);
                        $('table').DataTable({
                            order: [0,'desc']
                        });
                    }
                });
            }

            // data insertion.
            $('#insert').click(function(e){
                if($('#form-data')[0].checkValidity()){
                    e.preventDefault();

                    // insert with ajax call
                    $.ajax({
                        url: 'action.php',
                        type: 'POST',
                        data: $('#form-data').serialize()+'&action=insert',
                        success: function(res){
                            Swal.fire({
                                title: 'User Created Successfully',
                                type: 'success'
                            });
                            $('#newUserModal').modal('hide');
                            $('#form-data')[0].reset();
                            showUsers();
                        }
                    });
                }
            });


            // edit user
            $('body').on('click', '.editBtn', function(e){
                e.preventDefault();
                edit_id = $(this).attr('id');
                
                $.ajax({
                    url: 'action.php',
                    type: 'POST',
                    data: {edit_id:edit_id},
                    success:function(res){
                        console.log(res);
                    }
                });
            });

        });

        $(document).on('click', '#newUser', function() {
            $('#newUserModal').modal({
                backdrop: 'static'
            });
        });

    </script>
</body>

</html>