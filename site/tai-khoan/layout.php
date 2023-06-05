
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lora:wght@500;600;700&family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class="w-screen h-screen flex items-center justify-center bg-gray-400 px-5 
    bg-[url('<?=$url_content?>/image-layout/bg-login.jpg')]
    bg-cover
    bg-center
    relative
    ">
        <div class="p-7 bg-white rounded w-full max-w-md relative z-10">
            <?php include $view_name; ?>
        </div>
        <div class="
        absolute
        w-full
        h-full
        left-0
        top-0
        bg-black/50
        ">
        </div>
    </div>
</body>
</html>