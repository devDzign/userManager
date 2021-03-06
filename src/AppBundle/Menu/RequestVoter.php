<?php
/**
 * Created by PhpStorm.
 * User: mchabour
 * Date: 28/02/2017
 * Time: 17:16
 */

namespace AppBundle\Menu;

use Knp\Menu\ItemInterface;
use Knp\Menu\Matcher\Voter\VoterInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class RequestVoter implements VoterInterface
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function matchItem(ItemInterface $item)
    {
        $request = $this->requestStack->getCurrentRequest();

        if ($item->getUri() === $request->getRequestUri()) {
            // URL's completely match
            return true;
        } else {
            if ($item->getUri() !== $request->getBaseUrl().'/' && substr(
                    $request->getRequestUri(),
                    0,
                    strlen($item->getUri())
                ) === $item->getUri()
            ) {
                // URL isn't just "/" and the first part of the URL match
                return true;
            }
        }

        return null;
    }

}