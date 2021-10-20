<?php
    // Create database connection using config file
        include_once("koneksi.php");
        // Fetch all users data from database
        $result = mysqli_query ($con, "SELECT * FROM mahasiswa1")
      
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD pra3</title>
  </head>
  <body>

    <div class="container">
        <h1>
            Data Mahasiswa
        </h1>

      

            <table class="table" border="1 " >
                <thead>
                    <tr>
                        <th>Nim</th> 
                        <th>Nama</th> 
                        <th>Gender</th>
                        <th>Alamat</th>
                        <th>TL</th> 
                        <th>Action</th> 
                       
                    </tr>
                </thead>
                <tr>
                <?php  
                     while($user_data = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $user_data['Nim']; ?></td>
                        <td><?php echo $user_data['Nama']; ?></td>
                        <td><?php echo $user_data['Jenis_Kelamin']; ?></td>
                        <td><?php echo $user_data['Alamat']; ?></td>
                        <td><?php echo $user_data['TL']; ?></td>
                        <td> <a href= "edit.php? Nim=<?=$user_data['Nim'];?>" class="btn btn-warning"> Edit</a> |
                        <a href= "delete.php?Nim=<?=$user_data['Nim'];?>" class="btn btn-Primary"> Delete</a> 
                     </td> 
                    </tr>
              
                    <?php }
                     ?>
                </tbody>
            </table>

            <a href="tambah.php" class="btn btn-danger"> Tambah </a>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

