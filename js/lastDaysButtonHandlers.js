/* 
 * Created in NetBeans.
 * Created by Rodolfo Godinez.
 * February 18, 2019.
 */


$(document).ready(function () {
    $("#sunMarch29Btn").click(function () {
        $.ajax({
            url: "includes/sundayMarch29.php",
            type: 'POST',
            data: {method: 'displaySundayMarch29'},
            success: function (result) {
                $("#dayText").html(result);
            }
        });
    });
    
    $("#monMarch30Btn").click(function() {
        $.ajax({
           url: "includes/mondayMarch30.php",
           type: 'POST',
           data: {method: 'displayMondayMarch30'},
           success: function(result) {
               $("#dayText").html(result);
           }
        });
    });
    
    $("#tueMarch31Btn").click(function() {
        $.ajax({
           url: "includes/tuesdayMarch31.php",
           type: 'POST',
           data: {method: 'displayTuesdayMarch31'},
           success: function(result) {
               $("#dayText").html(result);
           }
        });
    });
    
    $("#thuApril2Btn").click(function() {
        $.ajax({
           url: "includes/thursdayApril2.php",
           type: 'POST',
           data: {method: 'displayThursdayApril2'},
           success: function(result) {
               $("#dayText").html(result);
           }
        });
    });
});