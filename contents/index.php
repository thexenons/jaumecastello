<?php
    include 'control/index.php';
    include 'plugins/homeslider/Homeslider.php';

    $homeslider_activated = true;
?>

<main>
    <?php
        $images = [
            [
                'url' => 'img/slider1.jpg',
                'alt' => 'prueba'
            ],
            [
                'url' => 'img/slider2.jpg',
                'alt' => 'prueba2'
            ]
        ];
        $options = [];
        $homeslider = new Homeslider($images,$options);
        $homeslider::renderWidget();
    ?>
    <article>
        <div class="container">
            <div class="main-header">
                <h1>INDEX</h1>
            </div>
            <div class="content">
                <p>Hola</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet commodi alias eveniet eaque possimus, repellat in cumque ut doloremque iste. Ducimus, voluptatibus corrupti facere eius omnis blanditiis minus libero.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet commodi alias eveniet eaque possimus, repellat in cumque ut doloremque iste. Ducimus, voluptatibus corrupti facere eius omnis blanditiis minus libero.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet commodi alias eveniet eaque possimus, repellat in cumque ut doloremque iste. Ducimus, voluptatibus corrupti facere eius omnis blanditiis minus libero.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet commodi alias eveniet eaque possimus, repellat in cumque ut doloremque iste. Ducimus, voluptatibus corrupti facere eius omnis blanditiis minus libero.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet commodi alias eveniet eaque possimus, repellat in cumque ut doloremque iste. Ducimus, voluptatibus corrupti facere eius omnis blanditiis minus libero.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet commodi alias eveniet eaque possimus, repellat in cumque ut doloremque iste. Ducimus, voluptatibus corrupti facere eius omnis blanditiis minus libero.</p>
            </div>
        </div>
    </article>
</main>