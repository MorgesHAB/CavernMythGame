<?php
	// Environement propice à l'écriture des questions et réponses philosophiques
    // Déclaration de toutes les questions et des réponses dans des tableaux

/*	$Qn = array(			// Template
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
        "Quel philosophe vous correspond le plus ?",
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

    // idée question parler de l'apprentissage (escaldade caverne en sortant) & la nouveauté éblouissant en sortant 
    // aider les gens éducation 

	// nombre de questions dans le jeu
    	$_SESSION['nbr_Q'] = 4;

    // A modifier si des questions sont ajoutées
		$content = array(NULL,$Q1,$Q2,$Q3,$Q4);
?>