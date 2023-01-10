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