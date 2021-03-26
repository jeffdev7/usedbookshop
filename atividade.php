<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Bookstore</title>

</head>

<body>
<div class="container">
    <h1 class="text-center">Your Books</h1>
    <div class="mt-5">
    
    <form method="Get" action="data.php" class="border border-dark p-3">
  
  <div class="row mb-3">
    <label for="inputlivro" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="type" class="form-control" id="inputlivro" name="nome" required >
    </div>
  </div>
  
  
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Book: </legend>

      <div class="form-check ms-4">
        <input class="form-check-input" type="radio" name="livro" id="harrypotter" value="harrypotter">
        <label class="form-check-label" for="harrypotter">
          Harry Potter
        </label>
      </div>

      <div class="form-check ms-4">
        <input class="form-check-input" type="radio" name="livro" id="tlotr" value="tlotr" >
        <label class="form-check-label" for="tlotr">
          The Lord of the Rings
        </label>
      </div>
      
      <div class="form-check ms-4">
        <input class="form-check-input" type="radio" name="livro" id="hungergames" value="hungergames">
        <label class="form-check-label" for="hungergames">
          The Hunger Games 
        </label>
      </div>
      </fieldset>
    
  </br>
      <div class="row mb-4">
    <div class="col-sm-3 offset-sm">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="usado" name="usado">
        <label class="form-check-label" for="usado">
          Used
        </label>
      </div>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>

</body>
</html>