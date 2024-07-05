<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravelNews</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

</head>
<body class="text-slate-950 dark:text-slate-100">
   <nav class="p-7 fixed w-full top-0 h-20 backdrop-blur-md bg-transparent flex justify-evenly items-center">
   <a href="/">ZeroVaega News</a>
   <?php
foreach ($cat as $value) { ?>
    <a href="/<?php echo $value;?>"><span class="capitalize"><?php echo $value; ?></span></a>
    <?php }
   ?>
    </nav>
   <main class="p-7 min-h-screen  bg-slate-100 dark:bg-gray-950 text-gray-950 dark:text-slate-100">
       <section class="grid grid-cols-1  gap-7 sm:grid-cols-1 md:grid-cols-2 pt-20">
        <?php
        foreach ($posts["articles"] as $value) { ?>
            <a class="h-full" href="<?php echo $value['url'];?>">
             <div class="bg-gradient-to-br from-slate-500 to-slate-800 h-full grid grid-cols-1 md:grid-cols-2">
                <img class="object-cover h-full w-full" src="<?php echo $value['urlToImage']?>" alt="<?php echo $value['author'];?>">
                <div class="p-5">
                    <h4 class="text-2xl font-black"><?php echo $value["title"];?></h4>
                    <p class="truncate"><?php echo $value["description"];?></p>
                </div>
             </div>
             </a>
                <?php  }
        ?>
        </section>
   </main>
   <footer>

   </footer>
</body>
</html>