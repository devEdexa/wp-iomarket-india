<!-- page condition for edi network-->
<?php if ( is_page(array('470','468'))) { ?>
<?php  
$inn_heading = get_field('inn_heading');
$inn_description = get_field('inn_description');

if(!empty($inn_heading) || !empty($inn_description)) {
 ?>
<section class="iomarket-section solution-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
            <div class="section-title display-5 green-color font-black mb-md-4 mb-3"><?php echo $inn_heading; ?>
        </div>
        <div class="section-discription fs-5 darkgray-color mb-xl-5 mb-4">
            <?php echo $inn_description; ?>
        </div>
            </div>
        </div>
        <?php if(have_rows('add_brief')) : ?>
        <div class="d-flex align-items-stretch flex-wrap owl-carousel solution-slider home-solution-slider">
            <?php $i=1; while(have_rows('add_brief')) : the_row(); 
                $solution_title = get_sub_field('inno_heading');
                $solution_description = get_sub_field('inno_description');
              if(!empty($solution_title) || !empty($solution_description)) {?>
            <div class="item px-lg-3 mt-5 mb-lg-4 mb-3">
                <div class="solution-box position-relative h-100 pt-5 pb-xl-5 pb-4 px-xl-4 px-3">
                    <div class="icon rounded-circle position-absolute solutioninner-boxicon-470-<?php echo $i;?>"></div>
                    <div class="box-title fs-4 mb-xl-4 mb-3 text-uppercase font-semibold text-break"><?php echo $solution_title; ?></div>
                    <p class="fs-6 mb-3"><?php echo $solution_description; ?></p>
                   
                </div>
            </div>
            <?php } ?>
            <?php $i++; endwhile; wp_reset_query();?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php } ?>

<!-- page condition for BESCHAFFUNG-->
<?php } elseif ( is_page(array('1439','1603'))) { ?>
    <?php  
$inn_heading = get_field('inn_heading');
$inn_description = get_field('inn_description');

if(!empty($inn_heading) || !empty($inn_description)) {
 ?>
<section class="iomarket-section solution-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
            <div class="section-title display-5 green-color font-black mb-md-4 mb-3"><?php echo $inn_heading; ?>
        </div>
        <div class="section-discription fs-5 darkgray-color mb-xl-5 mb-4">
            <?php echo $inn_description; ?>
        </div>
            </div>
        </div>
        <?php if(have_rows('add_brief')) : ?>
        <div class="d-flex align-items-stretch flex-wrap owl-carousel solution-slider home-solution-slider">
            <?php $i=1; while(have_rows('add_brief')) : the_row(); 
                $solution_title = get_sub_field('inno_heading');
                $solution_description = get_sub_field('inno_description');
              if(!empty($solution_title) || !empty($solution_description)) {?>
            <div class="item px-lg-3 mt-5 mb-lg-4 mb-3">
                <div class="solution-box position-relative h-100 pt-5 pb-xl-5 pb-4 px-xl-4 px-3">
                    <div class="icon rounded-circle position-absolute solutioninner-boxicon-1439-<?php echo $i;?>"></div>
                    <div class="box-title fs-4 mb-xl-4 mb-3 text-uppercase font-semibold text-break"><?php echo $solution_title; ?></div>
                    <p class="fs-6 mb-3"><?php echo $solution_description; ?></p>
                   
                </div>
            </div>
            <?php } ?>
            <?php $i++; endwhile; wp_reset_query();?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php } ?>

<!-- page condition for ARCHIV-->
<?php } elseif ( is_page(array('1450','1592'))) { ?>
    <?php  
$inn_heading = get_field('inn_heading');
$inn_description = get_field('inn_description');

if(!empty($inn_heading) || !empty($inn_description)) {
 ?>
<section class="iomarket-section solution-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
            <div class="section-title display-5 green-color font-black mb-md-4 mb-3"><?php echo $inn_heading; ?>
        </div>
        <div class="section-discription fs-5 darkgray-color mb-xl-5 mb-4">
            <?php echo $inn_description; ?>
        </div>
            </div>
        </div>
        <?php if(have_rows('add_brief')) : ?>
        <div class="d-flex align-items-stretch flex-wrap owl-carousel solution-slider home-solution-slider">
            <?php $i=1; while(have_rows('add_brief')) : the_row(); 
                $solution_title = get_sub_field('inno_heading');
                $solution_description = get_sub_field('inno_description');
              if(!empty($solution_title) || !empty($solution_description)) {?>
            <div class="item px-lg-3 mt-5 mb-lg-4 mb-3">
                <div class="solution-box position-relative h-100 pt-5 pb-xl-5 pb-4 px-xl-4 px-3">
                    <div class="icon rounded-circle position-absolute solutioninner-boxicon-1450-<?php echo $i;?>"></div>
                    <div class="box-title fs-4 mb-xl-4 mb-3 text-uppercase font-semibold text-break"><?php echo $solution_title; ?></div>
                    <p class="fs-6 mb-3"><?php echo $solution_description; ?></p>
                   
                </div>
            </div>
            <?php } ?>
            <?php $i++; endwhile; wp_reset_query();?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php } ?>

 <!-- page condition for eBILL-->
 <?php } elseif ( is_page(array('1448','1601'))) { ?> 
    <?php  
$inn_heading = get_field('inn_heading');
$inn_description = get_field('inn_description');

if(!empty($inn_heading) || !empty($inn_description)) {
 ?>
<section class="iomarket-section solution-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
            <div class="section-title display-5 green-color font-black mb-md-4 mb-3"><?php echo $inn_heading; ?>
        </div>
        <div class="section-discription fs-5 darkgray-color mb-xl-5 mb-4">
            <?php echo $inn_description; ?>
        </div>
            </div>
        </div>
        <?php if(have_rows('add_brief')) : ?>
        <div class="d-flex align-items-stretch flex-wrap owl-carousel solution-slider home-solution-slider">
            <?php $i=1; while(have_rows('add_brief')) : the_row(); 
                $solution_title = get_sub_field('inno_heading');
                $solution_description = get_sub_field('inno_description');
              if(!empty($solution_title) || !empty($solution_description)) {?>
            <div class="item px-lg-3 mt-5 mb-lg-4 mb-3">
                <div class="solution-box position-relative h-100 pt-5 pb-xl-5 pb-4 px-xl-4 px-3">
                    <div class="icon rounded-circle position-absolute solutioninner-boxicon-1448-<?php echo $i;?>"></div>
                    <div class="box-title fs-4 mb-xl-4 mb-3 text-uppercase font-semibold text-break"><?php echo $solution_title; ?></div>
                    <p class="fs-6 mb-3"><?php echo $solution_description; ?></p>
                   
                </div>
            </div>
            <?php } ?>
            <?php $i++; endwhile; wp_reset_query();?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php } ?>
<!-- page condition for KREDITORENMANAGEMENT-->
<?php } elseif ( is_page(array('1444','1602'))) { ?>
    <?php  
$inn_heading = get_field('inn_heading');
$inn_description = get_field('inn_description');

if(!empty($inn_heading) || !empty($inn_description)) {
 ?>
<section class="iomarket-section solution-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
            <div class="section-title display-5 green-color font-black mb-md-4 mb-3"><?php echo $inn_heading; ?>
        </div>
        <div class="section-discription fs-5 darkgray-color mb-xl-5 mb-4">
            <?php echo $inn_description; ?>
        </div>
            </div>
        </div>
        <?php if(have_rows('add_brief')) : ?>
        <div class="d-flex align-items-stretch flex-wrap owl-carousel solution-slider home-solution-slider">
            <?php $i=1; while(have_rows('add_brief')) : the_row(); 
                $solution_title = get_sub_field('inno_heading');
                $solution_description = get_sub_field('inno_description');
              if(!empty($solution_title) || !empty($solution_description)) {?>
            <div class="item px-lg-3 mt-5 mb-lg-4 mb-3">
                <div class="solution-box position-relative h-100 pt-5 pb-xl-5 pb-4 px-xl-4 px-3">
                    <div class="icon rounded-circle position-absolute solutioninner-boxicon-1444-<?php echo $i;?>"></div>
                    <div class="box-title fs-4 mb-xl-4 mb-3 text-uppercase font-semibold text-break"><?php echo $solution_title; ?></div>
                    <p class="fs-6 mb-3"><?php echo $solution_description; ?></p>
                   
                </div>
            </div>
            <?php } ?>
            <?php $i++; endwhile; wp_reset_query();?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php } ?>
 <!-- page condition for  VERTRAGSMANAGEMENT-->
 <?php } elseif ( is_page(array('1441','1600'))) { ?>
    <?php  
$inn_heading = get_field('inn_heading');
$inn_description = get_field('inn_description');

if(!empty($inn_heading) || !empty($inn_description)) {
 ?>
<section class="iomarket-section solution-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
            <div class="section-title display-5 green-color font-black mb-md-4 mb-3"><?php echo $inn_heading; ?>
        </div>
        <div class="section-discription fs-5 darkgray-color mb-xl-5 mb-4">
            <?php echo $inn_description; ?>
        </div>
            </div>
        </div>
        <?php if(have_rows('add_brief')) : ?>
        <div class="d-flex align-items-stretch flex-wrap owl-carousel solution-slider home-solution-slider">
            <?php $i=1; while(have_rows('add_brief')) : the_row(); 
                $solution_title = get_sub_field('inno_heading');
                $solution_description = get_sub_field('inno_description');
              if(!empty($solution_title) || !empty($solution_description)) {?>
            <div class="item px-lg-3 mt-5 mb-lg-4 mb-3">
                <div class="solution-box position-relative h-100 pt-5 pb-xl-5 pb-4 px-xl-4 px-3">
                    <div class="icon rounded-circle position-absolute solutioninner-boxicon-1441-<?php echo $i;?>"></div>
                    <div class="box-title fs-4 mb-xl-4 mb-3 text-uppercase font-semibold text-break"><?php echo $solution_title; ?></div>
                    <p class="fs-6 mb-3"><?php echo $solution_description; ?></p>
                   
                </div>
            </div>
            <?php } ?>
            <?php $i++; endwhile; wp_reset_query();?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php } ?>
 <!-- page condition for vmi-->
 <?php } elseif ( is_page(array('1446','1604'))) { ?>
    <?php  
$inn_heading = get_field('inn_heading');
$inn_description = get_field('inn_description');

if(!empty($inn_heading) || !empty($inn_description)) {
 ?>
<section class="iomarket-section solution-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
            <div class="section-title display-5 green-color font-black mb-md-4 mb-3"><?php echo $inn_heading; ?>
        </div>
        <div class="section-discription fs-5 darkgray-color mb-xl-5 mb-4">
            <?php echo $inn_description; ?>
        </div>
            </div>
        </div>
        <?php if(have_rows('add_brief')) : ?>
        <div class="d-flex align-items-stretch flex-wrap owl-carousel solution-slider home-solution-slider">
            <?php $i=1; while(have_rows('add_brief')) : the_row(); 
                $solution_title = get_sub_field('inno_heading');
                $solution_description = get_sub_field('inno_description');
              if(!empty($solution_title) || !empty($solution_description)) {?>
            <div class="item px-lg-3 mt-5 mb-lg-4 mb-3">
                <div class="solution-box position-relative h-100 pt-5 pb-xl-5 pb-4 px-xl-4 px-3">
                    <div class="icon rounded-circle position-absolute solutioninner-boxicon-1446-<?php echo $i;?>"></div>
                    <div class="box-title fs-4 mb-xl-4 mb-3 text-uppercase font-semibold text-break"><?php echo $solution_title; ?></div>
                    <p class="fs-6 mb-3"><?php echo $solution_description; ?></p>
                   
                </div>
            </div>
            <?php } ?>
            <?php $i++; endwhile; wp_reset_query();?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php } ?>
<!-- end page condition-->
<?php } ?>