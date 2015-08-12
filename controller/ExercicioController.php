<?php



class ExercicioController extends Pergaminho {
    
    var $texto = array();
    var $ordem = array(
      'j','n','g','m','c','l','q','s','k','r','z','f','v','b','w','p','x','d','h','t' 
    );
    var $ordenacao;

    public function getGeneriques(){
        $this->transformArray($this->getTexto2());
        $filtro = array();
        foreach($this->texto as $texto){
            if(strlen($texto) == 3 && !strstr($texto,"b") && in_array(substr($texto, 2,1) , $this->foo) ){
                    $filtro[] = $texto;
            }
        }
        return $filtro;
    }
    
    public function getVerbos(){
        $this->transformArray($this->getTexto2());
        $verbos = array();
        foreach($this->texto as $texto){
            if(strlen($texto) >= 7 && in_array(substr($texto, strlen($texto)-1,1) , $this->foo) ){
                    $verbos[] = $texto;
            }
        }
        return $verbos;
    }
    
    public function getVerbosPrimeiraPessoa($verbos){
        $primeiraPessoa = array();
        foreach($verbos as $verbo){
            if(!in_array(substr($verbo, 0,1) , $this->foo) ){
                    $primeiraPessoa[] = $verbo;
            }
        }
        return $primeiraPessoa;
    }
    
    /**
     * 
     */
    public function transformArray($texto){
        $this->texto = explode(' ', $texto);
        return $this->texto;
    }
}

?>