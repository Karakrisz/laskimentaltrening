<?php

function homeController()
{
    return [
        "home",
        [
            "title" => "Kezdőlap"
        ]
    ];
}

function aboutController()
{
    return [
        "magamrol",
        [
            "title" => "Magamról"
        ]
    ];
}

function coachingController()
{
    return [
        "coaching",
        [
            "title" => "Coaching"
        ]
    ];
}

function sportMentalTreningController()
{
    return [
        "sport-mentaltrening",
        [
            "title" => "Sport mentáltréning"
        ]
    ];
}

function taboroztatasController()
{
    return [
        "taboroztatas",
        [
            "title" => "Táboroztatás"
        ]
    ];
}

function seniorTornaController()
{
    return [
        "senior-torna",
        [
            "title" => "Senior torna"
        ]
    ];
}

function contactController()
{
    return [
        "kapcsolat",
        [
            "title" => "Kapcsolat"
        ]
    ];
}

function referenciaController()
{
    return [
        "referencia",
        [
            "title" => "Referencia"
        ]
    ];
}

function notFoundController()
{
    return [
        "404", [
            "title" => "A keresett oldal nem található."
        ]
    ];
}