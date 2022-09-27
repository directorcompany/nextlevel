<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>

<script>
     const todo = {
            title: 'Some really important work to finish',
            body: 'work to finish'
        };

var name=sessionStorage.getItem('name');
var options=sessionStorage.getItem('option');
var main=sessionStorage.getItem('main');
var timer=sessionStorage.getItem('time');
var value=sessionStorage.getItem('points');
alert(name+ ' ' + options+' ' +main+' ' +value+ ' '+timer);
        fetch('/public/page?name='+name+'&option='+options+'&main='+main+'&time='+timer+'&points='+value,{
            // method: 'GET',
        // headers: {
        //     'Accept': 'application/json',
        //     'Content-Type': 'application/json',
        //     'Access-Control-Allow-Origin':'*',
        //     'Access-Control-Allow-Methods': 'GET,POST,PUT,PATCH,DELETE,OPTIONS',
        //     'Access-Control-Allow-Headers': 'content-type'
        // },
            })
            .then(response => response.json())
            .then(json => {
                console.log(json);
            });
     
</script>

</body>
</html>