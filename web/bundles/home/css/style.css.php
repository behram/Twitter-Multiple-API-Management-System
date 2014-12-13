<?php header('Content-type: text/css'); ?>
@charset "utf-8";
/* Clearfix */
.clearfix:after { content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0; }
.clearfix { display: inline-block; }
html[xmlns] .clearfix { display: block; }
* html .clearfix { height: 1%;}

/* CSS Document */
* { margin:0; padding:0 }
ul,ol,li { list-style-type:none; }
.clear { clear:both; height:0; font-size:0; line-height:0; }
a { text-decoration:none; }
a img { border: none; }
a:focus, input:focus, textarea:focus { outline:0; }
.ortala { width:980px; margin:0 auto; }

body { background:#eee; font-family:'Lato', sans-serif; }
#header { height:67px; background:#fff; }
#search-form { width:363px; height:38px; float:right; padding-top:10px; }
#search-form .inputtxt { width:311px; height:18px; padding:10px 10px; border:0; background:url(../img/search-bg.png); float:left; }
#search-form .inputbtn { width:32px; height:38px; border:0; background:url(../img/search-bg.png) no-repeat right 0; float:right; }
.logo { width:104px; height:23px; padding:18px 0 0 7px; float:left; }

#recent-activities { float:right; padding-top:26px; height:18px;min-width:580px; }
#recent-activities label { float:left; font-size:14px; color:#475354; font-weight:700; padding-right:25px; background:url(../img/twitter-ikon1.png) no-repeat right center; margin-right:10px;}
#recent-activities ul { float:left; }
#recent-activities ul li { font-size:14px; font-weight:700; line-height:18px; }
#recent-activities ul li > div { display:table-cell; vertical-align:top; }
#recent-activities ul li img { float:left; border:0px; border-radius:3px; -webkit-border-radius:3px; -moz-border-radius:3px; width:18px; height:17px; margin-right:5px; }
#recent-activities ul li span { float:left; padding:0 10px; color:#7d8182; }
#recent-activities ul li a { float:left; color:#d7587c; height:18px; display:inline-block; }
#signinband { background:#ddd7cc url(../img/signinband-bg.png) no-repeat center top; height:412px; color:#7a746a; }
#signinband .bigbird { width:382px; height:412px; float:left; }
#signinband .bigbird img{ width:100%;margin-top: 15px; }
#signinband .text { width:598px; height:385px; float:right; padding-top:27px; }
#signinband .text .text1 { font-size:19px; line-height:40px; font-weight:400;background : rgba(255,255,255,0.2);padding-left : 20px;  }
#signinband .text .text2 { font-size:29px; line-height:45px; margin-bottom:20px; font-weight:300;background : rgba(255,255,255,0.2);padding-left : 20px; }
#signinband .text .text2 span { color:#00b7c3; font-weight:900; }
#signinband .signinbutton { width:304px; height:60px; display:block; margin:0 0 40px 144px; text-indent:-9999px; background:url(../img/signinbutton.png) }
#signinband .list { float:left; }
#signinband .list h2 { font-size:14px; font-weight:700; line-height:15px; background:url(../img/bullet1.png) no-repeat left center; padding-left:12px; margin-bottom:26px; }
#home-content { padding-top:25px; color:#7a746a; font-size:12px; font-weight:400; }
#home-content .title1 { color:#00b7c3; font-weight:900; font-size:26px; line-height:28px; margin-bottom:10px; }
.homebox { width:480px; height:95px; float:left; margin-bottom:45px; }
.homebox .title { color:#d7587c; font-size:23px; margin-bottom:12px; font-weight:700; }
.homebox ul li { float:left; background:url(../img/homebox-list.png) no-repeat; font-size:12px; line-height:16px; height:16px; padding:18px 0 18px 62px; font-weight:900; }
.homebox ul li.picture { width:144px; }
.homebox ul li.bio { width:140px; background-position:0 -52px; }
.homebox ul li.follower { width:140px; background-position:0 -104px; }
.homebox ul li.tweets { width:210px; background-position:0 -156px; }
.homebox2 { border:0px; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.16); width:480px; min-height:142px; float:left; background:#fff; color:#918b81; margin-bottom:10px; }
.homebox2 p { height:29px; }
.homebox2.latest20 { width:460px; height:128px; padding:14px 6px 0 14px; background:#fff url(../img/latest20-bg.png) no-repeat right top; margin-right:15px; }
.homebox2.latest20 p { font-size:14px; font-weight:900; }
.homebox2.latest20 a { width:33px; height:33px; background:#f4f4f4; float:left; display:block; border:0px; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; margin-right:8px; margin-bottom:7px; }
.homebox2.latest20 a img { width:33px; height:33px; border:0px; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; }
.homebox2.interests { width:466px; height:128px; padding:14px 0 0 14px; float:right; }
.homebox2.interests p { font-size:16px; font-weight:900; }
.homebox2.interests a { display:block; float:left; height:20px; line-height:20px; font-size:18px; font-weight:900; color:#fff; min-width:105px; text-align:center; padding:7px 5px; border:0px; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; margin-bottom:9px; margin-right:22px;}
.homebox2.interests a.pink { background:#d7587c; }
.homebox2.interests a.red { background:red; }
.homebox2.interests a.green { background:green; }
#otherssay { width:954px; height:35px; padding:11px 11px 10px 15px; background:#fff; box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.16); border:0px; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; margin-bottom:50px; }
#otherssay > label.what { font-size:18px; color:#39a1b8; line-height:21px; height:21px; display:block; float:left; width:160px; padding:7px 0; font-weight:900; }
#otherssay .whatbtns { width:76px; float:right; height:35px; }
#otherssay .whatbtns a { width:36px; height:35px; display:block; text-indent:-9999px; float:left; background:url(../img/whatbtns.png) no-repeat; }
#otherssay .whatbtns a.prev { margin-right:4px; }
#otherssay .whatbtns a.next { background-position:-40px 0; }
#otherssay .whatbtns a.prev:hover { background-position:0 -35px; }
#otherssay .whatbtns a.next:hover { background-position:-40px -35px; }
#otherssay .whatbtns a:focus { outline:0 }
#otherssay .saying { float:left; height:21px; width:718px; line-height:21px; margin:7px 0; overflow:hidden; }
#otherssay .saying ul { width:718px; height:21px; }
#otherssay .saying ul li { height:21px; width:708px; padding-right:10px; }
#otherssay .saying ul li label { font-size:18px; line-height:21px; font-weight:900; color:#d7587c; float:left; margin-right:20px; }
#otherssay .saying ul li span { font-size:11px; line-height:15px; padding:3px 0; font-weight:900; }
#otherssay .saying ul li .comm { width:21px; height:20px; margin-top:1px; display:block; float:right; background:url(../img/what-comment.png) no-repeat; text-indent:-9999px; }
.vip-plans-text { text-align:right; height:25px; font-size:12px; clear:both; color:#848484; }
.vip-plans-text a { color:#d7587c; font-weight:900; }

/** altsayfa **/
#subpage .ortala { width:1000px; }
#page-band { background:#ddd7cc url(../img/signinband-bg.png) no-repeat center top; height:118px; color:#7a746a; position:relative; }
.submenu { background:#f64f76; height:54px; padding-top:8px; box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.3); border:1px #e24d6d solid; border-top:0; -webkit-border-bottom-right-radius:5px; -webkit-border-bottom-left-radius:5px; -moz-border-radius-bottomright:5px; -moz-border-radius-bottomleft:5px; border-bottom-right-radius:5px; border-bottom-left-radius:5px; }
.submenu .col1, .submenu .col2, .submenu .col3, .submenu .col4 { float:left; color:#ffcad8; font-weight:700; font-size:14px; line-height:25px; text-align:center; }
.submenu .col1 a, .submenu .col2 a, .submenu .col3 a, .submenu .col4 a { color:#fff; }
.submenu .col1 { width:208px; }
.submenu .col2 { width:286px; }
.submenu .col3 { width:206px; }
.submenu .col4 { width:226px; }
.submenu .done { text-decoration:line-through !important; }
.submenu #uparrow { width:44px; height:44px; display:inline-block; }
#list-buttons { position:absolute; bottom:5px; }
#list-buttons a { width:35px; height:35px; float:left; display:block; margin-right:1px; background:url(../img/list-buttons.png) no-repeat; text-indent:-9999px; }
#list-buttons a.list2 { background-position:-36px 0; }
#list-buttons a.list3 { background-position:-73px 0; }
#list-buttons a.list1.active { background-position:0 -40px; }
#list-buttons a.list2.active { background-position:-36px -40px; }
#list-buttons a.list3.active { background-position:-73px -40px; }
.page-title { width:980px; padding:15px 10px 5px; margin:0 auto; font-size:36px; line-height:38px; }
.page-desc { width:980px; padding:0 10px; margin:0 auto; font-size:17px; line-height:18px; font-weight:300; }
.page-content { border:0; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; background:#fff; padding:9px 8px 0 7px; margin-bottom:110px; position:relative; }
.page-tabs { position:absolute; top:-40px; right:0; }
.page-tabs a { padding:10px 16px 12px; display:inline-block; font-size:16px; line-height:18px; font-weight:700; color:#7a746a; }
.page-tabs a.current { background:#e04967; color:#fff; -webkit-border-top-left-radius: 3px; -webkit-border-top-right-radius: 3px; -moz-border-radius-topleft: 3px; -moz-border-radius-topright: 3px; border-top-left-radius: 3px; border-top-right-radius: 3px; }
.page-content-title { border:0; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; background:url(../img/page-content-title-bg.png) repeat-x; height:20px; padding:13px; font-size:16px; line-height:20px; color:#fff; font-weight:bold; }
.page-content-box { padding:10px; font-size:13px; line-height:29px; color:#7a746a; }
#content { padding-top:15px; }
#new-people { background:#fff url(../img/new-people-bg.png) no-repeat 760px bottom ; width:976px; height:246px; padding:13px 10px 0 14px; box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.16); margin-bottom:12px; border:0px; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px;  }
#new-people .title { background:url(../img/twitter-ikon2.png) no-repeat; height:33px; line-height:33px; margin-top:8px; padding-left:42px; color:#d7587c; font-weight:700; font-size:27px; float:left; }
#new-people .title span { font-weight:300; }
#new-people .choose-btn { float:right; height:44px; width:235px; font-size:14px; line-height:18px; }
#new-people .choose-btn a { height:18px; line-height:18px; padding:13px 0; display:block; float:left; text-align:center; color:#918579; background:url(../img/choose-bg.png) no-repeat; font-weight:700; }
#new-people .choose-btn .btn1 { width:118px; }
#new-people .choose-btn .btn1.active { background-position:0 -44px; color:#fff; }
#new-people .choose-btn .btn2 { width:117px; background-position:right 0; }
#new-people .choose-btn .btn2.active { background-position:right -44px; color:#fff; }
.new-people-sep { clear:both; height:45px; font-size:0; line-height:0; }
#new-people-list { width:870px; margin-left:5px; float:left; height:98px; overflow:hidden; }
#new-people-list ul { width:870px; height:98px; }
#new-people-list ul li { width:280px; margin-right:10px; height:98px; float:left; }
#new-people-list ul li .frame { float:left; width:79px; height:80px; padding:9px; background:url(../img/new-people-frame.png) no-repeat; position:relative; }
#new-people-list ul li .frame .featured { width:58px; height:50px; background:url(../img/featured.png) no-repeat; display:block; position:absolute; z-index:5; }
#new-people-list ul li .frame img { width:79px; height:80px; background:#e5e5e5; border-radius:50%; }
#new-people-list ul li .info { float:left; width:170px; float:right; padding-top:20px; }
#new-people-list ul li .info p { color:#c1b6ab; font-size:13px; font-weight:700; margin-bottom:3px; }
#new-people-list ul li .info .name { color:#de4562; margin-bottom:15px; font-size:15px; font-weight:700; line-height:17px; display:block; }
#new-people-list ul li .info .star { display:inline-block; background:url(../img/new-people-icons.png) no-repeat; width:20px; height:20px; text-indent:-9999px; margin-right:2px; }
#new-people-list ul li .info .point { display:inline-block; background:url(../img/new-people-icons.png) no-repeat right top; width:20px; height:20px; text-indent:-9999px; margin-right:2px; }
#new-people-arrows { width:76px; height:35px; float:right; padding-top:30px; margin-right:14px;}
#new-people-arrows a { width:36px; height:35px; float:left; background:url(../img/new-people-arrows.png) no-repeat; display:block;}
#new-people-arrows a.prev { margin-right:4px; }
#new-people-arrows a.next { background-position:right 0; }
#new-people-arrows a.prev:hover { background-position:left -35px; }
#new-people-arrows a.next:hover { background-position:right -35px; }
#left-content { float:left; background:#fff; width:474px; padding:20px 14px 20px 17px; border:0px; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.16); margin-bottom:110px; color:#bfb4a9; }
.commentbox { margin-bottom:20px; clear:both; }
.commentbox .frame { width:69px; height:70px; background:url(../img/frame.png) no-repeat; padding:8px; float:left; margin-left:8px; }
.commentbox .frame .featured { width:58px; height:50px; background:url(../img/featured.png) no-repeat; display:block; position:absolute; z-index:5; }

.commentbox .frame img { width:69px; height:70px; border-radius:50%;}
.commentbox .comment { word-wrap:break-word; float:right; position:relative; width:345px; margin-top:3px; border:0px; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; background:#f2f0ee; color:#a7a7a7; font-size:11px; line-height:19px; min-height:53px; padding:12px; font-weight:bold; }
.commentbox .comment .arrow { position:absolute; width:10px; height:20px; background:url(../img/comment-arrow-left.png); display:block; left:-10px; top:30px; }
.commentbox .info { clear:both; padding-top:6px; float:left; }
.commentbox .info label { font-weight:bold; font-size:12px; color:#de4562; float:left; padding-left:5px; margin-right:15px; }
.commentbox .info label span { color:#c1b6ab; font-size:11px; }
.commentbox .icons { padding-top:6px; float:right; }
.commentbox .icons label { float:left; }
.commentbox .icons .star { display:inline-block; background:url(../img/new-people-icons.png) no-repeat; width:20px; height:20px; text-indent:-9999px; margin-left:4px; }
.commentbox .icons .point { display:inline-block; background:url(../img/new-people-icons.png) no-repeat right top; width:20px; height:20px; text-indent:-9999px; margin-left:2px; }
.commentbox.comment2 .frame { float:right; }
.commentbox.comment2 .comment { float:left; }
.commentbox.comment2 .comment .arrow { background:url(../img/comment-arrow-right.png); left:auto; right:-10px; top:30px; }
.commentbox.comment2 .info { float:right; }
.commentbox.comment2 .info label{ float:right; padding:0; margin-right:0; margin-left:10px; }
.commentbox.comment2 .icons { float:left; }
.commentbox.comment2 .icons label { float:right; }
.commentbox.comment2 .icons .star,.commentbox.comment2 .icons .point { margin-left:0px; margin-right:4px; }
/*#left-content.left-content2 { padding:24px 11px 20px 6px; position:relative; }*/
#left-content.left-content3 { width:537px; padding-right:35px; padding-left:15px; }
#left-content #reload { position:absolute; background:url(../img/reload-bg.png) no-repeat 0 bottom; width:83px; bottom:0; left:215px; text-align:center; padding-bottom:8px; margin-bottom:-42px; }
#left-content .title1 { text-align:center; font-weight:700; font-size:26px; margin-bottom:15px; }
#left-content > p { font-size:11px; font-weight:700; line-height:20px; }
.head1 { height:21px; background:#e0dad0; font-size:19px; line-height:21px; padding:8px 14px 8px 15px; color:#fff; text-shadow:1px 1px 0px rgba(0, 0, 0, 0.22); border:0px; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; margin-bottom:10px; }
.head1 a { font-size:11px; color:#de4561; text-shadow:none; float:right; }
.head1 a:hover { text-decoration:underline; }
.button1 { width:150px; height:22px; padding:8px 0 10px; text-align:center; float:right; background:url(../img/button1.png) no-repeat; color:#fff; font-size:20px; line-height:22px; font-weight:700px;}
.box1 { margin-bottom:15px; }
.profile-img { width:69px; height:70px; background:url(../img/frame.png) no-repeat; padding:8px; margin-right:12px; float:left; }
.profile-img img { width:69px; height:70px; border-radius:50%;}
.profile-txt { width:365px; padding:23px 12px 0 0; height:63px; color:#bfb4a9; float:left; }
.profile-txt div { font-size:12px; font-weight:700; }
.profile-txt .profile-name { font-size:14px; font-weight:900; margin-bottom:10px; }
.profile-txt a.disable { float:right; color:#f64f76; }
.profile-txt a.disable:hover { text-decoration:underline; }
.box2 .title { color:#de4460; font-size:21px; font-weight:700; border-bottom:1px #e5e5e5 solid; width:480px; padding-bottom:12px; margin-bottom:15px; }
.box2 label { float:left; font-size:14px; font-weight:900; line-height:35px; }
.box2 label.seeds { width:110px; color:#887560; }
.box2 label.money { width:145px; font-weight:700; color:#aeaeae; font-size:11px; }
.box2 label.money span { font-weight:900; font-size:14px; color:#f64d73;}
.box2 .buynow { float:left; display:block; text-indent:-9999px; background:url(../img/buynow.png) no-repeat; width:91px; height:35px; margin-right:5px; }
#right-content { float:right; margin-bottom:110px; }
#remaining { background:url(../img/remaining-bg.png) no-repeat; width:484px; height:142px; margin-bottom:10px; }
#remaining .count { float:left; margin:38px 22px 0 14px; height:60px; width:119px; text-align:center; font-weight:900; color:#bfb4a9; line-height:60px; font-size:60px; }
#remaining .text1 { float:left; color:#fff; font-size:22px; width:200px; margin:29px 0 0 0; }
#remaining .text1 label { display:block; font-size:60px; font-weight:900; line-height:50px; }
#remaining .shopbtn { width:63px; height:63px; display:block; float:right; margin:36px 23px 0 0; }
#right-content.right-content3 { width:404px; }
.right-content3 #remaining { background:url(../img/remaining2-bg.png) no-repeat; width:404px; }
.right-content3 #remaining .count { margin:38px 15px 0 9px; }
.right-content3 #remaining .text1 { width:165px; }
.right-content3 #remaining .shopbtn { margin:36px 20px 0 0; }
.change { line-height:24px; font-size:13px; color:#a59d90; font-weight:700; }
.change strong { font-weight:900; font-size:17px; }
.change p { margin-bottom:24px; }
.advertise1 { width:482px; height:120px; background:#dcdcdc; margin-bottom:8px; margin-left:1px; border:0px; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; }
.featured-users { width:484px; margin-bottom:10px;}
.featured-users .title { background:url(../img/featured-users-title.png) no-repeat; height:19px; padding:13px 0 13px 12px; font-size:17px; color:#fff; line-height:19px; font-weight:700; margin-bottom:15px; }
.featured-users .userbox { clear:both; padding:20px 0 20px 0; height:55px; background:url(../img/featured-users-img-bg-middle.png) repeat-y 20px -10px; }
.featured-users .userbox.first { background-position:20px 0; padding-top:15px; }
.featured-users .userbox.last { background-position:20px bottom; padding-bottom:15px; }
.featured-users .userbox .frame { float:left; width:41px; height:41px; padding:7px 8px 7px 7px; background:url(../img/featured-users-img-bg.png) no-repeat; position:relative; }
.featured-users .userbox .frame img { width:41px; height:41px; background:#e5e5e5; border-radius:50%; }
.featured-users .userbox .info { float:left; padding-left:15px; line-height:22px; font-size:13px; color:#c1b6ab; padding-top:5px; }
.featured-users .userbox .info .name { font-size:15px; color:#de4562; }
.featured-users .userbox .info .web { color:#c1b6ab; padding-left:20px; background:url(../img/website.png) no-repeat left center; margin-left:8px; }
.featured-users .userbox .follow { background:url(../img/follow-bg.png) no-repeat; width:68px; height:30px; padding:19px 0; float:right; margin-top:-12px; }
.featured-users .userbox .follow a { width:35px; height:30px; display:block; margin:0 auto; }
.featured-users .wantto { text-align:right; height:22px; line-height:22px; }
.featured-users .wantto a { color:#de4562; font-weight:bold; }

/*** choose **/
.page-title2 { width:500px; left:50%; margin-left:-250px; position:absolute; bottom:5px; text-align:center; font-weight:700; font-size:36px; color:#937f6c; }
.chooseboxes {  }
.choosebox { float:left; width:331px; margin-right:1px; margin-left:1px; background:#fff; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; margin-bottom:15px; }
.choosebox .title { height:35px; line-height:35px; padding:6px 7px 6px 12px; border:0; }
.choosebox .title.open { background:#eceae6; }
.choosebox .title label { font-size:22px; color:#937f6c; font-weight:300; width:237px; display:block; float:left; }
.choosebox .title .show { float:right; width:35px; height:35px; display:block; text-indent:-9999px; background:url(../img/showhide.png) no-repeat; }
.choosebox .title .show:focus { outline:0; }
.choosebox .title.open .show { background-position:0 -35px; }
.choosebox .cont { display:none; padding:7px; }
.choosebox .cont ul {  }
.choosebox .cont ul li { height:32px; clear:both; padding:4px 3px; font-size:15px; color:#937f6c; font-weight:700; line-height:32px; }
.choosebox .cont ul li.odd { background:#efe8e2; border:0; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; }
.choosebox .cont ul li img { width:31px; height:31px; max-width:31px; max-height:31px; float:left; display:block; margin-right:8px; border-radius:4px; -moz-border-radius:4px; -webkit-border-radius:4px; background:#fff; box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.3);  }
.choose-save { text-align:right; clear:both; height:36px; margin-bottom:110px; }
.choose-save .save-input { height:36px; width:136px; border:0; background:url('../img/save.png') no-repeat; cursor:pointer; }


/** footer **/
#footer { background:#fff; height:68px; padding-top:15px; color:#ccc0a8; font-size:12px; font-weight:900; line-height:15px; }
#footer .logo { width:104px; height:23px; padding:17px 0 0 0; float:right; }
#footer .copyright { margin-bottom:15px; }
#footer .trademe { margin-bottom:15px;  font-size:11px; color:#c0c0c3}
#footer .links a { color:#ccc0a8; margin-right:22px; }

/** altsayfa2.html 18.06.2013 **/
#slider,#slider2 { width:135px; float:left; margin-left:10px; background:#eee; border:0; border-radius:10px; height:13px; }
.slide-text { float:right; font-size:12px; font-weight:700; }
.ui-slider-handle { background:url(../img/slider.png); height:25px; width:25px; }

.box1 { min-height:40px; }
.box1 .formrow { font-size:12px; font-weight:700; line-height:22px; margin-bottom:8px; }
.box1 .formrow .pink, .box1 .formrow a { color:#f7547c; }
.box1 p { font-size:12px; font-weight:700; line-height:20px; margin-bottom:10px; }
.box1 .emailtext { padding-left:10px; margin-bottom:5px; }
.box1 .emailinput { background:url(../img/emailtext-bg.png); height:14px; line-height:14px; padding:9px 5px; width:464px; margin-bottom:15px; border:0; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; color:#BFB4A9; font-family:Lato; font-size:14px; font-weight:700; }
.box1 .emailmsg { font-weight:900; font-size:14px; text-align:right; line-height:20px; }
.box1 .emailmsg span { padding-right:10px; }
.verified_ikon { color:#6ba237; padding-left:27px; background:url(../img/verified.png) no-repeat; float:right;}
.notverified_ikon { color:#de4562; padding-left:20px; background:url(../img/not-verified.png) no-repeat; float:right;}

/** altsayfa.html 20.06.2013 **/
#new-people-list ul { height:98px; }


#left-content2 { float:left; background:#fff; width:450px; padding:20px 14px 20px 17px; border:0px; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.16); margin-bottom:10px; color:#bfb4a9; }

/** altsayfa.html 02.07.2013 **/
#left-content.left-content11 { padding:24px 11px 20px 6px; position:relative; }
#left-content.left-content12 { width:496px; padding:24px 0px 20px 9px; position:relative; }
#left-content.left-content12 .commentbox { float:left; width:92px; clear:none; margin-right:5px; text-align:center; position:relative; height:166px; padding-top:5px; background:url(../img/commentbox-bg2.png) left top; }
#left-content.left-content12 .commentbox .info { float:none; position:absolute; top:110px; width:92px; height:25px; left:0; text-align:center; padding:0; }
#left-content.left-content12 .commentbox .info label { display:none; }
#left-content.left-content12 .commentbox .icons { position:absolute; top:135px; width:100%; text-align:center; }
#left-content.left-content12 .commentbox .icons label { float:none; text-align:center; font-size:13px; position:absolute; top:-45px; display:block; height:19px; width:92px; left:0; }
#left-content.left-content12 .commentbox .frame { float:none; margin-left:4px; margin-right:4px; background:url(../img/frame3.png) no-repeat; }
#left-content.left-content12 .commentbox .comment { display:none; }
#left-content.left-content13 { width:496px; padding:4px 5px 40px 4px; position:relative; }
#left-content.left-content13 .commentbox { float:none; width:477px; position:relative; height:47px; padding:10px 0 0 19px; background:url(../img/commentbox-bg3.png) left top; margin-bottom:5px; }
#left-content.left-content13 .commentbox .frame { background:#e5e5e5; width:31px; height:35px; padding:0; float:left;
border-radius:50%;
}
#left-content.left-content13 .commentbox .frame img { max-width:31px; max-height:35px; }
#left-content.left-content13 .commentbox .info { float:left; width:auto; height:25px; clear:none;}
#left-content.left-content13 .commentbox .info label { padding-left:8px; line-height:25px; float:left; }
#left-content.left-content13 .commentbox.comment2 .info label { margin-left:0; margin-right:15px; }
#left-content.left-content13 .commentbox .info label span { display:none; }
#left-content.left-content13 .commentbox .info a { position:absolute; right:20px; }
#left-content.left-content13 .commentbox .icons {  float:left; padding-top:8px; }
#left-content.left-content13 .commentbox .icons label { float:none; text-align:center; font-size:14px; color:#de4562; position:absolute; top:18px; display:block; height:19px; width:92px; right:90px; }
#left-content.left-content13 .commentbox .comment { display:none; }

.userbox-container { max-height:465px; overflow:hidden; }

/* yukar?daki .choose-btn kodlar? iptal - 115 nci sat?r */
.choose-btn { position:absolute; right:0; bottom:3px; height:44px; width:235px; font-size:14px; line-height:18px; }
.choose-btn a { height:18px; line-height:18px; padding:13px 0; display:block; float:left; text-align:center; color:#918579; background:url(../img/choose-bg.png) no-repeat; font-weight:700; }
.choose-btn .btn1 { width:118px; }
.choose-btn .btn1.active { background-position:0 -44px; color:#fff; }
.choose-btn .btn2 { width:117px; background-position:right 0; }
.choose-btn .btn2.active { background-position:right -44px; color:#fff; }


.choose-btn2 { margin: 0 auto; bottom:3px; height:44px; width:370px; font-size:14px; line-height:18px; }
.choose-btn2 a { height:18px; line-height:18px; padding:13px 0; display:block; float:left; text-align:center; color:#918579; background:url(../img/choose-bg.png) no-repeat; font-weight:700; }

.choose-btn2 .btn1 { width:118px; }
.choose-btn2 .btn1.active { background-position:0 -44px; color:#fff; }

.choose-btn2 .btn3 { width:117px; background-position:right 0; }
.choose-btn2 .btn3.active { background-position:right -44px; color:#fff; }

.choose-btn2 .btn2 { width:127px; background-position:  center top; border-left:2px solid #fff; border-right:2px solid #fff;}
.choose-btn2 .btn2.active { background-position:center bottom; color:#fff; }


.table1 { width:100%; border-spacing:0; border:0; }
.table1 tr { background:#c4bab0; color:#fff; }
.table1 tr.pink { background:#f64f76; }
.table1 td { padding:3px; }

.commentbox .icons .notfollow { display:inline-block; background:url(../img/notfollow.png) no-repeat; width:20px; height:20px; text-indent:-9999px; margin-left:4px; }



/**
65. sat�rda, anasayfan�n alt�ndaki bo�luk azalt�ld�
*/
.emailinputgenel { background:url(../img/emailtext-bg.png); height:18px; line-height:18px; padding:9px 5px; width:330px; margin-bottom:15px; border:0; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; color:#BFB4A9; font-family:Lato; font-size:14px; font-weight:700; margin-top:3px; margin-left:5px; }
.ufakinput { background:url(../img/emailtext-bg.png); height:30px; line-height:30px; width:150px; border:0; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; color:#BFB4A9; font-family:Lato; font-size:14px; font-weight:700; margin-left:5px; }
.agGiris { background:url(../img/emailtext-bg.png); height:18px; line-height:18px; padding:9px 5px; width:300px; margin-bottom:15px; border:0; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; color:#BFB4A9; font-family:Lato; font-size:16px; font-weight:700; margin-top:3px; margin-left:5px; }
.agGiris2 { background:url(../img/emailtext-bg.png); height:18px; line-height:18px; padding:9px 5px; width:240px; margin-bottom:15px; border:0; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; color:#BFB4A9; font-family:Lato; font-size:16px; font-weight:700; margin-top:3px; margin-left:5px; }
.submenu2 {  width:500px; margin:0 auto; background:#f64f76; height:54px; padding-top:8px; box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.3); border:1px #e24d6d solid; border-top:0; -webkit-border-bottom-right-radius:5px; -webkit-border-bottom-left-radius:5px; -moz-border-radius-bottomright:5px; -moz-border-radius-bottomleft:5px; border-bottom-right-radius:5px; border-bottom-left-radius:5px;}
#slider2 { width:135px; float:left; margin-left:10px; background:#eee; border:0; border-radius:10px; height:13px; }
.slide2-text { float:right; font-size:12px; font-weight:700; }
#ajansGiris { background:url(../img/remaining-bg.png) no-repeat; width:484px; height:142px; margin: 0 auto;}
#ajansGiris  .count { float:left; margin:28px 22px 0 14px; height:60px; width:119px; text-align:center; font-weight:700; color:#bfb4a9; line-height:35px; font-size:35px; }
#ajansGiris .ajForm { float:left; color:#fff; font-size:22px; width:200px; margin:20px 0 0 0; }
.girisButon { width:63px; height:63px; display:block; float:right; margin:0px 0px 5px 0px; }

.gelirBox { margin-bottom:1px; clear:both; }
.gelirBox .frame { width:64px; height:64px; padding:8px; float:left; margin-left:8px; }
.gelirBox .frame img { width:64px; height:64px; border-radius:25%; }
.gelirBox .comment { float:right; position:relative; width:420px; margin-top:20px; border:0px; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; background:#f2f0ee; color:#a7a7a7; font-size:11px; line-height:19px; min-height:19px; padding:12px; font-weight:bold; }
.gelirBox .comment2 { float:right; position:relative; width:420px; margin-top:20px; border:0px; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; background:#e14b6a; color:#ffffff; font-size:11px; line-height:19px; min-height:19px; padding:12px; font-weight:bold; }
.gelirBox .comment .arrow { position:absolute; width:10px; height:20px; background:url(../img/comment-arrow-left.png); display:block; left:-10px; top:10px; }
.gelirBox .comment2 .arrow { position:absolute; width:10px; height:20px; background:url(../img/comment-arrow-left2.png); display:block; left:-10px; top:10px; }
.gelirBox .comment .arrow3{ position:absolute; width:10px; height:20px; background:url(../img/comment-arrow-left.png); display:block; right:-10px; top:10px; }
.gelirBox .comment2 .arrow3 { position:absolute; width:48px; height:48px; background:url(../img/tickIncome.png); display:block; right:-20px; top:10px; }
.sayfaUstBaslik { bottom:5px; text-align:center; font-weight:700; font-size:36px; color:#937f6c; }
#left-content.genis { width:1000px; padding-right:35px; padding-left:15px; }
.shareLoc{color: #fff; font-weight:500; font-size:20px;}

.homebox3 { border:0px; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.16); width:480px; float:left; background:#fff; color:#918b81; margin-bottom:14px; }
.homebox3 p { height:29px; }
.homebox3.interests { width:470px; padding:14px 0 0 14px; float:right;}
.homebox3.interests p { font-size:16px; font-weight:900; }
.homebox3.interests a { display:block; float:left; height:20px; line-height:20px; font-size:18px; font-weight:900; color:#fff; min-width:45px; text-align:center; padding:7px 5px; border:0px; border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px; margin-bottom:9px; margin-right:15px;}
.homebox3.interests a.pink { background:#d7587c; }
.homebox3.interests a.red { background:red; }
.homebox3.interests a.green { background:green; }

#userlogin { margin-left:25px; float:right; padding-top:7px; max-width:330px; }
#userlogin .userloginleft { float:left; padding-top:10px; }
#userlogin .userloginleft .name { color:#77d6e1; font-size:14px; font-weight:700;  }
#userlogin .userloginmenu { color:#d3cabb; font-weight:900; font-size:15px; }
#userlogin .userloginmenu a { color:#d3cabb; font-weight:400; font-size:14px; }
#userlogin .userloginmenu a:hover { color:#b3aa8a; }
#userlogin .userloginimg { width:55px; height:55px; float:right; margin-left:5px;}
#userlogin .userloginimg img { width:49px; height:49px; max-width:49px; max-height:49px; border:3px #ecf9f9 solid; border-radius:50%; -moz-border-radius:50%; -webkit-border-radius:50%; }

.become-a-vip { float:right; padding-top:18px; margin-right:29px; }

#search-form { padding-top:15px; }
.histimaj { width:30px; height:30px; max-width:30px; max-height:30px; border:3px #ecf9f9 solid; border-radius:50%; -moz-border-radius:50%; -webkit-border-radius:50%; }
#historyIc { width:496px; padding:4px 5px 40px 4px; position:relative; margin-left:27px;}
#historyIc .commentbox { float:none; width:477px; position:relative; height:47px; padding:10px 0 0 19px; background:url(../img/commentbox-bg3.png) left top; margin-bottom:5px; }
#historyIc .commentbox .frameSol { width:50px; height:35px; padding-top:8px; float:left; color:#de4562; font-size:12px;}
#historyIc .commentbox .frame { background:#e5e5e5; width:31px; height:35px; padding:0; float:left; 
border-radius:50%;
}
#historyIc .commentbox .frame img { max-width:31px; max-height:35px; }
#historyIc .commentbox .info { float:left; width:auto; height:25px; clear:none;}
#historyIc .commentbox .info label { padding-left:8px; line-height:25px; float:left; }
#historyIc .commentbox.comment2 .info label { margin-left:0; margin-right:15px; }
#historyIc .commentbox .info label span { display:none; }
#historyIc .commentbox .info a { position:absolute; right:20px; }
#historyIc .commentbox .icons {  float:left; padding-top:8px; }
#historyIc .commentbox .icons label { float:none; text-align:center; font-size:14px; color:#de4562; position:absolute; top:18px; display:block; height:19px; width:92px; right:90px; }
#historyIc .commentbox .comment { display:none; }

.page-tabs-settings { position:absolute; margin-left:410px; }
.page-tabs-settings  a { padding:10px 16px 12px; display:inline-block; font-size:16px; line-height:18px; font-weight:700; color:#7a746a; }
.page-tabs-settings  a.current { background:#e04967; color:#fff; -webkit-border-bottom-left-radius: 6px; -webkit-border-bottom-right-radius: 6px; -moz-border-radius-bottomleft: 6px; -moz-border-radius-bottomright: 6px; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px; }
.notfollow-blocks { display:inline-block; background:url(../img/notfollow.png) no-repeat; width:20px; height:20px; text-indent:-9999px; margin-left:4px; }

.anaDiv{
width: 100%;
height: 500px;
margin-bottom: 15px;
}
.infoBox{
width: 100%;
height: auto;
background: white;
margin-bottom: 15px;
}
.infoBox ul{
width: 90%;
margin-left: 5%;
margin-top: 30px;
font-family: "opensans";
padding-bottom: 30px;
line-height: 30px;
color: #333;

}
.infoBox .formHead{
width: 100%;
text-align: center;
line-height: 60px;
height: 40px;
font-family: "opensans";
font-size: 20px;
}
.infoBox .formHead span{
border-bottom: #aaa 1px solid;
padding: 3px 15px 5px 15px;
border-radius: 20px;
margin-top: 20px;
}
.formDiv{
background: #fff;
width: 50%;
margin: 0px;
padding: 0px;
height: 100%;
float: left;
}
.imageDiv{
background: #fff;
width: 50%;
margin: 0px;
padding: 0px;
height: 100%;
float: left;           
}
.formClass{
width: 70%;
margin-left: 15%;
padding-top: 30px;
}
.formClass input,select,textarea{
height: 35px;
border: none;
width: 100%;
box-shadow: #ccc 0px 0px 5px inset;
margin-bottom: 20px;
padding-left: 3%;
font-family: "opensans";

}
.formClass select{
background: #fff;
width: 103%;
}
.formClass textarea{
height: 100px;
}
.formClass input[type=submit]{
background: #f5f5f5;
box-shadow: #ccc 0px 0px 0px inset;
width: 93%;
margin-left: 5%;
cursor: pointer;
border: #ccc 1px solid;

}
.formClass input:focus,textarea:focus{
border: rgb(0,200,255) 1px solid;
}
.formClass select:focus{
border: rgb(0,200,255) 1px solid;
}
.formDiv .formHead{
width: 100%;
text-align: center;
line-height: 40px;
height: 40px;
margin-top: 20px;
font-family: "opensans";
font-size: 20px;
}
.formDiv .formHead span{
border-bottom: #aaa 1px solid;
padding: 3px 15px 5px 15px;
border-radius: 20px;
}
.formDiv label{
font-family: "opensans";
}
.imageDiv .imageContent{
width: 80%;
margin: 10%;
height: 100%;
margin-top: 5%;
}
.imageContent .contentImage{
width: 100%;
}
.errorMessage{
width: 103%;
height: 35px;
line-height: 35px;
background: rgba(255,20,20,0.1);
border: rgba(255,20,20,0.8) 1px solid;
margin-bottom: 20px;
text-align: center;
font-family: "opensans";
font-weight: 100;
font-size: 14px;
border-radius: 3px;
}

.successMessage{
width: 100%;
height: 35px;
line-height: 35px;
background: rgba(0,200,255,0.1);
border: rgba(0,200,255,0.8) 1px solid;
margin-bottom: 20px;
text-align: center;
font-family: "opensans";
font-weight: 100;
font-size: 14px;
border-radius: 3px;
}

.proMainDiv{
width: 100%;
height: 450px;
background: rgb(252,252,252);
margin-bottom: 15px;
}
.class75{
height: 100%;
width: 65%;
margin: 0px;
padding: 0px;   
float: left;
}
.class50{
height: 35px;
width: 50%;
margin: 0px;
padding: 0px;   
float: left;
}
.class25{
height: 100%;
width: 35%;
margin: 0px;
padding: 0px;
float: left;
}
.class25 .divContent{
width: 90%;
margin-left: 5%;
margin-right: 5%;
margin-top: 15%;
}
.class25 .divContent .userDetail{
font-family: "opensans";

}
.class75 h3{
font-family: "opensans";
font-weight: 100;
line-height: 45px;
color: #444;
margin-left: 6%;
}
.class75 h3 span{
color: #000;
font-weight: 100;
}
.imagesDiv{
width: 90%;
margin-left: 5%;
position: relative;
margin-top: 1px;
}
.imagesDiv img{
margin: 2px;
width : 48px;
}
.detailDiv{
width: 85%;
margin-left: 5%;
margin-right: 10%;
margin-top: 15px;
}
.detailDiv  .takeFollowButton{
float: left;
margin-left: 15px;
cursor: pointer;
height: 40px;
border-radius: 5px;
background: orange;
padding: 0px 20px;
outline: 2px orange solid;
color: white;
border: 1px white dashed;
font-family: "opensans";
font-weight: 600;
font-size: 16px;
}
.detailDiv  .takeFollowButton:hover{
opacity: 0.8;
}
.detailDiv span{
float: right;
line-height: 35px;
font-family: "opensans";
font-weight: 600;
}
.detailDiv .listRefresh:hover{
background: #eee;
cursor: pointer;
border-radius: 30px;
}
.imageContent2{
opacity: 0.8;
margin-top: 10%;
margin-left: 5%;
width: 90%;
}
.singOut{
position: absolute;
top: 0px;
right: 0px;
cursor: pointer;
height: 25px;
border-radius: 2px;
line-height: 25px;  
padding: 0px 10px;
border: 1px #ddd solid;
color: #333;
font-family: "opensans";
font-weight: 100;
font-size: 13px;
margin: 20px;
background: white;
}

.singOut:hover{
box-shadow: #eee 0px 0px 15px inset;
}
.noCredit span{
font-family: "opensans";
font-weight: 100;
font-size: 17px;

}

.noCredit span a{
border-bottom: #aaa 1px solid;
padding: 3px 15px 5px 15px;
border-radius: 20px;
margin-top: 20px;
background: #fefefe;
font-family: "opensans";
line-height: 40px;
font-weight: 100;
font-size: 19px;
color: #222255;
}
.noCredit span a:hover{
border-bottom: #898989 2px solid;
background: #fbfbfb;
color: #333;
}

@font-face {font-family: 'opensans';font-style: normal;font-weight:100;src: local('opensans'), url('http://qupoo.com/opensans300.woff') format('woff');}
.packets{
width: 100%;
height: 60px;
margin-bottom: 10px;
margin-top: 10px;
padding: 0px;
background: #fefefe;
}
.packets .packet{
width: calc(12.5% - 1px);
height: calc(100% - 2px);
padding: 0px;
margin: 0px;
border-left: 1px #ddd solid;
border-top: 1px #ddd solid;
border-bottom: 1px #ddd solid;
float: left;
text-align: center;
line-height: 60px;
font-weight: 500;
font-size: 18px;
font-family: 'opensans';
cursor: pointer;
color: #222;
}
.packets .packet:hover{
box-shadow: 0px 0px 10px #e5e5e5 inset;
color: #555;
}

.siteLogo{
width : 200px;
height : 100px;
margin-top : 15px;
left : 50%;
margin-left : -100px;



}

.siteLogoTop{
height : 150px;
position : absolute ;
}