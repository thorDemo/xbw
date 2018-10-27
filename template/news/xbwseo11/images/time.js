/*
now = new Date(),hour = now.getHours()
if(hour < 6){document.write("凌晨好!")}
else if (hour < 9){document.write("早上好!")}
else if (hour < 12){document.write("上午好!")}
else if (hour < 14){document.write("中午好!")}
else if (hour < 17){document.write("下午好!")}
else if (hour < 19){document.write("傍晚好!")}
else if (hour < 22){document.write("晚上好!")}
else {document.write("夜里好!")}
*/

function Hellow_Word(){
	var day = new Array();
	day[0] = "星期日";
	day[1] = "星期一";
	day[2] = "星期二";
	day[3] = "星期三";
	day[4] = "星期四";
	day[5] = "星期五";
	day[6] = "星期六";
	var now = new Date();
	var yy = now.getYear();
	var mo = now.getMonth()+1;
	var dd = now.getDate();
	var ww = day[now.getDay()];
	var hh = now.getHours();
	var mm = now.getMinutes();
	var ss = now.getTime() % 60000;
	ss = (ss - (ss % 1000)) / 1000;
	var clock = hh+':';
	if (mm < 10) clock += '0';
	clock += mm+':';
	if (ss < 10) clock += '0';
	clock += ss;
	var cl = '<font color="#000000">';
	if (now.getDay() == 0) cl = '<font color="#000000">';
	if (now.getDay() == 6) cl = '<font color="#000000">';
	return('&nbsp;&nbsp;'+ cl +yy + '年' + mo + '月' + dd + '日&nbsp;&nbsp;' + clock + '&nbsp;&nbsp;' + ww + '');
}

function refreshCalendarClock(){
	document.all.calendarClock.innerHTML = Hellow_Word();
}
document.write('<font id="calendarClock"></font>');
setInterval('refreshCalendarClock()',1000);