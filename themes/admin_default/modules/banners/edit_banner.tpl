<!-- BEGIN: upload_blocked -->
<div class="alert alert-info">{CONTENTS.upload_blocked}</div>
<!-- END: upload_blocked -->
<!-- BEGIN: main -->
<div class="alert alert-info">{CONTENTS.info}</div>

<script type="text/javascript" src="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/jquery/jquery.validate.min.js"></script>
<script type="text/javascript" src="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/language/jquery.validator-{NV_LANG_INTERFACE}.js"></script>
<link type="text/css" href="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
<script type="text/javascript" src="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/language/jquery.ui.datepicker-{NV_LANG_INTERFACE}.js"></script>

<form id="frm" method="post" enctype="multipart/form-data" action="{CONTENTS.action}">
	<input type="hidden" value="1" name="save" id="save" />
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<col class="w250" />
			<col class="w50" />
			<col />
			<tbody>
				<tr>
					<td>{CONTENTS.title.0}:</td>
					<td><sup class="required">&lowast;</sup></td>
					<td><input name="{CONTENTS.title.1}" class="w300 required form-control" type="text" value="{CONTENTS.title.2}" maxlength="{CONTENTS.title.3}" /></td>
				</tr>
				<tr>
					<td>{CONTENTS.plan.0}:</td>
					<td><sup class="required">&lowast;</sup></td>
					<td>
					<select name="{CONTENTS.plan.1}" class="form-control w200">
						<!-- BEGIN: plan -->
						<option value="{PLAN.key}"{PLAN.selected}>{PLAN.title}</option>
						<!-- END: plan -->
					</select></td>
				</tr>
				<tr>
					<td>{CONTENTS.client.0}:</td>
					<td>&nbsp;</td>
					<td>
					<select name="{CONTENTS.client.1}" class="form-control w200">
						<option value="">&nbsp;</option>
						<!-- BEGIN: client -->
						<option value="{CLIENT.key}"{CLIENT.selected}>{CLIENT.title}</option>
						<!-- END: client -->
					</select></td>
				</tr>
				<tr>
					<td>{CONTENTS.file_name.0}:</td>
					<td>&nbsp;</td>
					<td>
					<!-- BEGIN: img_info -->
					<a href="javascript:void(0)" data-src="{CONTENTS.file_name.1}" {CONTENTS.file_name.2}><img alt="{CONTENTS.file_name.4}" src="{CONTENTS.file_name.3}" width="16" height="16" style="cursor: pointer" /></a>
					<!-- END: img_info -->
					<!-- BEGIN: imageforswf1 -->
					<a href="javascript:void(0)" data-src="{CONTENTS.file_name.5}" class="open_modal_image" {CONTENTS.file_name.2}><img alt="{CONTENTS.file_name.4}" src="{CONTENTS.file_name.6}" width="16" height="16" style="cursor: pointer; margin-left: 20px;" /></a>
					<!-- END: imageforswf1 -->
					</td>
				</tr>
				<tr>
					<td>{CONTENTS.upload.0}:</td>
					<td>&nbsp;</td>
					<td><input name="{CONTENTS.upload.1}" type="file" /></td>
				</tr>
				<!-- BEGIN: imageforswf2 -->
				<tr>
					<td>{CONTENTS.upload.2}:</td>
					<td>&nbsp;</td>
					<td><input name="{CONTENTS.upload.3}" type="file" /></td>
				</tr>
				<!-- END: imageforswf2 -->
				<tr>
					<td>{CONTENTS.file_alt.0}:</td>
					<td>&nbsp;</td>
					<td><input class="w300 form-control" name="{CONTENTS.file_alt.1}" type="text" value="{CONTENTS.file_alt.2}" maxlength="{CONTENTS.file_alt.3}" /></td>
				</tr>
				<tr>
					<td>{CONTENTS.click_url.0}:</td>
					<td>&nbsp;</td>
					<td><input class="w300 url form-control" name="{CONTENTS.click_url.1}" type="text" value="{CONTENTS.click_url.2}" maxlength="{CONTENTS.click_url.3}" /></td>
				</tr>
				<tr>
					<td>{CONTENTS.target.0}:</td>
					<td>&nbsp;</td>
					<td>
					<select name="{CONTENTS.target.1}" class="form-control w200">
						<!-- BEGIN: target -->
						<option value="{TARGET.key}"{TARGET.selected}>{TARGET.title}</option>
						<!-- END: target -->
					</select></td>
				</tr>
				<tr>
					<td>{CONTENTS.publ_date.0}:</td>
					<td>&nbsp;</td>
					<td><input name="{CONTENTS.publ_date.1}" class="w100 datepicker form-control pull-left" type="text" value="{CONTENTS.publ_date.2}" maxlength="{CONTENTS.publ_date.3}" readonly="readonly" /></td>
				</tr>
				<tr>
					<td>{CONTENTS.exp_date.0}:</td>
					<td>&nbsp;</td>
					<td><input name="{CONTENTS.exp_date.1}" class="w100 datepicker form-control pull-left" type="text" value="{CONTENTS.exp_date.2}" maxlength="{CONTENTS.exp_date.3}" readonly="readonly" /></td>
				</tr>
                <tr>
                    <td colspan="3">
                        <p class="m-bottom">{LANG.bannerhtml}:</p>
                        {CONTENTS.bannerhtml}
                    </td>
                </tr>
			</tbody>
		</table>
	</div>
	<div class="text-center">
		<input type="submit" value="{CONTENTS.submit}" class="btn btn-primary" />
	</div>
</form>

<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">{LANG.file_name}</h4>
			</div>
			<div class="modal-body">

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#frm').validate();
		$(".datepicker").datepicker({
			showOn : "both",
			dateFormat : "dd/mm/yy",
			changeMonth : true,
			changeYear : true,
			showOtherMonths : true,
			buttonImage : nv_base_siteurl + "assets/images/calendar.gif",
			buttonImageOnly : true
		});

		$("#open_modal_image").on("click", function() {
			$('#imagemodal .modal-dialog').css({'width': $(this).data('width')+23});
			$('#imagemodal .modal-body').html('<img src="' + $(this).data('src') + '" />');
			$('#imagemodal').modal('show');
		});

		$("#open_modal_flash").on("click", function() {
			$('#imagemodal .modal-dialog').css({'width': $(this).data('width')+23});
			$('#imagemodal .modal-body').html('<object type="application/x-shockwave-flash" data="' + $(this).data('src') + '" width="' + $(this).data('width') + '"><param name="movie" value="' + $(this).data('src') + '"><param name="wmode" value="transparent"></object>');
			$('#imagemodal').modal('show');
		});
	});
</script>
<!-- END: main -->