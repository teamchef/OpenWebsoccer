<?php
/**
 * @author SOFORT AG (integration@sofort.com)
 * @link http://www.sofort.com/
 *
 * Copyright (c) 2013 SOFORT AG
 *
 * Released under the GNU LESSER GENERAL PUBLIC LICENSE (Version 3)
 * [http://www.gnu.org/licenses/lgpl.html]
 */

/**
 *
 * Implementation of a simple tag
 *
 */
class SofortTag extends SofortElement
{

    /**
     * @var string
     */
    public $tagname = '';

    /**
     * @var array
     */
    public $attributes = array();

    /**
     * @var array
     */
    public $children = array();


    /**
     * Constructor for SofortTag
     * @param string $tagname
     * @param array $attributes
     * @param array $children
     * @internal param $ (optional) array $attributes
     * @internal param $ (optional) array $children
     */
    public function __construct($tagname, array $attributes = array(), $children = array())
    {
        $this->tagname = $tagname;
        $this->attributes = $attributes;
        $this->children = is_array($children) ? $children : array($children);
    }


    /**
     * Renders the element (override)
     * @see SofortElement::render()
     * @return string
     */
    public function render()
    {
        $output = '';
        $attributes = '';

        foreach ($this->children as $child) {
            $output .= is_object($child) ? $child->render() : $child;
        }

        foreach ($this->attributes as $key => $value) {
            $attributes .= " $key=\"$value\"";
        }

        return $this->_render($output, $attributes);
    }


    /**
     * Render the output
     * @param string $output
     * @param string $attributes
     * @return string
     */
    protected function _render($output, $attributes)
    {
        return $output !== '' ? "<{$this->tagname}{$attributes}>{$output}</{$this->tagname}>" : "<{$this->tagname}{$attributes} />";
    }
}

?>