<?php

/**
 * PluginKpi
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class PluginKpi extends BaseKpi
{
    public function getPrepared(array $array = array()) {
        $a = parent::getPrepared($array);
        if ($a) {
            $a['default_kpi'] = $this->_data['default_kpi'];
        }
        return $a;
    }
}