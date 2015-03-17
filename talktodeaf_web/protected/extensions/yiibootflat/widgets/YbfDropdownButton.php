<?php

/*
 * Copyright (c) 2014 Sérgio Lopes <knitter.is@gmail.com>
 * Yiibootflat, the extension that integrates Bootflat into Yii.
 * 
 * MIT licensed, http://opensource.org/licenses/MIT.
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * @author Sérgio Lopes <knitter.is@gmail.com>
 * @copyright &copy; 2014, Sérgio Lopes
 * @license http://opensource.org/licenses/MIT
 * @version 1.0
 */
class YbfDropdownButton extends CWidget {

    const
            TYPE_DEFAULT = 'default',
            TYPE_PRIMARY = 'primary',
            TYPE_SUCCESS = 'success',
            TYPE_INFO = 'info',
            TYPE_WARNING = 'warning',
            TYPE_DANGER = 'danger',
            TYPE_LINK = 'link';

    private static $CLASS_PREFIX = 'btn-';
    public $label;
    public $type;
    public $encodeLabel = true;
    public $items = array();
    public $class;
    public $segmented = false;
    private $subClass;

    public function init() {
        $classes = array('btn');

        $types = array(
            self::TYPE_DEFAULT, self::TYPE_PRIMARY, self::TYPE_SUCCESS,
            self::TYPE_INFO, self::TYPE_WARNING, self::TYPE_DANGER, self::TYPE_LINK
        );

        if (in_array($this->type, $types)) {
            $classes[] = (self::$CLASS_PREFIX . $this->type);
        }

        if ($this->encodeLabel && !empty($this->label)) {
            $this->label = CHtml::encode($this->label);
        }

        if (!$this->segmented) {
            $classes[] = 'dropdown-toggle';
        }

        if (!empty($this->class)) {
            $classes = array_merge($classes, explode(' ', $this->class));
        }
        $this->class = implode(' ', $classes);

        if ($this->segmented) {
            $classes[] = 'dropdown-toggle';
            $this->subClass = implode(' ', $classes);
        }
    }

    public function run() {
        if (count($this->items)) {
            ob_start();
            echo '<div class="btn-group">';
            if (!$this->segmented) {
                echo '<button type="button" class="', $this->class, '" data-toggle="dropdown">',
                $this->label, ' <span class="caret"></span></button>';
            } else {
                echo '<button type="button" class="', $this->class, '">', $this->label, '</button>',
                '<button type="button" class="', $this->subClass, '" data-toggle="dropdown">',
                '<span class="caret"></span>',
                '<span class="sr-only">Toggle</span>',
                '</button>';
            }
            echo '<ul class="dropdown-menu" role="menu">';
            foreach ($this->items as $item) {
                if (is_string($item) && $item == '--') {
                    echo '<li class="divider"></li>';
                } else {

                    $label = isset($item['label']) ? $item['label'] : '';
                    if (isset($item['encodeLabel']) && $item['encodeLabel'] === true && !empty($label)) {
                        $label = CHtml::encode($label);
                    }

                    if (!empty($item['icon'])) {
                        if (!empty($label)) {
                            $label = ('<i class="glyphicon glyphicon-' . $item['icon'] . '"></i> ' . $label);
                        } else {
                            $label = ('<i class="glyphicon glyphicon-' . $item['icon'] . '"></i>');
                        }
                    }

                    echo '<li><a href="', (isset($item['url']) ? $item['url'] : '#'), '">', $label, '</a></li>';
                }
            }
            echo '</ul></div>';

            echo ob_get_clean();
        }
    }

}
