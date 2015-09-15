<!-- Tours Start -->

<form action="#">

    <div class="form-group">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <label for="">Tur veya Şehir girin</label>
                <input type="text" class="form-control" id="tour_and_city" name="tour_and_city">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <label for="">Dönem seçiniz</label>
               <select name="" id="" class="form-control">
               <?php
                    for($i = 1 ; $i <= 6 ; $i++){
                        echo "<option value=$i>$i</option>";
                    }

                ?>
               </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <label for="">Yetişkin</label>
                    <select class="form-control">
                        <?php

                            for($i = 1 ; $i <= 6 ; $i++){
                                echo "<option value=$i>$i</option>";
                            }

                        ?>
                    </select>
            </div>

            <div class="col-lg-6 col-md-6">
                <label for="">Çocuk</label>
                    <select class="form-control">
                        <?php

                            for($i = 1 ; $i <= 5 ; $i++){
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

<!-- Tours End -->