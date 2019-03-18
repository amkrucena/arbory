<?php

namespace Arbory\Base\Admin\Filter\Type;

use Arbory\Base\Admin\Filter\Type;
use Arbory\Base\Html\Elements\Content;
use Arbory\Base\Html\Html;

/**
 * Class Multiselect
 * @package Arbory\Base\Admin\Filter\Type
 */
class Multiselect extends Type
{
    /**
     * Filter constructor.
     * @param null $content
     */
    function __construct( $content ) {
        $this->content = $content;
    }

    /**
     * @return array
     * @throws \Arbory\Base\Exceptions\BadMethodCallException
     */
    protected function getCheckboxList() {
        foreach ( $this->content as $key => $value ) {
            $options[] = Html::label( [
                Html::input( $value )
                    ->setType( 'checkbox' )
                    ->addAttributes( [ 'value' => $key ] )
            ] );
        }

        return $options;
    }

    /**
     * @return Content
     * @throws \Arbory\Base\Exceptions\BadMethodCallException
     */
    public function render()
    {
        return new Content([
            Html::div( [
                $this->getCheckboxList(),
        ] )->addClass( 'multiselect' )
        ]);
    }
}
