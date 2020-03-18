<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-light menu-accordion menu-shadow">
  <!-- main menu header-->
  <div class="main-menu-header">
    <input type="text" placeholder="Search" class="menu-search form-control round"/>
  </div>
  <!-- / main menu header-->
  <!-- main menu content-->
  <div class="main-menu-content">
    <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
      <li class=" nav-item"><a href="<?php echo base_url();?>"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Home</span><!--<span class="tag tag tag-primary tag-pill float-xs-right mr-2">2</span>--></a></li>
    <li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Master Entry</span></a>
         <ul class="menu-content">
          <li><a href="<?php echo base_url('customer/customer_master');?>"  class="menu-item">Customer Master</a>
          </li>
          <li><a href="<?php echo base_url('master/common_master');?>"  class="menu-item">Common Master</a>
          </li>
          <li><a href="<?php echo base_url('master/department_master');?>"  class="menu-item">Department Master</a>
          </li>
          <li><a href="<?php echo base_url('master/mainTestMaster');?>"  class="menu-item">Main Test Master</a>
          </li>
          <li class="navigation-divider"></li>
          <li><a href="<?php echo base_url('master/subTestMaster');?>"  class="menu-item">Sub Test Master</a>
          </li>
          <li><a href="<?php echo base_url('master/testMethodMaster');?>"  class="menu-item">Test Method Master</a>
          </li>
          <li><a href="<?php echo base_url('master/rateCardMaster');?>"  class="menu-item">Rate Card Master</a>
          </li>
          <li><a href="<?php echo base_url('customer/customer_test_rate');?>"  class="menu-item">Customer Test Rate</a>
          </li>
          <li><a href="<?php echo base_url('master/testformmaster');?>"  class="menu-item">Test Form Master</a>
          </li>
          <li><a href="<?php echo base_url('master/elementMaster');?>"  class="menu-item">Element Master</a>
          </li>
          <li><a href="<?php echo base_url('master/elementTypeMaster');?>"  class="menu-item">Element Type Master</a>
          </li>
          <li><a href="<?php echo base_url('master/specificationMaster');?>"  class="menu-item">Specification Master</a>
          </li>
          <li><a href="<?php echo base_url('master/city_master');?>"  class="menu-item">City Master</a>
          </li>
          <li><a href="<?php echo base_url('master/observationMaster');?>"  class="menu-item">Enter Observation</a>
          </li>
          <li><a href="<?php echo base_url('master/materialMaster');?>"  class="menu-item">Material Master</a>
          </li>
          <li><a href="<?php echo base_url('master/accountMaster');?>"  class="menu-item">Account Master</a>
          </li>
          <li><a href="<?php echo base_url('master/productMaster');?>"  class="menu-item">Product Master</a>
          </li>
          <li><a href="<?php echo base_url('master/renewalMaster');?>"  class="menu-item">Renewal Master</a>
          </li>
          <li><a href="<?php echo base_url('master/supplier');?>"  class="menu-item">Supplier</a>
          </li>
          <li><a href="<?php echo base_url('master/materialMaster');?>"  class="menu-item">Material Master</a>
          </li>
          <li><a href="<?php echo base_url('master/vendor');?>"  class="menu-item">Vendor</a>
          </li>
          <li><a href="<?php echo base_url('master/serialno');?>"  class="menu-item">Serial No.</a>
          </li>
          <li><a href="<?php echo base_url('customer/working_notification');?>"  class="menu-item">Working Notification</a>
          </li>
          <li><a href="<?php echo base_url('');?>"  class="menu-item">Test Standard</a>
          </li>
        </ul>
      </li>
      <!-- <li class=" nav-item"><a href="#"><i class="icon-briefcase4"></i><span data-i18n="nav.project.main" class="menu-title">Pages</span></a>
        <ul class="menu-content">
          <li><a href="invoice-template.html" data-i18n="nav.invoice.invoice_template" class="menu-item">Invoice Template</a>
          </li>
          <li><a href="gallery-grid.html" data-i18n="nav.gallery_pages.gallery_grid" class="menu-item">Gallery Grid</a>
          </li>
          <li><a href="search-page.html" data-i18n="nav.search_pages.search_page" class="menu-item">Search Page</a>
          </li>
          <li><a href="search-website.html" data-i18n="nav.search_pages.search_website" class="menu-item">Search Website</a>
          </li>
          <li><a href="login-simple.html" data-i18n="nav.login_register_pages.login_simple" class="menu-item">Login Simple</a>
          </li>
          <li><a href="register-simple.html" data-i18n="nav.login_register_pages.register_simple" class="menu-item">Register Simple</a>
          </li>
          <li><a href="unlock-user.html" data-i18n="nav.login_register_pages.unlock_user" class="menu-item">Unlock User</a>
          </li>
          <li><a href="recover-password.html" data-i18n="nav.login_register_pages.recover_password" class="menu-item">Recover Password</a>
          </li>
          <li><a href="#" data-i18n="nav.error_pages.main" class="menu-item">Error</a>
            <ul class="menu-content">
              <li><a href="error-400.html" data-i18n="nav.error_pages.error_400" class="menu-item">Error 400</a>
              </li>
              <li><a href="error-401.html" data-i18n="nav.error_pages.error_401" class="menu-item">Error 401</a>
              </li>
              <li><a href="error-403.html" data-i18n="nav.error_pages.error_403" class="menu-item">Error 403</a>
              </li>
              <li><a href="error-404.html" data-i18n="nav.error_pages.error_404" class="menu-item">Error 404</a>
              </li>
              <li><a href="error-500.html" data-i18n="nav.error_pages.error_500" class="menu-item">Error 500</a>
              </li>
            </ul>
          </li>
          <li><a href="coming-soon-flat.html" data-i18n="nav.other_pages.coming_soon.coming_soon_flat" class="menu-item">Coming Soon</a>
          </li>
          <li><a href="under-maintenance.html" data-i18n="nav.other_pages.under_maintenance" class="menu-item">Maintenance</a>
          </li>
        </ul>
      </li> -->
      <li class=" nav-item"><a href="#"><i class="icon-ios-albums-outline"></i><span data-i18n="nav.cards.main" class="menu-title">Account</span></a>
        <ul class="menu-content">
          <li><a href="<?php echo base_url('account/'); ?>"  class="menu-item">Amount Recieved</a>
          </li>
        </ul>
      </li>
       <li class=" nav-item"><a href="#"><i class="icon-whatshot"></i><span data-i18n="nav.advance_cards.main" class="menu-title">Stock</span></a>
        <ul class="menu-content">
          <li><a href="card-statistics.html"  class="menu-item">Inward</a>
          </li>
          <li><a href="card-charts.html"  class="menu-item">Outward</a>
          </li>
        </ul>
      </li>
       <li class=" nav-item"><a href="#"><i class="icon-compass3"></i><span data-i18n="nav.content.main" class="menu-title">Reports</span></a>
        <ul class="menu-content">
          <li><a href="<?php echo base_url('customer/working_order');?>"  class="menu-item">Work Order Report</a>
          </li>
          <li><a href="<?php echo base_url('');?>"  class="menu-item">New Combine Test Report</a>
          </li>
          <li><a href="<?php echo base_url('');?>"  class="menu-item">Invoice Report</a>
          </li>
          <li><a href="<?php echo base_url('');?>"  class="menu-item">New Invoice Report</a>
          </li>
          <li><a href="<?php echo base_url('');?>"  class="menu-item">Transaction Report</a>
          </li>
          <li><a href="<?php echo base_url('');?>"  class="menu-item">Payment Received Report</a>
          </li>
          <li><a href="<?php echo base_url('');?>"  class="menu-item">Supplier Statement Report</a>
          </li>
          <li><a href="<?php echo base_url('');?>"  class="menu-item">Unpaid Bill</a>
          </li>
          <li><a href="<?php echo base_url('');?>"  class="menu-item">Internal Challan Cum Report</a>
          </li>
          <li><a href="<?php echo base_url('customer/customer_report');?>"  class="menu-item">Customer Report</a>
          </li>
        </ul>
      </li>
      <!-- <li class=" nav-item"><a href="#"><i class="icon-grid2"></i><span data-i18n="nav.components.main" class="menu-title">Components</span></a>
        <ul class="menu-content">
          <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Alerts</a>
          </li>
          <li><a href="component-buttons-basic.html" data-i18n="nav.components.components_buttons.component_buttons_basic" class="menu-item">Basic Buttons</a>
          </li>
          <li><a href="component-carousel.html" data-i18n="nav.components.component_carousel" class="menu-item">Carousel</a>
          </li>
          <li><a href="component-collapse.html" data-i18n="nav.components.component_collapse" class="menu-item">Collapse</a>
          </li>
          <li><a href="component-dropdowns.html" data-i18n="nav.components.component_dropdowns" class="menu-item">Dropdowns</a>
          </li>
          <li><a href="component-list-group.html" data-i18n="nav.components.component_list_group" class="menu-item">List Group</a>
          </li>
          <li><a href="component-modals.html" data-i18n="nav.components.component_modals" class="menu-item">Modals</a>
          </li>
          <li><a href="component-pagination.html" data-i18n="nav.components.component_pagination" class="menu-item">Pagination</a>
          </li>
          <li><a href="component-navs-component.html" data-i18n="nav.components.component_navs_component" class="menu-item">Navs Component</a>
          </li>
          <li><a href="component-tabs-component.html" data-i18n="nav.components.component_tabs_component" class="menu-item">Tabs Component</a>
          </li>
          <li><a href="component-pills-component.html" data-i18n="nav.components.component_pills_component" class="menu-item">Pills Component</a>
          </li>
          <li><a href="component-tooltips.html" data-i18n="nav.components.component_tooltips" class="menu-item">Tooltips</a>
          </li>
          <li><a href="component-popovers.html" data-i18n="nav.components.component_popovers" class="menu-item">Popovers</a>
          </li>
          <li><a href="component-tags.html" data-i18n="nav.components.component_tags" class="menu-item">Tags</a>
          </li>
          <li><a href="component-pill-tags.html" class="menu-item">Pill Tags</a>
          </li>
          <li><a href="component-progress.html" data-i18n="nav.components.component_progress" class="menu-item">Progress</a>
          </li>
          <li><a href="component-media-objects.html" data-i18n="nav.components.component_media_objects" class="menu-item">Media Objects</a>
          </li>
        </ul>
      </li> -->
      <!-- <li class=" nav-item"><a href="#"><i class="icon-eye6"></i><span data-i18n="nav.icons.main" class="menu-title">Icons</span></a>
        <ul class="menu-content">
          <li><a href="icons-feather.html" data-i18n="nav.icons.icons_feather" class="menu-item">Feather</a>
          </li>
          <li><a href="icons-ionicons.html" data-i18n="nav.icons.icons_ionicons" class="menu-item">Ionicons</a>
          </li>
          <li><a href="icons-fps-line.html" data-i18n="nav.icons.icons_fps_line" class="menu-item">FPS Line Icons</a>
          </li>
          <li><a href="icons-ico-moon.html" data-i18n="nav.icons.icons_ico_moon" class="menu-item">Ico Moon</a>
          </li>
          <li><a href="icons-font-awesome.html" data-i18n="nav.icons.icons_font_awesome" class="menu-item">Font Awesome</a>
          </li>
          <li><a href="icons-meteocons.html" data-i18n="nav.icons.icons_meteocons" class="menu-item">Meteocons</a>
          </li>
          <li><a href="icons-evil.html" data-i18n="nav.icons.icons_evil" class="menu-item">Evil Icons</a>
          </li>
          <li><a href="icons-linecons.html" data-i18n="nav.icons.icons_linecons" class="menu-item">Linecons</a>
          </li>
        </ul>
      </li> -->
      <li class="nav-item"><a href="<?php echo base_url('home/invoice');?>"><i class="icon-paper"></i><span  class="menu-title">Invoices</span></a></li>
      <li class="nav-item"><a href="<?php echo base_url('home/');?>"><i class="icon-users2"></i><span  class="menu-title">Users</span></a></li>
      <li class="nav-item"><a href="<?php echo base_url('employee/');?>"><i class="icon-user-tie"></i><span  class="menu-title">Employee</span></a></li>
      <li class="nav-item"><a href="<?php echo base_url('customer/sampleregistrationentery');?>"><i class="icon-profile"></i><span  class="menu-title">Sample Reg. Entry</span></a></li>
      <li class="nav-item"><a href="<?php echo base_url('home/');?>"><i class="icon-lab"></i><span  class="menu-title">Lab Analyst</span></a></li>
      <li class="nav-item"><a href="<?php echo base_url('home/');?>"><i class="icon-stats-dots"></i><span  class="menu-title">Sample Status</span></a></li>
      <li class="nav-item"><a href="<?php echo base_url('home/database_backup');?>"><i class="icon-database"></i><span  class="menu-title">Database Backup</span></a></li>
      <!--<li class=" nav-item"><a href="#"><i class="icon-bar-graph-2"></i><span data-i18n="nav.google_charts.main" class="menu-title">google Charts</span></a>
        <ul class="menu-content">
          <li><a href="google-bar-charts.html" data-i18n="nav.google_charts.google_bar_charts" class="menu-item">Bar charts</a>
          </li>
          <li><a href="google-line-charts.html" data-i18n="nav.google_charts.google_line_charts" class="menu-item">Line charts</a>
          </li>
          <li><a href="google-pie-charts.html" data-i18n="nav.google_charts.google_pie_charts" class="menu-item">Pie charts</a>
          </li>
        </ul>
      </li> -->
      <!-- <li class=" nav-item"><a href="#"><i class="icon-stats-dots"></i><span data-i18n="nav.chartjs.main" class="menu-title">Chartjs</span></a>
        <ul class="menu-content">
          <li><a href="chartjs-line-charts.html" data-i18n="nav.chartjs.chartjs_line_charts" class="menu-item">Line charts</a>
          </li>
          <li><a href="chartjs-bar-charts.html" data-i18n="nav.chartjs.chartjs_bar_charts" class="menu-item">Bar charts</a>
          </li>
          <li><a href="chartjs-pie-doughnut-charts.html" data-i18n="nav.chartjs.chartjs_pie_doughnut_charts" class="menu-item">Pie &amp; Doughnut charts</a>
          </li>
        </ul>
      </li> -->
      <!-- <li class=" nav-item"><a href="#"><i class="icon-pie-graph2"></i><span data-i18n="nav.flot_charts.main" class="menu-title">Flot Charts</span></a>
        <ul class="menu-content">
          <li><a href="flot-line-charts.html" data-i18n="nav.flot_charts.flot_line_charts" class="menu-item">Line charts</a>
          </li>
          <li><a href="flot-bar-charts.html" data-i18n="nav.flot_charts.flot_bar_charts" class="menu-item">Bar charts</a>
          </li>
          <li><a href="flot-pie-charts.html" data-i18n="nav.flot_charts.flot_pie_charts" class="menu-item">Pie charts</a>
          </li>
        </ul>
      </li> -->
      <!-- <li class=" nav-item"><a href="#"><i class="icon-map22"></i><span data-i18n="nav.maps.main" class="menu-title">Maps</span></a>
        <ul class="menu-content">
          <li><a href="gmaps-basic-maps.html" data-i18n="nav.maps.google_maps.gmaps_basic_maps" class="menu-item">Maps</a>
          </li>
          <li><a href="vector-maps-jvq.html" data-i18n="nav.maps.vector_maps.vector_maps_jvq" class="menu-item">Vector Maps</a>
          </li>
        </ul>
      </li> -->
      <!-- <li class=" nav-item"><a href="#"><i class="icon-paint-format"></i><span data-i18n="nav.color_palette.main" class="menu-title">Color Palette</span></a>
        <ul class="menu-content">
          <li><a href="color-palette-primary.html" data-i18n="nav.color_palette.color_palette_primary" class="menu-item">Primary palette</a>
          </li>
          <li><a href="color-palette-danger.html" data-i18n="nav.color_palette.color_palette_danger" class="menu-item">Danger palette</a>
          </li>
          <li><a href="color-palette-success.html" data-i18n="nav.color_palette.color_palette_success" class="menu-item">Success palette</a>
          </li>
          <li><a href="color-palette-warning.html" data-i18n="nav.color_palette.color_palette_warning" class="menu-item">Warning palette</a>
          </li>
          <li><a href="color-palette-info.html" data-i18n="nav.color_palette.color_palette_info" class="menu-item">Info palette</a>
          </li>
          <li class="navigation-divider"></li>
          <li><a href="color-palette-red.html" data-i18n="nav.color_palette.color_palette_red" class="menu-item">Red palette</a>
          </li>
          <li><a href="color-palette-pink.html" data-i18n="nav.color_palette.color_palette_pink" class="menu-item">Pink palette</a>
          </li>
          <li><a href="color-palette-purple.html" data-i18n="nav.color_palette.color_palette_purple" class="menu-item">Purple palette</a>
          </li>
          <li><a href="color-palette-deep-purple.html" data-i18n="nav.color_palette.color_palette_deep_purple" class="menu-item">Deep Purple palette</a>
          </li>
          <li><a href="color-palette-indigo.html" data-i18n="nav.color_palette.color_palette_indigo" class="menu-item">Indigo palette</a>
          </li>
          <li><a href="color-palette-blue.html" data-i18n="nav.color_palette.color_palette_blue" class="menu-item">Blue palette</a>
          </li>
          <li><a href="color-palette-light-blue.html" data-i18n="nav.color_palette.color_palette_light_blue" class="menu-item">Light Blue palette</a>
          </li>
          <li><a href="color-palette-cyan.html" data-i18n="nav.color_palette.color_palette_cyan" class="menu-item">Cyan palette</a>
          </li>
          <li><a href="color-palette-teal.html" data-i18n="nav.color_palette.color_palette_teal" class="menu-item">Teal palette</a>
          </li>
          <li><a href="color-palette-green.html" data-i18n="nav.color_palette.color_palette_green" class="menu-item">Green palette</a>
          </li>
          <li><a href="color-palette-light-green.html" data-i18n="nav.color_palette.color_palette_light_green" class="menu-item">Light Green palette</a>
          </li>
          <li><a href="color-palette-lime.html" data-i18n="nav.color_palette.color_palette_lime" class="menu-item">Lime palette</a>
          </li>
          <li><a href="color-palette-yellow.html" data-i18n="nav.color_palette.color_palette_yellow" class="menu-item">Yellow palette</a>
          </li>
          <li><a href="color-palette-amber.html" data-i18n="nav.color_palette.color_palette_amber" class="menu-item">Amber palette</a>
          </li>
          <li><a href="color-palette-orange.html" data-i18n="nav.color_palette.color_palette_orange" class="menu-item">Orange palette</a>
          </li>
          <li><a href="color-palette-deep-orange.html" data-i18n="nav.color_palette.color_palette_deep_orange" class="menu-item">Deep Orange palette</a>
          </li>
          <li><a href="color-palette-brown.html" data-i18n="nav.color_palette.color_palette_brown" class="menu-item">Brown palette</a>
          </li>
          <li><a href="color-palette-blue-grey.html" data-i18n="nav.color_palette.color_palette_blue_grey" class="menu-item">Blue Grey palette</a>
          </li>
          <li><a href="color-palette-grey.html" data-i18n="nav.color_palette.color_palette_grey" class="menu-item">Grey palette</a>
          </li>
        </ul>
      </li> -->
      <!-- <li class=" nav-item"><a href="changelog.html"><i class="icon-copy"></i><span data-i18n="nav.changelog.main" class="menu-title">Changelog</span><span class="tag tag tag-pill tag-danger float-xs-right">1.0</span></a>
      </li>
      <li class="disabled nav-item"><a href="#"><i class="icon-eye-disabled"></i><span data-i18n="nav.disabled_menu.main" class="menu-title">Disabled Menu</span></a>
      </li>
      <li class=" nav-item"><a href="#"><i class="icon-android-funnel"></i><span data-i18n="nav.menu_levels.main" class="menu-title">Menu levels</span></a>
        <ul class="menu-content">
          <li><a href="#" data-i18n="nav.menu_levels.second_level" class="menu-item">Second level</a>
          </li>
          <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Second level child</a>
            <ul class="menu-content">
              <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Third level</a>
              </li>
              <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.main" class="menu-item">Third level child</a>
                <ul class="menu-content">
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level1" class="menu-item">Fourth level</a>
                  </li>
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level2" class="menu-item">Fourth level</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li> -->
      <!-- <li class=" navigation-header"><span data-i18n="nav.category.support">Support</span><i data-toggle="tooltip" data-placement="right" data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i>
      </li>
      <li class=" nav-item"><a href="#"><i class="icon-support"></i><span data-i18n="nav.support_raise_support.main" class="menu-title">Raise Support</span></a>
      </li>
      <li class=" nav-item"><a href="#"><i class="icon-document-text"></i><span data-i18n="nav.support_documentation.main" class="menu-title">Documentation</span></a>
      </li> -->
    </ul>
  </div>
  <!-- /main menu content-->
  <!-- main menu footer-->
  <!-- include includes/menu-footer-->
  <!-- main menu footer-->
</div>
<!-- / main menu-->
