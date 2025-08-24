<div class="intervention-modal-container">
    <div class="intervention-model-header">
        <div class="title">
            <?php if (pll_current_language('slug') === 'vi') : ?>
                MÔ HÌNH CAN THIỆP <?php else : ?>
                INTERVENTION MODAL
            <?php endif; ?>

        </div class="sub-title">

    </div>

    <div class="intervention-modal-content">
        <div class="msi-service-wrapper">
            <div class="circle" id="circle">
                <?php
                echo do_shortcode('[msi_orbit_globe size="300"]');
                ?>
            </div>

            <div class="msi-services" id="services">
                <?php if (have_rows('intervention_modal', pll_current_language('slug'))):
                    $i = 0;
                ?>
                    <?php while (have_rows('intervention_modal', pll_current_language('slug'))): the_row();
                        $title = get_sub_field('title');
                        $i++;
                    ?>
                        <div class="msi-service box-<?php echo $i; ?>">
                            <div class="box"><?php echo esc_html($title); ?></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <svg class="lines"></svg>
        </div>
        <div class="intervention-model-list">
            <?php if (have_rows('intervention_modal', pll_current_language('slug'))):
            ?>
                <?php while (have_rows('intervention_modal', pll_current_language('slug'))): the_row();
                    $title = get_sub_field('title');

                ?>
                    <div class="title-list">
                        <?php echo esc_html($title); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>


<style>
    .intervention-modal-container {
        padding: 80px 0px;
        max-width: 1335px;
        margin: 0px auto;
    }
    .intervention-modal-content{
     display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .msi-service-wrapper {
        display: flex;
        align-items: center;
        position: relative;
        gap: 120px;
    }

    .circle {
        width: 300px;
        height: 300px;
        border-radius: 50%;
        position: relative;
        background-color: white;
        z-index: 2;
    }

    .msi-services {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 30px;
        position: relative;
        z-index: 2;
    }

    .msi-service .box {
        padding: 12px 24px;
        border-radius: 25px;
        border: 2px solid currentColor;
        font-weight: bold;
        background: #fff;
        color: currentColor;
        white-space: nowrap;
    }

    .msi-service:nth-child(odd) {
        color: #0057ff;
    }

    .msi-service:nth-child(even) {
        color: #e63946;
    }

    /* svg phủ toàn bộ wrapper */
    svg.lines {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const circle = document.getElementById("circle");
        const services = document.querySelectorAll(".msi-service");
        const svg = document.querySelector("svg.lines");

        // tọa độ tâm circle
        const circleRect = circle.getBoundingClientRect();
        const wrapperRect = circle.closest(".msi-service-wrapper").getBoundingClientRect();
        const cx = circleRect.left - wrapperRect.left + circleRect.width / 2;
        const cy = circleRect.top - wrapperRect.top + circleRect.height / 2;

        svg.innerHTML = ""; // clear old lines

        services.forEach((service, idx) => {
            const box = service.querySelector(".box");
            const boxRect = box.getBoundingClientRect();

            // điểm giữa bên trái của box
            const x2 = boxRect.left - wrapperRect.left;
            const y2 = boxRect.top - wrapperRect.top + boxRect.height / 2;

            const color = getComputedStyle(service).color;

            // tạo line
            const line = document.createElementNS("http://www.w3.org/2000/svg", "line");
            line.setAttribute("x1", cx);
            line.setAttribute("y1", cy);
            line.setAttribute("x2", x2);
            line.setAttribute("y2", y2);
            line.setAttribute("stroke", color);
            line.setAttribute("stroke-width", "2");

            // chấm tròn ở đầu line
            const dot = document.createElementNS("http://www.w3.org/2000/svg", "circle");
            dot.setAttribute("cx", cx);
            dot.setAttribute("cy", cy);
            dot.setAttribute("r", "6");
            dot.setAttribute("fill", "#fff");
            dot.setAttribute("stroke", color);
            dot.setAttribute("stroke-width", "2");

            svg.appendChild(line);
            svg.appendChild(dot);
        });
    });
</script>