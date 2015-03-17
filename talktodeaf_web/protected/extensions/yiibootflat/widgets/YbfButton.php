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
class YbfButton extends CWidget {

    const
            TYPE_DEFAULT = 'default',
            TYPE_PRIMARY = 'primary',
            TYPE_SUCCESS = 'success',
            TYPE_INFO = 'info',
            TYPE_WARNING = 'warning',
            TYPE_DANGER = 'danger',
            TYPE_LINK = 'link';
    const
            ICON_POS_PREPEND = 'prepend',
            ICON_POS_APPEND = 'append';

    private static $CLASS_PREFIX = 'btn-';
    public $label;
    public $htmlOptions;
    public $type;
    public $block;
    public $encodeLabel = true;
    public $icon;
    public $iconPosition = self::ICON_POS_PREPEND;
    public $submit;
    public $reset;

    /**
     * Initializes the widget.
     */
    public function init() {
        $classes = array('btn');

        $types = array(
            self::TYPE_DEFAULT, self::TYPE_PRIMARY, self::TYPE_SUCCESS,
            self::TYPE_INFO, self::TYPE_WARNING, self::TYPE_DANGER, self::TYPE_LINK
        );

        $this->htmlOptions = array();

        if (in_array($this->type, $types)) {
            $classes[] = (self::$CLASS_PREFIX . $this->type);
        }

        if ($this->block) {
            $classes[] = 'btn-block';
        }

        if ($this->encodeLabel && !empty($this->label)) {
            $this->label = CHtml::encode($this->label);
        }

        if (!empty($this->htmlOptions['class'])) {
            $classes = array_merge($classes, explode(' ', $this->htmlOptions['class']));
        }
        $this->htmlOptions['class'] = implode(' ', $classes);

        if (!empty($this->icon)) {
            if (!empty($this->label)) {
                if (empty($this->iconPosition) || $this->iconPosition == self::ICON_POS_PREPEND) {
                    $this->label = ('<i class="glyphicon glyphicon-' . $this->icon . '"></i> ' . $this->label);
                } else {
                    $this->label = ($this->label . ' <i class="glyphicon glyphicon-' . $this->icon . '"></i>');
                }
            } else {
                $this->label = ('<i class="glyphicon glyphicon-' . $this->icon . '"></i>');
            }
        }

        if ($this->submit) {
            $this->htmlOptions['type'] = 'submit';
        } else if ($this->reset) {
            $this->htmlOptions['type'] = 'reset';
        }
    }

    /**
     * Runs the widget.
     */
    public function run() {
        echo CHtml::htmlButton($this->label, $this->htmlOptions);
    }

}
