<?php

    /* 
        CODER EN ORIENTATION OBJET
        La programmation orientée objet est bcp moins linéaire par rapport à la programmation procédurale. Son principal avantage est d'être mieux organisé
        permettant ainsi de faciliter la lisibilité du code et sa maintenance. 
        Son concept est un plus difficile à maitriser que celui du langage procédural qui nous est plus familier dans sa manière de s'éxécuter.
        Son principe est de faire en sorte que tout ce que nous allons coder devienne un objet. 

        Qu'est-ce qu'un objet ? 
        Un objet est tout ce que nous avons l'habitudede manipuler au quotidien, par ex un livre, un fauteuil.

        Différence entre procédural et POO
        Ce sont 2 anières de programmer. Sur le fond, on utilise le même langages, c à dire tout ce que nous avons appris jusqu'ici, elle se différencie 
        sur l'approche de la conception du programme lui-même.

        Comme nous l'avons compris, la POO a l'avantage d'avoir un code plus claire que celui du procédural et donc plus facile à mettre à jour. 
        Il sera également bcp plus facile à réutiliser dans d'autres portions du code de notre application ou site internet ce qui est loin d'être négligeable. 

        En résumé, on peut retenir qu'il existe 2 facons de programmer en PHP : POO ou procédural.
        Il n'y a donc pas de bonne ou mauvaise manière de coder. Nous disons simplement que plus notre site ou application grossira, plus nous aurons l'intéret à 
        utiliser la POO.

       *** Les fondamentaux de la POO ***

        -- Principe de POO --
        
        La POO se base sur le principe que tout élément inscrit est un objet. Le principe sera de créer des objets, pour cela nous utilisons des classes. 
        Une classe est donc un bloc de code culturel qui servira de moules pour la création d'un ou des objets.
        
        -- La classe --
        Nous venons de voir que le principe d'uine classe est de créer un objet. La classe utilise le mot clé class et contient un ensemble de fonction qui servira de modèle
        à la création d'un objet. 
        Ses fonctions porterons le nom de "méthodes". Lorsqu'on créé une fonction à l'intérieur d'une classe, on l'appelle "méthode". En revanche le principe de 
        fonctionnement est totalement identique. 

        --- Les objets ---
        Maintenant que nous avons défini une classe, nous pouvons alors créer un objet issu de cette classe. On dit alors qu'on instancie la classe ou que l'objet 
        est une instance de classe. 
        Ces objets seront donc construits à partir des méthodes (fonctions) et des propriétés ou attributs (variables) de la classe. 

        En résumé, retenir que la POO est basée sur les objets et les classes. On créé des objets à partir d'une classe. Chaque objet a acces aux méthodes et aux propriétés
        de la classe qui les a crées.

        -- Création d'un classe --
        Par convention, le nom de la classe commence par une lettre majuscule et chaque classe sera créé dans un fichier unique. 
        Le fichier PHP contiendra donc uniquement la classe ainsi que ses attributs et ses méthodes. Ce fichier pourra alors être appelé partout dans notre site
        ou application grace notament aux inclusions de fichiers que nous avons appris jusqu'ici. 
        Syntaxe : 

            class MaClass{

            }

        Les différentes visibilités d'une propriété

        ** La visibilité publique **
        Un propriété de visibilité publique peut etre apppelé à n'importe quel endroit du site. Cela signifie également qu'elle peut-être modifiée de n'importe quel endrroit du site.
        Sa syntaxe : public $_propiété. 

        ** La propriété de visibilité privée **
        Un propriété de visibilité privée ne peut etre appelée que depuis la classe. Cela signifie égalment qu'elle ne pourra être modifié uiquement à partir de la classe. 
        Sa sybtaxe : private $_propriété. 

        ** Ma propriété de visibilité protégée **
        Un propriété de visibilité protégé ne peut être appelé que depuis la classe parent mais aussi depuis une ou des classes enfants. Cela signifie qu'elle ne pourra  etre 
        modifié qu'a partir de la de la classe parent ou des classe enfants.
        Sa syntaxe : protected $_propriete.
        
        --- Les mutateurs ---
        Un mutateur (ou un setter) permet d'affecter une valeur à une propriété d'un objet. Grâce aux mutateurs nous allons pouvoir affecter n'importe quel valeur à notre propriété
        lors et ou apres la création d'un nouvel objet. 
            -- Créer un mutateur 
            la création d'un mutateur se fera donc au travers d'une méthode. me mutateur portera la mention set, comme setter. 
            Puis nous lui donnerons le nom de la propriété qu'il devra affecter d'une nouvelle valeur. 
            Syntaxe : 
            public function setPrenom($prenom){
                $this->prenom  = $prenom;
            }
            Set prenom est une méthode de type mutateur et de visibilité publique. Elle possède un pramètre $prenom. Ce paramètre est directement affecté à l'attribut
            $prenom grâce aux commandes $this->prenom;
            Grae à cette méthode à qui nous passons la variable $prenom, nous pouvons affecter un prénom à chaque personne que nous créérons avec la table (class) Personne. 
            
            --- Accéder à un mutateur
            L'accès à un mutateur se fait comme nous l'avons vu dans l'example de la Personne c a dire avec l'aide du caractère ->:
            $emi = new Personne();
            $emi->setPrenom('Pierre'); nous accédons à la méthode setPrenon en lui affectant l'argument Pierre.

            En résumé : grâce aux mutateurs, nous avons pu modifier la valeur de la propriété privée (private), en lui affectant une valeur de notre choix.
    
    --- Les assesseurs ---
    La créatio d'un assesseur se fera donc aux travers d'une méthode. L'asseseeur portera la mention get, comme getteur. Puis nous lui donnerons le nom 
    de la propriété dont il affichera la valeur. 
    Syntaxe : 
    public function getPrenom(){
        return $this->personne;
    }
    nb : getPrenom() est une méthode de type assesseur et de visibilité publique. Elle est relativement simple puisqu'elle se contente de retourner la valeur du paramètre $prenom.
    Grace à la méthode getPrenom(), nous récupérons le contenu de la propriété $prenom.
    -- Accéder à un assesseur
    l'aacès à un assesseur se fait avec l'aide du caractère ->: 
    $emi = new Personne;
    $emi -> setPrenom('Pierre');
    echo $emi->getPrenom();
    Sur la dernière ligne, nous accédons à la méthode getPrenom afin de récupérer l valeur de la propriété $prenom.
    
    * En résumé : grace à l'assesseur, nous avons pu accéder à la valeur de l'attribut privée $prenom;

    CONCLUSION
    Un mutateur permet de modifier la valeur d'une propriété. Alors qu'assésseur permet d'en récupérer son contenu.



    LE PRINCIPE DE L'ENCAPSULATION
    ***Définition***
    Le principe de l'encapsulation est un notion fondamentale de la POO. L'encapsulation consiste à protéger l'information contenu dans un objet en ne proposant que des méthodes pour manipuler les objets.


    *** Mise en pratique ***
    Sans le savoir nous avons dans la partie précédante mis en place ce principe d'encapsulation. En effet, concernant l'attribut $prenon, nous lui avons affecté une visibilité privée. Nous avons vu
    qu'il n'était pas possible d'y acceder directement. C'est la raison pour laquelle nous avons créé des méthodes afin de pouvoir modifier et adfficher le contenu de la propriété $prenom (et les 
    autres : $nom, $age).
    Et lorsque nous avons crée ces méthodes, nous leur avons attribué une visibilité publique afin de pouvoir y acceder et donc les manipuler. 

    ***Les niveaux d'accessibilité***
    Les niveaux d'accessibilité vont vous sembler familières puisque nous les avons déjà vu précedement. 
    Rappel : 
    La visibilité public : permet d'acceder à la propriété ou à la méthode depuis l'intérieur ou depuis l'extérieur de la classe. 
    La visibilité private : permet d'accéder à la propriété ou à la méthode uniquement depuis l'intérieur de la classe. 
    La visibilité protected : permet d'accéder à la propriété ou à la méthode depuis l'intérieur de la classe elle-même ou de ses classes filles. 

    ***Principe général***
    Les propriétés d'un objet seront privées ou protégées afin de n'être accessible que depuis la classe elle-même ou depuis une classe fille.
    Les méthodes d'un objet seront publiques afin afin de pouvoir y acceder de n'importe quel endroit de notre site, afin de manipuler les attributs ou (propriété). 


    En résumé, grace aux exemples vus, nous avons acquis le principe de l'encapsulation, ce qui permet d'en faire un simple rappel et bien ordonner nos nouvelles connaissances 
    concernant la POO.



    L'HERITAGE
    ***Principe de l'héritage***
    Lorsque nous créons une classe, celle-ci peut-etre une classe générale qui contiendra ses propres propriétés et méthodes. Mais nous auront peut etre besoin d'avoir des classes spécifiques
    qui soient relié à la classe générale.

    ---Cas concret : 
    */

    // class Eleve {
    //     private $_prenom;
    //     public function setPrenom($prenom){
    //         $this->_prenom = $prenom;
    //     }
    //     public function getPrenom(){
    //         return $this->_prenom;
    //     }
    // }
    
    /*
    Nous allons créer un nouvelle classe qui sera un classe fille de la classe Eleve. Cette nouvelle classe appellera la propriété $_prenom de la classe Eleve, et lorsque nous demanderons à afficher le prenom issu de cette nouvelle classe, nous souhaiterons obtenir un prénom dont la 1ere lettre sera en majuscule.
    Nous enrichirons également cette classe d'une propriété devant récupérer l'age. Nous l'appelerons, cette classe EleveFille et nous nommerons le fichier contenant cette nouvelle classe 
    EleveFille.class.php  

    Avant d'écrire cette nouvelle classe, nous allons devoir modifier la visibilité de la propriété = _prenom de la classe Eleve, puisque nous souhaitons aacéder à cette propriété de la class depuis la classe fille que nous allons créer. 
   Par consequence, la visibililités  de la proprieté  $_prenom ne sera plus privée mais protégé (protected).
Ceci afin de pouvoir y accéder depuis la classe fille 
 /
 //exemple 

 class  Eleve {
  protected $_prenom;
  public function setPrenom($prenom){ 
  $this->_prenom = $prenom ;
   }

  public function getPrenom() {
    return $this-> _prenom;
  }
   }
 // maintenant  nous pouvons créer notre classe fille qui pourra cceder a la proprieté $_prenom de la classe Eleve*/
