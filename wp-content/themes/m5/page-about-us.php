<?php
/*
 * Template Name: About Us Tabs (PHP in foreach)
 */
get_header();

// Ngôn ngữ hiện tại (Polylang)
$lang = function_exists('pll_current_language') ? pll_current_language('slug') : 'vi';

// Slug page theo ngôn ngữ (cập nhật nếu cần)
$slugs = [
    'vi' => [
        'tam-nhin'        => 'tam-nhin',
        'su-menh'         => 'su-menh',
        'gia-tri-cot-loi' => 'gia-tri-cot-loi',
        'co-cau-to-chuc'  => 'co-cau-to-chuc',
        'co-so-cua-nic'   => 'co-so-cua-nic',
    ],
    'en' => [
        'tam-nhin'        => 'vision',
        'su-menh'         => 'mission',
        'gia-tri-cot-loi' => 'core-values',
        'co-cau-to-chuc'  => 'organization',
        'co-so-cua-nic'   => 'nic-facility',
    ]
];

// Tiêu đề tab theo ngôn ngữ
$titles = [
    'vi' => [
        'tam-nhin'        => 'Tầm nhìn',
        'su-menh'         => 'Sứ mệnh',
        'gia-tri-cot-loi' => 'Giá trị cốt lõi',
        'co-cau-to-chuc'  => 'Cơ cấu tổ chức',
        'co-so-cua-nic'   => 'Cơ sở của NIC',
    ],
    'en' => [
        'tam-nhin'        => 'Vision',
        'su-menh'         => 'Mission',
        'gia-tri-cot-loi' => 'Core Values',
        'co-cau-to-chuc'  => 'Organization',
        'co-so-cua-nic'   => 'NIC Facility',
    ]
];

$tab_keys = array_keys($slugs[$lang]); // giữ thứ tự theo mảng slugs
?>

<div class="about-us-page">

    <!-- Breadcrumb -->
    <nav class="msi-breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php echo ($lang === 'vi') ? 'Trang chủ' : 'Home'; ?>
        </a>
        <span>›</span>
        <a href="<?php echo esc_url(get_permalink(get_the_ID())); ?>">
            <?php echo ($lang === 'vi') ? 'Về chúng tôi' : 'About Us'; ?>
        </a>
        <span>›</span>
        <span id="msi-breadcrumb-tab"><?php echo esc_html($titles[$lang][$tab_keys[0]]); ?></span>
    </nav>

    <div class="msi-tab-container">

        <!-- Content bên trái -->
        <main class="msi-tab-content" role="main">
            <h2 id="msi-tab-title"><?php echo esc_html($titles[$lang][$tab_keys[0]]); ?></h2>

            <?php foreach ($tab_keys as $index => $key): ?>
                <section id="<?php echo esc_attr($key); ?>" class="msi-tab-pane<?php echo $index === 0 ? ' active' : ''; ?>">
                    <?php
                    // === Ở đây bạn có thể paste trực tiếp PHP + HTML cho tab mong muốn ===
                    // Ví dụ: nếu tab là 'co-cau-to-chuc' thì render custom PHP/HTML
                    if ($key === 'co-cau-to-chuc'):

                        // Ví dụ minh họa: bạn có thể paste code PHP/HTML thật của bạn vào đây
                        if ($lang === 'vi'):
                    ?>
                            <!-- === CUSTOM PHP/HTML (VI) - bạn paste vào chỗ này === -->
                            <div class="msi-intro-section">
                                <div class="msi-intro-left">
                                    <h3 class="msi-intro-title">GIỚI THIỆU CHUNG (Ví dụ custom PHP)</h3>
                                    <p>Đây là nội dung custom cho <strong>Cơ cấu tổ chức</strong> (tiếng Việt). Bạn có thể dán
                                        trực tiếp HTML &amp; PHP tại đây.</p>
                                    <a class="msi-intro-btn" href="<?php echo esc_url(site_url('ve-chung-toi')); ?>">XEM THÊM</a>
                                </div>
                                <div class="msi-intro-right">
                                    <?php
                                    // Ví dụ thực thi shortcode
                                    echo do_shortcode('[msi_circle size="220" target="200" initial_rotation="160" text="Đối tác"]');
                                    ?>
                                </div>
                            </div>
                            <!-- === END CUSTOM === -->
                        <?php
                        else:
                        ?>
                            <!-- === CUSTOM (EN) === -->
                            <div class="msi-intro-section">
                                <div class="msi-intro-left">
                                    <h3 class="msi-intro-title">Organization (example)</h3>
                                    <p>Custom HTML/PHP for <strong>Organization</strong> (English).</p>
                                </div>
                            </div>
                            <!-- === END CUSTOM === -->
                        <?php
                        endif;

                    // Custom khác: co-so-cua-nic
                    elseif ($key === 'co-so-cua-nic'):

                        if ($lang === 'vi'):
                        ?>
                            <!-- === CUSTOM (VI) for co-so-cua-nic === -->
                            <?php require get_template_directory() . '/template-parts/general-introduction.php'; ?>

                            <!-- === END CUSTOM === -->
                        <?php
                        else:
                        ?>
                            <!-- === CUSTOM (EN) for nic-facility === -->
                            <div class="custom-facility">
                                <h3>NIC Facility — (Custom)</h3>
                                <p>Custom content for NIC Facility (English).</p>
                            </div>
                            <!-- === END CUSTOM === -->
                    <?php
                        endif;

                    // Mặc định: lấy content từ Page theo slug
                    else:
                        $slug = $slugs[$lang][$key] ?? '';
                        $page = $slug ? get_page_by_path($slug, OBJECT, 'page') : null;
                        if ($page instanceof WP_Post) {
                            // Render content (shortcode, block, filters preserved)
                            echo apply_filters('the_content', $page->post_content);
                        } else {
                            echo '<p style="color:#c00;">Không tìm thấy trang: ' . esc_html($slug) . '</p>';
                        }
                    endif;
                    ?>
                </section>
            <?php endforeach; ?>
        </main>

        <!-- Tabs bên phải -->
        <aside class="msi-tab-sidebar" aria-label="Tabs">
            <ul>
                <?php foreach ($tab_keys as $i => $key): ?>
                    <li>
                        <a href="#<?php echo esc_attr($key); ?>"
                            data-title="<?php echo esc_attr($titles[$lang][$key]); ?>"
                            class="<?php echo $i === 0 ? 'active' : ''; ?>">
                            <?php echo esc_html($titles[$lang][$key]); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>

    </div>
