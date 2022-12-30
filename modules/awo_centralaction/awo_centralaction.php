<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class Awo_CentralAction extends module {
    public function __construct() {
        $this->name = "awo_centralaction";
        $this->tab = "back_office_features";
        $this->version = "1.0";
        $this->author = "AR-WEB-OUEST";
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7';
            'max' => _PS_VERSION_
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Module Central Action');
        $this->description = $this->l('Module de test');

        $this->confirmUninstall = $this->l('Voulez vous vraiment désinstaller ce module ?');

        if(!Configuration::get('AWO_CENTRAL_ACTION_PAGENAME')) {
            $this->warning = $this->l('Aucun nom fourni');
        }
    }

    public function install() {
        if(parent::install()) {
            return true;
        }

        return false;
    }

    public function uninstall() {
        if(parent::uninstall()) {
            return true;
        }

        return false;
    }
}

?>