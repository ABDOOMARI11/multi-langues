<?php
header('Content-Type: application/json');

$translations = [
    'en' => [
        'Home' => 'Accueil',
        'About' => 'À propos',
        'Contact' => 'Contact',
        'ChangeLanguage' => 'Changer la langue',
        'Exciting Football Match' => 'Match de football palpitant',
        'Yesterday\'s football match was an intense showdown between two rival teams...' => 'Le match de football d\'hier a été un affrontement intense entre deux équipes rivales...',
        'New Records in Tennis' => 'Nouveaux Records dans le Tennis',
        'The tennis tournament saw the establishment of exciting new records...' => 'Le tournoi de tennis a vu l\'établissement de nouveaux records passionnants...',
        'FootballMatchContent' => 'Le match de football d\'hier a été un affrontement intense entre deux équipes rivales...',
        'TennisRecordsContent' => 'Le tournoi de tennis a vu l\'établissement de nouveaux records passionnants...',
    ],
    'fr' => [
        'Accueil' => 'Home',
        'À propos' => 'About',
        'Contact' => 'Contact',
        'Changer la langue' => 'Change language',
        'Match de football palpitant' => 'Exciting Football Match',
        'Le match de football d\'hier a été un affrontement intense entre deux équipes rivales...' => 'Yesterday\'s football match was an intense showdown between two rival teams...',
        'Nouveaux Records dans le Tennis' => 'New Records in Tennis',
        'Le tournoi de tennis a vu l\'établissement de nouveaux records passionnants...' => 'The tennis tournament saw the establishment of exciting new records...',
        'FootballMatchContent' => 'Yesterday\'s football match was an intense showdown between two rival teams...',
        'TennisRecordsContent' => 'The tennis tournament saw the establishment of exciting new records...',
    ],
    'ar' => [
        'Home' => 'الرئيسية',
        'About' => 'حول',
        'Contact' => 'اتصل',
        'ChangeLanguage' => 'تغيير اللغة',
        'Exciting Football Match' => 'مباراة كرة القدم مثيرة',
        'Yesterday\'s football match was an intense showdown between two rival teams...' => 'كانت مباراة كرة القدم أمس مواجهة مثيرة بين فريقين منافسين...',
        'New Records in Tennis' => 'سجلات جديدة في التنس',
        'The tennis tournament saw the establishment of exciting new records...' => 'شهدت بطولة التنس إقامة سجلات جديدة ومثيرة...',
        'FootballMatchContent' => 'كانت مباراة كرة القدم أمس مواجهة مثيرة بين فريقين منافسين...',
        'TennisRecordsContent' => 'شهدت بطولة التنس إقامة سجلات جديدة ومثيرة...',
    ]
];

echo json_encode($translations);
?>
