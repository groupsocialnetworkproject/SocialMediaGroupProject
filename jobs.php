<!DOCTYPE html>
<html>
    <head>
       	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  		<link type="text/css" rel="stylesheet" href="jobs_page.css?version=1">
  		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <?php  include_once 'db_connect.php'; include_once 'job_objects.php'; ?>
        
    </head>
    <body>
        <div class="row" id="space30"></div>
    	<div id="container">
            <div class="row">
            	<div class="col-12" id="title">
            		<span class="align-middle">Student, Graduate and Placement Jobs Page</span>
            	</div>
            </div>
            <div class="row" id="space10"></div>
            <div class="row" id="filterwidth_mobile">
        <div class="col" id="filterButtons_mobile">
            <div class="row" id="space10"></div>
            <div class="row">
                <div class="col-6">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>Field</p>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button" id="soft_mob">Software and Technology</button>
                            <button class="dropdown-item" type="button" id="mech_mob">Mechanical Engineering</button>
                            <button class="dropdown-item" type="button" id="elec_mob">Electronic Engineering</button>
                            <button class="dropdown-item" type="button" id="chem_mob">Chemical Engineering</button>
                        </div>
                    </div>
                </div>
                <div class="col-5" id="filterText_mobile">
                    <span class="align-middle" id="fieBox_mob"></span>
                </div>
            </div>
            <div class="row" id="space10"></div>
            <div class="row">
                <div class="col-6">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>Contract <br />Type</p>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button" id="part_mob">Part Time Placement</button>
                            <button class="dropdown-item" type="button" id="grad_mob">Graduate Jobs</button>
                            <button class="dropdown-item" type="button" id="summ_mob">Summer Placement</button>
                            <button class="dropdown-item" type="button" id="12mon_mob">12 Month Placement</button>
                        </div>
                    </div>
                </div>
                <div class="col-5" id="filterText_mobile">
                    <span class="align-middle" id="typBox_mob"></span>
                </div>
            </div>
            <div class="row" id="space10"></div>
            <div class="row">
                <div class="col-6">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>Salary</p>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button" id="10k_mob">£0 - 10000</button>
                            <button class="dropdown-item" type="button" id="20k_mob">£10000 - 20000</button>
                            <button class="dropdown-item" type="button" id="30k_mob">£20000 - 30000</button>
                            <button class="dropdown-item" type="button" id="more_mob">£30000 +</button>
                        </div>
                    </div>
                </div>
                <div class="col-5" id="filterText_mobile">
                    <span class="align-middle" id="salBox_mob"></span>
                </div>
            </div>
            <div class="row" id="space10"></div>
            <div class="row">
                <div class="col-6">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>Location</p>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button" id="SY_mob">South Yorkshire</button>
                            <button class="dropdown-item" type="button" id="NY_mob">North Yorkshire</button>
                            <button class="dropdown-item" type="button" id="EY_mob">East Yorkshire</button>
                            <button class="dropdown-item" type="button" id="WY_mob">West Yorkshire</button>
                            <button class="dropdown-item" type="button" id="other_mob">Everywhere else is pointless</button>
                        </div>
                    </div>
                </div>
                <div class="col-5" id="filterText_mobile">
                    <span class="align-middle" id="locBox_mob"></span>
                </div>
            </div>
            <div class="row" id="space10"></div>
            <div class="row">
                                <div class="col-6">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <p>Order By</p>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button" id="job">Job Title</button>
                                        <button class="dropdown-item" type="button" id="company">Company Name</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-5" id="filterText">
                                    <span class="align-middle" id="ordBox"></span>
                                </div>
                            </div>
            <div class="row" id="space10"></div>
            <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary" onclick="order()" id="searchBTN">Update Results</button>
                        </div>
           			</div>
            <div class="row" id="space10"></div>
        </div>
    </div>
     <div class="row" id="JobsContainer_mobile">
        <div class="col" id="jobsInfoContainer_mobile">
            <div class="row" id="Titles">
                <div class="col-4">
                    <h>Jobs Found</h>
                </div>
                <div class="col-4">
                    <h>Average Salary</h>
                </div>
                <div class="col-4">
                    <h>Number of Companies</h>
                </div>
            </div>
            <div class="row" id="score">
                <div class="col-1" id="score1"></div>
                <div class="col-2" id="numOfJobs">
                    <td class="align-middle">
                                <?php
                                    echo count($jobs_array);
                                ?>
                    </td>
                </div>
                <div class="col-2"></div>
                <div class="col-2" id="average_sal">
                    <td class="align-middle">
                                <?php
                                    $total = 0;
                                    for($x = 0; $x < sizeof($jobs_array); $x++)
                                    {
                                        $total = $total + $jobs_array[$x]->getSalary(); 
                                    }
                                    echo $total / sizeof($jobs_array)
                                ?>
                    </td>
                </div>
                <div class="col-2"></div>
                <div class="col-2" id="numOfCompanies">
                    <td class="align-middle">100</td>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row" id="space10"></div>
        </div>
    </div>
    <div class="row" id="space30"></div>
            <div class="row" id="space30"></div>
            <div class="row">
                <div class="col-2" id="column_table"><p>Job Title</p></div>
                <div class="col-2" id="column_table"><p>Company</p></div>
                <div class="col-2" id="column_table"><p>Location</p></div>
                <div class="col-2" id="column_table"><p>Salary</p></div>
                <div class="col-4" id="column_table"><p>Job Description</p></div>
            </div>
            <div class="row">
                <div class="col-12" id="jobList">
                    <div>
                        <?php
                        $sql = "SELECT * FROM jobs_new";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        foreach($jobs_array as $job){
                            echo "<div class='row'>
                                        <div class='row' id='jobad_background'></div>
                                        <div class='col-2'><p>" . $job->getTitle() . "</p></div>
                                        <div class='col-2'><p>" . $job->getCompany() . "</p></div>
                                        <div class='col-2'><p>" . $job->getLocation() . "</p></div>
                                        <div class='col-2'><p>" . $job->getSalary() . "</p></div>
                                        <div class='col-4'><p>" . $job->getDescription() . "</p></div>
                                    </div><hr>";
                        }
                        ?>  
                    </div>
                </div>
            </div>
        </div>
        <script>
            function order() {

                var field = document.getElementById("fieBox_mob").textContent;
                var type = document.getElementById("typBox_mob").textContent;
                var salary = document.getElementById("salBox_mob").textContent;
                var location = document.getElementById("locBox_mob").textContent;
                var orderBy = document.getElementById("ordBox").textContent;

                var xhttp;    
                console.log("function was called");    
                    $.ajax({
                        url: 'jobs_filtering.php', //This is the current doc
                        type: "POST",
                        data: ({field: field, type:type, salary:salary, location:location, orderBy:orderBy}),
                        success: function(data){
                            var filtered_jobs = JSON.parse(data);
                            console.log("filtering successful");
                            
                            var node = document.getElementById('jobList').innerHTML = "";
                                
                            for(i = 0; i < filtered_jobs.length; i++)
                            {
                                var node = document.getElementById('jobList').innerHTML += 
                                "<div class='row'> <div class='col-2'><p>" + filtered_jobs[i].title + "</p></div><div class='col-2'><p>" + filtered_jobs[i].company + "</p></div><div class='col-2'><p>" + filtered_jobs[i].location + "</p></div><div class='col-2'><p>" + filtered_jobs[i].salary + "</p></div><div class='col-4'><p>" + filtered_jobs[i].description + "</p></div></div><hr>";
                            }
                            
                            document.getElementById("numOfJobs").innerHTML = filtered_jobs.length;
                            var total = 0;
                            for(i = 0; i < filtered_jobs.length; i++){
                                total = total + parseInt(filtered_jobs[i].salary);
                            }
                            var output = total / filtered_jobs.length;
                            document.getElementById("average_sal").innerHTML = output; 
                        }
                    });   
            }                
        </script>
        <script src="jobs_page.js?version=1"></script>
    </body>