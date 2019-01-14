<?php
namespace Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model;

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
 * Skill
 */
class Skill extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * catégories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Category>
     * @lazy
     */
    protected $categories = null;

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Category
     *
     * @param \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Category $category)
    {
        $this->categories->attach($category);
    }

    /**
     * Removes a Category
     *
     * @param \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Category $categoryToRemove)
    {
        $this->categories->detach($categoryToRemove);
    }

    /**
     * Returns the categories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Category> $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets the categories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Category> $categories
     * @return void
     */
    public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories)
    {
        $this->categories = $categories;
    }
}
