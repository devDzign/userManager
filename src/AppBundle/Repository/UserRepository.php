<?php
/**
 * Created by PhpStorm.
 * User: mchabour
 * Date: 01/03/2017
 * Time: 11:02
 */

namespace AppBundle\Repository;


class UserRepository extends \Doctrine\ORM\EntityRepository
{

    public function myFindAll($username,$limit = "")
    {

        $qb = $this
            ->createQueryBuilder('u')
            ->select('u.id, u.username')
            ->where('u.username like :username')
            ->setParameter('username', '%'.$username.'%')
        ;


        if ($limit != "") {
            $qb->setMaxResults($limit);
        }


        return $qb->getQuery()->getResult();

    }
}