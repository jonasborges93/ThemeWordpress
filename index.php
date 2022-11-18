<?php get_header(); ?>
<div class="layout">
    <main class="container">
        <aside class="sidebar">
            <?php get_template_part('template-parts/person-partial');?>
            <?php get_template_part('template-parts/technologies-partial');?>
            <?php get_template_part('template-parts/experiencies-partial');?>
            <?php get_template_part('template-parts/educations-partial');?>
        </aside>
        <section class="content">
            <header class="content__header cards">
                <h2 class="content__title">Meus projetos</h2>
                <a href="https://github.com/jonasborges93" target="_blank" class="content__link">
                    <img src="<?php echo get_template_directory_uri();?>/assets/utils/icons/github.svg" alt="Icone do GitHub" class="content__icon">
                    Ver no GitHub
                </a>
            </header>
            <?php get_template_part('template-parts/project-partial'); ?>

            <div class="posts">
                <div class="recentPosts__header cards">
                    <h2 class="posts__title">Últimos Posts</h2>
                </div>

                <article class="post cards">
                    <a href="#" target="_blank" class="post__link">
                        <img src="https://source.unsplash.com/128x128/?person=1ab" alt="Imagem do Post"
                            class="post__image">
                        <div class="post__content">
                            <h3 class="post__title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio
                                animi
                                saepe sed aspernatur modi enim nemo cupiditate?</h3>
                            <p class="post__date">11/11/2022</p>
                            <p class="post__resume">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio,
                                magnam sed nihil repellat inventore amet nobis quam quo at culpa aspernatur veniam
                                commodi in placeat nostrum cupiditate voluptatum qui? Voluptas!</p>
                            <div class="post__tags">
                                <ul class="tags__list">
                                    <li class="tags__item">#React-Native</li>
                                    <li class="tags__item">#ReactJS</li>
                                    <li class="tags__item">#NodeJS</li>
                                    <li class="tags__item">#JavaScript</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </article>
                <article class="post cards">
                    <a href="#" target="_blank" class="post__link">
                        <img src="https://source.unsplash.com/128x128/?person=122" alt="Imagem do Post"
                            class="post__image">
                        <div class="post__content">
                            <h3 class="post__title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio
                                animi
                                saepe sed aspernatur modi enim nemo cupiditate?</h3>
                            <p class="post__date">11/11/2022</p>
                            <p class="post__resume">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio,
                                magnam sed nihil repellat inventore amet nobis quam quo at culpa aspernatur veniam
                                commodi in placeat nostrum cupiditate voluptatum qui? Voluptas!</p>
                            <div class="post__tags">
                                <ul class="tags__list">
                                    <li class="tags__item">#React-Native</li>
                                    <li class="tags__item">#ReactJS</li>
                                    <li class="tags__item">#NodeJS</li>
                                    <li class="tags__item">#JavaScript</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </article>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>
