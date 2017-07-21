<?php
require_once __DIR__."/app/autoload.php";

use ictslipakorn\Database2;

$conn = new Database2();
//Day 1 Zone A
$seat_a_day2_1 = $conn->day2_zone_a_seat_a();
$seat_b_day2_1 = $conn->day2_zone_a_seat_b();
$seat_c_day2_1 = $conn->day2_zone_a_seat_c();
$seat_d_day2_1 = $conn->day2_zone_a_seat_d();
$seat_e_day2_1 = $conn->day2_zone_a_seat_e();
$seat_f_day2_1 = $conn->day2_zone_a_seat_f();
$seat_g_day2_1 = $conn->day2_zone_a_seat_g();
$seat_h_day2_1 = $conn->day2_zone_a_seat_h();
$seat_i_day2_1 = $conn->day2_zone_a_seat_i();
//Day 1 Zone B
$seat_a_day2_2 = $conn->day2_zone_b_seat_a();
$seat_b_day2_2 = $conn->day2_zone_b_seat_b();
$seat_c_day2_2 = $conn->day2_zone_b_seat_c();
$seat_d_day2_2 = $conn->day2_zone_b_seat_d();
$seat_e_day2_2 = $conn->day2_zone_b_seat_e();
$seat_f_day2_2 = $conn->day2_zone_b_seat_f();
$seat_g_day2_2_l = $conn->day2_zone_b_seat_g_l();
$seat_g_day2_2_r = $conn->day2_zone_b_seat_g_r();
$seat_h_day2_2_l = $conn->day2_zone_b_seat_h_l();
$seat_h_day2_2_r = $conn->day2_zone_b_seat_h_r();
//Day 1 Zone A
$seat_a_day2_3 = $conn->day2_zone_c_seat_a();
$seat_b_day2_3 = $conn->day2_zone_c_seat_b();
$seat_c_day2_3 = $conn->day2_zone_c_seat_c();
$seat_d_day2_3 = $conn->day2_zone_c_seat_d();
$seat_e_day2_3 = $conn->day2_zone_c_seat_e();
$seat_f_day2_3 = $conn->day2_zone_c_seat_f();
$seat_g_day2_3 = $conn->day2_zone_c_seat_g();
$seat_h_day2_3 = $conn->day2_zone_c_seat_h();
$seat_i_day2_3 = $conn->day2_zone_c_seat_i();

 ?>
 <section id="ticket_3">
      <article class="col-xs-12 wrap_stage">
        <p class="stage">STAGE 3</p>
      </article>
      <section class="row">
        <form action="#" method="post">
          <article class="col-xs-3 wrap_sec_a">
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_a_day2_1 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_a"];
                    $seat_num = $value["seat_number_day2_zone_a"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_a_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_a" for="in_check_a_a_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row a a -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_b_day2_1 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_a"];
                    $seat_num = $value["seat_number_day2_zone_a"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_b" for="in_check_a_b_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row a b -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_c_day2_1 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_a"];
                    $seat_num = $value["seat_number_day2_zone_a"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_c_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_c" for="in_check_a_c_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row a c -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_d_day2_1 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_a"];
                    $seat_num = $value["seat_number_day2_zone_a"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_d_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_d" for="in_check_a_d_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row a d -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_e_day2_1 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_a"];
                    $seat_num = $value["seat_number_day2_zone_a"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_e_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_e" for="in_check_a_e_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row a e -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_d_day2_1 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_a"];
                    $seat_num = $value["seat_number_day2_zone_a"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_f_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_f" for="in_check_a_f_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row a f -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_g_day2_1 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_a"];
                    $seat_num = $value["seat_number_day2_zone_a"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_g_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_g" for="in_check_a_g_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row a g -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_h_day2_1 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_a"];
                    $seat_num = $value["seat_number_day2_zone_a"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_h_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_h" for="in_check_a_h_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row a h -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_i_day2_1 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_a"];
                    $seat_num = $value["seat_number_day2_zone_a"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_i_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_i" for="in_check_a_i_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row a i -->
          </article>
          <article class="col-xs-6 wrap_sec_b">
            <article class="col-xs-12">
              <article class="wrap_in_sec_b">
                  <?php
                    foreach ($seat_a_day2_2 as $key => $value) {
                      $seat_row = $value["seat_day2_zone_b"];
                      $seat_num = $value["seat_number_day2_zone_b"];
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_a_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_a" for="in_check_b_a_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                  <?php
                    }
                   ?>
              </article>
            </article> <!-- row b a -->
            <article class="col-xs-12">
              <article class="wrap_in_sec_b">
                  <?php
                    foreach ($seat_b_day2_2 as $key => $value) {
                      $seat_row = $value["seat_day2_zone_b"];
                      $seat_num = $value["seat_number_day2_zone_b"];
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_b_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_b" for="in_check_b_b_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                  <?php
                    }
                   ?>
              </article>
            </article> <!-- row b b -->
            <article class="col-xs-12">
              <article class="wrap_in_sec_b">
                  <?php
                    foreach ($seat_c_day2_2 as $key => $value) {
                      $seat_row = $value["seat_day2_zone_b"];
                      $seat_num = $value["seat_number_day2_zone_b"];
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_c_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_c" for="in_check_b_c_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                  <?php
                    }
                   ?>
              </article>
            </article> <!-- row b c -->
            <article class="col-xs-12">
              <article class="wrap_in_sec_b">
                  <?php
                    foreach ($seat_d_day2_2 as $key => $value) {
                      $seat_row = $value["seat_day2_zone_b"];
                      $seat_num = $value["seat_number_day2_zone_b"];
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_d_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_d" for="in_check_b_d_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                  <?php
                    }
                   ?>
              </article>
            </article> <!-- row b d -->
            <article class="col-xs-12">
              <article class="wrap_in_sec_b">
                  <?php
                    foreach ($seat_e_day2_2 as $key => $value) {
                      $seat_row = $value["seat_day2_zone_b"];
                      $seat_num = $value["seat_number_day2_zone_b"];
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_e_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_e" for="in_check_b_e_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                  <?php
                    }
                   ?>
              </article>
            </article> <!-- row b e -->
            <article class="col-xs-12">
              <article class="wrap_in_sec_b">
                  <?php
                    foreach ($seat_f_day2_2 as $key => $value) {
                      $seat_row = $value["seat_day2_zone_b"];
                      $seat_num = $value["seat_number_day2_zone_b"];
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_f_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_f" for="in_check_b_f_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                  <?php
                    }
                   ?>
              </article>
            </article> <!-- row b f -->
            <article class="col-xs-12">
              <article class="col-xs-4">
                <article class="wrap_in_sec_b">
                    <?php
                      foreach ($seat_g_day2_2_l as $key => $value) {
                        $seat_row = $value["seat_day2_zone_b"];
                        $seat_num = $value["seat_number_day2_zone_b"];
                        ?>
                        <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_g_l_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_g" for="in_check_b_g_l_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                      }
                     ?>
                </article>
              </article> <!-- row b g_l -->
              <article class="col-xs-4">
                <p class="p_in_sec_b">Control</p>
              </article> <!-- control room -->
              <article class="col-xs-4">
                <article class="wrap_in_sec_b">
                    <?php
                      foreach ($seat_g_day2_2_r as $key => $value) {
                        $seat_row = $value["seat_day2_zone_b"];
                        $seat_num = $value["seat_number_day2_zone_b"];
                        ?>
                        <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_g_r_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_g" for="in_check_b_g_r_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                      }
                     ?>
                </article>
              </article> <!-- row b g_r -->
            </article><!-- wrap row b g -->
            <article class="col-xs-12">
              <article class="col-xs-4">
                <article class="wrap_in_sec_b">
                    <?php
                      foreach ($seat_h_day2_2_l as $key => $value) {
                        $seat_row = $value["seat_day2_zone_b"];
                        $seat_num = $value["seat_number_day2_zone_b"];
                        ?>
                        <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_h_l_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_h" for="in_check_b_h_l_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                      }
                     ?>
                </article>
              </article> <!-- row b h_l -->
              <article class="col-xs-4">
                <p class="p_in_sec_b">Room</p>
              </article> <!-- control room -->
              <article class="col-xs-4">
                <article class="wrap_in_sec_b">
                    <?php
                      foreach ($seat_h_day2_2_r as $key => $value) {
                        $seat_row = $value["seat_day2_zone_b"];
                        $seat_num = $value["seat_number_day2_zone_b"];
                        ?>
                        <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_h_r_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_h" for="in_check_b_h_r_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                      }
                     ?>
                </article>
              </article> <!-- row b h_r -->
            </article> <!-- wrap row b h -->

          </article> <!-- wrap_sec_b -->
          <article class="col-xs-3 wrap_sec_c">
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_a_day2_3 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_c"];
                    $seat_num = $value["seat_number_day2_zone_c"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_a_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_a" for="in_check_c_a_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row c a -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_b_day2_3 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_c"];
                    $seat_num = $value["seat_number_day2_zone_c"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_b_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_b" for="in_check_c_b_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row c b -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_c_day2_3 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_c"];
                    $seat_num = $value["seat_number_day2_zone_c"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_c_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_c" for="in_check_c_c_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row c c -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_d_day2_3 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_c"];
                    $seat_num = $value["seat_number_day2_zone_c"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_d_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_d" for="in_check_c_d_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row c d -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_e_day2_3 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_c"];
                    $seat_num = $value["seat_number_day2_zone_c"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_e_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_e" for="in_check_c_e_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row c e -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_d_day2_3 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_c"];
                    $seat_num = $value["seat_number_day2_zone_c"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_f_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_f" for="in_check_c_f_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row a f -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_g_day2_3 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_c"];
                    $seat_num = $value["seat_number_day2_zone_c"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_g_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_g" for="in_check_c_g_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row c g -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_h_day2_3 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_c"];
                    $seat_num = $value["seat_number_day2_zone_c"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_h_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_h" for="in_check_c_h_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row c h -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_i_day2_3 as $key => $value) {
                    $seat_row = $value["seat_day2_zone_c"];
                    $seat_num = $value["seat_number_day2_zone_c"];
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_i_za2_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_i" for="in_check_c_i_za2_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                 ?>
              </article>
            </article> <!-- row c i -->
          </article>
        </form>
      </section><!-- row -->
      </section>
