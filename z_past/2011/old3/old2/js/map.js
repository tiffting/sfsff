Array.prototype.yoink = function(value){ for(var i=0; i<this.length;i++ ){ if(this[i]==value){ this.splice(i,1); } } }
Array.prototype.has = function(v){for (i=0;i<this.length;i++){ if (this[i]==v) return true; } return false; }
Array.prototype.intersect = function(arr2){ var arr1 = this; var r = [], o = {}, l = arr2.length, i, v; for (i = 0; i < l; i++) { o[arr2[i]] = true; } l = arr1.length; for (i = 0; i < l; i++) { v = arr1[i]; if (v in o) { r.push(v); } } return r; };
  
var Map = function(options){
        
  this.options = $.extend({
    mapElement : $('#sfsff_map'),
    filters : $('.filter'),
		favsContainer : $('.favs'),
		favsListPrefix : 'fav',
		favClass : '.fav',
		favCloseClassName : 'close',
		favCloseText : '–',
		favListClassName : 'fav',
		vendorSelector : '.vendor',
		vendorActiveClassName : 'active',
		shareUrlField : '#share_url',
		navItems : $('.map .map_nav a'),
		nextButtons : $('.next_button'),
		streetPanes : $('.street')
  },options);
  
  this.filters = [];
	this.favs = [];
  this.vendors = this.options.mapElement.find(this.options.vendorSelector);
  this.options.filters.click($.proxy(this.filterClick,this));
  this.vendors.click($.proxy(this.vendorClick,this));
	this.options.favsContainer.find('.'+this.options.favListClassName+' '+'.'+this.options.favCloseClassName).live('click',$.proxy(this.toggleFav,this));
	$(this.options.shareUrlField).focus(function(){$(this).select();}).click(function(){$(this).select();});
	this.loadFavsFromUrl();
	this.updateUrl();
	this.prepareNav();
};

Map.prototype.prepareNav = function(){
	this.options.streetPanes.hide().first().show();
	this.options.navItems.first().addClass('active');
	this.options.navItems.click($.proxy(function(e){
		this.options.streetPanes.hide();
		var target = $(e.target);
		var target = target.is('a') ? target : target.parents('a');
		this.options.navItems.removeClass('active');
		target.addClass('active');
		var pane = $( target.attr('href') );
		pane.show();
		return false;
	},this));
};

Map.prototype.vendorClick = function(e){
	var target = $(e.target);
	if(target.is(this.options.favClass) || target.parents(this.options.favClass).size()){
		var parent = target.parents(this.options.vendorSelector);
		var vendor = parent.size() ? parent : target;
		this.toggleFav(vendor.attr('id'));
	}
};

Map.prototype.toggleFav = function(id){
	if(id == ""){ return false; }
	if(typeof id == "object"){
		id = $(id.target).parent().attr('id').replace(this.options.favsListPrefix+"_","");
	}
	
	var vendor = $('#'+id);
	var vendorName = vendor.html();
	if(this.favs.has(id)){
		vendor.removeClass(this.options.vendorActiveClassName);
		this.favs.yoink(id);
		this.options.favsContainer.find('#'+this.options.favsListPrefix+'_'+id).remove();
	}else{
		vendor.addClass(this.options.vendorActiveClassName);
		this.favs.push(id);
		this.options.favsContainer.append('<div class="'+this.options.favListClassName+'" id="'+this.options.favsListPrefix+'_'+id+'"><div class="'+this.options.favCloseClassName+'">'+this.options.favCloseText+'</div>'+vendorName+'</div>');
	}
	this.updateUrl();
	if(this.favs.length == 0){
		this.options.favsContainer.addClass('empty');
	}else{
		this.options.favsContainer.removeClass('empty');
	}
};

Map.prototype.updateUrl = function(){
	var favs = this.favs.join(',');
	var scrollTop = $(window).scrollTop();
	window.location.hash = favs;
	$(window).scrollTop(scrollTop);
	var url = document.location.href;
	$(this.options.shareUrlField).val(url);

	// $.get("shorten_url.php", {url:url}, $.proxy(function(data){
	// 	$(this.options.shareUrlField).val(data);
	// },this))
};

Map.prototype.filterClick = function(e){
  var target = $(e.target);
  var title = target.attr('title');
  this.toggleFilter(target);
  this.doFilter(title);
};

Map.prototype.loadFavsFromUrl = function(){
	var hash = window.location.hash;
	this.loadFavs(hash.substring(1,hash.length).split(','));
}

Map.prototype.loadFavs = function(favlist){
	$.each(favlist,$.proxy(function(i,e){ this.toggleFav(e); },this));
}

Map.prototype.toggleFilter = function(target){
  var title = target.attr('title');
  if(this.filters.has(title)){
    target.removeClass('on');
    this.removeFilter(title);
  }else{
    target.addClass('on');
    this.addFilter(title);
  }
};

Map.prototype.addFilter = function(title){
  if(!this.filters.has(title)){ this.filters.push(title); }
};

Map.prototype.removeFilter = function(title){
  this.filters.yoink(title);
};

Map.prototype.showAllVendors = function(e){
  this.vendors.each($.proxy(function(i,e){
    this.showVendor(e);
  },this));
}

Map.prototype.hideVendor = function(e){
  $(e).fadeOut();
};

Map.prototype.showVendor = function(e){
  $(e).fadeIn();
};

Map.prototype.doFilter = function(title){
  if(this.filters.length == 0){
    this.showAllVendors();
  }else{
    this.vendors.each($.proxy(function(i,e){
      e = $(e);
      var classes = e.attr('class').split(' ');
      var filterMatches = classes.intersect(this.filters);
      if(filterMatches.length == 0){
        this.hideVendor(e);
      }else{
        this.showVendor(e);
      }
    },this));
  }
};







