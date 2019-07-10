
    <div class="breadcomb-area">
        <div class="container">
          <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd nk-light-green">
                            <h2>Apprenant </h2>
                            <p>Cliquer sur (<code> session / Parcours </code> ) pour consulter </p>
                        </div>
                        <div class="bsc-tbl-hvr">
                            <table class="table table-hover">
                                <thead>
                                    <tr calss="active">
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Actions</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($users as $user): ?>
                            <tr>
                                <td><?= $user->id?></td>
                                <td><?= $user->nom?></td>
                                <td><?= $user->prenom?></td>
                                <td> <a class="btn btn-warning notika-btn-warning waves-effect" href="<?php echo site_url('Parcours/getSessionbyIDens/'.$user->id)?>">Sessions </a>  
                                <a class="btn btn-danger notika-btn-danger waves-effect" href="<?php echo site_url('Parcours/getbyIDens/'.$user->id)?>">Parcours </a></td>
                               
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