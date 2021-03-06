<?php
spl_autoload_register(
   function($class) {
      static $classes = null;
      if ($classes === null) {
         $classes = array(
            'bankaccount\\controller\\bankaccount' => '/controller/BankAccount.php',
            'bankaccount\\controller\\bankaccountlist' => '/controller/BankAccountList.php',
            'bankaccount\\framework\\controller\\controllerinterface' => '/framework/controller/Interface.php',
            'bankaccount\\framework\\controller\\exception' => '/framework/controller/Exception.php',
            'bankaccount\\framework\\factory\\controllerfactory' => '/framework/factory/ControllerFactory.php',
            'bankaccount\\framework\\factory\\mapperfactory' => '/framework/factory/MapperFactory.php',
            'bankaccount\\framework\\factory\\viewfactory' => '/framework/factory/ViewFactory.php',
            'bankaccount\\framework\\frontcontroller' => '/framework/FrontController.php',
            'bankaccount\\framework\\hashmap' => '/framework/HashMap.php',
            'bankaccount\\framework\\http\\request' => '/framework/http/Request.php',
            'bankaccount\\framework\\http\\response' => '/framework/http/Response.php',
            'bankaccount\\framework\\mapper\\exception' => '/framework/mapper/Exception.php',
            'bankaccount\\framework\\mapper\\identitymap' => '/framework/mapper/IdentityMap.php',
            'bankaccount\\framework\\router\\exception' => '/framework/router/Exception.php',
            'bankaccount\\framework\\router\\router' => '/framework/router/Router.php',
            'bankaccount\\framework\\view\\view' => '/framework/view/View.php',
            'bankaccount\\mapper\\bankaccount' => '/mapper/BankAccount.php',
            'bankaccount\\model\\bankaccount' => '/model/BankAccount.php',
            'bankaccount\\model\\bankaccountexception' => '/model/BankAccountException.php',
            'bankaccount\\view\\bankaccount' => '/view/BankAccount.php',
            'bankaccount\\view\\bankaccountlist' => '/view/BankAccountList.php'
          );
      }
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);
