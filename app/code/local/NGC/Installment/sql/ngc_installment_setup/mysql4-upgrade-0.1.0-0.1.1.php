<?php
$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup();

$installer->run("

ALTER TABLE {$this->getTable('installment_type')} DROP PRIMARY KEY;
ALTER TABLE {$this->getTable('installment_type')} ADD id int UNSIGNED NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (id);

");

$installer->endSetup();
