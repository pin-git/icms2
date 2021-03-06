<?php

$this->addBreadcrumb($country['name']);

$this->addToolButton(array(
    'class' => 'add',
    'title' => LANG_GEO_ADD_REGION,
    'href'  => $this->href_to('region', $country['id'])
));

$this->addToolButton(array(
    'class' => 'save',
    'title' => LANG_SAVE_ORDER,
    'href'  => null,
    'onclick' => "icms.datagrid.submit('{$this->href_to('regions_reorder')}')"
));

$this->renderGrid($this->href_to('regions', $country['id']), $grid);