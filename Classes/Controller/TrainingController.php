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
 * TrainingController
 */
class TrainingController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $trainings = $this->trainingRepository->findAll();
        $this->view->assign('trainings', $trainings);
    }

    /**
     * action show
     *
     * @param \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Training $training
     * @return void
     */
    public function showAction(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Training $training)
    {
        $this->view->assign('training', $training);
    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }
}