//  class Elevefille extends Eleve {
//  }
    

/*
    Ainsi nous pouvons accéder à la classe mère, soit la classe Eleve. Ensuite, nous avons dit que nous souhaitons accéder à la propriété =_prenom de la classe Eleve afin de pouvoir écrire le prénom avec la 1ere lettre en majuscule. 
    Pour cela, il suffit simplement de réécrire la méthoode setPrenom à l'intériur de la classe EleveFille en luo ajoutant la fonction 
    ucfirst() qui permet d'afficher la 1ere lettre d'une chaine de caracteres en majuscule.
*/ 

// public function setPrenom($prenom){
//     $this->_prenom = ucfirst($prenom);
// }
    
/*
Il n'est pas utile de réécrire la méthode et le prénom puisque celle ci à deja été écrite dans la classe Eleve, dont la class EleveFille en est héritère.

Il nous reste à déclarer la propriété concernant l'age ainsi que ses méthodes (assesseur et mutateur). Celle-ci seront propres à la classe EleveFille.
*/

// class Elevefille extends Eleve{
//     private $_age;

//     public function setAge($age){
//         $this->_age = $age;
//     }
//     public function getAge(){
//         return $this->_age;
//     }
//     public function setPrenom($prenom){
//         $this->_prenom = ucfirst($prenom);
//     }
// }

