<?php
$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

$installer->startSetup();

$installer->run("

ALTER TABLE {$this->getTable('installment_master')} ADD installment_master_auto_adjust tinyint(1) unsigned NOT NULL DEFAULT '0';

");

$installer->endSetup();
