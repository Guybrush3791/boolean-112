<?php

$matches = [
    [
        "local_team" => "Olympique de Marseille",
        "visitor_team" => "Paris Saint-Germain",
        "local_team_score" => 50,
        "visitor_team_score" => 65,
    ],
    [
        "local_team" => "Stade Rennais",
        "visitor_team" => "Toulouse FC",
        "local_team_score" => 40,
        "visitor_team_score" => 35,
    ],
    [
        "local_team" => "Quimper Kerfeunteun FC",
        "visitor_team" => "Stade Brestois 29",
        "local_team_score" => 30,
        "visitor_team_score" => 40,
    ],
    [
        "local_team" => "Nîmes Olympique",
        "visitor_team" => "Wattrelos FC",
        "local_team_score" => 50,
        "visitor_team_score" => 40,
    ]
];

foreach($matches as $match) {

    echo 
        "<h2>" 
            . $match["local_team"] . " - " 
            . $match["visitor_team"] . " | " 
            . $match["local_team_score"] . "-" 
            . $match["visitor_team_score"] 
        . "</h2>";
}