<footer id="footer" class="dark" style="background: url('images/footer-bg.jpg') repeat fixed; background-size: 100% 100%;">

    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_full">

                <div class="widget clearfix">

                <div class="center">
                                <?php
                                require_once "koneksi.php";
                                $query_ft1 = mysqli_query($con, "SELECT * FROM `data_kendaraan`");
                                $query_ft2 = mysqli_query($con, "SELECT * FROM `rule`");
                                if($data_ft1 = mysqli_num_rows($query_ft1)){
                                    if($data_ft2= mysqli_num_rows($query_ft2)){
                                    }
                                }
                                ?>
                                
                                <div class="counter" style="color: #35BBAA;"><span data-from="4" data-to="<?php echo $data_ft1; ?>" data-refresh-interval="80" data-speed="1000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Total Data Kendaraan</h5>
                            </div>
                            <div class="line" style="margin: 30px 0;"></div>
                            <div class="center">
                                <div class="counter" style="color: #2CAACA;"><span data-from="4" data-to="<?php echo $data_ft2; ?>" data-refresh-interval="50" data-speed="1500" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Berdasarkan Aturan Rule</h5>
                            </div>
                    <div class="col_half">
                        <div class="widget clearfix">
                            <div class="hidden-xs hidden-sm"><div class="clear" style="padding-top: 10px;"></div></div>

                            <div class="center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .footer-widgets-wrap end -->

    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="center">
                Copyrights &copy; 2020 All Rights Reserved by KELOMPOK 1 - FUZZY
            </div>
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer>