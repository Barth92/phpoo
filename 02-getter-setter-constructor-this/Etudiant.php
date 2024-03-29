<?php

/*
    1. Créer des nouvelles propriétées private : nom, salle, adresse, cp, ville.                     //
    2. Créer des setters et getters associés.                                                        //
    3. Faire en sorte que nom, prenom, ville et adresse soient bien des strings sinon erreur.        //
    4. Pour nom et prenom longueur minimum de 3 caractères et maximum de 15 caractères sinon erreur. //
    5. Pour salle et cp vérifier que se sont bien des nombres sinon erreur.                          // 
    6. Créer 5 nouveaux Etudiant.                                                                    //
*/

class Etudiant
{
    private $prenom;
    private $nom;
    private $salle;
    private $adresse;
    private $cp;
    private $ville;

    public function __construct($prenom, $nom, $salle, $adresse, $cp, $ville)
    {
        $this->setPrenom($prenom);
        $this->setNom($nom);
        $this->setSalle($salle);
        $this->setAdresse($adresse);
        $this->setCp($cp);
        $this->setVille($ville);
        echo "<hr>Paramètres passés dans le constructor : <hr>";
        echo "Prénom : " . $prenom . "<br>Nom : " . $nom . "<br>Salle : " . $salle . "<br>Adresse : " . $adresse . "<br>Code Postal : " . $cp . "<br>Ville : " . $ville;
    }

    public function setPrenom($newPrenom)
    {
        if(is_string($newPrenom))
        {
            if(iconv_strlen($newPrenom) >= 3 && iconv_strlen($newPrenom) <= 15)
            {
                $this->prenom = $newPrenom;
            }
            else
            {
                trigger_error("Le prénom doit contenir entre 3 et 15 caractères inclus", E_USER_ERROR);
            }
        }
        else
        {
            trigger_error("Ce prénom n'est pas un string", E_USER_ERROR);
        }
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setNom($newNom)
    {
        if(is_string($newNom))
        {
            if(iconv_strlen($newNom) >= 3 && iconv_strlen($newNom) <= 15)
            {
                $this->nom = $newNom;
            }
            else
            {
                trigger_error("Le nom doit contenir entre 3 et 15 caractères inclus", E_USER_ERROR);
            }
        }
        else
        {
            trigger_error("Ce nom n'est pas un string", E_USER_ERROR);
        }
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setSalle($salle)
    {
        if(is_integer($salle))
        {
            $this->salle = $salle;
        }
        else
        {
            trigger_error("Cette salle n'est pas un nombre", E_USER_ERROR);
        }
    }

    public function getSalle()
    {
        return $this->salle;
    }

    public function setAdresse($adresse)
    {
        if(is_string($adresse))
        {
            $this->adresse = $adresse;
        }
        else
        {
            trigger_error("Cette adresse n'est pas un string", E_USER_ERROR);
        }
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setCp($cp)
    {
        if(is_integer($cp))
        {
            $this->cp = $cp;
        }
        else
        {
            trigger_error("Ce code postal n'est pas un nombre", E_USER_ERROR);
        }
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function setVille($ville)
    {
        if(is_string($ville))
        {
            $this->ville = $ville;
        }
        else
        {
            trigger_error("Cette ville n'est pas un string", E_USER_ERROR);
        }
    }

    public function getVille()
    {
        return $this->ville;
    }
}

$eleve = new Etudiant('Julien', 'Lebron', 60, '30 avenue Broustin', 1090, 'Bruxelles');
$eleve2 = new Etudiant('Corentin', 'Garcia', 30, '10 avenue de la gloire', 77100, 'Meaux');
$eleve3 = new Etudiant('Adriana', 'Gonzalez', 22, "10 rue de l'église", 1090, 'Bruxelles');
$eleve4 = new Etudiant('David', 'Cohen', 60, '95 rue du temple', 75013, 'Paris');
$eleve5 = new Etudiant('Jen-Marie', 'Leup', 22, '39 rue Aristide Briand', 77124, 'Villenoy');

/*
    __construct() est une méthode magique en PHP, elle est prédéfinie dans le code et s'exécute automatiquement lorsqu'on instancie la classe. 
    Si la méthode __construct($arg) attend un argument, nous devons lui envoyer un argument à l'instanciation de la classe.
    __construct() permet d'automatiser un traitement, cela pourrait être l'équivalent du fichier init (contenant la connexion à la BDD, session_start(), les constantes etc ...)
    On ne peux pas déclarer 2 constructor
*/