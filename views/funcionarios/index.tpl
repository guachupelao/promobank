<div class="content-wrapper">
    <div class="content-header">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    {$title}
                    
                </h3>

                {include file="../partials/_mensajes.tpl"}

                {if isset($funcionarios) && count($funcionarios)}
                    <table class="table table-hover">
                        <thead>
                            <tr >                          
                                <th></th>
                                <th></th>
                                <th></th>                               
                                <th></th>                               
                            </tr>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Dirección</th>
                                <th>Comuna</th>                           
                                <th></th>                         
                            </tr>
                        </thead>
                        <tbody>
                        {foreach from=$funcionarios item=funcionario}
                            <tr>
                                <td>
                                    <a href="{$_layoutParams.root}funcionarios/view/{$funcionario.id}">{$funcionario.nombre}</a>
                                </td>
                                <td>{$funcionario.email}</td>
                                <td>{$funcionario.direccion}</td>
                                <td>{$funcionario.comuna.nombre}</td> 
                                                                                                                                           
                            </tr>
                        {/foreach}
                        </tbody>
                    </table>
                {else}
                    <p class="text-info">No hay funcionarios registrados</p>
                {/if}
            </div>
        </div>
    </div>
</div>