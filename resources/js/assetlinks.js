$(function(){
	$(".field .input .elementselect .element:not(.linked)").each(function(){
		var $this = $(this);
		if (!$this.data("url")) { return false; }
		var $a = $("<a class='icon'> </a>")
			.attr("href", $this.data("url"))
			.attr("target", "_blank")
			.attr("title", "Download")
			.addClass("download")
			.addClass("sharebtn")
			.addClass("icon")
			.appendTo($this)
		$this
			.addClass("linked")
			.append($a);
	})
});