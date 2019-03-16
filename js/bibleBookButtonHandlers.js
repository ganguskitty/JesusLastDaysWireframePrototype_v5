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

function showChapters(bookID, bookName, num) { //Called from the oldTestamentBooksList() and newTestamentBooksList() from the books.php, 
    //displays chapter menu for the book selected.
    var bookID = bookID;
    var book = bookName;
    var numOfChapters = num;
    //var chapterNumber;

    $("#bookChapterMenu").empty();//Clear chapter menu before showing other chapters

    for (i = 1; i <= numOfChapters; i++) {
        $("#bookChapterMenu").append("<button type='button' name='" + book + "' id='" + i + "' class='list-group-item list-group-item-action chapterBtns' onclick='loadText(this.id, this.name," + bookID + ")'>" + i + "</button>");//Shows chapter menu.

    }

    chapterNameHandler(book);
    

}

//This function creates the book title for the chapter menu.
function chapterNameHandler(book) {
    var bookName = book
    //alert(buttonID);

    $("#bookNameForChapterMenu").html(bookName);
}

//function bookChapterNameHandler(textTitle) {
//    var textTitle = bookName + " " + chapterNum;
//    
//    $("#bookNameForChapterMenu").html(titleAndChapter);
//}

function loadText(buttonID, book, bookID) { //Capture click event from chapter button to display chapter content.
    var btnID = buttonID; //ID of the button clicked
    var bookName = book; //Name of the Bible book
    var bkID = bookID;
    var textTitle = bookName + ", Chapter: " + buttonID;

    //alert(bookName + ", " + buttonID + ", " + bkID);

    $.ajax({//Pull chapter content
        url: "includes/books.php",
        type: 'POST',
        data: {method: 'loadChapterText',
            btnID: btnID,
            bookName: bookName,
            bkID: bkID},
        success: function (result) {
            $("#bookChapterMenu").html(result);
            $("#bookNameForChapterMenu").html(textTitle);
        }
    });
}