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
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Jobs</h2>
        <input type="button" class="btn btn-primary float-end" value="+ Add">
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
                        <!-- <th>Description</th> -->
                        <th>Actions</th> <!-- New Column for Actions -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Data 1</td>
                        <td>Data 2</td>
                        <td>Data 3</td>
                        <td>Data 4</td>
                        <td>Data 5</td>
                        <td>Data 6</td>
                        <td>Data 7</td>
                        <!-- <td>Data 8</td> -->
                        <td>Data 9</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button class="btn btn-primary">View</button>
                                <button class="btn btn-warning">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <!-- Add more rows here -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
