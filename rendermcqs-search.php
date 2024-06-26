﻿<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>MCQs For Review</title>
<link href="https://fonts.googleapis.com/css2?family=Battambang&display=swap" rel="stylesheet">
<style type="text/css">
* {
  /* So 100% means 100% */
  box-sizing: border-box;
}
html,body {width: 100%; height:100%; margin: 0px; padding: 0px; }
body{
	background-color:#fff;
	margin: 0;
	display: flex;
	flex-direction: column;
	height: 100vh;
	font-family: 'Battambang', 'Montserrat', sans-serif;
	color: #BFC1C5;			
}
.container {
	box-sizing: border-box;
	width: 100%;
	height:100%;
	padding:10px;
	margin-top:10px;
}
#topbar{
	background-color: #333;
	position: relative;
	width: 100%;
	z-index: 1000;
}
#topbar-inner{
	background-color: #333; /* Black background color */
	position: relative; /* Make it stick/fixed */
	height: 220px; /* Stay on top */
	width: 100%; /* Full width */
	padding: 10px;
	transition: height 0.3s; /* Transition effect when sliding down (and up) */
	transition-property: height, padding;
	z-index: 1001;
	overflow: hidden;
}
#topbar-inner.fade {
	height: 0px;
	padding: 0px;
}
.wrapper {
	display: flex;
	flex-flow: row wrap;
	justify-content: left;
	padding-bottom: 60px;				  
}
.card{
	background-color:#f2f8ff;
	color: #BFC1C5;
	border: 1px solid #BFC1BB;
	padding: 10px 20px;
	margin:20px auto;
	border-radius: 4px;
	width: 100%;
	display:none;
}
.cardcolor0{
	border-color: #BFC1BB;
}
.cardcolor1{
	border-color: #A0CF6C;
}
.cardcolor2{
	border-color: #3396E3;
}
.cardcolor3{
	border-color: #D795E4;
}
.cardcolor4{
	border-color: #FD426A;
}
.cardcolor5{
	border-color: #F9C83D;
}			
.card p, .card li{
	color: #2e2e2e;
	font-size:1.2em;
}
.card li.highlight{
	color:orange;
}
.card ul.nostyle{
	padding-left: 0;
}
.card ul.nostyle li{
	list-style: none;
}
/*
.card, .card label{
	-webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	-webkit-tap-highlight-color: transparent;
}
*/			   
.imgwrapper{
	text-align:center;
}
.imgwrapper img{
	max-height: 200px;
    border-radius: 4px;
    max-width: 100%;
}
.textarea-wrapper{
	text-align:center;
	margin-bottom:15px;
}
button{
	color: #fff!important;
    background-color: #4CAF50!important;
	border: none;
    display: inline-block;
    padding: 8px 16px;
    vertical-align: middle;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    background-color: inherit;
    text-align: center;
    cursor: pointer;
    white-space: nowrap;
	border-radius:4px;
}
.textarea-wrapper input {
  width: 100%;
  text-align:center;
  font-size:1.2em;
  padding: 15px 10px;
  font-family: 'Battambang', 'Montserrat', sans-serif;
  border: 1px solid #BFC1C5;
  border-radius: 6px;
  background-color:#242526;
  color:#BFC1C5;
}
#loader-wrapper{
	width:100%;
	justify-content: center;
	margin:20px 0;
	display: none;
}
.loader {
  border: 8px solid #f3f3f3; /* Light grey */
  border-top: 8px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 50px;
  height: 50px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

p a.viewall{
	text-decoration:none;
	color:#4CAF50;
}
.ques{
	cursor: pointer;
}
p.choi{
	border-top: 1px solid #AAA;
	padding-top: 10px;
	display:none;
}
span.choi{
	display:none;
}

.footbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
  display: flex;
  justify-content: center;
}

.footbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.footbar a:hover {
  background: #f1f1f1;
  color: black;
}

.footbar a.active {
  background-color: #FFF;
  color: white;
}

