<!-- Fly Start -->
   
<form action="#">

    <div class="form-group">
        <div class="row">
            <div class="col-lg-6 col-md-6 funkyradio">
                <div class="funkyradio-primary">
                    <input type="radio" name="radio" id="radio2" checked/>
                    <label for="radio2" style="color:gray;">Gidiş-Dönüş</label>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 funkyradio">
                <div class="funkyradio-primary">
                    <input type="radio" name="radio" id="radio3"/>
                    <label for="radio3">Tek Yön</label>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <label for="">Nereden</label>
                <input type="text" class="form-control" id="from_where" name="from_where">
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="">Nereye</label>
                <input type="text" class="form-control" id="where" name="where">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">

            <div class="col-lg-6 col-md-6">
                <label for="">Giriş Tarihi</label>
                <div class='input-group' >
                    <input type="text"  id="inputDatetator3" name="check_in" class="form-control">
                  <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                 </div>
            </div>
        
            <div class="col-lg-6 col-md-6">
                <label for="">Çıkış Tarihi</label>
                <div class='input-group' >
                    <input type="text"  id="inputDatetator4" name="check_out" class="form-control">
                  <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                 </div>
            </div>

        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <label for="">Yetişkin</label>
                    <select class="form-control">
                        <?php

                            for($i = 1 ; $i <= 6 ; $i++){
                                echo "<option value=$i>$i</option>";
                            }

                        ?>
                    </select>
            </div>
            <div class="col-lg-4 col-md-4">
                <label for="">Çocuk</label>
                    <select class="form-control">
                        <?php

                            for($i = 1 ; $i <= 5 ; $i++){
                                echo "<option value=$i>$i</option>";
                            }

                        ?>
                    </select>
            </div>
            <div class="col-lg-4 col-md-4">
                <label for="">Bebek</label>
                    <select class="form-control">
                        <?php

                            for($i = 1 ; $i <= 4 ; $i++){
                                echo "<option value=$i>$i</option>";
                            }

                        ?>
                    </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button type="submit" id="submit" class="btn btn-primary form-control">Ara</button>
            </div>
        </div>
    </div>
   
</form>

<!-- Fly End -->