/**
   * Request XMR data
   *
   * @param {String} url
   * @param {String} method
   * @param {Object} options
   * @returns xmr response
   */
EGA.requestData = (url, method, options) => (
	new Promise((resolve, reject) => {
		const xmr = new XMLHttpRequest();

		xmr.open(method, url, true);
		xmr.setRequestHeader('Content-Type', 'application/json');

		xmr.onload = () => {
			if (xmr.status >= 200 && xmr.status < 300) {
				resolve(xmr.response);
			} else {
				reject({
					status: xmr.status,
					statusText: xmr.statusText
				})
			}
		};

		xmr.onerror = () => {
			reject({
				status: xmr.status,
				statusText: xmr.statusText
			})
		};

		if (options && options.data) {
			xmr.send(JSON.stringify(options.data));
		} else {
			xmr.send();
		}
	})
)

EGA.dataRole = {
	scrollto: '[data-ega-role=scrollto]',
	tab: '[data-ega-role=tab]'
}

/**
   * Modal plugin
   * @method openModalById
   * @method open
   * @method close
   */
EGA.modal = {
	body: document.getElementsByTagName('body')[0],
	bodyShowClass: 'ega-modal-showed',
	modalClass: 'ega-modal',
	modalShowClass: 'show',
	openBtnClass: 'ega-modal__open',
	closeBtnClass: 'ega-modal__close',

	/**
   * Open modal by id
   * @param {String} id
   */
	openModalById: (id) => {
		const modal = document.getElementById(id);
		if (modal) {
			modal.classList.add(EGA.modal.modalShowClass);
			EGA.modal.body.classList.add(EGA.modal.bodyShowClass);
		}
	},

	/**
   * Open modal by click on open button
   */
	open: () => {
	const openBtns = document.querySelectorAll('.' + EGA.modal.openBtnClass);

	if (openBtns) {
	openBtns.forEach(btn => {
	btn.addEventListener('click', function(e) {
	e.preventDefault();
	if (e.target.classList.contains(EGA.modal.openBtnClass)) {
	const modalId = e.target.dataset.egaModal || e.target.href.replace('#', '');
	EGA.modal.openModalById(modalId);
}
})
})
}
},

	/**
   * Close modal by click on close button
   */
	close: () => {
		const modals = document.querySelectorAll('.' + EGA.modal.modalClass);
		const closeBtns = document.querySelectorAll('.' + EGA.modal.closeBtnClass);

		const closeModal = (modal) => {
			modal.classList.remove(EGA.modal.modalShowClass);
			EGA.modal.body.classList.remove(EGA.modal.bodyShowClass);
		}

		modals.forEach(modal => {
			modal.addEventListener('click', function(e) {
				//e.preventDefault();
				if (e.target.classList.contains(EGA.modal.modalClass)) {
					closeModal(modal);
				}
			})
		})

		if (closeBtns) {
			closeBtns.forEach(btn => {
				btn.addEventListener('click', function(e) {
					e.preventDefault();
					const closeBtn = e.target;
					const modal = closeBtn.closest('.' + EGA.modal.modalClass);
					closeModal(modal);
				})
			})
		}
	}
}

EGA.tabs = {
	tabClass: 'ega-tab',
	tabTitleClass: 'ega-tab__title',
	tabContentClass: 'ega-tab__content',
	tabPaneClass: 'ega-tab__pane',
	init: () => {
	const dataRole = EGA.dataRole.tab;
	const openBtns = document.querySelectorAll(dataRole);
	if (openBtns) {
	$(openBtns).on('click', function(e) {
	e.preventDefault();
	const tab = $(this).closest('.' + EGA.tabs.tabClass);
	const tabTitle = $(this).closest('.' + EGA.tabs.tabTitleClass);
	const tabContent = tab.find('.' + EGA.tabs.tabContentClass);
	const tabContentId = $(this).attr('href').replace('#', '');

	tabTitle.find('li').removeClass('is-active');
	$(this).closest('li').addClass('is-active');
	tabContent.find('.' + EGA.tabs.tabPaneClass).removeClass('is-active');
	tabContent.find('#' + tabContentId).addClass('is-active');
})
}
}
}

/**
   * Validate input email
   * @param {String} email
   * @return boolean
   */
EGA.validateEmail = (email) => {
	let re = /\S+@\S+\.\S+/;
	return re.test(email);
}