.footbar a.color-1 {
  background-color: #794836;
  color: white;
}
.footbar a.color0 {
  background-color: #111111;
  color: white;
}
.footbar a.color1 {
  background-color: #A0CF6C;
  color: white;
}
.footbar a.color2 {
  background-color: #3396E3;
  color: white;
}
.footbar a.color3 {
  background-color: #D795E4;
  color: white;
}
.footbar a.color4 {
  background-color: #FD426A;
  color: white;
}
.footbar a.color5 {
  background-color: #F9C83D;
  color: white;
}
/* Radio buttons */
.radio-wrp {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  /* 
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; */
}

/* Hide the browser's default radio button */
.radio-wrp input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 4px;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.radio-wrp:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.radio-wrp input:checked ~ .checkmark {
  background-color: white;
  border: 2px solid #62C46E;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.radio-wrp input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.radio-wrp .checkmark:after {
 	top: 2px;
	left: 2px;
	width: 12px;
	height: 12px;
	border-radius: 50%;
	background: #62C46E;
}
.card {
	margin: 20px auto;
	transition: all 0.25s linear;
	transition-property: opacity, min-height, margin;
	min-height:300px;
	position: relative;
	overflow:hidden;
}
.card.fade {
  opacity: 0;
  min-height: 0px!important;
  margin: 0px auto;
}
#tbarexpander{
	position: absolute;
    bottom: 0px;
    right: 0;
    padding: 13px 10px 0 10px;
    display: block;
    background-color: #333;
    height: 30px;
    line-height: 30px;
    border-radius: 0 0 0 6px;
	cursor:pointer;
	overflow:hidden;
	z-index:1002;
}
#tbarexpander div {
	width: 15px;
	height: 15px;
	background: transparent;
	border-right:2px solid #555;
	border-bottom:2px solid #AAA;
	transition: transform 0.2s;
	transform: rotate(225deg);
}
#tbarexpander.spin{
	padding-top:5px;
	bottom: -30px;
}
#tbarexpander.spin div {
	transform: rotate(45deg);
}
[data-tip] {
	position:relative;
}
[data-tip]:before {
	content:'';
	/* hides the tooltip when not hovered */
	display:none;
	content:'';
	border-left: 5px solid transparent;
	border-right: 5px solid transparent;
	border-bottom: 5px solid #1a1a1a;	
	position:absolute;
	top:0px;
	left:35px;
	z-index:8;
	font-size:0;
	line-height:0;
	width:0;
	height:0;
}
[data-tip]:after {
	display:none;
	content:attr(data-tip);
	position:absolute;
	top:-100px;
	left:0px;
	padding:5px 8px;
	background:#1a1a1a;
	color:#fff;
	z-index:9;
	font-size: 0.75em;
	line-height:18px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	white-space: pre-line;
	word-wrap:normal;
	text-align: left;
}
[data-tip]:hover:before,
[data-tip]:hover:after {
	display:block;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 999999; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #4c0b57;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 2px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
  border-radius:15px;
}
.modal-content li a {
	cursor: pointer;
}
/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
<?php
/*
	https://stackoverflow.com/questions/23826129/regex-expression-for-digit-followed-by-dot

	preformat find and repalce mcq
	Find: ^\d+\.
	replace: ##\r\n@\r\n&&\r\n$0

	find multiple words at the same time: \bTest|\bsql  this mean search form Test or sql
	or find like \b(All above|All are|all bove|All the|All correct)
	find trailing space: [ \t]+$
	find line begine with number and dot. ex "999.": ^\d+\..*$
	find line start with + sign: ^\+.*$
	find ^\tLine.*\d+\.\t -> Ex. 	Line 6: 1.	
	find ^\tLine.*\d+\: ✓

	find line start with + or - and has above: ^(\+|\-)\s.*above
	^(\+|\-)\s.*\b(above|correct|all of above|All above|All are|all bove|All the|All correct)
	^(\+|\-)\s.*\b(all of the above|all of above|All above|All are|All the|All correct)
	^(\+|\-)\s.*$

	Find string start with + or -   =>>>>  ^(\+|\-)\s.*$
	Find string end with   .ccf     =>>>>  .*\.ccf$
	In Notepad++ the search result just select text and right click and choose copy instead using keyboard shortcut
	in order to not copy the line number
*/

