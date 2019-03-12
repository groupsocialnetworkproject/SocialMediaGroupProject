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
  		<link type="text/css" rel="stylesheet" href="jobs_page.css">
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
            <div class="row">
            	<div class="col-4" id="filters">
            		<div class="row">
            			<div class="col-12" id="filterButtons">
							<div class="row" id="space10"></div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Field
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button" id="soft">Software and Technology</button>
                                        <button class="dropdown-item" type="button" id="mech">Mechanical Engineering</button>
                                        <button class="dropdown-item" type="button" id="elec">Electronic Engineering</button>
                                        <button class="dropdown-item" type="button" id="chem">Chemical Engineering</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-5" id="filterText">
                                    <span class="align-middle" id="fieBox"></span>
                                </div>
                            </div>
							<div class="row" id="space10"></div>
							<div class="row">
                                <div class="col-6">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Contract Type
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button" id="part">Part Time Placement</button>
                                        <button class="dropdown-item" type="button" id="grad">Graduate Jobs</button>
                                        <button class="dropdown-item" type="button" id="summ">Summer Placement</button>
                                        <button class="dropdown-item" type="button" id="12mon">12 Month Placement</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-5" id="filterText">
                                    <span class="align-middle" id="typBox"></span>
                                </div>
                            </div>
							<div class="row" id="space10"></div>
							<div class="row">
                                <div class="col-6">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Salary
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button" id="10k">£0 - 10000</button>
                                        <button class="dropdown-item" type="button" id="20k">£10000 - 20000</button>
                                        <button class="dropdown-item" type="button" id="30k">£20000 - 30000</button>
                                        <button class="dropdown-item" type="button" id="more">£30000 +</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-5" id="filterText">
                                    <span class="align-middle" id="salBox"></span>
                                </div>
                            </div>
							<div class="row" id="space10"></div>
							<div class="row">
                                <div class="col-6">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Location
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button" id="SY">South Yorkshire</button>
                                        <button class="dropdown-item" type="button" id="NY">North Yorkshire</button>
                                        <button class="dropdown-item" type="button" id="EY">East Yorkshire</button>
                                        <button class="dropdown-item" type="button" id="WY">West Yorkshire</button>
                                        <button class="dropdown-item" type="button" id="other">Everywhere else is pointless</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-5" id="filterText">
                                    <span class="align-middle" id="locBox"></span>
                                </div>
                            </div>
                            <div class="row" id="space10"></div>
							<div class="row">
                                <div class="col-6">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Order By
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button" id="byTitle">Job Title</button>
                                        <button class="dropdown-item" type="button" id="byCompany">Company Name</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-5" id="filterText">
                                    <span class="align-middle" id="ordBox"></span>
                                </div>
                            </div>
							<div class="row" id="space10"></div>
          				</div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary" onclick="order()" id="searchBTN">Update Results</button>
                        </div>
           			</div>
                    <div class="row" id="space10"></div>
            	</div>
                <div class="col-1"></div>
                <div class="col-7" id="jobsInfoContainer">
                    <div class="row">
                        <div class="col-4">
                            <h>Jobs Found</h>
                        </div>
                        <div class="col-4">
                            <h>Companies Found</h>
                        </div>
                        <div class="col-4">
                            <h>Average Salary</h>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-2" id="numOfJobs">
                            <td class="align-middle">
                                <?php
                                    echo count($jobs_array);
                                ?>
                            </td>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-2" id="nums">
                            <td class="align-middle">
                                <?php
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
                        <div class="col-1"></div>
                    </div>
                    <div class="row" id="space10"></div>
                </div>
        	</div>
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

                var field = document.getElementById("fieBox").textContent;
                var type = document.getElementById("typBox").textContent;
                var salary = document.getElementById("salBox").textContent;
                var location = document.getElementById("locBox").textContent;
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
        <script src="jobs_page.js"></script>
    </body>