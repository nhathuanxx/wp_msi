<div class="testimonial-slider-container">
    <div class="testimonial-slider">
        <div class="testimonial-slide">Slide 1</div>
        <div class="testimonial-slide">Slide 2</div>
        <div class="testimonial-slide">Slide 3</div>
    </div>
    <div class="testimonial-nav">
        <!-- Arrows và dots sẽ được append vào đây -->
    </div>
</div>
<style>
    .short-story-container {
        background-color: white;
    }

    .short-story-content {
        max-width: 1335px;
        margin: 0px auto;
        width: 100%;
    }

    .wp-block-msi-blocks-client-reviews-uk div.slick-list,
    .wp-block-msi-blocks-client-reviews-uk div.slick-slider,
    .wp-block-msi-blocks-client-reviews-uk div.slick-track {
        padding: 0;
    }

    .slick-dotted.slick-slider {
        margin-bottom: 30px;
    }

    .wp-block-cb-carousel .slick-slide {
        overflow: hidden;
        padding-left: 7.5px;
        padding-right: 7.5px;
    }

    .wp-block-msi-blocks-client-reviews-uk-slide .container {
        align-items: center;
        display: flex;
        flex-direction: row-reverse;
        gap: 40px;
        justify-content: space-between;
        padding: 80px 40px;
        position: relative;
        width: 100%;
    }

    .wp-block-msi-blocks-client-reviews-uk-slide .container .container-text-with-image {
        display: flex;
        flex-direction: column;
        gap: 16px;
        height: -moz-fit-content;
        height: fit-content;
        width: 50%;
    }

    .wp-block-msi-blocks-client-reviews-uk-slide .quote {
        font-family: "Sanchez", serif;
        font-size: 40px;
        font-weight: 600;
        line-height: 44px;
    }

    .wp-block-msi-blocks-client-reviews-uk-slide .container-image {
        width: 50%;
    }

    .wp-block-msi-blocks-client-reviews-uk-slide .container-image img {
        border-radius: 8px;
        height: 350px;
        max-width: 90%;
        -o-object-fit: cover;
        object-fit: cover;
        width: 100%;
    }

    .wp-block-msi-blocks-client-reviews-uk .container-max #controls {
        bottom: 30px;
        display: flex;
        gap: 20px;
        left: calc(50% + 20px);
        position: absolute;
        z-index: 10;
    }




    .testimonial-slider-container {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    .testimonial-slider {
        margin-bottom: 20px;
    }

    .testimonial-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .testimonial-nav .slick-dots {
        display: flex !important;
        justify-content: center;
        margin: 0;
        padding: 0;
        list-style: none;
        gap: 10px;
    }

    .testimonial-nav .slick-dots li button {
        border: none;
        background: #ccc;
        border-radius: 50%;
        width: 12px;
        height: 12px;
        cursor: pointer;
    }

    .testimonial-nav .slick-dots li.slick-active button {
        background: #333;
    }

    .testimonial-nav .slick-prev,
    .testimonial-nav .slick-next {
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
    }
</style>
<script>
    jQuery(document).ready(function($) {
        $('.testimonial-slider').slick({
            dots: true,
            arrows: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000,
            appendDots: $('.testimonial-nav'),
            appendArrows: $('.testimonial-nav'),
            prevArrow: '<button type="button" class="slick-prev">←</button>',
            nextArrow: '<button type="button" class="slick-next">→</button>'
        });
        testimonial-nav
        $('.testimonial-nav').append($('.slick-dots'));
    });
</script>