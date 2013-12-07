<?php

/*
 * This file is part of Fork CMS.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

/**
 * This is a frontend widget
 *
 * @author Wouter Verstuyf <wouter@webflow.be>
 */
class FrontendGalleriaWidgetCategory extends FrontendBaseWidget
{
  /**
   * @var array
   */
  private $record;

  /**
   * Exceute the action
   */
  public function execute()
  {
    parent::execute();

    $this->loadTemplate();
    $this->loadData();
    $this->parse();
  }

  /**
   * Load the data
   */
  private function loadData()
  {
    $this->records = FrontendGalleriaModel::getAlbumsForCategory($this->data['id']);
  }

  /**
   * Parse the widget
   */
  protected function parse()
  {
    $this->tpl->assign('widgetCategory', $this->records);
  }
}
