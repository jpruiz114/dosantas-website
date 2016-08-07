function measureBW(cnt, cb) {
    var start = new Date().getTime();
    var bandwidth;
    var i = 0;
    (function rec() {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", "/assets/logo-small.png", true);

        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 4) {
                var x = new Date().getTime() - start;
                bw = Number(((33 / (x / 1000))));
                bandwidth = ((bandwidth || bw) + bw) / 2;
                i++;
              if (i < cnt) {
                start = new Date().getTime();rec();
              }
                else cb(bandwidth.toFixed(0));
            }
        };
        xmlHttp.send(null);
    })();
}
