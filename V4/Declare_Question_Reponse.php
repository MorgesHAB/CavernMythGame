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
        "Quelle est pour vous la principale voie pour accéder à l'idée du bien ?",
        "La beauté",
        "L'amour",
        "La justice",
        "La connaissance");

    $Q2 = array(
        "En rentrant de soirée, vous croisez un homme à terre qui semble être très ivre. Quelle est votre réaction ?",
        "Je l'ignore",
        "Je me questionne simplement de ce qui va lui arriver",
        "J'avertis la police afin qu'il reçoive de l'aide",
        "Je l'aide");

    $Q3 = array(
        "Si vous êtes face à une difficulté, comment réagissez-vous ?",
        "Je fais comme si je n'avais aucune difficulté",
        "Je trouve une alternative à cette difficulté",
        "J'essaie de la surmonter mais si une douleur est ressentie, j'arrête aussitôt",
        "Je réfléchis à la cause de cette difficulté et agis en conséquent jusqu'à la surmonter");

    $Q4 = array(
        "Aimeriez-vous vivre dans l'ignorance ?",
        "Oui, je n'aurais jamais voulu être éduqué",
        "Oui car l'ignorance nous empêcherait de comprendre l'absurdité de notre monde",
        "Non, car l'ignorance endort notre qualité de vie humaine",
        "Non, je ne peux arrêter ma soif de savoir");

    $Q5 = array(
        "Aimez-vous les nouvelles technologies ?",
        "Non, l'homme est en danger à cause d'elles",
        "Non, elles ne m'inspirent pas confiance",
        "Oui, mais il faut prendre garde à certaines",
        "Oui, elles nous aident à avancer");  

    $Q6 = array(
        "Pensez-vous qu'il faudra prochainement quitter notre planète Terre pour des raisons écologiques ?",
        "Non, nous réussirons à trouver des solutions à ces problèmes dans le future",
        "Non, si nous faisons attention dès maintenant à l'écologie",
        "Oui, même si actuellement on nous moralise sur notre futur",
        "Oui, il sera obligatoire de quitter la Terre, il faut voir la vérité en face");

    $Q7 = array(
        "Selon vous, par quoi commence la vrai connaissance ?",
        "La connaissance se développe chez moi grâce aux émissions de télé réalité",
        "La connaissance se développe chez moi en écoutant les propos des politiciens",
        "Par un voyage culturel",
        "Par une prise de conscience");

    $Q8 = array(
        "Si des gens revenant d'un voyage sur une exoplanète vous disent que la vie sur celle-ci est bien meilleure que sur notre Terre, que faites-vous ?",
        "Je ne les crois pas et reste avec mon entourage sur cette Terre",
        "Je médite sur leurs affirmations mais sans action ultérieure",
        "Je me prépare psychiquement afin de quitter cette Terre dans les prochaines années",
        "Je quitte tout et pars le plus tôt possible pour cette exoplanète");

    $Q9 = array(
        "Si vous étiez un berger et que l'un de vos moutons s'échappait. Que feriez-vous ?",
        "Je l'abats sur le champ",
        "Je l'ignore et reste près du troupeau",
        "Je lui cours après et abandonne le troupeau",
        "J'essaie de lui courir après en emmenant le troupeau avec moi");

    $Q10 = array(
        "Pensez-vous que l'éducation est essentielle au bonheur ?",
        "Non, ce n'est qu'une invention créée pour dominer la société",
        "Non, au contraire, l'éducation rend les gens malheureux car elle détruit leur personnalité",
        "Oui, elle permet de voir le monde sous son angle réel",
        "Oui, elle développe un sens critique nécessaire au bonheur");

    // idée question parler de l'apprentissage (escaldade caverne en sortant) & la nouveauté éblouissant en sortant 
    // aider les gens éducation 

	// nombre de questions dans le jeu
    	$_SESSION['nbr_Q'] = 10;

    // A modifier si des questions sont ajoutées
		$content = array(NULL,$Q1,$Q2,$Q3,$Q4,$Q5,$Q6,$Q7,$Q8,$Q9,$Q10);
?>