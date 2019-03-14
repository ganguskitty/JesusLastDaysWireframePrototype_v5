/* 
 * Created in NetBeans.
 * Created by Rodolfo Godinez.
 * February 18, 2019.
 */

function loadBookTitles() {

    $.ajax({//Pulls Old Testament data
        url: "includes/books.php",
        type: 'POST',
        data: {method: 'oldTestamentBooksList'},
        success: function (result) {
            $("#oldTestamentBooks").html(result);
        }
    });

    $.ajax({//Pulls New Testament data
        url: "includes/books.php",
        type: 'POST',
        data: {method: 'newTestamentBooksList'},
        success: function (result) {
            $("#newTestamentBooks").html(result);
        }
    });
}

function showChapters(bookName, num) { //Called from the oldTestamentBooksList() and newTestamentBooksList() from the books.php, 
    //displays chapter menu for the book selected.
    var book = bookName;
    var numOfChapters = num;
    //var chapterNumber;

    $("#bookChapterMenu").empty();//Clear chapter menu before showing other chapters

    for (i = 1; i <= numOfChapters; i++) {
        $("#bookChapterMenu").append("<button type='button' name='" + book + "' id='chapter" + i + "' class='list-group-item list-group-item-action chapterBtns' onclick='loadText(this.id, this.name)'>" + i + "</button>");//Shows chapter menu.

    }
    
    chapterNameHandler(book);

}

//This function creates the book title for the chapter menu.
function chapterNameHandler(book) {
    var buttonID = book
    //alert(buttonID);

    $("#bookNameForChapterMenu").html(buttonID);
}

function loadText(buttonID, book) { //Capture click event from chapter button to display chapter content.
    var buttonID = buttonID;
    var bookName = book;
    
    alert(bookName + ", " + buttonID);
    
    $.ajax({//Pull chapter content
        url: "includes/books.php",
        type: 'POST',
        data: {method: 'loadChapterText',
        },
        success: function (result) {
            $("#newTestamentBooks").html(result);
        }
    });
}