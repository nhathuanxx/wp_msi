<?php
/* 
 * Template Name: About Page
 */
get_header();

// Ngôn ngữ hiện tại (Polylang)
$lang = function_exists('pll_current_language') ? pll_current_language('slug') : 'vi';

// Slug page theo ngôn ngữ
$slugs = [
    'vi' => [
        'gioi-thieu-chung' => 'gioi-thieu-chung',
        'su-menh'          => 'su-menh',
        'tam-nhin'         => 'tam-nhin',
        'gia-tri-cot-loi'  => 'gia-tri-cot-loi',
        'hanh-trinh-cua-msivn' => 'hanh-trinh-cua-msivn',
        'cau-chuyen-cua-cd-trong-gan-30-nam-tai-vn' => 'cau-chuyen-cua-cd-trong-gan-30-nam-tai-vn',
        'co-cau-to-chuc'   => 'co-cau-to-chuc',
    ],
    'en' => [
        'general-introduction' => 'general-introduction',
        'mission'          => 'mission',
        'vision'         => 'vision',
        'core-values'  => 'core-values',
        'journey-of-msivn' => 'journey-of-msivn',
        'the-story-of-cd-in-nearly-30-years-in-vietnam' => 'the-story-of-cd-in-nearly-30-years-in-vietnam',
        'organizational-structure'   => 'organizational-structure',
    ]
];

// Tiêu đề tab theo ngôn ngữ
$titles = [
    'vi' => [
        'gioi-thieu-chung' => 'Giới thiệu chung',
        'su-menh'          => 'Sứ mệnh',
        'tam-nhin'         => 'Tầm nhìn',
        'gia-tri-cot-loi'  => 'Giá trị cốt lõi',
        'hanh-trinh-cua-msivn' => 'Hành trình của MSIVN',
        'cau-chuyen-cua-cd-trong-gan-30-nam-tai-vn' => 'Câu chuyện của CD trong gần 30 năm tại VN',
        'co-cau-to-chuc'   => 'Cơ cấu tổ chức',
    ],
    'en' => [
        'general-introduction' => 'General introduction',
        'mission'          => 'Mission',
        'vision'         => 'Vision',
        'core-values'  => 'Core Values',
        'journey-of-msivn' => 'Journey of MSIVN',
        'the-story-of-cd-in-nearly-30-years-in-vietnam' => 'The Story of CD in Nearly 30 Years in Vietnam',
        'organizational-structure'   => 'Organizational Structure',
    ]
];

$tab_keys = array_keys($slugs[$lang]);
?>

