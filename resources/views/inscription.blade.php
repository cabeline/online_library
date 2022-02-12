<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>inscription</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <!-- Styles -->
       
    </head>
    <body>
    <form class="formulaire">
       
        <div class="col">
              <input type="text" class="form-control" placeholder="surname">
              <input type="text" class="form-control" placeholder="firstname">
        

         <div class="form-group">
            
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
         </div>
        
         <div class="form-group">
            
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
         </div>
         </div> 
        
        <button type="submit" class="btn btn-primary">confirm identity</button>

           
        </div>
</form>
<button type="button" class="btn btn-warning">Middle</button>
            <button type="button" class="btn btn-success">Right</button>       
    </body>
</html>
