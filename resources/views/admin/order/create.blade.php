@extends('admin.layouts.master_layout')
@section('title', 'Create Order')
@section('admin_content')
@section('page_active','active')
@section('custom_css')
<style>
  .combo-select {
	position: relative;
	border-bottom: solid 1px #d2d2d2;
	max-width: 400px;
	font: 100% Helvetica, Arial, Sans-serif;
	font-size: 14px;
}
.combo-select .combo-input {
	margin-bottom: 0;
}
/**
 * Input field
 */
.combo-input {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	margin: 0;
	text-overflow: ellipsis;
	white-space: nowrap;
	border: none;
	width: 100%;
	box-sizing: border-box;
	padding: 0;
	height: 34px;
	line-height: 34px;
	padding-right: 34px;
	border-radius: 0px;
	font-size: 14px;
}
.combo-input:focus {
	outline: none;
}
/**
 * Arrow
 */
.combo-arrow {
	position: absolute;
	right: 0;
	top: 0;
	height: 100%;
	cursor: pointer;
	text-align: center;
	font-size: 22px;
	width: 40px;
	color: #999999;
}
.combo-arrow:before {
	content: "\f107";
	font-family: 'FontAwesome';
	font-size: 22px;
	top: -25px;
	display: block;
	width: 0;
	height: 0;
	right: 25px;
	bottom: 0;
	position: absolute;
	margin: auto 0;
}
/**
 * When opened
 */
.combo-open .combo-arrow {
	border-color: #51A7E8;
}
.combo-open .combo-arrow:before {
	content: "\f106";
}
/**
 * When focused
 */
.combo-focus {
box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  border-color: #51A7E8; 
  }
.combo-focus input {
	border-color: #51A7E8;
}
/**
 * Hide native select
 */
.combo-select select {
	position: absolute;
	z-index: 1;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	-webkit-appearance: none;
	opacity: 0;
}

@media only screen and (min-width: 960px) {
.combo-select select {
	left: -1px;
	top: -1px;
	width: 0;
	height: 0;
	margin: 0;
}
}
/**
 * Selected option
 */
.option-selected {
	background-color: #eee;
}
/**
 * Hovered option
 */
.option-hover {
	background-color: #dfdfdf;
	color: #454545;
}
/**
 * Option item
 */
.option-item {
	cursor: pointer;
/*border-bottom: 1px #e3e3e3 solid;*/ }
.option-item:hover {
	background-color: #efefef;
	color: #454545;
}
.option-item:last-child {
	border-bottom: none;
}
/**
 * Disabled and optgroups
 */
/*.option-group {
  cursor: text;
  font-weight: 600;
  background: #e1e1e1;
  border: 1px #ccc solid;
  border-width: 1px 0; }*/

/**
 * Disabled
 */
.option-disabled {
	opacity: 0.5;
}
/**
 * Dropdown
 */
.combo-dropdown {
	position: absolute;
	z-index: 999;
	top: 100%;
	left: 0;
	min-width: 100%;
	max-width: 300px;
	max-height: 270px;
	margin: 0;
	padding: 0;
	opacity: 0;
	visibility: hidden;
	/*display: none;*/
	overflow-y: auto;
	background: #fff;
	box-shadow: 0 1px 6px rgba(0, 0, 0, 0.12), 0 1px 6px rgba(0, 0, 0, 0.12);
	-webkit-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out;
	transition: all 0.2s ease-out;
	border-radius: 0;
	box-sizing: border-box;
	-webkit-transform: scale(0);
	-ms-transform: scale(0);
	transform: scale(0);
	-webkit-transform-origin: top left;
	-ms-transform-origin: top left;
	transform-origin: top left;
}
.combo-dropdown li {
	list-style: none;
	padding: 10px 15px;
	margin: 0 !important;
}
/**
 * On Active
 */
.combo-open .combo-dropdown {
	/*display: block; */
	-webkit-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
	opacity: 1;
	visibility: visible;
}
/**
 * Search marker
 */
.combo-marker {
	text-decoration: underline;
}

  </style>
@endsection
<div class="container-fluid ">

