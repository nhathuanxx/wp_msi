<div class="intervention-modal-container">
    <img class="anh-trang-tri-trai" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/background-2.webp"
                        alt="background-2">
                            <img style="padding-top: 240px;" class="anh-trang-tri-phai" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/background-2.webp"
                        alt="background-2">
    <div class="intervention-model-header">
        <div class="title">
            <a href="<?php echo (pll_current_language('slug') === 'vi') ? '/mo-hinh-can-thiep' : '/intervention-model'; ?>">
                <?php echo pll_current_language('slug') === 'vi' ? 'MÔ HÌNH CAN THIỆP' : 'INTERVENTION MODEL'; ?>
            </a>
        </div>
        <div class="sub-title">
            <?php the_field('mo_ta_mo_hinh_can_thiep', pll_current_language('slug')); ?>
        </div>
    </div>

    <div class="intervention-modal-content">
        <div class="msi-service-wrapper">
            <div class="circle" id="circle">
                <?php echo do_shortcode('[msi_orbit_globe size="300"]'); ?>
            </div>

            <div class="msi-services" id="services">
                <?php
                $lists = [];
                if( have_rows('intervention_model', pll_current_language('slug')) ):
                    $i = 0;
                    while( have_rows('intervention_model', pll_current_language('slug')) ): the_row();
                        $title = mb_strtoupper(get_sub_field('title'), 'UTF-8');
                        $sub_items = get_sub_field('items'); // repeater con
                        $lists[$i] = [];
                        if( $sub_items ):
                            foreach( $sub_items as $sub_item ){
                                if(isset($sub_item['item_title']) && $sub_item['item_title'] != ''){
                                    $lists[$i][] = $sub_item['item_title'];
                                }
                            }
                        endif;
                ?>
                    <div class="msi-service box-<?php echo $i; ?>" data-index="<?php echo $i; ?>">
                        <div class="box"><?php echo esc_html($title); ?></div>
                    </div>
                <?php
                        $i++;
                    endwhile;
                endif;
                ?>
            </div>

            <svg class="lines"></svg>
        </div>

        <div class="intervention-model-list" id="interventionModelList">
            <!-- danh sách sẽ render JS -->
        </div>
    </div>

    <div class="intervention-modal-contact">
        <?php
        $lang = pll_current_language('slug');
        $link = site_url($lang === 'vi' ? '/lien-he/#msiContactForm' : '/en/contact/#msiContactForm');
        ?>
        <a class="intervention-modal-contact-btn" href="<?php echo $link; ?>">
            <?php echo $lang === 'vi' ? 'LIÊN HỆ NGAY' : 'CONTACT NOW'; ?>
        </a>
    </div>
</div>

<style>
.intervention-modal-container {
    padding-top: 80px;
    max-width: 1335px;
    margin: 0 auto;
    /* position: relative; */
    font-family: "Roboto", sans-serif;
}

.intervention-model-header {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 40px;
}

.intervention-model-header .title {
    font-size: 24px;
    font-weight: 700;
    color: #283573 !important;
}

.intervention-model-header .title a {
    color: #283573 !important;
    font-size: 28px;
    white-space: nowrap;
    text-decoration: none;
}

.intervention-model-header .title a:hover {
    text-decoration: underline;
}

.intervention-model-header .sub-title {
    font-size: 18px;
    font-weight: 400;
    color: #283573 !important;
}

.intervention-modal-content {
    display: flex;
    align-items: center;
    /* justify-content: space-between; */
    gap: 60px;
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
    padding: 16px 40px;
    border-radius: 25px;
    border: 2px solid currentColor;
    font-weight: bold;
    background: #fff;
    color: #283573;
    white-space: nowrap;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s;
}

.msi-service .box.active {
    background-color: #459BDA;
        border: 2px solid #283573;

    color: #fff;
}

svg.lines {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
}

