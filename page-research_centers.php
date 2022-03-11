<?php get_header();?>
<h1>研究中心</h1>

<div class="card_wrapper">


<section>
<a href="https://yaucenter.web.nctu.edu.tw/">
    <div class="block_left">
    <img src="<?php echo get_template_directory_uri()?>/images/research_center/1.webp" alt="">
    </div>
    <div class="block_right">
    <h2>丘成桐中心<br>Shing-Tung Yau Center</h2>
    <p>
    <br>
    藉助當代華人數學家丘成桐院士在數學及科學的傑出研究貢獻，本校邀請丘院士共同推動科技、教育及文化事業，與理學院合作，於2012年正式成立「丘成桐中心」。秉持設立宗旨，「丘成桐中心」致力於推廣數學及科學教育；厚植本校研發能量。中心目前有「三維影像」、「生醫影像」、「幾何與數論」、「弦論及廣義相對論研究群」四個研究群，研究成果卓越，為理學院接待國內外訪客及高中參訪的重點中心；中心亦出版「數理人文期刊」，積極投入科普教育與前沿科技推廣的工作。
    </p>
    </div>
</a>
</section>



<section>
<a href="https://cefms.web.nycu.edu.tw/">
    <div class="block_left">
    <img src="<?php echo get_template_directory_uri()?>/images/research_center/2.webp" alt="">
    </div>
    <div class="block_right">
    <h2>新世代功能性物質研究中心 (校級)<br>Center for Emergent Functional Matter Science, CEFMS</h2>
    <p>
    <br>
    「新世代功能性物質研究中心」係由教育部頂尖大學計畫中所設立之「前瞻跨領域基礎科學中心」進一步整合發展而成。過去十年來，「前瞻跨領域基礎科學中心」在延攬人才方面、研究成果、國際合作及產學合作上，都有長足進展。在深耕計畫中，「新世代功能性物質研究中心」進一步整合原有團隊，並加入多位傑出新血，同時持續延攬國際人才，聚焦於功能性物質及柔性電子之研究及應用，從事新世代「綠能材料及柔性元件」，「智慧生醫檢測及柔性電子技術」，及「創新智慧元件」三個面向的開發研究；重點發展切合國家發展需要及世界研究潮流，之題材。
    </p>
    </div>
</a>
</section>



<section>
<a href="https://ctcp.science.nycu.edu.tw/">
    <div class="block_left">
    <img src="<?php echo get_template_directory_uri()?>/images/research_center/3.webp" alt="">
    </div>
    <div class="block_right">
    <h2>理論與計算物理研究中心<br>Center for Theoretical and Computational Physics</h2>
    <p>
    <br>
    「理論與計算物理中心」成立於2020年；結合本校理論與計算物理領域教研人員以及國家理論科學中心(NCTS)專家學者所長，專注於新穎量子物質與科技之基礎研究。在國家理論科學中心的研究經費挹注下，「理論與計算物理中心」以協助厚植本校學術研發能量，進而強化台灣理論物理領域之研發能力為設立宗旨而成立。現有「拓樸量子物質基礎物理」、「新穎量子材料之理論與計算模擬」、「強關聯電子系統之新穎量子態」、「晶格規範場論與計算物理」四個研究群；中心將積極進行跨領域項目之間的合作，以促進理論與實驗的整合，進一步擴大及深化研究成果。
    </p>
    </div>
</a>
</section>


</div>

<style>
    h1 {
        font-size: 3.125rem;
        margin-bottom: 100px;
    }

    h2 {
        font-size: 1.5rem;
    }

    main section a {
        display: flex;
        flex-direction: row;
        height: 24rem;
        margin-bottom: 50px;
        border-radius: 10px;
        overflow: hidden;
        color: rgb(var(--white));
    }

    main section img {
        height: 100%;
    }

    main section:nth-of-type(even) a {
        flex-direction: row-reverse;
    }

    main section p {
        font-size: 1.125rem;
    }

    .block_left {
        display: contents;
    }

    .block_right {
        flex-grow: 1;
        padding: 2rem;
        background-color: rgb(var(--dark));
    }

    @media only screen and (max-width: 1440px) and (min-width: 769px) {
        main section p {
        font-size: 1rem;
        }
    }
</style>
<?php get_footer(); ?>
