
KindEditor.plugin('spage', function(K) {
	var self = this, name = 'spage';
	self.clickToolbar(name,function(){
		self.insertHtml('#page#');
	});
});
