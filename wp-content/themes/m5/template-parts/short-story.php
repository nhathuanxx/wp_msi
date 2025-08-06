<?php
$short_story = get_field('short_story', pll_current_language('slug'));

if ($short_story): ?>
    <div class="slider-testimonial-container">

        <div class="slider-testimonial-wrapper">
            <div class="slider-testimonial-viewport">
                <div class="slider-testimonial-track" id="testimonialSliderTrack">
                    <?php foreach ($short_story as $row):
                        $image = $row['image'];
                        $description = $row['description'];
                    ?>
                        <div class="testimonial-slide">
                            <?php if ($image): ?>
                                <div class="image-container">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">

                                </div> <?php endif; ?>
                            <?php if ($description): ?>
                                <div class="description-container">
                                    <p><?php echo esc_html($description); ?></p>

                                </div> <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>

            <div class="slider-testimonial-controls">
                <button class="nav-button" id="prevBtn">
                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxOCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE3IDdMMSA3TTEgN0w3IDEzTTEgN0w3IDEiIHN0cm9rZT0iIzI4MzU3MyIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9zdmc+Cg==" alt="prev" />
                </button>
                <div class="testimonial-dots" id="testimonialDotsContainer"></div>
                <button class="nav-button" id="nextBtn">
                    <img src="data:image/svg+xml;charset=utf-8;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxOCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEgN0wxNyA3TTE3IDdMMTEgMU0xNyA3TDExIDEzIiBzdHJva2U9IiMyODM1NzMiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo=" alt="next" />


                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
<style>
    .slider-testimonial-container {
        background: #ffffff;
        padding: 60px 0px;
    }

    .slider-testimonial-wrapper {
        max-width: 1335px;
        margin: 0 auto;
        background: #F9EEF2;
        padding: 80px 40px;
        border-radius: 12px;
        position: relative;
    
    }

    .slider-testimonial-viewport {
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    .slider-testimonial-track {
        display: flex;
        transition: transform 0.5s ease;
    }

    .testimonial-slide {
        flex: 0 0 100%;
        display: flex;
        align-items: center;
        gap: 40px;
        /* padding: 1rem; */
        box-sizing: border-box;
    }

    .testimonial-slide .image-container {
        width: 50%;
        border-radius: 12px;
        border-radius: 8px;
    }

    .testimonial-slide .description-container {
        width: 50%;
    }

    .testimonial-slide .image-container img {
        border-radius: 8px;
        height: 350px;
        max-width: 90%;
        -o-object-fit: cover;
        object-fit: cover;
        width: 100%;

    }

    .testimonial-slide p {
        font-family: 'Roboto', sans-serif;
        font-size: 40px;
        font-weight: 600;
        line-height: 44px;
        color: #283573;
    }

    /* Navigation */
    .slider-testimonial-controls {
        /* bottom: 30px; */
        display: flex;
        align-items: center;
        gap: 20px;
        left: calc(50% + 20px);
        position: absolute;
        z-index: 10;
        transform: none;
        left: calc(50% + 20px);
        bottom: 80px;
    }

    .nav-button {
        background: none;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
        color: #1d2d6b;
        display: flex;
        align-items: center;
        /* content: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxOCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE3IDdMMSA3TTEgN0w3IDEzTTEgN0w3IDEiIHN0cm9rZT0iIzI4MzU3MyIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9zdmc+Cg==");
    opacity: 1; */
    }

    .testimonial-dots {
        display: flex;
        gap: 20px;
    }

    .testimonial-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: #d0aac3;
        cursor: pointer;
        border: none;
        transition: background-color 0.3s;
    }

    .testimonial-dot.active {
        background-color: #bf006a;
    }
</style>
<script>
    const track = document.getElementById("testimonialSliderTrack");
    const slides = document.querySelectorAll(".testimonial-slide");
    const dotsContainer = document.getElementById("testimonialDotsContainer");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    let currentIndex = 0;

    // Generate dots dynamically
    slides.forEach((_, index) => {
        const dot = document.createElement("div");
        dot.classList.add("testimonial-dot");
        if (index === 0) dot.classList.add("active");
        dot.addEventListener("click", () => {
            currentIndex = index;
            updateSlider();
        });
        dotsContainer.appendChild(dot);
    });

    const dots = document.querySelectorAll(".testimonial-dot");

    function updateSlider() {
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
        dots.forEach(dot => dot.classList.remove("active"));
        dots[currentIndex].classList.add("active");
    }

    prevBtn.addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateSlider();
    });

    nextBtn.addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlider();
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
</script>