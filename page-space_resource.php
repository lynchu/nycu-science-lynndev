<?php
get_header();
?>

<div id="post-title-area">
    <div class="horizontal-line1"></div>
    <h3 id="post-title">場地資源</h3>
    <div class="horizontal-line2"></div>
</div>

<div id="tag">
    <img id="tag-img" src="<?php echo get_template_directory_uri()?>/images/space_resource/polygon/1.webp" alt="" title="理學院會議室">
    <span id="tag-title">理學院會議室</span>
</div>
<div id="space1">
    <div class="icon locat">科學三館102室</div>
    <div class="icon capa" >25人</div>
    <div class="icon agen" >理學院</div>
</div>

<div id="tag2">
    <img id="tag-img" src="<?php echo get_template_directory_uri()?>/images/space_resource/polygon/1.webp" alt="" title="次軒廳">
    <span id="tag-title">次軒廳</span>
</div>
<div id="space2">
    <div class="icon locat">科學三館B1 001室</div>
    <div class="icon capa" >221人</div>
    <div class="icon agen" >電子物理系</div>
</div>

<div id="tag2">
    <img id="tag-img" src="<?php echo get_template_directory_uri()?>/images/space_resource/polygon/1.webp" alt="" title="210會議室">
    <span id="tag-title">210會議室</span>
</div>
<div id="space3">
    <div class="icon locat">科學二館210室</div>
    <div class="icon capa" >120人</div>
    <div class="icon agen" >應用化學系</div>
</div>

<style>
    #post-title-area{
        display: flex;
        justify-content: space-between;
    }
    #post-title{
        margin: 0 0;
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
    #tag{
        position: relative;
    }
    #tag2{
        position: relative;
        margin-top: 150px;
    }
    #tag-img{
        max-width: 25%;
        display:block; 
        margin: auto;
    }
    #tag-title{
        position: absolute;
        font-size: 1.5rem;
        top:60%; 
        left:50%;
        transform: translate(-50%, -50%);
        color:#f5f5f5
    }
    #space1{
        display: flex;
        align-items: end;
        flex-direction: row;
        margin-bottom: 100px;
        border-radius: 20px;
        overflow: hidden;
        max-width: 100%;
        height: 400px;
        background-image: linear-gradient(to bottom, rgba(13, 25, 34, 0.01), rgb(var(--dark))), url(<?php bloginfo('template_url')?>/images/space_resource/conference_hall1/1.png);
    }
    #space2{
        display: flex;
        align-items: end;
        flex-direction: row;
        margin-bottom: 100px;
        border-radius: 20px;
        overflow: hidden;
        max-width: 100%;
        height: 400px;
        background-image: linear-gradient(to bottom, rgba(13, 25, 34, 0.01), rgb(var(--dark))), url(<?php bloginfo('template_url')?>/images/space_resource/conference_hall2/1.png);
    }
    #space3{
        display: flex;
        align-items: end;
        flex-direction: row;
        margin-bottom: 100px;
        border-radius: 20px;
        overflow: hidden;
        max-width: 100%;
        height: 400px;
        background-image: linear-gradient(to bottom, rgba(13, 25, 34, 0.01), rgb(var(--dark))), url(<?php bloginfo('template_url')?>/images/space_resource/conference_hall3/1.png);
    }
    /*
    <img src="<?php echo get_template_directory_uri()?>/images/space_resource/conference_hall1/1.png" alt="">
    .space > img ::before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: linear-gradient(to bottom, rgba(13, 25, 34, 0.01), rgb(var(--dark)));
        z-index: 2;
    }
    .space > img {
        justify-content: center;
        max-width: 100%;
        height: auto;
        position: relative;
        z-index: 1;
    }
    */
    .icon{
        font-weight: normal;
        font-size: 16px;
        text-align: left;
        color: #f5f5f5;
        margin-bottom: 60px !important;
        position: relative;
        display: flex;
        vertical-align: sub;
    } 
    .icon::before{
        vertical-align: bottom;
        display: flex;
        margin: 0 10px 0 0;
        width: 22px;
        height: 22px;
    } 
    .locat::before{
        content: "";
        display: inline-block;
        vertical-align: bottom;
        background-size: 1.3rem 1.3rem;
        background-image: url(<?php bloginfo('template_url')?>/images/space_resource/location/Location.png);
        background-repeat: no-repeat;
        margin: 0 5px 0 50px;
    }
    .capa::before{
        content: "";
        display: inline-block;
        vertical-align: bottom;
        background-size: 1.3rem 1.3rem;
        background-image: url(<?php bloginfo('template_url')?>/images/space_resource/capacity/numbers.png) ;
        background-repeat: no-repeat;
        margin: 0 5px 0 30px;
    }
    .agen::before{
        content: "";
        display: inline-block;
        vertical-align: bottom;
        background-size: 1.3rem 1.3rem;
        background-image: url(<?php bloginfo('template_url')?>/images/space_resource/agencies/agencies.png) ;
        background-repeat: no-repeat;
        margin: 0 5px 0 30px;
    }
</style>

<?php 
get_footer();
?>