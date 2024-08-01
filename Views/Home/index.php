<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>
<body>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis
      perferendis consequuntur soluta necessitatibus sapiente quas nulla.
      Dignissimos soluta maxime non quod officiis ducimus, assumenda obcaecati
      saepe eligendi hic rerum adipisci!</p>

     <ul>
     <?php 
      foreach($users as $user): 
     ?>
        <li>
         <?= $user->email ?>
      </li>
        <?php endforeach ?>
     </ul>
</body>
</html>