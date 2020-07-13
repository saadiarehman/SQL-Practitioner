<?php
require 'function.php';
require 'task.php';

try{
    $pdo =new PDO('mysql:host=127.0.0.1;dbname=bookstore','root','');
    $sql='SELECT distinct books.title,AUTHORS.name FROM author_book JOIN AUTHORS on author_book.author_id = authors.author_id JOIN books on author_book.book_id = books.book_id ';
    $result=$pdo->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);

}catch(PDOException $e){
    die('Could not connect');
}
     

?>



<html>
    <head>
    </head>
    <body>
        
            <h1>Author Name with Book Title</h1>
            
            <?php while ($row = $result->fetch()): ?>
                            <?php echo $row['title']  ?>
                            ---
                            <?php echo $row['name'] ?>
                           <br>
                            
                                                    
            <?php endwhile; ?>
            
                           
    </body>

</html>