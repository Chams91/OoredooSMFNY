<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fr3d_ldap.security.authentication.provider' shared service.

return $this->services['fr3d_ldap.security.authentication.provider'] = new \FR3D\LdapBundle\Security\Authentication\LdapAuthenticationProvider(${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker()) && false ?: '_'}, '', '', ${($_ = isset($this->services['fr3d_ldap.ldap_manager.default']) ? $this->services['fr3d_ldap.ldap_manager.default'] : $this->load('getFr3dLdap_LdapManager_DefaultService.php')) && false ?: '_'}, true);
