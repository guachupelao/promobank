<div class="content-wrapper">
    <div class="content-header">
        <div class="col-md-6 ftco-animate">
             <div class="sidebar-box ftco-animate">

                <div class="col-md-6 ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <tr >       
                            <th></th>
                            <th style="text-align:center" colspan="3" ><h4>Vacaciones</h4></th>                        
                        </tr>

                        {include file="../partials/_mensajes.tpl"}


                        <table class="table table-hover">
                            <tr>
                                <th>Fecha de contrato:</th>
                                <td>{$funcionario.date_in|date_format:"d/m/Y"}</td>
                            </tr>   
                            <tr>
                                <th>Dias Ganados:</th>
                                <td>{{vacationDays($funcionario->date_in)}}</td>
                            </tr>  
                            <tr>
                                <th>Dias Tomados:</th>
                                <td>{{vacationTaken($funcionario->id)}}</td>
                            </tr>  
                            <tr>
                                <th>Dias Restantes:</th>
                                <td>{{vacationDays($funcionario->date_in)-vacationTaken($funcionario->id)}}</td>  
                            </tr>       
                                                
                            
                            
                        </table>
                        <p>

                            <a href="{$_layoutParams.root}vacaciones/{$funcionario.id}"
                                class="btn btn-outline-success">Solicitar Vacaciones</a>


                        </p>
                    </div>
                </div>
                {* sidebar derecho *}
            
            </div>
        </div>
    </div>
</div>