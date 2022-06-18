<div class="content-wrapper">

<div class="container-fluid">
        <div class="col-md-8 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    {$title}              
                </h3>

                {include file="../partials/_mensajes.tpl"}

                
                    <table class="table table-hover">
                        <tr>                       
                            <th>Nombre</th>  
                            <td>{$vacacion.funcionario.nombre}</td>
                        </tr>
                            <th>Fecha de Solicitud</th>
                            <td>{$vacacion.created_at|date_format:"%d-%m-%Y"}</td>
                        </tr>
                        <tr>
                            <th>Dias solicitados</th>
                            <td>{$vacacion.days_solicitados}</td>
                        </tr>
                        <tr>                      
                            <th>Tipo de la Solicitud</th> 
                            <td>{$vacacion.tipo}</td>
                        </tr>    
                        <tr>                      
                            <th>Razon</th>     
                            <td>{$vacacion.razon}</td> 
                        </tr>
                        <tr>                 
                            <th>Fecha de Inicio</th>  
                            <td>{$vacacion.date_init}</td>
                        </tr>
                        <tr>                     
                            <th>Observaciones</th> 
                            <td>{$vacacion.observaciones}</td>
                        </tr>
                        <tr>                      
                            <th>Estado</th>  
                            <td>{$vacacion.status.nombre}</td>                                         
                        </tr>                
                    </table>
                    <p>
                        {if Helper::getRolAdminSuper()}
                            <a href="{$_layoutParams.root}vacaciones/edit/{$vacacion.id}"
                                class="btn btn-outline-success">Cambiar Estado</a>
                        {/if}
                    </p>  
                              
               
            </div>
        </div>
        <tr> 
                        <a href="{$_layoutParams.root}vacaciones/" class="btn btn-outline-primary btn-sm">Volver</a>
                    </tr> 
    </div>
</div>