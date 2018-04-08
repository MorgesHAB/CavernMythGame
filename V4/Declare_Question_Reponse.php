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
        "Sexualité",
        "Richesse",
        "Apparence",
        "Connaissance");

    $Q2 = array(
        "En rentrant de soirée, vous croisez un homme à terre qui semble être très ivre. Quelle est votre réaction ?",
        "Je l'ignore",
        "Je m'inquiète simplement de savoir si la vie la quitté ",
        "J'avertis la police",
        "Je l'aide");
    $Q3 = array(
        "Si vous êtes face à une difficulté, comment réagissez-vous ?",
        "Je fais comme si je n'avais aucune difficulté",
        "Je panique mais affronte cette difficulté",
        "Je la surmonte sans problème, parfois tête baissée",
        "Je réfléchis à la cause de cette difficulté et agis en conséquent.");

    $Q4 = array(
        "Te sens-tu expert dans un domaine spécifique ?",
        "Non, j'estime être bon en rien",
        "Non, car il est impossible d'être expert",
        "Oui, car tout un chacun est un expert dans un domaine",
        "Non je ne suis pas expert mais j'estime avoir un bon niveau dans un domaine. Cela me permet de progresser ce que j'apprécie.");

    $Q5 = array(
        "Aimez-vous les nouvelles technologies ?",
        "Non, l'homme est en danger à cause d'elles",
        "Non, elles ne m'inspirent pas confiance",
        "Oui, je rêve de les développer",
        "Oui, elles nous aident à avancer");  

    $Q6 = array(
        "Comment réagiriez-vous si l'on vous disait que la vie sur Terre a été crée par des extraterrestres et qu'ils observent notre développement depuis des milliers d'années",
        "J'essaierai de trouver des armes pour me défendre en cas d'attaques",
        "Je me moquerais de celui qui le prétend",
        "Cela hanterait ma vie",
        "Je trouverais cela fabuleux");

    $Q7 = array(
        "Selon vous, par quoi commence la vrai connaissance ?",
        "La connaissance se développe chez moi en écoutant les propos des politiciens",
        "La connaissance se développe chez moi grâce aux émissions de télé réalité",
        "Par un voyage culturel",
        "Par une prise de conscience");

    $Q8 = array(
        "Quelle est la caractèristique qui vous correspond le mieux ?",
        "Meneur",
        "Timide",
        "Heureux",
        "Curieux");

    $Q9 = array(
        "Si vous étiez un berger et que l'un de vos moutons s'échappait. Que feriez-vous?",
        "Je l'abats sur le champ",
        "Je l'ignore et reste près du troupeau",
        "Je lui cours après et abandonne le troupeau",
        "J'essaie de lui courir après en emmenant le troupeau avec moi");

    $Q10 = array(
        "Pensez-vous que l'éducation est essentiel au bonheur ?",
        "Non, ce n'est qu'une invention pour monter l'esprit des gens",
        "Non, au contraire, l'éducation rend les gens malheureux car elle détruit leur personnalité",
        "Oui, elle permet de voir le monde sous son angle réel",
        "Oui, elle développe un sens critique nécessaire au bonhneur");

    // idée question parler de l'apprentissage (escaldade caverne en sortant) & la nouveauté éblouissant en sortant 
    // aider les gens éducation 

	// nombre de questions dans le jeu
    	$_SESSION['nbr_Q'] = 10;

    // A modifier si des questions sont ajoutées
		$content = array(NULL,$Q1,$Q2,$Q3,$Q4,$Q5,$Q6,$Q7,$Q8,$Q9,$Q10);
?>