<div class="content-wrapper">
    <div class="content-header">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">

                <div class="col-md-5 ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <h3>
                            {$title}
                        </h3>

                        {include file="../partials/_mensajes.tpl"}


                        <table class="table table-hover">
                            <tr>
                                <th>RUN:</th>
                                <td>{$funcionario.rut}</td>
                            </tr>
                            <tr>
                                <th>Nombre:</th>
                                <td>{$funcionario.nombre}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>{$funcionario.email}</td>
                            </tr>
                            <tr>
                                <th>Dirección:</th>
                                <td>{$funcionario.direccion}</td>
                            </tr>
                            <tr>
                                <th>Comuna:</th>
                                <td>{$funcionario.comuna.nombre}</td>
                            </tr>
                            <tr>
                                <th>Región:</th>
                                <td>{$funcionario.comuna.region.nombre}</td>
                            </tr>
                            <tr>
                                <th>Cargos:</th>
                                <td>
                                    <ul>
                                        {foreach from=$roles item=$rol}
                                            <li>{$rol.rol.nombre}</li>
                                        {/foreach}
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>Teléfonos:</th>
                                <td>
                                    <ul>
                                        {foreach from=$telefonos item=$telefono}
                                            <li>{$telefono.numero}</li>
                                        {/foreach}
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                            <th>Fecha de contrato:</th>
                                <td>{$funcionario.date_in|date_format:"d/m/Y"}</td>
                            </tr>                        
                            <tr>
                                <th>Creado:</th>
                                <td>{$funcionario.created_at|date_format:"%d-%m-%Y %H:%M:%S"}</td>
                            </tr>
                            <tr>
                                <th>Modificado:</th>
                                <td>{$funcionario.updated_at|date_format:"%d-%m-%Y %H:%M:%S"}</td>
                            </tr>
                            <tr>
                                <th>Activo:</th>
                                {if isset($funcionario.usuario)}
                                    <td>
                                        {if $funcionario.usuario.activo == 1}
                                            Si
                                        {else}
                                            No
                                        {/if}
                                    </td>
                                {else}
                                    <td>
                                        No tiene una cuenta asociada
                                    </td>
                                {/if}
                            </tr>
                        </table>
                        <p>
                            <a href="{$_layoutParams.root}vacaciones/misVacas/{$funcionario.id}"
                                class="btn btn-outline-success">Vacaciones</a>
                        </p>

                        <p>

                            <a href="{$_layoutParams.root}usuarios/editPassword/{$funcionario.id}"
                                class="btn btn-outline-success">Cambiar Password</a>


                        </p>
                    </div>
                </div>
                {* sidebar derecho *}
        
            </div>
        </div>
    </div>
</div>