<main class="l-page --inner --aboutUs">
    <section class="s-aboutBlock" data-aos="fade-up">
        <div class="u-container">
            <div class="s-aboutBlock__header">
                <h1>Estado <span>de Arte</span></h1>
            </div>
            <div class="s-aboutBlock__content">
                <div class="s-aboutBlock__col u-fw60">
                    <?php $cVideo = array(
                        'link' => '#estado-de-arte',
                        'cover' => 'media/img/content/aboutUs_1.jpg',
                        'title' => 'Estado de Arte',
                        'extraClass' => 'js-m-modal__open');
                    include('parts/components/c-video.php'); ?>
                </div>
                <div class="s-aboutBlock__col u-fw40">
                    <p>Criada para impactar o mndo por meio de algo maior que o produto.</p>
                    <p>Com a Decortiles o revestir é elevado status de Arte.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="s-aboutBlock" data-aos="fade-up">
        <div class="u-container">
            <div class="s-aboutBlock__header">
                <h1>Feita de <span>ousadia!</span></h1>
            </div>
            <div class="s-aboutBlock__content">
                <div class="s-aboutBlock__col u-fw60">
                    <?php $cVideo = array(
                        'link' => '#feita-de-ousadia',
                        'cover' => 'media/img/content/aboutUs_2.jpg',
                        'title' => 'Feita de Ousada',
                        'extraClass' => 'js-m-modal__open');
                    include('parts/components/c-video.php'); ?>
                </div>
                <div class="s-aboutBlock__col u-fw40">
                    <p>Inspirados pela<br>autenticidade e ousada. Com<br>a Decortiles</p>
                    <p>Há mais de dez anos. O revestir é elevado ao status de arte e o conceito é eternizado no nome: <strong><i>Decortiles.</i></strong></p>
                </div>
            </div>
        </div>
    </section>
    <section class="s-aboutBlock" data-aos="fade-up">
        <div class="u-container">
            <div class="s-aboutBlock__header">
                <h1>Paixão por <span>design e <br>arquitetura</span></h1>
            </div>
            <div class="s-aboutBlock__content">
                <div class="s-aboutBlock__col u-fw60">
                    <?php $cVideo = array(
                        'link' => '#paixao-por-design-e-arquitetura',
                        'cover' => 'media/img/content/aboutUs_3.jpg',
                        'title' => 'Paixão por design e arquitetura',
                        'extraClass' => 'js-m-modal__open');
                    include('parts/components/c-video.php'); ?>
                </div>
                <div class="s-aboutBlock__col u-fw40">
                    <p>Para os que valorizam a exclusividade e buscam um conceito que vai além dos revestimentos.</p>
                    <p>A Decortiles entrega design que traduz os movimentos e as transformações do mundo para gerar experiências sensoriais únicas.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="s-aboutBlock" data-aos="fade-up">
        <div class="u-container">
            <div class="s-aboutBlock__header">
                <h1>exclusiva <span>e Inovadora</span></h1>
            </div>
            <div class="s-aboutBlock__content">
                <div class="s-aboutBlock__col u-fw60">
                    <?php $cVideo = array(
                        'link' => '#exclusiva-e-inovadora',
                        'cover' => 'media/img/content/aboutUs_4.jpg',
                        'title' => 'Exclusiva e Inovadora',
                        'extraClass' => 'js-m-modal__open');
                    include('parts/components/c-video.php'); ?>
                </div>
                <div class="s-aboutBlock__col u-fw40">
                    <p>A Decortiles é o resultado da combinação da experiência com a capacidade criativa.</p>
                    <p>Somos movidos por ideias, mas o resultado final não é alcançado por acaso.</p>
                    <p>Intensificamos os sentidos e a consciência estética estimulando pensamento e emoção.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    $mVideo = array('modal-id' => 'estado-de-arte', 'video-id' => 'Y3t7kuHRpEw');
    include('parts/modal/m-youtubeVideo.php');

    $mVideo = array('modal-id' => 'feita-de-ousadia', 'video-id' => 'rj3dM_JABSE');
    include('parts/modal/m-youtubeVideo.php');

    $mVideo = array('modal-id' => 'paixao-por-design-e-arquitetura', 'video-id' => 'xfyb8JRNMRg');
    include('parts/modal/m-youtubeVideo.php');

    $mVideo = array('modal-id' => 'exclusiva-e-inovadora', 'video-id' => 'uvAYmobJZOo');
    include('parts/modal/m-youtubeVideo.php');
?>