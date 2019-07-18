<!DOCTYPE html>
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Sawarabi+Mincho');
@import url(https://fonts.googleapis.com/css?family=Sawarabi+Mincho);
 
body{
  background: #f5f7fa;
  margin:10px;
  padding:10px;
  font-family: 'Sawarabi Mincho', sans-serif;
}
.cf {
    zoom: 1;
    overflow: hidden;
}
 
/* 今日の漢字 */
#checkKanjiPopupArea {
  display: none;
}
#checkKanjiPopupInner {
  background: url(/kanken/images/top_today_kanji_popup_bg_kangaroo_pc.gif) no-repeat left top;
  width: 850px;
  margin: 0 auto;
  padding-bottom: 30px;
  border: 1px solid #f1b2b4;
}
#checkKanjiPopupInner p#popupTitle {
  text-align: center;
  margin-top: 0;
  padding-top: 20px;
}
#checkKanjiPopupInner #popupDetailBox {
  margin-top: 10px;
}
#checkKanjiPopupInner #popupDetailBox #popupKanjiUnit {
  float: left;
  width: 42%;
}
#checkKanjiPopupInner #popupDetailBox #popupKanjiUnit p {
  font-size: 1400%;
  text-align: center;
  margin: -60px 0px 0px 0;
  min-height: 180px;
}
#checkKanjiPopupInner #popupDetailBox #popupMeanUnit {
  float: right;
  width: 57%;
}
#checkKanjiPopupInner #popupDetailBox #popupMeanUnit dl {
  margin-bottom: 10px;
  margin-top: 0;
}
#checkKanjiPopupInner #popupDetailBox #popupMeanUnit dt {
  float: left;
  clear: left;
  margin: 8px 0 0 5px;
  width: 61px;
}
#checkKanjiPopupInner #popupDetailBox #popupMeanUnit dd {
  padding: 9px 0 8px 50px;
  width: 380px;
}
#checkKanjiPopupInner #popupDetailBox #popupMeanUnit p#popupCheckCharaSp {
  display: none;
}
#checkKanjiPopupInner #popupCheckBox {
  position: relative;
}
#checkKanjiPopupInner #popupCheckBox p#popupCheckIcon {
  position: absolute;
  top: -15px;
  left: 15px;
  margin-top: 0;
  z-index: 100;
}
#checkKanjiPopupInner #popupCheckBox p#popupCheckChara {
  position: absolute;
  top: -88px;
  left: 320px;
  margin-top: 0;
}
#checkKanjiPopupInner #popupCheckBox #popupLuckyTop {
  background: url(/kanken/images/top_today_kanji_popup_bg_lucky_top.gif) left top no-repeat;
  padding-top: 5px;
  margin: 0 25px;
}
#checkKanjiPopupInner #popupCheckBox #popupLuckyBottom {
  background: url(/kanken/images/top_today_kanji_popup_bg_lucky_bottom.gif) left bottom no-repeat;
  padding-bottom: 5px;
}
#checkKanjiPopupInner #popupCheckBox #popupLuckyUnit {
  background: url(/kanken/images/top_today_kanji_popup_bg_lucky.gif) repeat-y left top #fc7b68;
  
/* margin: 0 30px;
  */;
}
#checkKanjiPopupInner #popupCheckBox #popupLuckyTitleUnitInner {
  float: left;
  width: 125px;
  text-align: center;
  margin-top: 10px;
}
#checkKanjiPopupInner #popupCheckBox #popupLuckyTitleUnitInner img {
  margin-top: 6px;
}
#checkKanjiPopupInner #popupCheckBox #popupLuckyMeanUnitInner {
  float: right;
  width: 630px;
  margin: 0;
}
#checkKanjiPopupInner #popupCheckBox #popupLuckyMeanUnitInner p {
  margin-top: 0;
}
#checkKanjiPopupInner #popupCheckBox #popupLuckyMeanUnitInner span#luckyKanji {
  font-size: 180%;
}
#checkKanjiPopupInner #popupCheckBox #popupLuckyMeanUnitInner span#luckyKanjiRead {
  font-size: 100%;
}

</style>
<?php
include('html.php');
$html = file_get_html('https://www.kanken.or.jp/kanken/');
$kanji = $html->find('#checkKanjiPopupInner',0);
echo $kanji;


?>
