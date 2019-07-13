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
                                        <th>IP Session</th>
                                        <th>date Session</th>
                                       
                                        <th>Nom Apprenant</th>
                                        <th>Prénom Apprenant</th>
                                        <th>Action </th>
                                        <th>Heure</th>
                                        <th>Ressource</th>
                                    </tr>
                                </thead>
                                <tbody>
                               <?php foreach($parcours as $parcour): ?>
                            <tr>
                                <td><?= $parcour->id?></td>
                                <td><?= $parcour->ip?></td>
                                <td><?= $parcour->date?></td>
                                <td><?= $parcour->nom?></td>

                                <td><?= $parcour->prenom?></td>
                               	<td><?= $parcour->nomAction?></td>
                               	<td><?= $parcour->heure?></td>
                               	<td><?= $parcour->ressource?></td>
                               
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