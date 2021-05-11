/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
 function guten_blog_setupMenuContainer(container) {
 	var button, menu, links, i, len;

 	if ( ! container ) {
 		return;
 	}

 	button = container.getElementsByTagName( 'button' )[0];
 	// if ( 'undefined' === typeof button ) {
 	// 	return;
 	// }

 	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	if(button){
		button.onclick = function() {
			if ( -1 !== container.className.indexOf( 'toggled' ) ) {
				container.className = container.className.replace( ' toggled', '' );
				button.setAttribute( 'aria-expanded', 'false' );
			} else {
				container.className += ' toggled';
				button.setAttribute( 'aria-expanded', 'true' );
			}
		};
	}

	function guten_blog_handleTabPress (e){
		if((e.keyCode === 9 || e.key === 'Tab') && !e.shiftKey && button){
			container.classList.remove('toggled')
			button.setAttribute('aria-expanded', 'false');
			const toggleButton = document.querySelector('.menu-toggle');
			toggleButton.setAttribute('tabindex', -1);
			toggleButton.focus()
			toggleButton.setAttribute('tabindex', 0);
			e.preventDefault();
		}
	}

	function guten_blog_handleSiftTabPress(e){
		if(e.shiftKey && (e.keyCode === 9 || e.key === 'Tab') && button && e.target.classList.contains('menu-toggle') ){
			container.classList.remove('toggled')
			button.setAttribute('aria-expanded', 'false');
		}
		
	}

	function setupResponsiveMenu (e){
		document.querySelector('#site-navigation').addEventListener('keydown', guten_blog_handleSiftTabPress)
		if (window.innerWidth < 992) {
		if(document.querySelector("#primary-menu > .menu-item:last-of-type > .sub-menu > .menu-item > .sub-menu > .menu-item, #primary-menu > .nav-menu > .page_item:last-of-type > .children > .page_item > .children > .page_item")){
			document.querySelector("#primary-menu > .menu-item:last-of-type > .sub-menu > .menu-item:last-of-type > .sub-menu > .menu-item:last-of-type, #primary-menu > .nav-menu > .page_item:last-of-type > .children > .page_item:last-of-type > .children > .page_item:last-of-type").addEventListener("keydown", guten_blog_handleTabPress);
		}
			else if(document.querySelector("#primary-menu > .menu-item:last-of-type > .sub-menu > .menu-item, #primary-menu > .nav-menu > .page_item:last-of-type > .children > .page_item")){
			document.querySelector("#primary-menu > .menu-item:last-of-type > .sub-menu > .menu-item:last-of-type, #primary-menu > .nav-menu > .page_item:last-of-type > .children > .page_item:last-of-type").addEventListener("keydown", guten_blog_handleTabPress);
		} else {
			if( document.querySelector("#primary-menu > .menu-item:last-of-type, #primary-menu > .nav-menu > .page_item:last-of-type") != null )
			document.querySelector("#primary-menu > .menu-item:last-of-type, #primary-menu > .nav-menu > .page_item:last-of-type").addEventListener("keydown", guten_blog_handleTabPress);
		}

		}else{
			if( document.querySelector("#primary-menu > .menu-item:last-of-type, #primary-menu > .nav-menu > .page_item:last-of-type") != null )
				document.querySelector("#primary-menu > .menu-item:last-of-type, #primary-menu > .menu-item:last-of-type > .sub-menu > .menu-item:last-of-type, #primary-menu > .nav-menu > .page_item:last-of-type, #primary-menu > .nav-menu > .page_item:last-of-type > .children > .page_item:last-of-type").removeEventListener("keydown", guten_blog_handleTabPress);
		}
	}

	window.addEventListener('resize', setupResponsiveMenu);
	setupResponsiveMenu();
	

	// Close small menu when user clicks outside
	document.addEventListener( 'click', function( event ) {
		var isClickInside = container.contains( event.target );

		if ( ! isClickInside && button ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
		}
	} );

	// Get all the link elements within the menu.
	links = menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', guten_blog_toggleFocus, true );
		links[i].addEventListener( 'blur', guten_blog_toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	 function guten_blog_toggleFocus() {
	 	var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {
			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	 ( function() {
	 	var touchStartFn,
	 	parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

	 	if ( 'ontouchstart' in window ) {
	 		touchStartFn = function( e ) {
	 			var menuItem = this.parentNode;

	 			if ( ! menuItem.classList.contains( 'focus' ) ) {
	 				e.preventDefault();
	 				for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
	 					if ( menuItem === menuItem.parentNode.children[i] ) {
	 						continue;
	 					}
	 					menuItem.parentNode.children[i].classList.remove( 'focus' );
	 				}
	 				menuItem.classList.add( 'focus' );
	 			} else {
	 				menuItem.classList.remove( 'focus' );
	 			}
	 		};

	 		for ( i = 0; i < parentLink.length; ++i ) {
	 			parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
	 		}
	 	}
	 }( container ) );
	};



	(function(){
			var containers = document.querySelectorAll( '.main-navigation' );
			containers.forEach(guten_blog_setupMenuContainer)
		}())