/*
Nous déclarons la propriété $_age en visibilité private car cette propriété ne sera accesiible que paer la classe qui la contient. 
C'est à dire la claffe EleveFille.
Ensuite nous déclarons les méthodes get et set afin de pouvoir modifier l'age et l'afficher en cas d'appel. Exactement comme nous l'avons fait 
pour la propriété $_prenom de la classe Eleve. 

*** Récupération des infomations ***
Maintenant que les deux classes Eleve et EleveFille sont créées, nous pouvons les inclures dans un autres fichier (index.php) et nous servir de leur méthodes.
*/
 
    // include('Eleve.php');
    // include('EleveFille.php');

    // $eleveN1 = new Eleve();
    // $eleveN2 = new EleveFille();

    // $eleveN1 -> setPrenom('alain');
    // $eleveN2 -> setPrenom('julie');
    // $eleveN2 -> setPrenom('22');


/*
 LE CONSTRUCTEUR
 *** Principe ***
 Le constructeuteur est ce qu'on appelle en POO, une méhode magique. Son principe est de créer des valeurs par défaut au moment de la création  d'un nouvel objet. Le constructeur est donc une méthode. Afin de le différencier d'une méthode dite classique, le constructeur sera déclaré ainsi : 
    function __construct()
Il possèdera deux caractères underscrores et sera suivi d'un mot clé construct

        -- La création
    Nous allons reprendre le fichier Eleve.php en remettant sa propriété $_prenom en visibilité privée, car nous n'allons pas utiliser de classe fille afin de ne pas compexifier l'explication.
    */
    // class Eleve{
    //     private $_prenom;
    //     public function setPrenom($prenom){
    //         $this->_prenom=$prenom;
    //     }
    //     public function getPrenom(){
    //         return $this->_prenom;
    //     }
    // }

