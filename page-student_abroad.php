<?php
get_header();
// Start the Loop
while ( have_posts() ) : the_post();
	$post_id = get_the_ID();
?>

<div class="left_block">
    <div class="left_sb">
        <h1>出國計畫</h1>
        <a class="left_sb_a" href="#the_top">出國交換學生計畫</a>
        <a class="left_sb_a" href="#short_term_program">出國短期研究計畫</a>
        <a class="left_sb_a" href="#short_term_course">姊妹校短期課程</a>
        <a class="left_sb_a" href="#overseas">海外實習</a>
        <a class="left_sb_a" href="#dual_degree">雙聯學位</a>
        <a class="left_sb_a" href="#virtual">國外校際選修線上課程</a>
    </div>
</div>


<div class="right_block">

<div id="post-content-area">
    <div id="post-content">

<div id="exchange" class="field_wrapper">
    <h2><strong>一、出國交換學生計畫</strong>
        <p class="has-normal-font-size">申請至姊妹校進行為期一學期或一學年修課計畫，交換期間須於本校註冊，回國後登陸姊妹校所修學分及履行相關義務，經系所採認可抵免學分。</p>
    </h2><img src="<?php echo get_template_directory_uri()?>/images/student_abroad/cloud1.webp">
</div>
<div class="wp-block-columns">
    <div class="wp-block-column">
        <a href="https://oia.nycu.edu.tw/study-abroad/outbound-exchange-program/">
        <div class="small_title">
        <h3>
        <p><strong>校級學期交換計畫</strong> </p>
        <p><strong>University-level Semester Exchange</strong></p>
        </h3>
        <img
        src="<?php echo get_template_directory_uri()?>/images/student_abroad/cloud0.webp">
        </div>
        </a>
        <div class="inner_context">
            <div>
                <p class="has-small-font-size">學生可透過本校國際事務處申請交換至校級姊妹校、非特定院級姊妹校、限理學院學生交換之姊妹校。</p>
                <a href="https://docs.google.com/spreadsheets/d/16c5inSsyOfT1inETwFMtWEXB3OCSd3MUVTun45ZLACs/edit#gid=1360919817">可交換姊妹校列表</a>
            </div>
            <div>
                <p class="has-small-font-size">聯絡資訊</p>
                <p class="has-small-font-size">國際事務處周秋儀小姐</p>
                <p class="has-small-font-size">03-5712121 #50059 </p>
                <p class="has-small-font-size">cherrie@nycu.edu.tw</p>
            </div>
        </div>
    </div>
    <div class="wp-block-column">
        <a href="https://oia.nycu.edu.tw/study-abroad/outbound-exchange-program/">
        <div class="small_title">
        <h3>
        <p><strong>台聯大出國交換計畫 </strong></p>
        <p><strong>UST Semester Exchange Program / <br>Summer</strong></p>
        </h3>
        <img
        src="<?php echo get_template_directory_uri()?>/images/student_abroad/cloud0.webp">
        </div>
        </a>
        <div class="inner_context">
        <div>
        <p class="has-small-font-size">學生可於每年學期間申請前往台灣聯大合作夥伴學校進行短期研讀或暑期實習。</p>
        <a href="https://www.ust.edu.tw/Exchange_Student.aspx">合作夥伴學校列表</a>
        </div>
        <div>
        <p class="has-small-font-size">聯絡資訊</p>
        <p class="has-small-font-size">國際事務處黃芸羽小姐</p>
        <p class="has-small-font-size">02-28267000 #67393 </p>
        <p class="has-small-font-size">yyyhuang@nycu.edu.tw</p>
        </div>
        </div>
    </div>
</div>
<div id="short_term_program" class="field_wrapper">
    <h2><strong>二、出國短期研究計畫</strong></h2><img
        src="<?php echo get_template_directory_uri()?>/images/student_abroad/cloud2.webp">
