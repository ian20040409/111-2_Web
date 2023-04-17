// 循序播放陣列中指定的圖檔
var jsImg = new Array("images/1.jpg","images/2.jpg","images/3.jpg","images/4.jpg","images/5.jpg");
var jsImg_len = jsImg.length; // 圖檔量
var i = 1;
// 設定每兩秒執行一次 sequent 主 此行要在 function 之外
setInterval("sequImg()", 1000);

// 循序播放
function sequImg() {  
    document.getElementById("my_div").innerHTML = "<img src='" + jsImg[i] + "' style='width:1140px'>";
    i++;
    if (i >= jsImg_len) i = 0;
    return false;
}






