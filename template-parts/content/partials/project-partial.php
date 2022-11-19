<?php 
$url_api = "https://gh-pinned-repos.egoist.dev/?username=jonasborges93";
$json_github_pinned = json_decode(file_get_contents($url_api));
?>

<?php if($json_github_pinned): ?>
<header class="content__header cards">
    <h2 class="content__title">Meus projetos</h2>
    <a href="https://github.com/jonasborges93" target="_blank" class="content__link">
        <img src="<?php echo get_template_directory_uri();?>/assets/utils/icons/github.svg" alt="Icone do GitHub" class="content__icon">
        Ver no GitHub
    </a>
</header>
<div class="project">
    <?php foreach($json_github_pinned as $repos): ?>
    <article class="project__item cards">
        
        <a href="<?php echo $repos->link; ?>" target="_blank" class="project__link">
            <header class="project__header">
                <img src="<?php echo get_template_directory_uri();?>/assets/utils/icons/folder.svg" alt="Icone de Pasta" class="project__icon">
                <p class="project__title"><?php echo $repos->repo; ?></p>
            </header>
            <p class="project__text"><?php echo $repos->description; ?></p>
            <div class="project__bellow">
                <div class="project__info">
                    <div class="project__infoItem">
                        <img src="<?php echo get_template_directory_uri();?>/assets/utils/icons/star.svg" alt="Icone de Favorito"
                            class="project__icon--git">
                        <p class="project__text--infoItem"><?php echo $repos->stars; ?></p>
                    </div>
                    <div class="project__infoItem">
                        <img src="<?php echo get_template_directory_uri();?>/assets/utils/icons/git-branch.svg" alt="Icone de Branch"
                            class="project__icon--git">
                        <p class="project__text--infoItem"><?php echo $repos->forks; ?></p>
                    </div>
                </div>
                <div class="project__info">
                    <div class="project__infoItem">
                        <div class="project__icon--tech"></div>
                        <p class="project__text--infoItem"><?php echo $repos->language; ?></p>
                    </div>
                </div>
            </div>
        </a>
    </article>
    <?php endforeach;?>
</div>
<?php endif;?>