</div>

<style>
    /* Basic layout */
    .about-us-page {
        padding: 20px;
    }

    .msi-breadcrumb {
        font-size: 14px;
        margin-bottom: 16px;
    }

    .msi-breadcrumb a {
        color: #283573;
        text-decoration: none;
    }

    .msi-breadcrumb span {
        margin: 0 6px;
        color: #666;
    }

    .msi-tab-container {
        display: flex;
        gap: 24px;
        align-items: flex-start;
    }

    .msi-tab-content {
        flex: 1;
        min-width: 0;
    }

    .msi-tab-sidebar {
        width: 240px;
        max-height: 80vh;
        overflow-y: auto;
        flex-shrink: 0;
    }

    .msi-tab-sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .msi-tab-sidebar li {
        margin: 6px 0;
    }

    .msi-tab-sidebar a {
        display: block;
        padding: 10px 12px;
        border-radius: 6px;
        text-decoration: none;
        color: #333;
        transition: background .2s;
    }

    .msi-tab-sidebar a:hover {
        background: #f2f3f7;
    }

    .msi-tab-sidebar a.active {
        background: #283573;
        color: #fff;
    }

    .msi-tab-pane {
        display: none;
    }

    .msi-tab-pane.active {
        display: block;
    }

    /* Responsive: tabs lên trên */
    @media (max-width: 992px) {
        .msi-tab-container {
            flex-direction: column;
            align-items: stretch;
        }

        .msi-tab-sidebar {
            order: -1;
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
            margin-bottom: 16px;
            position: sticky;
            top: 0;
            background: #fff;
            z-index: 999;
            padding: 8px 0;
        }

        .msi-tab-sidebar ul {
            display: flex;
            gap: 8px;
            padding: 0 8px;
            margin: 0;
        }

        .msi-tab-sidebar li {
            flex: 0 0 auto;
            margin: 0;
        }

        .msi-tab-sidebar a {
            white-space: nowrap;
            padding: 8px 12px;
            display: inline-block;
        }

        .msi-tab-content {
            order: 0;
        }
    }

    /* Small style for sample custom blocks (you can change) */
    .msi-intro-section {
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }

    .msi-intro-left {
        flex: 1;
    }

    .msi-intro-right {
        width: 260px;
    }

    .msi-intro-title {
        margin: 0 0 10px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('.msi-tab-sidebar a');
        const panes = document.querySelectorAll('.msi-tab-pane');
        const titleEl = document.getElementById('msi-tab-title');
        const breadcrumbTab = document.getElementById('msi-breadcrumb-tab');

        function idFromLink(a) {
            return a.getAttribute('href').replace('#', '');
        }

        function activate(tabId) {
            const pane = document.getElementById(tabId);
            const link = document.querySelector('.msi-tab-sidebar a[href="#' + CSS.escape(tabId) + '"]');
            if (!pane || !link) return;

            links.forEach(a => a.classList.remove('active'));
            panes.forEach(p => p.classList.remove('active'));

            link.classList.add('active');
            pane.classList.add('active');

            // cập nhật tiêu đề & breadcrumb
            if (titleEl && link.dataset.title) titleEl.textContent = link.dataset.title;
            if (breadcrumbTab && link.dataset.title) breadcrumbTab.textContent = link.dataset.title;

            // ensure visible in sidebar
            link.scrollIntoView({
                block: 'nearest',
                inline: 'nearest'
            });
        }

        // click tab (ở lại trang, dùng hash)
        links.forEach(a => {
            a.addEventListener('click', function(e) {
                e.preventDefault();
                const id = idFromLink(a);
                history.pushState(null, '', '#' + id);
                activate(id);
            });
        });

        // init from hash or default first
        function initFromHash() {
            const id = location.hash.replace('#', '');
            if (id && document.getElementById(id)) activate(id);
            else if (links[0]) activate(idFromLink(links[0]));
        }
        window.addEventListener('hashchange', initFromHash);
        initFromHash();
    });
</script>

<?php get_footer(); ?>