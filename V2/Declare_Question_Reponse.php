<?php
	// Environement propice à l'écriture des questions et réponses philosophiques
    // Déclaration de toutes les questions et des réponses dans des tableaux
    
    // Template
/*	$Qn = array(			
        "Question",
        "Réponse 1",
        "Réponse 2",
        "Réponse 3",
        "Réponse 4");	*/

    $Q1 = array(
        "Quel est pour vous la principale voie pour accéder au bonheur ?",
        "Amour",
        "Richesse",
        "Apparence",
        "Sexualité");

    $Q2 = array(
        "En rentrant de soirée, vous croisez un homme à terre qui semble être très ivre. Quelle est votre réaction ?",
        "Je le regarde et le laisse seul",
        "J'avertis la police ",
        "Je l'aide",
        "Je l'ignore");
    $Q3 = array(
        "Pensez-vous qu'il faut souffrir pour accéder au bonheur ?",
        "Socrate",
        "Platon",
        "Cyprien",
        "Amixem");

    $Q4 = array(
        "Te sens-tu expert dans un domaine spécifique ?",
        "Oui, car tout un chacun est un expert dans un domaine",
        "Non, car il est impossible d'être expert",
        "Je ne pense pas",
        "Je ne sais pas");

    $Q5 = array(
        "Aimez-vous les nouvelles technologies ?",
        "",
        "",
        "",
        "");  

    $Q6 = array(
        "Comment réagiriez-vous si l'on vous disait que la vie sur Terre a été crée par des extraterrestres et qu'ils observent notre développement depuis des milliers d'années",
        "",
        "",
        "",
        "");

    $Q7 = array(
        "Selon vous, par quoi commence la vrai connaissance ?",
        "Par un détournement du regard",
        "",
        "",
        "");

    $Q8 = array(
        "Quelle est la caractèristique qui vous correspond le mieux ?",
        "",
        "",
        "",
        "Curieux");

    $Q9 = array(
        "berger",
        "",
        "",
        "",
        "");

    $Q10 = array(
        "Pensez-vous que l'éducation est essentiel au bonheur ?",
        "",
        "",
        "",
        "");

    // idée question parler de l'apprentissage (escaldade caverne en sortant) & la nouveauté éblouissant en sortant 
    // aider les gens éducation 

	// nombre de questions dans le jeu
    	$_SESSION['nbr_Q'] = 10;

    // A modifier si des questions sont ajoutées
		$content = array(NULL,$Q1,$Q2,$Q3,$Q4,$Q5,$Q6,$Q7,$Q8,$Q9,$Q10);
?>