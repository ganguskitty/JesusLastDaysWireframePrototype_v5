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
       })
}