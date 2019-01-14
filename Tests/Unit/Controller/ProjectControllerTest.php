<?php
namespace Pottfoliotlafagnd\PortfoliotLafagnd\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Antoine Foré <fore.antoine@gmail.com>
 * @author Tanguy Laveau <tang.laveau@hotmail.fr>
 * @author Alexandre Gouguet <alexandregouguet@gmail.com>
 * @author Nicolas Diot <nicolasdiot65@gmail.com>
 */
class ProjectControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Pottfoliotlafagnd\PortfoliotLafagnd\Controller\ProjectController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Pottfoliotlafagnd\PortfoliotLafagnd\Controller\ProjectController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllProjectsFromRepositoryAndAssignsThemToView()
    {

        $allProjects = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $projectRepository = $this->getMockBuilder(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Repository\ProjectRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $projectRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProjects));
        $this->inject($this->subject, 'projectRepository', $projectRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('projects', $allProjects);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenProjectToView()
    {
        $project = new \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Project();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('project', $project);

        $this->subject->showAction($project);
    }
}
