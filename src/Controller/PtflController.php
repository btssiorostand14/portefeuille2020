<?php

namespace App\Controller;

use App\Entity\PortEtudiant;
use App\Entity\PortDomaine;
use App\Entity\PortActivite;
use App\Entity\PortActivitecitee;
use App\Entity\PortCommentaire;
use App\Entity\PortProduction;
use App\Entity\PortCompetence;
use App\Entity\PortCarnetbord;
use App\Entity\PortSemainecarnet;
use App\Entity\PortGroupe;
use App\Entity\PortTachesemaine;
use App\Entity\PortSituation;
use App\Form\EtudiantType;
use App\Form\ReferentielType;
use App\Form\CarnetbordType;
use App\Form\SemaineCarnetType;
use App\Form\SituationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PtflController extends AbstractController
{	private function getEtudiants(){
		return $this->getDoctrine()->getRepository(PortEtudiant::class);
	}
    /**
     * @Route("/ptfl", name="ptfl")
     */
    public function index()
    {   //Permet l'affichage des étudiants par promo avec liens vers leurs travaux (stages et situations)
    	$data["promos"]=$this->getDoctrine()->getRepository(PortGroupe::class)->findAll(['annee'=> 'DESC']);
    	$data["etudiants"]=$this->getEtudiants()->findAll(['nom'=>'ASC']);
    	$data["situations"]=$this->getDoctrine()->getRepository(PortSituation::class)->findAll();
    	return $this->render('ptfl/vue_accueil.html.twig', ['pData' => $data,]
        );
    }
    
   
   public function referentiel() 
   { 	//permet l'affichage du référentiel par Bloc/Activités/Compétences
   		$repodomaines = $this->getDoctrine()->getRepository(PortDomaine::class);
		$domaines = $repodomaines->findAll();
		$repoactivites = $this->getDoctrine()->getRepository(PortActivite::class);
		$activites = $repoactivites->findAll();
		$repocompetences = $this->getDoctrine()->getRepository(PortCompetence::class);
		$competences = $repocompetences->findAll();
		$data=array();
		$data["domaines"]=$domaines;
		$data["activites"]=$activites;
		$data["competences"]=$competences;
		
		return $this->render('ptfl/vue_referentiel.html.twig', [
            'pData' => $data,]);	
     
   }
   
   /***************** Gestion des situations ****************************/
   public function situation($pIdEtud, $pIdSitu, $pPage){
   		//permet l'affichage des infos d'une situation
   		$data=array();
   		$situations=$this->getDoctrine()->getRepository(PortSituation::class);
   		$laSituation=$situations->findOneBy(['ref' => $pIdSitu],);
   		$data["situation"]=$laSituation;
   		$data["etudiant"]=$this->getEtudiants()->findOneBy(['num' => $pIdEtud,]);
   		$data["onglet"]=$pPage;
   		switch ($pPage) {
   			case 0: //description
   				$form = $this->createForm(SituationType::class, $laSituation);
    			$data["form"]=$form->createView();
    			break;
    		case 1: //activités à choisir
    			$activites=$this->getDoctrine()->getRepository(PortActivite::class);
   				$lesActivites=$activites->findAll();
    			$data["activites"]=$lesActivites;
    			break;
    		case 2: //reformulations
    			$activites=$this->getDoctrine()->getRepository(PortActiviteCitee::class);
   				$lesActivitesCitees=$activites->findBy(['refsituation' => $pIdSitu,]);
    			$data["activites"]=$lesActivitesCitees;
    			break;
    		Case 3: //productions
    			$productions=$this->getDoctrine()->getRepository(PortProduction::class);
   				$lesProd=$productions->findBy(['refsituation' => $pIdSitu,]);
   				$data["productions"]=$lesProd;
    			break;
    		Case 4: //commentaires
    			$commentaires=$this->getDoctrine()->getRepository(PortCommentaire::class);
   				$lesComm=$commentaires->findBy(['refsituation' => $pIdSitu,]);
   				$data["commentaires"]=$lesComm;
    			break;
   		}
    	return $this->render('ptfl/vue_situation.html.twig', [
            'pData' => $data,]);	
    	
   }
   
   /***************** Gestion des carnets de bord ************************/
   private function getCarnet($pEtud, $pAnnee){ //retourne le carnet de bord de l'étudiant pour l'année de stage passée en paramètre
		$carnets= $this->getDoctrine()->getRepository(PortCarnetbord::class);
		$leCarnet=$carnets->findOneBy(['idetud' => $pEtud,'codesource' => $pAnnee ]);
		return($leCarnet);
	}
	private function getSemaineCarnet($pCarnet, $pSemaine){
	//retourne les infos d'une semaine dont on fournit le numéro (1 à 7) pour un carnet déterminé
		$semaines= $this->getDoctrine()->getRepository(PortSemainecarnet::class);
		$laSemaineCarnet=$semaines->findOneBy(['idcarnet' => $pCarnet,'numsemaine' => $pSemaine ]);
		return($laSemaineCarnet);
	}
	private function getTachesSemaine($pSemaine){
	//retourne les tâches d'une semaine donnée par jour croissant
		$taches= $this->getDoctrine()->getRepository(PortTachesemaine::class);
		$lesTaches=$taches->findBy(['idsemaine' => $pSemaine ],['jour' => 'ASC' ]); //ordre des jours croissants
		return($lesTaches);
	}
	
   public function carnetbord($pIdEtud, $pAnnee, $pSemaine) 
   { //variable pour transmette les informations à la vue
     $data=array();
     //récupération des données de la base;
     $repoetuds = $this->getDoctrine()->getRepository(PortEtudiant::class);
     $etudiant = $repoetuds->find($pIdEtud);   //numéro étudiant normalement déterminé par l'interface
     $carnet=$this->getCarnet($etudiant->getNum(),$pAnnee);  //année de stage normalement déterminée par l'interface
     //stockage des infos
     $data["etudiant"]=$etudiant;
     $data["carnet"]=$carnet;
     $data["annee"]=$pAnnee;
     $data["semaine"]=$pSemaine; //n° semaine normalement déterminé par l'interface
    //crée le formulaire et la vue associée en fonction du numéro de semaine (0=infos, 1 à 5= détails)
     switch ($data["semaine"]) {
     	case 0:
     		$formcarnet = $this->createForm(CarnetbordType::class, $data["carnet"]);
    		$data["formCarnet"]=$formcarnet->createView();
    		break;
    	default:
    		//récupère le détail de la semaine + tâches  
     		$semaineCarnet=$this->getSemaineCarnet($carnet->getId(),$pSemaine);
     		$lesTaches=$this->getTachesSemaine($semaineCarnet->getId());     		  		
     		$data["dataSemaine"]=$semaineCarnet;
     		$data["lesTaches"]=$lesTaches;
    		$formsemaine = $this->createForm(SemaineCarnetType::class, $semaineCarnet);
    		$data["formSemaineCarnet"]=$formsemaine->createView();
    		break;
     }
     
	 return $this->render('ptfl/vue_carnet.html.twig', [
            'pData' => $data,]);	
   }
}
