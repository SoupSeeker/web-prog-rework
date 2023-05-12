<?php
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = 'root';
    $DATABASE_NAME = 'users';
    // Use data from above to try to connect to mamp mysql server
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if (mysqli_connect_errno()) {
      exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
    //connection successful
    if(isset($_POST['watcher'])) {
        //echo $_POST['watcher'];
        if($stmt = $con->prepare('INSERT INTO watchlist (user_id, ticker) VALUES (?, ?)')){
            $stmt->bind_param('is', $_SESSION['id'], $_POST['watcher']);
            $stmt->execute();
        } else {
			// Something went wrong when trying to prepare, check the naming / fields
			echo 'Something went wrong, please retry!';
		}
        $stmt->close();
    }

    $con->close();
    header('Location: /webproject/news.html');  
?>