
    <div class="breadcomb-area">
        <div class="container">
          <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Cours </h2>
                            
                        </div>
                        <div class="bsc-tbl-hvr">
                            <table class="table table-hover">
                                <thead>
                                    <tr calss="active">
                                        <th>#</th>
                                        <th>Titre</th>
                                      
                                        
                                    </tr>
                                </thead>
                                <tbody>
                            <?php foreach($cours as $c): ?>
                            <tr>
                                <td><?= $c->id?></td>
                                <td><?= $c->titre?></td>
                                
                                
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

        <!-- /page content -->
       