/**
   * Scroll to target
   */
EGA.target = (target, speed) => {
	$('html, body').animate({
		scrollTop: target
	}, speed);
	return false;
}

EGA.scrollto = () => {
	const dataRole = EGA.dataRole.scrollto;

	$(window).scroll(function() {
		if ($(this).scrollTop() > 800) {
			return $(dataRole).addClass("show");
		} else {
			return $(dataRole).removeClass("show");
		}
	});

	$(document).on('click', dataRole, function(e) {
		let attr = $(this).attr('href');

		// For some browsers, `attr` is undefined; for others,
		// `attr` is false.  Check for both.
		if (typeof attr !== typeof undefined && attr !== false) {
			if($.attr(this, 'href').indexOf("#") > -1){
				let location = $($.attr(this, 'href')).offset().top;
				EGA.target(location,500);
			}
		} else {
			EGA.target(0,800);
		}
	});
}

/**
   * Dropdown plugin
   */
EGA.dropdown = {
	dropdownClass:'ega-dropdown',
	dropdownShowClass:'show',
	dataRole : '[data-ega-role="dropdown"]',

	/**
   * Toogle dropdown
   * @param {NodeList} dropdown
   */
	toogle: (dropdown) => {
		const show = EGA.dropdown.dropdownShowClass;
		dropdown.classList.value.indexOf(show)=== -1 ?  dropdown.classList.add(show): dropdown.classList.remove(show) 
	},

	/**
   * Open dropdown when click on button
   */
	open: () => {
	const btnDropdown = document.querySelectorAll(EGA.dropdown.dataRole);
	btnDropdown.forEach(btn =>{
	btn.addEventListener('click',function(e){
	e.preventDefault();
	const dropdown = btn.nextElementSibling ;
	if(dropdown)  EGA.dropdown.toogle(dropdown);
})
})
}
}
/** END ega-global.js **/

EGA.dataRole = Object.assign(EGA.dataRole, {
	addToCart: '[data-ega-role=addtocart]',
	quickView: '[data-ega-role=quickview]',
	buyNow: '[data-ega-role=buynow]',
	qtyWrap: '[data-ega-role=qty-wrapper]',
	qtyMinus: '[data-ega-role=qty-minus]',
	qtyPlus: '[data-ega-role=qty-plus]',
	qty: '[data-ega-role=qty]',
	subscribe: '[data-ega-role=subcribe]',
	submit: '[data-ega-role=submit]',
	switchForm: '[data-ega-role=switch-form]',
})

EGA.convertToUnSign = (str) => {
	try {  str = str.toLowerCase();
			 str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, 'a');
			 str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, 'e');
			 str = str.replace(/ì|í|ị|ỉ|ĩ/g, 'i');
			 str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, 'o');
			 str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, 'u');
			 str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, 'y');
			 str = str.replace(/đ/g, 'd');  
			 str = str.replace(/\s/g, '');
			 return str;
			} catch (e) {  return str; }
}
// Add To Cart
EGA.addToCart = (callback) => {
	const dataRole = EGA.dataRole.addToCart;
	$(document).on('click', dataRole, function(e) {
		e.preventDefault();
		let isQuickView = false;
		if($(this).parents('#ega-product-detail').length == 0){
			isQuickView = true;
		}

		if (!$(this).hasClass('ega-disabled') && !$(this).attr('disabled')) {
			let variantId = $(this).data().variantId;
			const quantity = $(this).data().quantity;
			EGA.addItem(variantId, quantity, callback, isQuickView);
		}
	})
}

EGA.addItem = function(variant_id, quantity, callback, isQuickView) {
  var quantity = quantity || 1;
  var params = {
    type: 'POST',
    url: '/cart/add.js',
    data: 'quantity=' + quantity + '&id=' + variant_id,
    dataType: 'json',
    success: function(line_item) { 
      if ((typeof callback) === 'function') {
        callback(line_item, isQuickView);
      }
      else {
        Haravan.onItemAdded(line_item);
      }
    },
    error: function(XMLHttpRequest, textStatus) {
      Haravan.onError(XMLHttpRequest, textStatus);
    }
  };
  jQuery.ajax(params);
};

