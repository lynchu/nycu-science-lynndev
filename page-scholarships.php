<?php
get_header();
?>

<div id="post-title-area">
    <div class="horizontal-line1"></div>
    <h3 id="post-title">獎助學金</h3>
    <div class="horizontal-line2"></div>
</div>

<div class="category">
    <p>校內獎學金</p>
    <img src="<?php echo get_template_directory_uri()?>/images/scholarships/pic1/1.png" alt="">
</div>
<div class="block">
    <div class="left_b">
        <p>為鼓勵優秀學生或表現優異之弱勢家庭學子，在其求學期間能秉持努力不懈的態度，安心學習並激發其最大學習動能，以達到人才培育的高教目標；同時，為爭取各級優秀人才選讀理學院，本院各系所積極爭取校內外已設置的獎學金名額，更主動提案「指定用途獎學金」，向創業有成的學長姐尋求捐資，以嘉惠在學學生。關於本院各系所獎助學金相關資訊，可參考各系所網頁公告。
        </p>
    </div>
    <div class="right_b" id="rb1">
        <a href="https://ep.nycu.edu.tw/category/announcement/scholarships_and_aid/">電子物理系</a>
        <a href="https://www.math.nycu.edu.tw/student/scholarship.php">應用數學系</a>
        <a href="https://dac.nycu.edu.tw/admissions/01-undergraduate">應用化學系</a>
        <a href="https://ord.nycu.edu.tw/regulation">研發企劃組</a>
        <a href="https://scahss.sa.nycu.edu.tw/?page_id=340">生活輔導組</a>
        <a href="https://science.nycu.edu.tw/regulations/">理學院</a>
    </div>
</div>

<div class="category">
    <p>校外獎學金</p>
    <img src="<?php echo get_template_directory_uri()?>/images/scholarships/pic2/1.png" alt="">
</div>
<div class="block">
    <div class="left_b">
        <p>本校獎助學金來源，除了學校、政府編列預算提供外，有越來越多來自企業、社團組織、個人慷慨捐資；無論是基於公益慈善而回饋社會，或飲水思源回饋母校，捐贈者之初心與意義令人敬佩；對受惠學生而言更是彌足珍貴的機會。由校友、企業或民間熱心人士提供的獎學金供學生申請資訊，可參閱生輔組獎學金申請網站或各系所獎學金公告區。
        </p>
    </div>
    <div class="right_b" id="rb2">
        <a href="https://sasystem.nycu.edu.tw/scholarship/">生活輔導組</a>
    </div>
</div>

<div class="category">
    <p>出國交流／交換獎助辦法</p>
    <img src="<?php echo get_template_directory_uri()?>/images/scholarships/pic3/1.png" alt="">
</div>
<div class="block">
    <div class="left_b">
        <p>本校積極推動師生與國際學界互訪，鼓勵學生赴國外知名學府及實驗室交流、交換與參與研究，以期培養學生宏觀視野與外文溝通能力，提昇其國際競爭力。相關補助規定及申請方式，請洽本校國際事務處、研發企劃組網頁公告。
        </p>
    </div>
    <div class="right_b" id="rb3">
        <a href="https://oia.nycu.edu.tw/study-abroad/scholarship/">國際事務處</a>
        <a href="https://ord.nycu.edu.tw/regulation">研發企劃組</a>
    </div>
</div>
<style>
    #post-title-area{
        display: flex;
        justify-content: space-between;
    }
    #post-title{
        margin: 0 0;
        padding: 0;
        text-align: center;
        font-size: 2.5rem;
        word-break: keep-all;
    }
    .horizontal-line1{
        width: 80%;
        height: 0;
        margin: 30px 0;
        border: solid 1px rgb(var(--hr-gray));
        background-color: rgb(var(--hr-gray));
    }
    .horizontal-line2{
        width: 80%;
        height: 0;
        margin: 30px 0;
        border: solid 1px rgb(var(--hr-gray));
        background-color: rgb(var(--hr-gray));
    }
    .category{
        max-width: 100%;
        height: 200px;
        background-color: #efece6;
        border-radius: 20px;
        display: flex;
        justify-content: space-between;
    }
    .category > p{
        margin-left: 10%;
        font-weight: bold;
        font-size: 2.5rem;
        word-break: keep-all;
        display: flex;
        align-items: center;
    }
    .category > img{
        margin-top: 5%;
        margin-right: 10%;
        display: flex;
        /*max-width: 40%;
        height: auto;*/
        overflow: hidden;
        justify-content: center;
    }
    .block{
        display: flex;
        flex-direction: row;
        padding-top: 60px;
        padding-bottom: 60px;
    }
    .left_b{
        flex: 11;
        padding-left: 3%;
        padding-right: 2%;
    }
    .left_b > p{
        font-size: 1.375rem;
    }
    .right_b{
        flex: 9;
        padding-left: 2%;
        padding-right: 3%;
        display: flex;
        align-items: center; 
        text-align: center;
    }
    #rb1{
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 1fr 1fr;
        gap: 30px;
        background-color: #f6f3ea;
    }
    #rb2{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #rb3{
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr;
        gap: 30px;
        background-color: #f6f3ea;
    }
    #rb2 > a{
        margin: 15px;
    }
    .right_b > a {
        text-align: center;
        color: #0d1922;
        padding: 20px;
        border-radius: 20px;
        box-shadow: 1px 2px 3px 0px;
    }
    .right_b > a::after{
        content: "";
        display: inline-block;
        vertical-align: bottom;
        float: bottom;
        width: 24px;
        height: 24px;
        background-size: 1.4rem 1.4rem;
        background-image: url(<?php bloginfo('template_url')?>/images/scholarships/right_arrow/3@3x.png);
        background-repeat: no-repeat;
        margin-left: 5px;
    }

    @media only screen and (max-width: 1100px){
        .right_b > div {
            letter-spacing: 2.5px;
            padding: 14px;
            border-radius: 16px;
        }
        #rb1, rb3{
            gap: 15px;
        }
    }
    @media only screen and (max-width: 920px) {
        .right_b > div {
            letter-spacing: 2px;
            padding: 10px ;
        }
    }
    @media only screen and (max-width: 540px){
        #post-title{
            font-size: 0.75rem;
            letter-spacing: 3px;
        }
        .horizontal-line1, .horizontal-line2{
            margin: 10px 0;
            width: 500px;
        }
        .block{
            flex-direction: column;
            padding: 10% 0;
        }
        .right_b{
            padding-top: 5%;
        }
        .category > img{
            position: relative;
            max-width: 30%;
            max-height: 60%;
        }

    }
</style>

<?php 
get_footer();
?>