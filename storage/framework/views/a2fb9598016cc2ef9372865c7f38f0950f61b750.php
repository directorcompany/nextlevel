<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            .then(response => response.text())
            .then(json => {
                var response = JSON.parse(json);
                console.log(response);
            });
    //  const todo = {
    //         title: 'Some really important work to finish'
    //     };
        
    //     fetch('http://nextlevel/public/page',{
    //             method: 'GET',
               
    //             headers: {
    //         "Access-Control-Allow-Origin": "*",
    //         "Content-Type": "text/plain"
    //     },
    //              body: JSON.stringify(todo)
    //         })
    //         .then(response => response.json())
    //         .then(json => {
    //             console.log(json);
    //         });
    document.location.href = 'http://nextlevel/public';
     
</script>

</body>
</html><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\nextlevel\resources\views/test/level.blade.php ENDPATH**/ ?>