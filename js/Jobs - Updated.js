window.onload = function()
{
    document.getElementById("soft").addEventListener("click", function () {
        setField("fieBox", "Software and Technology")
    });
    document.getElementById("mech").addEventListener("click", function () {
        setField("fieBox", "Mechanical Engineering")
    });
    document.getElementById("elec").addEventListener("click", function () {
        setField("fieBox", "Electronic Engineering")
    });
    document.getElementById("chem").addEventListener("click", function () {
        setField("fieBox", "Chemical Engineering")
    });

    document.getElementById("10k").addEventListener("click", function () {
        setField("salBox", "£0 - £10k")
    });
    document.getElementById("20k").addEventListener("click", function () {
        setField("salBox", "£10k - £20k")
    });
    document.getElementById("30k").addEventListener("click", function () {
        setField("salBox", "£20k - £30k")
    });
    document.getElementById("more").addEventListener("click", function () {
        setField("salBox", "£30k +")
    });

    document.getElementById("grad").addEventListener("click", function () {
        setField("typBox", "Grad Jobs")
    });
    document.getElementById("part").addEventListener("click", function () {
        setField("typBox", "Part Time Placements")
    });
    document.getElementById("summ").addEventListener("click", function () {
        setField("typBox", "Summer Placements")
    });
    document.getElementById("12mon").addEventListener("click", function () {
        setField("typBox", "12 Month Placements")
    });

    document.getElementById("NY").addEventListener("click", function () {
        setField("locBox", "North Yorkshire")
    });
    document.getElementById("EY").addEventListener("click", function () {
        setField("locBox", "East Yorkshire")
    });
    document.getElementById("WY").addEventListener("click", function () {
        setField("locBox", "West Yorkshire")
    });
    document.getElementById("SY").addEventListener("click", function () {
        setField("locBox", "South Yorkshire")
    });
    document.getElementById("other").addEventListener("click", function () {
        setField("locBox", "pointless")
    });

    document.getElementById("tabJob").addEventListener("click", function () {
        getJobsInfo("byJob", "jobList")
    })
    document.getElementById("tabCompany").addEventListener("click", function () {
        getJobsInfo("byCompany", "jobList")
    })

    //MOBILE VERSION**************************************************************
    document.getElementById("soft_mob").addEventListener("click", function () {
        setField("fieBox_mob", "Software and Technology")
    });
    document.getElementById("mech_mob").addEventListener("click", function () {
        setField("fieBox_mob", "Mechanical Engineering")
    });
    document.getElementById("elec_mob").addEventListener("click", function () {
        setField("fieBox_mob", "Electronic Engineering")
    });
    document.getElementById("chem_mob").addEventListener("click", function () {
        setField("fieBox_mob", "Chemical Engineering")
    });

    document.getElementById("10k_mob").addEventListener("click", function () {
        setField("salBox_mob", "£0 - £10k")
    });
    document.getElementById("20k_mob").addEventListener("click", function () {
        setField("salBox_mob", "£10k - £20k")
    });
    document.getElementById("30k_mob").addEventListener("click", function () {
        setField("salBox_mob", "£20k - £30k")
    });
    document.getElementById("more_mob").addEventListener("click", function () {
        setField("salBox_mob", "£30k +")
    });

    document.getElementById("grad_mob").addEventListener("click", function () {
        setField("typBox_mob", "Grad Jobs")
    });
    document.getElementById("part_mob").addEventListener("click", function () {
        setField("typBox_mob", "Part Time Placements")
    });
    document.getElementById("summ_mob").addEventListener("click", function () {
        setField("typBox_mob", "Summer Placements")
    });
    document.getElementById("12mon_mob").addEventListener("click", function () {
        setField("typBox_mob", "12 Month Placements")
    });

    document.getElementById("NY_mob").addEventListener("click", function () {
        setField("locBox_mob", "North Yorkshire")
    });
    document.getElementById("EY_mob").addEventListener("click", function () {
        setField("locBox_mob", "East Yorkshire")
    });
    document.getElementById("WY_mob").addEventListener("click", function () {
        setField("locBox_mob", "West Yorkshire")
    });
    document.getElementById("SY_mob").addEventListener("click", function () {
        setField("locBox_mob", "South Yorkshire")
    });
    document.getElementById("other_mob").addEventListener("click", function () {
        setField("locBox_mob", "pointless")
    });


    function setField(boxID, textIn) {
        document.getElementById(boxID).innerHTML = textIn;
    }

    function getJobsInfo(choice, location) {
        if (choice == "byJob") {
            document.getElementById(location).innerHTML = "Job title ordering apprears here";
        }
        if (choice == "byCompany") {
            document.getElementById(location).innerHTML = "Company ordering appears here";
        }
    }

    //*******NOTE THESE ARE SAME VARIABLE NAMES AS HEADER RESIZE FUNCTION. IF AN ERROR OCCURS ITS PROBABLY THE VARIABLE NAMES CLASHING...
    //...MERGE INTO ONE FUNCTION
    //stores the windows dimensions for checking later on
    height = $(window).height();
    width = $(window).width();
    //displays the mobile version of jobs page if the screen size is small enough on the page loading
    if (width<610){
        document.getElementById("filterwidth_mobile").style.display = "block";
        document.getElementById("jobsInfoContainer_mobile").style.display = "block";
    }
    else if(width>610){
        document.getElementById("filterwidth_mobile").style.display = "none";
        document.getElementById("jobsInfoContainer_mobile").style.display = "none";
    }
    //function does the same as above but dynamically, not just on page load
    var resize = $(window).resize(function() {
        // This will execute whenever the window is re-sized
        height = $(window).height(); // New height
        width = $(window).width(); // New width
        if (width<=610){
            document.getElementById("filterwidth_mobile").style.display = "block";
            document.getElementById("jobsInfoContainer_mobile").style.display = "block";
        }
        else if(width>610){
            document.getElementById("filterwidth_mobile").style.display = "none";
            document.getElementById("jobsInfoContainer_mobile").style.display = "none";
        }
    });

};