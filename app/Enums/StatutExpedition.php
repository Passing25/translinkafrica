<?php

namespace App\Enums;

enum StatutExpedition:string {
    case TERMINER = 'Terminée';
    case EN_COURS = 'En cours';
    case ANNULER = 'Annulée';
    case EN_ATTENTE = 'En attente';
}
