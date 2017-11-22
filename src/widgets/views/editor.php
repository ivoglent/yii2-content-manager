<?php
/**
 * @project  Investment Deals
 * @copyright © 2017 by ivoglent
 * @author ivoglent
 * @time  9/19/17.
 */
$editorId = substr(md5(time() . uniqid()), 0, 6);
?>
<?php if (!empty($model)):?>
    <?= \yii\helpers\Html::activeTextarea($model, $attribute, [
        'id' => $editorId
    ])?>
<?php else :?>
    <?= \yii\helpers\Html::textarea($target, $value, [
        'id' => $editorId
    ])?>
<?php endif;?>
<script>
    ;(function($){
        $(document).ready(function(){
            tinymce.init({
                selector: '#<?=$editorId?>',
                height: 500,
                menubar: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor textcolor code',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table contextmenu paste code help'
                ],
                fontsize_formats: "8px 10px 12px 14px 16px 18px 20px 22px 24px 36px",
                toolbar: 'insert | undo redo |  styleselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | fontsizeselect | removeformat | code | help',
                content_css: [
                    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                    '//www.tinymce.com/css/codepen.min.css'],
                file_picker_callback: function(callback, value, meta) {
                    yii.media.dialog.show({
                        target : false
                    }, function(response){
                        callback(response);
                    });
                },
            });
        });
    })(jQuery);
</script>