function fn_getCards($file_name){
	$path_to_file = $file_name.'.txt';
	$lines = file($path_to_file);
	$sections=[]; $sub = '';
	$cards = []; $opts = []; $ans = ''; $img=''; $note=''; $cind = 0;
	if($lines === false) return $cards;
	
	foreach ($lines as $ln => $line) {
		$line = trim($line);
		if(substr($line, 0, 8) == 'SUBJECT:'){
			$sub = trim(substr($line, 8));
			$sections[] = $sub;
			continue;
		}
		
		if(preg_match('/^\d+\.\s/', $line, $match) === 1){
			$qn = $match[0];
			$q  = substr($line, strlen($qn));
			$q  = trim($q);
			$qn = (int)$qn;
			$cards[] = array($qn, $q, array(),'','','',0);//No.,question, option, answer, image, note
			$cind++;
		}
		else{
			if($cind == 0 || empty($line)) continue;// skip if it does reach question mark by number d.
			$opt = array("value"=>"", "text"=>"");
			$cha = substr($line, 0, 1);
			if ($cha == '+') {
				$line = trim(substr($line, 1));
				$opt["value"] = 1;
				$opt["text"]  = $line;
				$ans = $line;
				$opts[] = $opt;
			}else{
				if ($cha == '-'){
					$line = substr($line, 1);
					$opt["value"] = 0;
					$opt["text"] = trim($line);
					$opts[] = $opt;
				} else {
					if(substr($line, 0, 6) == 'IMAGE:'){
						$img = trim(substr($line, 6));
					}
					if(substr($line, 0, 5) == 'NOTE:'){
						$note = trim(substr($line, 5));
					}
				}
			}
			if($ln<count($lines)-1){
				if(substr($lines[$ln+1], 0, 8) == 'SUBJECT:' || preg_match('/^\d+\.\s/', $lines[$ln+1], $match) === 1){
					$cards[$cind-1][2] = $opts;
					$cards[$cind-1][3] = $ans;
					$cards[$cind-1][4] = $img;
					$cards[$cind-1][5] = strval($cind-1);
					$cards[$cind-1][6] = count($sections);
					$opts = []; $ans = ''; $img =''; $note='';
				}
			}
		}
	}
	if($cind>0){
		$cards[$cind-1][2] = $opts;
		$cards[$cind-1][3] = $ans;
		$cards[$cind-1][4] = $img;
		$cards[$cind-1][5] = $note;
		$cards[$cind-1][6] = count($sections);
		
	}
	return array($sections, $cards);
}
//$file_name = 'mcqs-last-final';
$file_name = 'national-exam';
$sections = [];
$cards  = [];
$nlines = []; $ic = 0;
if(!empty($_GET['fname'])){
	$file_name = $_GET['fname'];
	list($sections,$cards) = fn_getCards($file_name);
	//die(print_r($cards));
	//list($ic, $nlines) = fn_parseMCQ($file_name);
}else if(!empty($file_name)){
	list($sections,$cards) = fn_getCards($file_name);
}
?>
<script type="text/javascript">
/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
/*
var lastScrollY = window.pageYOffset;
window.addEventListener('scroll', function(){
	var newScrollY = window.pageYOffset;
	if (lastScrollY > newScrollY) {
		(newScrollY<300 || (lastScrollY-newScrollY)>100) ? document.getElementById("topbar").style.top = "0px":null;
	} else {
		document.getElementById("topbar").style.top = "-460px"; //(newScrollY>100)?"-460px":"0px";
	}
	lastScrollY = newScrollY;
});
*/

