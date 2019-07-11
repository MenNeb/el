  
  <!-- Start Status area -->
   <!--  <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">50,000</span></h2>
                            <p>Total Cours</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">90,000</span>k</h2>
                            <p>Totale Apprenant</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2>$<span class="counter">40,000</span></h2>
                            <p>Total Sessions</p>
                        </div>
                        <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">1,000</span></h2>
                            <p>Total parcours</p>
                        </div>
                        <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Status area-->
    <!-- Start Sale Statistic area-->
<div class="nk-content">
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="btn btn-success notika-btn-success  btn-lg">
                            <h2><span class=" "><?=$apprenant[0]->nbrapp ;?> </span></h2>
                            <p>Totale Apprennant</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="btn btn-warning notika-btn-warning  btn-lg">
                            <h2><span class="counter"><?=$session[0]->nbrsession ;?></span></h2>
                            <p>Totale Sessions</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="btn btn-primary notika-btn-primary  btn-lg">
                            <h2>$<span class="counter"><?=$action[0]->nbraction ;?></span></h2>
                            <p>Totale Action </p>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="btn btn-danger notika-btn-danger  btn-lg">
                            <h2><span class="counter"><?=$parcourscount[0]->nbrpar ;?></span></h2>
                            <p>Total Parcours</p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Sale Statistic area-->
    <!-- Start Email Statistic area-->
   <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                  <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="cmp-tb-hd">
                            <h2>Edition de requetes de base de données </h2>
                            
                        </div>
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
                                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" placeholder="ISBN">
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
                                        <input type="text" class="form-control" data-mask="999.999.999.9999" placeholder="IPV4">
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
                                        <input type="text" class="form-control" data-mask="99-9999999" placeholder="Tax ID">
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
                                        <input type="text" class="form-control" data-mask="(999) 999-9999" placeholder="Phone">
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
                                        <input type="text" class="form-control" data-mask="99/99/9999" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                      <p>Cliquez ci-dessous pour commencez la recherche</p>                            
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <button class="btn btn-primary notika-btn-Primary waves-effect">Chercher</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
                
                <div class="normal-table-list">
                        
                        <div class="bsc-tbl">
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
                                <?if(isset($parcours) >0){?>
                               <?php 
                               foreach($parcours as $parcour): ?>
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
                            <?}?>
                                </tbody>
                            </table>                        </div>
                    </div>
        </div>
            </div>
            
    </div>
    <!-- End Realtime sts area-->
    <div class="realtime-statistic-area">
    </div>

</div>  