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
class YbfComponent extends CApplicationComponent {

    public $forceCopyAssets = false;
    private $assetsUrl;

    public function registerCoreCss() {
        Yii::app()->clientScript->registerCssFile($this->getAssetsUrl() . '/css/bootstrap.min.css', '');
        Yii::app()->clientScript->registerCssFile($this->getAssetsUrl() . '/css/bootflat.min.css', '');
    }

    public function registerAllCss() {
        $this->registerCoreCss();
    }

    public function registerCoreScripts() {
        $core = Yii::app()->getClientScript();
        $core->registerCoreScript('jquery');
        $core->registerScriptFile($url = $this->getAssetsUrl() . '/js/bootstrap.min.js', CClientScript::POS_END);
    }

    public function registerAllScripts() {
        $this->registerCoreScripts();
    }

    public function register() {
        $this->registerAllCss();
        $this->registerAllScripts();
    }

    /**
     * @return string
     */
    protected function getAssetsUrl() {
        if (isset($this->assetsUrl)) {
            return $this->assetsUrl;
        } else {
            $assetsPath = Yii::getPathOfAlias('yiibootflat.assets');
            $assetsUrl = Yii::app()->assetManager->publish($assetsPath, false, -1, $this->forceCopyAssets);
            return $this->assetsUrl = $assetsUrl;
        }
    }

}
