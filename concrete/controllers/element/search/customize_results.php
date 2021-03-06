<?php
namespace Concrete\Controller\Element\Search;

use Concrete\Core\Controller\ElementController;
use Concrete\Core\Search\ProviderInterface;

class CustomizeResults extends ElementController
{
    protected $provider;

    public function __construct(ProviderInterface $provider)
    {
        parent::__construct();
        $this->provider = $provider;
    }

    public function getElement()
    {
        return 'search/customize_results';
    }

    public function view()
    {
        $this->set('provider', $this->provider);
    }
}
