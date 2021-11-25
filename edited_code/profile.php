<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Secure Coding</title>
  </head>
  <?php include 'connection.php';
    session_start();
    $id=$_SESSION['id'];
    $query=$connection->prepare("SELECT * FROM users where id=:id");
    $query->bindParam(':id', $id);
    // Execute statement.
    $query->execute();
    // Set fetch mode to FETCH_ASSOC to return an array indexed by column name.
    $query->setFetchMode(PDO::FETCH_ASSOC);
    // Fetch result.
    $row = $query->fetchColumn();
  ?>
<body>
<div class="container py-2">
    <div class="jumbotron">
        <h1>User Profile</h1>
        <form method="POST" action="?" >
            <div class="form-group">
                <label>Username:</label>
                <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>"/>
            <div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" name="submit">Update</button>
                <button name="logout" class="btn btn-danger">Log out</button>
            </div>
        </form>
    <div>
<div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
      <?php
        if(isset($_POST['submit']))
        {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $query = "UPDATE users SET username = :username, email = :email WHERE id = :id";
            $sth = $connection->prepare($query);
            // Bind parameters to statement variables.
            $sth->bindParam(':id', $id);
            $sth->bindParam(':username', $username);
            $sth->bindParam(':email', $email);
            // Execute statement.
            $sth->execute();
            // Set fetch mode to FETCH_ASSOC to return an array indexed by column name.
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            // Fetch result.
            $result = $sth->fetchColumn();
            header("Location: index.php");
        }  
        if(isset($_POST['logout']))
        {
            unset($_SESSION['id']);
            session_destroy();
            header("Location: index.php");
        }            
?>