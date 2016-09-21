<?php
namespace NL\UserBundle\Listener;

use Doctrine\ORM\EntityManager;


class ResetPasswordListener
{

  protected $_em;
  protected $_logger;

  public function __construct(EntityManager $em) {
    $this->_em = $em;
  }

  protected function generateRandomPassword () {
    $chaine ="mnoTUzS5678kVvwxy9WXYZRNCDEFrslq41GtuaHIJKpOPQA23LcdefghiBMbj0";
    srand((double)microtime()*1000000);
    $pass = "";
    for($i=0; $i<8; $i++){
        $pass .= $chaine[rand()%strlen($chaine)];
    }
    return $pass;
  }

  public function onResetPassword()
  {

    $userRepository = $this->_em->getRepository('NLUserBundle:User');
    $users = $userRepository->findAll();

    foreach ($users as $user) {
      $user->setPassword($this->generateRandomPassword());
    }

    $this->_em->flush();
  
  }

}