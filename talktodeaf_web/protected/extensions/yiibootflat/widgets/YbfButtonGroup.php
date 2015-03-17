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

Yii::import('yiibootflat.widgets.YbfButton');

/**
 * @author Sérgio Lopes <knitter.is@gmail.com>
 * @copyright &copy; 2014, Sérgio Lopes
 * @license http://opensource.org/licenses/MIT
 * @version 1.0
 */
class YbfButtonGroup extends CWidget {

    const
            HORIZONTAL_GROUP = 'horizontal',
            VERTICAL_GROUP = 'vertical';

    public $buttons;
    public $type;
    public $orientation = self::HORIZONTAL_GROUP;
    private $buttonInstances;

    public function init() {
        if (count($this->buttons)) {
            $this->buttonInstances = array();
            foreach ($this->buttons as $button) {
                $instance = new YbfButton();

                foreach ($button as $key => $value) {
                    if (property_exists($instance, $key)) {
                        $instance->$key = $value;
                    }

                    if (empty($button['type']) && !empty($this->type)) {
                        $instance->type = $this->type;
                    }
                }

                $instance->init();
                $this->buttonInstances[] = $instance;
            }
        }
    }

    public function run() {
        if (count($this->buttonInstances)) {
            ob_start();
            if (empty($this->orientation) || $this->orientation == self::HORIZONTAL_GROUP) {
                echo '<div class="btn-group">';
            } else {
                echo '<div class="btn-group-vertical">';
            }

            foreach ($this->buttonInstances as $button) {
                echo $button->run();
            }
            echo '</div>';
            echo ob_get_clean();
        }
    }

}
