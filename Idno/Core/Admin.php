<?php

    /**
     * Site administration
     *
     * @package idno
     * @subpackage core
     */

    namespace Idno\Core {

        class Admin extends \Idno\Common\Component
        {

            function registerPages()
            {
                site()->addPageHandler('/admin/?', '\Idno\Pages\Admin\Home');
                site()->addPageHandler('/admin/plugins/?', '\Idno\Pages\Admin\Plugins');
                site()->addPageHandler('/admin/dependencies/?', '\Idno\Pages\Admin\Dependencies');
                site()->addPageHandler('/admin/about/?', '\Idno\Pages\Admin\About');
            }

        }

    }