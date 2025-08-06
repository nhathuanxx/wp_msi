<?php
$lang = pll_current_language('slug');

$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 6,
    'category_name'  => 'cau-chuyen',
    'lang'           => $lang,
);

$query = new WP_Query($args);

if ($query->have_posts()) : ?>
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
                            <a href="<?php the_permalink(); ?>">Đọc thêm</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

        <div class="customer-story-slider-controls">
            <button class="customer-story-nav-button" id="customerStoryPrevBtn">←</button>
            <div class="customer-story-dots" id="customerStoryDotsContainer"></div>
            <button class="customer-story-nav-button" id="customerStoryNextBtn">→</button>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<style>
    .customer-story-slider-wrapper {
        max-width: 960px;
        margin: 0 auto;
        padding: 2rem 0;
        background: #fff;
        position: relative;
    }

    .customer-story-slider-viewport {
        overflow: hidden;
        width: 100%;
        position: relative;
    }

    .customer-story-slider-track {
        display: flex;
        transition: transform 0.5s ease;
        gap: 20px;
        /* padding: 0 10%; */
        box-sizing: content-box;
    }

    .customer-story-slide {
        flex: 0 0 80%;
        background: #f4f4f4;
        border-radius: 12px;
        display: flex;
        padding: 1rem;
        box-sizing: border-box;
        transition: transform 0.3s ease;
        user-select: none;
        cursor: grab;
    }

    .customer-story-slide:active {
        cursor: grabbing;
    }

    .customer-story-slide img {
        width: 200px;
        border-radius: 8px;
        margin-right: 1rem;
        cursor: pointer;
    }

    .customer-story-slide-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .customer-story-slide-title {
        font-size: 1.2rem;
        color: #1d2d6b;
        font-weight: bold;
        text-decoration: none;
        cursor: pointer;
    }

    .customer-story-slide-title:hover {
        text-decoration: underline;
    }

    .customer-story-slide-content p {
        font-size: 0.95rem;
        color: #444;
        cursor: default;
    }

    .customer-story-slide-content a:not(.customer-story-slide-title) {
        display: inline-block;
        margin-top: 0.5rem;
        padding: 0.5rem 1rem;
        background: #1d2d6b;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        font-size: 0.85rem;
        cursor: pointer;
    }

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
        font-size: 1.5rem;
        cursor: pointer;
        color: #1d2d6b;
    }

    .customer-story-dots {
        display: flex;
        gap: 10px;
    }

    .customer-story-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #d0aac3;
        cursor: pointer;
        border: none;
        transition: background-color 0.3s;
    }

    .customer-story-dot.active {
        background-color: #e8519d;
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
            const dot = document.createElement("button");
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

        // Drag/swipe logic
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

        // Khởi tạo
        setSliderByIndex();
    });
</script>