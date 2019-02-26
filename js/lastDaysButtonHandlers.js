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
    
    $("#cruxBtn").click(function() {
        $.ajax({
           url: "includes/crucifixionDay.php",
           type: 'POST',
           data: {method: 'displayCrucifixionDay'},
           success: function(result) {
               $("#dayText").html(result);
           }
        });
    });
    
    $("#satApril4Btn").click(function() {
        $.ajax({
           url: "includes/saturdayApril4.php",
           type: 'POST',
           data: {method: 'displaySaturdayApril4'},
           success: function(result) {
               $("#dayText").html(result);
           }
        });
    });
    
    $("#resurrectionBtn").click(function() {
        $.ajax({
           url: "includes/resurrectionDay.php",
           type: 'POST',
           data: {method: 'displayResurrectionDay'},
           success: function(result) {
               $("#dayText").html(result);
           }
        });
    });
    
    $("#monApril6Btn").click(function() {
        $.ajax({
           url: "includes/mondayApril6.php",
           type: 'POST',
           data: {method: 'displayMondayApril6'},
           success: function(result) {
               $("#dayText").html(result);
           }
        });
    });
    
    $("#sunApril12Btn").click(function() {
        $.ajax({
           url: "includes/sundayApril12.php",
           type: 'POST',
           data: {method: 'displaySundayApril12'},
           success: function(result) {
               $("#dayText").html(result);
           }
        });
    });
    
    $("#ascensionBtn").click(function() {
        $.ajax({
           url: "includes/dayOfAscension.php",
           type: 'POST',
           data: {method: 'displayDayOfAscension'},
           success: function(result) {
               $("#dayText").html(result);
           }
        });
    });
});