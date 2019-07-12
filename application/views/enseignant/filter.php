
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-8 col-sm-7 col-xs-12">
                  <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="cmp-tb-hd">
                            <h2>Edition de requetes de base de données </h2>
                            
                        </div>
                         <?php echo form_open('parcours/search');?> 
                    <form  id="demo1-upload">

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Nom</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="nom" class="form-control" data-mask="999-99-999-9999-9" placeholder="ISBN">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Prenom</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="prenom"  class="form-control" data-mask="999.999.999.9999" placeholder="IPV4">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Action</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-tax"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="action" class="form-control" data-mask="99-9999999" placeholder="Tax ID">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Ressource</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="ressource"  class="form-control" data-mask="(999) 999-9999" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Date</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-calendar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="Date" name="date" class="form-control" data-mask="99/99/9999" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                      <p>Cliquez ci-dessous pour commencez la recherche</p>                            
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <button type="submit" class="btn btn-primary notika-btn-Primary waves-effect">Chercher</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
                </div>
                
              
        </div>
            </div>
            
    </div>
    <?if(isset($parcours) >0){?>
    <div class="breadcomb-area">
        <div class="container">
          <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Parcours des Apprenants </h2>
                           
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
  </div><?}?>