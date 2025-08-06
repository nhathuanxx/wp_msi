<div class="slider-testimonial-wrapper">
    <div class="slider-testimonial-viewport">
        <div class="slider-testimonial-track" id="testimonialSliderTrack">
            <div class="testimonial-slide">
                <img src="https://via.placeholder.com/300x200?text=Slide+1" alt="">
                <p>“Dịch vụ chu đáo, chuyên nghiệp và rất thân thiện.”</p>
            </div>
            <div class="testimonial-slide">
                <img src="https://via.placeholder.com/300x200?text=Slide+2" alt="">
                <p>“Tôi cảm thấy được hỗ trợ đầy đủ ở mọi giai đoạn.”</p>
            </div>
            <div class="testimonial-slide">
                <img src="https://via.placeholder.com/300x200?text=Slide+3" alt="">
                <p>“Không gian sạch sẽ và nhân viên cực kỳ thân thiện.”</p>
            </div>
        </div>
    </div>

    <div class="slider-testimonial-controls">
        <button class="nav-button" id="prevBtn">←</button>
        <div class="testimonial-dots" id="testimonialDotsContainer"></div>
        <button class="nav-button" id="nextBtn">→</button>
    </div>
</div>
<style>

    .slider-testimonial-wrapper {
        max-width: 960px;
        margin: 0 auto;
        background: #fbeef3;
        padding: 2rem;
        border-radius: 12px;
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
        gap: 2rem;
        padding: 1rem;
        box-sizing: border-box;
    }

    .testimonial-slide img {
        width: 300px;
        border-radius: 12px;
    }

    .testimonial-slide p {
        font-size: 1.5rem;
        font-weight: bold;
        color: #1d2d6b;
    }

    /* Navigation */
    .slider-testimonial-controls {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        margin-top: 20px;
    }

    .nav-button {
        background: none;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
        color: #1d2d6b;
    }

    .testimonial-dots {
        display: flex;
        gap: 10px;
    }

    .testimonial-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #d0aac3;
        cursor: pointer;
        border: none;
        transition: background-color 0.3s;
    }

    .testimonial-dot.active {
        background-color: #e8519d;
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
        const dot = document.createElement("button");
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
</script>