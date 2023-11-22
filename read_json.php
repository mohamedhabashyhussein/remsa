<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>JSON with fetch function</title>
      <script>
            fetch("../chap1_practice_two.JSON")
            .then(response=>{
              return    response.json();
            })
            .then(function(data){
                  let g=JSON.parse(data);
                  console.log(g[0]['Answers']);
            })
            
      </script>
</head>
<body>
      
</body>
</html>