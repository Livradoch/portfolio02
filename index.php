<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css?family=Solway&display=swap" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <!-- <script>
jQuery(function(){
$(function () {
$(window).scroll(function () {
if ($(this).scrollTop() > 200 ) { 
$('#scrollUp').css('right','30%');
// $('#scrolldown');
} else { 
$('#scrollUp').removeAttr( 'style' );
}
 
});
});
});
</script> -->

    <title>Portfolio_développeur_web</title>
</head>

<body>

    <section id="home">
        <div class="home">
            <div class="nav">
                <input type="checkbox" id="nav-check">
                <div class="nav-header">

                </div>
                <div class="nav-btn">
                    <label for="nav-check">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
                </div>
                
  <a href="#competences"><span></span></a>
                <div class="nav-links">                    
                    <a href="#competences">competences</a>
                    <a href="#experiences">experiences</a>
                    <a href="#projets">projets</a>
                    <a href="#contact">contact</a>
                </div>
                <div class="name">
                    <h1 title> Mickaël Isblé </h1>
                    <h2 class="monportfolio"> Mon portfolio </h2>

                </div>
            </div>
    </section>



    <section id="competences">
        <!-- <svg class="avion"  height="auto" viewBox="0 0 512 512" width="50px" xmlns="http://www.w3.org/2000/svg"><path d="m147.448 256.967h2.236a12.307 12.307 0 0 1 12.307 12.307v36.426a0 0 0 0 1 0 0h-26.85a0 0 0 0 1 0 0v-36.426a12.307 12.307 0 0 1 12.307-12.307z" fill="#4fd3b2"/><path d="m149.684 256.967h-2.236a12.307 12.307 0 0 0 -12.307 12.307v13a12.307 12.307 0 0 1 12.307-12.307h2.236a12.307 12.307 0 0 1 12.307 12.307v-13a12.307 12.307 0 0 0 -12.307-12.307z" fill="#73ffd4"/><path d="m190.021 219h2.236a12.307 12.307 0 0 1 12.307 12.3v36.422a0 0 0 0 1 0 0h-26.85a0 0 0 0 1 0 0v-36.422a12.307 12.307 0 0 1 12.307-12.3z" fill="#4fd3b2"/><path d="m192.257 219h-2.236a12.307 12.307 0 0 0 -12.307 12.307v13a12.307 12.307 0 0 1 12.307-12.307h2.236a12.307 12.307 0 0 1 12.307 12.307v-13a12.307 12.307 0 0 0 -12.307-12.307z" fill="#73ffd4"/><path d="m349.291 256.967h26.85a0 0 0 0 1 0 0v36.422a12.307 12.307 0 0 1 -12.307 12.311h-2.234a12.307 12.307 0 0 1 -12.307-12.307v-36.426a0 0 0 0 1 -.002 0z" fill="#4fd3b2" transform="matrix(-1 0 0 -1 725.432 562.663)"/><path d="m361.6 256.967h2.236a12.307 12.307 0 0 1 12.307 12.307v13a12.307 12.307 0 0 0 -12.307-12.307h-2.236a12.307 12.307 0 0 0 -12.307 12.307v-13a12.307 12.307 0 0 1 12.307-12.307z" fill="#73ffd4"/><path d="m306.718 219h26.85a0 0 0 0 1 0 0v36.42a12.307 12.307 0 0 1 -12.307 12.307h-2.236a12.307 12.307 0 0 1 -12.307-12.307v-36.42a0 0 0 0 1 0 0z" fill="#4fd3b2" transform="matrix(-1 0 0 -1 640.286 486.725)"/><path d="m319.025 219h2.236a12.307 12.307 0 0 1 12.307 12.307v13a12.307 12.307 0 0 0 -12.307-12.307h-2.236a12.307 12.307 0 0 0 -12.307 12.307v-13a12.307 12.307 0 0 1 12.307-12.307z" fill="#73ffd4"/><path d="m386.042 344.641v-35.597l-103.452-97.367v80.63z" fill="#2ccdf2"/><path d="m125.958 309.044v35.597l102.55-51.878v-80.237z" fill="#2ccdf2"/><path d="m282.59 211.677v19.836l103.452 97.368v-19.837z" fill="#69dcff"/><path d="m125.958 309.044v19.837l102.55-96.518v-19.837z" fill="#69dcff"/><path d="m228.508 340.189-33.808 57.353 10.544 18.458 38.577-29.06c-13.707-7.876-15.313-22.251-15.313-46.751z" fill="#2ccdf2"/><path d="m282.59 340.2c0 23.344-1.341 38.112-15.32 46.739l38.577 29.061 10.553-18.458z" fill="#2ccdf2"/><path d="m228.508 363.189c.328-.517.651-.982.968-1.4a176.57 176.57 0 0 1 -.968-21.6l-33.808 57.353 6.674 11.679z" fill="#69dcff"/><path d="m282.59 363.2 27.131 46.021 6.674-11.679-33.805-57.342a170.444 170.444 0 0 1 -.969 21.384c.317.475.64 1.007.969 1.616z" fill="#69dcff"/><path d="m255.549 96c-14.935 0-27.041 18.3-27.041 61.2v182.989c0 24.5 1.606 38.875 15.313 46.75h23.449c13.979-8.627 15.32-23.4 15.32-46.739v-182.994c0-42.906-12.107-61.206-27.041-61.206z" fill="#fff"/><path d="m257.083 96.071c5.579 9.818 9.1 25.782 9.1 48.9v182.995c0 17.61-.763 30.34-7.139 39.234a18.3 18.3 0 0 1 -14.909 7.5h-11.374a25.428 25.428 0 0 0 11.06 12.234h23.449c13.979-8.627 15.32-23.4 15.32-46.739v-182.989c0-41.422-11.29-59.906-25.507-61.135z" fill="#edebe8"/><g fill="#17171d"><path d="m388.784 306.132-8.643-8.132v-28.726a16.325 16.325 0 0 0 -16.307-16.307h-2.234a16.325 16.325 0 0 0 -15.877 12.633l-8.155-7.675v-26.62a16.326 16.326 0 0 0 -16.307-16.305h-2.236a16.322 16.322 0 0 0 -15.4 10.985l-17.035-16.037v-52.742c0-58.852-21.708-65.2-31.041-65.2s-31.041 6.353-31.041 65.2v53.594l-16.671 15.69a16.337 16.337 0 0 0 -15.58-11.49h-2.236a16.325 16.325 0 0 0 -16.307 16.307v27.3l-8.029 7.556a16.329 16.329 0 0 0 -16-13.193h-2.236a16.325 16.325 0 0 0 -16.307 16.307v29.4l-7.925 7.459a4 4 0 0 0 -1.258 2.912v35.6a4 4 0 0 0 5.805 3.569l96.745-48.941v39.824l-33.258 56.41a4 4 0 0 0 -.028 4.016l10.547 18.458a4 4 0 0 0 5.88 1.21l37.509-28.255h20.773l37.508 28.255a4 4 0 0 0 2.407.805 4.083 4.083 0 0 0 .807-.081 4 4 0 0 0 2.666-1.934l10.548-18.458a4 4 0 0 0 -.028-4.016l-33.25-56.4v-40.3l97.647 49.4a4 4 0 0 0 5.8-3.569v-35.6a4 4 0 0 0 -1.253-2.909zm-35.493-36.858a8.316 8.316 0 0 1 8.307-8.307h2.236a8.316 8.316 0 0 1 8.307 8.307v21.194l-18.85-17.742zm-42.573-37.969a8.316 8.316 0 0 1 8.307-8.305h2.236a8.316 8.316 0 0 1 8.307 8.307v19.093l-18.85-17.741zm-78.21-74.1c0-35.286 8.828-57.2 23.041-57.2s23.041 21.919 23.041 57.2v182.995c0 24.042-1.765 35.564-12.493 42.739h-21.17c-10.667-6.67-12.419-18.281-12.419-42.75zm-50.794 74.1a8.316 8.316 0 0 1 8.307-8.305h2.236a8.316 8.316 0 0 1 8.307 8.307v2.028l-18.85 17.742zm-42.573 37.969a8.316 8.316 0 0 1 8.307-8.307h2.236a8.316 8.316 0 0 1 8.307 8.307v4.126l-18.85 17.742zm-9.183 68.861v-27.362l94.55-88.989v68.516zm76.506 71.938-7.143-12.5 25.486-43.231c.772 14.134 3.445 25.239 12.227 32.7zm98.163 0-30.673-23.107c8.828-7.725 11.537-18.733 12.326-32.63l25.49 43.237zm77.415-71.938-95.452-48.288v-68.912l95.452 89.838z"/><path d="m247.176 134.3c0-5.964 4.466-13.578 7.964-13.578s7.96 7.618 7.96 13.578a4 4 0 1 0 8 0c0-8.591-6.367-21.578-15.964-21.578s-15.964 12.987-15.964 21.578a4 4 0 1 0 8 0z"/><path d="m386.042 356a4 4 0 0 0 -4 4v56a4 4 0 0 0 8 0v-56a4 4 0 0 0 -4-4z"/><path d="m370.061 349.322a4 4 0 0 0 -4 4v37.661a4 4 0 0 0 8 0v-37.661a4 4 0 0 0 -4-4z"/><path d="m353.919 341.341a4 4 0 0 0 -4 4v18.83a4 4 0 0 0 8 0v-18.83a4 4 0 0 0 -4-4z"/><path d="m127.078 356a4 4 0 0 0 -4 4v56a4 4 0 0 0 8 0v-56a4 4 0 0 0 -4-4z"/><path d="m143.059 349.322a4 4 0 0 0 -4 4v37.661a4 4 0 0 0 8 0v-37.661a4 4 0 0 0 -4-4z"/><path d="m159.2 341.341a4 4 0 0 0 -4 4v18.83a4 4 0 0 0 8 0v-18.83a4 4 0 0 0 -4-4z"/></g></svg> -->

        <div class="competences">

            <h2>A propos</h2>
            <p class="textcomp">
                &#x2d; Je réalise des wireframes et des maquettes de site.<br>
                &#x2d; J’intègre des sites responsives.<br>
                &#x2d; Je maîtrise le MVC et les bases de données PHP/MySQL.<br>
                &#x2d; Je maîtrise les bases du Java Script.<br>
                &#x2d; Je maîtrise Photoshop, Illustrator, Gimp.
            </p>
        </div>
    </section>

    <section id="experiences">
        <div class="experiences">
            <h2 id="exp">Experiences</h2>
            <p class="textexp">
                Ma première expérience dans les métiers du Web s'est déroulée en 2010 dans le cadre d'un stage de 6 mois en Irlande, en tant que IT en plus des dépannages et de l'assistance aux utilisateurs
                j'étais chargé de mettre à jour les offres de stage sur le site de l'entreprise ainsi que de corriger des lignes de code, j'étais totalement immergé sans formation préalable.
                Puis en 2012 je suis rentré à l'école d'Art Gérard Jacot de Belfort où j'ai pu acquérir des compétences sur photoshop, illustrator et in-design.
                de 2018 à 2019 dans le cadre de mon bénévolat auprès des restos du coeur de Belfort j'ai administré avec un autre bénévole le site wordpress de l'association ainsi que la création/gestion de la page Facebook que je gère encore.
                A ce jour je suis en formation de développeur Web à l'ACS de Belfort.


            </p>
        </div>
    </section>

    <section id="projets">

        <h2>Projets</h2>


        <div id="bigcontainer">
            <div class="container1">
                <div class="cadre1"><a href="http://"></a>

                    <div class="text_cadre1">
                        <a href="http://"></a>
                        <p>J'ai réalisé au sein d'une équipe de 3 personnes un prototype de jeu basé sur Bomberman avec le langage Java Script </p>
                    </div>
                </div>
            </div>
            <div class="container2">
                <div class="cadre2"><a href="http://"></a>
                    <div class="text_cadre2">
                        <p>J'ai réalisé au sein d'une équipe de 3 personnes un prototype de jeu basé sur Bomberman avec le langage Java Script </p>
                    </div>
                </div>
            </div>
            <div class="container3">
                <div class="cadre3"><a href="http://"></a>
                    <div class="text_cadre3">
                        <p>J'ai réalisé au sein d'une équipe de 3 personnes un prototype de jeu basé sur Bomberman avec le langage Java Script </p>
                    </div>
                </div>
            </div>
            <div class="container4">
                <div class="cadre4"><a href="http://"></a>
                    <div class="text_cadre4">
                        <p>J'ai réalisé au sein d'une équipe de 3 personnes un prototype de jeu basé sur Bomberman avec le langage Java Script </p>
                    </div>
                </div>
            </div>
            <div class="container5">
                <div class="cadre5"><a href="http://"></a>
                    <div class="text_cadre5">
                        <p>J'ai réalisé au sein d'une équipe de 3 personnes un prototype de jeu basé sur Bomberman avec le langage Java Script </p>
                    </div>
                </div>
            </div>
            <div class="container6">
                <div class="cadre6"><a href="http://"></a>
                    <div class="text_cadre6">
                        <p>J'ai réalisé au sein d'une équipe de 3 personnes un prototype de jeu basé sur Bomberman avec le langage Java Script </p>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <div id="scrollUp">
            <a href="#top"><img class="avion" src="image/avion.png" height="50px" width="50px"></a>
        </div>
    </section>


    <section id="contact">



        <div class="contact">
            <h2>Contact</h2>

            <form action="" method="post" class="formul">
                <label for="votre_nom">votre nom</label>
                <div class="name">

                    <input type="name" name="name" id="name">
                </div>
                <label for="votre_mail">votre mail</label>
                <div class="send_mail">
                    <input type="email" name="email" id="send_mail">
                </div>
                <label for="your_message">votre message</label>
                <div class="message">

                    <textarea name="text" id="message" rows="5" cols="20"></textarea>
                </div>
                <div class="submit">
                    <input type="submit" value="envoyer" id="submit"></div>
            </form>

        </div>
    </section>

    <script src="assets/script.js"></script>


</body>

</html>