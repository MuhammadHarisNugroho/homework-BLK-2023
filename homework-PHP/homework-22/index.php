<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Latihan Position | Card Profile</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
  <?php
    $profiles = [
        [
            "name" => "John Doe",
            "position" => "Full Stack Developer",
            "image" => "man.jpg",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam dignissimos voluptas pariatur, inventore tempora asperiores iste exercitationem illo corporis corrupti molestiae, sint mollitia nostrum illum fugit provident beatae aliquid aperiam!",
        ],
        [
            "name" => "Isabella Rodriguez",
            "position" => "Front-end Developer",
            "image" => "woman.jpg",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam dignissimos voluptas pariatur, inventore tempora asperiores iste exercitationem illo corporis corrupti molestiae, sint mollitia nostrum illum fugit provident beatae aliquid aperiam!",
        ],
        [
            "name" => "William Hill",
            "position" => "Back-end Developer",
            "image" => "man2.jpg",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam dignissimos voluptas pariatur, inventore tempora asperiores iste exercitationem illo corporis corrupti molestiae, sint mollitia nostrum illum fugit provident beatae aliquid aperiam!",
        ]
    ];
    ?>
    <?php foreach ($profiles as $profile) : ?>
        <div class="ps">
            <div class="card">
                <div class="border1"></div>
                <div class="circle-photo">
                    <img src="<?php echo $profile['image']; ?>" alt="" class="t" width="200" height="200" />
                </div>
                <h1 class="title"><?php echo $profile['name']; ?></h1>
                <p class="positon"><?php echo $profile['position']; ?></p>
                <h5 class="h5">
                    <?php echo $profile['description']; ?>
                </h5>
                <div class="button-container">
                    <button>Lihat Profil</button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>