</div>
<div class="wp-block-columns">
    <div class="wp-block-column">
        <a href="https://oia.nycu.edu.tw/study-abroad/study_abroad/#apply">
        <div class="small_title">
        <h3>
        <p><strong>校級短期研究計畫 </strong></p>
        <p><strong>University-level Short-term <br>Research Programs</strong></p>
        </h3>
        <img
        src="<?php echo get_template_directory_uri()?>/images/student_abroad/cloud0.webp">
        </div>
        </a>
        <div class="inner_context">
        <div>
        <p class="has-small-font-size">申請至姊妹校與國外接待教授進行短期研究。</p>
        </div>
        <div>
        <p class="has-small-font-size">聯絡資訊</p>
        <p class="has-small-font-size">國際事務處賴如馨小姐</p>
        <p class="has-small-font-size">03-5712121 #50665 </p>
        <p class="has-small-font-size">jhlaic@nycu.edu.tw</p>
        </div>
        </div>
    </div>
    <div class="wp-block-column">
        <div class="small_title">
        <h3>
        <p><strong>理學院實習研究計畫 </strong></p>
        <p><strong>COS-MPI Internship Program</strong></p>
        </h3>
        <img
        src="<?php echo get_template_directory_uri()?>/images/student_abroad/cloud0.webp">
        </div>
        <div class="inner_context">
        <div>
        <p class="has-small-font-size">
            學生可申請為期3個月至1年赴德國馬克斯普朗克研究院固態化學物理研究所(MPI-CPfS)實習，由馬克思普朗克研究院補助實習費用。每年開放申請期間及相關事項，公告於本院網頁最新消息區。</p>
        </div>
        <div>
        <p class="has-small-font-size">聯絡資訊</p>
        <p class="has-small-font-size">理學院謝培禹小姐</p>
        <p class="has-small-font-size">03-5712121 #56003 </p>
        <p class="has-small-font-size">page54@nycu.edu.tw</p>
        </div>
        </div>
    </div>
</div>

<div class="p_wrapper">
    <div id="short_term_course" class="field_wrapper">
        <h2><strong>三、姊妹校短期課程</strong></h2><img
            src="<?php echo get_template_directory_uri()?>/images/student_abroad/cloud3.webp">
    </div>
    <div class="inner_context">
    <div>
    <p>學生可申請寒暑假修讀一至數週姊妹校開授之實體或線上短期課程，大部分為自費計畫，課程如有學分需經系所採認方可抵免。目前國際處亦提供線上課程補助。</p>
    <a href="https://oia.nycu.edu.tw/study-abroad/short-course/">短期課程列表</a>
    </div>
    <div>
    <p class="has-small-font-size">聯絡資訊</p>
    <p class="has-small-font-size">國際事務處周秋儀小姐</p>
    <p class="has-small-font-size">03-5712121 #50059 </p>
    <p class="has-small-font-size">cherrie@nycu.edu.tw</p>
    </div>
    </div>
</div>


<div class="p_wrapper">
    <div id="overseas" class="field_wrapper">
        <h2><strong>四、海外實習</strong></h2><img
            src="<?php echo get_template_directory_uri()?>/images/student_abroad/cloud4.webp">
    </div>
    <div class="inner_context">
    <div>
    <p>透過本校與國際合作單位簽訂之合作計畫，學生可赴國外企業、機構進行職場實習。</p>
    </div>
    <div>
    <p class="has-small-font-size">聯絡資訊</p>
    <p class="has-small-font-size">國際事務處黃垚馨小姐</p>
    <p class="has-small-font-size">03-5712121 #50070 </p>
    <p class="has-small-font-size">anitahuang@nycu.edu.tw</p>
    </div>
    </div>
</div>


<div id="dual_degree" class="field_wrapper">
    <h2><strong>五、雙聯學位</strong></h2><img
        src="<?php echo get_template_directory_uri()?>/images/student_abroad/cloud5.webp">
