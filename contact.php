<?php include 'header.php'; ?>

<!-- Page Title
		============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('images/parallax/8.jpg'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

    <div class="container clearfix">
        <h1>ติดต่อเรา</h1>
        <span>ปรึกษาหรือวางแผนการเรียน</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shortcodes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Page Titles</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">

        <div class="container clearfix">
            <h3>แผนที่</h3>
        </div>

        <div style="margin-bottom: 2.5rem;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.7599739941006!2d100.60225319999996!3d13.611466500000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaaf4a8a436726900!2z4LiE4Lij4Li54LiI4LmL4Liy4LiV4Li04Lin4LmA4LiV4Lit4Lij4LmM!5e0!3m2!1sth!2sth!4v1672741405885!5m2!1sth!2sth" width="800" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="container clearfix">

            <div class="row col-mb-50">

                <div class="col-md-8">
                    <h4>ข้อความหาเรา</h4>
                    <div style="padding: 30px; border:1px solid rgba(0,0,0,0.3);border-radius:18px;">
                        <h3>ส่งอีเมลสมัครเรียน</h3>

                        <div class="form-widget">

                            <div class="form-result"></div>

                            <form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-name">ชื่อ <small>*</small></label>
                                        <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-email">อีเมล <small>*</small></label>
                                        <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-phone">เบอร์โทร</label>
                                        <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-md-12 form-group">
                                        <label for="template-contactform-subject">เรื่อง <small>*</small></label>
                                        <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
                                    </div>


                                    <div class="w-100"></div>

                                    <div class="col-12 form-group">
                                        <label for="template-contactform-message">ข้อความ <small>*</small></label>
                                        <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                                    </div>

                                    <div class="col-12 form-group d-none">
                                        <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                    </div>

                                    <div class="col-12 form-group">
                                        <button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">ส่งข้อความ</button>
                                    </div>
                                </div>

                                <input type="hidden" name="prefix" value="template-contactform-">

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <h4>ที่อยู่ติดต่อเรา</h4>
                    <p>ปากซอยบุญศิริ ซอย 11 ต.บางเมือง อ.เมืองสมุทรปราการ จ.สมุทรปราการ 10270</p>
                    <p><strong>Phone:</strong> <a href="tel:0989466151">098-946-6151</a> </br>
                        <strong>Email:</strong> <a href="mailto:aun.arphatsara@gmail.com">aun.arphatsara@gmail.com</a>
                    </p>
                    <div style="display: flex; flex-direction:column">
                        <div style="display: flex;">
                            <div style="width: 40px; text-align: center;">
                                <i class="icon-facebook-square" style="font-size: 30px;"></i>
                            </div>
                            <div style="margin: 7px 0 0 10px;">
                                <p style="margin: 0;">facebook: testttt</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div style="width: 40px; text-align: center;">
                                <i class="icon-line" style="font-size: 30px;"></i>
                            </div>
                            <div style="margin: 7px 0 0 10px;">
                                <p style="margin: 0;">facebook: testttt</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section><!-- #content end -->

<?php include 'footer.php'; ?>