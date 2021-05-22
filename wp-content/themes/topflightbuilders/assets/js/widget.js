jQuery(document).ready(function ($) {
    function media_upload(button_selector) {
      var _custom_media = true,
          _orig_send_attachment = wp.media.editor.send.attachment;
      $('body').on('click', button_selector, function () {
        var button_id = $(this).attr('id');

        var closest_save = $('#' + button_id).closest('form').find('.widget-control-save');
        console.log(closest_save)
        closest_save.attr('disabled', false);
        closest_save.attr('value', 'Save');

        wp.media.editor.send.attachment = function (props, attachment) {
          if (_custom_media) {
            $('.' + button_id + '_img').attr('src', attachment.url);
            $('.' + button_id + '_url').val(attachment.url);
          } else {
            return _orig_send_attachment.apply($('#' + button_id), [props, attachment]);
          }
        }
        wp.media.editor.open($('#' + button_id));
        return false;
      });
    }
    media_upload('.js_custom_upload_media');
  });