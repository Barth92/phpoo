<?php

// Transitivité

class A 
{
    public function test1()
    {
        return "test1 : Je suis dans la méthode de la classe A";
    }
}

class B extends A
{
    public function test2()
    {
        return "test2 : Je suis dans la méthode de la classe B";
    }
}

class C extends B
{
    public function test3()
    {
        return "test3 : Je suis dans la méthode de la classe C";
    }
}

$c = new C;
echo $c->test1() . '<hr>';
echo '<pre>'; print_r(get_class_methods($c)); echo '</pre>';

/*
    Si C hérite de B et que B hérite de A alors C hérite de A.
    Les méthodes protected de A sont accessible dans C grâce à la transitivité.
    Une class ne peut pas hériter d'elle-même // exemple : class D extends D
    pas d'héritage multiple : exemple : class G extends I, J, K // ⚠ impossible !
    sens de l'héritage : class F extends E // F hérite de E, E n'hérite pas de F
*/