<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.performance.ccc.form_provider' shared service.

return $this->services['prestashop.adapter.performance.ccc.form_provider'] = new \PrestaShopBundle\Form\Admin\AdvancedParameters\Performance\PerformanceFormDataProvider(${($_ = isset($this->services['prestashop.adapter.ccc.configuration']) ? $this->services['prestashop.adapter.ccc.configuration'] : $this->load('getPrestashop_Adapter_Ccc_ConfigurationService.php')) && false ?: '_'});
