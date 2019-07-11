
    <div class="breadcomb-area">
        <div class="container">
          <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Action  </h2>
                            <p>Cliquer sur (<code> Parcours </code> ) pour consulter </p>
                        </div>
                        <div class="bsc-tbl-hvr">
                            <table class="table table-hover" id="action-table">
                                <thead>
                                    <tr calss="active">
                                        <th>#</th>
                                        <th>Intitulé </th>
                                       
                                        <th>Actions</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($actions as $action): ?>
                            <tr>
                                <td><?= $action->id?></td>
                                <td><?= $action->nomAction?></td>
                                <td>
                                <a class="btn btn-danger notika-btn-danger waves-effect" href="<?php echo site_url('Parcours/getbyIDaction/'.$action->id)?>">Parcours </a></td>
                               
                            </tr>
                            <?php endforeach ;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
      </div>
  </div>