<div class="about-us-page-container" style="font-family:'Roboto',sans-serif;color:#283573;">
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
            <span id="msi-breadcrumb-tab"></span>
        </nav>

        <div class="msi-tab-container">
            <!-- Content -->
            <main class="msi-tab-content" role="main">
                <!-- <h2 id="msi-tab-title"></h2> -->

                <!-- Section mặc định: grid ô chọn -->
                <div id="msi-default-grid" class="msi-grid">
                    <?php foreach ($tab_keys as $key):
                        $slug = $slugs[$lang][$key];
                        $page = get_page_by_path($slug, OBJECT, 'page');

                        // Lấy thumbnail hoặc ảnh mặc định
                        $thumb = '';
                        if ($page instanceof WP_Post) {
                            // 1. Thử lấy Featured Image
                            $thumb = get_the_post_thumbnail_url($page->ID, 'medium');

                            // 2. Nếu không có Featured Image thì tìm ảnh đầu tiên trong nội dung
                            if (!$thumb) {
                                $content = $page->post_content;
                                if (preg_match('/<img[^>]+src="([^">]+)"/i', $content, $matches)) {
                                    $thumb = $matches[1];
                                }
                            }
                        }

                        // 3. Nếu vẫn chưa có thì dùng ảnh default
                        if (!$thumb) {
                            $thumb = get_template_directory_uri() . '/assets/images/msi/phong-kham-gan-ban.jpg';
                        }

                        // Lấy mô tả ngắn hoặc rỗng
                        $desc = '';
                        if ($page instanceof WP_Post) {
                            $desc = wp_trim_words(strip_tags($page->post_content), 20, '...');
                        }
                    ?>
                        <div class="msi-grid-card" data-tab="<?php echo esc_attr($key); ?>">
                            <div class="msi-grid-thumb" style="background-image:url('<?php echo esc_url($thumb); ?>')"></div>
                            <div class="msi-grid-body">
                                <h3><?php echo esc_html($titles[$lang][$key]); ?></h3>
                                <p><?php echo esc_html($desc); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <?php foreach ($tab_keys as $index => $key): ?>
                    <section id="<?php echo esc_attr($key); ?>" class="msi-tab-pane">
                        <?php
                        if ($key === 'xxxxxx'):
                            if ($lang === 'vi'): ?>
                                <div class="msi-intro-section">
                                    <div class="msi-intro-left">
                                        <h3 class="msi-intro-title">GIỚI THIỆU CHUNG</h3>
                                        <p>Custom content cho <strong>Cơ cấu tổ chức</strong>.</p>
                                    </div>
                                    <div class="msi-intro-right">
                                        <?php echo do_shortcode('[msi_circle size="220" target="200" initial_rotation="160" text="Đối tác"]'); ?>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="msi-intro-section">
                                    <h3 class="msi-intro-title">Organization</h3>
                                    <p>Custom EN content for Organization.</p>
                                </div>
                            <?php endif;

                        elseif ($key === 'zzzzz'):
                            if ($lang === 'vi'):
                                require get_template_directory() . '/template-parts/general-introduction.php';
                            else: ?>
                                <div class="custom-facility">
                                    <h3>NIC Facility — (Custom)</h3>
                                    <p>Custom EN NIC Facility content.</p>
                                </div>
                        <?php endif;

                        else:
                            $slug = $slugs[$lang][$key] ?? '';
                            $page = $slug ? get_page_by_path($slug, OBJECT, 'page') : null;
                            if ($page instanceof WP_Post) {
                                echo apply_filters('the_content', $page->post_content);
                            } else {
                                echo '<p style="color:#c00;">Không tìm thấy trang: ' . esc_html($slug) . '</p>';
                            }
                        endif;
                        ?>
                    </section>
                <?php endforeach; ?>
            </main>

            <!-- Tabs sidebar -->
            <aside class="msi-tab-sidebar" aria-label="Tabs">
                <ul>
                    <?php foreach ($tab_keys as $i => $key): ?>
                        <li>
                            <a href="#<?php echo esc_attr($key); ?>" data-title="<?php echo esc_attr($titles[$lang][$key]); ?>">
                                <?php echo esc_html($titles[$lang][$key]); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </aside>
        </div>
    </div>
    <h3 class="wp-block-heading has-text-align-center">
        <?php if ($lang === 'vi') : ?>
            Tìm hiểu thêm về MSI Việt Nam
        <?php else : ?>
            Learn more about MSI Vietnam
        <?php endif; ?>
    </h3>
    <p class="has-text-align-center-p">
        <?php if ($lang === 'vi') : ?>
            Tìm hiểu sâu hơn về MSI Việt Nam bằng cách đọc những câu chuyện, tin tức của chúng tôi.
        <?php else : ?>
            Explore more about MSI Vietnam by reading our stories and news.
        <?php endif; ?>
    </p>
    <?php require get_template_directory() . '/template-parts/post-list.php'; ?>
</div>