.intervention-model-list {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.intervention-model-list .title-list {
    display: flex;
    gap: 20px;
    align-items: center;
    font-size: 16px;
    font-family: "Roboto", sans-serif;
    font-weight: 700;
    color: #283573 !important;
}

.intervention-modal-contact {
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 60px;
}

.intervention-modal-contact-btn {
    padding: 12px 40px;
    font-size: 20px;
    background-color: #459BDA;
    font-weight: 700;
    color: white;
    border-radius: 8px;
    border: 1px solid #283573;
    text-decoration: none;
}

.intervention-modal-contact-btn:hover {
    color: #283573;
    background-color: white;
}

@media (max-width: 1335px) {
    .intervention-modal-container {
        position: relative;
        padding: 80px 24px;
    }
    .msi-service .box {
        font-size: 16px;
    }
    .intervention-model-list .title-list {
        font-size: 16px;
    }
}

@media (max-width: 1080px) {
    /* .intervention-model-list {
        display: none;
    } */
    .intervention-model-header {
        flex-direction: column;
        gap: 12px;
    }
    .intervention-model-header .title a {
        font-size: 24px;
    }
    .intervention-model-header .sub-title {
        font-size: 16px;
    }
    .intervention-modal-content {
        flex-direction: column;
        gap: 40px;
        align-items: stretch;
    }
    .msi-service-wrapper {
        flex-direction: column;
        gap: 40px;
    }
    .circle {
        margin: 0 auto;
    }
    .msi-services, .msi-service .box, .intervention-model-list {
        width: 100%;
    }
    .msi-service .box {
        font-size: 15px;
        padding: 12px 20px;
        white-space: normal;
    }
    svg.lines {
        display: none;
    }
}
</style>

<script>
window.addEventListener("load", () => {
    const circle = document.getElementById("circle");
    const services = document.querySelectorAll(".msi-service");
    const svg = document.querySelector("svg.lines");
    const listContainer = document.getElementById("interventionModelList");

    const lists = <?php echo json_encode($lists); ?>;

    // --- VẼ LINE ---
    if (window.innerWidth > 1080) {
        const circleRect = circle.getBoundingClientRect();
        const wrapperRect = circle.closest(".msi-service-wrapper").getBoundingClientRect();
        const cx = circleRect.left - wrapperRect.left + circleRect.width/2;
        const cy = circleRect.top - wrapperRect.top + circleRect.height/2;

        svg.innerHTML = "";
        services.forEach((service, idx) => {
            const box = service.querySelector(".box");
            const boxRect = box.getBoundingClientRect();
            const x2 = boxRect.left - wrapperRect.left;
            const y2 = boxRect.top - wrapperRect.top + boxRect.height/2;
            const color = (idx % 2 === 0) ? '#283573' : '#e63946';

            const line = document.createElementNS("http://www.w3.org/2000/svg","line");
            line.setAttribute("x1", cx);
            line.setAttribute("y1", cy);
            line.setAttribute("x2", x2);
            line.setAttribute("y2", y2);
            line.setAttribute("stroke", color);
            line.setAttribute("stroke-width", "2");

            const dot = document.createElementNS("http://www.w3.org/2000/svg","circle");
            dot.setAttribute("cx", cx);
            dot.setAttribute("cy", cy);
            dot.setAttribute("r","6");
            dot.setAttribute("fill","#fff");
            dot.setAttribute("stroke", color);
            dot.setAttribute("stroke-width","2");

            svg.appendChild(line);
            svg.appendChild(dot);
        });
    }

    // --- CLICK ACTIVE BOX ---
    const boxes = document.querySelectorAll(".msi-service .box");

    function renderList(index){
        const items = lists[index] || [];
        listContainer.innerHTML = "";
        items.forEach(item => {
            const div = document.createElement("div");
            div.className = "title-list";
div.innerHTML = `<i class="fas fa-check-circle" style="color: red; background: white; border-radius: 50%;"></i> <span>${item}</span>`;
            listContainer.appendChild(div);
        });
    }

    boxes.forEach(box => {
        box.addEventListener("click", () => {
            boxes.forEach(b => b.classList.remove("active"));
            box.classList.add("active");
            const index = box.parentElement.dataset.index;
            renderList(index);
        });
    });

    // --- ACTIVE BOX ĐẦU TIÊN MẶC ĐỊNH ---
    if(boxes.length > 0){
        boxes[0].classList.add("active");
        renderList(0);
    }
});
</script>
