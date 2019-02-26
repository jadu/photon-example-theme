<?php

namespace ExampleTheme\Page\UtilitiesContent;

use Photon\Core\Controller\Page;
use Photon\CmsEngine\Model\Element\Page as PageElement;
use Photon\CmsEngine\Model\Element\Article;

class ThemeDemoController extends Page
{
    const TEMPLATE_PATH = 'pages/utilities_content/demo.html.twig';

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function __invoke()
    {
        return $this->render(self::TEMPLATE_PATH, [
            'page' => $this->getPage()
        ]);
    }

    /**
     * @return PageElement
     */
    protected function getPage()
    {
        $page = new PageElement();
        $page->setContent(new Article());
        $page->setBodyClass('demo-article');
        return $page;
    }
}