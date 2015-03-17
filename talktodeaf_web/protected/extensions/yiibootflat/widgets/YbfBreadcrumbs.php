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
class YbfBreadcrumbs extends CWidget {

    public $items;
    public $arrow;

    public function init() {
        
    }

    public function run() {
        if (count($this->items)) {
            ob_start();
            echo '<ol class="breadcrumb', ($this->arrow ? ' breadcrumb-arrow' : ''), '">';

            $last = array_pop($this->items);
            foreach ($this->items as $item) {

                $label = (isset($item['label']) ? $item['label'] : '');
                if (isset($item['encodeLabel']) && !empty($label)) {
                    $label = CHtml::encode($label);
                }

                if (isset($item['icon'])) {
                    $label = ('<i class="glyphicon glyphicon-' . $item['icon'] .
                            '"></i> ' . $label);
                }

                echo '<li>', '<a href="', (isset($item['url']) ? $item['url'] : '#'),
                '">', $label, '</a></li>';
            }

            $label = (isset($last['label']) ? $last['label'] : '');
            if (isset($last['encodeLabel']) && !empty($label)) {
                $label = CHtml::encode($label);
            }

            if (isset($last['icon'])) {
                $label = ('<i class="glyphicon glyphicon-' . $last['icon'] .
                        '"></i> ' . $label);
            }
            echo '<li><span>', $label, '</span></li>';

            echo '</ol>';
            echo ob_get_clean();
        }
    }

}
