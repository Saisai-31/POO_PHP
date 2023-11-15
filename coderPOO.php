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
            
        



    */



?>