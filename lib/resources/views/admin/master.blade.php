<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ asset('public/admin') }}/" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>@yield('title')</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />

    <!--Modal pop up-->
    <link rel="stylesheet" href="{{ asset('css/jquery.modal.min.css') }}" />




    @yield('css')

    <style>
        /* Custom scroll bar */
        ::-webkit-scrollbar {
            width: 10px;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1; 
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: #888; 
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555; 
            border-radius: 10px;
        }
        /* Custom scroll bar */
    </style>
    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="lib/chart-master/Chart.js"></script>

    @yield('scripthead')

    <!--Tiny MCE-->
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
    
    <!--Tiny MCE CDN-->
    <script src="https://cdn.tiny.cloud/1/gvpyig6870spndqs913nw19k6m1bwghe3k85m72cfucf1l4n/tinymce/5/tinymce.min.js"></script>

<script>
    // Setup SERVER link
    var serverlink = "https://minhglobal.com/public/admin/";

    tinymce.init({
        selector:'textarea.editmce',
        plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'save table directionality emoticons template paste'
        ],
        toolbar: [
            'undo redo | styleselect | fontselect | fontsizeselect | cut copy paste | anchor ',
            'alignleft aligncenter alignright alignjustify | bold underline italic | bullist numlist outdent indent | link image | forecolor backcolor | preview media fullpage emoticons code',
        ],
        // menubar: 'edit view format',
        fontsize_formats: '11px 12px 14px 16px 18px 24px 36px 48px',
        menu: {
            file: { title: 'File', items: 'newdocument restoredraft | preview | print ' },
            edit: { title: 'Edit', items: 'undo redo | cut copy paste | selectall | searchreplace' },
            view: { title: 'View', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen' },
            insert: { title: 'Insert', items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime' },
            format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align | forecolor backcolor | removeformat' },
            tools: { title: 'Tools', items: 'spellchecker spellcheckerlanguage | code wordcount' },
            table: { title: 'Table', items: 'inserttable tableprops deletetable row column cell' },
        },
        

        // file_picker_callback: function(callback, value, meta) {
        //     // Provide file and text for the link dialog
        //     if (meta.filetype == 'file') {
        //     callback('mypage.html', {text: 'My text'});
        //     }

        //     // Provide image and alt text for the image dialog
        //     if (meta.filetype == 'image') {
        //     callback('myimage.jpg', {alt: 'My alt text'});
        //     }

        //     // Provide alternative source and posted for the media dialog
        //     if (meta.filetype == 'media') {
        //     callback('movie.mp4', {source2: 'alt.ogg', poster: 'image.jpg'});
        //     }
        // },

        // images_upload_base_path: 'public',
        // images_upload_credentials: true,



        // without images_upload_url set, Upload tab won't show up
        images_upload_url: 'upload.php',
        

        // override default upload handler to simulate successful upload
        images_upload_handler: function (blobInfo, success, failure) {
            var xhr, formData;
        
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', 'upload.php');
        
            xhr.onload = function() {
                var json;
            
                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }
            
                json = JSON.parse(xhr.responseText);
            
                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
            
				success('https://minhglobal.com/public/admin/' + json.location);
                // success(serverlink + json.location);

            };
        
            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
        
            xhr.send(formData);
        },
        
    });
</script>


</head>

<body>
    <section id="container">

        <!--header start-->
        @include('admin.smallpart.header')

     
            <!--sidebar start-->
            @include('admin.smallpart.sidebar')

            @yield('main')


        <footer class="site-footer">
            <div class="text-center">
                <a href="index.html#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="lib/jquery/jquery.min.js"></script>

    <!-- Sweet alert -->
    <script src="js/sweetalert2.all.min.js"></script>

    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="lib/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="lib/gritter-conf.js"></script>
    <!--script for this page-->
    <script src="lib/sparkline-chart.js"></script>
    <script src="lib/zabuto_calendar.js"></script>
    
    <script type="application/javascript">
        $(document).ready(function() {
            $("#date-popover").popover({
                html: true,
                trigger: "manual"
            });
            $("#date-popover").hide();
            $("#date-popover").click(function(e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function() {
                    return myDateFunction(this.id, false);
                },
                action_nav: function() {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [{
                    type: "text",
                    label: "Special event",
                    badge: "00"
                }, {
                    type: "block",
                    label: "Regular event",
                }]
            });
        });

        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>




    
    <!-- jQuery Modal -->
    <script src="{{ asset('js/jquery.modal.min.js') }}"></script>
    
    

    <script src="js/preview.js"></script>

    @yield('scriptajax')
    @yield('script')
</body>

</html>