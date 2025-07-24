<div class="book-exam position-rel">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 display-flex align-items-end only-desktop">
                <div class="book-exam__content__img text-center">
                    <figure class="margin-0">
                        <?php if (get_field('book_doctor_image', pll_current_language('slug'))) : ?>
                            <img src="<?php echo get_field('book_doctor_image', pll_current_language('slug')); ?>" alt="Đặt Lịch Khám">
                        <?php endif; ?>
                    </figure>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="book-exam__form">
                    <?php if (get_field('book_title', pll_current_language('slug'))) : ?>
                        <p class="book-exam__title font-size-30 font-weight-bold primary-color"><?php echo get_field('book_title', pll_current_language('slug')); ?></p>
                    <?php endif; ?>
                    <div class="book-exam__form__detail">
                        <div class="form-book-exam">
                            <?php if (get_field('booking_form_setting', pll_current_language('slug'))) : ?>
                                <?php echo do_shortcode(get_field('booking_form_setting', pll_current_language('slug'))); ?>
                            <?php endif; ?>

                            <!-- <form action="#" method="POST">
                                <div class="form-group">
                                    <input type="text" name="full_name" class="form-control" placeholder="Họ và tên (*)">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Số điện thoại (*)">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <select name="service" class="form-control" placeholder="Chọn dịch vụ (*)">
                                        <option value="">Chọn dịch vụ (*)</option>
                                        <option value="1">Khám sức khỏe phụ nữ định kỳ</option>
                                        <option value="2">Các biện pháp tránh thai dài hạn</option>
                                        <option value="3">Sàng lọc ung thư cổ tử cung</option>
                                    </select>
                                </div>
                                <div class="form-group form-group__child3 display-flex-center justify-content-between">
                                    <div class="form-item">
                                        <input type="text" name="day" class="form-control form-day-book" placeholder="Ngày">
                                    </div>
                                    <div class="form-item">
                                        <input type="text" name="hour" class="form-control form-time-book" placeholder="Giờ">
                                    </div>
                                    <div class="form-item">
                                        <select name="doctor" class="form-control">
                                            <option value="">Bác sĩ</option>
                                            <option value="1">Bác sĩ 1</option>
                                            <option value="2">Bác sĩ 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="note" placeholder="Nội dung ghi chú" class="form-control"></textarea>
                                </div>
                                <div class="form-action">
                                    <button type="submit" class="btn btn-h60 btn-secondary btn-secondary--gradient text-uppercase font-size-18 font-weight-bold">Gửi</button>
                                </div>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="book-exam__banner">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-8 col-md-7 col-lg-6">
                <div class="book-exam__banner__img">
                    <figure class="margin-0">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/fill-1.png'); ?>" alt="Đặt Lịch Khám">
                    </figure>
                </div>
            </div>
            <div class="col-3 col-md-4 col-lg-5"></div>
        </div>
    </div>
</div>