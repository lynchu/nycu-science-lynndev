<?php
get_header();
// Start the Loop
?>

<div id="post-title-area">
    <h1 id="post-title"><?php the_title(); ?></h1>
    <div id="top-right-rect"></div>
</div>
<div class="horizontal-divider"></div>
<div id="first-row">
    <div class="subtitle">
        <h2>學院簡介與概況</h2>
    </div>
    <div class="flex-container">
        <p>
            陽明交通大學理學院成立於1979年。自成立以來，理學院始終堅持紮實的基礎科學訓練和創新的科技應用之研究與教學。40多年來的苦心經營與成長發展，理學院已成為國內重要的學術研發與人才培育重鎮，在台灣高等教育與跨領域創新研究奠定無可取代的地位。
            <br>
            <br>
            理學院之組成設有3系7所，分別為電子物理系所、應用數學系所、數學建模與科學計算研究所、應用化學系所、分子科學研究所、統計學研究所、物理研究所，另設2學程，分別為科學學士學位學程、永續化學科技國際研究生博士學位學程(與中央研究院化學研究所合作成立)，以及碩士在職專班。
        </p> 
        <img id="first-row-img" src="<?php echo get_template_directory_uri()?>/images/about/1.webp" alt="">
    </div>
</div>
<div class="flex-container" id="second-row">
    <div class="flex-container-vertical">
        <div class="subtitle">
            <h2>設立宗旨</h2>
        </div>
        <div class="flex-container quote-flex-container">
            <img class="quotation-img" src="<?php echo get_template_directory_uri()?>/images/about/Cquote1_blue.svg" alt=""></img>
            <ul id="second-row-ul">
                <li>堅持教學與研究，學術與應用並重。</li>
                <li>人文心、科技情；注重人文與科技結合。</li>
                <li>建立優異的學術訓練與研究的軟硬體設施。</li>
                <li>培養全方位研究與領導人才。</li>
            </ul>
            <img class="quotation-img" src="<?php echo get_template_directory_uri()?>/images/about/Cquote2_blue.svg" alt=""></img>
        </div>
    </div>
    <div id="second-row-img"></div>
</div>

<div class="flex-container" id="third-row">
    <div id="third-row-img"></div>
    <div class="flex-container-vertical">
        <div class="subtitle">
            <h2>教育目標</h2>
        </div>
        <div class="flex-container quote-flex-container">
            <img class="quotation-img" src="<?php echo get_template_directory_uri()?>/images/about/Cquote1_blue.svg" alt=""></img>
            <p>
                培育具國際觀之跨領域科技人才，以開創創新研究和產業發展。
            </p>
            <img class="quotation-img" src="<?php echo get_template_directory_uri()?>/images/about/Cquote2_blue.svg" alt=""></img>
        </div>
    </div>
</div>
<div id="forth-row">
    <div class="subtitle">
        <h2>未來展望</h2>
    </div>
    <p>理學院在院務發展上為教學與研究並重。為培育全方位人才，以著重專業學科訓練為根基，結合跨領域、科技應用以及與產業接軌的能力訓練，積極規劃多元延伸課程，透過參與獨立或團隊合作之研究，學生將具備卓越學術知識之素養，以及創新科技的核心能力。同時藉由推動國際化和深化國際研究合作機制，更得以拓展學生國際視野、培養溝通與統合的領導能力。
    <br><br>
    理學院師資陣容堅實，為學院提供優質教學的保證，研究成果卓越，帶領研究團隊持續在國際尖端科學領域挹注研究動能，產出質量論文、領先科技研發，具有高度的學術影響力。教授群含多位國際專業學會會士(APS Fellow, RSC Fellow, OSA Fellow, Advance HE)，擔任國際重要期刊編輯，並獲得國內外重要學術獎項，如教育部國家講座及學術獎、總統科學獎、科技部傑出研究獎、中山學術獎、吳大猷先生紀念獎等。理學院亦力邀國際一流學者加入學院的研究團隊，延攬其擔任本院講座及客座教授，為國際研究合作與教育注入最真實的動力。
    <br><br>
    在自我定位方面，鑒於“人文心、科技情”的教育理念，期望將科技與人文結合，創造一個多元與融合、深耕與前瞻的卓越學術環境，培育具有專業知識、人文關懷及國際視野的領導人才，對國家社會作出具體的貢獻。
    </p>
</div>
<div id="testing"></div>

<!-- End of the loop. -->
<style>
    #testing
    {
        max-width: 24vw;
        height: auto;
    }
    .subtitle h2
    {
        font-size: 1.475rem;
        font-weight: bold;
        margin-bottom: 30px;
        text-align: center;
    }
    .flex-container
    {
        display: flex;
        justify-content: space-between;
        flex-wrap: nowrap;
        box-sizing: border-box;
        align-items: center; 
    }
    .flex-container-vertical
    {
        display: flex;
        flex-direction: column;
        align-items: center; 
        justify-content: space-between;
        box-sizing: border-box;
        width: 40vw;
    }
    .flex-container-vertical>.subtitle
    {
        width: 35vw;
    }
    .quote-flex-container
    {
        align-items: flex-start; 
        margin-bottom: 0;
        width: 40vw;
    }
    .quotation-img
    {
        max-width: 1.75vw;
        height: auto;
        padding-top: 60px;
    }
    #first-row, #third-row
    {
        margin-bottom: 200px;
    }
    #first-row p
    {
        font-size: 1.05rem;
        line-height: 2.2rem;
        max-width: 45%;
    }
    #first-row h2
    {
        text-align: left;
    }
    #second-row
    {
        margin-bottom: 100px;
    }
    #second-row ul
    {
        font-size: 1.25rem;
        width: 35vw;
        padding-left: 5vw;
    }
    #third-row .quotation-img
    {
        padding-top: 20px;
    }
    #third-row p
    {
        text-align: center;
        font-size: 1.25rem;
        width: 35vw;
        padding-left: 2.5vw;
        padding-right: 2.5vw;
    }
    #forth-row p
    {
        font-size: 1.05rem;
        line-height: 2.2rem;
    }
    #first-row-img
    {
        max-width: 50%;
        height: auto;
    }
    #second-row-img
    {
        max-width: 24vw;
        height: auto;
        margin-right: 7vw;
    }
    #third-row-img
    {
        max-width: 24vw;
        height: auto;
        margin-left: 7vw;
    }
    @media only screen and (max-width: 767px)
    {
        .flex-container
        {
            flex-direction: column;
        }
        #first-row
        {
            max-height: 100vh;
            margin-bottom: 50px;
        }
        #first-row p
        {
            max-width: 100vw;
            margin-bottom: 20px;
        }
        #first-row-img
        {
            max-width: 80vw;
        }
        #second-row ul
        {
            margin-left:auto;
            margin-right: auto;
            width: auto;
        }
        #second-row, #third-row
        {
            margin-bottom: 50px;
        }
        #third-row
        {
            flex-direction: column-reverse;
        }
        #third-row p
        {
            margin-left:auto;
            margin-right: auto;
            width: 80vw;
            margin-bottom: 50px;
        }
        .quote-flex-container
        {

            justify-content: center;
            width: 100vw;
        }
        .quotation-img
        {
            display: none;
        }
        #second-row-img, #third-row-img
        {
            max-width: 60vw;
            margin-right: 0;
            margin-left: 0;
        }
    }

</style>


<?php 
get_footer();
?>

