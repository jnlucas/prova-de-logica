<?php



class ExercicioController extends Pergaminho {
    
    var $texto = array();
    var $ordem = array(
      'j' => 'a',
      'n'=> 'b',
      'g'=> 'c',
      'm'=> 'd',
      'c'=> 'e',
      'l' =>'f',
      'q'=> 'g',
      's'=> 'h',
      'k'=> 'i',
      'r'=> 'j',
      'z'=> 'l',
      'f'=> 'm',
      'v'=> 'n',
      'b'=> 'o',
      'w'=> 'p',
      'p'=> 'q',
      'x'=> 'r',
      'd'=> 's',
      'h'=> 't',
      't'=> 'u' 
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
    
    public function ordenar(){
        $this->transformArray($this->getTexto2());
        $array = array();
        foreach($this->texto as $texto){
            $array[] = $this->transformNumero($texto);
        }
        sort($array);
        foreach($array as $arr){
            $retorno[] = $this->destransformNumero($arr);
        }
        
        return $retorno;
        
    }
    
    public function transformNumero($palavra)
    {
        $string = array();
        for($i = 0; $i < strlen($palavra); $i ++){
            
            foreach($this->ordem as $k =>  $ordem){
                if($k == substr($palavra,$i,1)){
                     $string[] = (string) "$ordem";
                }
            } 
        }
        return  $string = implode("", $string);
       
    }
    
    public function destransformNumero($palavra)
    {
        $string = array();
        for($i = 0; $i < strlen($palavra); $i ++){
            
            foreach($this->ordem as $k =>  $ordem){
                if($ordem == substr($palavra,$i,1)){
                     $string[] = (string) "$k";
                }
            } 
        }
        return  $string = implode("", $string);
       
    }
}

?>