<h1>Generate Order</h1>
<div class="row mt-5">

    <div class="col-lg-8">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
          <form action="{{route('order.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Customer Name</label>
              <input type="text" name="cname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Customer Name" autocomplete="off" required >
                @error('category')
                <span class="text-danger">  {{$message}}</span>

                @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mobile</label>
              <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone" autocomplete="off" required>
           @error('phone')
           <span class="text-danger">  {{$message}}</span>

              @enderror
            </div>
            <div class="form-group">
                <label for="">City</label>
                <input type="text" class="form-control" name="city" value="Bahadurgarh">

            </div>
            <div class="form-group">
                <label for="">Pincode</label>
                <input type="text" class="form-control" name="pincode" value="124507">

            </div>

<div class="form-group">
    <label for="">Enter Address</label>
    <textarea name="cadd" class="form-control" id="" cols="30" rows="4"></textarea>
    @error('cadd')
    <span class="text-danger">  {{$message}}</span>

       @enderror

</div>
<div class="form-group">
    <select name="check_gst" class="form-control" id="" required>
        <option value="">Choose Gst</option>
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select>

</div>
<div class="form-group">
  <select class="search-select" name="p_id" >
    
        <option value="">Choose Product</option>
        @foreach ( $pro as $p)
        <option value="{{$p->id}}">{{$p->name}}</option>

        @endforeach

    </select>

</div>
<div class="form-group">
    <input type="number" name="qty" class="form-control" min="1" value="1" >

</div>
<div class="form-group">
<input type="text" name="amount" class="form-control" placeholder="Enter Unit  Price" required>

</div>
<div class="form-group">
    <input type="text" name="total_amount" class="form-control" placeholder="Enter Total  Price" required>

    </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>
<script>
  $(function(){ $('.search-select').comboSelect() });


