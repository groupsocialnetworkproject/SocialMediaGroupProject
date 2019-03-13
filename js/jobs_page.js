window.onload = function()
{
    console.log("working");
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
    
    document.getElementById("job").addEventListener("click", function () {
        setField("ordBox", "By Title")
    });
    document.getElementById("company").addEventListener("click", function () {
        setField("ordBox", "By Company Name")
    });
    


    function setField(boxID, textIn) {
        document.getElementById(boxID).innerHTML = textIn;
    }
    
     //Animated search bar
    function expand() {
        $(".search").toggleClass("close");
        $(".input").toggleClass("square");
        if ($('.search').hasClass('close')) {
            $('input').focus();
        } else {
            $('input').blur();
        }
    }

    $('button').on('click', expand);
    //stores the windows dimensions for checking later on
    height = $(window).height();
    width = $(window).width();
    //displays the mobile menu if the screen size is small enough on the page loading
    if (width<610){
        document.getElementById("menu").style.display = "block";
        document.getElementById("mobile-search").style.display="block"
    }
    else if(width>610){
        document.getElementById("menu").style.display = "none";
        document.getElementById("mobile-search").style.display="none"
    }
    //function does the same as above but dynamically, not just on page load
    var resize = $(window).resize(function() {
        // This will execute whenever the window is re-sized
        height = $(window).height(); // New height
        width = $(window).width(); // New width
        if (width<=610){
            document.getElementById("menu").style.display = "block";
            document.getElementById("mobile-search").style.display="block"
        }
        else if(width>610){
            document.getElementById("menu").style.display = "none";
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("mobile-search").style.display="none"
        }
    });
    //displays the menu when clicked
    $('#menu').click(function(){
        document.getElementById("mySidenav").style.width = "250px";
    })
    //closes menu when exit icon is clicked
    $('#close').click(function(){
        document.getElementById("mySidenav").style.width = "0";
    })
}