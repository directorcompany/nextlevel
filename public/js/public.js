var name=sessionStorage.getItem('name');
var options=sessionStorage.getItem('option');
var main=sessionStorage.getItem('main');
var timer=sessionStorage.getItem('time');
var value=sessionStorage.getItem('points');
        fetch('/public/page?name='+name+'&option='+options+'&main='+main+'&time='+timer+'&points='+value,{
            })
            .then(response => response.text())
            .then(json => {
                var response = JSON.parse(json);
                console.log(response);
            });