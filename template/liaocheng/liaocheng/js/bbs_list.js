function getpage(lx, rscount, p) {
    $("news_list").innerHTML = "<p style=\"margin:9px;\"><img src=\"/image/ing.gif\" /> 加载中...</p>";
    Ajax("/bbs_news_list/?p=" + p, function (o) {
        $("news_list").innerHTML = o;
        setxs();
    }, "get", 2013, function () {
        $("/bbs_news_list/").innerHTML = "<p style=\"margin:9px;\"><img src=\"/image/i.gif\" /> 系统繁忙，请点击重新加载...</p>";
    });
}

function getdh(lx) {
    let lis = $("news_dh").getElementsByTagName("li");
    for (let i = 0; i < lis.length; i++) {
        if (lis[i].innerHTML.indexOf("javascript:getdh('" + lx + "');") != -1) {
            lis[i].className = "xz";
        } else {
            lis[i].className = "";
        }

    }
    getpage(lx, 0, 1);
}

function setxs() {
    let uls = $("news_list").getElementsByTagName("ul");
    for (let i = 0; i < uls.length; i++) {
        uls[i].onmouseover = function () {
            this.style.backgroundColor = "#eee";
        };
        uls[i].onmouseout = function () {
            this.style.backgroundColor = "";
        };
    }
}

setxs();