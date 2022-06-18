<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">

        <div class="col-md-8 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    {$title}              
                </h3>

                {include file="../partials/_mensajes.tpl"}

                {if isset($vacaciones) && count($vacaciones)}
                    <table class="table table-hover">
                        <thead>
                            <tr >                          
                              
                                <th></th>
                                <th></th>                                                              
                                <th></th>                                                              
                                <th></th>                                                              
                                <th></th>                                                              
                                <th></th>                                                              
                                <th></th>                                                              
                                <th></th>                                                              
                                <th></th>                                                              
                            </tr>
                            <tr>
                            
                                <th>Nombre</th>                       
                                <th>Fecha de Solicitud</th>
                                <th>Dias solicitados</th>                       
                                <th>Dias Autorizados</th>                       
                                <th>Tipo de la Solicitud</th>                       
                                <th>Razon</th>                       
                                <th>Fecha de Inicio</th>                       
                                <th>Observaciones</th>                       
                                <th>Estado</th>                       
                            </tr>
                        </thead>
                        <tbody>
                        {foreach from=$vacaciones item=vacacion}
                            <tr> 
                                <td>{$vacacion.funcionario.nombre}</td>
                                <td>{$vacacion.created_at|date_format:"%d-%m-%Y"}</td>
                                <td>{$vacacion.days_solicitados}</td>
                                <td>{$vacacion.days_funcionario}</td>
                                <td>{$vacacion.tipo}</td>
                                <td>{$vacacion.razon}</td>
                                <td>{$vacacion.date_init}</td>
                                <td>{$vacacion.observaciones}</td>                                
                                <td>
                                        <a href="{$_layoutParams.root}vacaciones/view/{$vacacion.id}">
                                            {$vacacion.status.nombre}
                                        </a>
                                </td>
                                                                                                       
                            </tr>
                        {/foreach}
                        </tbody>
                    </table>
            
                {/if}
            </div>
        </div>
    </div>
</section> <!-- .section -->
</div>