      <div id="offCanvasRight" class="off-canvas position-right hide-for-large" data-off-canvas data-position="right" data-hide="large">
        <div id="search-canvas">
          <jdoc:include type="modules" name="search" style="none" />
        </div>
        
        <ul id="me2" class="vertical menu" data-drilldown data-parent-link="true">
            <jdoc:include type="modules" name="topbar-left" style="none" />
            <jdoc:include type="modules" name="topbar-right" style="none" />
            <li id="amenu"><h6>AUXILIARY MENU</h6></li>
            <jdoc:include type="modules" name="auxiliary-menu" style="none" />
        </ul>
      </div>

    <div class="off-canvas-content" data-off-canvas-content>

      <div class="title-bar hide-for-large" data-responsive-toggle="gwt-menu" data-hide-for="large">
        <div class="title-bar-left">
          <a href="http://www.gov.ph"><h1 class="title-bar-title">GOVPH</h1></a>
        </div>
        <div class="title-bar-right">
          <span class="title-bar-title">MENU</span>
          <button id="me" class="menu-icon" type="button" data-open="offCanvasRight"></button>  
        </div>
      </div>

      <!-- Top-Bar -->
      <div id="main-nav" class="show-for-large">
        <div data-sticky-container>
          <div class="sticky" data-sticky data-margin-top="0">
	          <div class="row">
		          <div class="large-12 columns">
			          <div id="gwt-menu" class="top-bar">
			              
                    <nav class="top-bar-left">
			                <ul class="nav dropdown menu" data-dropdown-menu>
			                  <li id="govph" class="name menu-text"><h1><a href="http://www.gov.ph">GOVPH</a></h1></li>
			                  <jdoc:include type="modules" name="topbar-left" style="none" />
			                </ul>
			              </nav>
			              
                    <nav class="top-bar-right">
			                <ul class="dropdown menu" data-dropdown-menu>
			                  <jdoc:include type="modules" name="topbar-right" style="none" />
			                  <li id="tb_search"><jdoc:include type="modules" name="search" style="none" /></li>
                        <li>

                          <button id="acc-button" type="button">
                            <span class="show-for-sr">Accessibility Button</span>
                            <i class="fa fa-universal-access fa-2x" aria-hidden="true"></i>
                          </button>
                          
                          <ul id="acc-widget" class="menu">
                            <li>
                              <a href="#" id="accessibility-statement" class="toggle-statement" data-toggle="a11y-modal" title="Accessibility Statement">
                                <span class="show-for-sr">Accessibility Statement</span>
                                <i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#" id="accessibility-contrast" class="toggle-contrast" title="Toggle High Contrast">
                                <span class="show-for-sr">Toggle High Contrast</span>
                                <i class="fa fa-low-vision fa-2x" aria-hidden="true"></i>
                              </a>
                            </li>
                            <!-- <li>
                              <a href="#" id="accessibility-grayscale" class="toggle-grayscale" title="Toggle Gray Scale">
                                <span class="show-for-sr">Toggle Gray Scale</span>
                                <i class="fa fa-adjust fa-2x" aria-hidden="true"></i>
                              </a>
                            </li> -->
                            <li>
                              <a href="#" id="stc" href="#" title="Skip to Content">
                                <span class="show-for-sr">Skip to Content</span>
                                <i class="fa fa-arrow-circle-o-down fa-2x" aria-hidden="true"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#" id="stf" href="#" title="Skip to Footer">
                                <span class="show-for-sr">Skip to Footer</span>
                                <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
                              </a>
                            </li>
                          </ul>
                        </li>
			                </ul>
			              </nav>

			          </div>
		          </div>
	          </div>
          </div>
        </div>
      </div>

    