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
 * ProjectController
 */
class ProjectController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * projectRepository
     *
     * @var \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Repository\ProjectRepository
     * @inject
     */
    protected $projectRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $projects = $this->projectRepository->findAll();
        $this->view->assign('projects', $projects);
    }

    /**
     * action show
     *
     * @param \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Project $project
     * @return void
     */
    public function showAction(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Project $project)
    {
        $this->view->assign('project', $project);
    }

    /**
     * action highlight
     *
     * @return void
     */
    public function highlightAction()
    {

    }

    /**
     * action skills
     *
     * @return void
     */
    public function skillsAction()
    {

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
