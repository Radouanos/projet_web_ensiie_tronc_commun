<?php
namespace ChefController;
require_once('../view/planningView.php');
require_once('../view/filmView.php');
require_once('../view/ClientCompteView.php');
require_once('../view/allFonctionForm.php');
//require('../src/ConnectionBdd.php');
require_once('../src/Compte/CompteRepository.php');
//require_once('../src/Compte/Compte.php');
use Compte\Compte;
use Compte\CompteRepository;
use Admin\AdminRepository;
use Film\FilmRepository;
use mysql_xdevapi\Exception;

namespace UserController;

class UserController
{
    public function voirProfil()
    {
        profilClient();
    }
    public function voirMesReservation()
    {

    }
    public function accueil($objet,$id)
    {
        global $req;
        echo "<h1>MON FILM PREFERE</h1>";
        $nombre=$objet->showFilm($id);
        if($nombre==true)
        {
            affichePday();
        }
        else echo "film Does not exist";
    }
    public function planningSemaine()
    {

    }
    public function planningJour()
    {

    }
    public function VoirFilm()
    {

    }
    public function reserverPlace()
    {

    }
    public function reserverSalle()
    {

    }
    public function VoirFilmCategorie()
    {

    }
}