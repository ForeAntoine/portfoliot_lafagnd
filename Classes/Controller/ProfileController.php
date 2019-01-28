<?php
namespace TLAFAGND\PortfoliotLafagnd\Controller;

/***
 *
 * This file is part of the "Portfolio TL AF AG ND" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Antoine Foré <fore.antoine@gmail.com>
 *           Tanguy Laveau <tang.laveau@hotmail.fr>
 *           Alexandre Gouguet <alexandregouguet@gmail.com>
 *           Nicolas Diot <nicolasdiot65@gmail.com>
 *
 ***/

/**
 * ProfileController
 */
class ProfileController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * profileRepository
     *
     * @var \TLAFAGND\PortfoliotLafagnd\Domain\Repository\ProfileRepository
     * @inject
     */
    protected $profileRepository = null;

    /**
     * action list
     *
     * @param TLAFAGND\PortfoliotLafagnd\Domain\Model\Profile
     * @return void
     */
    public function listAction()
    {
        $profiles = $this->profileRepository->findAll();
        $this->view->assign('profiles', $profiles);
    }

    /**
     * action show
     *
     * @param TLAFAGND\PortfoliotLafagnd\Domain\Model\Profile
     * @return void
     */
    public function showAction(\TLAFAGND\PortfoliotLafagnd\Domain\Model\Profile $profile)
    {
        $this->view->assign('profile', $profile);
    }
}