<style>
    /* Layout & breadcrumb */
    .about-us-page-container {
        background: white;
    }

    .about-us-page {
        max-width: 1335px;
        margin: 0px auto;
        /* padding: 20px; */
    }

    .msi-breadcrumb {
        font-size: 20px;
        margin-bottom: 16px;
        font-family: "Roboto", sans-serif;
    }

    .msi-breadcrumb a {
        color: #283573;
        font-size: 20px;
        font-family: "Roboto", sans-serif;
        text-decoration: none;
    }

    .msi-breadcrumb span {
        margin: 0 6px;
        color: #666;
    }

    /* Grid default view */
    .msi-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
        width: 100%;
    }

    /* Card chung */
    .msi-grid-card {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 8px;
        overflow: hidden;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        transition: box-shadow .2s;
        width: 100%;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    .msi-grid-card:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.16);
    }
    .msi-grid-card:hover .msi-grid-thumb{
     scale: 1.1;
        transition: 0.6s;
    }

    .msi-grid-thumb {
        background-size: cover;
        background-position: center;
        height: 150px;
        width: 100%;
    }

    .msi-grid-body {
        padding: 24px;
    }

    .msi-grid-body h3 {
        margin: 0 0 8px;
        font-size: 24px;
        font-family: "Roboto", sans-serif;
        color: #283573;
        font-weight: 700;
    }

    .msi-grid-body p {
        margin: 0;
        font-size: 20px;
        font-family: "Roboto", sans-serif;
        color: #283573;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    /* Tabs layout */
    .msi-tab-container {
        display: flex;
        gap: 24px;
        align-items: flex-start;
        margin-bottom: 40px;
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

    .msi-tab-sidebar a.active {
        background: #283573;
        color: #fff;
    }

    .msi-tab-pane.active {
        display: block;
    }

    /* Responsive: sidebar lên trên */
    @media (max-width:992px) {
        .msi-tab-container {
            flex-direction: column;
            margin-bottom: 40px;
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
        }
    }

    @media (min-width: 768px) {
        .msi-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        /* Card đầu tiên to full width */
        .msi-grid-card:first-child {
            grid-column: span 2;
        }

        /* Chiều cao card đầu tiên lớn hơn */
        .msi-grid-card:first-child .msi-grid-thumb {
            height: 300px;
        }
    }

    /* ===== Mobile ===== */
    @media (max-width: 767px) {
        .msi-grid {
            grid-template-columns: 1fr;
            /* 1 cột */
        }

        /* Card đầu tiên giống các card khác */
        .msi-grid-card:first-child {
            grid-column: auto;
        }

        .msi-grid-card:first-child .msi-grid-thumb {
            height: 150px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('.msi-tab-sidebar a');
        const panes = document.querySelectorAll('.msi-tab-pane');
        const titleEl = document.getElementById('msi-tab-title');
        const breadcrumbTab = document.getElementById('msi-breadcrumb-tab');
        const defaultGrid = document.getElementById('msi-default-grid');

        function idFromLink(a) {
            return a.getAttribute('href').replace('#', '');
        }

        function activate(tabId) {
            if (defaultGrid) defaultGrid.style.display = 'none';
            const pane = document.getElementById(tabId);
            const link = document.querySelector('.msi-tab-sidebar a[href="#' + CSS.escape(tabId) + '"]');
            if (!pane || !link) return;
            links.forEach(a => a.classList.remove('active'));
            panes.forEach(p => p.classList.remove('active'));
            link.classList.add('active');
            pane.classList.add('active');
            if (titleEl && link.dataset.title) titleEl.textContent = link.dataset.title;
            if (breadcrumbTab && link.dataset.title) breadcrumbTab.textContent = link.dataset.title;
            link.scrollIntoView({
                block: 'nearest',
                inline: 'nearest'
            });
        }

        // click sidebar
        links.forEach(a => {
            a.addEventListener('click', function(e) {
                e.preventDefault();
                const id = idFromLink(a);
                history.pushState(null, '', '#' + id);
                activate(id);
            });
        });

        // click grid card
        if (defaultGrid) {
            defaultGrid.querySelectorAll('.msi-grid-card').forEach(card => {
                card.addEventListener('click', function() {
                    const id = card.dataset.tab;
                    history.pushState(null, '', '#' + id);
                    activate(id);
                });
            });
        }

        // init
        function initFromHash() {
            const id = location.hash.replace('#', '');
            if (id && document.getElementById(id)) {
                activate(id);
            } else {
                // hiển thị grid
                if (defaultGrid) defaultGrid.style.display = 'grid';
                titleEl.textContent = '';
                breadcrumbTab.textContent = '';
                panes.forEach(p => p.classList.remove('active'));
                links.forEach(a => a.classList.remove('active'));
            }
        }

        window.addEventListener('hashchange', initFromHash);
        initFromHash();
    });
</script>

<?php get_footer(); ?>