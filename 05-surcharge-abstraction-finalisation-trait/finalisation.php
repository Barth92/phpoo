<?php

final class Application
{
    public function lancementApplication()
    {
        return "L'application se lance correctement";
    }
}


$app = new Application;
echo $app->lancementApplication();

// class Test extends Application 
// {
//     public function lancement()
//     {
//         return "je me lance";
//     }
// }

// ⚠ Cela donne une erreur, car on ne peut pas hérité d'une class final !
// Il est tout de même possible d'instancier une class final

class Application2
{
    final public function lancementApplication()
    {
        return "L'application 2 se lance correctement";
    }
}

class Extension extends Application2
{
    // public function lancementApplication()
    // {
    //     return "L'application 2 se lance maintenant comme cela !";
    // }
    
    // ⚠ On hérite de la méthode lancementApplication()
    // Erreur ! Je ne peux pas surcharger / redéfinir la méthode lancementApplication() car elle est final dans la classe mère.

}

$ext = new Extension;
echo '<pre>'; print_r(get_class_methods($ext)); echo '</pre>';
echo $ext->lancementApplication();

/*
    Une class final ne peut pas être héritée
    Une class final reste instanciable
    Une méthode final peut être présente dans une class normale
    L'intérêt de mettre le mot clé "final" sur une méthode est de vérouiller afin d'empêcher toute sous-méthode de la redéfinir et de modifier son comportement ( quand nous voulons être sur que le comportement d'une méthode soit préservé durant l'héritage ) 
*/

