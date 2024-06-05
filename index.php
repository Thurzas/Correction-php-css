<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Dojo</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <h1>John Doe</h1>
        <h2>Consultant in economics</h2>
    </header>
    <main>
    <?php include 'data.php' ?>
    <?php foreach( $data as $title => $items): ?>
        <section>            
            <h1><?= $title ?></h1>
                <div class="cards">
                    <?php foreach( $items as $item => $val): ?>
                        <figure>
                            <img src="assets/images/<?= $val['image']?>" alt="<?= $val['location'] ?>">
                            <figcaption>
                                <div><?= $val['date'] ?></div>
                                <h2><?= $val['title'] ?></h2>
                                <p><?= $val['description'] ?></p>
                                <div><?= $val['location'] ?></div>
                            </figcaption>
                        </figure>
                    <?php endforeach; ?>
        </section>
    <?php endforeach; ?>

    
<!--        <section>
            <h1>Trainings</h1>
            <div class="cards">
                <figure>
                    <img src="assets/images/highschool.jpg" alt="Highschool of Smalltown">
                    <figcaption>
                        <div>2015-2016</div>
                        <h2>Highschool Degree</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sapiente ipsam totam officiis
                            voluptatibus, sit soluta veniam neque iusto excepturi, quo ullam, fuga tempora nihil
                            eligendi! Consectetur minus aut quas!</p>
                        <div>Highschool of Smalltown</div>
                    </figcaption>
                </figure>
                <figure>
                    <img src="assets/images/university.jpg" alt="Massachussets Institute of Technology">
                    <figcaption>
                        <div>2016-2018</div>
                        <h2>Bachelor of internation finance</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sapiente ipsam totam officiis
                            voluptatibus, sit soluta veniam neque iusto excepturi, quo ullam, fuga tempora nihil
                            eligendi! Consectetur minus aut quas!</p>
                        <div>Massachussets Institute of Technology</div>
                    </figcaption>
                </figure>
            </div>
        </section>
-->
    </main>
</body>

</html>