(function (factory) {
	'use strict';
	if (typeof define === 'function' && define.amd) {
		// AMD. Register as an anonymous module.
		define(['jquery'], factory);
	} else if (typeof exports === 'object' && typeof require === 'function') {
		// Browserify
		factory(require('jquery'));
	} else {
		// Browser globals
		factory(jQuery);
	}
}(function ( $, undefined ) {

	var pluginName = "comboSelect",
		dataKey = 'comboselect';
	var defaults = {
		comboClass         : 'combo-select',
		comboArrowClass    : 'combo-arrow',
		comboDropDownClass : 'combo-dropdown',
		inputClass         : 'combo-input text-input',
		disabledClass      : 'option-disabled',
		hoverClass         : 'option-hover',
		selectedClass      : 'option-selected',
		markerClass        : 'combo-marker',
		themeClass         : '',
		maxHeight          : 200,
		extendStyle        : true,
		focusInput         : true
	};

	/**
	 * Utility functions
	 */

	var keys = {
		ESC: 27,
		TAB: 9,
		RETURN: 13,
		LEFT: 37,
		UP: 38,
		RIGHT: 39,
		DOWN: 40,
		ENTER: 13,
		SHIFT: 16
	},
	isMobile = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));

	/**
	 * Constructor
	 * @param {[Node]} element [Select element]
	 * @param {[Object]} options [Option object]
	 */
	function Plugin ( element, options ) {

		/* Name of the plugin */

		this._name = pluginName;

		/* Reverse lookup */

		this.el = element

		/* Element */

		this.$el = $(element)

		/* If multiple select: stop */

		if(this.$el.prop('multiple')) return;

		/* Settings */

		this.settings = $.extend( {}, defaults, options, this.$el.data() );

		/* Defaults */

		this._defaults = defaults;

		/* Options */

		this.$options = this.$el.find('option, optgroup')

		/* Initialize */

		this.init();

		/* Instances */

		$.fn[ pluginName ].instances.push(this);

	}

	$.extend(Plugin.prototype, {
		init: function () {

			/* Construct the comboselect */

			this._construct();


			/* Add event bindings */

			this._events();


		},
		_construct: function(){

			var self = this

			/**
			 * Add negative TabIndex to `select`
			 * Preserves previous tabindex
			 */

			this.$el.data('plugin_'+ dataKey + '_tabindex', this.$el.prop('tabindex'))

			/* Add a tab index for desktop browsers */

			!isMobile && this.$el.prop("tabIndex", -1)

			/**
			 * Wrap the Select
			 */

			this.$container = this.$el.wrapAll('<div class="' + this.settings.comboClass + ' '+ this.settings.themeClass + '" />').parent();

			/**
			 * Check if select has a width attribute
			 */
			if(this.settings.extendStyle && this.$el.attr('style')){

				this.$container.attr('style', this.$el.attr("style"))

			}


			/**
			 * Append dropdown arrow
			 */

			this.$arrow = $('<div class="'+ this.settings.comboArrowClass+ '" />').appendTo(this.$container)


			/**
			 * Append dropdown
			 */

			this.$dropdown = $('<ul class="'+this.settings.comboDropDownClass+'" />').appendTo(this.$container)


			/**
			 * Create dropdown options
			 */

			this._build();

			/**
			 * Append Input
			 */

			this.$input = $('<input type="text"' + (isMobile? 'tabindex="-1"': '') + ' placeholder="'+ this.getPlaceholder() +'" class="'+ this.settings.inputClass + '">').appendTo(this.$container)

			/* Update input text */

			this._updateInput()

		},
		getPlaceholder: function(){

			var p = '';

			this.$options.filter(function(idx, opt){

				return opt.nodeName == 'OPTION'
			}).each(function(idx, e){

				if(e.value == '') p = e.innerHTML
			});

			return p
		},
		_build: function(){

			var self = this;

			var o = '', k = 0;

			this.$options.each(function(i, e){

				if(e.nodeName.toLowerCase() == 'optgroup'){

					return o+='<li class="option-group">'+this.label+'</li>'
				}

				o+='<li class="'+(this.disabled? self.settings.disabledClass : "option-item") + ' ' +(k == self.$el.prop('selectedIndex')? self.settings.selectedClass : '')+ '" data-index="'+(k)+'" data-value="'+this.value+'">'+ (this.innerHTML) + '</li>'

				k++;
			})

			this.$dropdown.html(o)

			/**
			 * Items
			 */

			this.$items = this.$dropdown.children();
		},

		_events: function(){

			/* Input: focus */

			this.$container.on('focus.input', 'input', $.proxy(this._focus, this))

			/**
			 * Input: mouseup
			 * For input select() event to function correctly
			 */
			this.$container.on('mouseup.input', 'input', function(e){
				e.preventDefault()
			})

			/* Input: blur */

			this.$container.on('blur.input', 'input', $.proxy(this._blur, this))

			/* Select: change */

			this.$el.on('change.select', $.proxy(this._change, this))

			/* Select: focus */

			this.$el.on('focus.select', $.proxy(this._focus, this))

			/* Select: blur */

			this.$el.on('blur.select', $.proxy(this._blurSelect, this))

			/* Dropdown Arrow: click */

			this.$container.on('click.arrow', '.'+this.settings.comboArrowClass , $.proxy(this._toggle, this))

			/* Dropdown: close */

			this.$container.on('comboselect:close', $.proxy(this._close, this))

			/* Dropdown: open */

			this.$container.on('comboselect:open', $.proxy(this._open, this))

			/* Dropdown: update */

			this.$container.on('comboselect:update', $.proxy(this._update, this));


			/* HTML Click */

			$('html').off('click.comboselect').on('click.comboselect', function(){

				$.each($.fn[ pluginName ].instances, function(i, plugin){

					plugin.$container.trigger('comboselect:close')

				})
			});

			/* Stop `event:click` bubbling */

			this.$container.on('click.comboselect', function(e){
				e.stopPropagation();
			})


			/* Input: keydown */

			this.$container.on('keydown', 'input', $.proxy(this._keydown, this))

			/* Input: keyup */

			this.$container.on('keyup', 'input', $.proxy(this._keyup, this))

			/* Dropdown item: click */

			this.$container.on('click.item', '.option-item', $.proxy(this._select, this))

		},

		_keydown: function(event){



			switch(event.which){

				case keys.UP:
					this._move('up', event)
					break;

				case keys.DOWN:
					this._move('down', event)
					break;

				case keys.TAB:
					this._enter(event)
					break;

				case keys.RIGHT:
					this._autofill(event);
					break;

				case keys.ENTER:
					this._enter(event);
					break;

				default:
					break;


			}

		},


		_keyup: function(event){

			switch(event.which){
				case keys.ESC:
					this.$container.trigger('comboselect:close')
					break;

				case keys.ENTER:
				case keys.UP:
				case keys.DOWN:
				case keys.LEFT:
				case keys.RIGHT:
				case keys.TAB:
				case keys.SHIFT:
					break;

				default:
					this._filter(event.target.value)
					break;
			}
		},

		_enter: function(event){

			var item = this._getHovered()

			item.length && this._select(item);

			/* Check if it enter key */
			if(event && event.which == keys.ENTER){

				if(!item.length) {

					/* Check if its illegal value */

					this._blur();

					return true;
				}

				event.preventDefault();
			}


		},
		_move: function(dir){

			var items = this._getVisible(),
				current = this._getHovered(),
				index = current.prevAll('.option-item').filter(':visible').length,
				total = items.length


			switch(dir){
				case 'up':
					index--;
					(index < 0) && (index = (total - 1));
					break;

				case 'down':
					index++;
					(index >= total) && (index = 0);
					break;
			}


			items
				.removeClass(this.settings.hoverClass)
				.eq(index)
				.addClass(this.settings.hoverClass)


			if(!this.opened) this.$container.trigger('comboselect:open');

			this._fixScroll()
		},

		_select: function(event){

			var item = event.currentTarget? $(event.currentTarget) : $(event);

			if(!item.length) return;

			/**
             * 1. get Index
             */

            var index = item.data('index');

            this._selectByIndex(index);

            //this.$container.trigger('comboselect:close')

            this.$input.focus();

            this.$container.trigger('comboselect:close');

		},

		_selectByIndex: function(index){

			/**
			 * Set selected index and trigger change
			 * @type {[type]}
			 */
			if(typeof index == 'undefined'){

				index = 0

			}

			if(this.$el.prop('selectedIndex') != index){

				this.$el.prop('selectedIndex', index).trigger('change');
			}

		},

		_autofill: function(){

			var item = this._getHovered();

			if(item.length){

				var index = item.data('index')

				this._selectByIndex(index)

			}

		},


		_filter: function(search){

			var self = this,
				items = this._getAll();
				needle = $.trim(search).toLowerCase(),
				reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g'),
				pattern = '(' + search.replace(reEscape, '\\$1') + ')';


			/**
			 * Unwrap all markers
			 */

			$('.'+self.settings.markerClass, items).contents().unwrap();

			/* Search */

			if(needle){

				/* Hide Disabled and optgroups */

				this.$items.filter('.option-group, .option-disabled').hide();


				items
					.hide()
					.filter(function(){

						var $this = $(this),
							text = $.trim($this.text()).toLowerCase();

						/* Found */
						if(text.toString().indexOf(needle) != -1){

							/**
							 * Wrap the selection
							 */

							$this
								.html(function(index, oldhtml){
								return oldhtml.replace(new RegExp(pattern, 'gi'), '<span class="'+self.settings.markerClass+'">$1</span>')
							})

							return true
						}

					})
					.show()
			}else{


				this.$items.show();
			}

			/* Open the comboselect */

			this.$container.trigger('comboselect:open')


		},

		_highlight: function(){

			/*
			1. Check if there is a selected item
			2. Add hover class to it
			3. If not add hover class to first item
			*/

			var visible = this._getVisible().removeClass(this.settings.hoverClass),
				$selected = visible.filter('.'+this.settings.selectedClass)

			if($selected.length){

				$selected.addClass(this.settings.hoverClass);

			}else{

				visible
					.removeClass(this.settings.hoverClass)
					.first()
					.addClass(this.settings.hoverClass)
			}

		},

		_updateInput: function(){

			var selected = this.$el.prop('selectedIndex')

			if(this.$el.val()){

				text = this.$el.find('option').eq(selected).text()

				this.$input.val(text)

			}else{

				this.$input.val('')

			}

			return this._getAll()
				.removeClass(this.settings.selectedClass)
				.filter(function(){

					return $(this).data('index') == selected
				})
				.addClass(this.settings.selectedClass)

		},
		_blurSelect: function(){

			this.$container.removeClass('combo-focus');

		},
		_focus: function(event){

			/* Toggle focus class */

			this.$container.toggleClass('combo-focus', !this.opened);

			/* If mobile: stop */

			if(isMobile) return;

			/* Open combo */

			if(!this.opened) this.$container.trigger('comboselect:open');

			/* Select the input */

			this.settings.focusInput && event && event.currentTarget && event.currentTarget.nodeName == 'INPUT' && event.currentTarget.select()
		},

		_blur: function(){

			/**
			 * 1. Get hovered item
			 * 2. If not check if input value == select option
			 * 3. If none
			 */

			var val = $.trim(this.$input.val().toLowerCase()),
				isNumber = !isNaN(val);

			var index = this.$options.filter(function(){
				return this.nodeName == 'OPTION'
			}).filter(function(){
				var _text = this.innerText || this.textContent
				if(isNumber){
					return parseInt($.trim(_text).toLowerCase()) == val
				}

				return $.trim(_text).toLowerCase() == val

			}).prop('index')

			/* Select by Index */

			this._selectByIndex(index)

		},

		_change: function(){


			this._updateInput();

		},

		_getAll: function(){

			return this.$items.filter('.option-item')

		},
		_getVisible: function(){

			return this.$items.filter('.option-item').filter(':visible')

		},

		_getHovered: function(){

			return this._getVisible().filter('.' + this.settings.hoverClass);

		},

		_open: function(){

			var self = this

			this.$container.addClass('combo-open')

			this.opened = true

			/* Focus input field */

			this.settings.focusInput && setTimeout(function(){ !self.$input.is(':focus') && self.$input.focus(); });

			/* Highligh the items */

			this._highlight()

			/* Fix scroll */

			this._fixScroll()

			/* Close all others */


			$.each($.fn[ pluginName ].instances, function(i, plugin){

				if(plugin != self && plugin.opened) plugin.$container.trigger('comboselect:close')
			})

		},

		_toggle: function(){

			this.opened? this._close.call(this) : this._open.call(this)
		},

		_close: function(){

			this.$container.removeClass('combo-open combo-focus')

			this.$container.trigger('comboselect:closed')

			this.opened = false

			/* Show all items */

			this.$items.show();

		},
		_fixScroll: function(){

			/**
			 * If dropdown is hidden
			 */
			if(this.$dropdown.is(':hidden')) return;


			/**
			 * Else
			 */
			var item = this._getHovered();

			if(!item.length) return;

			/**
			 * Scroll
			 */

			var offsetTop,
				upperBound,
				lowerBound,
				heightDelta = item.outerHeight()

			offsetTop = item[0].offsetTop;

			upperBound = this.$dropdown.scrollTop();

			lowerBound = upperBound + this.settings.maxHeight - heightDelta;

			if (offsetTop < upperBound) {

				this.$dropdown.scrollTop(offsetTop);

			} else if (offsetTop > lowerBound) {

				this.$dropdown.scrollTop(offsetTop - this.settings.maxHeight + heightDelta);
			}

		},
		/**
		 * Update API
		 */

		_update: function(){

			this.$options = this.$el.find('option, optgroup')

			this.$dropdown.empty();

			this._build();
		},

		/**
		 * Destroy API
		 */

		dispose: function(){

			/* Remove combo arrow, input, dropdown */

			this.$arrow.remove()

			this.$input.remove()

			this.$dropdown.remove()

			/* Remove tabindex property */
			this.$el
				.removeAttr("tabindex")

			/* Check if there is a tabindex set before */

			if(!!this.$el.data('plugin_'+ dataKey + '_tabindex')){
				this.$el.prop('tabindex', this.$el.data('plugin_'+ dataKey + '_tabindex'))
			}

			/* Unwrap */

			this.$el.unwrap()

			/* Remove data */

			this.$el.removeData('plugin_'+dataKey)

			/* Remove tabindex data */

			this.$el.removeData('plugin_'+dataKey + '_tabindex')

			/* Remove change event on select */

			this.$el.off('change.select focus.select blur.select');

		}
	});



	// A really lightweight plugin wrapper around the constructor,
	// preventing against multiple instantiations
	$.fn[ pluginName ] = function ( options, args ) {

		this.each(function() {

			var $e = $(this),
				instance = $e.data('plugin_'+dataKey)

			if (typeof options === 'string') {

				if (instance && typeof instance[options] === 'function') {
						instance[options](args);
				}

			}else{

				if (instance && instance.dispose) {
						instance.dispose();
				}

				$.data( this, "plugin_" + dataKey, new Plugin( this, options ) );

			}

		});

		// chain jQuery functions
		return this;
	};

	$.fn[ pluginName ].instances = [];

}));



</script>
@endsection
