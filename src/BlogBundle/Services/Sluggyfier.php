<?php

namespace BlogBundle\Services;

use Doctrine\ORM\EntityManager;

/**
 * Class Sluggyfier
 * @package BlogBundle\Services
 */
class Sluggyfier
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * Sluggyfier constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * Get title of article, class request, and field request, and output Slug
     *
     * @param string $title
     * @param string $class
     * @param string $field
     * @return string
     */
    public function getSluggyfier(string $title, string $class, string $field): string
    {

        $lowerTitle = strtolower($title);
        $slug = str_replace(' ', '-', $lowerTitle);
        $articles = $this->em->getRepository($class)->findBy(array(
            $field => $slug
        ));
        $nbArticles = count($articles);

        if ($nbArticles > 0){
            $slug = $slug . '-' . ($nbArticles + 1);
        }

        return $slug;
    }
}