var g_rating_group_counter = [0, 0, 0, 0, 0, 0];
var g_rating_set_num = 0;
function toggleSearchBar() {
	document.getElementById("topbar-inner").classList.toggle('fade');
	document.getElementById("tbarexpander").classList.toggle('spin');
}
function hideSearchBar() {
	if(!document.getElementById("topbar-inner").classList.contains('fade')){
		toggleSearchBar();
	}
}
function findAncestor (el, cls) {
    while ((el = el.parentElement) && !el.classList.contains(cls));
    return el;
}
function update_rating_count(){
	var list = document.querySelectorAll('.footbar a');
	for (var i = 1; i < list.length-1; i++) {
		list[i].innerText = g_rating_group_counter[i-1];
	}
}
function shuffle_cards(){
	//https://www.thetopsites.net/article/58361532.shtml
	var c = document.querySelector('.wrapper');
	for (var i = c.children.length; i >= 0; i--) {
		c.appendChild(c.children[Math.random() * i | 0]);
	}
}
function shuffle_choices(card){
	//https://www.thetopsites.net/article/58361532.shtml
	var c = card.querySelector('ul');
	for (var i = c.children.length; i >= 0; i--) {
		c.appendChild(c.children[Math.random() * i | 0]);
	}
}
function setInitialHeight(card){
	card.style.display = "block";
	//card.style.minHeight = card.clientHeight+"px";
	card.style.display = "none";
}
function showCard(card){
	shuffle_choices(card);
	if(card.style.display != "block"){
		card.style.display = "block";
		if(card.classList.contains("fade")) card.classList.toggle('fade');
		var radios = card.getElementsByTagName('input');
		for(i=0; i<radios.length; i++ ) {
			radios[i].checked = false;
		}
		var x = card.querySelector('.answer');  
		if (x.classList.contains("highlight")) {
			x.classList.toggle("highlight");
		}
	}
}
function hideCard(card){
	card.classList.toggle('fade');
	card.addEventListener('transitionend', function(e) {
		card.style.display = "none";
	}, { capture: false, once: true, passive: false });
}
function viewAll(){
	var loader = document.getElementById("loader-wrapper");
	loader.style.display = "flex";
	//shuffle_cards();
	var cards = document.getElementsByClassName("card");
	for (var i = 0; i < cards.length; i++) {
		showCard(cards[i]);
	}
	loader.style.display = "none";
	g_rating_set_num = cards.length;
	hideSearchBar();
}

function filter_cards(){
	var loader = document.getElementById("loader-wrapper");
	var lblres = document.getElementById("search-result");
	loader.style.display = "flex";
	var stxt = document.getElementById("text2search").value.toLowerCase();
	if(stxt.length > 0){
		var found = 0;
		var cards = document.getElementsByClassName("card");
		var range = [0,0]; range[1] = cards.length;
		var parts = stxt.split('-'); 
		var hasrg = (parts.length==2)?true:false; 
		if(hasrg){
			range[0] = parseInt(parts[0].trim());
			range[1] = parseInt(parts[1].trim()) ? parseInt(parts[1].trim()) : cards.length;
		}
		var chks  = stxt.split('+');
		for (var i = 0; i < cards.length; i++) {
			if(hasrg){
				if(range[0] <= i+1 && i+1 <= range[1]){
					showCard(cards[i]);
					found++;
				}
			}else{
				var bfound = false;
				var qtxt  = cards[i].textContent;
				for(k=0 ; k<chks.length; k++){
					if(qtxt.toLowerCase().indexOf(chks[k])!= -1){
						showCard(cards[i]);
						if(!bfound) found++;
						bfound = true;
					}
				}
				if(!bfound) cards[i].style.display = "none";
			}
		}
		g_rating_set_num = found;
		lblres.innerText="Found " + found + " card" + (found>1?"s":"");
		lblres.style.display = "block";
		hideSearchBar();
	}else{
		viewAll();
		lblres.innerText="";
		lblres.style.display = "none";
	}
	
	loader.style.display = "none";
}
var card_click = function (){
	var d = document.getElementById(this.getAttribute('id')); 
	var x = d.querySelector('.answer');  
	if (x.classList) {
		x.classList.toggle("highlight");
	} else {
		// For IE9
		var classes = x.className.split(" ");
		var i = classes.indexOf("highlight");
		if (i >= 0){
			classes.splice(i, 1);
		}else{
			classes.push("highlight");
		}
		x.className = classes.join(" ");
	}
}
function search(){
	if(event.key === 'Enter') {
		filter_cards();
	}
}
function load_cards_rating(sender, rating){
	var counter = 0;
	var p = findAncestor(sender,'footbar');
	for(var i = 0; i<p.children.length; i++){
		p.children[i].className = 'color'+(i==0?'all':(i-1));
	}
	sender.className = 'color'+rating+' active';
	var cards = document.getElementsByClassName("card");
	var card_state = JSON.parse(localStorage.getItem("card_state"));															 
	for (var i = 0; i < cards.length; i++) {
		var rv  = parseInt(cards[i].getAttribute('data-rating'));
		if(rating == -1){
			if(card_state !== null){
				if(card_state[cards[i].id] == undefined || card_state[cards[i].id] == null){
					card_state[cards[i].id] = 1;
					showCard(cards[i]);
					counter++;
				}else{
					cards[i].style.display = "none";
				}
			}
		}else{
			if(rv == rating){
				showCard(cards[i]);
				counter++;
			}else{
				cards[i].style.display = "none";
			}
		}	
	}
	if(counter == 0 && rating == -1){
		counter = cards.length;
		viewAll();
	}
	g_rating_set_num = counter;
	var lblText = document.getElementById("search-result")
	lblText.style.display = "block";
	lblText.innerText = "Number of card: " + g_rating_set_num;
	hideSearchBar();
}

