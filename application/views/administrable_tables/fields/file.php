<div class="form-group">
	<label class="field"><strong><?= $field['name'] ?></strong></label>
	<br>
	<input id="<?= $field['complete_name'] ?>" class="path-file form-control" placeholder="<?= $field['name'] ?>" disabled="disabled" />
	<button class="btn btn-default btn-sm clear-file" rel="tooltip" data-original-title="Delete file" data-clear="<?= $field['complete_name'] ?>"><i class="pe-7s-close"></i></button>
	<div class="fileUpload btn btn-default btn-fill">
	    <span>Select a file</span>
	    <input id="upload-<?= $field['complete_name'] ?>" type="file" data-type="file" class="upload" name="<?= $field['complete_name'] ?>" />
	</div>
</div><hr>
<script>
	$("#upload-<?= $field['complete_name'] ?>").on('change', function(){
		$("#<?= $field['complete_name'] ?>").val( $(this).val() );
	})

	$('.clear-file').click(function(e){
		e.preventDefault();
		var name = $(this).attr('data-clear'),
			input = $('#upload-'+name)
		input.replaceWith(input.val('').clone(true));
		$('#'+name).val('');
	})
</script>