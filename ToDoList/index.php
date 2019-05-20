<?php
    require_once("DB/init.php");
    $itemsQuery = $db->prepare("
        SELECT id, name, done
        FROM items
        WHERE user = :user
    ");
    $itemsQuery->execute([
        'user' => $_SESSION['user_id']
    ]);

    $items = $itemsQuery->rowCount() ? $itemsQuery : [];

    // foreach($items as $item){
    //     echo $item['name'], '<br>';
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDoList</title>
    <link href="https://fonts.googleapis.com/css?family=Stylish&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="css/favicon.ico" type="image/ico" sizes="16x16">
</head>
<body>
    <div class="list">
        <h1 class="header">To Do.</h1>
        <?php if(!empty($items)):?>
        <ul class="items">
            <?php foreach($items as $item): ?>
            <li>
                <span class="item<?php echo $item['done'] ? ' done': ''?>"><?php echo $item['name']?></span>
                <?php if(!$item['done']):?>
                <a href="mark.php?as=done&item=<?php echo $item['id']; ?>" class="done-button">Mark as Done</a>
                <?php endif;?>
            </li>
            <?php endforeach;?>
            <!-- <li><span class="item done">Learn Python</span></li> -->
        </ul>
    <?php else: ?>
        <p>You haven't added any items yet.</p> 
        <?php endif;?>
        <form action="add.php" method="post">
            <br>
            <input type="text" name="name" placeholder="Type a new Item here." class="input" autocomplete="off" style="color:#2c3e50" required>
            <input type="submit" value="Add" class="submit">
        </form>
    </div>
    
</body>
</html>