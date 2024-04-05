<?php
declare(strict_types=1);

namespace Covertier\Catalogs\Enums;
enum Profession: string
{
    /* Administrator */
    case ADM = 'ADM';

    /* Lawyer */
    case LAW = 'LAW';

    /* Architect */
    case ARC = 'ARC';

    /* Actuary */
    case ACT = 'ACT';

    /* Accountant */
    case ACC = 'ACC';

    /* Teacher */
    case EDU = 'EDU';

    /* Economist */
    case ECO = 'ECO';

    /* Engineer */
    case ENG = 'ENG';

    /* Doctor */
    case MED = 'MED';

    /* Psychologist */
    case PSY = 'PSY';

    /* Dentist */
    case DEN = 'DEN';

    /* Chemist */
    case CHE = 'CHE';

    /* Biologist */
    case BIO = 'BIO';

    /* Sociologist */
    case SOC = 'SOC';

    /* Journalist */
    case JRN = 'JRN';

    /* Other */
    case OTH = 'OTH';

    /* None */
    case NON = 'NON';
}