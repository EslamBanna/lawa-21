<script src="{{ asset('js/tinymce/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>

<script>
    tinymce.init({

        selector: 'textarea#myeditorinstance',

        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',

    });
</script>
