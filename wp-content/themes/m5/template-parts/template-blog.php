<div class="template-blog-filter">
    <!-- Nút filter category -->
    <?php
    $categories = get_categories();
    foreach ($categories as $cat) {
        echo '<button class="template-blog-filter-btn" data-category="' . esc_attr($cat->slug) . '">' . esc_html($cat->name) . '</button>';
    }
    ?>

    <!-- Nút icon tìm kiếm -->
    <div class="template-blog-search-wrapper">
        <button id="template-blog-search-toggle" aria-label="Mở tìm kiếm" title="Tìm kiếm">
            🔍
        </button>
        <div class="template-blog-search-box" style="display:none;">
            <span class="template-blog-search-icon">🔍</span>
            <input type="text" id="template-blog-search-key" placeholder="Tìm kiếm Blog...">
            <button id="template-blog-search-clear" aria-label="Xóa tìm kiếm" title="Xóa tìm kiếm">&times;</button>
        </div>
    </div>
</div>

<!-- Danh sách bài viết -->
<div id="template-blog-post-list">

    <?php
    // Lấy 9 bài mới nhất lúc đầu (không lọc)
    $lang = pll_current_language('slug');
    $args = ['post_type' => 'post', 'posts_per_page' => 3, 'lang' => $lang,];
    $query = new WP_Query($args);
    while ($query->have_posts()) {
        $query->the_post();
        echo msi_get_post_card_html(get_post());
    }
    wp_reset_postdata();
    ?>
</div>

<!-- Nút tải thêm -->
<div class="template-blog-load-more-wrap"  <?php if ($query->found_posts < 3) echo 'style="display:none;"'; ?>>
    <button id="template-blog-load-more-btn" data-category="cau-chuyen">TẢI THÊM</button>
</div>
<style>
    .template-blog-filter {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .template-blog-filter-btn {
        padding: 6px 14px;
        border: 1px solid #1d2d5f;
        border-radius: 6px;
        background: none;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s, color 0.3s;
    }

    .template-blog-filter-btn:hover {
        background-color: #1d2d5f;
        color: white;
    }

    .template-blog-search-wrapper {
        position: relative;
    }

    #template-blog-search-toggle {
        font-size: 20px;
        background: none;
        border: none;
        cursor: pointer;
        padding: 6px 10px;
        line-height: 1;
    }

    .template-blog-search-box {
        display: flex;
        align-items: center;
        border: 1px solid #ccc;
        border-radius: 6px;
        padding: 4px 8px;
        gap: 6px;
        background: white;
        position: absolute;
        right: 0;
        top: 35px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        z-index: 1000;
        width: 250px;
    }

    .template-blog-search-icon {
        font-size: 16px;
        color: #666;
    }

    #template-blog-search-key {
        flex-grow: 1;
        border: none;
        outline: none;
        font-size: 14px;
    }

    #template-blog-search-clear {
        background: none;
        border: none;
        font-size: 18px;
        cursor: pointer;
        color: #666;
        line-height: 1;
    }

    /* Bài viết dạng grid */
    #template-blog-post-list {
        display: grid;
        gap: 20px;
        margin-top: 20px;
    }

    /* >=1280px 3 bài 1 dòng */
    @media (min-width: 1280px) {
        #template-blog-post-list {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    /* <1280px 1 bài 1 dòng */
    @media (max-width: 1279px) {
        #template-blog-post-list {
            grid-template-columns: 1fr;
        }
    }

    /* Post card style (copy chỉnh sửa thêm tiền tố) */
    .post-card {
        border-radius: 8px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
    }

    .post-thumb {
        display: block;
        position: relative;
        overflow: hidden;
        flex-shrink: 0;
    }

    .post-thumb img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.3s ease;
    }

    .post-thumb:hover img {
        transform: scale(1.05);
    }

    .post-category {
        position: absolute;
        top: 10px;
        left: 10px;
        background: #1d2d5f;
        color: #fff;
        padding: 3px 8px;
        font-size: 12px;
        border-radius: 4px;
        pointer-events: none;
    }

    .post-meta {
        font-size: 12px;
        color: #666;
        padding: 8px 12px 0;
    }

    .post-title {
        font-size: 16px;
        font-weight: bold;
        padding: 8px 12px;
        margin: 0;
    }

    .post-title a {
        color: #1d2d5f;
        text-decoration: none;
    }

    .post-title a:hover {
        text-decoration: underline;
    }

    .post-excerpt {
        font-size: 14px;
        padding: 0 12px 12px;
        color: #555;
        flex-grow: 1;
    }

    .template-blog-load-more-wrap {
        text-align: center;
        margin-top: 20px;
    }

    #template-blog-load-more-btn {
        padding: 8px 20px;
        background: #1d2d5f;
        color: #fff;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s;
    }

    #template-blog-load-more-btn:hover {
        background-color: #16325c;
    }
</style>