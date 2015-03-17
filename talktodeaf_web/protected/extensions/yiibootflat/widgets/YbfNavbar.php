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
class YbfNavbar extends CWidget {

    const
            TYPE_INVERSE = 'inverse',
            TYPE_DEFAULT = 'default',
            TYPE_CLEAR = 'clear';

    public $encodeLabel = true;
    public $items;
    public $type = self::TYPE_DEFAULT;
    public $brand;
    public $brandUrl;
    public $searchUrl;
    public $searchIcon = 'search';
    public $searchPlaceholder;
    private $scheme;
    private $id;

    public function init() {
        $this->id = $this->getId();

        $this->scheme = 'navbar-default';
        if ($this->type == self::TYPE_INVERSE) {
            $this->scheme = 'navbar-inverse';
        } else if ($this->type == self::TYPE_CLEAR) {
            $this->scheme = '';
        }

        if ($this->encodeLabel) {
            $this->brand = CHtml::encode($this->brand);
        }
    }

    public function run() {
        if (count($this->items)) {
            ob_start();
            echo '<nav class="navbar ', $this->scheme, '" role="navigation">',
            '<div class="container-fluid">',
            '<div class="navbar-header">',
            '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#',
            $this->id, '">',
            '<span class="sr-only">Toggle</span>',
            '<span class="icon-bar"></span>',
            '<span class="icon-bar"></span>',
            '<span class="icon-bar"></span>',
            '</button>',
            '<a class="navbar-brand" href="', (!empty($this->brandUrl) ? $this->brandUrl : '#'),
            '">', $this->brand, '</a>',
            '</div>',
            '<div class="collapse navbar-collapse" id="', $this->id, '">',
            '<ul class="nav navbar-nav">';
            foreach ($this->items as $item) {
                if (is_string($item) && $item == '--') {
                    echo '<li class="divider"></li>';
                } else {

                    $label = (isset($item['label']) ? $item['label'] : '');
                    if (isset($item['encodeLabel']) && $item['encodeLabel'] === true && !empty($label)) {
                        $label = CHtml::encode($label);
                    }

                    if (isset($item['items']) && is_array($item['items'])) {
                        echo '<li class="dropdown">',
                        '<a href="#" class="dropdown-toggle" data-toggle="dropdown">', $label, ' <b class="caret"></b></a>',
                        '<ul class="dropdown-menu" role="menu">';
                        foreach ($item['items'] as $subItem) {
                            if (is_string($subItem)) {
                                if ($subItem == '--') {
                                    echo '<li class="divider"></li>';
                                } else {
                                    echo '<li class="dropdown-header">', CHtml::encode($subItem), '</li>';
                                }
                            } else {
                                $subLabel = (isset($subItem['label']) ? $subItem['label'] : '');
                                if (isset($subItem['encodeLabel']) && $subItem['encodeLabel'] === true && !empty($subLabel)) {
                                    $subLabel = CHtml::encode($subLabel);
                                }

                                $class = '';
                                if (isset($subItem['disabled']) && $subItem['disabled'] === true) {
                                    $class = ' class="disabled"';
                                }
                                echo '<li', $class, '><a href="', (isset($subItem['url']) ? $subItem['url'] : '#'),
                                '">', $subLabel, '</a></li>';
                            }
                        }
                        echo '</ul>',
                        '</li>';
                    } else {
                        $content = '';
                        if (isset($item['button']) && $item['button'] === true) {
                            $type = '';
                            if (!empty($item['type'])) {
                                $type = (' btn-' . $item['type']);
                            }
                            $content = ('<button type="button" class="btn' . $type .
                                    ' navbar-btn">' . $label . '</button>');
                        } else {
                            $content = ('<a href="' . (isset($item['url']) ? $item['url'] : '#') .
                                    '">' . $label . '</a>');
                        }

                        $class = '';
                        if (isset($item['disabled']) && $item['disabled'] === true) {
                            $class = ' class="disabled"';
                        }

                        echo '<li', $class, '>', $content, '</li>';
                    }
                }
            }
            echo '</ul>';
            if (!empty($this->searchUrl)) {
                echo '<form class="navbar-form navbar-right" role="search">',
                '<div class="form-search search-only">',
                '<i class="search-icon glyphicon glyphicon-', $this->searchIcon, '"></i>',
                '<input type="text" class="form-control search-query" placeholder="',
                $this->searchPlaceholder, '">',
                '</div>',
                '</form>';
            }
            echo '</div><!--/.navbar-collapse -->',
            '</div><!--/.container-fluid -->',
            '</nav>';

            echo ob_get_clean();
        }
    }

}
