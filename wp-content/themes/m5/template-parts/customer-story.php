<?php
$lang = pll_current_language('slug');

$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 6,
    'category_name'  => 'cau-chuyen',
    'lang'           => $lang,
);
$category = get_category_by_slug('cau-chuyen');
$category_link = get_category_link($category->term_id);
$query = new WP_Query($args);

if ($query->have_posts()) : ?>
    <div class="customer-story-slider-container">
        <div class="customer-story-slider-header">
            <div class="customer-story-slider-header-left">
                <div class="customer-story-slider-header-left-title">
                    <?php if ($lang === 'vi') : ?>
                        Những câu chuyện từ khách hàng
                    <?php else : ?>
                        Customer Stories
                    <?php endif; ?>
                </div>
                <div class="customer-story-slider-header-left-subtitle">
                    <?php if ($lang === 'vi') : ?>
                        Đọc những câu chuyện cá nhân của khách hàng để biết những điều cần biết và yên tâm rằng bạn không đơn độc.
                    <?php else : ?>
                        Read personal stories from our customers to understand what to expect and feel reassured that you're not alone.
                    <?php endif; ?>
                </div>
            </div>
            <div class="customer-story-slider-header-right">
                <div class="all-story">
                    <a href="<?php echo esc_url($category_link); ?>">
                        <?php echo ($lang === 'vi') ? 'XEM TẤT CẢ CÁC CÂU CHUYỆN' : 'VIEW ALL STORIES'; ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="customer-story-slider-wrapper">
            <div class="customer-story-slider-viewport">
                <div class="customer-story-slider-track" id="customerStorySliderTrack">
                    <?php while ($query->have_posts()) : $query->the_post();
                        $image = get_field('anh_bai_viet');
                        $image_url = !empty($image['url']) ? esc_url($image['url']) : get_template_directory_uri() . '/assets/images/placeholder.jpg';
                        $image_alt = !empty($image['alt']) ? esc_attr($image['alt']) : get_the_title();
                    ?>
                        <div class="customer-story-slide">
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" />
                            <div class="customer-story-slide-content">
                                <a href="<?php the_permalink(); ?>" class="customer-story-slide-title"><?php the_title(); ?></a>
                                <p><?php echo esc_html(get_the_excerpt()); ?></p>
                                <a class="read-more read-more-desktop" href="<?php the_permalink(); ?>">
                                    <?php echo ($lang === 'vi') ? 'Đọc thêm' : 'Read more'; ?>
                                </a>
                                  <a class="read-more-mobile" href="<?php the_permalink(); ?>">
                                    <?php echo ($lang === 'vi') ? 'Đọc thêm' : 'Read more'; ?>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

            <!-- <div class="customer-story-slider-controls">
                <button class="customer-story-nav-button" id="customerStoryPrevBtn">←</button>
                <div class="customer-story-dots" id="customerStoryDotsContainer"></div>
                <button class="customer-story-nav-button" id="customerStoryNextBtn">→</button>
            </div> -->
            <div class="customer-story-slider-controls">
                <button class="customer-story-nav-button" id="customerStoryPrevBtn">
                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxOCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE3IDdMMSA3TTEgN0w3IDEzTTEgN0w3IDEiIHN0cm9rZT0iIzI4MzU3MyIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9zdmc+Cg==" alt="prev" />
                </button>
                <div class="customer-story-dots" id="customerStoryDotsContainer"></div>
                <button class="customer-story-nav-button" id="customerStoryNextBtn">
                    <img src="data:image/svg+xml;charset=utf-8;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxOCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEgN0wxNyA3TTE3IDdMMTEgMU0xNyA3TDExIDEzIiBzdHJva2U9IiMyODM1NzMiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo=" alt="next" />
                </button>
            </div>
        </div>
        <div class="customer-story-slider-header-right customer-story-slider-header-right-mobile">
            <div class="all-story">
                <a href="<?php echo esc_url($category_link); ?>">
                    <?php echo ($lang === 'vi') ? 'XEM TẤT CẢ CÁC CÂU CHUYỆN' : 'VIEW ALL STORIES'; ?>
                </a>
            </div>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<style>
    .customer-story-slider-container {
        background-color: white;
        padding: 20px 0px;
    }

    .customer-story-slider-header {
        display: flex;
        align-items: end;
        justify-content: space-between;
        max-width: 1335px;
        margin: 0px auto;
        background-color: white;
    }

    .customer-story-slider-header-left-title {
        color: #283573;
        font-family: 'Roboto', sans-serif;
        font-style: normal;
        font-weight: 700;
        text-transform: none;
        font-size: 40px;
        line-height: 48px;
        margin: 28px 0px 15px 0px
    }

    .customer-story-slider-header-left-subtitle {
        color: #283573;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        font-weight: 400;
        letter-spacing: normal;
        line-height: 28px;
    }

    .customer-story-slider-header-right {}

    .all-story {
        font-family: 'Roboto', sans-serif;

        align-items: center;
        background: #283573;
        border-radius: 6px;
        color: #FFFFFF !important;
        cursor: pointer;
        display: flex;
        font-size: 16px;
        justify-content: center;
        align-items: center;
        letter-spacing: .16em;
        max-width: 366px;
        min-height: 54px;
        text-decoration: none;
        text-transform: uppercase;
        width: 100%;
        padding: 13px 32px;
        text-align: center;
    }

    .all-story:hover {
        background: #FFFFFF !important;
        border: 1px solid #283573 !important;
    }

    .all-story:hover a {
        color: #283573 !important;

    }

    .all-story a {
        color: white !important;
    }

    .customer-story-slider-wrapper {
        max-width: 1335px;
        margin: 0 auto;
        padding: 40px 0;
        background: #fff;
        position: relative;
    }

    .customer-story-slider-viewport {
        /* overflow: hidden; */
        width: 100%;
        position: relative;
    }

    .customer-story-slider-track {
        display: flex;
        transition: transform 0.5s ease;
        gap: 20px;
        /* padding: 0 10%; */
        box-sizing: content-box;
        height: 433px;
    }

    .customer-story-slide {
        flex: 0 0 100%;
        background: #f4f4f4;
        border-radius: 12px;
        display: flex;
        /* padding: 1rem; */
        box-sizing: border-box;
        transition: transform 0.3s ease;
        user-select: none;
        cursor: grab;
        box-shadow: 0 0 15px #E0E0E0;
        display: flex !important;
        flex-direction: row;
        justify-content: space-between;
        outline: 1px solid #1A1A1A;
        outline-offset: -1px;
        background-color: white;
    }

    .customer-story-slide:active {
        cursor: grabbing;
    }

    .customer-story-slide img {
        border-radius: 8px 0 0 8px;
        height: 433px;
        -o-object-fit: cover;
        object-fit: cover;
        width: 487px;
        cursor: pointer;
    }

    .customer-story-slide-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: 0 30px;
        background: white;
        border-radius: 8px;
    }

    .customer-story-slide-title {
        color: #283573;
        font-family: 'Roboto', sans-serif;
        font-size: 24px;
        font-weight: 600;
        line-height: 32px;
        cursor: pointer;
    }

    .customer-story-slide-title:hover {
        text-decoration: underline;
    }

    .customer-story-slide-content a {
        padding: 0px;
        margin: 0 0 16px;
    }

    .customer-story-slide-content a:hover {
        background-color: white !important;
        color: #283573 !important;
        /* border: 1px solid #283573 !important; */
    }

    .customer-story-slide-content p {
        color: #283573;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        font-weight: 400;
        line-height: 28px;
        margin: 0;
        padding: 0;
        cursor: default;
        margin-bottom: 16px;
    }

    .customer-story-slide-content a:not(.customer-story-slide-title) {
        align-items: center;
        background-color: transparent;
        border-radius: 6px;
        color: inherit;
        display: flex;
        margin: 0px;
        /* height: 100%; */
        justify-content: center;
        padding: 13px 32px;
        align-items: center;
        background: #283573;
        border-radius: 6px;
        color: #FFFFFF;
        cursor: pointer;
        display: flex;
        font-size: 16px;
        justify-content: center;
        letter-spacing: .16em;
        max-width: 366px;
        min-height: 54px;
        text-decoration: none;
        text-transform: uppercase;

    }

    /* .customer-story-slide-content .read-more {
        align-items: center;
        background-color: transparent;
        border-radius: 6px;
        color: inherit;
        display: flex;
        justify-content: center;
        padding: 13px 32px;
    } */

    .customer-story-slider-controls {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        margin-top: 20px;
    }

    .customer-story-nav-button {
        background: none;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .customer-story-dots {
        display: flex;
        gap: 20px;
    }

    .customer-story-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        /* background-color: #d0aac3; */
        background-color: #283573;
        opacity: .25;
        cursor: pointer;
        border: none;
        transition: background-color 0.3s;
    }

    .customer-story-dot.active {
        /* background-color: #e8519d; */
        background-color: #283573;
        opacity: unset
    }

    @media (max-width: 768px) {
        .customer-story-slide {
            flex: 0 0 100%;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .customer-story-slider-track {
            padding: 0;
        }

        .customer-story-slide img {
            margin: 0 0 1rem 0;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const track = document.getElementById("customerStorySliderTrack");
        const slides = document.querySelectorAll(".customer-story-slide");
        const dotsContainer = document.getElementById("customerStoryDotsContainer");
        const prevBtn = document.getElementById("customerStoryPrevBtn");
        const nextBtn = document.getElementById("customerStoryNextBtn");
        let currentIndex = 0;

        if (!track || slides.length === 0 || !prevBtn || !nextBtn) return;

        // Gán chiều rộng 100% cho mỗi slide (quan trọng nếu đang dùng 80%)
        slides.forEach(slide => {
            slide.style.flex = "0 0 100%";
        });

        // Tạo dots
        slides.forEach((_, index) => {
            const dot = document.createElement("div");
            dot.classList.add("customer-story-dot");
            if (index === 0) dot.classList.add("active");
            dot.addEventListener("click", () => {
                currentIndex = index;
                setSliderByIndex();
            });
            dotsContainer.appendChild(dot);
        });

        const dots = document.querySelectorAll(".customer-story-dot");

        function setSliderByIndex() {
            track.style.transition = "transform 0.5s ease";

            const newPosition = -100 * currentIndex; // Mỗi slide chiếm 100%
            track.style.transform = `translateX(${newPosition}%)`;

            dots.forEach(dot => dot.classList.remove("active"));
            dots[currentIndex].classList.add("active");

            prevTranslate = newPosition;
            currentTranslate = newPosition;
        }

        prevBtn.addEventListener("click", () => {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            setSliderByIndex();
        });

        nextBtn.addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % slides.length;
            setSliderByIndex();
        });

        let startX = 0;
        let isDragging = false;
        let animationID;
        let currentTranslate = 0;
        let prevTranslate = 0;

        track.addEventListener('mousedown', dragStart);
        track.addEventListener('mouseup', dragEnd);
        track.addEventListener('mouseleave', dragEnd);
        track.addEventListener('mousemove', dragMove);

        track.addEventListener('touchstart', dragStart);
        track.addEventListener('touchend', dragEnd);
        track.addEventListener('touchmove', dragMove);

        function dragStart(event) {
            isDragging = true;
            startX = getPositionX(event);
            animationID = requestAnimationFrame(animation);
            track.style.transition = "none";
        }

        function dragMove(event) {
            if (!isDragging) return;
            const currentPosition = getPositionX(event);
            const diff = currentPosition - startX;
            currentTranslate = prevTranslate + diff;
        }

        function dragEnd(event) {
            if (!isDragging) return;
            isDragging = false;
            cancelAnimationFrame(animationID);

            const movedBy = currentTranslate - prevTranslate;

            if (movedBy < -50 && currentIndex < slides.length - 1) {
                currentIndex += 1;
            } else if (movedBy > 50 && currentIndex > 0) {
                currentIndex -= 1;
            }

            setSliderByIndex();
        }

        function getPositionX(event) {
            return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX;
        }

        function animation() {
            setSliderPosition(currentTranslate);
            if (isDragging) requestAnimationFrame(animation);
        }

        function setSliderPosition(position) {
            track.style.transform = `translateX(${position}px)`;
        }

        function setSliderByIndex() {
            track.style.transition = "transform 0.5s ease";
            const newPosition = -currentIndex * track.offsetWidth;
            track.style.transform = `translateX(${newPosition}px)`;
            prevTranslate = newPosition;
            currentTranslate = newPosition;

            // Update dots
            dots.forEach(dot => dot.classList.remove("active"));
            dots[currentIndex].classList.add("active");
        }
    });
</script>