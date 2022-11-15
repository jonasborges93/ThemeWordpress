<?php get_header(); ?>
<div class="layout">
    <main class="container">
        <aside class="sidebar">
            <div class="sidebar__profile cards">
                <img src="./assets/utils/images/profile.png" alt="Foto do Jonas Borges" class="sidebar__avatar">
                <h1 class="sidebar__title">Jonas Borges</h1>
                <p class="sidebar__text">Desenvolvedor Front-End</p>
            </div>
            <div class="sidebar__information cards">
                <ul class="information__list">
                    <li class="information__item">
                        <a href="#" target="_blank" class="information__link">
                            <img src="./assets/utils/icons/map-pin.svg" alt="Icone de Localização"
                                class="item__icon">
                            Porto Real/RJ
                        </a>
                    </li>
                    <li class="information__item">
                        <a href="#" target="_blank" class="information__link">
                            <img src="./assets/utils/icons/briefcase.svg" alt="Icone da Instituição de Formação"
                                class="item__icon">
                            Rocketseat
                        </a>
                    </li>
                    <li class="information__item">
                        <a href="#" target="_blank" class="information__link">
                            <img src="./assets/utils/icons/github.svg" alt="Icone do Github" class="item__icon">
                            github.com/jonasborges93
                        </a>
                    </li>
                    <li class="information__item">
                        <a href="#" target="_blank" class="information__link">
                            <img src="./assets/utils/icons/linkedin.svg" alt="Icone do Linkedin" class="item__icon">
                            linkedin.com/in/jonasborges93
                        </a>
                    </li>
                    <li class="information__item">
                        <a href="#" target="_blank" class="information__link">
                            <img src="./assets/utils/icons/globe.svg" alt="Icone do Site" class="item__icon">
                            agenciajonasboges.com
                        </a>
                    </li>
                    <li class="information__item">
                        <a href="#" target="_blank" class="information__link">
                            <img src="./assets/utils/icons/mail.svg" alt="Icone de e-mail" class="item__icon">
                            jonas.borges93@hotmail.com
                        </a>
                    </li>
                </ul>
            </div>
            <div class="sidebar__technologies cards">
                <h2 class="sidebar__title">Tecnologias</h2>
                <ul class="technologies__list">
                    <li class="technologies__item">Html</li>
                    <li class="technologies__item">Css</li>
                    <li class="technologies__item">JavaScript</li>
                    <li class="technologies__item">React</li>
                    <li class="technologies__item">React Native</li>
                    <li class="technologies__item">NodeJS</li>
                    <li class="technologies__item no-margin">Wordpress</li>
                    <li class="technologies__item no-margin">Elementor</li>
                    <li class="technologies__item no-margin">Figma</li>
                </ul>
            </div>

            <?php get_template_part('template-parts/experiencies-partial');?>
            <?php get_template_part('template-parts/educations-partial');?>

            
        </aside>
        <section class="content">
            <header class="content__header cards">
                <h2 class="content__title">Meus projetos</h2>
                <a href="#" target="_blank" class="content__link">
                    <img src="./assets/utils/icons/github.svg" alt="Icone do GitHub" class="content__icon">
                    Ver no GitHub
                </a>
            </header>
            <div class="project">
                <article class="project__item cards">
                    <a href="#" target="_blank" class="project__link">
                        <header class="project__header">
                            <img src="./assets/utils/icons/folder.svg" alt="Icone de Pasta" class="project__icon">
                            <p class="project__title">Projeto de Portfolio</p>
                        </header>
                        <p class="project__text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, placeat! Obcaecati
                            impedit
                        </p>
                        <div class="project__bellow">
                            <div class="project__info">
                                <div class="project__infoItem">
                                    <img src="./assets/utils/icons/star.svg" alt="Icone de Favorito"
                                        class="project__icon--git">
                                    <p class="project__text--infoItem">100</p>
                                </div>
                                <div class="project__infoItem">
                                    <img src="./assets/utils/icons/git-branch.svg" alt="Icone de Branch"
                                        class="project__icon--git">
                                    <p class="project__text--infoItem">100</p>
                                </div>
                            </div>
                            <div class="project__info">
                                <div class="project__infoItem">
                                    <div class="project__icon--tech"></div>
                                    <p class="project__text--infoItem">html</p>
                                </div>
                                <div class="project__infoItem">
                                    <div class="project__icon--tech"></div>
                                    <p class="project__text--infoItem">css</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </article>
                <article class="project__item cards">
                    <a href="#" target="_blank" class="project__link">
                        <header class="project__header">
                            <img src="./assets/utils/icons/folder.svg" alt="Icone de Pasta" class="project__icon">
                            <p class="project__title">Projeto de Portfolio</p>
                        </header>
                        <p class="project__text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, placeat! Obcaecati
                            impedit
                        </p>
                        <div class="project__bellow">
                            <div class="project__info">
                                <div class="project__infoItem">
                                    <img src="./assets/utils/icons/star.svg" alt="Icone de Favorito"
                                        class="project__icon--git">
                                    <p class="project__text--infoItem">100</p>
                                </div>
                                <div class="project__infoItem">
                                    <img src="./assets/utils/icons/git-branch.svg" alt="Icone de Branch"
                                        class="project__icon--git">
                                    <p class="project__text--infoItem">100</p>
                                </div>
                            </div>
                            <div class="project__info">
                                <div class="project__infoItem">
                                    <div class="project__icon--tech"></div>
                                    <p class="project__text--infoItem">html</p>
                                </div>
                                <div class="project__infoItem">
                                    <div class="project__icon--tech"></div>
                                    <p class="project__text--infoItem">css</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </article>
                <article class="project__item cards">
                    <a href="#" target="_blank" class="project__link">
                        <header class="project__header">
                            <img src="./assets/utils/icons/folder.svg" alt="Icone de Pasta" class="project__icon">
                            <p class="project__title">Projeto de Portfolio</p>
                        </header>
                        <p class="project__text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, placeat! Obcaecati
                            impedit
                        </p>
                        <div class="project__bellow">
                            <div class="project__info">
                                <div class="project__infoItem">
                                    <img src="./assets/utils/icons/star.svg" alt="Icone de Favorito"
                                        class="project__icon--git">
                                    <p class="project__text--infoItem">100</p>
                                </div>
                                <div class="project__infoItem">
                                    <img src="./assets/utils/icons/git-branch.svg" alt="Icone de Branch"
                                        class="project__icon--git">
                                    <p class="project__text--infoItem">100</p>
                                </div>
                            </div>
                            <div class="project__info">
                                <div class="project__infoItem">
                                    <div class="project__icon--tech"></div>
                                    <p class="project__text--infoItem">html</p>
                                </div>
                                <div class="project__infoItem">
                                    <div class="project__icon--tech"></div>
                                    <p class="project__text--infoItem">css</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </article>
                <article class="project__item cards">
                    <a href="#" target="_blank" class="project__link">
                        <header class="project__header">
                            <img src="./assets/utils/icons/folder.svg" alt="Icone de Pasta" class="project__icon">
                            <p class="project__title">Projeto de Portfolio</p>
                        </header>
                        <p class="project__text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, placeat! Obcaecati
                            impedit
                        </p>
                        <div class="project__bellow">
                            <div class="project__info">
                                <div class="project__infoItem">
                                    <img src="./assets/utils/icons/star.svg" alt="Icone de Favorito"
                                        class="project__icon--git">
                                    <p class="project__text--infoItem">100</p>
                                </div>
                                <div class="project__infoItem">
                                    <img src="./assets/utils/icons/git-branch.svg" alt="Icone de Branch"
                                        class="project__icon--git">
                                    <p class="project__text--infoItem">100</p>
                                </div>
                            </div>
                            <div class="project__info">
                                <div class="project__infoItem">
                                    <div class="project__icon--tech"></div>
                                    <p class="project__text--infoItem">html</p>
                                </div>
                                <div class="project__infoItem">
                                    <div class="project__icon--tech"></div>
                                    <p class="project__text--infoItem">css</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </article>
            </div>

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
