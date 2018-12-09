<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.user.provider.concrete.chain_provider' shared service.

return $this->services['security.user.provider.concrete.chain_provider'] = new \Symfony\Component\Security\Core\User\ChainUserProvider(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['fos_user.user_provider.username']) ? $this->services['fos_user.user_provider.username'] : $this->load('getFosUser_UserProvider_UsernameService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['fr3d_ldap.security.user.provider']) ? $this->services['fr3d_ldap.security.user.provider'] : $this->load('getFr3dLdap_Security_User_ProviderService.php')) && false ?: '_'};
}, 2));