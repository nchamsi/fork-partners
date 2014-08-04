<?php

namespace Frontend\Modules\Partners\Widgets;

/*
 * This file is part of Fork CMS.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use Frontend\Core\Engine\Base\Widget as FrontendBaseWidget;
use Frontend\Modules\Partners\Engine\Model as FrontendPartnersModel;
/**
 * This is a widget for the partner slideshow
 *
 * @author Jelmer Prins <jelmer@sumocoders.be>
 */
class Slideshow extends FrontendBaseWidget
{
    /**
     * Execute the extra
     */
    public function execute()
    {
        parent::execute();
        $this->loadTemplate();
        $this->parse();
    }

    /**
     * Parse
     */
    private function parse()
    {
        $this->tpl->assign('partners', FrontendPartnersModel::getSlidersPartners($this->data['partners_widget_id']));
    }
}