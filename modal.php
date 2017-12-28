<div class="modal fade" id="reserveModal<?php echo $e; ?>" role="dialog" tab-index="-1" >
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Reserve</h5>
                        <button type="button" class="close hover" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center">Locker No.<?php echo $e; ?></h4>
                        <form action="" method="POST" class="form-horizontal mt-5">
                            <input type="hidden" name="locker" value=<?php echo $d; ?>>
                            <div class="form-group row">
                            <label for="idno" class="col-sm-2 col-form-label">ID No.</label>
                                <div class="col-sm-10">
                                <input type="number" name="idno" id="idno" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                <input type="text" name="fname" id="fname" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-10">
                                <input type="text" name="lname" id="lname" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="course" class="col-sm-2 col-form-label">Course</label>
                                <div class="col-sm-10">
                                <select name="course" id="course" class="form-control">
                                    <option value="" disabled selected>--</option>
                                    <option value="">BSIT</option>
                                    <option value="">ACT</option>
                                </select>
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary hover" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-outline-primary hover">Reserve</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        if(isset($_POST['submit'])){
            $locker_id = $_POST['locker'];
            reserveLocker($locker_id,$_SESSION['id']);
        }
        ?>