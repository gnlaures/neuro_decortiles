<div class="m-modal m-youtubeVideo" id="<?php echo $mVideo["modal-id"] ?>">
    <a href="#<?php echo $mVideo["modal-id"] ?>" class="m-modal__mask js-m-modal__close"></a>
    <div class="m-modal__content">
        <div class="m-modal__close">
            <a href="#<?php echo $mVideo["modal-id"] ?>" class="u-iconWithCaption --icon50 u-jcfs js-m-modal__close">
                <i><?php include('media/img/icons/icon_x.svg'); ?></i>
                <span>Fechar Vídeo</span>
            </a>
        </div>
        <div class="m-modal__hero">
            <div class="c-videoEmbed u-aspectRatio --ratio-16-9">
                <iframe src="https://www.youtube.com/embed/<?php echo $mVideo["video-id"] ?>" title="<?php echo $mVideo["modal-id"] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>