// Quick View
EGA.quickView = () => {
	const dataRole = EGA.dataRole.quickView;
	const quickViewId = 'quickview';
	const quickViewWrapperId = 'quickview-wrapper';

	const quickViewBtns = document.querySelectorAll(dataRole);
	const quickViewContainer = document.getElementById(quickViewId);
	const quickViewWrapper = document.getElementById(quickViewWrapperId);

	$(document).on('click', dataRole, function(e) {
		e.preventDefault();
    quickViewContainer.innerHTML = '';
		if (!$(this).hasClass('ega-disabled') && !$(this).attr('disabled')) {
			const egaHandle = $(this).data().handle;
			//EGA.requestData(`/products/${handle}.json`, 'get')
//			EGA.requestData(`/products/${egaHandle}?view=quickview`, 'get')
      EGA.requestData(`/products/${egaHandle}.js`, 'get')
			.then(response => response)
			.then((product) => {
		//		quickViewContainer.innerHTML = product;

/*
				let scriptText = '';
				$('#ega-product-quickview').find('script').each(function(index, item) {
					scriptText += $(item).html();
					$(item).remove();
				});
				$('#ega-product-quickview').append(`<script id='script-node'>${scriptText}</script>`);
*/

//eval($('#ega-product-quickview script').html());
        quickview(product);
        if (quickViewWrapper) {
					EGA.modal.openModalById(quickViewWrapperId);
				}
			});
		}
	})
}

// Buy Now
EGA.buyNow = () => {
	const dataRole = EGA.dataRole.buyNow;

	const callback = () => {
		location.href = '/checkout';
	}

	$(document).on('click', dataRole, function(e) {
		e.preventDefault();
		if (!$(this).hasClass('ega-disabled') && !$(this).attr('disabled')) {
			const variantId = $(this).data().variantId;
			const quantity = $(this).data().quantity;

			Haravan.addItem(variantId, quantity, callback);
		}
	})
}

// Quantity
EGA.updatePrice = ()=>{
	const params = {
		type: 'POST',
		url: '/cart/update.js',
		data: $('#cartformpage').serialize(),
		async: false,
		dataType: 'json',
		success: function(data) { 
			jQuery.each(data.items,function(i,v){
				jQuery('.ega-cart .ega-cart-row:eq('+i+') .line-item-total').html(Haravan.formatMoney(v.line_price, EGA.moneyFormat));
			});
			jQuery('.total_price b').html(Haravan.formatMoney(data.total_price, EGA.moneyFormat));
			jQuery('.count-cart span').text(data.item_count);
			jQuery('#ega-top-cart__trigger .ega-top-cart__qty').text(data.item_count);
		},
		error: function(XMLHttpRequest, textStatus) {
			Haravan.onError(XMLHttpRequest, textStatus);
		}
	};
	jQuery.ajax(params);
}


EGA.quantity = () => {
	const dataRoleWrap = EGA.dataRole.qtyWrap;
	const dataRoleMinus = EGA.dataRole.qtyMinus;
	const dataRolePlus = EGA.dataRole.qtyPlus;
	const dataRoleQty = EGA.dataRole.qty;
	const dataRoleAddToCart = EGA.dataRole.addToCart;
	const dataRoleBuyNow = EGA.dataRole.buyNow;

	updateQtyToAddCartButtons = (qty) => {
		$(dataRoleAddToCart).data('quantity', qty);
		$(dataRoleBuyNow).data('quantity', qty);
	}

	const calQty = ($this, type) => {
		const $wrap = $this.closest(dataRoleWrap);
		const $qtyInput = $wrap.find(dataRoleQty);
		let qty = parseInt($qtyInput.val());

		if (type === 'minus') {
			if (qty === 1) {
				qty = 1;
			} else {
				qty -= 1;
			}
		} else if (type === 'plus') {
			qty += 1;
		} else {
			return;
		}

		$qtyInput.val(qty);
		updateQtyToAddCartButtons(qty);
		if ($this.closest('#cartformpage').length > 0) {
			EGA.updatePrice()
		}
	}

	$(document).on('click', dataRoleMinus, function(e) {
		e.preventDefault();
		calQty($(this), 'minus');
	})
	$(document).on('click', dataRolePlus, function(e) {
		e.preventDefault();
		calQty($(this), 'plus');
	})
	$(dataRoleQty).on('input', function(e) {
		updateQtyToAddCartButtons($(this).val());
	})
}

