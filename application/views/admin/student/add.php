<?php $this->load->view('admin/includes/header'); ?>
<?php $this->load->view('admin/includes/topnavbar'); ?>

<!-- Main Sidebar Container -->
<?php $this->load->view('admin/includes/sidebar'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Student List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Simple Tables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Student</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <?php echo form_open(base_url().'admin/student/add',array('method'=>'post')); ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Studnet name</label>
                                        <input type="text"  value="<?php echo set_value('student_name'); ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Student Name" name="student_name">
                                        <?php echo form_error('student_name','<p class="error">','</p>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Student email"  name="email">
                                        <?php echo form_error('email'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile No.</label>
                                        <input type="text" value="<?php echo set_value('mobile_no'); ?>"  class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile No."  name="mobile_no">
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            <?php echo form_close();?>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php $this->load->view('admin/includes/footer'); ?>
