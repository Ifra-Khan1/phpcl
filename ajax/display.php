<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</head>
<body>
    <form  class="form-group" method="POST" id="form">
      
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">name</label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">phone </label>
  <input type="text" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<button id="button">submit </button>

  </form>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">Email</th>
      <th scope="col">phone</th>
    </tr>
  </thead>
  <tbody id="tbl">
    
  </tbody>
</table>
<script src="jquery-3.7.1.min.js"></script>
<script>

$(document).ready(function(){
    let table = $('#tbl');
  function loadData(){
        $.ajax({
            url: 'fetch.php',
            type :'POST',
            success : function(data){
                console.log(data)
                table.html(data)
            }
        })
    } 
loadData();
$('#button').click(function(){
  $.ajax({
    url: 'insert.php',
    type:'POST',
    data :$('#form input').serialize(),
    success : function(data){
    console.log(data);
    loadData()
  }
  })
})





})
</script>

</body>
</html>