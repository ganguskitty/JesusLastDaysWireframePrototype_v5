/**
 * Created by NetBeans.
 * User: Rodolfo Godinez
 * Date: 8/6/18
 * Time: 7:24 PM
 */

function loadProphecies() {

    $.ajax({
        url: "includes/prophecyHandler.php",
        type: 'POST',
        data: {method: 'prophecyText'},
        success: function (result) {
            $("#prophecyListing").html(result);
        }
    });
}

function showOTProphecy(oldTestamentName) {

    var verName = oldTestamentName;

    verName = verName.replace(/,/g, "");

    verNameNew = verName.trim();

    $.ajax({
        url: "includes/prophecyHandler.php",
        type: 'POST',
        data: {method: 'displayVerse',
            verseName: verNameNew},
        success: function (result) {
            $("#prophecyTOC").html(result);
            //$("#prophecyTOC").css("display", "block");
            $("#prophecyTOC").fadeIn("slow");
        }
    });
}

function showNTProphecy(newTestamentName) {

    var verName = newTestamentName;

    verName = verName.replace(/,/g, "");

    verNameNew = verName.trim();

    $.ajax({
        url: "includes/prophecyHandler.php",
        type: 'POST',
        data: {method: 'displayVerse',
            verseName: verNameNew},
        success: function (result) {
            $("#prophecyTOC").html(result);
            $("#prophecyTOC").fadeIn("slow");
        }
    });
}

$(document).ready(function () {
    // Show hide popover
    $(".dropdown").click(function () {
        $(this).find(".dropdown-menu").slideToggle("fast");
    });
});
$(document).on("click", function (event) {
    var $trigger = $(".underline");
    if ($trigger !== event.target && !$trigger.has(event.target).length) {
        $("#prophecyTOC").fadeOut("slow");
    }
});