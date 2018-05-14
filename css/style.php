<?php
    header('content-type: text/css');
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    $lCssData = GJson::Instance()->getData("data/json/css.json");
?>
/* ============================================== */
/* HtmlBody */
/* ============================================== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

*:focus { 
    border: none;
    outline: none;
}

input {
    font-size: 16px;
    border-radius: 0px;
}

html {
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}

body {
    color: black;
    background: #051039;
    font-family: arial;
    font-size: 16px;
}

input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus {
    -webkit-text-fill-color: white ;
    transition: background-color 5000s ease-in-out 0s;
}

textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus {
    transition: background-color 5000s ease-in-out 0s;
}
/* ============================================== */
/* Html Page */
/* ============================================== */
.HtmlPage {
    position: relative;
}
/* ============================================== */
/* Body Page */
/* ============================================== */
.BodyPage {
    position: relative;
}
/* ============================================== */
.BodyPage.Mrg {
    max-width: 1000px;
    margin: auto;
}

.BodyPage.Pdd {
    padding-top: 250px;
    padding-bottom: 250px;
}
/* ============================================== */
.BodyPage .Logo {
    position: absolute;
    top: 30px;
    left: 0px;
    padding: 10px;
}

.BodyPage .Logo .Img {
    height: 150px;
    background-color: rgba(0,0,0,0.0);
    background-image: url("/img/logo.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
}

.BodyPage .Logo .Txt {
    background-color: rgba(1,1,1,0.0);
    font-family: Archivo Narrow;
    font-size: 16px;
    color: white;
    padding: 5px;
    text-align: center;
}
/* ============================================== */
/* Main Page */
/* ============================================== */
.MainPage.Mrg {
    max-width: 700px;
    margin: auto;
}

.MainPage.Pdd {
    padding-top: 250px;
    padding-bottom: 250px;
}
/* ============================================== */
/* Header */
/* ============================================== */
.Header {
	overflow: hidden;
	background-color: #333;
}
/* ============================================== */
.Header .Menu {
    position: relative;
    font-size: 0px;
}

.Header .Menu .Link {
    display: inline-block;
    text-align: center;
    font-size: 17px;
    font-family: Aclonica;
}

.Header .Menu .Link .Item,
.Header .Menu .Link.Icon {
    display: inline-block;
    padding: 0px 16px;
    line-height: 50px;
    color: #f2f2f2;
    text-decoration: none;
    cursor: pointer;
}

.Header .Menu .Link .Item:hover,
.Header .Menu .Link.Icon:hover {
    background-color: #555;
    color: white;
}

.Header .Menu .Link .Item.Active {
    background-color: #ff0000;
}

.Header .Menu .Link.Icon {
    display: none;
    position: absolute;
    top: 0px;
    right: 0px;
    font-size: 25px;
}
/* ============================================== */
/* Modal */
/* ============================================== */
.Modal {
    display: none;
    position: fixed;
    z-index: 2;
    padding: 10px;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100vh;
    background-image: url("<?php echo $lCssData["modal"]["img"]; ?>");
    background-color: rgba(255,255,255,0.2);
    overflow: auto;
}

.Modal .Body {
    background-color: #fefefe;
    margin: auto;
    max-width: 500px;
    position: relative;
}

.Modal .Body .Title {
    background-color: rgba(0,0,0,0.2);
    padding: 10px 35px 10px 10px;
    font-family: Anton;
    font-size: 25px;
}

.Modal .Body .Text {
    background-color: rgba(0,0,0,0.2);
    border-top: 1px solid rgba(0,0,0,0.2);
    padding: 10px;
}

.Modal .Body .Text .Desc {
    margin-bottom: 10px;    
}

.Modal .Body .Text .Row {
    background-color: rgba(0,0,0,0.0);
    margin: 4px 0px;
    position: relative;
}

.Modal .Body .Text .Row .Label {
    background-color: rgba(0,0,0,0.2);
    min-width: 150px; 
    line-height: 30px;   
    padding: 0px 10px;
    position: absolute;
    top: 0px;
    left: 0px;
}

.Modal .Body .Text .Row .Field {
    background-color: rgba(0,0,0,0.0);
    border: 1px solid rgba(0,0,0,0.2);
    height: 30px;   
    margin-left: 150px;
}

.Modal .Body .Text .Row .Field .Data {
    background-color: rgba(0,0,0,0.0);
    border: 1px solid rgba(0,0,0,0.2);
    height: 100%;   
    width: 100%;
    padding: 5px 10px;
}

.Modal .Body .Text .Col {
    background-color: rgba(0,0,0,0.0);
    border: 1px solid rgba(0,0,0,0.2);
    margin: 4px 0px;
    position: relative;
}

.Modal .Body .Text .Col .Label {
    background-color: rgba(0,0,0,0.2);
    padding: 5px 10px;
}

.Modal .Body .Text .Col .Label.File {
    background-color: transparent;
    border: 1px solid rgba(0,0,0,0.2);
    color: #051039;
    font-weight: bold;
}

.Modal .Body .Text .Col .Field {
    background-color: rgba(0,0,0,0.0);
    border: 1px solid rgba(0,0,0,0.2);
}

.Modal .Body .Text .Col .Field .Data {
    background-color: rgba(0,0,0,0.0);
    border: 1px solid rgba(0,0,0,0.0);
    min-height: 300px;   
    padding: 5px 10px;
    overflow: auto; 
}

.Modal .Body .Text .Col .Field .Data.View {
    padding: 5px;
}

.Modal .Body .Text .Col .Field .Data.Min {
    min-height: 0px;
}

.Modal .Body .Text .Col .Field .Data.Center {
    text-align: center;
}

.Modal .Body .Text .ButtonMap {
    text-align: right;
    font-size: 0px;
    padding-top: 10px;
}

.Modal .Body .Text .ButtonMap .Item {
    display: inline-block;
    background-color: rgba(0,0,0,0.2);
    padding: 0px 10px;
    line-height: 30px; 
    font-size: 16px;
    cursor: pointer;
    margin: 5px;
}

.Modal .Body .Text .ButtonMap .Item:hover {
    background-color: rgba(0,0,0,0.4);
}

.Modal .Body .Text .ButtonMap .Item:active {
    background-color: rgba(0,0,0,0.2);
}

.Modal .Body .Text .ButtonMap.Left {
    text-align: left;
}

.Modal .Body .Text .ButtonMap.Center {
    text-align: center;
}

.Modal .Body .Text .ButtonMap .UploadItem.Active {
    background-color: #051039;
    color: white;
}

.Modal .Msg {
    background-color: rgba(0,0,0,0.4);
    margin: auto;
    max-width: 500px;
    padding: 5px 10px;
    font-family: Archivo Narrow;
    color: white;
    display: none;
}
/* ============================================== */
/* DisplayNone */
/* ============================================== */
.None {
    display: none;
}
/* ============================================== */
/* Background */
/* ============================================== */
.Background {
    min-height: 300px;
    background-color: #5CAF50;
    background-image: url("<?php echo $lCssData["background"]["item1"]["img"]; ?>");
    background-position: center;
    position: absolute;
}

.Background.Item1 {
    top: 0px;
    left: 0px;
    right: 0px;
    z-index: -1;
}

.Background.Item2 {
    top: 300px;
    bottom: 300px;
    left: 0px;
    right: 0px;
    z-index: -1;
    background-image: url("<?php echo $lCssData["background"]["item2"]["img"]; ?>");
}

.Background.Item3 {
    bottom: 0px;
    left: 0px;
    right: 0px;
    z-index: -1;
    background-image: url("<?php echo $lCssData["background"]["item3"]["img"]; ?>");
}
/* ============================================== */
/* Button */
/* ============================================== */
.Button {
    background-color: rgba(0,0,0,0.2);
    width: 30px;
    line-height: 30px;
    border-radius: 15px;
    font-size: 20px;
    text-align: center;
    cursor: pointer;
}

.Button:hover {
    background-color: rgba(0,0,0,0.4);
}

.Button:active {
    background-color: rgba(0,0,0,0.2);
}

.Button.Close {
    position: absolute;
    top: 5px;
    right: 5px;
}

.Button.BackgroundMod1 {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 1;
    color: #ff9933;
}

.Button.BackgroundMod2 {
    position: absolute;
    top: 330px;
    right: 10px;
    z-index: 1;
    color: #ff9933;
}

.Button.BackgroundMod3 {
    position: absolute;
    bottom: 260px;
    right: 10px;
    z-index: 1;
    color: #ff9933;
}

.Button.HomeImg {
    position: absolute;
    top: 10px;
    left: 10px;
    z-index: 1;
    color: #ff9933;
}

.Button.HomeText {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 1;
    color: #ff9933;
}
/* ============================================== */
/* DataView */
/* ============================================== */
.DataView {
    font-size: 0px;
}

.DataView .DataRow {
    border-top: 1px dotted rgba(0,0,0,0.2);
    padding: 5px;
    cursor: pointer;
    font-size: 16px;
}

.DataView .DataRow:hover {
    background-color: rgba(0,0,0,0.4);
}

.DataView .DataRow:active {
    background-color: rgba(0,0,0,0.2);
}

.DataView .DataRow .Icon {
    display: inline-block;
    padding-right: 10px;
}

.DataView .DataRow .Name {
    display: inline-block;
}

.DataView .DataCol {
    display: inline-block;
    vertical-align: top;
    width: 33.33%;
    font-size: 16px;
    padding: 5px;
}

.DataView .DataCol .Block {
    background-color: rgba(0,0,0,0.2);
    padding: 5px;
    cursor: pointer;
    text-align: center;
}

.DataView .DataCol .Block.Active {
    background-color: rgba(0,0,255,0.2);
}

.DataView .DataCol .Block:hover {
    background-color: rgba(0,0,0,0.4);
}

.DataView .DataCol .Block:active {
    background-color: rgba(0,0,0,0.2);
}

.DataView .DataCol .Block.Active {
    background-color: #051039;
    color: white;
}

.DataView .DataCol .Block .Icon {
    background-color: rgba(255,0,0,0.0);
}

.DataView .DataCol .Block .Icon .IconView {
    font-size: 50px;
    color: #051039;
}

.DataView .DataCol .Block .Icon .ImgView,
.Block.Overflow .Icon .ImgView {
    width:50px;
    height:50px;
}

.DataView .DataCol .Block .Name {
    word-break: break-all;
}

.DataViewLink .Link {
    display: inline-block;
    cursor: pointer;
    color: #051039;
    font-weight: bold;
    font-size: 18px;
}

.DataViewLink .Link:hover {
    color: rgba(0,0,150,0.8);
}

.DataViewLink .Link:active {
    color: rgba(0,0,150,0.4);
}

.DataViewLink .Sep {
    display: inline-block;
    padding: 0px 5px;
    color: rgba(150,0,0,1.0);
}
/* ============================================== */
/* Parallax */
/* ============================================== */
.Parallax {
    position: relative;
}

.Parallax .Img {
    background-image: url("<?php echo $lCssData["home"]["img"]; ?>");
    min-height: 500px;
    position: relative;
    opacity: 0.65;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    -webkit-background-size: cover; 
    -moz-background-size: cover; 
    -o-background-size: cover; 
}

.Parallax .Img .Caption {
    background-color: #051039;
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    text-align: center;
    opacity: 0.8;
}

.Parallax .Img .Caption .Text {
    background-color: #111;
    color: #fff;
    padding: 18px;
    font-size: 25px;
    display: inline;
    font-family: Anton;
    letter-spacing: 5px;
}

.Parallax .Body {
    position: relative;
    min-height: 500px;
    background-color: #803300;
    font-size: 20px;
    color: white;
    padding: 10px;
    font-family: Archivo Narrow;
}

.Parallax.Item1 .Img {
    min-height: 500px;
}

.Parallax.Item2 .Img {
    background-image: url("<?php echo $lCssData["presentation"]["img"]; ?>");
}

.Parallax.Item3 .Img {
    background-image: url("<?php echo $lCssData["ministry"]["img"]; ?>");
}

.Parallax.Item4 .Img {
    background-image: url("<?php echo $lCssData["events"]["img"]; ?>");
}

.Parallax.Item5 .Img {
    background-image: url("<?php echo $lCssData["error"]["img"]; ?>");
}

.Parallax.Item2 .Body {
    background-color: #006666;
}

.Parallax.Item3 .Body {
    background-color: #2d2d86;
}

.Parallax.Item4 .Body {
    background-color: #00004d;
}

.Parallax.Item5 .Body {
    min-height: 50px;
    text-align: center;
    font-size: 25px;
    font-family: Allan;
}

.Parallax.Scroll .Img {
    background-attachment: scroll;
}
/* ============================================== */
/* Responsive Web Design */
/* ============================================== */
@media screen and (max-width: 750px) {
    /* ============================================== */
    /* Header */
    /* ============================================== */
    .Header .Menu .Link:not(:first-child){
        display: none;
    }

    .Header .Menu .Link.Icon {
        display: inline-block;
    }
    
    .Header .Menu.RWD .Link {
        display: block;
        text-align: left;
    }
    /* ============================================== */
}
/* ============================================== */
@media screen and (max-width: 450px) {
    /* ============================================== */
    /* Modal */
    /* ============================================== */
    .Modal .Body .Text .Row .Label {
        position: static;
    }

    .Modal .Body .Text .Row .Field {
        margin-left: 0px;
    }
    /* ============================================== */
    /* DataView */
    /* ============================================== */
    .DataView .DataCol {
        width: 50%;
    }
    /* ============================================== */
}
/* ============================================== */
