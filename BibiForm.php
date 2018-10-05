
<?php 
    $pagetitle='Tutoriel FORM';
    include ("header1.php"); 
?>
<article>
    <div class=gris></div>
    <section>
        <div class=hero></div>
        <div class=fond>
            <h2>
                La Balise FORM
            </h2>
          
                <h2>Présentation de la balise FORM</h2>
                <br>
                <p>
                La balise "form" déclare une zone de formulaire dans laquelle les utilisateurs peuvent saisir des
                informations qui pourront par la suite être récupérées et traitées côté serveur. Il est possible
                d'utiliser plusieurs formulaires dans une même page sous condition de ne pas les imbriquer. Finalement,
                pour que le formulaire puisse être envoyé il faut qu'il soit soumis,
                soit à l'aide de la balise input : input type="submit" ... /
                soit à l'aide du javascript en appliquant la fonction "submit()" au formulaire (en se basant sur son
                identifiant).
                <br>
                D'autre part, pour utiliser cette notion de formulaire, il est important de donner les valeurs
                adéquates aux principaux attributs de la balise "form":
                <ul>
                    <li> name : nom du formulaire utilisé pour faire référence à celui-ci.</li>
                    <li> action : indique l'adresse d'envoi des données du formulaire lors de sa soumission.</li>
                    <li> method : indique comment seront transmises les données au serveur ("get" ou "post").</li>
                </ul>
                <p>Les éléments utilisés à l'intérieur d'un formulaire pour échanger explicitement des
                informations
                sont les suivant :
                <ul>
                    <li>button</li>
                    <li>input avec les différents types qui lui sont associés (submit, text, checkbox ...)</li>
                    <li>select</li>
                    <li>textarea</li>
                </ul>
            </p>
            <img src="images/elementForm.jpg" />

    </section>
    <div class=gris></div>
</article>
<footer>
    2018 Acces code school . An Jun, Alain, Bilel, Ophélie . mention légal .
</footer>

</body>

</html>