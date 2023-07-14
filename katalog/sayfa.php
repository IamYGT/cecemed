<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

    <script src="js/flipbook.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/flipbook.style.css">
    <link rel="stylesheet" type="text/css" href="css/flipbook.skin.white.css">

    <script type="text/javascript">

        $(document).ready(function () {
            var book1 = $("#container").flipBook({
                pages:[
                    {src:"images/sayfalar/1.jpg", thumb:"images/sayfalar/1.jpg", title:""},
                    {src:"images/sayfalar/2.jpg", thumb:"images/sayfalar/2.jpg", title:""},
                    {src:"images/sayfalar/3.jpg", thumb:"images/sayfalar/3.jpg", title:""},
                    {src:"images/sayfalar/4.jpg", thumb:"images/sayfalar/4.jpg", title:""},
                    {src:"images/sayfalar/5.jpg", thumb:"images/sayfalar/5.jpg", title:""},
                    {src:"images/sayfalar/6.jpg", thumb:"images/sayfalar/6.jpg", title:""},
                    {src:"images/sayfalar/7.jpg", thumb:"images/sayfalar/7.jpg", title:""},
                    {src:"images/sayfalar/8.jpg", thumb:"images/sayfalar/8.jpg", title:""},
                    {src:"images/sayfalar/9.jpg", thumb:"images/sayfalar/9.jpg", title:""},
                    {src:"images/sayfalar/10.jpg", thumb:"images/sayfalar/10.jpg", title:""},
                    {src:"images/sayfalar/11.jpg", thumb:"images/sayfalar/11.jpg", title:""},
                    {src:"images/sayfalar/12.jpg", thumb:"images/sayfalar/12.jpg", title:""},
                    {src:"images/sayfalar/13.jpg", thumb:"images/sayfalar/13.jpg", title:""},
                    {src:"images/sayfalar/14.jpg", thumb:"images/sayfalar/14.jpg", title:""}
                  ],

                //menu
                btnNext:true,
                btnPrev:true,
                btnZoomIn:true,
                btnZoomOut:true,
                btnToc:true,
                btnThumbs:true,
                btnShare:true,
                btnExpand:true,

                startPage:0,

                pageWidth:3000,
                pageHeight:1688,
                thumbnailWidth:100,
                thumbnailHeight:141,

                flipType:'3d',

                time1:500,
                time2:600 

            });

        })
    </script>

</head>

<body>


<div id="container" style=""></div>
 
</body>

</html>
