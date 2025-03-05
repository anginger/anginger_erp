<?php
/**
 * Copyright 2025 Anginger Platform
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace anginger\controllers;

use Yii;
use yii\base\Response;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex(): Response
    {
        return $this->asJson([
            'description' => 'Anginger ERP',
            'copyright' => '(c) 2025 Anginger Platform',
        ]);
    }

    public function actionError(): Response
    {
        $exception = Yii::$app->errorHandler->exception;
        return $this->asJson([
            'description' => 'Anginger Error',
            'reason' => $exception,
        ]);
    }
}
