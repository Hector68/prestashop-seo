<?php
use PrestaShop\PrestaShop\Adapter\EntityMapper;
use PrestaShop\PrestaShop\Core\Foundation\Database\EntityManager;

if (!defined('_PS_VERSION_')) {
    exit;
}


class Prestashop_Url extends Module
{

    private $entity_manager;

    private $entity_mapper;

    public function __construct(EntityManager $entity_manager, EntityMapper $entity_mapper)
    {
        $this->name = 'prestashop_url';
        $this->tab = 'seo';
        $this->version = '1';
        $this->author = 'Hector68';
        $this->need_instance = 0;
        $this->bootstrap = true;
        parent::__construct();

        $this->entity_manager = $entity_manager;
        $this->entity_mapper = $entity_mapper;

    }

    public function getContent()
    {

        $category = $this->entity_manager->getRepository('Category');
        $ssss = \PrestaShop\PrestaShop\Adapter\ServiceLocator::get("\\PrestaShop\\PrestaShop\\Adapter\\EntityMapper");;
        $llllss = $this->entity_manager->getEntityMetaData('Category');


        foreach ($category->findAll() as $cat) {
            /***
             * @var $cat Category
             */
           $dd222 = $cat->getFieldByLang('link_rewrite', 1);
            $lllsss = $this->entity_mapper->load($cat->id, 1, $cat, $cat->getDefinition(), 1, 0);

            $dd = $cat->link_rewrite;
            $dd = 1;
        }

        return '333';
    }

}