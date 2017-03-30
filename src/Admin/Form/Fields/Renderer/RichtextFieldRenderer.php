<?php

namespace CubeSystems\Leaf\Admin\Form\Fields\Renderer;

use CubeSystems\Leaf\Html\Elements\Element;

/**
 * Class RichtextFieldRenderer
 * @package CubeSystems\Leaf\Admin\Form\Fields\Renderer
 */
class RichtextFieldRenderer extends TextareaFieldRenderer
{
    /**
     * @var string
     */
    protected $type = 'richtext';

    /**
     * @var
     */
    protected $attachmentsUploadUrl;

    /**
     * @param $url
     * @return RichtextFieldRenderer
     */
    public function setAttachmentsUploadUrl( $url )
    {
        $this->attachmentsUploadUrl = $url;

        return $this;
    }

    /**
     * @return Element
     */
    protected function getInput()
    {
        $textarea = parent::getInput();
        $textarea->addClass( 'richtext' );
        $textarea->addAttributes( [
            'data-attachment-upload-url' => $this->attachmentsUploadUrl,
        ] );

        return $textarea;
    }
}