function onOptionChange(){
	var c = findAncestor(this, 'card');
	var rating = parseInt(c.getAttribute('data-rating'));
	var old_ra = rating;
	var optval = parseInt(this.getAttribute('data-value'));
	//(optval == 0 ) ? rating++ : rating--;
	if(optval ==0) rating++;
	if(rating > 6) rating = 0;
	if(rating < 0) rating = 0;
	c.setAttribute('data-rating', rating);
	c.className = "card cardcolor" + rating;
	
	g_rating_group_counter[old_ra] = g_rating_group_counter[old_ra] - 1;
	g_rating_group_counter[rating] = g_rating_group_counter[rating] + 1;
	update_rating_count();
	//c.style.borderColor = (optval != 1)?"#F70000":"#38c172";
	//var a = c.children[3];  
	if(optval == 1){
		hideCard(c);
		g_rating_set_num--;
		var lblText = document.getElementById("search-result");
		lblText.style.display = "block";
		lblText.innerText = "Number of card: " + g_rating_set_num;
		if(g_rating_set_num == 0){
			toggleSearchBar();
			lblText.style.display = "none";
		} 
		var card_state = JSON.parse(localStorage.getItem("card_state"))||{};
		card_state[c.id] = 1;// 1=hidden; 2=show
		localStorage.setItem("card_state", JSON.stringify(card_state));
	}
	
	var state_rating = JSON.parse(localStorage.getItem("state_rating"))||{};
	state_rating[c.id] = rating;
	localStorage.setItem("state_rating", JSON.stringify(state_rating));
}
function viewCardsSubject(subj){
	var loader = document.getElementById("loader-wrapper");
	loader.style.display = "flex";
	//shuffle_cards();
	var cards = document.getElementsByClassName("card");
	for (var i = 0; i < cards.length; i++) {
		var sub  = parseInt(cards[i].getAttribute('data-sub'));
		if(subj == sub){
			showCard(cards[i]);
		}else{
			hideCard(cards[i]);
		}
	}
	loader.style.display = "none";
	g_rating_set_num = cards.length;
	hideSearchBar();
	hideSubject();
}
function showSubject(){
	var modal = document.getElementById("myModal");
	modal.style.display = "block";
}
function hideSubject(){
	var modal = document.getElementById("myModal");
	modal.style.display = "none";
}
window.onclick = function(event) {
	var modal = document.getElementById("myModal");
	if (event.target == modal) {
		modal.style.display = "none";
	}
}
function page_ready(){
	var quest_click = function (){
		var d = document.getElementById(this.parentElement.id); 
		var x = d.querySelector('.choi');  
		var s = x.style.display;
		if(s == "none" || s==""){
			x.style.display = "block";
		}else{
			x.style.display = "none";
		}
	}
	var els = document.getElementsByClassName("card");
	var state_rating = JSON.parse(localStorage.getItem("state_rating"));
	for (var i = 0; i < els.length; i++) {
		var card = els[i];
		card.addEventListener('click', card_click, false);
		if(state_rating !== null){
			var r = parseInt(state_rating[card.id]||0);
			card.setAttribute('data-rating', r.toString());
			card.className = "card cardcolor" + r;
			g_rating_group_counter[r]++;
		}else{
			g_rating_group_counter[0] = els.length;
		}
		setInitialHeight(card);
		//card.addEventListener('click', card_click, false);
		//card.children[0].addEventListener('click', quest_click, false);
		var ulind = 1;
		if(card.children[1].localName=="p") ulind = 2; 
		card.children[ulind].className = 'opts nostyle';
		var lbls = card.querySelectorAll("ul li input");
		for(var j=0; j<lbls.length; j++){
			lbls[j].addEventListener('change', onOptionChange, false);
		}
	}
	update_rating_count();
	window.scrollTo(0, parseInt(localStorage.getItem("page_scroll_top")||0));
}
document.addEventListener("DOMContentLoaded", page_ready);
window.onscroll = function() {localStorage.setItem("page_scroll_top", window.pageYOffset);};
</script>
</head>
<body>
	<div id="topbar">
		<div id="topbar-inner">
			<?php 
			echo '<div onclick="shuffle_cards();" style="cursor:pointer">';
			echo '<h2 style="color:#FFF; text-align: center;">SHUFFLE ALL '.count($cards).'</h2>';
			echo '</div>';
			?>
			<div class="textarea-wrapper" data-tip-1="n-: show card start from n&#013;&#010;n-m: show card between n and m&#013;&#010;@answer: show card which answer start with somthing&#013;&#010;find 1+ ...: search with a word or text or combine with word or text by using plus sign(+)">
				<input placeholder="n- or n-m or @answer or find 1+find 2+find 3+...+find n" id="text2search" onclick="this.select();" onkeydown="search()"/>
			</div>
			<div style="text-align:center;"><button onclick="filter_cards()">SEARCH</button></div>
		</div>
		<div id="tbarexpander" onclick="toggleSearchBar();"><div>&nbsp;</div></div>
	</div>
	<div class="container">
		<div id="loader-wrapper"><div class="loader"></div></div>
		<p style="display:none" id="search-result"></p>
		<div class="wrapper">
			<?php 
			//echo implode("",$nlines);
			
			//usort($array, function($a,$b){ return $a['optionNumber']-$b['optionNumber'];} );
			//sort card by answer
			/* usort($cards, function($a, $b) {
				return strcmp($a[3], $b[3]);
			}); */
			foreach($cards as $ind => $card){
				echo '<div id="'.$ind.'" data-sub="'.$card[6].'" data-cardid="'.$ind.'" class="card" data-rating="0">';
				$q = str_replace("\\n","<br/>",$card[1]);
				if(!empty($card[4])) echo '<div class="imgwrapper"><img src="images/'.$card[4].'"/></div>';
				echo '<p class="ques">'.($ind+1).': '.$card[0].'. '.$q.'</p>';
				$opts = $card[2];
				shuffle($opts);
				echo '<ul class="opts">';
				$ans = '';
				foreach($opts as $i=>$opt){
					echo '<li data-value="'.$opt['value'].'" '.($opt['value']==1 ? 'class="answer"':'').'>';
					echo '<label class="radio-wrp">';
					echo $opt['text'];
					echo '<input type="radio" name="'.$ind.'" data-value="'.$opt['value'].'"><span class="checkmark"></span>';
					echo '</label>';
					echo '</li>';
					if($opt['value']==1) $ans = $opt["text"];
				}
				echo "</ul>";
				echo '<p class="choi">@'.$ans.'</p>';
				echo '</div>';
			}
			?>
		</div>
	</div>
	<div class="footbar">
	  <a onclick="load_cards_rating(this, -1);" href="#" class="color-1 active">REV</a>
	  <a onclick="load_cards_rating(this, 0);" href="#" class="color0">0</a>
	  <a onclick="load_cards_rating(this, 1);" href="#" class="color1">0</a>
	  <a onclick="load_cards_rating(this, 2);" href="#" class="color2">0</a>
	  <a onclick="load_cards_rating(this, 3);" href="#" class="color3">0</a>
	  <a onclick="load_cards_rating(this, 4);" href="#" class="color4">0</a>
	  <a onclick="load_cards_rating(this, 5);" href="#" class="color5">0</a>
	  <a onclick="showSubject();" href="#" class="color-1">SUB</a>
	</div>
	<div id="myModal" class="modal">
	  <!-- Modal content -->
	  <div class="modal-content">
		<span class="close">&times;</span>
		<ul><?php
			foreach($sections as $si => $sub){
				echo "<li><a onclick='viewCardsSubject(".($si+1).");'>".$sub."</a></li>";
			}
		?>
		</ul>
	  </div>
	</div>
</body>
</html>