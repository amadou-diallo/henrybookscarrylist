<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>HB Carry List</title>
    </head>
    <body>
        <h1>Henry Books Carry List</h1>
        <table border="1">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Bk Cd</th>
                <th>Publisher</th>
                <th>Type</th>
                <th>Price</th>
                <th>Paper</th>
            </tr>
            
        <?php
           require_once("dbtest.php");
           $query = " SELECT book.book_code, book_title, author_name, author_first, publisher_name,
                     book_type, book_price, paperback 
                    FROM book, publisher, wrote, author 
                    WHERE book.book_code = wrote.book_code 
                    AND wrote.author_number = author.author_number 
                     AND book.publisher_code = publisher.publisher_code 
                  ORDER BY book_title; ";
           $result = mysqli_query($dbc, $query);
           echo "<p>HB Rows = " . mysqli_num_rows($result). "</p>";
           
           while ($row = mysqli_fetch_array($result)) {
               echo "<tr>";
               echo "<td>" .$row[1]. "</td>";
               echo "<td>" .$row[2]. ", " .$row[3]. "</td>";
               echo "<td>" .$row['book_code']. "</td>";
               echo "<td>" .$row[4]. "</td>";
               echo "<td>" .$row[5]. "</td>";
               echo "<td align=right>" .$row['book_price']. "</td>";
               echo "<td>" .$row[7]. "</td>";
               echo "</tr>";
           }
        ?>
        </table>
    </body>
</html>
