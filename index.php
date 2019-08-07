<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Lightning Design Playground</title>
  <meta name="description" content="Lightning Design Playground">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="styles/salesforce-lightning-design-system.css?v=1.0">

</head>

<body>
  <?php
    include 'search.php';
  ?>

  <!-- global search -->
  <header class="slds-global-header_container">
    <a href="javascript:void(0);" class="slds-assistive-text slds-assistive-text_focus">Skip to Navigation</a>
    <a href="javascript:void(0);" class="slds-assistive-text slds-assistive-text_focus">Skip to Main Content</a>
    <div class="slds-global-header slds-grid slds-grid_align-spread">
    <div class="slds-global-header__item">
    <div class="slds-global-header__logo"></div>
    </div>
    <div class="slds-global-header__item slds-global-header__item_search">
    <div class="slds-form-element">
    <label class="slds-form-element__label slds-assistive-text" for="combobox-id-2">Search Salesforce</label>
    <div class="slds-form-element__control">
    <div class="slds-combobox-group">
    <div class="slds-combobox_object-switcher slds-combobox-addon_start">
    <div class="slds-form-element">
    <label class="slds-form-element__label slds-assistive-text" for="objectswitcher-combobox-id-2">Filter Search by:</label>
    <div class="slds-form-element__control">
    <div class="slds-combobox_container">
    <div class="slds-combobox slds-dropdown-trigger slds-dropdown-trigger_click" aria-controls="primary-search-combobox-id-2" aria-expanded="false" aria-haspopup="listbox" role="combobox">
    <div class="slds-combobox__form-element slds-input-has-icon slds-input-has-icon_right" role="none">
    <input type="text" class="slds-input slds-combobox__input slds-combobox__input-value" id="objectswitcher-combobox-id-2" aria-controls="objectswitcher-listbox-id-2" autoComplete="off" role="textbox" placeholder=" " value="Accounts"
    />
    <span class="slds-icon_container slds-icon-utility-down slds-input__icon slds-input__icon_right">
      <svg class="slds-icon slds-icon slds-icon_xx-small slds-icon-text-default" aria-hidden="true">
        <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"></use>
      </svg>
    </span>
    </div>
    <div id="objectswitcher-listbox-id-2" class="slds-dropdown slds-dropdown_length-5 slds-dropdown_x-small slds-dropdown_left" role="listbox">
    <ul class="slds-listbox slds-listbox_vertical" role="group" aria-label="Suggested for you">
    <li role="presentation" class="slds-listbox__item">
    <div id="object0" class="slds-media slds-listbox__option slds-listbox__option_plain slds-media_small" role="presentation">
    <h3 class="slds-listbox__option-header" role="presentation">Suggested for you</h3>
    </div>
    </li>
    <li role="presentation" class="slds-listbox__item">
    <div id="object1" class="slds-media slds-listbox__option slds-listbox__option_plain slds-media_small slds-is-selected" role="option">
    <span class="slds-media__figure slds-listbox__option-icon">
    <span class="slds-icon_container slds-icon-utility-check slds-current-color">
    <svg class="slds-icon slds-icon_x-small" aria-hidden="true">
    <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#check"></use>
    </svg>
    </span>
    </span>
    <span class="slds-media__body">
    <span class="slds-truncate" title="Accounts">
    <span class="slds-assistive-text">Current Selection:</span> Accounts</span>
    </span>
    </div>
    </li>
    <li role="presentation" class="slds-listbox__item">
    <div id="object2" class="slds-media slds-listbox__option slds-listbox__option_plain slds-media_small" role="option">
    <span class="slds-media__figure slds-listbox__option-icon"></span>
    <span class="slds-media__body">
    <span class="slds-truncate" title="Reports"> Reports</span>
    </span>
    </div>
    </li>
    <li role="presentation" class="slds-listbox__item">
    <div id="object3" class="slds-media slds-listbox__option slds-listbox__option_plain slds-media_small" role="option">
    <span class="slds-media__figure slds-listbox__option-icon"></span>
    <span class="slds-media__body">
    <span class="slds-truncate" title="Contacts"> Contacts</span>
    </span>
    </div>
    </li>
    <li role="presentation" class="slds-listbox__item">
    <div id="object4" class="slds-media slds-listbox__option slds-listbox__option_plain slds-media_small" role="option">
    <span class="slds-media__figure slds-listbox__option-icon"></span>
    <span class="slds-media__body">
    <span class="slds-truncate" title="Files"> Files</span>
    </span>
    </div>
    </li>
    <li role="presentation" class="slds-listbox__item">
    <div id="object5" class="slds-media slds-listbox__option slds-listbox__option_plain slds-media_small" role="option">
    <span class="slds-media__figure slds-listbox__option-icon"></span>
    <span class="slds-media__body">
    <span class="slds-truncate" title="Groups"> Groups</span>
    </span>
    </div>
    </li>
    <li role="presentation" class="slds-listbox__item">
    <div id="object6" class="slds-media slds-listbox__option slds-listbox__option_plain slds-media_small" role="option">
    <span class="slds-media__figure slds-listbox__option-icon"></span>
    <span class="slds-media__body">
    <span class="slds-truncate" title="Leads"> Leads</span>
    </span>
    </div>
    </li>
    <li role="presentation" class="slds-listbox__item">
    <div id="object7" class="slds-media slds-listbox__option slds-listbox__option_plain slds-media_small" role="option">
    <span class="slds-media__figure slds-listbox__option-icon"></span>
    <span class="slds-media__body">
    <span class="slds-truncate" title="Notes"> Notes</span>
    </span>
    </div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="slds-combobox_container slds-combobox-addon_end">
    <div class="slds-combobox slds-dropdown-trigger slds-dropdown-trigger_click" aria-expanded="false" aria-haspopup="listbox" id="primary-search-combobox-id-2" role="combobox">
    <div class="slds-combobox__form-element slds-input-has-icon slds-input-has-icon_left slds-global-search__form-element" role="none">
    <span class="slds-icon_container slds-icon-utility-search slds-input__icon slds-input__icon_left">
    <svg class="slds-icon slds-icon slds-icon_xx-small slds-icon-text-default" aria-hidden="true">
    <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#search"></use>
    </svg>
    </span>
    <input type="text" class="slds-input slds-combobox__input" id="combobox-id-2" aria-autocomplete="list" aria-controls="search-listbox-id-2" autoComplete="off" role="textbox" placeholder="Search Salesforce" />
    </div>
    <div id="search-listbox-id-2" class="slds-dropdown slds-dropdown_length-with-icon-7 slds-dropdown_fluid" role="listbox">
    <ul class="slds-listbox slds-listbox_vertical" role="group" aria-label="Recent Items">
    <li role="presentation" class="slds-listbox__item">
    <div id="option0" class="slds-media slds-listbox__option slds-listbox__option_plain slds-media_center" role="presentation">
    <h3 class="slds-listbox__option-header" role="presentation">Recent Items</h3>
    </div>
    </li>
    <li role="presentation" class="slds-listbox__item">
    <div id="option1" class="slds-media slds-listbox__option slds-listbox__option_entity slds-listbox__option_has-meta" role="option">
    <span class="slds-media__figure slds-listbox__option-icon">
    <span class="slds-icon_container slds-icon-standard-opportunity">
    <svg class="slds-icon slds-icon_small" aria-hidden="true">
    <use xlink:href="/assets/icons/standard-sprite/svg/symbols.svg#opportunity"></use>
    </svg>
    </span>
    </span>
    <span class="slds-media__body">
    <span class="slds-listbox__option-text slds-listbox__option-text_entity">Salesforce - 1,000 Licenses</span>
    <span class="slds-listbox__option-meta slds-listbox__option-meta_entity">Opportunity • Propecting</span>
    </span>
    </div>
    </li>
    <li role="presentation" class="slds-listbox__item">
    <div id="option2" class="slds-media slds-listbox__option slds-listbox__option_entity slds-listbox__option_has-meta" role="option">
    <span class="slds-media__figure slds-listbox__option-icon">
    <span class="slds-icon_container slds-icon-standard-contact">
    <svg class="slds-icon slds-icon_small" aria-hidden="true">
    <use xlink:href="/assets/icons/standard-sprite/svg/symbols.svg#contact"></use>
    </svg>
    </span>
    </span>
    <span class="slds-media__body">
    <span class="slds-listbox__option-text slds-listbox__option-text_entity">Art Vandelay</span>
    <span class="slds-listbox__option-meta slds-listbox__option-meta_entity">Contact • avandelay@vandelay.com</span>
    </span>
    </div>
    </li>
    <li role="presentation" class="slds-listbox__item">
    <div id="option3" class="slds-media slds-listbox__option slds-listbox__option_entity slds-listbox__option_has-meta" role="option">
    <span class="slds-media__figure slds-listbox__option-icon">
    <span class="slds-icon_container slds-icon-standard-account">
    <svg class="slds-icon slds-icon_small" aria-hidden="true">
    <use xlink:href="/assets/icons/standard-sprite/svg/symbols.svg#account"></use>
    </svg>
    </span>
    </span>
    <span class="slds-media__body">
    <span class="slds-listbox__option-text slds-listbox__option-text_entity">Vandelay Industries</span>
    <span class="slds-listbox__option-meta slds-listbox__option-meta_entity">Account • San Francisco</span>
    </span>
    </div>
    </li>
    <li role="presentation" class="slds-listbox__item">
    <div id="option4" class="slds-media slds-listbox__option slds-listbox__option_entity slds-listbox__option_has-meta" role="option">
    <span class="slds-media__figure slds-listbox__option-icon">
    <span class="slds-icon_container slds-icon-standard-event">
    <svg class="slds-icon slds-icon_small" aria-hidden="true">
    <use xlink:href="/assets/icons/standard-sprite/svg/symbols.svg#event"></use>
    </svg>
    </span>
    </span>
    <span class="slds-media__body">
    <span class="slds-listbox__option-text slds-listbox__option-text_entity">Salesforce UK 2016 Events</span>
    <span class="slds-listbox__option-meta slds-listbox__option-meta_entity">Event • $20,000</span>
    </span>
    </div>
    </li>
    <li role="presentation" class="slds-listbox__item">
    <div id="option5" class="slds-media slds-listbox__option slds-listbox__option_entity slds-listbox__option_has-meta" role="option">
    <span class="slds-media__figure slds-listbox__option-icon">
    <span class="slds-icon_container slds-icon-standard-lead">
    <svg class="slds-icon slds-icon_small" aria-hidden="true">
    <use xlink:href="/assets/icons/standard-sprite/svg/symbols.svg#lead"></use>
    </svg>
    </span>
    </span>
    <span class="slds-media__body">
    <span class="slds-listbox__option-text slds-listbox__option-text_entity">H.E. Pennypacker</span>
    <span class="slds-listbox__option-meta slds-listbox__option-meta_entity">Lead • Nursing</span>
    </span>
    </div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="slds-global-header__item">
    <ul class="slds-global-actions">
    <li class="slds-global-actions__item">
    <div class="slds-global-actions__favorites slds-dropdown-trigger slds-dropdown-trigger_click">
    <div class="slds-button-group">
    <button class="slds-button slds-button_icon slds-global-actions__favorites-action slds-button_icon slds-button_icon-border slds-button_icon-small" aria-pressed="false" title="Toggle Favorites">
    <svg class="slds-button__icon" aria-hidden="true">
    <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#favorite"></use>
    </svg>
    <span class="slds-assistive-text">Toggle Favorite</span>
    </button>
    <button class="slds-button slds-button_icon slds-global-actions__favorites-more slds-button_icon slds-button_icon-border slds-button_icon-small" title="View Favorites">
    <svg class="slds-button__icon slds-button__icon_small" aria-hidden="true">
    <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"></use>
    </svg>
    <span class="slds-assistive-text">View Favorites</span>
    </button>
    </div>
    </div>
    </li>
    <li class="slds-global-actions__item">
    <div class="slds-dropdown-trigger slds-dropdown-trigger_click">
    <button class="slds-button slds-button_icon slds-button_icon slds-button_icon-container slds-button_icon-small slds-global-actions__task slds-global-actions__item-action" aria-haspopup="true" title="Global Actions">
    <svg class="slds-button__icon" aria-hidden="true">
    <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#add"></use>
    </svg>
    <span class="slds-assistive-text">Global Actions</span>
    </button>
    </div>
    </li>
    <li class="slds-global-actions__item">
    <div class="slds-dropdown-trigger slds-dropdown-trigger_click">
    <button class="slds-button slds-button_icon slds-button_icon slds-button_icon-container slds-button_icon-small slds-global-actions__help slds-global-actions__item-action" aria-haspopup="true" title="Help and Training">
    <svg class="slds-button__icon slds-global-header__icon" aria-hidden="true">
    <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#question"></use>
    </svg>
    <span class="slds-assistive-text">Help and Training</span>
    </button>
    </div>
    </li>
    <li class="slds-global-actions__item">
    <div class="slds-dropdown-trigger slds-dropdown-trigger_click">
    <button class="slds-button slds-button_icon slds-button_icon slds-button_icon-container slds-button_icon-small slds-global-actions__setup slds-global-actions__item-action" aria-haspopup="true" title="Setup">
    <svg class="slds-button__icon slds-global-header__icon" aria-hidden="true">
    <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#setup"></use>
    </svg>
    <span class="slds-assistive-text">Setup</span>
    </button>
    </div>
    </li>
    <li class="slds-global-actions__item">
    <div class="slds-dropdown-trigger slds-dropdown-trigger_click">
    <button class="slds-button slds-button_icon slds-button_icon slds-button_icon-container slds-button_icon-small slds-global-actions__notifications slds-global-actions__item-action" title="no new notifications" aria-live="assertive" aria-atomic="true">
    <svg class="slds-button__icon slds-global-header__icon" aria-hidden="true">
    <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#notification"></use>
    </svg>
    <span class="slds-assistive-text">no new notifications</span>
    </button>
    <span aria-hidden="true" class="slds-notification-badge">0</span>
    </div>
    </li>
    <li class="slds-global-actions__item">
    <div class="slds-dropdown-trigger slds-dropdown-trigger_click">
    <button class="slds-button slds-global-actions__avatar slds-global-actions__item-action" title="person name" aria-haspopup="true">
    <span class="slds-avatar slds-avatar_circle slds-avatar_medium">
    <img alt="Person name" src="images/avatar2.jpg" title="User avatar" />
    </span>
    </button>
    </div>
    </li>
    </ul>
    </div>
    </div>
    </header>

  <!-- navigation -->
  <div class="slds-var-p-top_xx-large">
    <div class="slds-context-bar">
    <div class="slds-context-bar__primary">
    <div class="slds-context-bar__item slds-context-bar__dropdown-trigger slds-dropdown-trigger slds-dropdown-trigger_click slds-no-hover">
    <div class="slds-context-bar__icon-action">
    <button class="slds-button slds-icon-waffle_container slds-context-bar__button" title="Description of the icon when needed">
    <span class="slds-icon-waffle">
    <span class="slds-r1"></span>
    <span class="slds-r2"></span>
    <span class="slds-r3"></span>
    <span class="slds-r4"></span>
    <span class="slds-r5"></span>
    <span class="slds-r6"></span>
    <span class="slds-r7"></span>
    <span class="slds-r8"></span>
    <span class="slds-r9"></span>
    </span>
    <span class="slds-assistive-text">Open App Launcher</span>
    </button>
    </div>
    <span class="slds-context-bar__label-action slds-context-bar__app-name">
    <span class="slds-truncate" title="App Name">App Name</span>
    </span>
    </div>
    </div>
    <nav class="slds-context-bar__secondary" role="navigation">
    <ul class="slds-grid">
    <li class="slds-context-bar__item slds-is-active">
    <a href="javascript:void(0);" class="slds-context-bar__label-action" title="Home">
    <span class="slds-assistive-text">Current Page:</span>
    <span class="slds-truncate" title="Home">Home</span>
    </a>
    </li>
    <li class="slds-context-bar__item slds-context-bar__dropdown-trigger slds-dropdown-trigger slds-dropdown-trigger_click">
    <a href="javascript:void(0);" class="slds-context-bar__label-action" title="Menu Item">
    <span class="slds-truncate" title="Menu Item">Menu Item</span>
    </a>
    <div class="slds-context-bar__icon-action slds-p-left_none">
    <button class="slds-button slds-button_icon slds-button_icon slds-context-bar__button" aria-haspopup="true" title="Open menu item submenu">
    <svg class="slds-button__icon" aria-hidden="true">
    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#chevrondown" />
    </svg>
    <span class="slds-assistive-text">Open menu item submenu</span>
    </button>
    </div>
    <div class="slds-dropdown slds-dropdown_right">
    <ul class="slds-dropdown__list" role="menu">
    <li class="slds-dropdown__item" role="presentation">
    <a href="javascript:void(0);" role="menuitem" tabindex="-1">
    <span class="slds-truncate" title="Main action">
    <svg class="slds-icon slds-icon_x-small slds-icon-text-default slds-m-right_x-small" aria-hidden="true">
    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#add" />
    </svg>Main action</span>
    </a>
    </li>
    <li class="slds-dropdown__header slds-has-divider_top-space" role="separator">
    <span>Menu header</span>
    </li>
    <li class="slds-dropdown__item" role="presentation">
    <a href="javascript:void(0);" role="menuitem" tabindex="-1">
    <span class="slds-truncate" title="Menu Item One">Menu Item One</span>
    </a>
    </li>
    <li class="slds-dropdown__item" role="presentation">
    <a href="javascript:void(0);" role="menuitem" tabindex="-1">
    <span class="slds-truncate" title="Menu Item Two">Menu Item Two</span>
    </a>
    </li>
    <li class="slds-dropdown__item" role="presentation">
    <a href="javascript:void(0);" role="menuitem" tabindex="-1">
    <span class="slds-truncate" title="Menu Item Three">Menu Item Three</span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="slds-context-bar__item">
    <a href="javascript:void(0);" class="slds-context-bar__label-action" title="Menu Item">
    <span class="slds-truncate" title="Menu Item">Menu Item</span>
    </a>
    </li>
    <li class="slds-context-bar__item">
    <a href="javascript:void(0);" class="slds-context-bar__label-action" title="Menu Item">
    <span class="slds-truncate" title="Menu Item">Menu Item</span>
    </a>
    </li>
    <li class="slds-context-bar__item">
    <a href="javascript:void(0);" class="slds-context-bar__label-action" title="Menu Item">
    <span class="slds-truncate" title="Menu Item">Menu Item</span>
    </a>
    </li>
    </ul>
    </nav>
    </div>
  </div>

  <!-- page header -->
  <div class="slds-p-horizontal_x-small slds-p-top_small">
    <div class="slds-page-header">
      <div class="slds-page-header__row">
        <div class="slds-page-header__col-title">
          <div class="slds-media">
            <div class="slds-media__figure">
              <span class="slds-icon_container slds-icon-standard-opportunity" title="opportunity">
                <svg class="slds-icon slds-page-header__icon" aria-hidden="true">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/standard-sprite/svg/symbols.svg#opportunity" />
                </svg>
                <span class="slds-assistive-text">opportunity</span>
              </span>
            </div>
            <div class="slds-media__body">
              <div class="slds-page-header__name">
                <div class="slds-page-header__name-title">
                  <h1>
                    <span class="slds-page-header__title slds-truncate" title="Rohde Corp - 80,000 Widgets">Rohde Corp - 80,000 Widgets</span>
                  </h1>
                </div>
              </div>
              <p class="slds-page-header__name-meta">Mark Jaeckal • Unlimited Customer • 11/13/15</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- path -->
  <div class="slds-p-horizontal_x-small slds-p-top_small">
    <article class="slds-card">
      <div class="slds-path slds-path_has-coaching">
        <div class="slds-grid slds-path__track">
          <div class="slds-grid slds-path__scroller-container">
            <button class="slds-button slds-button_icon slds-button_icon-border-filled slds-path__trigger" title="Toggle Sales Coaching" aria-expanded="false" aria-controls="path-coaching-1">
              <svg class="slds-button__icon" aria-hidden="true">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#chevronright" />
              </svg>
              <span class="slds-assistive-text">Show Details</span>
            </button>
            <div class="slds-path__scroller" role="application">
              <div class="slds-path__scroller_inner">
                <ul class="slds-path__nav" role="listbox" aria-orientation="horizontal">
                  <li class="slds-path__item slds-is-complete" role="presentation">
                    <a aria-selected="false" class="slds-path__link" href="javascript:void(0);" id="path-21" role="option" tabindex="-1">
                      <span class="slds-path__stage">
                        <svg class="slds-icon slds-icon_x-small" aria-hidden="true">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#check" />
                        </svg>
                        <span class="slds-assistive-text">Stage Complete</span>
                      </span>
                      <span class="slds-path__title">Contacted</span>
                    </a>
                  </li>
                  <li class="slds-path__item slds-is-complete" role="presentation">
                    <a aria-selected="false" class="slds-path__link" href="javascript:void(0);" id="path-22" role="option" tabindex="-1">
                      <span class="slds-path__stage">
                        <svg class="slds-icon slds-icon_x-small" aria-hidden="true">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#check" />
                        </svg>
                        <span class="slds-assistive-text">Stage Complete</span>
                      </span>
                      <span class="slds-path__title">Open</span>
                    </a>
                  </li>
                  <li class="slds-path__item slds-is-active slds-is-current" role="presentation">
                    <a aria-selected="true" class="slds-path__link" href="javascript:void(0);" id="path-23" role="option" tabindex="0">
                      <span class="slds-path__stage">
                        <svg class="slds-icon slds-icon_x-small" aria-hidden="true">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#check" />
                        </svg>
                        <span class="slds-assistive-text">Current Stage:</span>
                      </span>
                      <span class="slds-path__title">Unqualified</span>
                    </a>
                  </li>
                  <li class="slds-path__item slds-is-incomplete" role="presentation">
                    <a aria-selected="false" class="slds-path__link" href="javascript:void(0);" id="path-24" role="option" tabindex="-1">
                      <span class="slds-path__stage">
                        <svg class="slds-icon slds-icon_x-small" aria-hidden="true">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#check" />
                        </svg>
                      </span>
                      <span class="slds-path__title">Nurturing</span>
                    </a>
                  </li>
                  <li class="slds-path__item slds-is-incomplete" role="presentation">
                    <a aria-selected="false" class="slds-path__link" href="javascript:void(0);" id="path-25" role="option" tabindex="-1">
                      <span class="slds-path__stage">
                        <svg class="slds-icon slds-icon_x-small" aria-hidden="true">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#check" />
                        </svg>
                      </span>
                      <span class="slds-path__title">Closed</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="slds-grid slds-path__action">
            <span class="slds-path__stage-name">Stage: Unqualified</span>
            <button class="slds-button slds-button_brand slds-path__mark-complete">
              <svg class="slds-button__icon slds-button__icon_left" aria-hidden="true">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#check" />
              </svg>Mark Status as Complete</button>
          </div>
        </div>
        <div class="slds-path__content slds-is-collapsed" id="path-coaching-1">
          <div class="slds-path__coach slds-grid">
            <div class="slds-path__keys">
              <div class="slds-grid slds-grid_align-spread slds-path__coach-title">
                <h2>Key Fields This Stage</h2>
                <button class="slds-button slds-path__coach-edit slds-text-body_small">Edit</button>
              </div>
              <div class="slds-form" role="list">
                <div class="slds-form__row">
                  <div class="slds-form__item" role="listitem">
                    <div class="slds-form-element slds-form-element_edit slds-form-element_readonly slds-form-element_stacked slds-hint-parent">
                      <span class="slds-form-element__label">Expected Budget</span>
                      <div class="slds-form-element__control">
                        <div class="slds-form-element__static">$10,000</div>
                        <button class="slds-button slds-button_icon" title="Edit: Expected Budget">
                          <svg class="slds-button__icon slds-button__icon_hint" aria-hidden="true">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#edit" />
                          </svg>
                          <span class="slds-assistive-text">Edit: Expected Budget</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="slds-form__row">
                  <div class="slds-form__item" role="listitem">
                    <div class="slds-form-element slds-form-element_edit slds-form-element_readonly slds-form-element_stacked slds-hint-parent">
                      <span class="slds-form-element__label">Lead Source</span>
                      <div class="slds-form-element__control">
                        <div class="slds-form-element__static">Marketing and Web Referral</div>
                        <button class="slds-button slds-button_icon" title="Edit: Lead Source">
                          <svg class="slds-button__icon slds-button__icon_hint" aria-hidden="true">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#edit" />
                          </svg>
                          <span class="slds-assistive-text">Edit: Lead Source</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="slds-form__row">
                  <div class="slds-form__item" role="listitem">
                    <div class="slds-form-element slds-form-element_edit slds-form-element_readonly slds-form-element_stacked slds-hint-parent">
                      <span class="slds-form-element__label">Support Engineer</span>
                      <div class="slds-form-element__control">
                        <div class="slds-form-element__static">Jane Authur</div>
                        <button class="slds-button slds-button_icon" title="Edit: Support Engineer">
                          <svg class="slds-button__icon slds-button__icon_hint" aria-hidden="true">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#edit" />
                          </svg>
                          <span class="slds-assistive-text">Edit: Support Engineer</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="slds-path__guidance">
              <h2 class="slds-path__coach-title">Guidance for Success</h2>
              <div class="slds-text-longform slds-path__guidance-content">
                <p>Regularly cross-sell related products using <a href="javascript:void(0);">cross-sell tactics and principles</a>.</p>
                <p>Prepare demo deck using the <a href="javascript:void(0);">latest template</a> and review with Marketing and Sales teams. Review demo copy with Legal and Doc team.</p>
                <p>Look up <a href="javascript:void(0);">needs analysis principles</a> and review selling plan with Sales Engineer.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </div>

  <!-- grid -->

  <div class="slds-grid slds-gutters slds-gutters_x-small slds-wrap">
    <!-- col 1 -->
    <div class="slds-col slds-order_2 slds-large-order_1 slds-size_1-of-1 slds-large-size_8-of-12">
      <div class="slds-p-horizontal_x-small slds-p-top_small">
        <div class="slds-card">
          <div class="slds-p-around_medium">My Component</div>

        </div>
        <div class="slds-card">
          <div class="slds-p-around_medium">My Component</div>
        </div>
      </div>
    </div>
    <!-- col 2 -->
    <div class="slds-col slds-order_1 slds-large-order_2 slds-size_1-of-1 slds-large-size_4-of-12">
      <!-- chat -->
      <section class="slds-p-horizontal_x-small slds-p-top_small">
        <article class="slds-card ">
        <div class="slds-card__header slds-grid">
          <header class="slds-media slds-media_center slds-has-flexi-truncate">
            <div class="slds-media__figure">
              <span class="slds-icon_container slds-icon-standard-account" title="account">
                <svg class="slds-icon slds-icon_small" aria-hidden="true">
                  <use xlink:href="/assets/icons/standard-sprite/svg/symbols.svg#account"></use>
                </svg>
                <span class="slds-assistive-text">chat</span>
              </span>
            </div>
            <div class="slds-media__body">
              <h2 class="slds-card__header-title">
                <a href="javascript:void(0);" class="slds-card__header-link slds-truncate" title="Accounts">
                  <span>Chat</span>
                </a>
              </h2>
            </div>
            <div class="slds-no-flex">
              <button class="slds-button slds-button_neutral">New</button>
            </div>
          </header>
        </div>
        <div class="slds-card__body slds-card__body_inner">
          <!-- <div class="slds-p-horizontal_x-small slds-p-top_large"> -->
          <section role="log" class="slds-chat">
              <ul class="slds-chat-list">
                <li class="slds-chat-listitem slds-chat-listitem_bookend">
                  <div class="slds-chat-bookend">
                    <span class="slds-icon_container slds-icon-utility-chat slds-chat-icon">
                      <svg class="slds-icon slds-icon_x-small slds-icon-text-default" aria-hidden="true">
                        <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#chat"></use>
                      </svg>
                    </span>
                    <p>Chat started by
                      <b>Andy Martinez</b> • 4:58 PM</p>
                  </div>
                </li>
                <li class="slds-chat-listitem slds-chat-listitem_inbound">
                  <div class="slds-chat-message">
                    <span aria-hidden="true" class="slds-avatar slds-avatar_circle slds-chat-avatar">
                      <abbr class="slds-avatar__initials slds-avatar__initials_inverse" title="Andy Martinez">AM</abbr>
                    </span>
                    <div class="slds-chat-message__body">
                      <div class="slds-chat-message__text slds-chat-message__text_inbound">
                        <span>Hi, my CloudWidget only speaks French</span>
                      </div>
                      <div class="slds-chat-message__meta" aria-label="said Andy Martinez at 4:59 PM">Andy Martinez • 4:59 PM</div>
                    </div>
                  </div>
                </li>
                <li class="slds-chat-listitem slds-chat-listitem_outbound">
                  <div class="slds-chat-message">
                    <div class="slds-chat-message__body">
                      <div class="slds-chat-message__text slds-chat-message__text_outbound-agent">
                        <span>Hi Andy, thank you for contacting Widget Support. Can you please tell me what language you are trying to program on your CloudWidget?</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="slds-chat-listitem slds-chat-listitem_outbound">
                  <div class="slds-chat-message">
                    <div class="slds-chat-message__body">
                      <div class="slds-chat-message__text slds-chat-message__text_outbound-agent">
                        <span>Have you tried turning it off and on again?</span>
                      </div>
                      <div class="slds-chat-message__meta" aria-label="said Jason Dewar at 5:02 PM">Jason Dewar • 5:02 PM</div>
                    </div>
                  </div>
                </li>
                <li class="slds-chat-listitem slds-chat-listitem_inbound">
                  <div class="slds-chat-message">
                    <span aria-hidden="true" class="slds-avatar slds-avatar_circle slds-chat-avatar">
                      <abbr class="slds-avatar__initials slds-avatar__initials_inverse" title="Andy Martinez">AM</abbr>
                    </span>
                    <div class="slds-chat-message__body">
                      <div class="slds-chat-message__text slds-chat-message__text_inbound">
                        <span>yes, of course</span>
                      </div>
                      <div class="slds-chat-message__meta" aria-label="said Andy Martinez at 5:09 PM">Andy Martinez • 5:09 PM</div>
                    </div>
                  </div>
                </li>
                <li class="slds-chat-listitem slds-chat-listitem_outbound">
                  <div class="slds-chat-message">
                    <div class="slds-chat-message__body">
                      <div class="slds-chat-message__text slds-chat-message__text_outbound-agent">
                        <span>Sorry to hear that. Let me transfer you to a more technical support member. Thank you for your patience!</span>
                      </div>
                      <div class="slds-chat-message__meta" aria-label="said Jason Dewar at 5:15 PM">Jason Dewar • 5:15 PM</div>
                    </div>
                  </div>
                </li>
                <li class="slds-chat-listitem slds-chat-listitem_event">
                  <div class="slds-chat-event">
                    <div class="slds-chat-event__rule"></div>
                    <div class="slds-chat-event__body">
                      <span class="slds-icon_container slds-icon-utility-change_owner slds-chat-icon">
                        <svg class="slds-icon slds-icon_x-small slds-icon-text-default" aria-hidden="true">
                          <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#change_owner"></use>
                        </svg>
                      </span>
                      <p>
                        <b>Jason Dewar</b> sent a transfer request to
                        <b>Technical Support Team</b> • 5:19 PM</p>
                    </div>
                    <div class="slds-chat-event__rule"></div>
                    <div class="slds-chat-event__agent-message">Andy needs help changing the language on his CloudWidget</div>
                  </div>
                </li>
                <li class="slds-chat-listitem slds-chat-listitem_event">
                  <div class="slds-chat-event">
                    <div class="slds-chat-event__rule"></div>
                    <div class="slds-chat-event__body">
                      <span class="slds-icon_container slds-icon-utility-change_owner slds-chat-icon">
                        <svg class="slds-icon slds-icon_x-small slds-icon-text-default" aria-hidden="true">
                          <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#change_owner"></use>
                        </svg>
                      </span>
                      <p>
                        <b>Technical Support Team</b> accepted the transfer request • 5:20 PM</p>
                    </div>
                    <div class="slds-chat-event__rule"></div>
                  </div>
                </li>
                <li class="slds-chat-listitem slds-chat-listitem_event">
                  <div class="slds-chat-event">
                    <div class="slds-chat-event__rule"></div>
                    <div class="slds-chat-event__body">
                      <span class="slds-icon_container slds-icon-utility-change_owner slds-chat-icon">
                        <svg class="slds-icon slds-icon_x-small slds-icon-text-default" aria-hidden="true">
                          <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#change_owner"></use>
                        </svg>
                      </span>
                      <p>
                        <b>Amber Cann</b> accepted this chat • 5:22 PM</p>
                    </div>
                    <div class="slds-chat-event__rule"></div>
                  </div>
                </li>
                <li class="slds-chat-listitem slds-chat-listitem_outbound">
                  <div class="slds-chat-message">
                    <div class="slds-chat-message__body">
                      <div class="slds-chat-message__text slds-chat-message__text_outbound">
                        <span>Hi Andy, my name is Amber and I can help you solve your issue.</span>
                      </div>
                      <div class="slds-chat-message__meta" aria-label="said Amber Cann at 5:23 PM">Amber Cann • 5:23 PM</div>
                    </div>
                  </div>
                </li>
                <li class="slds-chat-listitem slds-chat-listitem_inbound">
                  <div class="slds-chat-message">
                    <span aria-hidden="true" class="slds-avatar slds-avatar_circle slds-chat-avatar">
                      <abbr class="slds-avatar__initials slds-avatar__initials_inverse" title="Andy Martinez">AM</abbr>
                    </span>
                    <div class="slds-chat-message__body">
                      <div class="slds-chat-message__text slds-chat-message__text_inbound">
                        <span>Nevermind, I speak french.</span>
                      </div>
                      <div class="slds-chat-message__meta" aria-label="said Andy Martinez at 5:29 PM">Andy Martinez • 5:29 PM</div>
                    </div>
                  </div>
                </li>
                <li class="slds-chat-listitem slds-chat-listitem_bookend">
                  <div class="slds-chat-bookend slds-chat-bookend_stop">
                    <span class="slds-icon_container slds-icon-utility-end_chat slds-chat-icon">
                      <svg class="slds-icon slds-icon_x-small slds-icon-text-default" aria-hidden="true">
                        <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#end_chat"></use>
                      </svg>
                    </span>
                    <p>Chat ended by
                      <b>Andy Martinez</b> • 5:30 PM</p>
                  </div>
                </li>
              </ul>
            </section>

          <!-- </div> -->
        </div>
        <footer class="slds-card__footer">
          <a class="slds-card__footer-action" href="javascript:void(0);">View All
            <span class="slds-assistive-text">Accounts</span>
          </a>
        </footer>
      </article>
      </section
    </div>
  </div>

  <!-- jquery -->
  <script
    src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

    <script>
    // Shorthand for $( document ).ready()
    $(function() {
        // console.log( "ready!" );
    });
    </script>

</body>
</html>
