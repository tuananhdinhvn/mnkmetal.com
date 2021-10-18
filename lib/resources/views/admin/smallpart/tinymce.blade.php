<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
{{-- <script src="https://cdn.tiny.cloud/1/gvpyig6870spndqs913nw19k6m1bwghe3k85m72cfucf1l4n/tinymce/5/tinymce.min.js"></script> --}}

<script>
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
            
                success('http://localhost/myson/website/public/admin/' + json.location);

            };
        
            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
        
            xhr.send(formData);
        },
        
    });
</script>