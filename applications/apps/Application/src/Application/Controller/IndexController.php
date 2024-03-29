<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    
    
    public function info(){
       
        $debug['PATH_APPLICATION'] = PATH_APPLICATION;
        $debug['PATH_PUBLIC'] = PATH_PUBLIC;
        $debug['PATH_MEDIA'] = PATH_MEDIA;
        $debug['PATH_TEMPLATE'] = PATH_TEMPLATE;
        $debug['PATH_DATA'] = PATH_DATA;
        
          var_dump($debug);
        
    }
    
}
