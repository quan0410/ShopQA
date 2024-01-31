/**
 * Main
 */

'use strict';

let menu, animate;

(function () {
  // Initialize menu
  //-----------------

  let layoutMenuEl = document.querySelectorAll('#layout-menu');
  layoutMenuEl.forEach(function (element) {
    menu = new Menu(element, {
      orientation: 'vertical',
      closeChildren: false
    });
    // Change parameter to true if you want scroll animation
    window.Helpers.scrollToActive((animate = false));
    window.Helpers.mainMenu = menu;
  });

  // Initialize menu togglers and bind click on each
  let menuToggler = document.querySelectorAll('.layout-menu-toggle');
  menuToggler.forEach(item => {
    item.addEventListener('click', event => {
      event.preventDefault();
      window.Helpers.toggleCollapsed();
    });
  });

  // Display menu toggle (layout-menu-toggle) on hover with delay
  let delay = function (elem, callback) {
    let timeout = null;
    elem.onmouseenter = function () {
      // Set timeout to be a timer which will invoke callback after 300ms (not for small screen)
      if (!Helpers.isSmallScreen()) {
        timeout = setTimeout(callback, 300);
      } else {
        timeout = setTimeout(callback, 0);
      }
    };

    elem.onmouseleave = function () {
      // Clear any timers set to timeout
      document.querySelector('.layout-menu-toggle').classList.remove('d-block');
      clearTimeout(timeout);
    };
  };
  if (document.getElementById('layout-menu')) {
    delay(document.getElementById('layout-menu'), function () {
      // not for small screen
      if (!Helpers.isSmallScreen()) {
        document.querySelector('.layout-menu-toggle').classList.add('d-block');
      }
    });
  }

  // Display in main menu when menu scrolls
  let menuInnerContainer = document.getElementsByClassName('menu-inner'),
    menuInnerShadow = document.getElementsByClassName('menu-inner-shadow')[0];
  if (menuInnerContainer.length > 0 && menuInnerShadow) {
    menuInnerContainer[0].addEventListener('ps-scroll-y', function () {
      if (this.querySelector('.ps__thumb-y').offsetTop) {
        menuInnerShadow.style.display = 'block';
      } else {
        menuInnerShadow.style.display = 'none';
      }
    });
  }

  // Init helpers & misc
  // --------------------

  // Init BS Tooltip
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  // Accordion active class
  const accordionActiveFunction = function (e) {
    if (e.type == 'show.bs.collapse' || e.type == 'show.bs.collapse') {
      e.target.closest('.accordion-item').classList.add('active');
    } else {
      e.target.closest('.accordion-item').classList.remove('active');
    }
  };

  const accordionTriggerList = [].slice.call(document.querySelectorAll('.accordion'));
  const accordionList = accordionTriggerList.map(function (accordionTriggerEl) {
    accordionTriggerEl.addEventListener('show.bs.collapse', accordionActiveFunction);
    accordionTriggerEl.addEventListener('hide.bs.collapse', accordionActiveFunction);
  });

  $(document).ready( function () {
     const element = $('.size-color').html();
    $("#addAttribute").click( function () {
        $('.size-color').append(element);
        $('.size-color').removeClass('d-none');
        const colors = $('body .size-color').find('.select-color');
        $(colors).each( function (i) {
            $(this).attr('name', `colors[${i}][]`)
        });
    });
    $(".size-color").on('click', '#removeAttribute', function (){
        $(this).closest('.sub-size-color').remove();
    });
    $('#image').on('change', function () {
      var file = this.files[0];
      if (file) {
          var img = $('.image-upload');
          var src = URL.createObjectURL(file);
          img.attr('src', src);
          img.removeClass('d-none');
      }
    });

    let isChecked = false;
    $('.cb-product-all').click(function (){
        isChecked = !isChecked;
        $('.cb-product').prop('checked',isChecked);
    })
      let page = 2;
      $('#btn-load-more').click(function (){
        let url = $(this).attr("data-get") + '?page=' +  page
        $.ajax({
            url: url,
            method: "GET",
            success: function (response) {
                page = response.current_page + 1
                loadProduct(response.data);
                if (response.current_page >= response.last_page){
                    $('#btn-load-more').hide();
                }
            }
        });
        // $('#tb-products')
    })
  });

  function loadProduct(data){
      let html = '';
      let urlAsset = $('#btn-load-more').attr("asset")
      let products = JSON.parse($('#tb-products').attr('data'));
      for (let i = 0;i < data.length ; i++){
          html += `<tr>
                                                <td class="text-center">
                                                    <input type="checkbox" name="user_ids[]" ${ findProduct(products,data[i]) ? 'checked' : '' } value="${data[i].id}"
                                                           class="form-check cb-product">
                                                </td>
                                                <td class="text-center">
                                                    <strong>${data[i].id}</strong>
                                                </td>
                                                <td><img src="${urlAsset + data[i].image}" height="100"
                                                         width="100" alt="image Product"></td>
                                                <td>${data[i].name}</td>
                                                <td>${data[i].sku}</td>
                                                <td>
                                                    ${data[i].brand.name}
                                                </td>
                                                <td>
                                                    ${data[i].category.name}
                                                </td>
                                                <td class="text-center">${formatNumber(data[i].price)}đ</td>
                                                <td class="text-center">${formatNumber(data[i].discount_price)}đ
                                                </td>
                                                <td class="text-center">${data[i].featured}</td>
                                            </tr>`
      }
      $('#tb-products').append(html);
  }

  function formatNumber(string){
      string = string.toLocaleString('it-IT', {style : 'currency', currency : 'VND'})
      return string.replace('VND','');
  }

  function findProduct(products,product){
      for (let i = 0 ;i < products.length ; i++ ){
          if (products[i].id === product.id){
              return true;
          }
      }
      return false;
  }
  // Auto update layout based on screen size
  window.Helpers.setAutoUpdate(true);

  // Toggle Password Visibility
  window.Helpers.initPasswordToggle();

  // Speech To Text
  window.Helpers.initSpeechToText();

  // Manage menu expanded/collapsed with templateCustomizer & local storage
  //------------------------------------------------------------------

  // If current layout is horizontal OR current window screen is small (overlay menu) than return from here
  if (window.Helpers.isSmallScreen()) {
    return;
  }

  // If current layout is vertical and current window screen is > small

  // Auto update menu collapsed/expanded based on the themeConfig
  window.Helpers.setCollapsed(true, false);
})();