</div>
<div class="wp-block-columns">
    <div class="wp-block-column">
        <div class="small_title">
        <h3>
        <p><strong>校級雙聯學位計畫 </strong></p>
        <p><strong>University-Level Dual Degree Programs</strong></p>
        </h3>
        <img
        src="<?php echo get_template_directory_uri()?>/images/student_abroad/cloud0.webp">
        </div>
        <div class="inner_context">
        <div>
        <p class="has-small-font-size">
            透過本校與境外大學合作簽訂雙聯學位合約，符合資格之學生得以提出申請，經對方學校審查同意，赴國外修讀學位。進修符合雙方畢業資格規定者，分別由兩校授予相同層級或不同層級之學位。</p>
        </div>
        <div>
        <p class="has-small-font-size">聯絡資訊</p>
        <p class="has-small-font-size">國際事務處翁瑋璟小姐</p>
        <p class="has-small-font-size">02-28267000 #62108 </p>
        <p class="has-small-font-size">wongmrk@nycu.edu.tw</p>
        </div>
        </div>
    </div>
    <div class="wp-block-column">
        <div class="small_title">
        <h3>
        <p><strong>理學院雙聯學位計畫　</strong></p>
        <p><strong>COS Dual Degree Programs</strong></p>
        </h3>
        <img
        src="<?php echo get_template_directory_uri()?>/images/student_abroad/cloud0.webp">
        </div>
        <div class="inner_context">
        <div>
        <p class="has-small-font-size">理學院與以下學術單位訂有雙聯學位合約：</p>
        <p class="has-small-font-size">(1)比利時魯汶大學碩士雙聯學位(College of Science, KU Leuven)</p>
        <p class="has-small-font-size">(2)日本埼玉大學碩士、博士雙聯學位(The Graduate School of Science and　Engineering, Saitama
            University)</p>
        <p class="has-small-font-size">(3)日本千葉大學(大學院工學研究科、工學部(Graduate School of Science and Engineering &amp;
            Faculty
            of Engineering, Chiba University)博士雙聯學位</p>
        </div>
        <div>
        <p class="has-small-font-size">詳細申請方式及相關問題，請來信理學院page54@nycu.edu.tw詢問進一步細節資訊。</p>
        </div>
        </div>
    </div>
</div>

<div class="p_wrapper">
    <div id="virtual" class="field_wrapper">
        <h2><strong>六、國外校際選修線上課程</strong></h2><img
            src="<?php echo get_template_directory_uri()?>/images/student_abroad/cloud6.webp">
    </div>
    <div class="inner_context">
    <div>
    <p>國外校際選修提供學生以遠距方式選修國外姐妹校之英語授課線上課程。國外校際選修線上課程皆應登錄成績，且可申請抵免本校學分。</p>
    </div>
    <div>
    <p class="has-small-font-size">聯絡資訊</p>
    <p class="has-small-font-size">國際事務處周秋儀小姐</p>
    <p class="has-small-font-size">03-5712121 #50059 </p>
    <p class="has-small-font-size">cherrie@nycu.edu.tw</p>
    </div>
    </div>
</div>

    
    </div>
    <?php if( is_single() ) { get_template_part('include/template-parts/post', 'sidebar'); } ?>
</div>

<?php endwhile; ?>
<!-- End of the loop. -->

<?php if ( is_post_in_category('news', $post_id) ) { get_template_part('include/template-parts/post', 'nav-list'); } ?>

</div>

<style>
    h1{
        margin-bottom: 3rem;
        font-size: 2.5rem;
    }
    section{
        padding-top: 10rem;
        display: flex;
        flex-direction: row;
    }
    section:first-of-type{
        padding-top: 5rem;
    }
    section .right_block_left{
        flex: 2;
    }
    section .right_block_right{
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: end;
    }
    section hr{
        margin-bottom: 5rem;
    }
    section img{
        height: 180px;
    }
    main{
        padding: unset;
        display: flex;
        flex-direction: row;
    }
    .left_block{
        padding-left: 3%;
        flex: 1;
    }
    .left_sb{
        position: sticky;
        top: 10rem;
        display: block;
    }
    .left_sb a{
        display: inline-block;
        width: 100%;
        font-size: 1.125rem;
        font-weight: 400;
        color: rgb(var(--dark));
        line-height: 3;
        letter-spacing: 2.7px;
        border-left: solid 2px rgb(var(--hr-gray));
        padding-left: .5rem;
    }
    .office_addr{
        font-weight: 500;
    }
    .right_block{
        flex: 4;
        padding-left: 1rem;
    }
    section h2::after{
        content: "";
        display: inline-block;
        width: 1rem;
        height: 1rem;
        background-size: 1rem 1rem;
        background-image: url(<?php bloginfo('template_url');
        ?>/images/octicons.svg);
    }
    p{
        text-align: justify;
    }
    /*for screen size like iPhone5*/
    @media only screen and (max-width: 1440px) and (min-width: 769px) {
        section{
            padding-top: 5rem;
        }
        section:first-of-type{
            padding-top: 5rem;
        }
    }
    @media only screen and (max-width: 768px) {
        .left_sb_a{
            display: none!important;
        }
        main {
            flex-direction: column;
        }
        section {
            padding-top: 10rem;
            display: flex;
            flex-direction: column;
        }
        .left_block, .right_block{
            padding: 0 10%;
        }
    }
</style>
<?php get_footer(); ?>