/**
   * Product Recent View
   *
   * @param {Object} productObj
   * @param {String} $element
   * @param {String} productTemplate
   */

EGA.getRecentView = ($element, productTemplate) => {
	let recentArr = (localStorage.recentView) ? JSON.parse(localStorage.recentView) : [],
			html = "";
	$.each(recentArr, function(i, v) {
		html += productTemplate(v);
	})

	$($element).html(html);
}

EGA.setRecentView = (productObj) => {
	let recentArr = (localStorage.recentView) ? JSON.parse(localStorage.recentView) : [];

	let indexArr = -1,
			limitArr = 10;

	for (i = 0; i < recentArr.length; i++) {
		if (recentArr[i].handle === productObj.handle) {
			indexArr = i;
		}
	}

	if( indexArr > -1){
		recentArr.splice(indexArr, 1);
	} else {
		if(recentArr.length == limitArr){
			recentArr.splice(-1,1);
		}
	}
	recentArr.unshift(productObj);
	localStorage.setItem('recentView', JSON.stringify(recentArr));
}

/**
   * Alert when Subscribe
   *
   * @param {Object} productObj
   * @param {String} $element
   * @param {String} productTemplate
   */
EGA.alertSubscribe = () => {
	const dataRole = EGA.dataRole.subscribe;
	$(document).on('click', dataRole, function(e) {
		let flag = true,
				email = $('.subcribe__email').val();
		if(email.indexOf('@') > -1){
			let emailArr = email.split('@');
			$('.subcribe__lastname').val(emailArr[0]);

			if (emailArr[1].indexOf('.') < 0) {
				flag = false
			}
		} else {
			flag = false
		}

		if(flag) {
			alert('Đăng ký nhận Email thành công!');
		} else {
			alert('Email không đúng định dạng!');
			e.preventDefault();
		}
	})
}

// Form Contact
EGA.alertSubmit = () => {
	const dataRole = EGA.dataRole.submit;
	$(document).on('click', dataRole, function(e) {
		let flag = true,
				$form = $(this).closest('form'),
				formType = $form.find('input[name="form_type"]').val(),
				$email = $form.find('input[type="email"]');

		$('.ega-required').each(function(){
			let $formControl = $(this).parent();
			if($(this).val() == ""){
				$formControl.addClass('ega-form__error');
				flag = false;
			} else {
				$formControl.removeClass('ega-form__error');
			}
		})

		if(formType == 'create_customer' || formType == 'reset_customer_password'){
			let $iPass = $form.find('input[type="password"]');
			if($iPass.eq(0).val() != $iPass.eq(1).val()){
				$iPass.eq(1).parent().addClass('ega-form__error');
				flag = false;
			}
		} 

		if(flag) {
			if($email.length == 0){
				$form.submit();
				switch(formType){
					case "reset_customer_password" : {
						alert('Phục hồi mật khẩu thành công!');
						break;
					}
					default : {
						alert('Gửi thông tin thành công!');
					}
				}
			} else {
				if(EGA.validateEmail($email.val())){
					$form.submit();
					switch(formType){
						case "create_customer" : {
							alert("Đăng ký thành công!")
							break;
						}
						case "contact" : {
							alert('Gửi thông tin liên hệ thành công!');
							break;
						}
						case "new_comment" : {
							alert('Gửi bình luận thành công!');
							break;
						}
						default : {
							alert('Gửi thông tin thành công!');
						}
					}
				} else {
					$email.parent().addClass('ega-form__error');
				}
			}
		}
	})
}

// Fixed menu
EGA.sticky = (options) => {
	let $header_el = options.$header_el,
			element_offset = options.element_offset;

	if($(window).scrollTop() > Number(element_offset)) {
		$($header_el).addClass('sticky-header');
		$('body').addClass('sticky-header');
	}
	else {
		$($header_el).removeClass('sticky-header');
		$('body').removeClass('sticky-header');
	}
}

// Deletcart
EGA.deleteCart = (variant_id, callback) => {
	Haravan.removeItem(variant_id, callback);
}


// SwitchForm
EGA.switchForm = () => {
	const dataRole = EGA.dataRole.switchForm;
	$(document).on('click', dataRole, function(e) {
		e.preventDefault();
		$(this).closest('form').parent().hide();
		$($(this).attr("href")).show(); 
	})
}



