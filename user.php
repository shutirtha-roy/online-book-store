<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Roy's Online Book Store</title>
</head>
<body class="bg-dark text-light">


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        



      
        <div class="collapse navbar-collapse container" id="navbarSupportedContent">
          <a class="navbar-brand" href="#">Welcome Sam</a>
            
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="admin.html">Dashboard</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="books-user.html">Books</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
 

          </ul>
        </div>
    </nav>


    <div class="admin-section">
        <h1 class="heading mt-5 p-5 h1">Products Purchased</h1>
    </div>







    <h1 class="heading mt-5 p-5 h2">Books Ordered</h1>
    <table class="table table-dark mx-auto" style="text-align: center; width: 80%;">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Book name</th>
            <th scope="col">Book id</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Otto</td>
            <td>2</td>
            <td>$28</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Thornton</td>
            <td>1</td>
            <td>$21</td>
          </tr>
        </tbody>
      </table>
    
    

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/date-fns/2.0.0-alpha0/date_fns.min.js" integrity="sha512-0kon+2zxkK5yhflwFqaTaIhLVDKGVH0YH/jm8P8Bab/4EOgC/n7gWyy7WE4EXrfPOVDeNdaebiAng0nsfeFd9A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    
</body>
</html>