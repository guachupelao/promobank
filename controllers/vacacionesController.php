<?php
use models\Vacacion;
use models\Funcionario;
use models\FuncionarioRol;
use models\Status;
use models\Usuario;

class vacacionesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
       
    }   

    public function index()
    {
        
        $this->_view->assign('titulo', 'Vacaciones');
        $this->_view->assign('title', 'Vacaciones');
        $this->_view->assign('vacaciones', Vacacion::select('id','funcionario_id'));
        $this->_view->assign('vacaciones', Vacacion::with('funcionario','status')->orderBy('id', 'DESC')->get());
        $this->_view->assign('status', Status::select('id','nombre'));
        $this->_view->assign('funcionario', Funcionario::with(['usuario','roles'])->find(Session::get('funcionario_id')));
        $this->_view->assign('roles', FuncionarioRol::with('rol')->where('funcionario_id', Session::get('funcionario_id')));
        $this->_view->renderizar('index');       
        
    }  

    public function view($id = null)
    {
        $this->verificarVacacion($id);
        $this->verificarMensajes();

        $this->_view->assign('titulo', 'Vacacion');
        $this->_view->assign('title', 'Vacacion');
        $this->_view->assign('vacacion',Vacacion::with(['status','funcionario','usuario'])->find($this->filtrarInt($id)));
        $this->_view->renderizar('view');       
        
        
       
    } 



    public function edit($id = null)
    {
        $this->verificarVacacion($id);
        $this->verificarRolAdmin();
        
        $this->_view->assign('titulo', 'Vacaciones');
        $this->_view->assign('title', 'Vacaciones');
        $this->_view->assign('button','Editar');
        $this->_view->assign('ruta','vacaciones/view/' . $this->filtrarInt($id));
        $this->_view->assign('vacacion', Vacacion::with(['funcionario','status'])->find($this->filtrarInt($id)));
        $this->_view->assign('statuses', Status::select('id','nombre')->get());
        $this->_view->assign('enviar', CTRL);

      
      
        if ($this->getAlphaNum('enviar') == CTRL) {
            $this->_view->assign('vacacion',$_POST);


            //print_r($_POST);exit;

            if (!$this->getInt('estado')) {
                $this->_view->assign('_error', 'Seleccione un Estado');
                $this->_view->renderizar('edit');
                exit;
            }

          
            if (!$this->getSql('observaciones')) {
                $this->_view->assign('_error', 'observaciones');
                $this->_view->renderizar('edit');
                exit;
            }
            if($days_funcionario=="0" && ($status_id==0))
            {
                $days_funcionario = 0;
            }

            $status_id = $this->getSql('estado');
               
            
            $vacacion = Vacacion::find($this->filtrarInt($id));
            $vacacion->status_id = $this->getInt('estado');   
            $vacacion->days_funcionario = $this->getSql('days_funcionario');
            $vacacion->observaciones = $this->getSql('observaciones');

                   
            $vacacion->save();

            Session::set('msg_success','El Estado de la vacacion se ha modificado correctamente');
            $this->redireccionar('vacaciones/view/' . $this->filtrarInt($id));
        }
        $this->_view->renderizar('edit');

       
       

        
    } 
    
  
 
    public function add()
    {
        
    
        $this->_view->assign('titulo','Vacaciones');
        $this->_view->assign('title','Vacaciones');
        $this->_view->assign('ruta', 'vacaciones');        
        $this->_view->assign('button', 'Guardar');
     
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) {
            $this->_view->assign('vacacion',$_POST);

          
            if (!$this->getSql('tipo')) {
                $this->_view->assign('_error', 'Ingrese el tipo de vacaciones');
                $this->_view->renderizar('add');
                exit;
            }

            if (!$this->getSql('razon')) {
                $this->_view->assign('_error', 'Ingrese la razon de las vacaciones');
                $this->_view->renderizar('add');
                exit;
            }

            if (!$this->getSql('days_solicitados')) {
                $this->_view->assign('_error', 'Ingrese los dias solicitados');
                $this->_view->renderizar('add');
                exit;
            }

            if (!$this->getSql('date_init')) {
                $this->_view->assign('_error', 'Ingrese la fecha de inicio');
                $this->_view->renderizar('add');
                exit;
            }
           
            

            /*
            * 1 => pendiente (esta reservada pero no confirmada)
            * 2 => confirmada
            * 3 => efectuada
            * 4 => anulada
            */

          

            $vacacion = new Vacacion;
            $vacacion->tipo = $this->getSql('tipo');
            $vacacion->days_solicitados = $this->getSql('days_solicitados');
            $vacacion->razon = $this->getSql('razon');
     
            $vacacion->date_init = $this->getSql('date_init');           
            $vacacion->funcionario_id = Session::get('funcionario_id');
            $vacacion->status_id = 1;

        

            $vacacion->save();

            Session::set('msg_success','La solicitud se ha registrado correctamente');

            $this->redireccionar('vacaciones/misVacas/');
        }

        $this->_view->renderizar('add');
    }   
    public function historial()
    {
        
        $this->_view->assign('titulo', 'Vacaciones');
        $this->_view->assign('title', 'Vacaciones');
        $this->_view->assign('vacaciones', Vacacion::with('funcionario','status')->where('funcionario_id', Session::get('funcionario_id'))->orderBy('id', 'DESC')->get());

       
        $this->_view->renderizar('historial');       
        
    } 

    public function misVacas()
    {
        $this->verificarMensajes();

        $hoy = getdate();
        $day = ($hoy['mday'] < 10) ? 0 .$hoy['mday'] : $hoy['mday'];
        $month = ($hoy['mon'] < 10) ? 0 .$hoy['mon'] : $hoy['mon'];
        $year = $hoy['year'];
        $hoy = $year . '-' . $month . '-' . $day;

        $this->_view->assign('titulo', 'Mi Perfil');
        $this->_view->assign('title', 'Mi Perfil');
        $this->_view->assign('funcionario', Funcionario::with(['usuario','roles'])->find(Session::get('funcionario_id')));
        
   
        $this->_view->assign('enviar', CTRL);

        // reserva segun rol
        // print_r('<pre>');
        // print_r(Session::get('usuario_roles'));
        // print_r('</pre>');
        // exit;
      

    
        $this->_view->renderizar('misVacas');
    }
    ################################################
    private function verificarVacacion($id)
    {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('vacaciones');
        }

        $vacacion = Vacacion::select('id')->find($this->filtrarInt($id));

        if (!$vacacion) {
            $this->redireccionar('vacaciones');
        }
    }
    


   
}