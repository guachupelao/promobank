<?php
use models\Vacacion;

 if (! function_exists('vacationDays')){
    function vacationDays($date)
   
       {
           $date_current = new \DateTime();
           $date_init =  new \DateTime($date);

           $difference = $date_current->diff($date_init);

           $days_difference = $difference->format('%a')/365*12*1.25 ;
          
           
           return number_format ($days_difference,1);
       }
   }


   if(! function_exists('vacationTaken')){
        function vacationTaken($id)
        
        {
            $days_funcionario = Vacacion::where('funcionario_id',$id)->sum('days_funcionario');
            return $days_funcionario;
        }
    }

    if(! function_exists('vacationReturned')){
        function vacationReturned($id)
        {
           
            $days_solicitados = Vacacion::where('funcionario_id',$id)->sum('days_solicitados');

            

            return $days_solicitados;
        }
    }
  

class Helper
{
    public static function getRolAdmin()
    {
        foreach (Session::get('usuario_roles')->funcionarioRol as $funcionarioRol) {
        //echo $funcionarioRol->rol->nombre;
            if ($funcionarioRol->rol->nombre == 'Administrador(a)') {
                return true;
            }
        }

        return false;
    }

    public static function getRolAdminSuper()
    {
        foreach (Session::get('usuario_roles')->funcionarioRol as $funcionarioRol) {
            //echo $funcionarioRol->rol->nombre;
            if ($funcionarioRol->rol->nombre == 'Administrador(a)' || $funcionarioRol->rol->nombre == 'Supervisor(a)') {
                return true;
            }
        }

        return false;
    }

   

    

   
}
