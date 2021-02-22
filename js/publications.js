$('#jouPapers').hide()
$('#workshopPapers').hide()

function loadContent(mod){
	if (mod == 1){
		$('#conf').addClass('active')
		$('#jou').removeClass('active')
		$('#work').removeClass('active')
		$('#confPapers').show()
		$('#jouPapers').hide()
		$('#workshopPapers').hide()
	}
	if (mod == 2){
		$('#jou').addClass('active')
		$('#conf').removeClass('active')
		$('#work').removeClass('active')
		$('#confPapers').hide()
		$('#jouPapers').show()
		$('#workshopPapers').hide()
	}
	if (mod == 3){
		$('#work').addClass('active')
		$('#jou').removeClass('active')
		$('#conf').removeClass('active')
		$('#confPapers').hide()
		$('#jouPapers').hide()
		$('#workshopPapers').show()
	}
}