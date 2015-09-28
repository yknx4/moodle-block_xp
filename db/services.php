<?php
$services = array(
        'level_up_service' => array(                                                //the name of the web service
          'functions' => array ('get_level','get_experience'), //web service functions of this service
          'requiredcapability' => '',                //if set, the web service user need this capability to access
                                                                              //any function of this service. For example: 'some/capability:specified'
          'restrictedusers' =>0,                                             //if enabled, the Moodle administrator must link some user to this service
                                                                              //into the administration
          'enabled'=>1,                                                       //if enabled, the service can be reachable on a default installation
       )
  );

  $functions = array(
      'get_level' => array(         //web service function name
          'classname'   => 'local_xp_external',  //class containing the external function
          'methodname'  => 'get_level',          //external function name
          'classpath'   => 'blocks/xp/externallib.php',  //file containing the class/external function
          'description' => 'Get player level.',    //human readable description of the web service function
          'type'        => 'read',                  //database rights of the web service function (read, write)
      ),
      'get_experience' => array(         //web service function name
          'classname'   => 'local_xp_external',  //class containing the external function
          'methodname'  => 'get_experience',          //external function name
          'classpath'   => 'blocks/xp/externallib.php',  //file containing the class/external function
          'description' => 'Creates player experience.',    //human readable description of the web service function
          'type'        => 'read',                  //database rights of the web service function (read, write)
      )
  );
