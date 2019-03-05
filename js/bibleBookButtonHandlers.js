/* 
 * Created in NetBeans.
 * Created by Rodolfo Godinez.
 * February 18, 2019.
 */

function loadBookTitles() {

    $.ajax({
        url: "includes/books.php",
        type: 'POST',
        data: {method: 'oldTestamentBooksList'},
        success: function (result) {
            $("#oldTestamentBooks").html(result);
        }
    });

    $.ajax({
        url: "includes/books.php",
        type: 'POST',
        data: {method: 'newTestamentBooksList'},
        success: function (result) {
            $("#newTestamentBooks").html(result);
        }
    });
}

$(document).ready(function () {

    $.ajax({//Shows book menu
        url: 'includes/books.php',
        type: 'POST',
        data: {method: 'bookChapters'},
        success: function (result) {
            $("#bookChapterMenu").html(result);
        }
    });
});

function showChapters(bookID, num) {
    var book = bookID;
    var numOfChapters = num;

    //document.getElementById("bookNameForChapterMenu").innerHTML = "Chapter Name";
    //$("#bookForChapterMenu").add("<h3>" + nameOfBook + "</h3>");

    $("#bookChapterMenu").empty();//Clear chapter menu before showing other chapters

    for (i = 1; i <= numOfChapters; i++) {
        $("#bookChapterMenu").append("<button type='button' class='list-group-item list-group-item-action chapterBtns'>" + i + "</button>");//Shows chapter menu.
    }

    chapterNameHandler(book);

}

//This function creates the book title for the chapter menu.
function chapterNameHandler(id) {
    var buttonID = id
    //alert(buttonID);
    
    $("#bookNameForChapterMenu").html(buttonID);
}
