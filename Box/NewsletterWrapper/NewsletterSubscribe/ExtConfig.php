<?php
class Theme_Box_NewsletterWrapper_NewsletterSubscribe_ExtConfig extends Kwc_NewsletterCategory_Subscribe_ExtConfig
{
    protected function _getConfig()
    {
        $config = $this->_getStandardConfig('kwf.autogrid', 'Categories', trlKwf('Newsletter Anmeldung'), new Kwf_Asset('application_form'));
        return array(
            'categories' => $config
        );
    }
}
