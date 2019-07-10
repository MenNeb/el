
    <div class="breadcomb-area">
        <div class="container">
          <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Sessions des Apprenants </h2>
                           
                        </div>
                        <div class="bsc-tbl-hvr">
                            <table class="table table-hover">
                                <thead calss="active" >
                                    <tr calss="active">
                                        <th>#</th>
                                        <th>IP</th>
                                        <th>date</th>
                                       
                                        <th>Nom Apprenant</th>
                                        <th>Prénom Apprenant</th>
                                    </tr>
                                </thead>
                                <tbody>
                               <?php foreach($ss as $session): ?>
                            <tr>
                                <td><?= $session->id?></td>
                                <td><?= $session->ip?></td>
                                <td><?= $session->date?></td>
                               
                                <td><?= $session->nom?></td>

                                <td><?= $session->prenom?></td>
                               
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