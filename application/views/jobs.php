<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Responsive Job View Table</title>
    <style>
        .btn-group > .btn {
            margin-right: 5px;
            margin-bottom: 5px;
        }
        #view{
            margin-right: 5px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Jobs</h2>
        <!-- <input type="button" class="btn btn-primary float-end" value="+ Add" onclick="registration/provider_addjob"> -->
        <!-- <a id="regis" href="provider_addjob">+ Add</a></p>> -->
        <a id="regis" href="provider_addjob">+ Add</a>

        <div class="clearfix"></div>
        <br>
        
        
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Company Name</th>
                        <th>Job Title</th>
                        <th>Location</th>
                        <th>Job Type</th>
                        <th>Salary</th>
                        <th>Experience</th>
                        <th>Number of Openings</th>
                        <th>Actions</th> 
                    </tr>
                </thead>
                <?php
                        foreach($this->data['providerJobs'] as $key => $value){
                    ?>
                <tbody>
                    <tr>
                        <td><?php echo $value['id']?></td>
                        <td><?php echo $value['company_name']?></td>
                        <td><?php echo $value['job_provider_id']?></td>
                        <td><?php echo $value['location']?></td>
                        <td><?php echo $value['job_type']?></td>
                        <td><?php echo $value['salary']?></td>
                        <td><?php echo $value['experience']?></td>
                        <td><?php echo $value['number_of_openings']?></td>
                        
                        <td>
                            <div class="btn-group" role="group">
                                <button class="btn btn-primary">View</button>
                                <a id="view" href="updateAddNew/<?php echo $value['id']?>">Update</a>
                                <!-- <a id="view" onclick="confirm('Are you sure , you want to delete..?')" href="deleteAddJob">delete</a> -->
                                <a id="view" onclick="return confirm('Are you sure you want to delete?')" href="deleteAddJob/<?php echo $value['deleteId']?>">delete</a>

                                <!-- <button class="btn btn-warning">Update</button> -->
                                <!-- <button class="btn btn-danger">Delete</button> -->
                            </div>
                        </td>
                   
                    </tr>
                   
                </tbody>
                <?php
                        }
                    ?>
            </table>
        </div>
    </div>
</body>
</html>
