<?php
    include_once 'job_objects.php';
    //echo $jobs_array[0]->getTitle();

    function cmp($a, $b)
    {
        return strcmp($a->getCompany(), $b->getCompany());
    }

    usort($jobs_array, "cmp");
    
    foreach($jobs_array as $job){
        echo "<div class='row'>
            <div class='col-2'><p>" . $job->getTitle() . "</p></div>
            <div class='col-2'><p>" . $job->getCompany() . "</p></div>
            <div class='col-2'><p>" . $job->getLocation() . "</p></div>
            <div class='col-2'><p>" . $job->getSalary() . "</p></div>
            <div class='col-4'><p>" . $job->getDescription() . "</p></div>
            </div>";
    }
?>