/*
Nous souhaitons enrichir notre classe Eleve en récupérant de manière automatique la dat d'inscription d'un nouvel élève au moiment de sa décclaration lors de l'appel de ntre classe Eleve grâce au mot clé nex.
    public function __construt(){
        $this->dateInstruction = date('d/m/Y);
    }
Nb : notre construteur a été déclaré en visibilité publique afin de pouvoir être invoqué de n'importe quel endroit de notre site.
Nous définissons l'objet courant grâce à la variable $this, en lui affectant la date au moment de l'inscription.

class Eleve{
            private $_prenom;

            // Constructeur
            public function __construct(){
                $this->dateInscription = date('d/m/Y');
            }

            public function setPrenom($prenom){
                $this->_prenom=$prenom;
            }
            public function getPrenom(){
                return $this->_prenom;
            }
        }

Nous allons à présent créer un nouvel élève puis nous irons récupérer sa date d'inscription qui aura été créée de manière automatique par le constructeur.

    <?php
    $eleve1 = new Eleve;
    $eleve1->setPrenom('Pierre');
    echo $eleve1->getPrenom().'<br />;
    echo 'Cet élève a été inscrit le '.$eleve1->dateInscription;

    CONCLUSION
    Nous venons de créer une méthode constructeur qui nous permet de pouvoir obtenir des valeurs au moment de la création d'un nouvel objet.


    *** LES CONSTANTES ***
    --- Principe d'une constante ---
    Une constante de classe sera toujours attachée à la classe. Elle sera accéssible qu'en lecture et donc ne pourra en aucaun cas être modifiable ni de l'intérieur ni de l'extérieur de la classe.

    Une constante se définie à l'aide du mot clés const et suivi de son nom écrit en majuscule. 
    cont NOMDELACONSTANTE;

    ---Crétion d'une constante---
    Nous allons prendre le fichier Eleve dans l'état suivant, afin de ne pas se complexifier l'explication du fonctionnement de la constante.

class Eleve{
            private $_prenom;

            // Constructeur
            public function __construct(){
                $this->dateInscription = date('d/m/Y');
            }

            public function setPrenom($prenom){
                $this->_prenom=$prenom;
            }
            public function getPrenom(){
                return $this->_prenom;
            }
        }
        
        Nous souhaitons définir une constante à notre classe. Un élément statique, invarialble et qi sera toujours ainsi.
        La constante que nous voulons créer sera la chaine de caractère suivante :

        Syntaxe : const ECOLE = 'Elève de notre école';

        NB : Par defaut une constante est toujours publique. Donc on ne précise pas sa visibilité. 
        Egalement, une constante est dite static. Pour récupérer sa valeur, nous utiliserons les carractères :: (double 2 points).

        class Eleve{
        const ECOLE = 'Elève de notre école'; // Création de la constante
        private $_prenom;

            public function setPrenom($prenom){
                $this->_prenom=$prenom;
            }
            public function getPrenom(){
                return $this->_prenom;
            }
        }

        Résumé : 
        Apres avoir apris à créer une constante, nous pouvons retenir qu'une constante de classe sera toujours accessible en lecture et sera appelée via les caractères :: (double 2 points).

       */




?>